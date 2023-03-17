<?php 

  // ubah data
  if(isset($_POST['ubah'])){
    $username_old = $_POST['username_old'];
    $username_new = $_POST['username'];
    $password = $_POST['password'];
    $nama_user = $_POST['nama_user'];

    $sql = "UPDATE user SET username = '$username_new', 
            password = '$password', nama_user = '$nama_user' WHERE username = '$username_old'";
    echo $sql;
    mysqli_query($con, $sql);
  }

  // tambah data
  if(isset($_POST['tambah'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_user = $_POST['nama_user'];

    $sql = "INSERT INTO user (username, password, nama_user) VALUES ('$username', '$password', '$nama_user')";
    mysqli_query($con, $sql);
  }

  // Hapus Data
  if(isset($_GET['del'])){
    $username = $_GET['del'];
    $sql = "DELETE FROM user WHERE username = '$username'";
    mysqli_query($con, $sql);
  }


  // Tampil Data
  $sql = "SELECT username, nama_user FROM user";
  $result = mysqli_query($con, $sql);
 ?>
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Tambah Data
              </button>
              </div>
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Username</th>
                    <th>Nama Pengguna</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php while($row = mysqli_fetch_array($result)){ ?>
                  <tr>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['nama_user']?></td>
                    <td><a href="?page=user&del=<?php echo $row['username'] ?>">Hapus</a> | <a href="?page=user_edit&username=<?php echo $row['username'] ?>">ubah</a></td>
                  </tr>
                  <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Username</th>
                    <th>Nama Pengguna</th>
                    <th></th>
                  </tr>
                  </tfoot>
                </table>
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
              <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>