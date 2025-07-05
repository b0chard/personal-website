const inputNum = document.getElementById("number");
const convertBtn = document.getElementById("convert-btn");
const output = document.getElementById("output");

const checkUserInput = (num) => {
  let outputText = "";

  if (!num || isNaN(num)) {
    outputText = "Please enter a valid number";
  } else if (num < 0) {
    outputText = "Please enter a number greater than or equal to 1";
  } else if (num >= 4000 ) {
    outputText = "Please enter a number less than or equal to 3999";
  } else {
    return null;
  };

  return outputText;
}

const convertDecToRoman = (num) => {
  let remainingNum = num;
  let result = [];

  const combinations = [
    { symbol: "M", value: 1000 },
    { symbol: "CM", value: 900 },
    { symbol: "D", value: 500 },
    { symbol: "CD", value: 400 },
    { symbol: "C", value: 100 },
    { symbol: "XC", value: 90 },
    { symbol: "L", value: 50 },
    { symbol: "XL", value: 40 },
    { symbol: "X", value: 10 },
    { symbol: "IX", value: 9 },
    { symbol: "V", value: 5 },
    { symbol: "IV", value: 4 },
    { symbol: "I", value: 1 }
  ];

  combinations.forEach((combination) => {
    const sym = combination.symbol;
    const val = combination.value;

    while (remainingNum >= val) {
      result.push(sym);
      remainingNum -= val;
    };
  });

  output.classList.remove("invalid");
  output.innerText = result.join("");
};

convertBtn.addEventListener("click", (e) => {
  e.preventDefault();
  output.classList.remove("hidden");

  const inputValue = inputNum.value;
  const parsedInput = parseInt(inputValue);
  const errorMessage = checkUserInput(parsedInput);
  
  if (errorMessage) {
    output.innerText = errorMessage;
    output.classList.add("invalid");
  } else {
    convertDecToRoman(parsedInput);
  }
});