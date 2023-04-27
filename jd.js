var btn = document.getElementById("myBtn");

var popup = document.getElementById("myPopup");


var closeBtn = document.getElementById("closeBtn");


btn.onclick = function() {
  popup.style.display = "block";
  btn.classList.add("brown");
}


closeBtn.onclick = function() {
  popup.style.display = "none";
  btn.classList.remove("brown");
}