// JavaScript Document

$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});

function quote1next() {
  document.getElementById("quote1").style.display = "none";
  document.getElementById("quote2").style.display = "block";
}
function quote2back() {
  document.getElementById("quote2").style.display = "none";
  document.getElementById("quote1").style.display = "block";
}
function quote2next() {
  document.getElementById("quote2").style.display = "none";
  document.getElementById("quote3").style.display = "block";
}
function quote3back() {
  document.getElementById("quote3").style.display = "none";
  document.getElementById("quote2").style.display = "block";
}
function quote3next() {
  document.getElementById("quote3").style.display = "none";
  document.getElementById("quote4").style.display = "block";
}
function quote4back() {
  document.getElementById("quote4").style.display = "none";
  document.getElementById("quote3").style.display = "block";
}
function quote4submit() {
  document.getElementById("quote4").style.display = "none";
  document.getElementById("quotecomplete").style.display = "flex";
}
