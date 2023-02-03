"use strict";

let intId = document.getElementById("internetStatus");
let sucText = "Your internet connection is back.";
let failText = "Oops! No internet connection.";
let sucCol = "#00b894";
let failCol = "#ea4c62";

if(intId) {
    if(window.navigator.onLine) {
        intId.innerHTML = sucText;
        intId.style.display = "none";
        intId.style.backgroundColor = sucCol;
    } else {
        intId.innerHTML = failText;
        intId.style.display = "block";
        intId.style.backgroundColor = failCol;
    }

    window.addEventListener("online", function() {
        intId.innerHTML = sucText;
        intId.style.display = "block";
        intId.style.backgroundColor = sucCol;
        setTimeout(function() {
            var fade2Out = setInterval(function () {
                if (!intId.style.opacity) {
                    intId.style.opacity = 1;
                }
                if (intId.style.opacity > 0) {
                    intId.style.opacity -= 0.1;
                } else {
                    clearInterval(fade2Out);
                    intId.style.display = "none";
                }
            }, 20);
        }, 5000);
    });
    
    window.addEventListener("offline", function() {
        intId.innerHTML = failText;
        intId.style.display = "block";
        intId.style.backgroundColor = failCol;
    });
}