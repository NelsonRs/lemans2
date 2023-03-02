var markModal = document.getElementById('markModal');
var materialModal = document.getElementById('materialModal');
var colorModal = document.getElementById('colorModal');
var updateModal = document.getElementById('updateModal');


$(document).on('click','#addBrand',function(){ markModal.style.display = "block";});
$(document).on('click','#addMaterial',function(){ materialModal.style.display = "block";});
$(document).on('click','#addColor',function(){ colorModal.style.display = "block";});

$(document).on('click','#updateImage',function(){ updateModal.style.display = "block";});

$(document).on('click','.close',function(){ markModal.style.display = "none"; materialModal.style.display = "none"; updateModal.style.display = "none";colorModal.style.display = "none"; });


$(document).ready(function() {
    $('#example').DataTable({
        select: true,
        columns: [{
                data: 'text'
            },
            {
                data: 'number'
            },
            {
                data: 'price'
            },
            {
                data: 'image'
            },
            {
                data: 'category'
            },
            {
                data: 'brand'
            },
            {
                data: 'material'
            },
            {
                data: 'color'
            },
            {
                data: 'collection'
            },
            {
                data: 'actions'
            }
        ]
    });
});


function deleteProduct(id) {
    $.ajax({
        url: '/admin/models/query.php',
        type: 'POST',
        datatype: 'html',
        data: {id: id},
    })
}
$(document).on('click','#deleteProduct',function(){ 
    var valor = $(this).val();
    if (confirm('¿Desea ELIMINAR el registro?')) {
        deleteProduct(valor)
        window.location.reload()
      } else {

      }
      window.location.reload()
});
function updateImage(val) {
    $.ajax({
        url: '/admin/models/query.php',
        type: 'POST',
        datatype: 'html',
        data: {val: val},
    })
}
$(document).on('click','#updateImage',function(){ 
    var valor = $(this).val();
       if (valor!="") {
        document.getElementById('valll').value = valor;
       }
});