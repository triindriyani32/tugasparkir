<?php
include("koneksi.php");
if(isset($_POST['bayar'])){
    $kendaraan=$_POST['jenis_kendaraan'];
    $tanggal_masuk=$_POST['tanggal_masuk'];
    $jam=$_POST['jumlah_jam_parkir'];
    $total=$_POST['total_beaya'];

    $sql=" INSERT INTO tb_parkir(jenis_kendaraan,tanggal_masuk,jumlah_jam_parkir,total_beaya) VALUES('$kendaraan','$tanggal_masuk','$jam','$total')";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('location:form-parkir.php');
    }else{
        die("sukses");
    }}
    else {
         die("gagal");
    }
    ?>
