<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('tenpureto/dist/img/Untan.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Farmasi RSUNTAN</p>
          <a href="#"><i class="fa fa-circle text-success"></i> ADMIN</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ Request::is('beken/dashboard') ? 'active' : '' }}">
          <a href="/">
            <i class="fa fa-dashboard text-aqua"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="{{ Request::is('beken/label') ? 'active' : '' }}">
          <a href="/label">
            <i class="fa fa-ticket text-yellow"></i> <span>Label</span>
          </a>
        </li>
        <li class="{{ Request::is('beken/tambahobat') ? 'active' : '' }}">
          <a href="/obat">
            <i class="fa fa-plus-square text-red"></i> <span>Tambah Obat</span>
          </a>
        </li>
        <li class="{{ Request::is('beken/stokobat') ? 'active' : '' }}">
          <a href="/stok">
            <i class="fa fa-cubes text-green"></i> <span>Stok Obat</span>
          </a>
        </li>
        <!-- <li class="treeview {{ Request::is('manage/karyawan') ? 'active' : '' }} {{ Request::is('manage/karyawan/new') ? 'active' : '' }} {{ Request::is('manage/karyawan/edit') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-users"></i> <span>Karyawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('manage/karyawan') ? 'active' : '' }} {{ Request::is('manage/karyawan/new') ? 'active' : '' }} {{ Request::is('manage/karyawan/edit') ? 'active' : '' }}"><a href="/manage/karyawan"><i class="fa fa-circle-o"></i> Data Karyawan</a></li>
            <li><a href="/manage/guru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
            <li><a href="/manage/wali"><i class="fa fa-circle-o"></i> Data Wali Kelas</a></li>
          </ul>
        </li>

        {{-- siswa --}}
        
        <li class="treeview {{ Request::is('manage/siswa') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-male"></i> <span>Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('manage/profil_siswa') ? 'active' : '' }}"><a href="/manage/profil_siswa"><i class="fa fa-circle-o"></i> Profil Siswa</a></li>
            <li><a href="/manage/siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
          </ul>
          
        </li>
        <li class="{{ Request::is('manage/pengumuman') ? 'active' : '' }}">
          <a href="/manage/pengumuman">
            <i class="fa fa-bullhorn"></i> <span>Pengumuman</span>
          </a>
        </li> -->
        <!-- <li class="header">PENGATURAN</li>
        <li class="{{ Request::is('manage/periode') ? 'active' : '' }} {{ Request::is('manage/periode/new') ? 'active' : '' }} {{ Request::is('manage/periode/edit') ? 'active' : '' }}"><a href="/manage/periode"><i class="fa fa-calendar text-aqua"></i> <span>Periode</span></a></li>
        <li class="{{ Request::is('manage/kelas') ? 'active' : '' }} {{ Request::is('manage/kelas/new') ? 'active' : '' }} {{ Request::is('manage/kelas/edit') ? 'active' : '' }}"><a href="/manage/kelas"><i class="fa fa-institution text-yellow"></i> <span>Kelas</span></a></li>
        <li class="{{ Request::is('manage/mapel') ? 'active' : '' }} {{ Request::is('manage/mapel/new') ? 'active' : '' }} {{ Request::is('manage/mapel/edit') ? 'active' : '' }}"><a href="/manage/mapel"><i class="fa fa-book text-green"></i> <span>Mapel</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>