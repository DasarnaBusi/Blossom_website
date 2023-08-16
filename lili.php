<!DOCTYPE html>
<html>
<head>
    <title>Lili Flower Bouquets</title>
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

<h1>Lili Bouquets</h1>

<div class="container">
    <?php
    $bouquets = [
        ['id' => 1, 'name' => 'Pink lili', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691988434/rilsbl9gfenuonskunnd.webp'],
        ['id' => 2, 'name' => 'White lili', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691988434/ldjspv7tfzze7ekrs8op.jpg'],
        ['id' => 3, 'name' => 'Roses and lilis', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691988434/dt2kwmnnnkq7fb0apczs.jpg'],
        ['id' => 1, 'name' => 'Pink and white lilis', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691988436/dkmpxnjftn585pcgumo0.jpg'],
        
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

