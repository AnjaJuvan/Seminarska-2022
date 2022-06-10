<?php
// get password parameters from URL
$password = $_GET['password'];
if(!empty($password)) {
    // check if password is correct
    if($password == "password") {
        // password is correct
    } else {
        // password is incorrect 
        header("Location: error.php?password=incorrect");
    }
} else {
    // password is empty then redirect user to error page
    header("Location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include './assets/PHP/static/head.php'; ?>
<body>
    <!-- Navigation-->
    <?php include './assets/PHP/static/nav.php'; ?>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Serial's Webshop</h1>
                <p class="lead fw-normal text-white-50 mb-0">Enter your new product here</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <form action="addProduct.php?password=password" method="post">
                <?php 
                    require_once 'data.php';
                    if (isset($_POST['submit'])) {
                        $title = $_POST['Title'];
                        $description = $_POST['Description'];
                        $price = $_POST['Price'];
                        $ImageUrl = $_POST['ImageURL'];
                        $query = "INSERT INTO products (Title, Description, Price, ImageUrl) VALUES ('$title', '$description', '$price', '$ImageUrl')";
                        $result = mysqli_query($conn, $query);

                        if ($result) {
                            echo "<div class='alert alert-success' role='alert'>Product added successfully!</div>";
                        }
                        else {
                            echo "<div class='alert alert-danger' role='alert'>Something went wrong!</div>";
                        }
                    }
                ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input required type="text" class="form-control" id="Title" name="Title"
                                placeholder="Title of the product">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea required class="form-control" id="description" name="Description"
                                placeholder="Description of the product"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input required type="number" class="form-control" id="price" name="Price"
                                placeholder="Price of the product">
                        </div>
                        <div class="form-group">
                            <label for="ImageURL">Image URL</label>
                            <input type="text" class="form-control" id="ImageURL" name="ImageURL"
                                placeholder="Leave this empty if you don't have any image of the product">
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <?php include 'assets/PHP/static/footer.php'; ?>
</body>

</html>