<!DOCTYPE html>
<?php
include  "../include/connection.php";


$productID = $_POST['productID'];

    echo"<script>alert('No '+$productID+' product was deleted.')</script>";
    if(isset($productID))
    {

        $deleteItemQuery = "delete from Product where id =$productID";
        $runDeleteItem = mysqli_query($conn, $deleteItemQuery);

        $getProductQuery = "select * from Product";
        $runProductQuery = mysqli_query($conn, $getProductQuery);

        while($rowProduct = mysqli_fetch_array($runProductQuery)){
            $productImage = $rowProduct['image_url'];
            $productName = $rowProduct['name'];
            $productID = $rowProduct['id'];
            echo"
            <div class='product'>
                <div class='main' onclick=location.href='../view-product.php?product_id=$productID'>
                    <img src='../images/$productImage' alt=''>
                    <h2>$productName</h1>
                </div>
                <img class='delete' src='../images/delete.png' alt='' onclick='deleteItem($productID)' title='Delete';>
            </div>
            ";
        }
    }
    else {
    echo"<script>
        window.open('../index.php', '_self')
    </script>";
    }
    ?>
