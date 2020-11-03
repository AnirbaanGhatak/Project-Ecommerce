<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />

  <title>Home Page</title>

  <link rel="stylesheet" href="./index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="./style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

  <?php

  //functions
  require("functions.php");

  ?>

</head>

<body class="bod">
  <header class="headerNav">
    <a href="./index.php" class="logo">Project: <span>Ecommerce</span></a>
    <div class="search-box">
      <input type="text" name="search" placeholder="Search" />
      <button>Search</button>
    </div>
    <nav>
      <ul class="mainList">
        <li><a href="./signup.php">SignUp</a></li>
        <li><a href="./login.php">Login</a></li>
        <li>
          <form action="">
            <a href="./cart.php"><i class="fa fa-shopping-cart"></i>
              <span style="color: rgba(145, 245, 145, 1); font-weight: 600;"><?php echo count($prod->getData('cart'));?></span></a>
          </form>
        </li>
      </ul>
    </nav>
  </header>
  <header class="subHeader">
    <nav>
      <ul class="subList">
        <li>
          <a href="#" class="optn">Your Orders </a>
        </li>
        <li>
          <a href="#" class="optn">Your Account</a>
        </li>
        <li>
          <a href="#" class="optn">Your WishList</a>
        </li>
        <li>
          <a href="#" class="optn" id="cs">Customer Service</a>
        </li>
      </ul>
    </nav>
  </header>

  <div class="mainbox" style="margin-bottom: 5%;">