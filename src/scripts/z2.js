
//Add border (ckick h2 "Dlaczego...")
function addBorder() {
    let imgF = document.images.item(0);
    imgF.style.border = "10px dotted black";
}

//Add border (ckick img1 page: subsc)
function addBorder2() {
    let imgF = document.images.namedItem("named_img");
    imgF.style.border = "10px dotted black";
}

// Get regulamin URL
function getURL(){
    let gU = document.links[7].href;
    alert(gU);
}

// Find out how many forms are on the subscription page
function numberOfForm(){
    let num = document.forms.length;
    alert(num);
}

// Find out how many a are on the sztrudel page
function numberOfA(){
    let num = document.anchors.length;
    alert(num);
}

