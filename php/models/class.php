<?php $root = $_SERVER['DOCUMENT_ROOT']; require_once $root."/php/models/db.php";

function selectCheckbox($table_name){
    global $mysqli;
    $result = $mysqli->query("SELECT K.id, K.name FROM $table_name K");
    $result = printCheckbox($result,$table_name);
    return $result;
}

function selectFIlters(){
    global $mysqli;
    $products = $mysqli->query("SELECT * FROM product");
    $product_list = [];
    while ($product = $products->fetch_assoc()) {
        $product_list[$product['id']] = $product;
    }
    print_r($product_list);
}

function printCheckbox($result,$table_name){
    $html = "";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $p=0;
            match ($table_name){
                 'kind'=>$p='K[]'
                ,'brand'=>$p="B[]"
                ,default =>$p=""
            };
            $id = $row['id'];
            $name = $row['name'];
            $html .= '
                                    <li class="option">
                                        <input class="input_checkbox" name="'.$p.'" type="checkbox" id="'.$table_name.'-checkbox-'.$id.'" value="'.$name.'">
                                        <label class="h6" for="'.$table_name.'-checkbox-'.$id.'"><span class="filter-title">'.$name.'</span></label>
                                    </li>
                ';
        }
    } else {
        $html = "<p>Error</p>";
        return $html;
    }
    return $html;
}