<div class="content-wrapper"> 

	<section class="content-header"> 
		<h1> 
	     Data Comment WEB 
			<small>Control panel</small> 
		</h1> 
		<ol class="breadcrumb"> 
			<li><a href="<?=site_url('Dashboards')?>"></i> Home</a></li> 
			<li class="active">Data Comment</li> 
		</ol> 
	</section> 

	<section class="content"> 
	<br>
		<tr>
			<td><h3>Nama : <?php echo $comment->nm_cmt ?></h3></td>
           <td><h3> Email : <?php echo $comment->email?></h3></td>
		  <td> <h3>Subject : <?php echo $comment->subject?></h3></td>
		   <td> <h3>Pesan : <?php echo $comment->mssg?></h3></td>

		  </tr>
		  
		</section> 
	</div>


