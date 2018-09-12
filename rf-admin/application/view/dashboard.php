<!-- <?php 
   error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR']; // Mengambil IP
$tanggal= date('d-m-Y'); // Mengambil tanggal
$waktu = time(); // mengambil waktu
$con = mysqli_connect("localhost","root","","blog_kp");
$query1 = mysqli_query($con,"select * from tbl_pengunjung where ip='$ip' and tanggal='$tanggal'");
 
if(mysqli_num_rows($query1)== 0){
 $ins = mysqli_query($con,"insert into tbl_pengunjung(ip,tanggal,hits,online) values('$ip','$tanggal','1','$waktu')");
}else{
 $upd = mysqli_query($con,"update tbl_pengunjung set hits=hits+1, online=$waktu where ip='$ip' and tanggal='$tanggal'");
}
 
// pengunjung hari ini
$query1 = mysqli_query($con,"select * from tbl_pengunjung where tanggal='$tanggal' group by ip");
$pengunjung = mysqli_num_rows($query1);
 
// Total Pengunjung
$query2 = mysqli_query($con,"select count(hits) as total from tbl_pengunjung");
$hasil2 = mysqli_fetch_array($query2);
$totPengunjung = $hasil2['total'];
 
// Hits hari ini
$query3 = mysqli_query($con,"select sum(hits) as jumlah from tbl_pengunjung where tanggal='$tanggal' group by tanggal ");
$hasil3 = mysqli_fetch_array($query3);
$hits = $hasil3['jumlah'];
 
// Total hits
$query4 = mysqli_query($con,"select sum(hits) as total from tbl_pengunjung");
$hasil4 = mysqli_fetch_array($query4);
$totHits = $hasil4['total'];
 
// Pengunjung yang sedang online
$bataswaktu = time()-300;
$pengunjungOnline = mysqli_num_rows(mysqli_query($con,"select * from tbl_pengunjung where online > $bataswaktu"));
 
// angka total pengunjung dalam bentuk gambar
$folder = "counter";
$ext = ".png";
 
// ubah digit angka menjadi enam digit
$totpengunjunggbr = sprintf("%06d",$totPengunjung);
 
// Ganti angka teks menjadi angka gambar
for($i=0; $i<=9; $i++){
 $totpengunjunggbr = str_replace($i,"<img src='$folder/$i$ext' alt='$i'>",$totpengunjunggbr);
}
 
?>
    Main content
    <section class="content">

      Default box
      <div class="box">
        <div class="box-header with-border">

          <h3 class="box-title">Pengunjung</h3>

          <div class="box-tools pull-right">

          <a href="?view=input-user" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Akun">
            <i class="fa fa-plus"></i>
            <span>TAMBAH AKUN</span>
            </a>

          </div>

        </div>

        <div class="box-body">

          <table id="example1" class="table table-bordered table-striped">
            
            <thead>
              <tr>
                <th>Pengunjung Hari Ini</th>
                <th>Tanggal</th>
                <th>Total Pengunjung</th>
                <th><center><i class="fa fa-gear"></i></center></th>
              </tr>
            </thead>

            <tbody>
              <?php 
             if(isset($_GET['alert'])){
              $alert = $_GET['alert'];
              if($alert == "input"){
                echo "<script>alert('Data Berhasil di Input!'); window.location='rf-admin.php?view=data-user'</script>";
              }else if($alert == "update"){
                echo "<script>alert('Data Berhasil di Update!'); window.location='rf-admin.php?view=data-user'</script>";
              }else if($alert == "hapus"){
                echo "<script>alert('Data Berhasil di Hapus!'); window.location='rf-admin.php?view=data-user'</script>";
              }
              }


              $q_user = $mysqli->query("SELECT * FROM tbl_user");
              while ($result = $q_user->fetch_array()) {
              ?>
              <tr>
                <td><?php echo $pengunjung ?></td>
                <td><?php echo $tanggal ?></td>
                <td><?php echo $totPengunjung ?></td>
                <td width="100">
                  <center>
                    <div class="btn-group">
                      <a href="?view=edit-user&id_user=<?php echo $result['0']; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a href="application/models/hapusUser.php?id_user=<?php echo $result['0']; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                    </div>
                  </center>
                </td>
              </tr>
              <?php } ?>
            </tbody>

          </table>

        </div>

      /.box

    </section>
    /.content  -->