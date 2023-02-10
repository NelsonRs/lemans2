<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input name="category-checkbox" id="category-checkbox-0" type="checkbox" data-filter-value="linea blanca">
    <label for="category-checkbox-0">Linea Blanca</label>
    
<script>
    let products = [
        { name: 'computer', categories: ['tech'] },
        { name: 'soap', categories: ['hygiene', 'tech'] }, 
        { name: 'bbq', categories: ['outdoors'] }
    ];

    let categoriesToFilterBy = ['tech', 'hygiene'];
    let filterSet = new Set(categoriesToFilterBy);
    let filteredProducts = products.filter(product => 
        product.categories.some(category => filterSet.has(category))
    );
    // console.log(filteredProducts)
    console.log(products)
</script>
</body>
</html> -->

<?php

$query = $_REQUEST['q']

?>