<?php $root = $_SERVER['DOCUMENT_ROOT']; require_once $root."/php/models/db.php";

function selectCheckbox($table_name){
    global $mysqli;
    $result = $mysqli->query("SELECT K.id, K.name FROM $table_name K");
    $result = printCheckbox($result,$table_name);
    return $result;
}

function selectProducts(){
    global $mysqli;
    $result = $mysqli->query("SELECT P.id,P.name,P.price,P.image,K.name AS'kind',C.name AS'color',M.name AS'material',B.name AS'brand' FROM product P INNER JOIN kind K ON K.id = P.kind_id INNER JOIN color C ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id INNER JOIN brand B ON B.id = P.brand_id ORDER BY P.id ASC");
    $result = printProducts($result);
    return $result;
}

function printCheckbox($result,$table_name){
    global $mysqli;
    $html = "";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $t_name = $table_name;
            $p="";
            match ($table_name){
                 'kind'=>$p='K[]'
                ,'brand'=>$p="B[]"
                ,'color'=>$p="C[]"
                ,'material'=>$p="M[]"
                ,default =>$p=""
            };
            match ($t_name){
                'kind'=>$t_name='K.name'
               ,'brand'=>$t_name='B.name'
               ,'color'=>$t_name='C.name'
               ,'material'=>$t_name='M.name'
               ,default =>$t_name=""
           };
            $id = $row['id'];
            $name = $row['name'];
            $n_rows = $mysqli->query("SELECT P.id,P.name,P.price,P.image,B.name AS'brand',C.name AS'color',M.name AS'material',K.name AS'kind' FROM product P INNER JOIN kind K ON K.id = P.kind_id INNER JOIN brand B ON B.id = P.brand_id INNER JOIN color C ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id WHERE $t_name='$name'");
            $n_rows = $n_rows->num_rows;
            if ($n_rows!=0) {
                $n_rows = " <b>•</b> ($n_rows)";
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

function printProducts($result){
    $html = "";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $image = $row['image'];
            $price = $row['price'];
            $brand = $row['brand'];
            $html .= '
                    <a href="/'.strtolower($name).'-'.$id.'" class="card">
                        <div class="top">
                            <img src="/assets/img/product/'.$image.'" loading="lazy">
                        </div>
                        <div class="bottom">
                            <div class="brand">
                                <span>'.$brand.'</span><span><img src="/assets/svg/easy-credit.svg" alt"Easy Credit"></span>
                            </div>
                            <p>'.$name.'</p>
                            <p>'.$price.' Bs</p>
                            <button>Comprar</button>
                        </div>
                    </a>
                ';
        }
    } else {
        $html = "<p>Error</p>";
        return $html;
    }
    return $html;
}