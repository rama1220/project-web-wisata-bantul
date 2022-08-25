<div class="content-wrapper">
	<section class="content">
	<h4><strong>Edit Ketegori</strong></h4>
	<br> 
	<?php foreach($Kategori as $kat) { ?>
 		<form action="<?php echo site_url('Kategori/update') ?>" method="post">		

 			<div class="form-group"> 
 				<label>Kategori</label> 
 				<input type="hidden" name="id" class="form-control" value="<?php echo $kat->id ?>">
 				<input type="text" name="kategori" required="" class="form-control" value="<?php echo $kat->kategori ?>">
 			</div>

 			<button type="reset" class="btn btn-danger" value="Go Back" onclick="history.back(-1)" >Batal</button>
 			<button type="submit" class="btn btn-primary">Simpan</button> 
		</form>
		<?php } ?> 
 	</section> 
</div>