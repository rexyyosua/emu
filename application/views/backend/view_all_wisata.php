<!doctype html>
<html>
	<head>
		<title>Admin Page</title>
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
		
	</head>
	<body>
		
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1>Tabel Data</h1>
				<hr>
		<table id="myTable" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>ID </th>
					<th>Judul</th>
					<th>Gambar</th>
					<th>Kategori</th>
					<th>Deskripsi</th>
					
					<th>
						<?=anchor('admin/explore/create','Add Product',['class'=>'btn btn-primary btn-sm'])?>
				</tr>
			</thead>
			<tbody>
				<?php foreach($wis as $product) : ?>
				<tr>
					<td><?=$product->id?></td>
					<td><?=$product->judul?></td>
					<td><?php
						$product_image = ['src'=>'image/'.$product->gambar,
										  'width'=>'100',
										  'height'=>'60'
										 ];
						echo img($product_image)
					?>
					</td>
					<td><?=$product->kategori?></td>
					<td><?=$product->deskripsi?></td>
					<td>
						<?=anchor('admin/explore/update/'.$product->id,'Edit',['class'=>'btn btn-default btn-sm'])?>
						<?=anchor('admin/explore/delete/'.$product->id,'Delete',['class'=>'btn btn-danger btn-sm','onclick'=>'return confirm(\'Apakah Anda Yakin ??\')'])?>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
			</div>
			<div class="col-sm-1"></div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>