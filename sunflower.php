<!DOCTYPE html>
<html>
<head>
    <title>SunFlower Bouquets</title>
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

<h1>SunFlower Bouquets</h1>

<div class="container">
    <?php
    $bouquets = [
        ['id' => 1, 'name' => 'simple Sunflowers', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691661569/vtrhkivd64ibqg7nongy.png'],
        ['id' => 2, 'name' => 'single flower', 'price' => 649, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691661612/lfj9xcbqldhtbsg6kal4.png'],
        ['id' => 3, 'name' => 'Big sunflowers', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691661778/kshqakl9ftfgscij6shb.png'],
        ['id' => 1, 'name' => 'Bridal bouquet', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691661941/zktfp4i2utnxuy3wphja.png'],
        ['id' => 2, 'name' => 'Classic sunflowers with baby breathbouquet', 'price' => 1349, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691662009/sxe7jkfnyzhzkbccgfmq.png'],
        ['id' => 3, 'name' => 'Elegent sunflowers', 'price' => 1299, 'image' => 'https://res.cloudinary.com/durz3pqos/image/upload/v1691662164/rwvqconsk0h45l6vfoyj.png'],
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

