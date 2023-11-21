<?php 
    $db = mysqli_connect("localhost","root","","2106052_dimassp");
    if (!$db) {
        echo "<script>
                alert('database tidak terhubung')
            </script>";
    };

    $NamaProduk = $_POST['NamaProduk'];
    $jenisProduk= $_POST['jenisProduk'];
    $tanggalPendaftaran = $_POST['tanggalPendaftaran'];
    $deskripsiProduk = $_POST['deskripsiProduk'];
    $jumlahProduk = $_POST['jumlahProduk'];



    $query = "INSERT INTO pendaftaran VALUES(NULL,'$NamaProduk','$jenisProduk','$tanggalPendaftaran','$deskripsiProduk','$jumlahProduk')";
    mysqli_query($db,$query);
    echo "<script>alert('produk berhasil ditambahkan')</script>";
    echo "<script>window.location='./index.php'</script>"
?>