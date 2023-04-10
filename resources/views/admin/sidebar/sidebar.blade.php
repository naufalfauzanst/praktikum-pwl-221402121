<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Nav Item - Postingan -->
    <li class="nav-item {{ request()->is('admin/postingan') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/postingan">
    <i class="fas fa-fw fa-folder"></i>
            <span>Semua Postingan</span></a>
    </li>
    
    <!-- Nav Item - Arsip -->
    <li class="nav-item {{ request()->is('admin/arsip') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/arsip">
            <i class="fas fa-fw fa-table"></i>
            <span>Arsip</span></a>
    </li>

     <!-- Nav Item - Facebook -->
    <li class="nav-item {{ request()->is('admin/facebook') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/facebook">
            <i>
                <ion-icon name="logo-facebook"></ion-icon>
            </i>
            <span>Facebook</span>
        </a>
    </li>

     <!-- Nav Item - Instagram -->
     <li class="nav-item {{ request()->is('admin/instagram') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/instagram">
            <i>
                <ion-icon name="logo-instagram"></ion-icon>
            </i>
            <span>Instagram</span>
        </a>
    </li>        
    
     <!-- Nav Item - Twitter -->
     <li class="nav-item {{ request()->is('admin/twitter') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/twitter">
            <i>
                <ion-icon name="logo-twitter"></ion-icon>
            </i>
            <span>Twitter</span>
        </a>
    </li>      
    
     <!-- Nav Item - LinkedIn -->
     <li class="nav-item {{ request()->is('admin/linkedin') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/linkedin">
            <i>
                <ion-icon name="logo-linkedin"></ion-icon>
            </i>
            <span>LinkedIn</span>
        </a>
    </li>
    
     <!-- Nav Item - github -->
     <li class="nav-item {{ request()->is('admin/github') ? 'active' : ''}}">
        <a class="nav-link" href="/admin/github">
            <i>
                <ion-icon name="logo-github"></ion-icon>
            </i>
            <span>Github</span>
        </a>
    </li>            

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>