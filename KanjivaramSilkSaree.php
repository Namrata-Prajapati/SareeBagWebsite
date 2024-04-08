<?php 
 session_start();
 require_once("dbcontroller.php");
 $db_handle = new DBController();
 $ct = $_GET['type'].'%';
 if(!empty($_GET["action"])) {
 switch($_GET["action"]) {
   case "add":
     if(!empty($_POST["quantity"])) {
       $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
       $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
       
       if(!empty($_SESSION["cart_item"])) {
         if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
           foreach($_SESSION["cart_item"] as $k => $v) {
               if($productByCode[0]["code"] == $k) {
                 if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                   $_SESSION["cart_item"][$k]["quantity"] = 0;
                 }
                 $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
               }
           }
         } else {
           $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
         }
       } else {
         $_SESSION["cart_item"] = $itemArray;
       }
     }
   break;
   case "remove":
     if(!empty($_SESSION["cart_item"])) {
       foreach($_SESSION["cart_item"] as $k => $v) {
           if($_GET["code"] == $k)
             unset($_SESSION["cart_item"][$k]);				
           if(empty($_SESSION["cart_item"]))
             unset($_SESSION["cart_item"]);
       }
     }
   break;
   case "empty":
     unset($_SESSION["cart_item"]);
   break;	
 }
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traditional Fashion</title>
    <link href="CSS/tailwind.css" rel="stylesheet">
    <link href="CSS/styles.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-image: url(images/Background/bg6.jpg);">
    <!--Header-->
    <?php
    include './header.php'
    ?>
    <section>
      
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>&type=<?= $ct?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>
    </section>
    <!--Middle Content-->
    <section class="text-gray-700 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
        <?php
          $product_array = $db_handle->runQuery("SELECT * FROM tblproduct where code like 'k%' ORDER BY id ASC");
          if (!empty($product_array)) { 
            foreach($product_array as $key=>$value){
          ?>
              <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                <a class="block relative rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="<?= $product_array[$key]["image"]; ?>">
                </a>
                <div class="mt-4">
                  <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?= $product_array[$key]["name"]; ?></h3>
                  <h2 class="text-gray-900 title-font text-lg font-medium">LIPIKA - Purple With Zari Border Magenta Pallu Pure Silk Saree</h2>
                  <p class="mt-1">Rs. <?= $product_array[$key]["price"]; ?></p>
                </div>
              </form>
              </div>
          <?php
            }
          }
          ?>
       
        </div>
      </div>
    </section>
    <!--Footer-->
    <footer class="text-white-700 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap md:text-left text-center order-first">
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-bold text-white-900 tracking-widest text-sm mb-3">CATEGORIES IN SAREES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white-600 hover:text-white-800" href="BulkUniformSaree.php">Bulk Uniform Sarees</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="KanjivaramSilkSaree.php">Kanjivaram Silk Sarees</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="RawSilkSaree.php">Raw Silk Sarees</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="SoftSilkSaree.php">Soft Silk Sarees</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="PureSouthIndianCottonSaree.php">Pure South Indian Cotton Sarees</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="CrepeSilkSaree.php">Crepe Silk Sarees</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-bold text-white-900 tracking-widest text-sm mb-3">CATEGORIES IN BAG</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white-600 hover:text-white-800" href="ShoulderBags.php">Shoulder Bag</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="CrossBodyBags.php">Crossbody Bag</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="ShopperToteBags.php">Shopper Tote Bag</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="MicroMiniBags.php">Micro Mini Bag</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="TopHandleBags.php">Top Handle Bag</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-bold text-white-900 tracking-widest text-sm mb-3">About</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white-600 hover:text-white-800" href="AboutUs.php">About Us</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="Contact.php">Contacts</a>
              </li>
              <li>
                <a class="text-white-600 hover:text-white-800" href="Terms&Conditions.php">Terms & Conditions</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-bold text-white-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
            <div class="flex xl:flex-no-wrap md:flex-no-wrap lg:flex-wrap flex-wrap justify-center md:justify-start">
              <input class="w-40 sm:w-auto bg-gray-100 rounded xl:mr-4 lg:mr-0 sm:mr-4 mr-2 border border-gray-400 focus:outline-none focus:border-indigo-500 text-base py-2 px-4" placeholder="Placeholder" type="text">
              <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Subscribe</button>
            </div>
            <p class="text-white-500 text-sm mt-2 md:text-left text-center">Your Email Address</p>
          </div>
        </div>
      </div>
      <div class="bg-gray-200">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
          <a href="Home.php"><img src="Logo/Logo1.png" alt="logo"></a>
          <p class="text-sm text-white-500 sm:ml-6 sm:mt-0 mt-4">© 2020 SonalBlocks —
            <a href="https://twitter.com" rel="noopener noreferrer" class="text-white-600 ml-1" target="_blank">@SonalK</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-white-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-white-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-white-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-white-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </footer>
</body>
</html>