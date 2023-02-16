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
            $t_name = $table_name;
            $p="";
            match ($table_name){
                 'kind'=>$p='K[]'
                ,'brand'=>$p="B[]"
                ,default =>$p=""
            };
            match ($t_name){
                'kind'=>$t_name='K.name'
               ,'brand'=>$t_name="B.name"
               ,default =>$t_name=""
           };
            $id = $row['id'];
            $name = $row['name'];
            global $mysqli;
            $n_rows = $mysqli->query("SELECT P.id,P.name,P.price,P.image,B.name AS 'brand',K.name AS 'kind' FROM product P INNER JOIN kind K ON K.id = P.kind_id INNER JOIN brand B ON B.id = P.brand_id WHERE $t_name='$name'");
            $n_rows = $n_rows->num_rows;
            if ($n_rows!=0) {
                $n_rows = " <b>•</b> ($n_rows)";
                // $n_rows = " <b>$n_rows</b>";
            }
            else{
                $n_rows = "";
            }
            $html .= '
                                    <li class="option">
                                        <input class="input_checkbox" name="'.$p.'" type="checkbox" id="'.$table_name.'-checkbox-'.$id.'" value="'.$name.'">
                                        <label for="'.$table_name.'-checkbox-'.$id.'"><span class="filter-title">'.$name.$n_rows.'</span></label>
                                    </li>
                ';
        }
    } else {
        $html = "<p>Error</p>";
        return $html;
    }
    return $html;
}