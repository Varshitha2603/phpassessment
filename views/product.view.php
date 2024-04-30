<html>
<body>
    <div id="product">
        <h1>Product</h1>
        <?php
            $host = "locahost";
            $username = "dckap";
            $password = "Dckap2023Ecommerce";
            $dbname = "assessmentdb";
            $con = new mysqli($host, $username, $password, $dbname);
            if ($con->connect_error){
                die("Connection failed" . $con->connect_error);
            }
            $sql = "SELECT product_name, product_price, product_image, product_description FROM product ORDER BY product_id ASC ";
            $data = $con->query($sql);
        ?>
        <?php if ($data->num_rows > 0){ ?>
        <p>
            <?php while($productpage = $data->fetch_assoc()){ ?>
                <h1> <?= $productpage['product_name']. "<br>"; ?> </h1>
                <p> Rs <?= $productpage['product_price']. "<br>"; ?> </p>
                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($productpage['product_image']); ?>" width="100px" height="200px"><br>
                <p><?= $productpage['product_description']; ?> </p>
            <?php } ?>
            <?php } else { ?>
                <p class="status_error">Image not found</p>
            <?php } ?>
    </div>
</body>
</html>