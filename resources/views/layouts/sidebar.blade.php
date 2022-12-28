<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
    <div class="sidebar-content">
        <div id="sidebar">
            <div class="logo text-center mt-4">
                <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid" style="width: 100px;height: 100px;">
                <h2 class="mb-0"">INVENTORY</h2>
            </div>
            <ul class="side-menu">
                <li>
                    <a href="/home">
                        <i class='bx bxs-dashboard icon'></i> Dashboard
                    </a>
                </li>
                @if(Auth::user()->role == 'admin')
                <li>
                    <a href="/user">
                        <i class='bx bxs-user icon'></i> Data User
                    </a>
                </li>
                <li>
                    <a href="/barang">
                        <i class='bx bxs-box icon'></i> Data Barang
                    </a>
                </li>
                <li>
                    <a href="/barang_masuk">
                        <i class='bx bxs-archive-in icon'></i> Barang Masuk
                    </a>
                </li>
                <li>
                    <a href="/barang_keluar">
                        <i class='bx bxs-archive-out icon'></i> Barang Keluar
                    </a>
                </li>
                @endif

                @if(Auth::user()->role == 'inventaris')
                <li>
                    <a href="/barang_masuk">
                        <i class='bx bxs-archive-in icon'></i> Barang Masuk
                    </a>
                </li>
                @endif

                @if(Auth::user()->role == 'pegawai')
                <li>
                    <a href="/barang_keluar">
                        <i class='bx bxs-archive-out icon'></i> Barang Keluar
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<div class="sidebar-overlay"></div>
