<div class="content-wrapper"> 

	<section class="content-header"> 
		<h1> 
		Ringkasan Artikel 
			<small>Control panel</small> 
		</h1> 
		<ol class="breadcrumb"> 
			<li><a href="<?=site_url('Dashboards')?>"></i> Home</a></li> 
			<li class="active">Ringkasan Artikel</li> 
		</ol> 
	</section> 

	<section class="content"> 
	
			<center>
				<h3><?php echo $Artikel->nm_tempat ?></h3>
			</center> 

			<center>
				<img src="<?php echo base_url()?>assets/foto/<?php echo $Artikel->foto ?>" width="30%" height="40%">
			</center> 
			<br> 

           <h4> Harga Tiket : <?php echo $Artikel->hrg_tiket?></h4>
		   <h4>  Jam : <?php echo $Artikel->jam?></h4>
		   <h4>Fasilitas : <?php echo $Artikel->fasilitas?></h4>
		   <h4>Titik Kordinat : <?php echo $Artikel->kordinat?></h4>
		   <br>
			<h4><?php echo $Artikel->isi ?></h4> 
		</section> 
	</div>


