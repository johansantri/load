<!--blog : https://johansantri.blogspot.com/ -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>-->
	<script >
		$(document).ready(function(){
			var count = 0;
			var limit=4;
			var test="welcome/load";
			$("button").click(function(){
				limit=limit + 4;
			$("#page").load(test,{
				tambah:limit				
			
			});	

			if(limit == test.length){
				count = 0;
				$("#btn").hide();
				$("#akhir").append("anda telah mencapai data terakhir");
				return;
			}

			});
			
		});
	</script>
</head>
<body>
	&nbsp;
    &nbsp;
    <div class="container">
	 <div class="row" id="page">
	 <?php foreach ($produk as $product) : ?>
	
  <div class="col-sm-5 col-md-3" >
    <div class="thumbnail"  >

	 <div class="image">        
      <img src="<?php echo base_url()?>uploads/<?php echo $product->image ?>" style="max-width:100%; max-height:100%; height:200px"  alt="" class="img-responsive image1">        
    </div>
      <div class="caption">
        <h5 style="min-height:8px;"><?php echo $product->name?></h5>
        <p><small><?php echo $product->description ?></small></p>
		<p><strong>Rp.<?php echo number_format($product->price) ?></strong></p>

        
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
</div> 

	<div class="container">
		
<button class="btn btn-info container" id="btn" >load more</button>
<span style="color: blue" id="akhir"></span>
</div>
</body>
</html>