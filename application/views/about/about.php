<div class="content-wrapper">
  <section class="content-header">
      <h1>
        About 
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('Dashboards')?>"></i> Home</a></li>
        <li class="active">About</li>
      </ol>
    </section>

<section class="content">
  <?php echo $this->session->flashdata('pesan'); ?> <a href="<?=site_url('About/buat')?>" class="btn btn-primary" ><i class="fa fa-plus"> Buat About</i></a>

 

      <table class="table">
            <tr>
              
             
                <th>About</th>
                <th>Picture</th>
                <th>Hapus</th>
                <th>Edit</th>
            </tr>
          
       
          <tr>

          
            <td><?php echo $About->isi_abt?></td>
            <td><img src="<?php echo base_url()?>assets/foto/<?php echo $About->foto ?>" width="80" height="50"></td>
           
            <td onclick="javascript: return confirm('Anda yakin ingin menghapus data ini?')"><?php echo anchor('About/hapus/'.$About->id_abt, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
            <td><?php echo anchor('About/edit/'.$About->id_abt,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
          </tr>
   
      </table>
    </section>
  </div>
