<?php require_once 'db.php';

    // print_r($_POST); exit;

    $query_values = $_POST;
    $extra_query = "";

    if ($query_values) {
       $extra_query.= " WHERE ";
       $values = [];
       $queries = [];

       foreach ($query_values as $field_name => $field_value) {
        foreach ($field_value as $value) {
            $values[$field_name.".asdasd"][] = " {$field_name}.name = '{$value}'";
        }
       }
       foreach ($values as $field_name => $field_values) {
        $queries[$field_name] = "(".implode( " OR ", $field_values).")";
       }
       $extra_query.= " ".implode(" AND ", $queries);
    //    print_r($extra_query);exit;
    }

    global $mysqli;
    $products = $mysqli->query("SELECT P.id,P.name,P.price,P.image,B.name AS'brand',C.name AS'color',M.name AS'material',K.name AS'kind' FROM product P INNER JOIN kind K ON K.id = P.kind_id INNER JOIN brand B ON B.id = P.brand_id INNER JOIN color C ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id $extra_query");
    $product_list = [];
    while ($product = $products->fetch_assoc()) {
        $product_list[$product['id']] = $product;
    }
    echo json_encode($product_list);


?>