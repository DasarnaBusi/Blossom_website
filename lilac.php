<!DOCTYPE html>
<html>
<head>
    <title>Lilac Flower Bouquets</title>
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

<h1>Lilac Flower Bouquets</h1>

<div class="container">
    <?php
    $bouquets = [
        ['id' => 1, 'name' => 'Blue lilac', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691683392/ibwgl24phtd62wjf717l.png'],
        ['id' => 2, 'name' => 'Plain lilac', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691684032/lh8nggancf5zo720cjqi.png'],
        ['id' => 3, 'name' => 'Small lilac bouquet', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691684150/vmawhewcynvyshbrrfyh.png'],
        ['id' => 4, 'name' => 'Purple and white lilac', 'price' => 1999, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691684735/a3bensn98jb2qmyj7ua6.png'],
       
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


