    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <h3 class="box-title">Edit User</h3>

        </div>

        <div class="box-body">

        	<div class="row">
        		
        		<div class="col-lg-12">


        			<?php

        			if ($_GET['alert'] == "sukses") {
        				echo '<div class="alert alert-info alert-dismissible">
		        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        				<i class="icon fa fa-check"></i>Data berhasil diedit !!
		        				</div>';
        			} elseif ($_GET['alert'] == "gagal") {
        				echo '<div class="alert alert-danger alert-dismissible">
		        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        				<i class="icon fa fa-ban"></i>Data gagal diedit !!
		        				</div>';
        			}
        			?>
		        	
        			
        			<form action="application/models/editUser.php" method="POST" enctype="multipart/form-data">

        				<?php
        				$id_user 	    = $mysqli->real_escape_string($_GET['id_user']);
        				$q_user 		= $mysqli->query("SELECT * FROM tbl_user WHERE id_user = '$id_user'");
        				$result_user	= $q_user->fetch_array();
        				?>

		                <div class="form-group">
		              		<input class="form-control input-lg" type="text" placeholder="Username" name="username" required="true" value="<?php echo $result_user['username']; ?>">
		                </div>

                        <div class="form-group">
		                  <input class="form-control input-lg" type="password" placeholder="Password" name="password" required="true" value="">
		                </div>

		                <div class="form-group">
                          <input class="form-control input-lg" type="text" placeholder="Nama Lengkap" name="nama_lengkap" required="true" value="<?php echo $result_user['nama_lengkap']; ?>">
                        </div>

                        <div class="form-group">
                          <input class="form-control input-lg" type="text" placeholder="Email" name="email" required="true" value="<?php echo $result_user['email']; ?>">
                        </div>

		                <div class="col-lg-12">

		                	<hr>

			                <div class="form-group pull-right">
			                  
			                	<button type="submit" class="btn btn-warning" name="edit_user" value="<?php echo $id_user; ?>"><i class="fa fa-send"></i>&nbsp Edit Akun</button>

			                </div>

		                </div>

		        	</form>

        		</div>
        		
        	</div>	       	

        </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->