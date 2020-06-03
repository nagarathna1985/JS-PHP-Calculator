//get our buttons from the DOM
const buttons = document.querySelectorAll('.btn-number, .btn-operator');
const clearButton = document.querySelector('.btn-clear');
// const equalsButton = document.querySelector('.btn-operator .btn-equals');
const saveButton = document.querySelector('.btn-save');
const display = document.querySelector('.display');
const history = document.querySelector('.history');
const input = document.querySelector('.input');

function formatNumber(num) {
  console.log('Hello');
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
}

//add an eventListener to each of the buttons
buttons.forEach((button) => {
  button.addEventListener('click', () => {
    const buttonValue = button.getAttribute('data-num');
    console.log('button pressed', buttonValue);
    history.textContent += buttonValue;
    console.log(history.textContent);
  });
});

// equalsButton.addEventListener('click', () => {
//   input.textContent = eval(history.textContent);
//   console.log(history.textContent);
//   console.log(input.textContent);
// });

// clearButton.addEventListener('click', () => {
//   input.textContent = '';
//   history.textContent = '';
// });

saveButton.addEventListener('click', () => {
  $(document).ready(function () {
    //your code here
    console.log('Im clicked');
    console.log(display.textContent);
    $.ajax({
      url: 'file.csv',
      method: 'post',
      data: { display: display.textContent },
      // success: function (res) {
      //   console.log(res);
      // },
    });
  });
});

function equal() {
  let answer = eval(history.textContent);
  input.textContent = formatNumber(answer);
  console.log(history.textContent);
  console.log(input.textContent);
}

function allClear() {
  input.textContent = '';
  history.textContent = '';
}
