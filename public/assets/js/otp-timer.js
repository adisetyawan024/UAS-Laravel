"use strict";

let resendOTP = document.getElementById("resendOTP");

if(resendOTP) {
    let optcount = 90;
    let optcounter = setInterval(otptimer, 1000);
    
    function otptimer() {
        optcount = optcount - 1;
    
        if (optcount <= 0) {
            clearInterval(optcounter);
            resendOTP.innerHTML = '<a class="resendOTP" href="">Resend OTP</a>';
        } else {
            resendOTP.innerHTML = 'Wait ' + optcount + ' secs';
        }
    
        if (optcount <= 10) {
            resendOTP.style.color = "red";
        }
    }
}