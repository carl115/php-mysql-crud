<?php
    require_once('SignIn/sql/consult.php');
    
    if(isset($_SESSION['id'])) {
        header('Location: Inventory/Products/src/products_product_name.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>

    <!-- STYLES INDEX -->
    <link rel="stylesheet" href="SignIn/src/index.css" />
    <!--/-->

    <!-- STYLES BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
          crossorigin="anonymous" />
    <!--/-->
</head>
<body class="bg-dark">

    <p class="text-white"><strong class="text-white">Username:</strong> user / <strong class="text-white">Password:</strong> password</p>

    <div class="card py-2 px-3" style="width: 32%;">
        <div class="card-body">
            <form action="./Index.php" method="POST" class="form">
                <div class="cont-input">
                    <p id="oneTitle" class="title">Username</p>
                    <input 
                    type="text" 
                    name="username" 
                    class="form-control"
                    id="inputOne"
                    required />
                </div>
                <br />
                <div class="cont-input">
                    <p id="twoTitle" class="title">Password</p>
                    <input 
                    type="password" 
                    name="password"
                    class="form-control"
                    id="inputTwo"
                    required />
                </div>
                <?php if($alert == TRUE): ?>
                    <div class="alert alert-danger">
                        <strong>The user or password is incorrect</strong>
                    </div>
                <?php endif; ?>
                <input type="submit" value="Sign in" class="btn btn-primary btn-lg mt-4" style="width: 100%;" />
            </form>
        </div>
    </div>

    <!-- SCRIPTS INDEX -->
    <script src="SignIn/src/index.js"></script>
    <!--/-->
    
    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
    crossorigin="anonymous"></script>
    <!--/-->
</body>
</html>