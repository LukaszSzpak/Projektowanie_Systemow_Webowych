

function changeColor(colorV){
    document.body.style.background = document.getElementById(colorV).dataset.color;

    if (colorV === "white") {
        document.body.style.color = "black";
    } else {
        document.body.style.color = "green";
    }
}

function changeTextStyle(textV){
    if (textV === "t1") {
        document.body.style.fontFamily = "Times New Roman, Times, serif";
    } else if (textV === "t2") {
        document.body.style.fontFamily = "Kaushan Script, cursive";

    }
}