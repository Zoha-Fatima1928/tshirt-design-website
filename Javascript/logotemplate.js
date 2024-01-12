function change1() {
    document.getElementById("pic").src = "./Images/template2.jpg";
  }
  function change2() {
    document.getElementById("pic").src = "./Images/template3.jpg";
  }
  function change3() {
    document.getElementById("pic").src = "./Images/template4.jpg";
  }
  function change4() {
    document.getElementById("pic").src = "./Images/template5.jpg";
  }
  function change5() {
    document.getElementById("pic").src = "./Images/template6.jpg";
  }
  function change6() {
    document.getElementById("pic").src = "./Images/template7.jpg";
  }

  function change7() {
    document.getElementById("pic").src = "./Images/template8.jpg";
  }
  function change8() {
    document.getElementById("pic").src = "./Images/template9.jpg";
  }
  function change9() {
    document.getElementById("pic").src = "./Images/template10.jpg";

  }
  function change10() {
    document.getElementById("pic").src = "./Images/template1.jpg";
  }
  
  
  function myFunction() {
    var x = document.getElementById("input").value;
    document.getElementById("inputdiv").innerHTML = x;
    document.getElementById("inputdiv").style =
      "display:flex ; justify-content : center ;  font-size:40px ; margin-top:-20px  ; text-align : center ; color:blue ; font-weight:bolder";
  }
  
  function changecolor(event){
    document.getElementById("inputdiv").style.color=event.target.value;
  }

  
  function changeFont(font) {
    document.getElementById("inputdiv").style.fontFamily = font.value;
  }

   
function saveImage() {
  var imageSrc = document.getElementById("pic").src;
  localStorage.setItem("selectedImage", imageSrc);
  alert("Image Saved Successfully");
}

// Event listener for the "Save Image" button
var saveButton = document.getElementById("SaveButton2");
saveButton.addEventListener("click", saveImage);

function myFunction() {
  var x = document.getElementById("input").value;
  document.getElementById("inputdiv").innerHTML = x;
  document.getElementById("inputdiv").style = 
  "display:flex ; justify-content : center ;  font-size:40px ; margin-top:20px  ; text-align : center ; color:blue ; font-weight:bold" ;
}

function saveInputValue() {
  var inputText = document.getElementById("inputdiv").innerHTML;
  var selectedColor = document.getElementById("inputdiv").style.color;
  localStorage.setItem("inputText", inputText);
  localStorage.setItem("selectedColor", selectedColor); 
 
  // Retrieve the image source

}


function changeFont2() {
  var selectedFont = document.getElementById("select_font").value;
  localStorage.setItem("selectedFont", selectedFont);
}
// Function to retrieve and apply the saved font from local storage
function applySavedFont() {
  var savedFont = localStorage.getItem("selectedFont");
  if (savedFont) {
      document.getElementById("inputdiv").style.fontFamily = savedFont;
      document.getElementById("select_font").value = savedFont;
  }
}

// Call the function to apply the saved font when the page loads
window.addEventListener("load", applySavedFont);

function changecolor(event){
  document.getElementById("inputdiv").style.color=event.target.value;
}
  
const image_input = document.querySelector("#inputimage");
var uploaded_image="";

image_input.addEventListener("change" , function (){
    const reader = new FileReader();
    reader.addEventListener("load",()=>{
        uploaded_image = reader.result;
        document.querySelector("#ImageShown").style.backgroundImage= `url(${uploaded_image})`;
        document.querySelector("#ImageShown").style.backgroundSize = "100px 100px";
        document.querySelector("#ImageShown").style.backgroundRepeat = "no-repeat";
        document.querySelector("#ImageShown").style.backgroundPosition = "center bottom";

    })
    reader.readAsDataURL(this.files[0]);
})

function Revert1() {
  document.getElementsByTagName(pic).height="100"; 
  document.getElementsByTagName(pic).width="100";
}
function changeFont(font) {
  document.getElementById("inputdiv").style.fontFamily = font.value;
}


function saveInputValue() {
  var inputText = document.getElementById("inputdiv").innerHTML;
  var selectedColor = document.getElementById("inputdiv").style.color;
  localStorage.setItem("inputText", inputText);
  localStorage.setItem("selectedColor", selectedColor); 
alert ("Image Saved");

  // Retrieve the image source

}


function changeFont2() {
  var selectedFont = document.getElementById("select_font").value;
  localStorage.setItem("selectedFont", selectedFont);
}
// Function to retrieve and apply the saved font from local storage
function applySavedFont() {
  var savedFont = localStorage.getItem("selectedFont");
  if (savedFont) {
      document.getElementById("inputdiv").style.fontFamily = savedFont;
      document.getElementById("select_font").value = savedFont;
  }
}

// Call the function to apply the saved font when the page loads
window.addEventListener("load", applySavedFont);

function changecolor(event){
  document.getElementById("inputdiv").style.color=event.target.value;
}

function Revert1() {
  document.getElementsByTagName(pic).height="100"; 
  document.getElementsByTagName(pic).width="100";
}
function changeFont(font) {
  document.getElementById("inputdiv").style.fontFamily = font.value;
}
