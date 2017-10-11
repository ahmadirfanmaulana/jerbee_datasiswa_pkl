<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">PT JERBEE INDONESIA</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 new members joined</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">add_shopping_cart</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>4 sales made</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 22 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">delete_forever</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy Doe</b> deleted account</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-orange">
                                            <i class="material-icons">mode_edit</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy</b> changed name</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 2 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">comment</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> commented your post</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 4 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">cached</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> updated status</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple">
                                            <i class="material-icons">settings</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>Settings updated</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> Yesterday
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                <!-- Tasks -->
        </div>
    </div>
</nav>

<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo ASSET; ?>images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo URL; ?>profile"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="<?php echo URL; ?>sign-out"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="<?php echo isset($menu_dashboard)?$menu_dashboard:NULL; ?>">
                    <a href="<?php echo URL; ?>">
                        <i class="material-icons">dashboard</i>
                        <span>DASHBOARD</span>
                    </a>
                </li>
                <li class="<?php echo isset($menu_sm)?$menu_sm:NULL; ?>">
                    <a href="javascript:void(0)" class="menu-toggle">
                        <i class="material-icons">supervisor_account</i>
                        <span>DATA SISWA / MAHASISWA</span>
                    </a>
                    <ul class="ml-menu">
                      <li class="<?php echo isset($menu_siswa)?$menu_siswa:NULL; ?>"><a href="<?php echo URL; ?>siswa">SISWA</a></li>
                      <li class="<?php echo isset($menu_mahasiswa)?$menu_mahasiswa:NULL; ?>"><a href="<?php echo URL; ?>mahasiswa">MAHASISWA</a></li>
                    </ul>
                </li>
                <li class="<?php echo isset($menu_su)?$menu_su:NULL; ?>">
                    <a href="javascript:void(0)" class="menu-toggle">
                        <i class="material-icons">business</i>
                        <span>SEKOLAH / UNIVERSITAS</span>
                    </a>
                    <ul class="ml-menu">
                      <li class="<?php echo isset($menu_sekolah)?$menu_sekolah:NULL; ?>"><a href="<?php echo URL; ?>sekolah">SEKOLAH</a></li>
                      <li class="<?php echo isset($menu_universitas)?$menu_universitas:NULL; ?>"><a href="<?php echo URL; ?>universitas">UNIVERSITAS</a></li>
                    </ul>
                </li>
                <li class="<?php echo isset($menu_pk)?$menu_pk:NULL; ?>">
                    <a href="javascript:void(0)" class="menu-toggle">
                        <i class="material-icons">devices</i>
                        <span>PROGRAM KEAHLIAN</span>
                    </a>
                    <ul class="ml-menu">
                      <li class="<?php echo isset($menu_jurusan)?$menu_jurusan:NULL; ?>"><a href="<?php echo URL; ?>jurusan">JURUSAN</a></li>
                      <li class="<?php echo isset($menu_fakultas)?$menu_fakultas:NULL; ?>"><a href="<?php echo URL; ?>fakultas">FAKULTAS</a></li>
                    </ul>
                </li>
                <li class="<?php echo isset($menu_bc)?$menu_bc:NULL; ?>">
                    <a href="<?php echo URL; ?>bakal-calon">
                        <i class="material-icons">message</i>
                        <span>BAKAL CALON PKL</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2017 <a href="javascript:void(0);">AHMAD IRFAN MAULANA</a>.
            </div>
            <div class="version">
                <b>SMKN 1 SUBANG</b>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
