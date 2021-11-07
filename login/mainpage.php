<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <link rel="shortcut icon" href="boxes.png" type="image/x-icon">
  <link rel="stylesheet" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/87e6ec580c.js" crossorigin="anonymous"></script>
  
</head>
<body>

<!-- navbar -->
  <nav class="navbar navbar-light bg-light fixed-top mb-5 shadow-sm p-3 mb-5 bg-body rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3><b>UD. Makmur Jaya</b></h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UD. Maju Jaya</b></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home" style="color: black;"></i>&nbsp Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html"><i class="fas fa-sign-out-alt" style="color: black;"></i>&nbsp Log out</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- end of navbar -->

  <section>
    <div class="row">
      <div class="col-2 bg-dark">
        <div class="mt-5 ms-3">
        <br><br>
        
        <p><i class="fas fa-id-card-alt"></i>&nbsp Admin</p>
        <p><i class="fas fa-store"></i>&nbsp Supplier</p>
        <p><i class="fas fa-shopping-cart"></i>&nbsp Buyer</p>
        <p><i class="fas fa-cog"></i>&nbsp Setting</p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>

      <div class="col-10 mt-5">
        <form class="d-flex mt-5">
          <h4>Inventory</h4>
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button> -->
        </form>
        <div class="table-responsive mt-3">
          <table class="table">
            <thead>
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
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Chitato</td>
                <td><img src="chitato.png" width="40"></td>
                <td>Rp5000,00</td>
                <td>20 pcs</td>
                <td>Ready gan</td>
                <td>Talitha-chan</td>
                <td>
                  <div>
                    <button type="button" class="btn btn-success"><i class="fas fa-plus tambah"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt hapus"></i></button>
                  </div>
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td>Chitato</td>
                <td><img src="chitato.png" width="40"></td>
                <td>Rp5000,00</td>
                <td>20 pcs</td>
                <td>Ready gan</td>
                <td>Talitha-chan</td>
                <td>
                  <div>
                    <button type="button" class="btn btn-success"><i class="fas fa-plus tambah"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt hapus"></i></button>
                  </div>
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td>Chitato</td>
                <td><img src="chitato.png" width="40"></td>
                <td>Rp5000,00</td>
                <td>20 pcs</td>
                <td>Ready gan</td>
                <td>Talitha-chan</td>
                <td>
                  <div>
                    <button type="button" class="btn btn-success"><i class="fas fa-plus tambah"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt hapus"></i></button>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>




      </div>
    </div>






















  </section>
  











  
  <script src="jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>