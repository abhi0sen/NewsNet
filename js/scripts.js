function init() {
    nam = document.getElementById('username');
    nam1 = document.getElementById('paper_name');
    pass = document.getElementById('password');
    cpass = document.getElementById('cpassword');
    pass1 = document.getElementById('pass');
    cpass1 = document.getElementById('cpass');
    mob1 = document.getElementById('cont');
    mob = document.getElementById('contact');

    err1 = document.getElementById('err1');
    err2 = document.getElementById('err2');
    err3 = document.getElementById('err3');
    err4 = document.getElementById('err4');
    err5 = document.getElementById('err5');

    console.log(nam + " : : " + err);
}

function validation() {
    var nm = nam.value;
    var nm1 = nam1.value;
    var pas = pass.value;
    var cpas = cpass.value;
    var pas1 = pass1.value;
    var cpas1 = cpass1.value;
    var phn1 = mob1.value;
    var phn = mob.value;
    if (nm.length == 0) {
        err1.innerHTML = "Plz enter your name";
        err1.style.color = "red";
    }
    else {
        err1.innerHTML = "";
    }
    if (pas.length == 0) {
        err2.innerHTML = "Plz enter your password";
        err2.style.color = "red";
    }
    else if (pas.length < 5 && pas.length > 0) {
        err2.innerHTML = "Plz enter password in 5-8 digit";
        err2.style.color = "red";
    }
    else {
        err2.innerHTML = "";
    }

    if (cpas.length == 0) {
        err4.innerHTML = "Plz re-enter password";
        err4.style.color = "red";
    }

    if (phn.length == 0) {
        err3.innerHTML = "Plz enter your mobile no";
        err3.style.color = "red";
    }
    else if (isNaN(phn)) {
        err3.innerHTML = "Plz enter only numeric digit";
        err3.style.color = "red";
    }

    else if (phn.length < 10 || phn.length > 10) {
        err3.innerHTML = "Plz enter 10 digit mobile no";
        err3.style.color = "red";
    }
    else {
        err3.innerHTML = "";
    }
}

function checkpass() {
    if (cpass.value != pass.value) {
        err4.innerHTML = "Password didn't match...";
        err4.style.color = "red";
        err4.innerHTML = "Password didn't match...";
        err4.style.color = "red";
    }
    else {
        err4.innerHTML = "";
    }
}

function pap_validation() {
    var nm1 = nam1.value;
    var pas1 = pass1.value;
    var cpas1 = cpass1.value;
    var phn1 = mob1.value;

    if (nm1.length == 0) {
        err5.innerHTML = "Plz enter your name";
        err5.style.color = "red";
    }
    else {
        err5.innerHTML = "";
    }
    if (pas1.length == 0) {
        err7.innerHTML = "Plz enter your password";
        err7.style.color = "red";
    }
    else if (pas1.length < 5 && pas1.length > 0) {
        err7.innerHTML = "Plz enter password in 5-8 digit";
        err7.style.color = "red";
    }
    else {
        err7.innerHTML = "";
    }

    if (cpas1.length == 0) {
        err8.innerHTML = "Plz re-enter password";
        err8.style.color = "red";
    }

    if (phn1.length == 0) {
        err6.innerHTML = "Plz enter your mobile no";
        err6.style.color = "red";
    }
    else if (isNaN(phn1)) {
        err6.innerHTML = "Plz enter only numeric digit";
        err6.style.color = "red";
    }
    else if (phn1.length < 10 || phn1.length > 10) {
        err6.innerHTML = "Plz enter 10 digit mobile no";
        err6.style.color = "red";
    }
    else {
        err6.innerHTML = "";
    }
}

function pap_checkpass() {
    if (cpass1.value != pass1.value) {
        err8.innerHTML = "Password didn't match...";
        err8.style.color = "red";
    }
    else {
        err8.innerHTML = "";
    }
}