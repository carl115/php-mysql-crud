<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Inventory</title>

    <!-- STYLES CSS -->
    <link rel="stylesheet" href="../../styles/styles.css" />
    <!--/-->

    <!-- STYLES BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
          crossorigin="anonymous" />
    <!--/-->

    <!-- STYLES DATA TABLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!--/-->
</head>
<body style="background: #F4F4F4;">

    <?php 
        require_once('../../sql/userData.php');

        require_once('../../components/optionsUser.php');
        require_once('../../components/outOfStockProducts.php');

        require_once('New/new.php');
        require_once('Edit/edit.php');
        require_once('Delete/delete.php');
    ?>

    <!-- NAV BAR -->
    <nav class="bg-dark d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <p class="text-white" style="margin:0 5px; font-size: 35px;">Inventory with PHP and MySQL</p>
        </div>
        <a class="content-user btn btn-dark" id="content-user">
            <strong class="text-white">
                <?= $user['fullname'] ?>
            </strong>
        </a>
    </nav>
    <!--/-->

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <h1 class="display-5 mb-3">Products</h1>

        <!-- INVENTORY -->
        <div class="inventory card">
            <div class="card-body">
                <div class="settings">
                    <div class="d-flex" style="width: 70%;">
                        <input
                            id="search" 
                            type="search" 
                            class="form-control" 
                            placeholder="Search"
                            style="width: 40%; margin-right: 20px;"
                        />
                        <form action="../sql/consult.php" method="POST" class="d-flex" style="width: 30%;">
                            <select name="filterProduct" class="form-select" style="margin-right: 20px;">
                                <option value="product_name">Product name</option>
                                <option value="category">Category</option>
                                <option value="units">Units</option>
                                <option value="unit_price">Unit price</option>
                            </select>
                            <input type="submit" class="btn btn-secondary" value="Filter" />
                        </form>
                    </div>
                    <div class="d-flex">
                        <a id="btn-new" class="btn btn-success mx-2">
                            <ion-icon name="add-circle-outline"></ion-icon>
                            New Product
                        </a>
                        <?php
                            $stmt = $conn->prepare("SELECT * FROM product");
                            $stmt->execute();
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                            if($stmt->rowCount() > 0) {
                                $arrayProduct = [];

                                foreach($result as $row) {
                                    if($row['units'] <= 10) {
                                        array_push($arrayProduct, $row['product_name']);   
                                    }
                                }

                                echo "<a id='btn-outOfStock' class='btn btn-secondary position-relative'>";
                                    echo "<ion-icon name='paper'></ion-icon>";
                                    echo "Out of stock product";
                                    echo "<span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>";
                                        echo count($arrayProduct);
                                    echo "</span>";
                                echo "</a>";
                            }
                        ?>
                    </div>
                </div>
                <table id="table" class="table table-bordered table-hover table-sm mt-3">
                    <thead>
                        <tr>
                            <th>Product name</th>
                            <th>Category</th>
                            <th>Units</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="productData">
                        <?php require_once('../sql/consult_product_name.php') ?>
                    </tbody>
                </table>           
            </div>
        </div>
        <!--/-->

        <footer class="container">
            Company name &copy; All rights reserved
        </footer>

    </div>
    <!--/-->

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
    crossorigin="anonymous"></script>
    <!--/-->

    <script>
        const search = document.getElementById('search');
        search.onkeyup = () => {
            let searchProduct = search.value;

            $.ajax({
                url: '../sql/consult_product_name.php',
                method: 'POST',
                data: { searchProduct },
                success: res => {
                    document.getElementById('productData').innerHTML = res;
                }
            });
        }
    </script>

    <!-- SCRIPTS PRODUCTS -->
    <script src="../../scripts/products.js"></script>
    <!--/-->

    <!-- SCRIPTS DATA TABLES -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <!--/-->
    
    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
    crossorigin="anonymous"></script>
    <!--/-->

    <!-- ION ICONS -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!--/-->
</body>
</html>