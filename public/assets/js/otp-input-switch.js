(function () {
    "use strict";

    let otpInput = document.querySelectorAll(".otp-input-group")[0];
    otpInput.addEventListener("keyup", function (e) {
        let t = e.target,
            n = parseInt(t.attributes.maxlength.value, 10),
            a = t.value.length;
        if (a >= n) {
            for (let r = t;
                (r = r.nextElementSibling) && null != r;)
                if ("input" === r.tagName.toLowerCase()) {
                    r.focus();
                    break
                }
        } else if (0 === a)
            for (let u = t;
                (u = u.previousElementSibling) && null != u;)
                if ("input" === u.tagName.toLowerCase()) {
                    u.focus();
                    break
                }
    });

})();