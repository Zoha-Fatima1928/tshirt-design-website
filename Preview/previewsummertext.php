<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <title>Preview Summer</title>
    <style>
    #imagePreview {
        text-align: center;
        margin-top: 20px;
    }

    #imagePreview img {
        max-width: 100%;
        max-height: 400px;
    }

    #previewText {
        margin-top:-280px;
        width:200px;
        font-size: 50px;
        margin-left:20px;
        display:flex;
        justify-content:center;
        position: relative;
        text-align: center;
        font-weight: bold;
        wrap:nowrap;
       
    }

    #shapeImg {
        position: absolute;
        width: 160px;
        height: 180px;
        margin-left: -280px;
        margin-top: 100px
    }

    #shapeImg2 {
        position: absolute;
        width: 160px;
        height: 130px;
        margin-left: -280px;
        margin-top: 140px
    }
    </style>
</head>

<body>
<?php  require('../Components/HeaderComponent2.php')?>
    <h1 style="text-align:center">Image Preview [Summer Tshirt]</h1>
    <div style="display:flex;justify-content:center; margin-top:20px" id="pic">
        <div id="imagePreview"> </div>
    </div>
    <div style="display:flex;justify-content:center">
    <div id="previewText"></div>
    </div>
<div style="display:flex;justify-content:center">
        <button onclick="captureAndDownloadImage()">Download Preview Image</button>
    </div>
    <br>
    <br><br>
    <?php require('../Components/FooterComponent.php') ?>
</body>

</html>

<script>
var selectedImage = localStorage.getItem("selectedImage");
var inputText = localStorage.getItem("inputText");
var fontSize = localStorage.getItem("fontSize");
var selectedColor = localStorage.getItem("selectedColor");
var savedFont = localStorage.getItem("selectedFont");
var selectedShapeImgSrc = localStorage.getItem("selectedShapeImgSrc");
var selecteduploadedimage = localStorage.getItem("uploadedImage");

var img = document.createElement("img");
    img.src = selectedImage;
    imagePreview.appendChild(img);

var text = document.createElement("p");
text.textContent = inputText;
text.style.fontSize = fontSize;
text.style.color = selectedColor;
text.style.fontFamily = savedFont;
var previewText = document.getElementById("previewText");
previewText.appendChild(text);



// Function to capture and download the image
function captureAndDownloadImage() {
            html2canvas(document.getElementById('pic')).then(function(canvas) {
                // Convert the canvas to an image data URL
                var imageDataURL = canvas.toDataURL("image/png");

                // Create a temporary link element
                var link = document.createElement('a');
                link.href = imageDataURL;
                link.download = "preview_image.png";

                // Simulate a click on the link element to trigger the download
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        }

        
        function captureAndDownloadImage() {
    html2canvas(document.getElementById('imagePreview')).then(function(canvas) {
        // Create a new canvas to overlay the text
        var overlayCanvas = document.createElement("canvas");
        overlayCanvas.width = canvas.width;
        overlayCanvas.height = canvas.height;
        var ctx = overlayCanvas.getContext("2d");

        // Draw the captured image on the overlay canvas
        ctx.drawImage(canvas, 0, 0);

        // Draw the preview text on the overlay canvas
        ctx.font = `${fontSize} ${savedFont}`;
        ctx.fillStyle = selectedColor;
        ctx.textAlign = "center"; // Align text to the center
        ctx.textBaseline = "middle"; // Align text vertically to the middle
        ctx.fontWeight = "bold"; // Apply font weight bold
        ctx.fontFamily = savedFont; // Apply font family

        // Calculate the maximum allowed width for the text
        var maxTextWidth = overlayCanvas.width - 200; // Adjust the value based on your needs

        // Wrap the text into multiple lines if it exceeds the maximum width
        var words = inputText.split(' ');
        var lines = [];
        var currentLine = words[0];
        for (var i = 1; i < words.length; i++) {
            var word = words[i];
            var lineWithWord = currentLine + ' ' + word;
            var lineWidth = ctx.measureText(lineWithWord).width;
            if (lineWidth < maxTextWidth) {
                currentLine = lineWithWord;
            } else {
                lines.push(currentLine);
                currentLine = word;
            }
        }
        lines.push(currentLine);

        // Calculate the starting y-coordinate for the text
        var textHeight = parseInt(fontSize, 10) * 1.5; // Adjust the value based on your font and line height
        var textY = (overlayCanvas.height - (textHeight * lines.length)) / 1.5;

        // Draw each line of text on the overlay canvas
        for (var j = 0; j < lines.length; j++) {
            var line = lines[j];
            ctx.fillText(line, overlayCanvas.width / 2, textY + (j * textHeight));
        }

        // Convert the overlay canvas to an image data URL
        var imageDataURL = overlayCanvas.toDataURL("image/png");

        // Create a temporary link element
        var link = document.createElement('a');
        link.href = imageDataURL;
        link.download = "preview_image.png";

        // Simulate a click on the link element to trigger the download
        link.click();
    });
}


</script>