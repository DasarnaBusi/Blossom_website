<!DOCTYPE html>
<html>
<head>
    <title>Tulip Flower Bouquets</title>
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

<h1>Tulip Flower Bouquets</h1>

<div class="container">
    <?php
    $bouquets = [
        ['id' => 1, 'name' => 'Pink and white tulipt', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691984443/hpfdpm0yfes5tsrpzryj.jpg'],
        ['id' => 2, 'name' => 'Sunset tulip', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691984551/wk2z5hpi8lsd1d99dgrj.jpg'],
        ['id' => 3, 'name' => 'Whites and greens', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691984552/mivgs3lmkdi36ny0xfhq.jpg'],
        ['id' => 1, 'name' => 'Orange and baby breath ', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691984553/kggyvuosoqif22e2b73z.jpg'],
        ['id' => 2, 'name' => 'Mighty yellow with greens', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691984554/lkllz1rlwlwxdez46rlz.jpg'],
        ['id' => 3, 'name' => 'Simple orange', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691984555/ojzyramwynjjcv2qxjxv.jpg'],
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

