function change1() {
    document.getElementById("pic").src = "./Images/TEMPLATES/fullb.jpg";
  }
  function change2() {
    document.getElementById("pic").src = "./Images/TEMPLATES/fullc.jpg";
  }
  function change3() {
    document.getElementById("pic").src = "./Images/TEMPLATES/fulld.jpg";
  }
  function change4() {
    document.getElementById("pic").src = "./Images/TEMPLATES/fulle.jpg";
  }
  function change5() {
    document.getElementById("pic").src = "./Images/TEMPLATES/fullf.jpg";
  }
  function change6() {
    document.getElementById("pic").src = "./Images/TEMPLATES/fullg.jpg";
  }
  function change7() {
    document.getElementById("pic").src = "./Images/TEMPLATES/fullh.jpg";
  }
  function change8() {
    document.getElementById("pic").src = "./Images/TEMPLATES/fulli.jpg";
  }
  function change9() {
    document.getElementById("pic").src = "./Images/TEMPLATES/fulla.jpg";

  }


  
  function myFunction() {
    var x = document.getElementById("input").value;
    document.getElementById("inputdiv").innerHTML = x;
    document.getElementById("inputdiv").style =
      "display:flex ; justify-content : center ;  font-size:30px ; margin-top:-20px  ; text-align : center ; color:blue ; font-weight:bolder";
  }
  
  function changecolor(event){
    document.getElementById("inputdiv").style.color=event.target.value;
  }
  const image_input = document.querySelector("#inputimage");
  var uploaded_image = "";
  
  image_input.addEventListener("change", function () {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
      uploaded_image = reader.result;
      document.querySelector(
        "#ImageShown"
      ).style.backgroundImage = `url(${uploaded_image})`;
      document.querySelector("#ImageShown").style.backgroundSize = "100px 100px";
      document.querySelector("#ImageShown").style.backgroundRepeat = "no-repeat";
      document.querySelector("#ImageShown").style.backgroundPosition =
        "center bottom";
    });
    reader.readAsDataURL(this.files[0]);
  });
  
  function changeFont(font) {
    document.getElementById("inputdiv").style.fontFamily = font.value;
  }