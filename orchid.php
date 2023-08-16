<!DOCTYPE html>
<html>
<head>
    <title>Orchid Flower Bouquets</title>
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

<h1>Orchid Flower Bouquets</h1>

<div class="container">
    <?php
    $bouquets = [
        ['id' => 1, 'name' => 'Blue orchids', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691685875/wn2vuoq1cucu23xqpgcp.png'],
        ['id' => 2, 'name' => 'orchid cascade', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691685882/kazbshoc4ewpknq69160.png'],
        ['id' => 3, 'name' => 'Pink orchid bouquet', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691685891/eudiyjfrzp9kgfapjmrz.png'],
        ['id' => 1, 'name' => 'Bride Orchid', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691685900/uvezaaj6jisp5tvcud2p.png'],
        ['id' => 2, 'name' => 'Blue orchid basket', 'price' => 2500, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691685908/tr5l1eejp4iajxmf65b4.png'],
        ['id' => 3, 'name' => 'rear majestic pink', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691685917/cptytuofxp7kzu1kuc5x.png'],
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

