<?php 
// Disable error_reporting
//error_reporting(E_ERROR | E_PARSE);
// Require the data.php file so we can use it everywhere. 
// $Conn is a global variable.

error_reporting(E_ALL);
ini_set("display_errors", true);
require_once 'data.php';
$query="select * from products limit 200"; 
$result=mysqli_query($conn,$query);

if (isset($_POST['submit'])) {
    $urlString = "addproduct.php?password=" . $_POST['password'];
    header('Location: ' . $urlString);
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php include './assets/PHP/static/head.php'; ?>
<link rel="stylesheet" href="styles.css">
<body  style ="background-color: #74EBD5;
background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);">
    <!-- Navigation-->
    <?php include './assets/PHP/static/nav.php'; ?>
    <!-- Header-->
    <header class="headerstyle">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                   <im src ="http://mikebellphotography.co.za/wp-content/uploads/2013/11/MONSTER-mikebellphotography.jpg" class="monster">
                <h1 class="display-4 fw-bolder">Serial's Monster Energy Shop</h1>
                <p class="display-6 fw-bolder">Welcome to Serial's webshop. </p>
                
            </div>
        </div>
    </header>
    
    <!-- Section-->
    
    <section class="product">
    <link rel="stylesheet" href="nav.css">
    <h2 class="product-category">Most popular monster pack offers</h2>
    <div class="product-container">
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="https://media.bodyandfit.com/i/bodyandfit/C100664_Image_01?layer0=$PDP$" class="product-thumb" alt="">
            <button class="card-btn">add to cart</button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Ultra mango</h2>
            <p class="product-short-des">12 monster pack</p>
            <span class="price">$10</span><span class="actual-price">$30</span>
        </div>
    </div>
     <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="https://www.tights.no/wp-content/uploads/sites/7/2022/02/PF0091_Monster_Khaotic_500ml_24-Pack-and-Can_EU_Shoptimised_2500px_v1-450x563.jpg" class="product-thumb" alt="">
            <button class="card-btn">add to cart</button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Juiced</h2>
            <p class="product-short-des">24 monster pack</p>
            <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
    </div>
     <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">25% off</span>
            <img src="https://www.cooperscandy.no/upload/prod/25987.jpg" class="product-thumb" alt="">
            <button class="card-btn">add to cart</button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Ultra sunrise</h2>
            <p class="product-short-des">24 monster pack</p>
            <span class="price">$25</span><span class="actual-price">$40</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">25% off</span>
            <img src="https://cdn.shopify.com/s/files/1/0506/7908/7286/products/CopyofCopyofCopyofCopy_1_ofCopyofblackcherry-High-Quality_2_580x.jpg?v=1641141245" class="product-thumb" alt="">
            <button class="card-btn">add to cart</button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Ultra paradise</h2>
            <p class="product-short-des">24 monster pack</p>
            <span class="price">$25</span><span class="actual-price">$40</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">
            <span class="discount-tag">25% off</span>
            <img src="https://m.media-amazon.com/images/I/91bIiRh9z2S._SL1500_.jpg" class="product-thumb" alt="">
            <button class="card-btn">add to cart</button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Assault</h2>
            <p class="product-short-des">24 monster pack</p>
            <span class="price">$25</span><span class="actual-price">$40</span>
            
        </div>
    </div>
    
    </div>
    </section>
    
    <section class="py-5">
       
       <h2 class="monster-products">All the products we offer</h2>
       <link rel="stylesheet" href="products.css">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top productImage" src="<?php echo $array[3];?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $array[1];?></h5>
                                <p class="fw-normal"><?php echo $array[2];?></p>
                                <!-- Product price-->
                                €<?php echo number_format($array[4], 2);?>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto js-opener" >Buy</a></div>
                            
                           
                        </div>
                        
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                    <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
                
            </div>
        </div>
    </section>

    <!-- Toast section -->
    <div id="dialog" title="Congratulations!">
        <p>You've successfully bought this product!</p>
    </div>

    <div id="dialogPassword" title="Enter your password.">
        <form action="index.php" method="post">
            <div class="row">
                <div class="form-group">
                    <label for="password">Please enter your password</label>
                    <input required type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <!-- Footer-->
    <?php include 'assets/PHP/static/footer.php'; ?>
    

</body>

</html>