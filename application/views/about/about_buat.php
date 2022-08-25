<div class="content-wrapper"> 

	<section class="content-header"> 
		<h1> 
			Tulis Artikel
			<small>Control panel</small> 
		</h1> 
		<ol class="breadcrumb"> 
			<li><a href="<?=site_url('Dashboards')?>">
				
					
				</i> Home</a>
			</li> 
			<li class="active">Artikel</li> 
		</ol> 
	</section> 

	<section class="content"> 
		<?php echo form_open_multipart('About/tambah_aksi');?> 

		<div class="form-group"> 
			<label>Id</label> 
			<input type="text" name="id_abt" class="form-control"> 
		</div> 
		
		<div class="form-group"> 
			<label>Upload Picture</label> 
			<input type="file" name="foto" class="form-control"> 
		</div>
		

		<script type="text/javascript" src="<?= base_url();?>/ckeditor/ckeditor.js"></script>
		<div class="form-group"> 
		
			<label>About</label> 
			<textarea type="text" name="isi_abt" class="ckeditor" id="ckedtor"> </textarea>
		</div>

		<button type="reset" class="btn btn-danger" value="Go Back" onclick="history.back(-1)" >Batal</button>

		<button type="submit" class="btn btn-primary">Save </button> 
		<? echo form_close(); ?> 
	</section> 
</div>