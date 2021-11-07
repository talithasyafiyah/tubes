<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock Barang</title>
  <link rel="shortcut icon" href="logostock.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <script src="https://kit.fontawesome.com/87e6ec580c.js" crossorigin="anonymous"></script>

<style>
    p {
      color: #ffff;
    }

  </style>
</head>
<body>

<section>
  <div class="row ml-auto mr-auto">
    <div class="col-2 bg-dark">
      <br>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <br>
      <p><i class="fas fa-home"></i> Beranda</p>
      <p><i class="fas fa-id-card-alt"></i> Admin</p>
      <p><i class="fas fa-store"></i> Supplier</p>
      <p><i class="fas fa-shopping-cart"></i> Buyer</p>
      <p><i class="fas fa-cog"></i> Setting</p>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <div class="col-10 bg-light" style="padding: 0px;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <a class="navbar-brand" href="#"><img src="logostock.png" width="50" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
      <a href="login.php"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Logout</button></a>
  </div>
</nav>

      <table border="1" width="95%" align="center" style="text-align: center;" class="mt-5">
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Gambar</th>
          <th>Harga</th>
          <th>Stock</th>
          <th>Keterangan</th>
          <th>Admin</th>
          <th>Action</th>
        </tr>

        <tr>
          <td>1</td>
          <td>Chitato</td>
          <td><img src="chitato.png" width="50"></td>
          <td>5.000</td>
          <td>20 pcs</td>
          <td>Ready</td>
          <td>Talitha</td>
          <td>
              <button class="btntambah"><i class="fas fa-plus tambah"></i></button>
              <button class="btnhapus"><i class="fas fa-trash-alt hapus"></i></button>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>Chitato</td>
          <td><img src="chitato.png" width="50"></td>
          <td>5.000</td>
          <td>20 pcs</td>
          <td>Ready</td>
          <td>Talitha</td>
          <td>
              <button class="btntambah"><i class="fas fa-plus tambah"></i></button>
              <button class="btnhapus"><i class="fas fa-trash-alt hapus"></i></button>
          </td>
        </tr>

        <tr>
          <td>3</td>
          <td>Chitato</td>
          <td><img src="chitato.png" width="50"></td>
          <td>5.000</td>
          <td>20 pcs</td>
          <td>Ready</td>
          <td>Talitha</td>
          <td>
              <button class="btntambah"><i class="fas fa-plus tambah"></i></button>
              <button class="btnhapus"><i class="fas fa-trash-alt hapus"></i></button>
          </td>
        </tr>
      </table>
    </div>

  </div>
</section>














  <script src="jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
