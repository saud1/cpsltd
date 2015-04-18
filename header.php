<head>

  <link type="text/css" rel="stylesheet" href="bootstrap.css">
  <link type="text/css" rel="stylesheet" href="stylesheet.css">
<?php
  include 'authenticate.php';
?>
  <title>Shopkit | <?php echo $title; ?></title>

<script type="text/javascript" src="javascript.js">

function checkCart(){
  var cart = getCookie("cart");
  if(cart!="")

}

window.onload=function() {
  
  checkCart();  

}

</script>

</head>

<body>

  <!-- Header for each web page -->

  <div class="header">

    <div class="col-md-2">
    </div>

    <div class="col-md-8">
      <div class="menu">
       <ul class="pull-left">
        <div class="cart" id="cart">
        </div>
       </ul>
       <ul class="pull-right">
        <?php
         $pages = array("Main" => "main.php","Products" => "products.php");
         if($logIn) {
          $pages["Log Out"] ="logout.php";
          $pages["Account"] = "account.php";
         } else {
          $pages["Log In"] = "login.html";
         }
         foreach ($pages as $key => $value)
         {
          echo "<li><a href=".$value.">".$key."</a></li>";
         }

        ?>
       </ul>
      </div>
    </div>

    <div class="col-md-2">
    </div>

  </div>

<!-- Body -->

<div class="body">
<div class="col-md-2">
</div>
<div class="col-md-8">