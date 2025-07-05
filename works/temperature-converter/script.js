const tempUnitFrom = document.getElementById("tempUnitFrom");
const tempUnitTo = document.getElementById("tempUnitTo");
const result = document.getElementById("result");
const fromTxt = document.getElementById("convertFromTxt");
const toTxt = document.getElementById("convertToTxt");
const userInput = document.getElementById("userInput");

const convert = (num, from, to) => { //converts the num to the temp unit assigned
  let result = "";

  if (from === "Celcius") {
    if (to === "Fahrenheit") {
      result = (num * 1.8) + 32;
    } else if (to === "Kelvin") {
      result = num + 273.15;
    } else {
      result = num;
    }
  } else if (from === "Fahrenheit") {
    if (to === "Celcius") {
      result = (num - 32) / (9 / 5);
    } else if (to === "Kelvin") {
      result = (num + 459.67) / 1.8;
    } else {
      result = num;
    }
  } else if (from === "Kelvin") {
    if (to === "Celcius") {
      result = num - 273.15;
    } else if (to === "Fahrenheit") {
      result = (num * 1.8) - 459.67;
    } else {
      result = num;
    }
  }

  return result.toFixed(2);
}

const updateOutputTxt = (from, to, num) => { //updates the output text
  const units = {
    "Celcius": "&deg;C",
    "Fahrenheit": "&deg;F",
    "Kelvin": "K"
  }
  const noSpace = userInput.value.replace(/[^\d.]/g, "");
  const fromUnit = units[from];
  const toUnit = units[to];

  return `${noSpace}${fromUnit} &equals; ${num}${toUnit}`;
}

const updateConversionTxt = (from, to) => { //updates the text above the conversion
  fromTxt.innerText = from;
  toTxt.innerText = to;
  calculate(userInput);
}

const onDropdownChange = () => { //executes if user change the option on the select element
  const tempFrom = tempUnitFrom.value;
  const tempTo = tempUnitTo.value;
  updateConversionTxt(tempFrom, tempTo);
}

//checks changes on the select element
tempUnitFrom.addEventListener("change", onDropdownChange);
tempUnitTo.addEventListener("change", onDropdownChange);

//executes when user input a number
const calculate = (value) => {
  const noSpace = value.replace(/[^\d.]/g, ""); //remove whitespaces and non-numerical characters
  const parsedInt = parseInt(noSpace);
  const from = tempUnitFrom.value;
  const to = tempUnitTo.value;

  if (!parsedInt || isNaN(parsedInt)) {
    return result.innerHTML = updateOutputTxt(0, 0, convert(parsedInt, 0, 0));
  } else {
    document.getElementById("result").innerHTML = updateOutputTxt(from, to, convert(parsedInt, from, to));
  }
}

document.addEventListener("DOMContentLoaded", onDropdownChange); //run once on page onload