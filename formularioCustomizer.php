<!-- Bootstrap CSS -->

<!--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
-->

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/3be368b9d8.js" crossorigin="anonymous"></script>

<style type="text/css">
      
  .single-product-content-left{
    visibility: hidden;
  }

  .woocommerce-product-gallery,
  .price {
    display:none;
  }

  .woocommerce-Price-amount, 
  .amount {
    display:none; 
  }


  .woocommerce #content div.product div.summary, 
  .woocommerce div.product div.summary, 
  .woocommerce-page #content div.product div.summary, 
  .woocommerce-page div.product div.summary {
    /*float: left;*/
  }

  .product_title, h1.entry-title{
      display:none;
  }

.woocommerce td.product-name .wc-item-meta p, .woocommerce td.product-name .wc-item-meta:last-child, .woocommerce td.product-name dl.variation p, .woocommerce td.product-name dl.variation:last-child {
    /* margin-bottom: 0; */
}  

</style>

<div class="bsnamespace">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-10">
        <?php
          require('formulario/formulario.php');
        ?>
      </div>
    </div>
  </div>
</div>
