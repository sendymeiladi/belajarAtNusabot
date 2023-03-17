<?php 

  // Tampil Data
  $username = $_GET['username'];
  $sql = "SELECT username, nama_user FROM user WHERE username= '$username'";
  $data = mysqli_fetch_array(mysqli_query($con, $sql));
 ?>
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
              <h5>Ubah</h5>
              </div>
              <div class="card-body">
              <form method="POST" action="?page=user">
            <div class="modal-body">
              <input type="hidden" name="username_old" value="<?php echo $data['username']?>">
              <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Masukan Username", name="username" value="<?php echo $data['username']?>">
              </div>
              <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Masukan Password", name="password">
              </div>
              <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama", name="nama_user" value="<?php echo $data['nama_user'] ?>">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
            </div>
            </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah data baru</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="">
            <div class="modal-body">
              <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Masukan Username", name="username">
              </div>
              <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Masukan Password", name="password">
              </div>
              <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama", name="nama_user">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>