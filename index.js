//get our buttons from the DOM
const buttons = document.querySelectorAll('.btn-number, .btn-operator');
const clearButton = document.querySelector('.btn-clear');
const saveButton = document.querySelector('.btn-save');
const display = document.querySelector('.display');
const history = document.querySelector('.history');
const input = document.querySelector('.input');

function formatNumber(num) {
  console.log('Hello');
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
}

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

//add an eventListener to each of the buttons
buttons.forEach((button) => {
  button.addEventListener('click', () => {
    const buttonValue = button.getAttribute('data-num');
    console.log('button pressed', buttonValue);
    history.textContent += buttonValue;
    console.log(history.textContent);
  });
});

//the below code is to post the history to the csv file which is not working

saveButton.addEventListener('click', () => {
  $(document).ready(function () {
    //your code here
  // alert('Im clicked');
  
   var history_data = $('.history').html();
   var output = $('.input').html();
   $.ajax({
      url: 'Calculations.php',
      type: 'post',
      data: {history_data:history_data, output:output},
	  success: function (response) {
				alert(response);
				$('#hide-history').html(response);
				
            }
    });
  });
});
