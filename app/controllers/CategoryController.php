<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController{

    public function hienThi(){
    	$Category = Category::all();
        require_once  './app/views/listCategory.php';
    }
    public function addCate(){
    	require_once './app/views/categories/add.php';
    }


}

?>