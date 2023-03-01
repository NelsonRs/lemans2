<?php $url = $_SERVER['DOCUMENT_ROOT'];
require $url . '/php/models/class.php';

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// INSERT PRODUCT
function insertProduct($name, $price, $category, $image, $brand, $material, $color, $codigo){
  global $url, $mysqli;
  if (isset($image) && $image != "") {
    $type = $_FILES['image']['type'];
    $temp = $_FILES['image']['tmp_name'];

    if (!((strpos($type, 'gif') || strpos($type, 'jpeg') || strpos($type, 'webp') || strpos($type, 'png')))) {
      $_SESSION['mensaje'] = 'Solo se admite archivos jpeg, gif, webp';
    } 
    else {
      $query = $mysqli->query("INSERT INTO product(name,price,image,kind_id,brand_id,material_id,color_id,cod) VALUES('$name','$price','$image','$category','$brand','$material','$color','$codigo')");
      $result = $query;
      if ($result) {
        $_SESSION['mensaje'] = 'Se subió correctamente';
        move_uploaded_file($temp, $url . '/assets/img/product/'.$image);
        $select = selectProductByCod($codigo);
        // echo'<script>alert("'.print_r($select).'")</script>';
        mkdir($url."/productos/".getUrl($name).'-'.$select['id']."", 0755);
        copy("$url/php/templates/template.php","$url/productos/".getUrl($name).'-'.$select['id']."/index.php");
        header('location: ../');
      } else {
        $_SESSION['mensaje'] = 'Ocurrió un error';
      }
    }
  } else {
    echo '<script type="text/javascript">alert("Ingresa una imagen!");</>';
  }
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////
// INSERT BRAND
function insertAllOptions($val, $type)
{
  global $mysqli;
  $query = $mysqli->query("INSERT INTO $type(name) VALUES('$val')");
  header('location: ../');
}

/////////////////////////////////////////////////////////////////// 
// UPDATE
function updateProduct($codigo, $name, $price, $category, $brand, $material, $color, $id){
  global $mysqli, $url;
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


function deleteProduct($id)
{
  global $mysqli;
  $result = $mysqli->query("DELETE FROM product WHERE id=$id");
  return $result;
}

///////////////////////////////////////////////////////////////////
// SELECT ALL
function selectAll($table)
{
  global $mysqli;
  $result = $mysqli->query("SELECT * FROM $table");
  $result = showSelect($result);
  return $result;
}
function selectById($table, $name)
{
  global $mysqli;
  if ($name == false) {
    $name = 'Otro';
  }
  $result = $mysqli->query("SELECT * FROM $table WHERE name='$name'");
  $result = showSelectById($result);
  return $result;
}
function selectAllProduct()
{
  global $mysqli;
  $result = $mysqli->query("SELECT P.id,P.name,P.price,P.image,P.cod AS 'codigo',K.name AS 'category',B.name AS 'brand',M.name AS 'material',C.name AS 'color' FROM product P INNER JOIN kind K  ON K.id = P.kind_id INNER JOIN brand B ON B.id = P.brand_id INNER JOIN color C  ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id");
  $result = showProduct($result);
  return $result;
}
function selectProductById($id)
{
  global $mysqli;
  $result = $mysqli->query("SELECT P.id,P.name,P.price,P.image,P.cod AS 'codigo',K.name AS 'category',B.name AS 'brand',M.name AS 'material',C.name AS 'color' FROM product P INNER JOIN kind K  ON K.id = P.kind_id INNER JOIN brand B ON B.id = P.brand_id INNER JOIN color C  ON C.id = P.color_id INNER JOIN material M ON M.id = P.material_id WHERE P.id=$id");
  $result = showProductObj($result);
  return $result;
}

/////////////////////////////////////////////////////////////////// 
// RESULT

function showSelect($obj)
{
  $salida = "";
  while ($row = $obj->fetch_assoc()) {
    $salida .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
  }
  echo $salida;
}
function showSelectById($obj)
{
  $salida = [];
  while ($row = $obj->fetch_assoc()) {
    $id = $row['id'];
    $salida = $id;
  }
  return $salida;
}

function showProduct($obj)
{
  $salida = "";
  while ($row = $obj->fetch_assoc()) {
    $salida .=
                '<tr>
                  <td><img style="max-width: 128px;max-height: 128px;display:flex;margin:auto"  src="../../assets/img/product/' . $row['image'] . '"/></td>
                  <td>' . $row['name'] . '</td>
                  <td>' . $row['price'] . '</td>
                  <td>' . $row['category'] . '</td>
                  <td>' . $row['codigo'] . '</td>
                  <td>' . $row['brand'] . '</td>
                  <td>' . $row['material'] . '</td>
                  <td>' . $row['color'] . '</td>
                  <td><form action="/admin/views/editProduct.php" method="post"><button class="btn-edit" type="submit" name="id" value="' . $row['id'] . '" id="editProduct">Editar</button></form><button class="btn-edit2" value="' . $row['id'] . '" id="deleteProduct" >Eliminar</button><button id="updateImage" class="btn-edit" value="' . $row['id'] . '" type="submit">Cambiar Imagen</button></td>
                </tr>
                
                ';
  }
  echo $salida;
}
function showProductObj($obj)
{
  $salida = [];
  while ($row = $obj->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['price'];
    $image = $row['image'];
    $category = $row['category'];
    $cod = $row['codigo'];
    $brand = $row['brand'];
    $material = $row['material'];
    $color = $row['color'];
    $salida = [$id, $name, $price, $cod, $category, $brand, $material, $color, $image];
  }
  return $salida;
}
