//  Focus on email field //
function focusOnEmail() {
    const emailField = document.getElementById("email");
    emailField.focus();
}


// Blur email focus //
function blurEmailField() {
    const emailField = document.getElementById("email");
    emailField.blur();
}


// Auto hints //

const emailHint = document.getElementById("email");
const nameHint = document.getElementById("name");
const familyNameHint = document.getElementById("family-name");
const passwordHint = document.getElementById("new-password");
const phoneHint = document.getElementById("tel");

emailHint.addEventListener("focus", function () {
    document.getElementById("sub_from_hint_email").innerHTML = " np. my@exmaple.com";
});

emailHint.addEventListener("blur", function () {
    document.getElementById("sub_from_hint_email").innerHTML =  " ";
});

nameHint.addEventListener("focus", function () {
    document.getElementById("sub_from_hint_name").innerHTML = " np. Adam";
});

nameHint.addEventListener("blur", function () {
    document.getElementById("sub_from_hint_name").innerHTML = " " ;
});

familyNameHint.addEventListener("focus", function () {
    document.getElementById("sub_from_hint_family_name").innerHTML = " np. Kowalski";
});

familyNameHint.addEventListener("blur", function () {
    document.getElementById("sub_from_hint_family_name").innerHTML = " ";
});

passwordHint.addEventListener("focus", function () {
    document.getElementById("sub_from_hint_password").innerHTML = " np. 123Kol.!";
});

passwordHint.addEventListener("blur", function () {
    document.getElementById("sub_from_hint_password").innerHTML = " ";
});

phoneHint.addEventListener("focus", function () {
    document.getElementById("sub_from_hint_tel").innerHTML = " np. 123-456-789";
});

phoneHint.addEventListener("blur", function () {
    document.getElementById("sub_from_hint_tel").innerHTML = " ";
});

// Confirm erase and go //

form.addEventListener("submit", function (event) {
    if(!window.confirm("Czy na pewno chcesz przejść dalej ?!")) {
        event.preventDefault();
    }

});

form.addEventListener("reset", function (event) {
    if(!window.confirm("Czy na pewno chcesz wyczyścić formularz ?!")) {
        event.preventDefault();
    }

});