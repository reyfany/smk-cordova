
<style>
    .nav {
        margin-left: 40px;
    }
  
</style>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{asset('admin/images/logo_smk.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('front/assets/img/logo.png')}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/administrator')}}"><i class="menu-icon fa fa-dashboard"></i>Beranda</a></li>
                <li><a href="{{url('/administrator/galeri')}}"> <i class="menu-icon fa fa-picture-o"></i>Galeri </a></li>
                <li><a href="{{url('/administrator/berita')}}"> <i class="menu-icon fa fa-book"></i>Berita </a></li>
                <li><a href="{{url('/administrator/guru')}}"> <i class="menu-icon fa fa-male"></i>Guru </a></li>   
                <li><a href="{{url('/administrator/siswa')}}"> <i class="menu-icon fa fa-user"></i>Siswa </a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>