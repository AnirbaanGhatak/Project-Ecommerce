
 <?php

   //MySQL connection
   require("database/table1.php");


   //products
   require("database/products.php");

   //cart
   require("database/cart.php");

   require("database/signup.php");


   $db = new Dbcontrol();
   $prod = new Product($db);

   $products = $prod->getData();

   $Cart = new Cart($db);

   $signup = new Signup($db);
