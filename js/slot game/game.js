//get the max and min values of the array
function getMax(arr) {
    return Math.max.apply(null, arr);
}


function getRandomNumber() {
    return Math.floor(Math.random() * 2) + 1;
}

function getElement(id) {
    return document.getElementById(id);
}

function spin() {
    let item1 = getElement('item1');
    let item2 = getElement('item2');
    let item3 = getElement('item3');

    let num1 = getRandomNumber();
    let num2 = getRandomNumber();
    let num3 = getRandomNumber();

    item1.innerHTML = `${num1}`;
    item2.innerHTML = `${num2}`;
    item3.innerHTML = `${num3}`;

    if (num1 === num2 && num1 === num3) {
        showMessage();
    } else {
        hideMessage();
    }
}

