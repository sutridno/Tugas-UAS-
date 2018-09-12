    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <h3 class="box-title">Tambah User</h3>

        </div>

        <div class="box-body">

        	<div class="row">
        		
        		<div class="col-lg-12">
        			
        			<form action="application/models/inputUser.php" method="POST" enctype="multipart/form-data">

		                <div class="form-group">
		              		<input class="form-control input" type="text" placeholder="Username" name="username" required="true">
		                </div>

		                <div class="form-group">
		              		<input class="form-control input" type="password" placeholder="Password" name="password" required="true">
		                </div>

		                <div class="form-group">
		              		<input class="form-control input" type="text" placeholder="Nama Lengkap" name="nama_lengkap" required="true">
		                </div>

		              <div class="form-group">
		              		<input class="form-control input" type="text" placeholder="Email" name="email" required="true">
		                </div>
		                <div class="col-lg-12">

		                	<hr>

			                <div class="form-group pull-right">
			                  
			                	<button type="submit" class="btn btn-warning" name="tambah_user"><i class="fa fa-send"></i>&nbsp Kirim Pos</button>

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