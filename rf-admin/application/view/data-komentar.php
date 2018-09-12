    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <h3 class="box-title">Komentar</h3>

        </div>

        <div class="box-body">

          <?php

          if ($_GET['alert'] == "sukses") {
            echo '<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i>Komentar berhasil dihapus !!
                </div>';
          } 

          ?>

          <table id="example1" class="table table-bordered table-striped">
            
            <thead>
              <tr>
                <th width="150">Judul Artikel</th>
                <th width="">Nama</th>
                <th width="">Email</th>
                <th>Komentar</th>
                <th width="150">Tanggal</th>
                <th width=""><center><i class="fa fa-gear"></i></center></th>
              </tr>
            </thead>

            <tbody>
              <?php
              $q_artikel = $mysqli->query("SELECT tbl_komentar.*, tbl_artikel.title FROM tbl_artikel INNER JOIN tbl_komentar ON tbl_artikel.id_artikel = tbl_komentar.id_artikel");
              while ($result = $q_artikel->fetch_array()) {
              ?>
              <tr>
                <td><?php echo $result['title']; ?></td>
                <td><?php echo $result['nama']; ?></td>
                <td><?php echo $result['email']; ?></td>
                <td><?php echo substr($result['komentar'],0, 100); ?><a target="_blank" href="../view-artikel.php?id_artikel=<?php echo $result['id_artikel'];?>"> selengkapnya...</a></td>
                <td><?php echo date('l, d F Y', strtotime($result['tanggal'])); ?></td>
                <td width="100">
                  <center>
                    <div class="btn-group">
                      <a onclick="return confirm('Yakin Ingin Menghapus Komentar ??')" href="application/models/hapusKomentar.php?id_komentar=<?php echo $result['0']; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                    </div>
                  </center>
                </td>
              </tr>
              <?php } ?>
            </tbody>

          </table>

        </div>

      <!-- /.box -->

    </section>
    <!-- /.content -->