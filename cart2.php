<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "click2shop");

if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if (!in_array($_GET["id"], $item_array_id)) {

            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>alert("Products added to cart")</script>';
            echo '<script>window.location="index.php"</script>';
        } else {
            echo '<script>alert("Products already added to cart")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    } else {

        $item_array = array(
            'product_id' => $_GET["id"],
            'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["cart"][0] = $item_array;

        echo '<script>alert("Products added to cart")</script>';
        echo '<script>window.location="index.php"</script>';
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $values) {
            if ($values["product_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been removed")</script>';
                echo '<script>window.location="ck.php"</script>';
            }
        }
    }
}
?>