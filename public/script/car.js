let numberInput = document.getElementById('numberInput')
let increaseButton = document.getElementById('increase')
let decreaseButton = document.getElementById('decrease')
let deletar = document.querySelector('.deletar')
let car = document.querySelector('.carrinhoBox')


deletar.addEventListener('click', () => {
    car.style.display = "none";
});

increaseButton.addEventListener('click', () => {
    numberInput.value = parseInt(numberInput.value) + 1
});

decreaseButton.addEventListener('click', () => {
    const currentValue = parseInt(numberInput.value)
    if (currentValue > 0) {
        numberInput.value = currentValue - 1
    }
});