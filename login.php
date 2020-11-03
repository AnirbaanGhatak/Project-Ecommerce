<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>

  <link rel="stylesheet" href="in.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="container">
    <div class="titl">
      <h1>Login</h1>
    </div>

    <form action="index.php" method="post" id="login">
      <div class="inpbox">
        <input type="text" placeholder="Name" id="name" />
        <i class="fa fa-check-circle"></i>
        <i class="fa fa-exclamation-circle"></i>

        <small></small>
      </div>

      <div class="inpbox">
        <input type="email" placeholder="Email ID" id="email" />
        <i class="fa fa-check-circle"></i>
        <i class="fa fa-exclamation-circle"></i>

        <small></small>
      </div>

      <div class="inpbox">
        <input type="password" placeholder="Password" id="password" />
        <i class="fa fa-check-circle"></i>
        <i class="fa fa-exclamation-circle"></i>

        <small></small>
      </div>

      <button type="submit">Login</button>
    </form>
  </div>
  <script>
    const login = document.getElementById("login");
    const namee = document.getElementById("name");
    const email = document.getElementById("email");
    const pass = document.getElementById("password");

    login.addEventListener('submit', e => {
      console.log(count);

      if (count >= 3) {
        console.log(count);
        window.location.assign("input.php");

      } else {
        console.log(count);
        e.preventDefault();

        check();
      }

    });

    function check() {

      const nVal = namee.value.trim();
      const eVal = email.value.trim();
      const passVal = pass.value.trim();

      if (nVal === "") {
        errormsg(namee, "*Username cannot be Empty");

      } else {
        successmsg(namee);
        count += 1;
      }

      if (eVal === '') {
        errormsg(email, "*Invalid Email ID");
      } else if (!validMail(eVal)) {
        errormsg(email, "*Invalid Email ID");
      } else {
        successmsg(email);
        count += 1;

      }

      if (passVal === '') {
        errormsg(pass, "*Password cannot be Empty");
      } else {
        successmsg(pass);
        count += 1;

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
  </script>
</body>

</html>