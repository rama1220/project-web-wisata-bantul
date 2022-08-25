<div class="content-wrapper"> 
	<section class="content"> 
		<?php foreach($Artikel as $atk) { ?> <?php echo form_open_multipart('Artikel/update');?> 
<h2>Edit Artikel</h2>
		<div class="form-group"> 
			<label>Judul Artikel</label> 
			<input type="hidden" name="id" class="form-control" value="<?php echo $atk->id ?>"> 
			<input type="text" name="nm_tempat" class="form-control" value="<?php echo $atk->nm_tempat?>"> 
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
			<label>Diskripsi</label> 
			<input type="text" name="diskripsi" class="form-control" value="<?php echo $atk->diskripsi ?>"> 
		</div>
       <div class="form-group"> 
			<label>Harga Tiket</label> 
			<input type="text" name="hrg_tiket" class="form-control" value="<?php echo $atk->hrg_tiket ?>"> 
		</div>
		<div class="form-group"> 
			<label>Jam</label> 
			<input type="time" name="jam" class="form-control" value="<?php echo $atk->jam ?>"> 
		</div>
		<div class="form-group"> 
			<label>Fasilitas</label> 
			<input type="text" name="fasilitas" class="form-control" value="<?php echo $atk->fasilitas?>"> 
		</div>
		<div class="form-group"> 
			<label>Titik Kordinat</label> 
			<input type="text" name="kordinat" class="form-control" value="<?php echo $atk->kordinat ?>"> 
		</div>
		

		<div class="form-group"> 
			<label>Uploader</label> 
			<input type="text" name="uploader" class="form-control" value="<?php echo $atk->uploader ?>"> 
		</div> 

		<div class="form-group"> 
			<label>Tanggal rilis</label> 
			<input type="text" name="tgl_rilis" class="form-control" value="<?php echo $atk->tgl_rilis ?>"> 
		</div> 
		
		<script type="text/javascript" src="<?= base_url();?>/ckeditor/ckeditor.js"></script>
		<div class="form-group"> 
			<label>Isi</label>
			<textarea type="text" name="isi" class="ckeditor" id="ckedtor" value=""> <?php echo $atk->isi?></textarea>
		</div>

		

		<button type="reset" class="btn btn-danger" value="Go Back" onclick="history.back(-1)" >Batal</button>
		<button type="submit" class="btn btn-primary">Save</button> 
		<? echo form_close(); ?> <?php } ?> 
	</section> 
</div>
