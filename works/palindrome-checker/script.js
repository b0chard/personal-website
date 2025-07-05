const checkButton = document.getElementById('check-btn');
const textInput = document.getElementById('text-input');
const resultContainer = document.getElementById('result');

const checkPalindrome = userInput => {
  //raw user input
  const rawText = userInput;

  //check if input has value
  if (rawText == '') {
    alert('Please input a value');
    return;
  };

  //remove non-alphanumeric characters
  const noSpace = rawText.replace(/[^a-zA-Z0-9]/g, '').toLowerCase();
  
  console.log(`original: ${noSpace}`);

  //reverse the text for matching later
  const reversedNoSpace = noSpace.split('').reverse().join('');

  console.log(`reversed: ${reversedNoSpace}`);

  //check if the text is a palindrome
  let result = `<strong>${rawText.trim()}</strong> ${noSpace === reversedNoSpace ? "is" : "is not" } a palindrome`;

  console.log(`result: ${result}`);

  //show message result in HTML
  resultContainer.innerHTML = result;
  resultContainer.classList.add('visible');
};

//when user toggle the button
checkButton.addEventListener('click', () => {
  const output = checkPalindrome(textInput.value);
  textInput.value = '';
});

//when enter is toggled
textInput.addEventListener('keydown', btn => {
  if (btn.key === 'Enter') {
    checkPalindrome(textInput.value);
    textInput.value = '';
  }
});