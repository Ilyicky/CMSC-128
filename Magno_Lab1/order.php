<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container main ">
	<h1 class="page-header text-center">ORDER</h1>
		<div class="row">
			<div class="col-md-3">
				<a><input type="text" name="customer" class="form-control" placeholder="Customer Full Name" required></a>
			</div>
			<div class="col-md-2" style="margin-left:-20px;">
				<button type="submit" class="btn" style="background-color: orange;"></span> Save</button>
			</div>
	<form method="POST" action="purchase.php">
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center">Category</th>
				<th class="text-center">Product Name</th>
				<th class="text-center">Product Picture</th>
				<th class="text-center">Price</th>
				<th class="text-center">Quantity</th>
			</thead>
			<tbody>
				<?php 
					$sql="select * from product left join category on category.categoryid=product.categoryid order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><?php echo $row['catname']; ?></td>
							<td class="text-center"><?php echo $row['productname']; ?></td>
							<td class="text-center"><img src="<?php if(empty($row['photo'])){echo "upload/noimage.jpg";} else{echo $row['photo'];} ?>" height="250px;" width="50%"></td>
							<td class="text-center">&#x20A8; <?php echo number_format($row['price'], 2); ?></td>
							<td class="text-center"><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
</body>
</html>