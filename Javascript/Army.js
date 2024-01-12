function change1() {
    document.getElementById("pic").src = "./Images/Army/army1.jpg";
  }
  function change2() {
    document.getElementById("pic").src = "./Images/Army/army10.jpg";
  }
  function change3() {
    document.getElementById("pic").src = "./Images/Army/army3.jpg";
  }
  function change4() {
    document.getElementById("pic").src = "./Images/Army/army4.jpg";
  }
  function change5() {
    document.getElementById("pic").src = "./Images/Army/army5.jpg";
  }
  function change6() {
    document.getElementById("pic").src = "./Images/Army/army6.jpg";
  }
  function change7() {
    document.getElementById("pic").src = "./Images/Army/army7.jpg";
  }
  function change8() {
    document.getElementById("pic").src = "./Images/Army/army8.jpg";
  }
  function change9() {
    document.getElementById("pic").src = "./Images/Army/army9.jpg";

  }
  function change10() {
    document.getElementById("pic").src = "./Images/Army/army10.jpg";
  }
  function change11() {
    document.getElementById("pic").src = "./Images/Army/army11.jpg";
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