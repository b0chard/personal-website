const hands = document.querySelectorAll(".hand");
const secondHand = document.querySelector(".second-hand");
const minuteHand = document.querySelector(".minute-hand");
const hourHand = document.querySelector(".hour-hand");

const setDate = () => {
  const now = new Date();
  const second = now.getSeconds();
  const secondDeg = ((second / 60) * 360) + 90;
  secondHand.style.transform = `rotate(${secondDeg}deg)`;

  const minute = now.getMinutes();
  const minuteDeg = ((minute / 60) * 360) + 90;
  minuteHand.style.transform = `rotate(${minute}deg)`;

  const hour = now.getHours();
  const hourDeg = (((hour % 12) / 12) * 360) + ((minute / 60) * 30) + 90;
  hourHand.style.transform = `rotate(${hourDeg}deg)`;

  console.log(`${hour}:${minute}:${second}`);
}

setInterval(setDate, 1000);
setDate();  