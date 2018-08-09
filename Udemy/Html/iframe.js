document.getElementById('link1').onclick = function (){
  document.getElementById('link1').style.display= "none";
  document.getElementById('link2').style.display= "block";
  document.getElementById('link3').style.display= "block";

}
document.getElementById('link2').onclick = function (){
  document.getElementById('link1').style.display="block";
  document.getElementById('link2').style.display="none";
  document.getElementById('link3').style.display="block";
}

document.getElementById('link3').onclick = function (){
  document.getElementById('link1').style.display="block";
  document.getElementById('link2').style.display="block";
  document.getElementById('link3').style.display="none";
}
