<html>
<body>
    <h1>Product Details</h1>
    
    <?php 
        // Assuming $product is passed to this view from the ProductController
        if (isset($product)) {
            echo "<h2>" . htmlspecialchars($product['name']) . "</h2>";
            echo "<p>Price: $" . htmlspecialchars($product['price']) . "</p>";
            echo "<p>Description: " . htmlspecialchars($product['description']) . "</p>";
            echo "<button>Add to Cart</button>";
        } else {
            echo "<p>Product not found.</p>";
        }
    ?>
    
</body>
</html>