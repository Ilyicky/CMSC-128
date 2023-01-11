<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container main">
	<h1 class="page-header text-center">SALES</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th class="text-center">Customer</th>
			<th class="text-center">Date of Order</th>
			<th class="text-center">Total Sales</th>
			<th class="text-center">Details</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td class="text-center"><?php echo $row['customer']; ?></td>
						<td class="text-center"><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td class="text-center">&#8369; <?php echo number_format($row['total'], 2); ?></td>
						<td class="text-center"><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-align-justify"></span> View Here </a>
							<?php include('sales_modal.php'); ?>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>