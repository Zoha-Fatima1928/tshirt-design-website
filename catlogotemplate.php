<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WcwinterCollection</title>
    <link rel="stylesheet" href="CSS/catlogotemplate.css">
    <script src="./Javascript/catlogotemplate.js" defer></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>
<body>
<?php  require('./Components/HeaderComponent4.php')?>
    <br />

<div style="display:flex; justify-content:center">
    <div class="CustomizationArea">
      <h1 style="text-align:center ; text-decoration:underline">
      Customization T-SHIRTS
      </h1>
      <br><br>
      <div style="display: flex; justify-content: center ; flex-direction:row">
      <div>
        <img id="pic" src="./Images/template11.jpg" width="400px"  style="margin-left:300px ; "/>
      </div>
      <div class="DrawingArea" id="imageshow">

        <div style=" height: 130px;" id="ImageShown">

        </div>
        <div
          style="
            display: flex;
            justify-content: center;
            margin-left: 20px;
            width: 40x;
            display: none;
            margin-top: -30px;
            
          "
          id="inputdiv"
          contenteditable="true"
        >
          <input
            type="text"
            class="InputTextStyle"
            maxlength="10"
            id="input"
            autofocus="autofocus"
            placeholder="Text Here"
            style="margin-top:3px ;"
          />
        </div>
      </div>
    </div>
    <div style="border: 5px solid gray ;width:300px ;height:150px ; 
   margin-left:40px ; margin-top:-400px ; border-radius:10px">
   <div>
    <h1 style="text-align:center ; text-decoration:underline"> Choose Color</h1>
   </div>
     <div style="display: flex;  justify-content:center ; margin-top:-5px">
      <button id="btn1" onclick="change1()" style="margin-left:1px"></button>
      <button id="btn2" onclick="change2()" style="margin-left:2px"></button>
      <button id="btn3" onclick="change3()" style="margin-left:3px"></button>
      <button id="btn4" onclick="change4()" style="margin-left:4px"></button>
      <button id="btn5" onclick="change5()" style="margin-left:5px"></button>
    </div>
    <br>
    <div style="display: flex;  margin-top:-10px ; justify-content:center ; margin-top:-15px">
    <button id="btn7" onclick="change6()" style="margin-left:1px"></button>
      <button id="btn8" onclick="change7()" style="margin-left:2px"></button>
      <button id="btn9" onclick="change8()" style="margin-left:3px"></button>
      <button id="btn10" onclick="change9()" style="margin-left:4px"></button>
      <button id="btn11" onclick="change10()" style="margin-left:5px"></button>
    </div>
  </div>

  
  <div style="border: 5px solid gray ;width:300px ;height:230px ; 
  margin-left:40px ; margin-top:10px ; border-radius:10px" >
  <h1 style="text-align:center ; text-decoration:underline">Text Customization </h1>
  <div style="margin-top:-5px ; display: flex;   justify-content:center ; ">
  <button
          style="margin-top: 10px; margin-left: 5px ; height:50px ; font-weight:bold"
          id="Button"
          onclick="w3.show('#inputdiv')"
        >
          Click Here To Add text
        </button>

        <button
          style="margin-top: 10px; margin-left: 5px ; height:50px ; font-weight:bold"
          id="SaveButton"
          onclick="myFunction()"
        >
          Save Text
        </button>
 
        <div>
        <input type="color" style="margin-left:5px; margin-top: 10px; height:50px ; margin-right:5px"
        oninput="changecolor(event)">
        </div>
        
  </div>
  <select id="fontSelector" onchange="changeFont(this);" style="margin-left:5px; height:50px ; margin-right:5px; margin-top:5px ; width:290px" >
            <option value="SelectFont" selected><b>Font Style</b></option>
            <option value="Arial">Arial</option>
            <option value="Sans-Serif" >Sans Serif</option>
            <option value="Comic Sans MS">Comic Sans MS</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Courier New">Courier New</option>
            <option value="Verdana" >Verdana</option>
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
</div>
</div>
<br><br>
<div style="margin-left:250px">
<button id="SaveButton2"  onclick="saveInputValue()">Save Image</button>
                <a href="./Preview/previewcatlogo.php">Preview Image</a>
</div>
    </div>
    <br><br>



    <br /><br><br>
    <div class="Footer">
      <h3 class="FooterHeading">T-Shirts ! Customized it</h3>
    </div>
</body>

<script>

// function for text 
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

function saveInputValue() {
  var selectedImage = document.getElementById("pic").src;
  localStorage.setItem("selectedImage", selectedImage);
  var inputText = document.getElementById("inputdiv").innerHTML;
  var selectedColor = document.getElementById("inputdiv").style.color;
  localStorage.setItem("inputText", inputText);
  localStorage.setItem("selectedColor", selectedColor); 
  alert("Image Saved Successfully");
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