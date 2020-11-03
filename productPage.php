<?php


include("./header_php/header.php");
$category = $_GET['category'] ?? 'fruits';
$products = $prod->getData($category);

//request method
ob_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //ADDING TO CART

  $Cart->addToCart($_POST["user_id"], $_POST["item_id"]);
}

?>

<section id="productsList" class="background-body">
  <div class="container py-5">
    <h3 class="font-inter color-third">Products</h3>
    <hr class="cl1" />
    <div class="products background-secondary rounded pt-4">

      <?php foreach ($products as $item) { ?>

        <div class="item font-nato w-20 d-inline-block px-2 mb-5 lefalgn" style="height: 625%; width: 15%;">
          <a href="<?php printf("%s?category=%s&item_id=%s", "itempage.php", $category, $item["item_id"]); ?>"><img src="<?php echo $item["item_image"] ?? "../assets/assets3.jpg" ?>" alt="ipace1" class="rounded-top mx-auto d-inline-block background-secondary border" style="width: 100%;" /></a>
          <div class="text-center rounded-bottom background-prod border-top-primary">
            <h6 class="py-2 px-1 color-primary font-16 rounded w-50 d-inline-block mt-2">
              <?php echo $item["item_name"] ?? "Pear"; ?>
            </h6>
            <div class="price py-3">
              <span class="py-1 px-1 rounded">₹<?php echo $item["item_price"] ?? "100"; ?></span>
            </div>
            <div class="py-2">
              <form method="post">
                <input type="hidden" name="item_id" value="<?php echo $item["item_id"] ?? "1"; ?>">
                <input type="hidden" name="user_id" value="<?php echo "1"; ?>">
                <!-- <input type="hidden" name="item_id" value="<?php echo $item["user_id"] ?? "1"; ?>"> -->
                <?php
                if (in_array($item['item_id'], $Cart->getCid($prod->getData('cart')) ?? [])) {
                  echo '<button type="submit" disabled class="btn font-size-12">In the Cart</button>';
                } else {
                  echo '<button type="submit" name="ale" class="btn btn-custom font-size-12">Add to Cart</button>';
                }
                ?>

              </form>

            </div>
          </div>
        </div>
      <?php } ?>

      <!-- <div class="item font-nato w-20 d-inline-block px-2 mb-5"  style="height: 625%; width: 15%;">
            <a href="itempage.php"  
              ><img
                src="../assets/assets3.jpg"
                alt="ipace1"
                class="rounded-top mx-auto d-inline-block background-secondary border"
                style="width: 100%;"
            /></a>
            <div
              class="text-center rounded-bottom background-prod border-top-primary"
            >
              <h6
                class="py-2 px-1 color-primary font-16 rounded w-50 d-inline-block mt-2"
              >
                Pear
              </h6>
              <div class="price py-3">
                <span class="py-1 px-1 rounded">₹100</span>
              </div>
              <div class="py-2">
                <button type="submit" class="btn btn-custom font-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>


          <div class="item font-nato w-20 d-inline-block px-2 mb-5"  style="height: 625%; width: 15%;">
            <a href="itempage.php"  
              ><img
                src="../assets/assets3.jpg"
                alt="ipace1"
                class="rounded-top mx-auto d-inline-block background-secondary border"
                style="width: 100%;"
            /></a>
            <div
              class="text-center rounded-bottom background-prod border-top-primary"
            >
              <h6
                class="py-2 px-1 color-primary font-16 rounded w-50 d-inline-block mt-2"
              >
                Pear
              </h6>
              <div class="price py-3">
                <span class="py-1 px-1 rounded">₹100</span>
              </div>
              <div class="py-2">
                <button type="submit" class="btn btn-custom font-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

   
          <div class="item font-nato w-20 d-inline-block px-2 mb-5"  style="height: 625%; width: 15%;">
            <a href="itempage.php"  
              ><img
                src="../assets/assets3.jpg"
                alt="ipace1"
                class="rounded-top mx-auto d-inline-block background-secondary border"
                style="width: 100%;"
            /></a>
            <div
              class="text-center rounded-bottom background-prod border-top-primary"
            >
              <h6
                class="py-2 px-1 color-primary font-16 rounded w-50 d-inline-block mt-2"
              >
                Pear
              </h6>
              <div class="price py-3">
                <span class="py-1 px-1 rounded">₹100</span>
              </div>
              <div class="py-2">
                <button type="submit" class="btn btn-custom font-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          
          <div class="item font-nato w-20 d-inline-block px-2 mb-5"  style="height: 625%; width: 15%;">
            <a href="itempage.php"  
              ><img
                src="../assets/assets3.jpg"
                alt="ipace1"
                class="rounded-top mx-auto d-inline-block background-secondary border"
                style="width: 100%;"
            /></a>
            <div
              class="text-center rounded-bottom background-prod border-top-primary"
            >
              <h6
                class="py-2 px-1 color-primary font-16 rounded w-50 d-inline-block mt-2"
              >
                Pear
              </h6>
              <div class="price py-3">
                <span class="py-1 px-1 rounded">₹100</span>
              </div>
              <div class="py-2">
                <button type="submit" class="btn btn-custom font-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <div class="item font-nato w-20 d-inline-block px-2 mb-5"  style="height: 625%; width: 15%;">
            <a href="itempage.php"  
              ><img
                src="../assets/assets3.jpg"
                alt="ipace1"
                class="rounded-top mx-auto d-inline-block background-secondary border"
                style="width: 100%;"
            /></a>
            <div
              class="text-center rounded-bottom background-prod border-top-primary"
            >
              <h6
                class="py-2 px-1 color-primary font-16 rounded w-50 d-inline-block mt-2"
              >
                Pear
              </h6>
              <div class="price py-3">
                <span class="py-1 px-1 rounded">₹100</span>
              </div>
              <div class="py-2">
                <button type="submit" class="btn btn-custom font-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

      
          <div class="item font-nato w-20 d-inline-block px-2 mb-5 lefalgn"  style="height: 625%; width: 15%;">
            <a href="itempage.php"  
              ><img
                src="../assets/assets3.jpg"
                alt="ipace1"
                class="rounded-top mx-auto d-inline-block background-secondary border"
                style="width: 100%;"
            /></a>
            <div
              class="text-center rounded-bottom background-prod border-top-primary"
            >
              <h6
                class="py-2 px-1 color-primary font-16 rounded w-50 d-inline-block mt-2"
              >
                Pear
              </h6>
              <div class="price py-3">
                <span class="py-1 px-1 rounded">₹100</span>
              </div>
              <div class="py-2">
                <button type="submit" class="btn btn-custom font-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>

          <div class="item font-nato w-20 d-inline-block px-2 mb-5"  style="height: 625%; width: 15%;">
            <a href="itempage.php"  
              ><img
                src="../assets/assets3.jpg"
                alt="ipace1"
                class="rounded-top mx-auto d-inline-block background-secondary border"
                style="width: 100%;"
            /></a>
            <div
              class="text-center rounded-bottom background-prod border-top-primary"
            >
              <h6
                class="py-2 px-1 color-primary font-16 rounded w-50 d-inline-block mt-2"
              >
                Pear
              </h6>
              <div class="price py-3">
                <span class="py-1 px-1 rounded">₹100</span>
              </div>
              <div class="py-2">
                <button type="submit" class="btn btn-custom font-12">
                  Add to Cart
                </button>
              </div>
            </div>
          </div> -->


    </div>
  </div>
</section>

<?php
include("./header_php/footer.php");
?>