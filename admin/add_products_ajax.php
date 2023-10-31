<?php

    require_once '../classes/products.class.php';
    require_once '../tools/functions.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect data from the AJAX request
        $products = htmlentities( $_POST['products']);
        $category = $_POST['category'];
        $price = $_POST['price'];
        $availability = $_POST['availability'];

        $products = new Products();
        $products->products = $products;
        $staproductsff->category = $category;
        $products->price = $price;
        $products->availability = $availability;

        if ($products->add()) {
            echo "success";
        } else {
            echo "Failed to add staff.";
        }
    }

?>