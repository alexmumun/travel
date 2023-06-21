<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

    <li class="nav-item">
        <a href="../superuser" class="nav-link <?php if ($halaman=='home'){echo 'active';}?>">

            <i class="nav-icon fas fa-home"></i>
            <p>
                Home
            </p>
        </a>
    </li>
    <li class="nav-item">
        <font color="#ffffff">
            <a href="../superuser-peran" class="nav-link <?php if ($halaman=='peran'){echo 'active';}?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Master Peran
                </p>
            </a>
        </font>
    </li>
    <li class="nav-item">
        <font color="#ffffff">
            <a href="../superuser-pengguna" class="nav-link <?php if ($halaman=='pengguna'){echo 'active';}?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Pengguna Administrator
                </p>
            </a>
        </font>
    </li>
    <li class="nav-item">
        <font color="#ffffff">
            <a href="../data-kandang-mitra"
                class="nav-link <?php if ($halaman=='data-kandang-mitra'){echo 'active';}?>">
                <i class="nav-icon fas fa-dumpster"></i>
                <p>
                    Data Sopir
                </p>
            </a>
        </font>
    </li>
    <li class="nav-item">
        <font color="#ffffff">
            <a href="../Data-Sopir-Travel" class="nav-link <?php if ($halaman=='datasopir'){echo 'active';}?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Data Travel
                </p>
            </a>
        </font>
    </li>
    <li class="nav-item">
        <font color="#ffffff">
            <a href="../data-tiket-travel" class="nav-link <?php if ($halaman=='datasopir'){echo 'active';}?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Data Tiket
                </p>
            </a>
        </font>
    </li>
    <li class="nav-item">
        <font color="#ffffff">
            <a href="../kontrak-pembesaran" class="nav-link <?php if ($halaman=='kontrak'){echo 'active';}?>">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Data Pemesanan
                </p>
            </a>
        </font>
    </li>
    <!-- <li class="nav-item">
        <a href="../superuser" class="nav-link <?php if ($halaman=='pesanan'){echo 'active';}?>">
            <i class="nav-icon fas fa-cash-register"></i>
            <p>
                Pesanan/Request
            </p>
        </a>
    </li> -->
    <!-- <li class="nav-item">
        <a href="../superuser" class="nav-link <?php if ($halaman=='penjualan'){echo 'active';}?>">
            <i class="nav-icon fas fa-dollar-sign"></i>
            <p>
                Penjualan
            </p>
        </a>
    </li> -->
    <!-- <li class="nav-item">
        <a href="../superuser" class="nav-link <?php if ($halaman=='stok-barang'){echo 'active';}?>">
            <i class="nav-icon fas fa-hand-peace"></i>
            <p>
                Stok Barang
            </p>
        </a>
    </li> -->
    <li class="nav-item">
        <a href="../superuser" class="nav-link <?php if ($halaman=='laporan'){echo 'active';}?>">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>
                Laporan
            </p>
        </a>
    </li>
    <li class="nav-item">
        <font color="#ffffff">
            <a href="../superuser-gantipass" class="nav-link <?php if ($halaman=='ganti'){echo 'active';}?>">
                <i class="nav-icon fas fa-lock"></i>
                <p>
                    Ganti Password
                </p>
            </a>
        </font>
    </li>
    <li class="nav-item">
        <a href="../login/logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
                Keluar
            </p>
        </a>
    </li>
</ul>