<head>

  <link type="text/css" rel="stylesheet" href="bootstrap.css">
  <link type="text/css" rel="stylesheet" href="stylesheet.css">

  <title>Shopkit | <?php echo $title; ?></title>

</head>

<body>

  <!-- Header for each web page -->

  <div class="header">

    <div class="col-md-2">
    </div>

    <div class="col-md-8">
      <div class="menu">
       <ul class="pull-left">
        <li class="logo">Shopkit</li>
       </ul>
       <ul class="pull-right">
        <?php
         $pages = array("Main" => "main.php","Products" => "products.php","Manage" => "manage.php");
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