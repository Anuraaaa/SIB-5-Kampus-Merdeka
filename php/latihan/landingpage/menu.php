<div class="row">
    <div class="col-md-12">
        <!----------- awal menu ----------------->
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?hal=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?hal=about">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Master Data
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?hal=jenis_list">Jenis</a></li>
            <li><a class="dropdown-item" href="index.php?hal=produk_list">Produk</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?hal=login">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search" method="GET" action="produk_controller.php">
        <input class="form-control me-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
        <!--a href="index.php?hal=produk_list&q=sofa" class="btn btn-outline-success" type="submit"
                name="proses" value="cari">Search</a--> 
        <button class="btn btn-outline-success" type="submit"
                name="proses_cari" value="cari">Search</button>           
        <!-- <input type="hidden" name="q" value="" />    -->
      </form>
    </div>
  </div>
</nav>
        <!----------- akhir menu ---------------->
    </div>
</div>