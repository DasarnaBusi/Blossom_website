<!DOCTYPE html>
<html>
<head>
    <title>Rose Flower Bouquets</title>
    <style>
        body {
            background-color: #f2e6ff;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }
        .product {
            width: 300px;
            padding: 20px;
            margin: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .product img {
            max-width: 200px;
            max-height: 200px;
        }
        .add-to-cart {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #b388ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        .add-to-cart:hover {
            background-color: #7c4dff;
        }
    </style>
</head>
<body>

<h1>Rose Bouquets</h1>

<div class="container">
    <?php
    $bouquets = [
        ['id' => 1, 'name' => 'White roses', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691987724/b7drtgxxu6qkyaiqumjz.jpg'],
        ['id' => 2, 'name' => 'Pinks and reds', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691987725/htn2eeafizxgonls7aey.jpg'],
        ['id' => 3, 'name' => 'Yellow roses', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691987725/yra8tsrth0tmislv3h4g.jpg'],
        ['id' => 1, 'name' => 'Pink, white and reds', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691987725/xrvdd4krusvkx9jioi5w.jpg'],
        ['id' => 2, 'name' => 'Royal reds', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691987725/cqfsbkrxd0ruszrneejk.jpg'],
        ['id' => 3, 'name' => 'Rear blues', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691987725/qxtnw2mccfryjpznmit9.jpg'],
    ];

    foreach ($bouquets as $bouquet) {
        echo '<div class="product">';
        echo '<img src="' . $bouquet['image'] . '" alt="' . $bouquet['name'] . '">';
        echo '<h2>' . $bouquet['name'] . '</h2>';
        echo '<p>Price: ₹' . $bouquet['price'] . '</p>';
        echo '<button class="add-to-cart">Add to Cart</button>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>

