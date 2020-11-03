<?php
include("./header_php/header.php")
?>
<div style="margin: 10px auto; display: table; width: 98%; height: 90%">
  <div class="vegetable">
    <a href="<?php printf("%s?category=%s", "productPage.php", 'vegetables') ?>" class="categoryName">
      <div class="btw">
        <p class="centerText" style="top: 85px">Vegetables</p>
      </div>
    </a>
  </div>

  <div class="sub" style="display: table">
    <div class="sscat" style="margin-bottom: 50px">
      <div class="sscatItem" style="background-image: url(./assets/fish.jpg)">
        <a href="<?php printf("%s?category=%s", "productPage.php", 'fish') ?>" class="categoryName">
          <div class="btw">
            <p class="centerText" style="top: 30px">Fish</p>
          </div>
        </a>
      </div>

      <div class="sscatItem" style="background-image: url(./assets/beverages.jpg)">
        <a href="<?php printf("%s?category=%s", "productPage.php", 'beverage') ?>" class="categoryName">
          <div class="btw">
            <p class="centerText" style="top: 30px">Beverages</p>
          </div>
        </a>
      </div>
    </div>

    <div class="sscat">
      <div class="sscatItem" style="background-image: url(./assets/meat.jpg)">
        <a href="<?php printf("%s?category=%s", "productPage.php", 'meat') ?>" class="categoryName">
          <div class="btw">
            <p class="centerText" style="top: 30px">Chicken/ Meat</p>
          </div>
        </a>
      </div>

      <div class="sscatItem" style="background-image: url(./assets/dairy.jpg)">
        <a href="<?php printf("%s?category=%s", "productPage.php", 'dairy') ?>" class="categoryName">
          <div class="btw">
            <p class="centerText" style="top: 30px">Dairy</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="sub" style="width: 30%; background-color: white">
    <div class="fruits">
      <a href="<?php printf("%s?category=%s", "productPage.php", 'fruits') ?>" class="categoryName">
        <div class="btw">
          <p class="centerText" style="top: 50px" id="bev">Fruits</p>
        </div>
      </a>
    </div>
  </div>
</div>
</div>






<?php
include("./sales_php/sales.php")
?>

<?php
include("./header_php/footer.php")
?>