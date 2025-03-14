function menuToggleOpen() {
  document.getElementById("menu").style.width = "50%";
  document.getElementById("opacity-block").style.opacity = "80%";
  document.getElementById("opacity-block").style.pointerEvents = "all";
}
function menuToggleClose() {
  document.getElementById("menu").style.width = "0";
  document.getElementById("opacity-block").style.opacity = "0";
  document.getElementById("opacity-block").style.pointerEvents = "none";
}
function imgClickNull() {
  alert("No link for this project yet. Construction still ongoing!");
}

// survey-form.html
function fakeSubmittedNotice() {
  alert("Yeah, it works! (not actually submitted lol, idk php yet.)");
}
function termsNull() {
  alert("i didn't made a real terms and conditions ^.^");
}