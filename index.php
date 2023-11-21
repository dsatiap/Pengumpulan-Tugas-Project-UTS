<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Produk</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="card">
        <h1>FORM PENDAFTARAN PRODUK</h1>
        <form method="post" action="proses_input.php">
            <label for="NamaProduk">Nama Produk :</label>
            <input type="NamaProduk" name="NamaProduk" id="NamaProduk" maxlength="20" class="form-input" required><br>

            <label for="jenisProduk">Jenis Produk :</label>
            <input type="text" name="jenisProduk" id="jenisProduk" maxlength="20" class="form-input" required><br>
            
            <label for="tanggalPendaftaran">Tanggal Pendaftaran :</label>
            <input type="date" name="tanggalPendaftaran" id="tanggalPendaftaran" maxlength="20" class="form-input" required><br>

            <textarea name="deskripsiProduk" id="deskripsiProduk" placeholder="Deskripsi Produk" cols="30" class="form-input" required rows="5"></textarea><br>

            
            <label for="jumlahProduk">Jumlah Produk :</label>
            <input type="number" name="jumlahProduk" id="jumlahProduk" maxlength="20" class="form-input" required><br>

            <button type="submit" id="btn-kirim">Kirim</button>
        </form>
    </div>

</body>

</html>