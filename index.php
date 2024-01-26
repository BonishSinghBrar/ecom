<?php session_start(); 


if(isset($_POST['submit'])){

    if(isset($_SESSION['product_counter'])){
        $_SESSION['product_counter']=$_SESSION['product_counter']+1;
       
      
    }else{
        $_SESSION['product_counter']=1;
        $_SESSION['product_name']=array();
        $_SESSION['product_price']=array();
    }

    $_SESSION['product_name'][$_SESSION['product_counter']]=$_POST['product_name'];
    $_SESSION['product_price'][$_SESSION['product_counter']]=$_POST['product_price'];
    

    

}

if(isset($_POST['destroy'])){
  session_destroy();
  }
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="style/style.css" rel="stylesheet" >
  </head>
  <body>
    
    <div class="abcnav col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">FRESHCO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>

            <ul class="navbar-nav  mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cart.php"><span class="badge bg-primary"><p>Cart Item: <?php  if(isset($_SESSION['product_counter'])){  echo $_SESSION['product_counter']; }else{ echo "0"; } ?></p></span></a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
  </div>
    <div class="space hero-area col-md-12">

      <div class="container">

      <div class="row">

      <div class="col-md-6 text-center hero-text" >
        <h1>Welcome</h1>
        <h4>Everything you need under one roof</h4>
        
      </div>
      <div class="col-md-6">
        <img src="img/ebuy.jpg" class="img-fluid" alt="">
        
      </div>
      
      </div>

      </div>

    </div>

    <div class="product-area text-center">
      <br>
      <br>
      <h1>Grocery Items</h1>
      <br>
      <br>
      <div class="container">
        
        <div class="row">

            <div class="space col-md-4">
              <img src="img/1.jpg" class="img-fluid" alt="">
              <h4>Skimmed Milk</h4>
              <h4>CAD $7.40</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="Skimmed Milk">
              <input type="hidden" name="product_price" value="$7.40">
              <button type="submit" name="submit"class="btn btn-success" >Add To Cart</button>

              </form>
      
      
            </div>
      
            <div class="space col-md-4">
              <img src="img/6 .jpg" class="img-fluid" alt="">
              <h4>Green Peppers</h4>
              <h4>CAD $8.70</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="Green Peppers">
              <input type="hidden" name="product_price" value="$7.40">
              <button type="submit" name="submit" class="btn btn-success" >Add To Cart</button>

              </form>
      
      
            </div>
      
            <div class="space col-md-4">
              <img src="img/5.jpg" class="img-fluid" alt="">
              <h4>Romaine Lettuce</h4>
              <h4>CAD $12.30</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="Romaine Lettuce">
              <input type="hidden" name="product_price" value="$11.50">
              <button type="submit" name="submit" class="btn btn-success" >Add To Cart</button>

              </form>
      
      
            </div>
      
            <div class="space col-md-4">
              <img src="img/2.jpg" class="img-fluid" alt="">
              <h4>APPLE</h4>
              <h4>CAD $4.40</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="APPLE">
              <input type="hidden" name="product_price" value="$4.40">
              <button type="submit" name="submit" class="btn btn-success" >Add To Cart</button>

              </form>
      
            </div>
      
            <div class="space col-md-4">
              <img src="img/3 .jpg" class="img-fluid" alt="">
              <h4>ORANGE</h4>
              <h4>CAD $5.25</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="ORANGE">
              <input type="hidden" name="product_price" value="$8">
              <button type="submit" name="submit"  class="btn btn-success" >Add To Cart</button>

              </form>
      
      
            </div>
      
            <div class="space col-md-4">
              <img src="img/4 .jpg" class="img-fluid" alt="">
              <h4>BANNANA</h4>
              <h4>CAD $6.75</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="BANNANA">
              <input type="hidden" name="product_price" value="$8.40">
              <button type="submit" name="submit" class="btn btn-success"  >Add To Cart</button>
              <button type="submit" name="destroy" >Reset</button>


              </form>
      
            </div>
    
          </div>
      
        </div>

      </div>
      <footer class="abcnav bg-dark text-light py-4">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <p>&copy; 2024 Developed by bonish. All rights reserved.</p>
          </div>
         </div>
        </div>
      </footer>
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>