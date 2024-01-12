<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Customization Of Winter T-SHiRTS</title>
        <link rel="stylesheet" href="CSS/CustomizationOfWinter.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <script src="./Javascript/Winterscript.js" defer></script>
      
    </head>

    <body>
       
    <?php  require('./Components/HeaderComponent4.php')?>

        <br />
        <br />
        <div style="display: flex; justify-content: center;">
            <div class="CustomizationArea">
                <h1 style="text-align: center; text-decoration: underline;">
                    Customization T-SHIRTS
                </h1>
                <br />
                <br />
                <div  id="drawingarea1"style="display: flex; justify-content: center; flex-direction: row;">
                    <div>
                        <img id="pic" src="./Images/csummer1.webp" width="400px" style="margin-left: 300px;margin-top:-20px" />
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
                    <div class="DrawingArea" id="imageshow">
                        <div style="height: 130px;" id="ImageShown"></div>
                        <div style="display: flex; justify-content: center; margin-left: 20px; width: 340x; display: none; margin-top: -90px; outline:none" id="inputdiv" contenteditable="true">
                            <input type="text" class="InputTextStyle" maxlength="10" id="input" autofocus="autofocus" placeholder="Text Here" style="margin-left: 10px; width: 150px;" />
                        </div>
                    </div>
                </div>
                <br />
                <div style="border: 5px solid gray; width: 300px; height: 150px; margin-left: 40px; margin-top: -400px; border-radius: 10px;">
                    <div>
                        <h1 style="text-align: center; text-decoration: underline;">Choose Color</h1>
                    </div>
                    <div style="display: flex; justify-content: center; margin-top: -5px;">
                        <button id="btn1" onclick="change1()" style="margin-left: 1px;"></button>
                        <button id="btn2" onclick="change2()" style="margin-left: 2px;"></button>
                        <button id="btn3" onclick="change3()" style="margin-left: 3px;"></button>
                        <button id="btn4" onclick="change4()" style="margin-left: 4px;"></button>
                        <button id="btn5" onclick="change5()" style="margin-left: 5px;"></button>
                        <button id="btn6" onclick="change6()" style="margin-left: 6px;"></button>
                    </div>
                    <br />
                    <div style="display: flex; margin-top: -10px; justify-content: center; margin-top: -15px;">
                        <button id="btn7" onclick="change7()" style="margin-left: 1px;"></button>
                        <button id="btn8" onclick="change8()" style="margin-left: 2px;"></button>
                        <button id="btn9" onclick="change9()" style="margin-left: 3px;"></button>
                        <button id="btn10" onclick="change10()" style="margin-left: 4px;"></button>
                        <button id="btn11" onclick="change11()" style="margin-left: 5px;"></button>
                        <button id="btn12" onclick="change12()" style="margin-left: 6px;"></button>
                    </div>
                </div>

                <div style="border: 5px solid gray; width: 300px; height: 225px; margin-left: 40px; margin-top: 10px; border-radius: 10px;">
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
                    <select id="fontSelector" onchange="changeFont(this);" style="margin-left: 5px; height: 50px; margin-right: 5px; margin-top: 5px; width: 290px;">
                        <option value="SelectFont" ><b>Font Style</b></option>
                        <option value="Arial">Arial</option>
                        <option value="Sans Serif">Sans Serif</option>
                        <option value="Comic Sans MS">Comic Sans MS</option>
                        <option value="Times New Roman">Times New Roman</option>
                        <option value="Courier New">Courier New</option>
                        <option value="Verdana" selected>Verdana</option>
                        <option value="Trebuchet MS">Trebuchet MS</option>
                        <option value="Arial Black">Arial Black</option>
                        <option value="Impact">Impact</option>
                        <option value="sofia">Sofia</option>
                    </select>
                    <div class="Class39">
                     
                        <button onclick="small()"> Small</button>
                        <button onclick="medium()">Medium</button>
                        <button onclick="large()">Large</button>
                    </div>
                </div>

                <div style="border: 5px solid gray; width: 300px; height: 150px; margin-left: 40px; margin-top: 10px; border-radius: 10px;">
                    <div></div>
                    <h1 style="text-align: center; text-decoration: underline;">Add Image/Logo</h1>
                    <div style="margin-top: -2px; display: flex; justify-content: center;">
                        <input onchange="handleImageUpload(event)" style="margin-left: 60px;" type="file" id="inputimage" accept="image/png, image/jpg" />
                    </div>
                    <p style="text-align: center; margin-top: 20px; margin-left: 10px; font-weight: bold;">
                        ( Uploade Image without background )
                    </p>
                </div>

                <div class="Class33" style="margin-top:-150px">
                    <h1 class="Class34">Select Shapes</h1>
                    <p style="margin-top:-20px ; text-align:center">USE ONLY ONE SHAPE AT A TIME</p>
                 
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
                    <div class="Class35">
                        <div onclick="saveImageSource('triangle'); w3.show('#triangle');w3.hide('#circle');w3.hide('#square');w3.hide('#super')" class="Class36">
                            <img  src="./Images/rbtri5.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="saveImageSource('circle'); w3.show('#circle');w3.hide('#triangle');w3.hide('#square');w3.hide('#super')" class="Class37">
                            <img   src="./Images/rbcircle3.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="saveImageSource('square'); w3.show('#square');w3.hide('#triangle');w3.hide('#circle');w3.hide('#super')" class="Class38">
                            <img src="./Images/rbsqu1.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                        <div onclick="saveImageSource('super'); w3.show('#super');w3.hide('#triangle');w3.hide('#square');w3.hide('#circle')" class="Class38">
                            <img  src="./Images/rbsuper1.png" alt="" srcset="" style="width: 40px; height: 40px;" />
                        </div>
                    </div>
                    <br>
                </div>
              
                <br />

                <button id="SaveButton2"  onclick="saveInputValue()">Save Image</button>
                <a href="./Preview/previewwinter.php">Preview Image</a>
           

         </div>
        <br />
        <br />
</div>
<br><br><br>
        <div class="Footer">
            <h3 class="FooterHeading">T-Shirts ! Customized it</h3>
        </div>
    </body>




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

//    function of shapes

function small1() {
document.getElementById("triangle").style.height= "110px";
document.getElementById("triangle").style.width= "110px";
document.getElementById("circle").style.height= "110px";
document.getElementById("circle").style.width= "110px";
document.getElementById("super").style.height= "110px";
document.getElementById("super").style.width= "110px";
document.getElementById("square").style.height= "110px";
document.getElementById("square").style.width= "110px";
saveShapeSize("110px", "110px");



}
function medium1() {
document.getElementById("triangle").style.height= "130px";
document.getElementById("triangle").style.width= "130px";
document.getElementById("circle").style.height= "130px";
document.getElementById("circle").style.width= "130px";
document.getElementById("super").style.height= "130px";
document.getElementById("super").style.width= "130px";
document.getElementById("square").style.height= "130px";
document.getElementById("square").style.width= "130px";
saveShapeSize("130px", "130px");


}
function large1() {
document.getElementById("triangle").style.height= "150px";
document.getElementById("triangle").style.width= "150px";
document.getElementById("circle").style.height= "150px";
document.getElementById("circle").style.width= "150px";
document.getElementById("super").style.height= "150px";
document.getElementById("super").style.width= "150px";
document.getElementById("square").style.height= "150px";
document.getElementById("square").style.width= "150px";
saveShapeSize("150px", "150px");




}

function larger1() {
document.getElementById("triangle").style.height= "170px";
document.getElementById("triangle").style.width= "170px";
document.getElementById("circle").style.height= "170px";
document.getElementById("circle").style.width= "170px";
document.getElementById("super").style.height= "170px";
document.getElementById("super").style.width= "170px";
document.getElementById("square").style.height= "170px";
document.getElementById("square").style.width= "170px";
saveShapeSize("170px", "170px");
}

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
