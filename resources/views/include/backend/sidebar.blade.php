<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div class="logo-icon">
      <img src="{{ asset('backend/assets/images/logo-icon.png')}}" class="logo-img" alt="">
    </div>
    <div class="logo-name flex-grow-1">
      <h5 class="mb-0">SidikAnjay</h5>
    </div>
    <div class="sidebar-close">
      <span class="material-icons-outlined">close</span>
    </div>
  </div>
  <div class="sidebar-nav">
      <!--navigation-->
      <ul class="metismenu" id="sidenav">
        <li class="mm-active">
          <a href="{{route ('user.index')}}" aria-expanded="true">
            <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
            </div>
            <div class="menu-title">User</div>
          </a>
        </li>
        <li class="mm-active">
          <a href="{{route ('produk.index')}}" aria-expanded="true">
            <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
            </div>
            <div class="menu-title">Produk</div>
          </a>
        </li>
        <li class="mm-active">
          <a href="{{route ('kategori.index')}}" aria-expanded="true">
            <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
            </div>
            <div class="menu-title">Kategori</div>
          </a>
        </li>
</aside>
