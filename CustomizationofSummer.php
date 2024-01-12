<?php
require('config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Customization Of Summer T-SHiRTS</title>
        <link rel="stylesheet" href="CSS/CustomizationOfSummer.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <script src="./Javascript/Summerscript.js" defer></script>
    </head>

    <body>
   
<?php  require('./Components/HeaderComponent4.php')?>
        <br />
        <div class="Class2">
            <div class="CustomizationArea">
                <h1 class="Class3">
                    Customization T-SHIRTS
                </h1>
                <br />
                <br />
                <div class="Class4">
                    <div>
                        <img id="pic" src="./Images/wcsummer12.webp" width="400px" class="Class5" />
                        <div class="Class6">
                            <img id="triangle" src="./Images/rbtri5.png" class="Class7" />
                        </div>
                        <div class="Class8">
                            <img id="circle" src="./Images/rbcircle3.png" class="Class9" />
                        </div>
                        <div class="Class10">
                            <img id="square" src="./Images/rbsqu1.png" class="Class11" />
                        </div>
                        <div class="Class12">
                            <img id="super" src="./Images/rbsuper1.png" class="Class13" />
                        </div>
                        <div class="Class12">
                            <img id="logo1" src="./Images/Logo/logo5.png" class="Class13" />
                        </div>
                        <div class="Class12">
                            <img id="logo2" src="./Images/Logo/logo2.png" class="Class13" />
                        </div>
                        <div class="Class12">
                            <img id="logo3" src="./Images/Logo/logo3.png" class="Class13" />
                        </div>
                        <div class="Class12">
                            <img id="logo4" src="./Images/Logo/logo4.png" class="Class13" />
                        </div>
                    </div>
                    <br />
                    <div class="DrawingArea" id="imageshow">
                        <div class="Class14" id="ImageShown"></div>
                        <div class="Class15" id="inputdiv" contenteditable="true" >
                            <input type="text" class="InputTextStyle" contenteditable="true" maxlength="10" id="input" autofocus="autofocus" placeholder="Text Here" class="Class16" />
                        </div>
                    </div>
                </div>
                <div class="Class17">
                    <div>
                        <h1 class="Class18">Choose Color</h1>
                    </div>
                    <div class="Class19">
                        <button id="btn1" onclick="change1()" style="margin-left: 1px;"></button>
                        <button id="btn2" onclick="change2()" style="margin-left: 2px;"></button>
                        <button id="btn3" onclick="change3()" style="margin-left: 3px;"></button>
                        <button id="btn4" onclick="change4()" style="margin-left: 4px;"></button>
                        <button id="btn5" onclick="change5()" style="margin-left: 5px;"></button>
                        <button id="btn6" onclick="change6()" style="margin-left: 6px;"></button>
                    </div>
                    <br />
                    <div class="Class20">
                        <button id="btn7" onclick="change7()" style="margin-left: 1px;"></button>
                        <button id="btn8" onclick="change8()" style="margin-left: 2px;"></button>
                        <button id="btn9" onclick="change9()" style="margin-left: 3px;"></button>
                        <button id="btn10" onclick="change10()" style="margin-left: 4px;"></button>
                        <button id="btn11" onclick="change11()" style="margin-left: 5px;"></button>
                        <button id="btn12" onclick="change12()" style="margin-left: 6px;"></button>
                    </div>
                </div>

                <div class="Class21">
                    <h1 class="Class22">Text Customization</h1>
                    <div class="Class23">
                        <button class="Class24" id="Button" onclick="w3.show('#inputdiv')">
                            Click Here To Add text
                        </button>

                        <button class="Class25" id="SaveButton" onclick="myFunction()">
                            Save Text
                        </button>

                        <div>
                            <input type="color" class="Class26" oninput="changecolor(event)" />
                        </div>
                        <br />
                    </div>

                    <select id="fontSelector"  onchange="changeFont(this);" class="Class27">
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

                <div class="Class28">
                    <div></div>
                    <h1 class="Class29">Add Image/Logo</h1>
                    <div class="Class30">
                        <input  onchange="handleImageUpload(event)"  class="Class31" type="file" id="inputimage" accept="image/png, image/jpg" />
                    </div>
                    <p class="Class32">
                        ( Uploade Image without background )
                    </p>

               
                </div>

                <div class="Class33" style="margin-top:-190px">
                    <h1 class="Class34">Select Shapes</h1>
                    <div class="Class35">
                        <div onclick="saveImageSource('triangle');w3.show('#triangle');w3.hide('#circle');w3.hide('#square');w3.hide('#super')" class="Class36">
                            <img src="./Images/rbtri5.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="saveImageSource('circle');w3.show('#circle') ;w3.hide('#triangle');w3.hide('#square');w3.hide('#super')" class="Class37">
                            <img src="./Images/rbcircle3.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="w3.show('#square') ;w3.hide('#triangle');
                         saveImageSource('square');;w3.hide('#circle');w3.hide('#super')" class="Class38">
                            <img src="./Images/rbsqu1.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="saveImageSource('super');w3.show('#super');w3.hide('#triangle');w3.hide('#square');w3.hide('#circle')" class="Class38">
                            <img src="./Images/rbsuper1.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>     
                    </div>
        <!-- New Logo -->
                    <div class="Class35" style="margin-top:10px">
                    <div onclick="saveImageSource('logo1');w3.show('#logo1');w3.hide('#super');w3.hide('#triangle');w3.hide('#square');w3.hide('#circle')" class="Class38">
                            <img src="./Images/Logo/logo5.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="saveImageSource('logo2');w3.show('#logo2');w3.hide('#logo1');w3.hide('#super');w3.hide('#triangle');w3.hide('#square');w3.hide('#circle')" class="Class38">
                            <img src="./Images/Logo/logo2.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>   
                        <div onclick="saveImageSource('logo3');w3.show('#logo3');w3.hide('#logo2');w3.hide('#logo1');w3.hide('#super');w3.hide('#triangle');w3.hide('#square');w3.hide('#circle')" class="Class38">
                            <img src="./Images/Logo/logo3.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div> 
                        <div onclick="saveImageSource('logo4');w3.show('#logo4');w3.hide('#logo3');w3.hide('#logo2');w3.hide('#logo1');w3.hide('#super');w3.hide('#triangle');w3.hide('#square');w3.hide('#circle')" class="Class38">
                            <img src="./Images/Logo/logo4.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div> 
                    </div>
    
                    <br />
                </div>
                <br />
                
                <div style="margin-top:30px">
                <button id="SaveButton2"  onclick="saveInputValue()">Save Image</button>
                <a href="./Preview/previewsummer.php">Preview Image</a>
                </div>
              
            </div>
            <br />
            <br />
        </div>
        <br />
        <br />
        <br>
       
        <div class="Footer">
            <h3 class="FooterHeading">T-Shirts ! Customized it</h3>
        </div>
    </body>

</html>


<script>

// function for text 
function smaller() {
document.getElementById("inputdiv").style.fontSize = "30px";
localStorage.setItem("fontSize", "30px");
}
function small() {
document.getElementById("inputdiv").style.fontSize = "35px";
localStorage.setItem("fontSize", "35px");
}
function medium() {
document.getElementById("inputdiv").style.fontSize = "40px";
localStorage.setItem("fontSize", "40px");
}
function large() {
document.getElementById("inputdiv").style.fontSize = "45px";
localStorage.setItem("fontSize", "45px");
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
w3.hide('#logo1');
w3.hide('#logo2');
w3.hide('#logo3');
w3.hide('#logo4');


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


function saveInputValue() {
var inputText = document.getElementById("input").value;
if (inputText.trim() === "") {
inputText = null; // Set inputText to null if it's empty or contains only whitespace
}
localStorage.setItem("inputText", inputText);
var selectedColor = document.getElementById("inputdiv").style.color;

localStorage.setItem("selectedColor", selectedColor);
}

function saveInputValue() {
var inputText = document.getElementById("inputdiv").value;
var selectedColor = document.getElementById("inputdiv").style.color;
localStorage.setItem("inputText", inputText);
localStorage.setItem("selectedColor", selectedColor);
}

function myFunction() {
var x = document.getElementById("input").value;
document.getElementById("inputdiv").innerHTML = x;
document.getElementById("inputdiv").style =
"display:flex ; justify-content : center ; font-size:50px;   margin-top:-10px  ; text-align : center ; font-weight:bold ; outline:none; border:none";
}
</script>