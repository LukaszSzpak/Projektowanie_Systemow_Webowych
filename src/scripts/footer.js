/// Happy number \\\

const min = 10;
const max = 100;

function happyNumber() {
    return Math.floor(min + (Math.random() * max));
}

document.getElementById("happy_number").innerHTML =
    "Twoja szczęśliwa liczba to: " + happyNumber();



/// Your number \\\

const button = document.getElementById("parsing_submit");

button.addEventListener("click", function (event) {
    printYourNumber();

    event.preventDefault();
});

function printYourNumber() {
    const newValue = document.getElementById("parsing_number").value;
    const myValue = parseFloat(newValue);

    document.getElementById("parsing_output").innerHTML =
        "Liczba to: " + myValue;
}
