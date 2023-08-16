<!DOCTYPE html>
<html>
<head>
    <title>Iris Flower Bouquets</title>
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

<h1>Iris Flower Bouquets</h1>

<div class="container">
    <?php
    $bouquets = [
        ['id' => 1, 'name' => 'Purple Iris Delight', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691643295/ghcy3w9szd7vtxzlgxbs.png'],
        ['id' => 2, 'name' => 'Iris Elegance', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691643385/gdnwhbzi5yhpby2mpddt.png'],
        ['id' => 3, 'name' => 'Sunset Iris Mix', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691643746/e9rf7bbby5vcetbkhw3p.png'],
        ['id' => 4, 'name' => 'Purple Iris Delight', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691644049/wdawng2htmsusvfwqsx2.png'],
        ['id' => 5, 'name' => 'Iris Elegance', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691644115/axxdocmr0p9ntr2jrtdd.png'],
        ['id' => 6, 'name' => 'Sunset Iris Mix', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691644188/afdhvyopqupnvc5v2h4v.png'],
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

