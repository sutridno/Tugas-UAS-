    <!-- Main content -->
    <section class="content"> 

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <h3 class="box-title">Tambah Postingan</h3>

        </div>

        <div class="box-body">

        	<div class="row">

        		<div class="col-lg-12">

        			<?php

        			if ($_GET['alert'] == "sukses") {
        				echo '<div class="alert alert-info alert-dismissible">
		        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        				<i class="icon fa fa-check"></i>Postingan berhasil dikirim !!
		        				</div>';
        			} elseif ($_GET['alert'] == "ext-video") {
        				echo '<div class="alert alert-danger alert-dismissible">
		        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        				<i class="icon fa fa-ban"></i>Exntensi video bermasalah !!
		        				</div>';
        			} elseif ($_GET['alert'] == "ext-gambar") {
        				echo '<div class="alert alert-danger alert-dismissible">
		        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        				<i class="icon fa fa-ban"></i>Exntensi gambar bermasalah !!
		        				</div>';
        			} elseif ($_GET['alert'] == "size-video") {
        				echo '<div class="alert alert-danger alert-dismissible">
		        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        				<i class="icon fa fa-ban"></i>Ukuran video bermasalah !! (MAKS 512KB Foto 5MB Video)
		        				</div>';
        			} elseif ($_GET['alert'] == "size-gambar") {
        				echo '<div class="alert alert-danger alert-dismissible">
		        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        				<i class="icon fa fa-ban"></i>Ukuran gambar bermasalah !! (MAKS 512KB Foto 5MB Video)
		        				</div>';
		        	}

        			?>

        		</div>
        		
        		<div class="col-lg-12">
        			
        			<form action="application/models/inputArtikel.php" method="POST" >

		                <div class="form-group">
		              		<input class="form-control input-lg" type="text" placeholder="MASUKAN JUDUL DISINI" name="judul_artikel" required="true">
		                </div>

		                <div class="form-group">
		                	<textarea class="form-control" id="editor1" rows="10" cols="80" name="isi_artikel" required="true"></textarea>
		                </div>

		                <div class="col-lg-12">

		                	<hr>

			                <div class="form-group pull-right">
			                  
			                	<button type="submit" class="btn btn-warning" name="tambah_artikel"><i class="fa fa-send"></i>&nbsp Kirim Pos</button>

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