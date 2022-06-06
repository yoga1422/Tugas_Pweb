<?php
require_once('koneksi.php');

// berikut script untuk proses tambah barang ke database
if(!empty($_POST['isbn'])){
    // menangkap data post
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $abstrak = $_POST['abstrak'];

    $data[] = $isbn;
    $data[] = $judul;
    $data[] = $pengarang;
    $data[] = $jumlah;
    $data[] = $tanggal;
    $data[] = $abstrak;
    // simpan data barang

    $sql = 'INSERT INTO buku (isbn,judul,pengarang,jumlah,tanggal,abstrak)VALUES (?,?,?,?,?,?)';
    /**
     * @var $connection PDO
     */
    $row = $connection->prepare($sql);
    $row->execute($data);

    // redirect
    echo '<script>alert("Berhasil Tambah Data");window.location="all.php"</script>';
}
?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>Create Book</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="container">
        <br/>
        <h3>Create Book</h3>
        <br/>
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Isbn</label>
                        <input type="text" value="" class="form-control" name="isbn">
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" value="" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" value="" class="form-control" name="pengarang">
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" value="" class="form-control" name="jumlah">
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" value="" class="form-control" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label>Abstrak</label>
                        <input type="text" value="" class="form-control" name="abstrak">
                    </div>
                    <button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i>Create a book</button>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html><?php
