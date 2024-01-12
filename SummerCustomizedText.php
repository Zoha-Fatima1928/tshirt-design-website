
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Customization Of Summer T-SHiRTS</title>
        <link rel="stylesheet" href="CSS/SummerCustomizedText.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <script src="./Javascript/SummerText.js" defer></script>


        <style>
            input::placeholder{
                color:red;
                margin-top:-10px
            }
        </style>
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
                    </div>
                    <br />
                    <div class="DrawingArea" id="imageshow">
                        <div class="Class14" id="ImageShown"></div>
                        <div class="Class15" id="inputdiv" contenteditable="true">
                            <input type="text" maxlength="50" style="margin-top:-20px;height:150px; wrap:wrap ; 
        word-wrap: break-word;  word-break: break-all;"
                             class="InputTextStyle"  id="input"  placeholder="Text Here" class="Class16"></input>
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

                <div style="margin-left:35px; margin-top:20px">
                <button id="SaveButton2"  onclick="saveInputValue()">Save Image</button>
                <a href="./Preview/previewsummertext.php">Preview Image</a>
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
    <script>

        // function for text 

function small() {
document.getElementById("inputdiv").style.fontSize = "25px";
localStorage.setItem("fontSize", "25px");
}
function medium() {
document.getElementById("inputdiv").style.fontSize = "30px";
localStorage.setItem("fontSize", "30px");
}
function large() {
document.getElementById("inputdiv").style.fontSize = "35px";
localStorage.setItem("fontSize", "35px");
}


const fontSelector = document.getElementById("fontSelector");

// Add an event listener to capture the font selection
fontSelector.addEventListener("change", function() {
  // Retrieve the selected font family
  const selectedFont = fontSelector.value;

  // Save the selected font family to local storage
  localStorage.setItem("selectedFont", selectedFont);
});

function saveImage() {
    var imageSrc = document.getElementById("pic").src;
    localStorage.setItem("selectedImage", imageSrc);
    alert("Image Saved Successfully");
  }
  
  // Event listener for the "Save Image" button
  var saveButton = document.getElementById("SaveButton2");
  saveButton.addEventListener("click", saveImage);
  
  
        </script>
</html>