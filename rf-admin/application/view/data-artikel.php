    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <h3 class="box-title">Postingan</h3>

          <div class="box-tools pull-right">

            <a href="?view=input-artikel" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Pos">
              <i class="fa fa-plus"></i>
              <span>TAMBAH POS</span>
            </a>

          </div>

        </div>

        <div class="box-body">

          <?php

          if ($_GET['alert'] == "sukses") {
            echo '<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i>Postingan berhasil dihapus !!
                </div>';
          } elseif ($_GET['alert'] == "gagal") {
            echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-ban"></i>Postingan gagal dihapus !!
                </div>';
          }

          ?>

          <table id="example1" class="table table-bordered table-striped">
            
            <thead>
              <tr>
                <th>Judul</th>
                <th>Tanggal Upload</th>
                <th>Kunjungi</th>
                <th><center><i class="fa fa-gear"></i></center></th>
              </tr>
            </thead>

            <tbody>
              <?php
              $q_artikel = $mysqli->query("SELECT * FROM tbl_artikel");
              while ($result = $q_artikel->fetch_array()) {
              ?>
              <tr>
                <td><?php echo $result['title']; ?></td>
                <td><?php echo date('l, d F Y', strtotime($result['tanggal'])); ?></td>
                <td><a data-toggle="tooltip" title="Lihat Artikel" target="_blank" href="../view-artikel.php?id_artikel=<?php echo $result['id_artikel'];?>"> Lihat Artikel</a></td>
                <td width="100">
                  <center>
                    <div class="btn-group">
                      <a href="?view=edit-artikel&id_artikel=<?php echo $result['0']; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a onclick="return confirm('Yakin Ingin Menghapus Data ??')" href="application/models/hapusArtikel.php?id_artikel=<?php echo $result['0']; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
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