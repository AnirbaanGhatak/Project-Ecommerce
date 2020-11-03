const login = document.getElementById("login");
const namee = document.getElementById("name");
const email = document.getElementById("email");
const pass = document.getElementById("password");

login.addEventListener('submit', e => {
    e.preventDefault();

    check();
});

function check() {

    const nVal = namee.value.trim();
    const eVal = email.value.trim();
    const passVal = pass.value.trim();

    if (nVal === "") {
        errormsg(namee, "*Username cannot be Empty");

    } else {
        successmsg(namee);
    }

    if (eVal === '') {
        errormsg(email, "*Invalid Email ID");
    } else if (!validMail(eVal)) {
        errormsg(email, "*Invalid Email ID");
    } else {
        successmsg(email);
    }

    if (passVal === '') {
        errormsg(pass, "*Password cannot be Empty");
    } else {
        successmsg(pass);
    }
}



function errormsg(input, message) {

    const inpbox = input.parentElement; //.inpbox
    const small = inpbox.querySelector('small');

    small.innerText = message;

    inpbox.className = 'inpbox error';
    console.log("Error");
}

function successmsg(input) {
    const inpbox = input.parentElement;
    const small = inpbox.querySelector('small');

    small.innerText = '';

    inpbox.className = 'inpbox success';
}

function validMail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}