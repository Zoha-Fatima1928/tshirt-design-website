<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Customization Of Women</title>
        <link rel="stylesheet" href="CSS/womensummer1.css" />
        <script src="./Javascript/womensummer1.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://www.w3schools.com/lib/w3.js"></script>
    </head>
    <body>
        
    <?php  require('./Components/HeaderComponent4.php')?>
        <br />

        <div style="display: flex; justify-content: center;">
            <div class="CustomizationArea">
                <h1 style="text-align: center; text-decoration: underline;">
                    Customization T-SHIRTS
                </h1>
                <br />
                <br />
                <div style="display: flex; justify-content: center; flex-direction: row;">
                    <div>
                        <img id="pic" src="./Images/Womens/Womens/Summer/shortsleeves2/women1.webp" width="400px" style="margin-left: 300px;" />
                        <div class="Class6">
                            <img id="triangle" src="./Images/Logo/womenlogos/women1.png" class="Class7" />
                        </div>
                        <div class="Class8">
                            <img id="circle" src="./Images/Logo/womenlogos/women2.png" class="Class9" />
                        </div>
                        <div class="Class10">
                            <img id="square" src="./Images/Logo/womenlogos/women3.png" class="Class11" />
                        </div>
                        <div class="Class12">
                            <img id="super" src="./Images/Logo/womenlogos/women4.png" class="Class13" />
                        </div>
                      </div>
                    <div class="DrawingArea" id="imageshow">
                        <div style="height: 130px;" id="ImageShown"></div>
                        <div style="display: flex; justify-content: center; margin-left: 20px; width: 40x; display: none; margin-top: -90px;" id="inputdiv" contenteditable="true">
                            <input type="text" class="InputTextStyle" maxlength="7" id="input" autofocus="autofocus" placeholder="Text Here" style="margin-top: 3px;" />
                        </div>
                    </div>
                </div>
                <div style="border: 5px solid gray; width: 300px; height: 150px; margin-left: 40px; margin-top: -380px; border-radius: 10px;">
                    <div>
                        <h1 style="text-align: center; text-decoration: underline;">Choose Color</h1>
                    </div>
                    <div style="display: flex; justify-content: center; margin-top: -5px;">
                        <button id="btn1" onclick="change1()" style="margin-left: 1px;"></button>
                        <button id="btn2" onclick="change2()" style="margin-left: 2px;"></button>
                        <button id="btn3" onclick="change3()" style="margin-left: 3px;"></button>
                    </div>
                    <br />
                  
                </div>

                <div style="border: 5px solid gray; width: 300px; height: 230px; margin-left: 40px; margin-top: 10px; border-radius: 10px;">
                    <h1 style="text-align: center; text-decoration: underline;">Text Customization</h1>
                    <div style="margin-top: -5px; display: flex; justify-content: center;">
                        <button style="margin-top: 10px; margin-left: 5px; height: 50px; font-weight: bold;" id="Button" onclick="w3.show('#inputdiv')">
                            Click Here To Add text
                        </button>

                        <button style="margin-top: 10px; margin-left: 5px; height: 50px; font-weight: bold;" id="SaveButton" onclick="myFunction()">
                            Save Text
                        </button>

                        <div>
                            <input type="color" style="margin-left: 5px; margin-top: 10px; height: 50px; margin-right: 5px;" oninput="changecolor(event)" />
                        </div>
                    </div>
                    <select id="fontSelector"  onchange="changeFont(this);" style="margin-left: 5px; height: 50px; margin-right: 5px; margin-top: 5px; width: 290px;">
                        <option value="SelectFont" selected><b>Font Style</b></option>
                        <option value="Arial">Arial</option>
                        <option value="Sans Serif">Sans Serif</option>
                        <option value="Comic Sans MS">Comic Sans MS</option>
                        <option value="Times New Roman">Times New Roman</option>
                        <option value="Courier New">Courier New</option>
                        <option value="Verdana">Verdana</option>
                        <option value="Trebuchet MS">Trebuchet MS</option>
                        <option value="Arial Black">Arial Black</option>
                        <option value="Impact">Impact</option>
                        <option value="Sofia">Sofia</option>
                    </select>

                    <div class="Class39">
                     
                        <button onclick="small()"> Small</button>
                        <button onclick="medium()">Medium</button>
                        <button onclick="large()">Large</button>
                
                    </div>
                </div>
                <div style="border: 5px solid gray; width: 300px; height: 150px; margin-left: 40px; margin-top: 10px; border-radius: 10px;">
                    <h1 style="text-align: center; text-decoration: underline;">Add Image/Logo</h1>
                    <div style="margin-top: -2px; display: flex; justify-content: center;">
                        <input onchange="handleImageUpload(event)"   style="margin-left: 60px;" type="file" id="inputimage" accept="image/png, image/jpg" />
                    </div>
                    <p style="text-align: center; margin-top: 20px; margin-left: 10px; font-weight: bold;">
                        ( Uploade Image without background )
                    </p>
                </div>
                <div class="Class33">
                    <h1 class="Class34">Select Shapes</h1>
                    <p style="margin-top: -20px; text-align: center;">USE ONLY ONE SHAPE AT A TIME</p>
                    <div class="Class35">
                        <div onclick="saveImageSource('triangle');w3.show('#triangle');w3.hide('#circle');w3.hide('#square');w3.hide('#super')" class="Class36">
                            <img src="./Images/Logo/womenlogos/women1.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="saveImageSource('circle');w3.show('#circle');w3.hide('#triangle');w3.hide('#square');w3.hide('#super')" class="Class37">
                            <img src="./Images/Logo/womenlogos/women2.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="saveImageSource('square');w3.show('#square');w3.hide('#triangle');w3.hide('#circle');w3.hide('#super')" class="Class38">
                            <img src="./Images/Logo/womenlogos/women3.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="saveImageSource('super');w3.show('#super');w3.hide('#triangle');w3.hide('#square');w3.hide('#circle')" class="Class38">
                            <img src="./Images/Logo/womenlogos/women4.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                    </div>
                    <div class="Class40">
                       
                   </div>
                </div>
                <br />
                <br />
                
        <button id="SaveButton2"  onclick="saveInputValue()">Save Image</button>
                <a href="./Preview/previewwomensummer1.php">Preview Image</a>
            </div>
            <br />
            <br />
        </div>
      
        <br />
        <br />
        <br />
        <div class="Footer">
            <h3 class="FooterHeading">T-Shirts ! Customized it</h3>
        </div>
    </body>


    <script>
        // function for text 
        function smaller() {
document.getElementById("inputdiv").style.fontSize = "20px";
localStorage.setItem("fontSize", "20px");
}
function small() {
document.getElementById("inputdiv").style.fontSize = "25px";
localStorage.setItem("fontSize", "25px");
}
function medium() {
document.getElementById("inputdiv").style.fontSize = "30px";
localStorage.setItem("fontSize", "30px");
}
function large() {
document.getElementById("inputdiv").style.fontSize = "33px";
localStorage.setItem("fontSize", "33px");
}
function larger() {
document.getElementById("inputdiv").style.fontSize = "50px";
localStorage.setItem("fontSize", "50px");
}

// New Javascript

function saveImageSource(shapeId) {
  // Hide all shapes except the selected one
  w3.hide('#triangle');
  w3.hide('#circle');
  w3.hide('#square');
  w3.hide('#super');
  w3.show('#' + shapeId);

  // Save the image source of the selected shape to local storage
  var imgSrc = document.getElementById(shapeId).src;
  localStorage.setItem('selectedShapeImgSrc', imgSrc);

  // Save the height and width of the selected shape
  var shapeElement = document.getElementById(shapeId);
  var shapeHeight = shapeElement.style.height;
  var shapeWidth = shapeElement.style.width;
  localStorage.setItem('selectedShapeHeight', shapeHeight);
  localStorage.setItem('selectedShapeWidth', shapeWidth);


  function saveShapeSize(height, width) {
  localStorage.setItem('selectedShapeHeight', height);
  localStorage.setItem('selectedShapeWidth', width);
}
}
function handleImageUpload(event) {
    var image = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function(event) {
      var selectedImage = event.target.result;
      // Store the selected image in localStorage or use it directly in your code
      localStorage.setItem("selectedImage", selectedImage);

      // Update the image preview
      var imagePreview = document.getElementById("imagePreview");
      imagePreview.innerHTML = ""; // Clear previous image preview

      var img = document.createElement("img");
      img.src = selectedImage;
      img.onload = function() {
        imagePreview.appendChild(img);
      };
    };

    reader.readAsDataURL(image);
  }



  
function handleImageUpload(event) {
  const file = event.target.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function (e) {
      const imageData = e.target.result;
      localStorage.setItem('uploadedImage', imageData);
    };

    reader.readAsDataURL(file);
  }
}

const fontSelector = document.getElementById("fontSelector");

// Add an event listener to capture the font selection
fontSelector.addEventListener("change", function() {
  // Retrieve the selected font family
  const selectedFont = fontSelector.value;

  // Save the selected font family to local storage
  localStorage.setItem("selectedFont", selectedFont);
});



</script>
</html>