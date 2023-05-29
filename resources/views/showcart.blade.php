<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <table>
        <tr>
            <td>Product_id</td>
            <td>Quantity</td>
            <td>Price</td>
        </tr>
        @foreach($cart as $carts)
        <tr>
            <td>{{ $carts->product_id }}</td>
            <td>{{ $carts->price }}</td>
            <td>{{ $carts->quantity }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>