<?php 
$root = $_SERVER['DOCUMENT_ROOT']; 
require_once $root."/php/models/db.php";
global $mysqli;

$query_values = $_POST;
$extra_query="";

// if ($query_values) {
//     $extra_query.= " AND ";
//     $values = [];
//     $queries = [];
//     foreach ($query_values as $field_name => $field_value) {
//         foreach ($field_value as $value) {
//             $values[$field_name][] = " {$field_name} = '{$value}'";
//         }
//     }
//     foreach ($values as $field_name => $field_values) {
//         $queries[$field_name] = "(".implode( " OR ", $field_values).")";
//     }
//     $extra_query.= " ".implode(" AND ", $queries);

// }


$products = ("SELECT p.id,p.sku,p.name,p.price,co.name AS 'collection',b.name AS 'brand',c.name AS 'color',m.name AS 'material',dp.name AS 'department',t1.name AS 'type1',t2.name AS 'type2',t3.name AS 'type3' FROM product p INNER JOIN brand b ON b.id = p.brand_id INNER JOIN color c ON c.id = p.color_id INNER JOIN material m ON m.id = p.material_id INNER JOIN collection co ON co.id = p.collection_id INNER JOIN department dp ON dp.id = p.department_id INNER JOIN type1 t1 ON t1.id = p.type1_id INNER JOIN type2 t2 ON t2.id = p.type2_id INNER JOIN type3 t3 ON t3.id = p.type3_id WHERE = ".$extra_query);
$mysqli->query($products);

while ($product = $products->fetch_assoc()) {
    $product_list[$product["id"]] = $product;
}
echo json_encode($product_list);
?>