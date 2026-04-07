<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {
    public function index() {
        $products = Product::all();
        require_once '../app/Views/products/index.php';
    }

    public function show($id) {
        $product = Product::find($id);
        require_once '../app/Views/products/show.php';
    }
}
?>