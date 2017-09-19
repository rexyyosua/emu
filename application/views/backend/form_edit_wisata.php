<?php
	$id = $product->id;
if($this->input->post('is_submitted')){
	$name			= set_value('judul');
	$description	= set_value('deskripsi');
	$map			= set_value('map');
	$kategori		= set_value('kategori');
}else{
	$name 			= $product->judul;
	$description 	= $product->deskripsi;
	$map 			= $product->map;
	$kategori		= $product->kategori;
}
?>
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
			<div  class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1>Edit Data</h1>

				<div><?=validation_errors() ?></div>
				<?= form_open_multipart('admin/explore/update/'.$id,['class'=>'form-horizontal']) ?>
					  <hr>
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="name" placeholder="" value="<?=$name?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
						<div class="col-sm-10">
							  <select class="form-control" name="kategori">
								<option><?=$kategori?></option>
								<option>alam</option>
								<option>bahari</option>
								<option>budaya</option>
								<option>sejarah</option>
							  </select>
						</div>
					  </div>
					  
					  <div class="form-group"> 
						<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-10">
						  <textarea class="form-control" name="description" ><?=$description?></textarea>
						</div>
					  </div>
					  
					  <div class="form-group"> 
						<label for="inputPassword3" class="col-sm-2 control-label">Peta</label>
						<div class="col-sm-10">
						  <textarea class="form-control" name="map" ><?=$map?></textarea>
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Gambar</label>
						<div class="col-sm-10">
						  <input type="file" name="userfile">
						</div>
					  </div>
					  <br>
					  
					  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <input type="hidden" name="is_submitted" value="1"/>
						  <button type="submit" class="btn btn-primary btn-lg">Save</button>
						</div>
					  </div>
					
				<?= form_close() ?>
			</div>
			<div class="col-sm-1"></div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>