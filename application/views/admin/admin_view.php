<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data User
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Dashboards"></i> Home</a></li>
        <li class="active">Data Admin</li>
      </ol>
    </section>

    <section class="content">
        <?php echo $this->session->flashdata('pesan'); ?>
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"> Tambah Admin</i></button>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>Username</th>
                <th>Email</th>
                <th>Hapus</th>
                <th>Edit</th>
            </tr>
                
            <?php
            $no = 1;
            foreach ($Admin as $adm) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $adm->username ?></td>
                    <td><?php echo $adm->email_adm ?></td>
                    <td onclick="javascript: return confirm('Anda yakin ingin menghapus data ini?')"><?php echo anchor('Admin/hapus/'.$adm->id_adm, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <td><?php echo anchor('Admin/edit/'.$adm->id_adm ,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA USER</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="Admin/tambah_aksi">

             <div class="form-group">
                <label>Id</label>
                <input type="text" name="id_adm" required="" class="form-control">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required="" class="form-control">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required="" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email_adm" required="" class="form-control">
            </div>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>       
        </form>
      </div>
    </div>
  </div>
</div>
</div>