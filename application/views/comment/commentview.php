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
      
        <table class="table">
            <tr>
                <th>NO</th>
                <th>name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Hapus</th>
                <th>Lihat Comment</th>
            </tr>
                
            <?php
            $no = 1;
            foreach ($Comment as $reg) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $reg->nm_cmt ?></td>
                    <td><?php echo $reg->email ?></td>
                       <td><?php echo $reg->subject ?></td>
                    <td onclick="javascript: return confirm('Anda yakin ingin menghapus data ini?')"><?php echo anchor('Comment/hapus/'.$reg->id_cmt, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <td><?php echo anchor('Comment/isi/'.$reg->id_cmt,'<div class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></div>') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</div>