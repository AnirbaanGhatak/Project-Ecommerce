<?php
include("./header_php/header.php");
$category = $_GET['category'] ?? 'fruits';
$item_id = $_GET["item_id"] ?? 1;

//request method
ob_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //ADDING TO CART

  $Cart->addToCart($_POST["user_id"], $_POST["item_id"]);}

foreach ($prod->getData($category) as $item) :
  if ($item["item_id"] == $item_id) :
?>

    <section id="item-full" class="py-3 px-4">
      <div class="container background-secondary">
        <div class="row">
          <div class="col-sm-6">
            <img src="<?php echo $item["item_image"] ?? "../assets/assets3.jpg" ?>" alt="large product" class="img-fluid ml-2" />
            <div class="from-row pt-4 font-16 font-inter">
              <div class="col">

              <form method="post">
                <input type="hidden" name="item_id" value="<?php echo $item["item_id"] ?? "1"; ?>">
                <input type="hidden" name="user_id" value="<?php echo "1"; ?>">
                <!-- <input type="hidden" name="item_id" value="<?php echo $item["user_id"] ?? "1"; ?>"> -->
                <?php
                if (in_array($item['item_id'], $Cart->getCid($prod->getData('cart')) ?? [])) {
                  echo ' <button type="submit" disabled class="btn form-control mb-3">
                  Item Added <i class="fa fa-shopping-cart"></i>
                </button>';
                } else {
                  echo ' <button type="submit" class="btn-custom form-control mb-3">
                  Add to Cart <i class="fa fa-shopping-cart"></i>
                </button>';
                }
                ?>

              </form>
               
              </div>
            </div>
          </div>
          <div class="col-sm-6 py-5">
            <div class="d-flex">
              <div class="w-75 p-3">
                <h4 class="font-inter font-30 "><em ><?php echo $item["item_name"] ?? "Pear" ?></em></h4>
                <hr class="gline" />
              </div>
              <div class="w-50 py-3">
                <span class="color-primary font-weight-bold font-25"><?php echo $item["item_qty"]?? "100" ?></span>
                <hr class="gline w-35" />
              </div>
            </div>

            <div class="d-flex">
              <p class="border-all rounded py-2 px-2 des">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                eleifend diam a accumsan bibendum. Phasellus id scelerisque
                sapien. Cras tincidunt turpis placerat quam tristique, sodales
                fermentum diam dictum. Pellentesque blandit rhoncus justo, eget
                condimentum eros finibus sollicitudin. Sed vitae dapibus leo.
                Proin vehicula mauris nec nisi suscipit, id dictum lacus
                vulputate. Duis auctor nulla ac convallis eleifend.
              </p>
            </div>
            <div class="row">
              <div class="col-6 mx-auto">
                <div class="qty d-flex">
                  <h5 class="color-primary">Qty:</h5>
                  <div class="px-2 d-flex">
                    <button class="qty-up border bg-light" data-id="pro3">
                      <i class="fa fa-arrow-up color-primary" aria-hidden="true"></i>
                    </button>
                    <input type="text" class="qty_inp border bg-light pl-3 w-50" data-id="pro3" disabled value="1" placeholder="1" />
                    <button class="qty-down border bg-light" data-id="pro3">
                      <i class="fa fa-arrow-down color-primary" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
  endif;
endforeach;
include("./header_php/footer.php");
?>