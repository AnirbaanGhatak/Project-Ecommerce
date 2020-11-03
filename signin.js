const signup = document.getElementById('signup');
const namee = document.getElementById("name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const pass = document.getElementById("password");
const cnpass = document.getElementById("confirm");

const count = 1;

signup.addEventListener('submit', e => {

    document.write(count);

    if (count == 6) {
        document.write(count);
        window.location.assign("./index.php");
    }
    else {
        document.write(count);
        e.preventDefault();

        check();
    }

});



function check() {


    const nVal = namee.value.trim();
    const eVal = email.value.trim();
    const pVal = phone.value.trim();
    const passVal = pass.value.trim();
    const cnpVal = cnpass.value.trim();

    if (nVal === "") {
        errormsg(namee, "*Username cannot be Empty");

    } else {
        count++;

        successmsg(namee);
        return 0;
    }

    if (pVal === '' || pVal.length !== 10) {
        errormsg(phone, "*Invalid Phone number");
    }
    else {
        count++;

        successmsg(phone);

        return 0;
    }

    if (eVal === '') {
        errormsg(email, "*Invalid Email ID");
    } else if (!validMail(eVal)) {
        errormsg(email, "*Invalid Email ID");
    } else {
        count++;

        successmsg(email);

        return 0;
    }

    if (passVal === '') {
        errormsg(pass, "*Password cannot be Empty");
    } else {
        count++;

        successmsg(pass);

        return 0;
    }

    if (cnpVal === '') {
        errormsg(cnpass, "*Confirm Password cannot be Empty");
    } else if (cnpVal !== passVal) {
        errormsg(cnpass, "*Password doesn't match");
    } else {
        count++;
        successmsg(cnpass);


        return 0;
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