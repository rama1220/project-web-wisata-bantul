<div class="content-wrapper">
	<section class="content">
	<h4><strong>Edit User</strong></h4>
	<br> 
	<?php foreach($Admin as $adm) { ?>
 		<form action="<?php echo site_url('Admin/update') ?>" method="post">

 		

 			<div class="form-group"> 
 				<label>Username</label> 
 				<input type="hidden" name="id_adm" class="form-control" value="<?php echo $adm->id_adm ?>">
 				<input type="text" name="username" required="" class="form-control" value="<?php echo $adm->username ?>">
 			</div>

 			<div class="form-group"> 
 				<label>Password</label> 
 				<input type="password" name="password" required="" class="form-control" value="<?php echo $adm->password ?>"> 
 			</div> 

 			<div class="form-group"> 
 				<label>Email</label>
 				<input type="text" name="email_adm" required="" class="form-control" value="<?php echo $adm->email_adm ?>"> 
 			</div>


 			<button type="reset" class="btn btn-danger" value="Go Back" onclick="history.back(-1)" >Batal</button>
 			<button type="submit" class="btn btn-primary">Simpan</button> 
		</form>
		<?php } ?> 
 	</section> 
</div>