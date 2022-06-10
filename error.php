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
                <p class="lead fw-normal text-white-50 mb-0">Something went wrong!</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <?php if(isset($_GET['password']) && $_GET['password'] == "incorrect") { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo "Password is incorrect!"; ?>
                </div>
            <?php } else { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo "Something went wrong!"; ?>
                </div>
            <?php } ?>
            <a href="index.php" class="btn btn-primary">Go back to homepage</a>
        </div>
    </section>
    <!-- Footer-->
    <?php include './assets/PHP/static/footer.php'; ?>
    <!-- Bootstrap core JS-->

</body>

</html>