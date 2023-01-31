<?php
session_start();

// print_r($_SESSION); //print out the sesion array ej: Array ( [user_id] => 1 )

include("includes/active_session.php");
include("includes/dbconx.php");
include("includes/error-reporting.php");
include("includes/config.php");

?>


<!doctype html>

<html lang="en">

<?php
//ini_set() method
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<!-- Head data -->

<head>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/sell.css">

  <style>
    main.index-sell {
      width: 50% !important;
      margin: 50px auto !important;
    }

    .sell-page-title {
      margin-bottom: 50px;
    }

    .container-input {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      background-color: #FCF9F9;
      margin-bottom: 40px;
      height: 80px;
      padding: 20px;
    }

    .text-input {
      border: none;
      background-color: #FCF9F9;
      border-bottom: 1px solid #928D8D;
      width: 80%;
    }
  </style>
  <?php include('includes/dbconx.php');
  include("modules/head-content.php"); ?>
</head>

<body>
  <header>
    <?php
    if (isset($_SESSION["user_id"])) {
      include("modules/navbar-logged.php");
    } else {
      include("modules/navbar.php");
    }
    ?>
  </header>

  <!-- main content data  -->
  <main class="index-sell">
    <h1 class="sell-page-title">Sell an item</h1>
    <form class="sell-form" action="process-sell.php" method="get" id="sell" enctype="multipart/form-data" novalidate>

      <!-- user -->
      <?php include("includes/active-session.php") ?>
      <input type='hidden' name='user' value=' <?= $user["user_ID"] ?>'>

      <!-- Image -->
      <div class="container-input">
        <label for="file">Upload photos</label><br>
        <input type="file" id="submit-imgPic" name="file"><br>
        <button type="submit" id="submit-imgPic" name="Chose a file">Upload picture</button>
      </div>

      <!-- title -->
      <div class="container-input">
        <label for="title">title</label><br>
        <input class="text-input" type="title" id="title" name="title" placeholder="e.g. Black jeans"><br>
      </div>

      <!-- Description -->
      <div class="container-input">
        <label for="descript">Description</label><br>
        <input class="text-input" type="descript" id="descript" name="descript" id="descript" placeholder="e.g. hight waist skinny jeans"><br>
      </div>



      <!-- category -->
      <div class="container-input">
        <label for="category">Category</label><br>
        <div>
          <select name="category">

            <?php
            echo $category = $_GET["category"];
            ?>
            <!-- <option value="">--Please choose an option--</option> -->
            <option value="women" <?php echo $category == "women" ? 'selected' : ''; ?>>women</option>
            <option value="men" <?php echo $category == "men" ? 'selected' : ''; ?>>men</option>
            <option value="kids" <?php echo $category == "kids" ? 'selected' : ''; ?>>kids</option>
            <option value="entertainment" <?php echo $category == "entertainment" ? 'selected' : ''; ?>>entertainment</option>
            <option value="shoes" <?php echo $category == "shoes" ? 'selected' : ''; ?>>shoes</option>
            <option value="accessories" <?php echo $category == "accessories" ? 'selected' : ''; ?>>accessories</option>
            <option value="sport" <?php echo $category == "sport" ? 'selected' : ''; ?>>sport</option>
            <option value="petCare" <?php echo $category == "petCare" ? 'selected' : ''; ?>>petCare</option>
          </select>
        </div>
      </div>

      <!-- brand -->
      <div class="container-input">
        <label for="brand">Brand</label><br>
        <input class="text-input" type="brand" name="brand" id="brand" placeholder="e.g. Lee"><br>
      </div>

      <!-- condition -->
      <div class="container-input">
        <label for="condition1">Condition</label><br>
        <input class="text-input" type="condition1" name="condition1" id="condition1" placeholder="e.g. only worn a few times"><br>
      </div>

      <div class="container-input">
        <label for="size">size</label><br>
        <div>
          <select name="size">
            <?php
            echo $size = $_GET["size"]
            ?>
            <option <?php echo $size == "on size" ? 'selected' : ''; ?>>one size</option>
            <option <?php echo $size == "xs" ? 'selected' : ''; ?>>xs</option>
            <option <?php echo $size == "s" ? 'selected' : ''; ?>>s</option>
            <option <?php echo $size == "M" ? 'selected' : ''; ?>>M</option>
            <option <?php echo $size == "L" ? 'selected' : ''; ?>>L</option>
            <option <?php echo $size == "XL" ? 'selected' : ''; ?>>XL</option>
            <option <?php echo $size == "3" ? 'selected' : ''; ?>>Shoes: 3</option>
            <option <?php echo $size == "4" ? 'selected' : ''; ?>>Shoes: 4</option>
            <option <?php echo $size == "5" ? 'selected' : ''; ?>>Shoes: 5</option>
            <option <?php echo $size == "6" ? 'selected' : ''; ?>>Shoes: 6</option>
            <option <?php echo $size == "7" ? 'selected' : ''; ?>>Shoes: 7</option>
            <option <?php echo $size == "8" ? 'selected' : ''; ?>>Shoes: 8</option>
            <option <?php echo $size == "9" ? 'selected' : ''; ?>>Shoes: 9</option>
          </select>
        </div>
      </div>

      <!-- price -->
      <div class="container-input">
        <label for="price">Price</label><br>
        <input class="text-input" type="price" name="price" id="price" placeholder="e.g £11"><br>
      </div>

      <button type="submit" class="btn btn-info">Upload</button>

    </form>
  </main>

  <!-- Footer data  -->
  <footer>
    <?php include("modules/footer.php"); ?>
  </footer>

</body>

</html>