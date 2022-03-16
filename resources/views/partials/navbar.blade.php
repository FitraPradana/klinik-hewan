<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="index2.html">Dashboard2</a></li>
                    <li><a href="index3.html">Dashboard3</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-user-md"></i> Dokter <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('dokters') }}">List of Dokter</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-github-alt"></i> Pasien <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('pasiens') }}">List of Pasien</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-shopping-cart"></i> Product <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('kategori_products') }}">List of Kategori Product</a></li>
                    <li><a href="{{ url('kelas_products') }}">List of Kelas Product</a></li>
                    <li><a href="{{ url('products') }}">List of Master Product</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-calendar"></i> Event <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('event.index') }}">List of Event</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-medkit"></i> Rekam Medis <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('rekam_medis') }}">List of Rekam Medis</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('transactions') }}">List of Transaksi</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-hospital-o"></i> Rawat Inap <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="ranaps">List of Rawat Inap</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-wheelchair"></i> Pulang Paksa <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="pulang_paksas">List of Pulang Paksa</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <div class="menu_section">
        <h3>Setting</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('users') }}">User</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="page_403.html">403 Error</a></li>
                    <li><a href="page_404.html">404 Error</a></li>
                    <li><a href="page_500.html">500 Error</a></li>
                    <li><a href="plain_page.html">Plain Page</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                        class="label label-success pull-right">Coming Soon</span></a></li>
        </ul>
    </div>

</div>
