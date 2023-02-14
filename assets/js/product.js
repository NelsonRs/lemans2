$(function () {
  getProducts();

  $(".input_checkbox").on("click", function (){
    getProducts();
  })
});

function getProducts() {

  let form = $(".form");

  $.ajax({
     type:"POST"
    ,url:"/php/models/filters.php"
    ,data:form.serialize()
    ,success:function(data){
      $("#filters-card").html("");
      $.each(JSON.parse(data), function(key, product){
        let row = ""+
          '<div class="card">'+
            '<div class="top">'+
              '<img src="/assets/img/product/'+product.image+'">'+
            '</div>'+
            '<div class="bottom">'+
              '<span><b>•</b>&nbsp;'+product.brand+'</span>'+
              '<p>'+product.name+'</p>'+
              '<p>'+product.price+' Bs</p>'+
            '</div>'+
          '</div>';
          $("#filters-card").append(row);
      })
    }
  })
}


var coll = document.getElementsByClassName("collapsible");
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
      content.classList.toggle("active");
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
      content.classList.toggle("active");
    }
  });
}