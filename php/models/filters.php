<?php 
$root = $_SERVER['DOCUMENT_ROOT']; 
require_once $root."/php/models/db.php";
global $mysqli;

$query_values = $_POST;
$extra_query="";

if ($query_values) {
    $extra_query.= " AND ";
    $values = [];
    $queries = [];
    foreach ($query_values as $field_name => $field_value) {
        foreach ($field_value as $value) {
            $value = str_replace(array('-'),' ',$value);
            $values[$field_name][] = " {$field_name}.name = '{$value}' ";
        }
    }
    foreach ($values as $field_name => $field_values) {
        $queries[$field_name] = "(".implode( " OR ", $field_values).")";
    }
    $extra_query.= " ".implode(" AND ", $queries);
    // print_r($extra_query);exit;
}

    $product = "SELECT product.id ,product.sku ,product.name ,product.price ,collection.name AS 'collection',brand.name AS 'brand',color.name AS 'color',material.name AS 'material',department.name AS 'department',type1.name AS 'type1',type2.name AS 'type2',type3.name AS 'type3' FROM product INNER JOIN brand ON brand.id = product.brand_id INNER JOIN color ON color.id = product.color_id INNER JOIN material ON material.id = product.material_id INNER JOIN collection ON collection.id = product.collection_id INNER JOIN department ON department.id = product.department_id INNER JOIN type1 ON type1.id = product.type1_id INNER JOIN type2 ON type2.id = product.type2_id INNER JOIN type3 ON type3.id = product.type3_id ".$extra_query;
    // print_r($product);
    $products = $mysqli->query($product);
    $product_list = [];

    while ($product = $products->fetch_assoc()) {
        $product_list[$product["id"]] = $product;
    }
    echo json_encode($product_list);
    
?>  