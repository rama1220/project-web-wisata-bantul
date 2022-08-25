<div class="content-wrapper"> 

	<section class="content-header"> 
		<h1> 
		Atikel
			<small>Control panel</small> 
		</h1> 
		<ol class="breadcrumb"> 
			<li><a href="<?=site_url('Dashboards')?>"> Home</a></li> 
			<li class="active"><?= $title ?></li> 
		</ol> 
	</section> 

	<section class="content"> 
		<?php 

		foreach ($Artikel as $atk): ?>
				<h3><?php echo $atk->nm_tempat ?></h3>
			
				<img src="<?php echo base_url()?>assets/foto/<?php echo $atk->foto ?>" width="25%" height="30%">
			<br>
			<br>
            <b>Diskripsi</b>
			<p><?php echo $atk->diskripsi ?></p>
			<a href="<?=site_url('Kategori/isi_kate/'.$atk->id)?>"><div class="btn btn-primary">Read More</div></a>
			<td ><?php echo anchor('Artikel/hapus/'.$atk->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			 <?php endforeach; ?> 
		</section> 
	</div>


