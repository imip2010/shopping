<!DOCTYPE html>
<html>
<head>
    <title>Shopping cart dengan codeigniter dan AJAX</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container"><br/>
    <h2>Shopping Cart Dengan Ajax dan Codeigniter</h2>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            <h4>Produk</h4>
            <div class="row">
	<?php
		foreach ($products as $row) { ?>
	
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img width="200" src="<?php echo base_url()?>assets/images/product/<?php echo $row->photo1?>"">
                        <div class="caption">
                            <h4><?php echo $row->productName;?></h4>
                            <div class="row">
                                <div class="col-md-7">
                                    <h4><?php echo 'Rp '.number_format($row->salePrice);?></h4>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="quantity" id="<?php echo $row->productID;?>" value="1" class="quantity form-control">
                                </div>
                            </div>
                            <button class="add_cart btn btn-success btn-block" data-produkid="<?php echo $row->productID;?>" data-produknama="<?php echo $row->productName;?>" data-produkharga="<?php echo $row->salePrice;?>">Add To Cart</button>
                        </div>
                    </div>
                </div>
            <?php	}
	?>
                 
            </div>
 
        </div>
        <div class="col-md-4">
            <h4>Shopping Cart</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
						<th></th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">
 
                </tbody>
                 
            </table>
        </div>
    </div>
</div>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.add_cart').click(function(){
            var productID = $(this).data("produkid");
            var memberID = 1;
            var salePrice = $(this).data("produkharga");
            var quantity     = $('#' + productID).val();
            $.ajax({
				// url : "<?php echo site_url('add_to_cart')?>",
                url : "<?php echo base_url();?>Cart/add_to_cart",
                method : "POST",
                data : {productID: productID, memberID: memberID, salePrice: salePrice, quantity: quantity},
                success: function(data){
					alert('success');
                    $('#detail_cart').html(data);
                }
            });
        });
 
        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>Cart/show_cart");
 
        //Hapus Item Cart
//         $(document).on('click','.hapus_cart',function(){
//             var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
//             $.ajax({
//                 url : "<?php echo base_url();?>cart/hapus_cart",
//                 method : "POST",
//                 data : {row_id : row_id},
//                 success :function(data){
//                     $('#detail_cart').html(data);
//                 }
//             });
//         });
    });
</script>
</body>
</html>