
// Check for alt, shift and ctrl //
function whichKeyWithMouse(event) {
    var myInfoString = "Użyto";
    if (event.altKey) {
        document.body.style.cursor = "pointer";
        myInfoString += " Alt'a";
    } else if (event.shiftKey) {
        document.body.style.cursor = "help";
        myInfoString += " Shift'a";
    } else if (event.ctrlKey) {
        document.body.style.cursor = "wait";
        myInfoString += " Ctrl'a";
    } else {
        document.body.style.cursor = "default";
        myInfoString += " niczego";
    }

    window.alert(myInfoString + '!');
}


// Check keyboard key //
function whichKey(event) {
    const keyCode = event.which || event.keyCode;
    window.alert("Kod przycisku to: " + keyCode);
}

function cleanInput() {
    document.getElementById("key_field").value = "";
}


// mouse test field //
function showCords(event) {
    const screenX = event.screenX;
    const screenY = event.screenY;
    const clientX = event.clientX;
    const clientY = event.clientY;

    document.getElementById("cords").innerHTML = "Screen: X" + screenX + " Y" + screenY
                                                    + "<br> Client: X" + clientX + " Y" + clientY;
}
