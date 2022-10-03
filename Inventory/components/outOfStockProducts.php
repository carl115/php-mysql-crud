<div id="outOfStock-window" class="window">
    <div class="card">
        <div class="content card-body">
            <div class="bg-danger d-flex" 
                style="height: 100%; 
                margin-bottom: 10px; 
                padding: 5px 10px; 
                color:#710101; 
                border-radius: 5px; 
                overflow: auto;">
                <?php
                    $stmt = $conn->prepare("SELECT * FROM product WHERE units <= 10");
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    if($stmt->rowCount() > 0) {
                        foreach($result as $row) {
                            echo '<p>' . $row['product_name'] . ' / ' . $row['units'] . ' units</p>';
                        }
                    }
                    else {
                        echo "<h3 style='margin: auto auto;'>There are not products use up</h3>";
                    }
                ?>
            </div>
            <div class="d-flex justify-content-between">
                <a id="btn-outOfStock-cancel" class="btn btn-danger fs-5" style="width: 100%;">Salir</a>
            </div>
        </div>
    </div>
</div>