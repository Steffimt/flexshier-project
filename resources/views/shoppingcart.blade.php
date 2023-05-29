<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "seproject")

if(isset($_POST['add_to_cart'])) {
    if(isset($_SESSION['cart'])) {

    }else{
        $session_array = array(
            'id' => $_GET['id'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity']
        );

        $_SESSION['cart'][]= $session_array;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Shopping Cart</h2>

                    <?php

                        $query = "SELECT * FROM cart";
                        $result = mysqli_query($connect, $query);

                        while($row = mysqli_fetch_array($result)) {?>
                        
                            <form method="post" action="shoppingcart.blade.php=<?=$row['id'] ?>">
                                <img class="productimage" src="img/<?= $row['image'] ?>">
                                <h2 class="productname"><?= $row['name']; ?></h2>
                                <h2 class="productprice"><?= number_format($row['price'], 2); ?></h2>
                                <input type="hidden" name="name" value="<?= $row['name'] ?>">
                                <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                <input type="number" name="quantity" value="1" class='form-control'>
                                <input class="addtocartbutton" type= "submit" name="add_to_cart" value="Add to Cart">

                            </form>
                    <?php } 
                        
                        

                    ?>

                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Item Selected</h2>
                    
                    <?php

                        var_dump($_SESSION['cart']);


                    ?>

                </div>   
            </div>
        </div>
    </div>
</body>
</html>