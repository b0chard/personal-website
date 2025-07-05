/* file: script.js */

const cash = document.getElementById('cash');
const purchaseBtn = document.getElementById('purchase-btn');
const totalPriceIndicator = document.getElementById('total-price');
const changeDue = document.getElementById('change-due');
const productList = document.getElementById('product-list');
const productQuantity = document.querySelectorAll('.product-quantity');
const changeDrawer = document.getElementById('change-drawer');

let totalChangeToReturn = 0;
let price = 0;
let cart = {};
let cid = [
  ['PENNY', 1.01],        // 101 pennies
  ['NICKEL', 2.05],       // 41 nickels
  ['DIME', 3.1],          // 31 dimes
  ['QUARTER', 4.25],      // 17 quarters
  ['ONE', 90],            // 90 one-dollar bills
  ['FIVE', 55],           // 11 five-dollar bills
  ['TEN', 20],            // 2 ten-dollar bills
  ['TWENTY', 60],         // 3 twenty-dollar bills
  ['ONE HUNDRED', 100]    // 1 hundred-dollar bill
];
const currency = {
  'PENNY': 0.01,
  'NICKEL': 0.05,
  'DIME': 0.10,
  'QUARTER': 0.25,
  'ONE': 1,
  'FIVE': 5,
  'TEN': 10,
  'TWENTY': 20,
  'ONE HUNDRED': 100
}
const productsPrice = {
  'water bottle': 1,
  'bread': 2.5,
  'coffee': 1.5
}

// ===== CALCULATE THE CHANGE =====
function calculateChange(amount) {
  let reversedCid = [...cid].reverse();
  let changeToReturn = [];
  let remainingAmount = Math.round(amount * 100);
  let tempCid = [];
  let status = '';
  let totalCashAvailable = Math.round(cid.reduce((sum, [, value]) => sum + value, 0) * 100);
  let cashUsed = 0;

  reversedCid.forEach(([cashName, cashAvailable]) => {
    let amountFromThisCurrency = 0;
    let cashAvailableInCents = Math.round(cashAvailable * 100);
    let unitValueInCents = Math.round(currency[cashName] * 100);

    while (remainingAmount >= unitValueInCents && cashAvailableInCents >= unitValueInCents) {
      amountFromThisCurrency += unitValueInCents;
      remainingAmount -= unitValueInCents;
      cashAvailableInCents -= unitValueInCents;
    }

    if (amountFromThisCurrency > 0) {
      changeToReturn.push([cashName, amountFromThisCurrency / 100]);
    }

    cashUsed += amountFromThisCurrency;
    tempCid.push([cashName, cashAvailableInCents / 100]);
  });

  if (remainingAmount > 0) {
    status = 'INSUFFICIENT_FUNDS';
    changeToReturn = [];
  } else if (remainingAmount === 0 && cashUsed === totalCashAvailable) {
    status = 'CLOSED';
    changeToReturn = [...cid];
  } else {
    status = 'OPEN';
  }

  cid = tempCid.reverse();
  updateChangeDue(status, changeToReturn);
}

// ===== CHECK IF CASH IS GREATER THAN THE TOTAL PRICE IN CART =====
function checkCashAmount(cash) {
  if (cash < price || !cash) {
    alert('Customer does not have enough money to purchase the item');
    return;
  } else if (cash === price) {
    changeDue.textContent = 'No change due - customer paid with exact cash';
    return; // remove this soon
  } else if (cash > price) {
    const difference = cash - price;
    calculateChange(difference);
  }
}

// ===== RESET CART OBJECT =====
function resetCart() {
  cart = {};
}

// ===== REMOVE INPUT =====
function removeInput() {
  cash.value = '';
}

// ===== RESET LIST QUANTITY =====
function resetProductListQuantity() {
  productQuantity.forEach((item) => {
    item.textContent = '0';
  })
}

// ===== RESET TOTAL PRICE INDICATOR =====
function resetPriceIndicator() {
  totalPriceIndicator.textContent = '$0.00';
}

// ===== UPDATE CHANGE DUE TEXT CONTENT =====
function updateChangeDue(status, arr) {
  let output = `Status: ${status}<br>`;

  if (status === 'OPEN') {
    arr.forEach(([name, value]) => {
      output += `${name}: $${value.toFixed(2)}<br>`;
    });
  } else if (status === 'CLOSED') {
    arr.forEach(([name, value]) => {
      if (value > 0) {
        output += `${name}: $${value.toFixed(2)}<br>`;
      }
    });
  }

  changeDue.innerHTML = output;
}

// ===== UPDATE THE TOTAL ON PRICE INDICATOR =====
function updatePriceIndicator() {
  totalPriceIndicator.textContent = `$${price.toFixed(2)}`;
}

// ===== CALCULATE THE TOTAL OF PRODUCTS ADDED =====
function calculateCartItems() {
  let temporaryPrice = 0;
  Object.entries(cart).forEach(([product, price]) => {
    temporaryPrice += price * productsPrice[product];
  })
  price = temporaryPrice;
}

// ===== WHEN PLUS BTN OR MINUS BTN IS CLICKED =====
function plusOrMinusBtnIsClicked(event) {
  const plusBtn = event.target.classList.contains('plus-btn');
  const minusBtn = event.target.classList.contains('minus-btn');

  if (plusBtn) { // plus btn is clicked
    const quantity = event.target.previousElementSibling;
    let quantityInt = parseInt(quantity.textContent);
    const productName = event.target.parentElement.previousElementSibling.childNodes[0].textContent.trim().toLowerCase();

    quantityInt += 1;
    quantity.textContent = quantityInt;

    if (cart[productName]) {
      cart[productName] += 1;
    } else {
      cart[productName] = 1;
    }
  }
  
  if (minusBtn) { // minus btn is clicked
    const quantity = event.target.nextElementSibling;
    let quantityInt = parseInt(quantity.textContent);
    const productName = event.target.parentElement.previousElementSibling.childNodes[0].textContent.trim().toLowerCase();

    if (quantityInt > 0) {
      quantityInt -= 1;
      quantity.textContent = quantityInt;
    }

    if (cart[productName]) {
      cart[productName] -= 1;
      if (cart[productName] === 0) {
        delete cart[productName];
      }
    }
  }
}

// ===== LISTEN FOR UPDATE QUANTITY =====
productList.addEventListener('click', (e) => {
  plusOrMinusBtnIsClicked(e);
  calculateCartItems();
  updatePriceIndicator();
})

// ===== LISTEN FOR PURCHASE CLICK =====
purchaseBtn.addEventListener('click', () => {
  const cashValue = parseFloat(cash.value);
  checkCashAmount(cashValue);
  removeInput();
  resetCart();
  resetProductListQuantity()
  resetPriceIndicator()
})