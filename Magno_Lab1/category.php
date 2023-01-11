<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container main">
	<h1 class="page-header text-center">CATEGORY CRUD</h1>
	<div class="row">
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Category Name</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from category order by categoryid asc";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['catname']; ?></td>
							<td>
								<a href="#editcategory<?php echo $row['categoryid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a>  <a href="#deletecategory<?php echo $row['categoryid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove-sign"></span> Delete</a>
								<?php include('category_modal.php'); ?>
							</td>
						</tr>
						<?php

					}
				?>

			</tbody>
		</table>
		<div class="col-md-12 category_button" >
			<a href="#addcategory" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Category</a>
		</div>
	</div>
</div>
<?php include('modal.php'); ?>
</body>
</html>