/// Terms alert \\\

const checkbox = document.getElementById("terms_checkbox");
const form = document.getElementById("subform");

form.addEventListener("submit", function (event) {
    checkAndShowErrors(event);

});

function checkAndShowErrors(event) {
    if(checkbox.checked === false) {
        window.alert("Zaakceptuj regulamin !");
        event.preventDefault();
    }

}