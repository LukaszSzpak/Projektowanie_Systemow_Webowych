/* check first time on website */
const timeID = setTimeout(checkFirstTime, 1000);


function checkFirstTime() {
    const firstTime = localStorage.getItem("first_time");
    if(!firstTime) {
        // first time loaded!
        localStorage.setItem("first_time","1");
        showAlert();
    } else {
        writeName();
    }
}


/* user_name */

function showAlert() {
    var name = prompt("Witamy na naszej stronie!!! \nPodaj swoje imie.", "User");
    const check = confirm("Mam 18 lat!");
    var msg = "Hello " + name;

    function newWindow(msg) {
        var wind = window.open("", "MsgWindow", "width=400, height=200");
        wind.document.write("<p>" + msg + "</p>");
    }

    if (check === true) {
        msg = "Hello " + (name === null ? " " : name);
    } else {
        alert("Ups, nie masz 18 lat(((");
    }


    if (name != null) {
        localStorage.setItem("Name", name);
        try {
            newWindow(msg);
        } catch (e) {}

    }

    setTimeout(writeName, 200);
}

function writeName() {
    const name = localStorage.getItem("Name");

    if (name !== null) {
        document.getElementById("user_name").innerHTML = "Hello " + name + "! How are you today?";
    }

}


/* Change img by click */

function randomImg(delimg) {

    delimg = document.getElementById("r_img");

    let image = [];
    image[0] = "img/cooking_at_home.jpg";
    image[1] = "img/0521-Cooking.jpg";
    image[2] = "img/1296x728_7_Ways_Home_Cooking_Beats_Ordering_Takeout_0.jpg";
    image[3] = "img/iStock-934286312.jpg";

    const a = Math.round(Math.random() * 3);
    delimg.src = image[a];
}


/* Spam */

const timeID2 = setTimeout(spam, 3000);

function spam() {
    let i = 0;
    do {
        alert("Spam" + i);
        i++;
    } while (i < 3);
}