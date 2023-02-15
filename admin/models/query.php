<?php require 'class.php';
/////////////////////////////////////////////////////////////////////////////////////////////////////////
// INSERT - PRODUCT
if (isset($_POST['saveProduct'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $image= $_FILES['image']['name'];
    $brand = $_POST['brand'];
    $material = $_POST['material'];
    $color = $_POST['color'];
    $codigo = $_POST['codigo'];
    insertProduct($name,$price,$category,$image,$brand,$material,$color,$codigo);
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////
// SAVE - OPTIONS
if (isset($_POST['saveAll'])) {
    $val = $_POST['name'];
    $type = $_POST['type'];
    insertAllOptions($val,$type);
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////
// DELETE - PRODUCT
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    deleteProduct($id);
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////
// UPDATE - PRODUCT
if (isset($_POST['updateProduct'])) {
    $id = $_POST['updateProduct'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $material = $_POST['material'];
    $color = $_POST['color'];
    $codigo = $_POST['codigo'];
    // $image= $_FILES['image']['name'];
    updateProduct($codigo,$name,$price,$category,$brand,$material,$color,$id);
    header('location: ../');
}

if (isset($_POST['updateImage'])) {
    $id = $_POST['val'];
    $image= $_FILES['image']['name'];
    updateImage($image,$id);
}
