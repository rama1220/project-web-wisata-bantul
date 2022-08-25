<div class="content-wrapper"> 
	<section class="content"> 
	 <?php echo form_open_multipart('About/update');?> 
<h2>Edit About</h2>
		<div class="form-group"> 
	
		
		<div class="form-group"> 
			<label>Upload foto</label> 
			<input type="file" name="foto" class="form-control" value="">
		</div>

		<script type="text/javascript" src="<?= base_url();?>/ckeditor/ckeditor.js"></script>
		<div class="form-group"> 
			<label>About</label>
			<input type="hidden" name="id_abt" class="form-control" value="<?php echo $about->id_abt ?>"> 
			<textarea type="text" name="isi_abt" class="ckeditor" id="ckedtor" value=""> <?php echo $about->isi_abt ?></textarea>
		</div>

		

		<button type="reset" class="btn btn-danger" value="Go Back" onclick="history.back(-1)" >Batal</button>

		<button type="submit" class="btn btn-primary">Save</button> 
	
	</section> 
</div>