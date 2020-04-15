<?php
$id = $_GET['id'];
$dataSatuan = $db->getOnesatuan($id);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($db->editSatuan($_POST) > 0) {
        echo "
            <script>
            alert('Data berhasil di edit');
            window.location='index.php?page=module/satuan_pupuk/index';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('Data gagal di edit');
        window.location='index.php?page=module/satuan_pupuk/index';
        </script>
        ";
    }
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Satuan Pupuk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Satuan Pupuk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-7">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php foreach ($dataSatuan as $data) : ?>
                        <form method="POST" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Satuan</label>
                                    <div class="col-sm-9">
                                        <input value="<?php echo $data->satuan_id ?>" name="id" type="hidden">
                                        <input value="<?php echo $data->satuan_nama ?>" name="namaSatuan" type="text" class="form-control" placeholder="Nama Satuan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jumlah Satuan</label>
                                    <div class="col-sm-9">
                                        <input value="<?php echo $data->satuan_jumlah ?>" name="jumlah" type="number" class="form-control" placeholder="Jumlah Satuan">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button name="edit" type="submit" class="btn btn-info">Edit</button>
                                <a href="index.php?page=module/satuan_pupuk/index" class="btn btn-success float-right">Kembali</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    <?php endforeach ?>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>