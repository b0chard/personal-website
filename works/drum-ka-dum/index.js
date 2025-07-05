const playSound = e => {
  const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
  const pad = document.querySelector(`.pad[data-key="${e.keyCode}"]`);
  if (!audio) return; // returns if key is null
  audio.currentTime = 0; // rewind to audio start
  audio.play();
  pad.classList.add('hit');
}

function removeTransition(e) {
  if (e.propertyName !== 'transform') return;
  this.classList.remove('hit');
}

const pads = document.querySelectorAll('.pad');
pads.forEach(pad => pad.addEventListener('transitionend', removeTransition));

window.addEventListener("keydown", playSound);