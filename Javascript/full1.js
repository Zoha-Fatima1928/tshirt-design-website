function change1() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full2.jpg";
  }
  function change2() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full3.jpg";
  }
  function change3() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full4.jpg";
  }
  function change4() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full5.jpg";
  }
  function change5() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full6.jpg";
  }
  function change6() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full7.jpg";
  }
  function change7() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full8.jpg";
  }
  function change8() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full9.jpg";
  }
  function change9() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full1.jpg";

  }
  function change10() {
    document.getElementById("pic").src = "./Images/TEMPLATES/full2.jpg";
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