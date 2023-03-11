<?php $root = $_SERVER['DOCUMENT_ROOT']; require_once $root."/php/models/db.php";

function selectCheckbox($table_name){
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM $table_name");
    $result = printCheckbox($result,$table_name);
    return $result;
}

function selectProductByName($name){
    global $mysqli;
    $result = $mysqli->query("SELECT id,name FROM product WHERE name='$name'");
    $result = $result->fetch_array();
    return $result;
}
function selectProductDetailById($id){
    global $mysqli;
    $result = $mysqli->query("SELECT P.id,P.name,P.price,P.sku,CO.name AS'collection',C.name AS'color',M.name AS'material',B.name AS'brand',DE.name AS'department' ,T1.name AS'type1' ,T2.name AS'type2',T3.name AS'type3' FROM product P INNER JOIN color C ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id INNER JOIN brand B ON B.id = P.brand_id INNER JOIN collection CO ON CO.id = P.collection_id INNER JOIN department DE ON DE.id = P.department_id INNER JOIN TYPE1 T1 ON T1.id = P.type1_id INNER JOIN TYPE2 T2 ON T2.id = P.type2_id INNER JOIN TYPE3 T3 ON T3.id = P.type3_id WHERE P.id='$id'");
    $result = $result->fetch_assoc();
    return $result;
}
function selectProductByCod($sku){
    global $mysqli;
    $result = $mysqli->query("SELECT P.id,P.name,P.price,P.sku,C.name AS'color',M.name AS'material',B.name AS'brand' FROM product P  INNER JOIN color C ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id INNER JOIN brand B ON B.id = P.brand_id WHERE P.sku='$sku'");
    $result = $result->fetch_assoc();
    return $result;
}

function selectProducts(){
    global $mysqli;
    $result = $mysqli->query("SELECT P.id,P.name,P.sku,P.price,C.name AS'color',M.name AS'material',B.name AS'brand' FROM product P  INNER JOIN color C ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id INNER JOIN brand B ON B.id = P.brand_id ORDER BY P.sku ASC");
    $result = printProducts($result);
    return $result;
}
function selectProductByUrl($url){
    global $mysqli;
    $result = $mysqli->query("SELECT p.id,p.sku,p.name,p.price,b.name AS 'brand',de.name AS 'department',t1.name AS 'type1',t2.name AS 'type2',t3.name AS 'type3' FROM product p INNER JOIN brand b ON b.id = p.brand_id INNER JOIN department de ON de.id = p.department_id INNER JOIN type1 t1 ON t1.id = p.type1_id INNER JOIN type2 t2 ON t2.id = p.type2_id INNER JOIN type3 t3 ON t3.id = p.type3_id WHERE t1.name='$url' OR de.name='$url' OR t2.name='$url' OR t3.name='$url'");
    $result = printProducts($result);
    return $result;
}
function selectFiltersByUrl($url,$table_column){
  global $mysqli;
  if ($table_column=="brand") {
    $result = $mysqli->query("SELECT DISTINCT p.id, b.name FROM product p INNER JOIN brand b ON b.id = p.brand_id INNER JOIN department de ON de.id = p.department_id INNER JOIN type1 t1 ON t1.id = p.type1_id INNER JOIN type2 t2 ON t2.id = p.type2_id INNER JOIN type3 t3 ON t3.id = p.type3_id WHERE t1.name='$url' OR de.name='$url' OR t2.name='$url' OR t3.name='$url'");
  }
  if($table_column=="material"){
    $result = $mysqli->query("SELECT DISTINCT p.id, m.name FROM product p INNER JOIN material m ON m.id = p.material_id INNER JOIN department de ON de.id = p.department_id INNER JOIN type1 t1 ON t1.id = p.type1_id INNER JOIN type2 t2 ON t2.id = p.type2_id INNER JOIN type3 t3 ON t3.id = p.type3_id WHERE t1.name='$url' OR de.name='$url' OR t2.name='$url' OR t3.name='$url'");
  }
  if($table_column=="color"){
    $result = $mysqli->query("SELECT DISTINCT p.id, c.name  FROM product p INNER JOIN color c ON c.id = p.color_id INNER JOIN brand b ON b.id = p.brand_id INNER JOIN department de ON de.id = p.department_id INNER JOIN type1 t1 ON t1.id = p.type1_id INNER JOIN type2 t2 ON t2.id = p.type2_id INNER JOIN type3 t3 ON t3.id = p.type3_id WHERE t1.name='$url' OR de.name='$url' OR t2.name='$url' OR t3.name='$url'");
  }
  $result = printFilters($result,$table_column);
  return $result;
}

function printFilters($result,$table_name){
  global $mysqli;
  $html = "";
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          if ($row['name']!="N/A") {
              $id = $row['id'];
              $name = $row['name'];
              $n_rows = $mysqli->query("SELECT P.id FROM product P INNER JOIN brand B ON B.id = P.brand_id INNER JOIN color C ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id WHERE $table_name='$name'");
              $n_rows = $n_rows->num_rows;
              if ($n_rows!=0) {
                  $n_rows = " <b>•</b> ($n_rows)";
              }
              else{
                  $n_rows = "";
              }
              $html .= '
                      <li class="option">
                          <input class="input_checkbox" name="" type="checkbox" id="'.$table_name.'-checkbox-'.$id.'" value="'.$name.'">
                          <label for="'.$table_name.'-checkbox-'.$id.'"><span class="filter-title">'.$name.$n_rows.'</span></label>
                      </li>
                  ';
          }
      }
  } else {
      $html = "<p>Error</p>";
      return $html;
  }
  return $html;
}

function getUrl($string_in){
	$string_output=mb_strtolower($string_in, 'UTF-8');
	//caracteres inválidos en una url
	$find=array('¥','µ','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ','\'','"');
	//traduccion caracteres válidos
	$repl=array('-','-','a','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','ny','o','o','o','o','o','o','u','u','u','u','y','y','','' );
	$string_output=str_replace($find, $repl, $string_output);
	//más caracteres inválidos en una url que sustituiremos por guión
	$find=array(' ', '&','%','$','·','!','(',')','?','¿','¡',':','+','*','\n','\r\n', '\\', '´', '`', '¨', ']', '[');
	$string_output=str_replace($find, '-', $string_output);
	$string_output=str_replace('--', '', $string_output);
	return $string_output;
}



function printCheckbox($result,$table_name){
    global $mysqli;
    $html = "";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $t_name = $table_name;
            $p="";
            match ($t_name){
                'brand'=>$t_name='B.name'
               ,'color'=>$t_name='C.name'
               ,'material'=>$t_name='M.name'
               ,default =>$t_name=""
           };
            if ($row['name']!="N/A") {
                $id = $row['id'];
                $name = $row['name'];
                $n_rows = $mysqli->query("SELECT P.id,P.name,P.sku,P.price,B.name AS'brand',C.name AS'color',M.name AS'material'FROM product P INNER JOIN brand B ON B.id = P.brand_id INNER JOIN color C ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id WHERE $t_name='$name'");
                $n_rows = $n_rows->num_rows;
                if ($n_rows!=0) {
                    $n_rows = " <b>•</b> ($n_rows)";
                }
                else{
                    $n_rows = "";
                }
                $html .= '
                        <li class="option">
                            <input class="input_checkbox" name="" type="checkbox" id="'.$table_name.'-checkbox-'.$id.'" value="'.$name.'">
                            <label for="'.$table_name.'-checkbox-'.$id.'"><span class="filter-title">'.$name.$n_rows.'</span></label>
                        </li>
                    ';
            }
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
            $price = $row['price'];
            $sku = $row['sku'];
            $brand = $row['brand'];
            $html .= '
                    <a href="/productos/'.getUrl($name).'-'.$id.'" class="card">
                        <div class="top">
                            <img src="/assets/img/product/'.getUrl($name).'-'.$sku.'.png" loading="lazy">
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

function selectForm($select){
  global $mysqli;
  $result = $mysqli->query("SELECT id,name FROM $select");
  $result = showSelectForm($result);
  return $result;
}

function showSelectForm($result){
  $html = "";
  while ($row = $result->fetch_assoc()) {
    if ($row['name']!="N/A") {
      $html .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
    }
  }
  echo $html;
}

if (isset($_POST['reg-save'])) {
  $name = $_POST['reg-name'];
  $sku = $_POST['reg-sku'];
  $price = $_POST['reg-price'];
  $img = $_FILES['reg-img']['name'];
  $brand = $_POST['reg-brand'];
  $collection = $_POST['reg-collection'];
  $department = $_POST['reg-department'];
  $type1 = $_POST['reg-type1'];
  $type2 = $_POST['reg-type2'];
  $type3 = $_POST['reg-type3'];
  $material = $_POST['reg-material'];
  $color = $_POST['reg-color'];
  var_dump($_FILES['reg-img']);
  insertProduct($sku,$name,$price,$img,$brand,$material,$color,$collection,$department,$type1,$type2,$type3);
}

// INSERT PRODUCT
function insertProduct($sku,$name,$price,$img,$brand,$material,$color,$collection,$department,$type1,$type2,$type3){
    global $root, $mysqli;
    if (isset($img) && $img != "") {
      $type = $_FILES['reg-img']['type'];
      $temp = $_FILES['reg-img']['tmp_name'];
  
      if (!((strpos($type, 'gif') || strpos($type, 'jpeg') || strpos($type, 'webp') || strpos($type, 'png')))) {
        $_SESSION['mensaje'] = 'Solo se admite archivos jpeg, gif, webp';
      } 
      else {
        $query = $mysqli->query("INSERT INTO product(sku,name,price,brand_id,material_id,color_id,collection_id,department_id,type1_id,type2_id,type3_id) VALUES('$sku','$name','$price','$brand','$material','$color','$collection','$department','$type1','$type2','$type3')");
        $result = $query;
        if ($result) {
          $_SESSION['mensaje'] = 'Se subió correctamente';
          move_uploaded_file($temp, $root . '/assets/img/product/'.$img);
          rename($root . '/assets/img/product/'.$img,$root . '/assets/img/product/'.getUrl($name).'-'.$sku.'.png');
          $select = selectProductByCod($sku);
          mkdir($root."/productos/".getUrl($name).'-'.$select['id']."", 0755);
          copy("$root/php/templates/template.php","$root/productos/".getUrl($name).'-'.$select['id']."/index.php");
          header('location: /admin');
        } else {
          $_SESSION['mensaje'] = 'Ocurrió un error';
        }
      }
    } else {
      echo '<script type="text/javascript">alert("Ingresa una imagen!");</>';
    }
}

// UPDATE PRODUCT
function updateProduct($codigo, $name, $price, $category, $brand, $material, $color, $id){
    global $mysqli, $url;
    $old = selectProductDetailById($id);
    rename($url.'/assets/img/product/'.getUrl($old['name']).'-'.$old['cod'].'.png',$url . '/assets/img/product/'.getUrl($name).'-'.$codigo.'.png');
    $result = $mysqli->query("UPDATE product SET cod='$codigo', name='$name', price=$price, kind_id=$category, brand_id=$brand, material_id=$material, color_id=$color WHERE id = $id");
    header('location: ../');
  }
  function updateImage($image,$id){
    global $mysqli, $url;
    if (isset($image) && $image != "") {
      $type = $_FILES['image']['type'];
      $temp = $_FILES['image']['tmp_name'];
  
      if (!((strpos($type, 'gif') || strpos($type, 'jpeg') || strpos($type, 'webp') || strpos($type, 'png')))) {
        $_SESSION['mensaje'] = 'Solo se admite archivos jpeg, gif, webp';
      } else {
        $result = $mysqli->query("UPDATE product SET image='$image' WHERE id = $id");
        if ($result) {
          move_uploaded_file($temp, $url . '/assets/img/product/'.$image);
          header('location: ../');
          return $result;
          
        } else {
          $_SESSION['mensaje'] = 'Ocurrió un error';
        }
      }
    } else {
      echo '<script type="text/javascript">alert("Ingresa una imagen!");</script>';
    }
  
}

// DELETE PRODUCT
function deleteProduct($id){
  global $mysqli;
  $result = $mysqli->query("DELETE FROM product WHERE id=$id");
  return $result;
}