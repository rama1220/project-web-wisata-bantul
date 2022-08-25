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
		<?php echo form_open_multipart('Artikel/tambah_aksi');?> 

		<div class="form-group"> 
			<label>Id</label> 
			<input type="text" name="id" class="form-control"> 
		</div> 
		<div class="form-group"> 
			<label>Kategori</label> 
			<select name="id_kate" class="form-control">
			<option>Pilih Kategori</option>
				<?php foreach ($kategori as $kat): ?>
			<option value="<?php echo $kat['id'];?>"><?php echo $kat['kategori'];?></option>
			    <?php endforeach; ?>
			</select>
		</div> 

		<div class="form-group"> 
			<label>Nama Tempat</label> 
			<input type="text" name="nm_tempat" class="form-control"> 
		</div> 
		<div class="form-group"> 
			<label>Diskripsi</label> 
			<input type="text" name="diskripsi" class="form-control"> 
		</div> 
		<div class="form-group"> 
			<label>Harga Tiket</label> 
			<input type="text" name="hrg_tiket" class="form-control"> 
		</div> 
		<div class="form-group"> 
			<label>Jam</label> 
			<input type="time" name="jam" class="form-control"> 
		</div> 
		<div class="form-group"> 
			<label>Fasilitas</label> 
			<input type="text" name="fasilitas" class="form-control"> 
		</div> 
		<div class="form-group"> 
			<label>Titik Kordinat</label> 
			<input type="text" name="kordinat" class="form-control"> 
		</div> 

		
		<div class="form-group">
			<label>Uploader</label> 
			<input type="text" name="uploader" class="form-control"> 
		</div> 

		<div class="form-group"> 
			<label>Tanggal rilis</label> 
			<input type="date" name="tgl_rilis" class="form-control"> 
		</div> 
		
		<div class="form-group"> 
			<label>Upload foto</label> 
			<input type="file" name="foto" class="form-control"> 
		</div>

		<script type="text/javascript" src="<?= base_url();?>/ckeditor/ckeditor.js"></script>
		<div class="form-group"> 
		
			<label>Isi</label> 
			<textarea type="text" name="isi" class="ckeditor" id="ckedtor"> </textarea>
		</div>

		<button type="reset" class="btn btn-danger" value="Go Back" onclick="history.back(-1)" >Batal</button>
		<button type="submit" class="btn btn-primary">Save </button> 
		<? echo form_close(); ?> 
	</section> 
</div>