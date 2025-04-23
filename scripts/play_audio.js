function playBGM(){
  const audio = document.getElementById("bg-music");
  if(audio.paused){
    audio.play()
    updateText("playing");
  }
  else {
    audio.pause();
    updateText("paused");
  }
}

function updateText(status){
  const playBGMText = document.getElementById("play-bgm-txt");
  switch(status){
    case "playing":
      playBGMText.textContent = "Yay! music is now playing :0";
      break;
    case "paused":
      playBGMText.textContent = "WHY YOU STOPPED THE MUSIC!! :'(";
      break;
  }
}

document.getElementById("play-bgm-btn").addEventListener("click", function(){
  playBGM();
})