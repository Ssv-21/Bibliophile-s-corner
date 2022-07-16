function hide() {
  document.getElementById("left").style.display = "none";
  document.getElementById("right").style.opacity = "1.0";
}
function show() {
  if (document.getElementById("left").style.display == "block") {
    hide();
  } else {
    // document.getElementById("left").classList.toggle(active);
    document.getElementById("left").style.display = "block";
    document.getElementById("right").style.opacity = "0.7";
  }
}
