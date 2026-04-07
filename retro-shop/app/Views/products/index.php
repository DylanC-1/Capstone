<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    <h1>Product List</h1>
    
    <?php
    // Assuming you have a ProductController that fetches products
    require_once '../../Controllers/ProductController.php';
    $productController = new ProductController();
    $products = $productController->index(); // Fetch products

    if (count($products) > 0) {
        echo "<ul>";
        foreach ($products as $product) {
            echo "<li>";
            echo "<h3>" . htmlspecialchars($product['name']) . "</h3>";
            echo "<p>Price: $" . htmlspecialchars($product['price']) . "</p>";
            echo "<a href='/products/show.php?id=" . htmlspecialchars($product['id']) . "'>View Details</a>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No products available.</p>";
    }
    ?>
    
</body>
</html>