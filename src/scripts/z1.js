
  function addHappy() {
    const newItem = document.createElement("LI");
    const textnode = document.createTextNode("Happy");
    newItem.appendChild(textnode);
    const list = document.getElementById("mood_list");
    list.insertBefore(newItem, list.childNodes[0]);
  }

  function replaceSad() {
    const textnode = document.createTextNode("Amazing");
    const item = document.getElementById("sad");
    item.replaceChild(textnode, item.childNodes[0]);

    document.getElementById("sad_button").disabled = true;
  }

  function removeBored() {
    const listM = document.getElementById("mood_list");
    listM.removeChild(listM.lastChild);
    document.getElementById("bored_button").disabled = true;
  }

  function removeList(){
    const listM = document.getElementById("mood_list");
    listM.parentNode.removeChild(listM);
    document.getElementById("list_button").disabled = true;
    document.getElementById("happy_button").disabled = true;
    document.getElementById("sad_button").disabled = true;
    document.getElementById("bored_button").disabled = true;
 }