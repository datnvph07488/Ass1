<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController{

    public function addForm(){
        require_once  './app/views/add-product.php';
    }


}

?>