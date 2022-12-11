var paddock1 = document.getElementById("paddock1")
var paddock2 = document.getElementById("paddock2")
var paddock3 = document.getElementById("paddock3")
var pd1selected = false;
var pd2selected = false;
var pd3selected = false;

paddock1.addEventListener("click", (event) => {
    if (pd1selected == false) {
        pd1selected = true
        console.log("paddock1 "+ pd1selected)
        paddock1.src = "../imgs/paddock1-2_selected.png"
    }

    else if (pd1selected == true) {
        pd1selected = false
        console.log("paddock1 "+ pd1selected)
        paddock1.src = "../imgs/paddock1-2.png"

    }
},);



paddock2.addEventListener("click", (event) => {
    if (pd2selected == false) {
        pd2selected = true
        console.log("paddock2 "+ pd2selected)
        paddock2.src = "../imgs/paddock1-2_selected.png"
    }

    else if (pd2selected == true) {
        pd2selected = false
        console.log("paddock2 "+ pd2selected)
        paddock2.src = "../imgs/paddock1-2.png"

    }
},);


paddock3.addEventListener("click", (event) => {
    if (pd3selected == false) {
        pd3selected = true
        console.log("paddock3 "+ pd3selected)
        paddock3.src = "../imgs/paddock3_selected.png"
    }

    else if (pd3selected == true) {
        pd3selected = false
        console.log("paddock3 "+ pd3selected)
        paddock3.src = "../imgs/paddock3.png"

    }
},);