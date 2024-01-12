<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <title>Preview page</title>
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
        display:flex;
        justify-content:center;
        position: relative;
        text-align: center;
        font-size: 50px;
    margin-top:-180px;
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
    <h1 style="text-align:center">Image Preview </h1>
    <div style="display:flex;justify-content:center; margin-top:50px" id="pic">
        <div id="imagePreview"></div>
    </div>

    <div>
        <div id="previewText"></div>
    </div>
    <br>
    <div style="display:flex;justify-content:center">
        <button onclick="captureAndDownloadImage()">Download Preview Image</button>
    </div>
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

if (selectedShapeImgSrc) {
    var img = document.createElement("img");
    img.src = selectedImage;
    img.onload = function() {
        var shapeImg = document.createElement("img");
        shapeImg.src = selectedShapeImgSrc;
        shapeImg.id = "shapeImg";
        var imagePreview = document.getElementById("imagePreview");
        imagePreview.appendChild(img);
        imagePreview.appendChild(shapeImg);
    };
} else {
    var img2 = document.createElement("img");
    img2.src = selectedImage;
    img2.onload = function() {
        var uploadedImg = document.createElement("img");
        uploadedImg.src = selecteduploadedimage;
        uploadedImg.id = "shapeImg2";
        var imagePreview2 = document.getElementById("imagePreview2");
        imagePreview.appendChild(img2);
        imagePreview.appendChild(uploadedImg);
    };
}

var text = document.createElement("p");
text.textContent = inputText;
text.style.fontSize = fontSize;
text.style.color = selectedColor;
text.style.fontFamily = savedFont;
var previewText = document.getElementById("previewText");
previewText.appendChild(text);


window.addEventListener('unload', function() {
    localStorage.clear(); // Clears all data in the local storage
});
// Function to capture and download the image
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
                ctx.textAlign = "center";
                ctx.fillText(inputText, overlayCanvas.width/2 , overlayCanvas.height - 70);

                // Convert the overlay canvas to an image data URL
                var imageDataURL = overlayCanvas.toDataURL("image/png");

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

</script>