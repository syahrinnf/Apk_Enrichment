
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 </head>
 <?php include "header.php"; ?>
 <style>
    body{
  background:#ECF0F1;
  width:100%;
  margin:auto;
  margin-top: 40px;
  max-width:1500px;
  min-height:300px;
    }
 </style>
  <body>  
  <br>
  <div class="container">
  <div class="card">
  <div class="card-header bg-primary text-white"><center><strong>BUAT AKUN</strong></center></div>
  <div class="card-body">
  </head>
  <body>  
  <form method="post" action="aksi_register.php">
  <table class="table">
  <tr>
  <td width="160">Username</td>
  <td>
  <div class="col-md-4"><input class="form-control" type="text" name="username" placeholder="Username"></div>
  </td>
  </tr>
  <tr>
  <td>Password</td>
  <td><div class="col-md-6"><input class="form-control" type="password" name="password" placeholder="password"></div></td>
 
</tr>
  </tr>
  <td width="160">Nama Lengkap</td>
  <td>
  <div class="col-md-4"><input class="form-control" type="text" name="nama_petugas" /></div>
  </td>
  </tr>
  <tr>
  <td>Email</td>
  <td><div class="col-md-6"><input class="form-control" type="text" name="email" placeholder="email"></div></td>
  </tr>
  <tr>
  <tr>
  <td></td>
  <td>
  </div>
  </td>
  </tr>
  </table>
  <button type="submit" value="register" class="btn btn-danger">SUBMIT</button>
  </form>
  </div>
  </div>
  </div>
  </body>
  </html>