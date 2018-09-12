    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <h3 class="box-title">Postingan</h3>

          <div class="box-tools pull-right">

            <a href="?view=input-user" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Akun">
              <i class="fa fa-plus"></i>
              <span>TAMBAH AKUN</span>
            </a>

          </div>

        </div>

        <div class="box-body">


          <?php

          if ($_GET['alert'] == "sukses") {
            echo '<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i>User berhasil dihapus !!
                </div>';
          } elseif ($_GET['alert'] == "gagal") {
            echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-ban"></i>User gagal dihapus !!
                </div>';
          } elseif ($_GET['alert'] == "sukses-add") {
            echo '<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i>User berhasil ditambahkan !!
                </div>';
          } elseif ($_GET['alert'] == "gagal-add") {
            echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-ban"></i>User gagal ditambahkan !!
                </div>';
          }

          ?>

          <table id="example1" class="table table-bordered table-striped">
            
            <thead>
              <tr>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th><center><i class="fa fa-gear"></i></center></th>
              </tr>
            </thead>

            <tbody>

              <?php 
              $q_user = $mysqli->query("SELECT * FROM tbl_user");
              while ($result = $q_user->fetch_array()) {
              ?>
              <tr>
                <td><?php echo $result['username']; ?></td>
                <td><?php echo $result['nama_lengkap']; ?></td>
                <td><?php echo $result['email']; ?></td>
                <td width="100">
                  <center>
                    <div class="btn-group">
                      <a href="?view=edit-user&id_user=<?php echo $result['0']; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a onclick="return confirm('Yakin Ingin Menghapus Data ??')" href="application/models/hapusUser.php?id_user=<?php echo $result['0']; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
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