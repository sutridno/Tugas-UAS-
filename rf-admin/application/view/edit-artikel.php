<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">

    <div class="box-header with-border">

      <h3 class="box-title">Edit Postingan</h3>

    </div>

    <div class="box-body">

    	<div class="row">
    		
    		<div class="col-lg-12">

    			<?php

    			if ($_GET['alert'] == "sukses") {
    				echo '<div class="alert alert-info alert-dismissible">
	        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	        				<i class="icon fa fa-check"></i>Postingan berhasil diedit !!
	        				</div>';
    			}

    			?>
	        	        			
    			<form action="application/models/editArtikel.php" method="POST">

    				<?php
    				$id_artikel 	= $mysqli->real_escape_string($_GET['id_artikel']);
    				$q_artikel 		= $mysqli->query("SELECT * FROM tbl_artikel WHERE id_artikel = '$id_artikel'");
    				$result_artikel	= $q_artikel->fetch_array();
    				?>

	                <div class="form-group">
	              		<input class="form-control input-lg" type="text" placeholder="MASUKAN JUDUL DISINI" name="judul_artikel" required="true" value="<?php echo $result_artikel['title']; ?>">
	                </div>

	                <div class="form-group">
	                	<textarea class="form-control" id="editor1" rows="10" cols="80" name="isi_artikel" required="true"><?php echo $result_artikel['content']; ?></textarea>
	                </div>

	                

	                <div class="col-lg-12">

	                	<hr>

		                <div class="form-group pull-right">
		                  
		                	<button type="submit" class="btn btn-warning" name="edit_artikel" value="<?php echo $result_artikel['0']; ?>"><i class="fa fa-send"></i>&nbsp Edit Pos</button>

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