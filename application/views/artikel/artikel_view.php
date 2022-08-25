<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Artikel 
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('Dashboards')?>"></i> Home</a></li>
        <li class="active">Artikel</li>
      </ol>
    </section>

<section class="content">
  <?php echo $this->session->flashdata('pesan'); ?> <a href="<?=site_url('Artikel/tambahArtikel')?>" class="btn btn-primary" ><i class="fa fa-plus"> Tulis Artikel</i></a>

 

      <table class="table">
            <tr>
                <th>NO</th>
                <th>Id</th>
                <th>Nama Tempat</th>
                <th>Picture</th>
                <th>Uploader</th>
                <th>Tanggal rilis</th>
                <th>Lihat</th>
                <th>Hapus</th>
                <th>Edit</th>
            </tr>
          
        <?php
        $no = 1;
        foreach ($Artikel as $atk) : ?>
          <tr>

            <td><?php echo $no++ ?></td>
            <td><?php echo $atk->id?></td>
            <td><?php echo $atk->nm_tempat?></td>
            <td><img src="<?php echo base_url()?>assets/foto/<?php echo $atk->foto ?>" width="80" height="50"></td>
            <td><?php echo $atk->uploader ?></td>
            <td><?php echo $atk->tgl_rilis ?></td>
            <td><?php echo anchor('Artikel/isi/'.$atk->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></div>') ?></td>
            <td onclick="javascript: return confirm('Anda yakin ingin menghapus data ini?')"><?php echo anchor('Artikel/hapus/'.$atk->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
            <td><?php echo anchor('Artikel/edit/'.$atk->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </section>
  </div>
