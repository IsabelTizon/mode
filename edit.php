<?php
//session is started
session_start();

// print_r($_SESSION); //print out the sesion array ej: Array ( [user_id] => 1 )

// Including error reporting, config and active session files.
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
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/sell.css">

  <!-- Internal CSS -->
  <!-- I resorted to the internal css because the external did not change the styles  -->
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
      flex-direction: column;
      justify-content: space-between;
      background-color: #FCF9F9;
      margin-bottom: 40px;
      height: 130px;
      padding: 20px;
    }

    .container-input-file {
      height: 150px;
    }

    .text-input {
      border: none;
      background-color: #FCF9F9;
      border-bottom: 1px solid #928D8D;
      width: 80%;
    }

    .btn.btn-upload-edit {
      color: #ffffff;
      background-color: #712296;
    }
  </style>

  <!-- Just validate -->
  <!-- defer atributte to ensure they downloded in order -->

  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>

  <script src="./js/validation-edit.js" defer></script>

  <!-- Including database conexion and head content files -->
  <?php include('includes/dbconx.php');
  include("modules/head-content.php"); ?>
</head>

<body>
  <header>
    <?php
    //condition with isset() to check if the session is start
    if (isset($_SESSION["user_id"])) {
      //If the session is start include navbar logged file
      include("modules/navbar-logged.php");
    } else {
      // if not, include navbar
      include("modules/navbar.php");
    }
    ?>
  </header>


  <!-- main content data  -->
  <main class="index-sell">
    <!-- Title -->
    <h1 class="sell-page-title">Edit your item</h1>

    <!-- form -->
    <form class="sell-form" action="process-edit.php" method="GET" id="formEdit" enctype="multipart/form-data" novalidate>
      <!-- enctype: specifies how the form data should be encoded-->

      <!-- user -->
      <?php include("includes/active-session.php") ?>

      <?php $user = $_GET['user'];
      $order = $_GET['order'];
      // echo $user;
      // echo $order;
      ?>
      <div>
        <input type='hidden' name='user' value=' <?= $user ?>'>
      </div>
      <div>
        <input type='hidden' name='order' value=' <?= $order ?>'>
      </div>


      <!-- Image -->
      <div class="container-input container-input-file">
        <label for="file">Upload photos</label><br>
        <input type="file" name="file" id="file" value="<?php $row['itemPic'] ?>">
      </div>

      <!-- title -->
      <div class="container-input">
        <label for="title">title</label>
        <input class="text-input" type="title" name="title" id="title">
      </div>

      <!-- Description -->
      <div class="container-input">
        <label for="descript">Description</label>
        <input class="text-input" type="descript" id="descript" name="descript">
      </div>



      <!-- category -->
      <div class="container-input">
        <label for="category">Category</label>
        <div>
          <select name="category" id="category">
            <option value="">--Please choose an option--</option>
            <?php
            echo $category = $_GET["category"];
            ?>
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
        <label for="brand">Brand</label>
        <input class="text-input" type="brand" name="brand" id="brand" placeholder="e.g. Lee">
      </div>

      <!-- condition -->
      <div class="container-input">
        <label for="condition1">Condition</label>
        <input class="text-input" type="condition1" name="condition1" id="condition1" placeholder="e.g. only worn a few times">
      </div>

      <div class="container-input">
        <label for="size">size</label>
        <div>
          <select name="size" id="size">
            <option value="">--Please select an option--</option>
            <?php
            echo $size = $_GET["size"]
            ?>
            <option <?php echo $size == "on size" ? 'selected' : ''; ?>>one size</option>
            <option <?php echo $size == "xs" ? 'selected' : ''; ?>>XS</option>
            <option <?php echo $size == "s" ? 'selected' : ''; ?>>S</option>
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
        <label for="price">Price</label>
        <input class="text-input" type="price" name="price" id="price" placeholder="e.g £11">
      </div>

      <!-- Upload button  -->
      <button type="submit" id="uploadItem" name="submitEdit" class="btn btn-upload-edit">Upload</button>

    </form>
  </main>

  <!-- Footer data  -->
  <footer>
    <!-- Including footer file -->
    <?php include("modules/footer.php"); ?>
  </footer>

</body>

</html>