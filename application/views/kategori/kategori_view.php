<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Kategori Pariwisata
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <a href="<?=site_url('Dashboards')?>"><li> Home</a></li>
        <li class="active">Data Kategori Pariwisata</li>
      </ol>
    </section>

    <section class="content">
        <?php echo $this->session->flashdata('pesan'); ?>
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"> Tambah   Kategori</i></button>
    	<table class="table">
            <tr>
                <th>NO</th>
                <th>Id</th>
                <th>Kategori</th>
                 <th>Lihat</th>
                <th>Hapus</th>
                <th>Edit</th>
            </tr>
    			
    		<?php
    		$no = 1;
    		foreach ($Kategori as $kat) : ?>
    			<tr>
    				<td><?php echo $no++ ?></td>
                    <td><?php echo $kat->id ?></td>
    				<td><?php echo $kat->kategori ?></td>
                     <td><?php echo anchor('Kategori/isi/'.$kat->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></div>') ?></td>
    				<td onclick="javascript: return confirm('Anda yakin ingin menghapus data ini?')"><?php echo anchor('Kategori/hapus/'.$kat->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
            <td><?php echo anchor('Kategori/edit/'.$kat->id ,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
    			</tr>
    		<?php endforeach; ?>
    	</table>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA KATEGORI</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="Kategori/tambah_aksi">
        <div class="form-group">
                <label>Id</label>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control">
            </div>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>   
      </div>
    </div>
  </div>
</div>
</div>