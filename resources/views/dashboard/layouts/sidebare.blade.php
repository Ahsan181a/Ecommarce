
<!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      @php
      $prefix =Request::route()->getPrefix();
      $route = Route::current()->getName();
      @endphp
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{($prefix=='/users')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('users/view')}}" class="nav-link {{$route=='users/view'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
         </ul>
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='/profile'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('profile.view')}}" class="nav-link {{$route=='profile.view'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
            </li>
         </ul>
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Password
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('password.view')}}" class="nav-link {{$route=='password.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password </p>
                </a>
              </li>
         </ul>
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('contact.view')}}" class="nav-link {{$route=='contact.view'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
          </ul>
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='about'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage About Us
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('abouts.view')}}" class="nav-link {{$route=='about.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us </p>
                </a>
              </li>
         </ul>
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Logo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('logos.view')}}" class="nav-link {{$route=='logos.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo </p>
                </a>
              </li>
         </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='slider'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('slider.view')}}" class="nav-link {{$route=='slider.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>
         </ul>
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('categorys.view')}}" class="nav-link {{$route=='category.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
         </ul>
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='brand'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Brand
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('brand.create')}}" class="nav-link {{$route=='password.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Brand</p>
                </a>
            </li>
          </ul>
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Color
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('colors.view')}}" class="nav-link {{$route=='colors.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Color </p>
                </a>
              </li>
         </ul>
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Size
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('sizes.view')}}" class="nav-link {{$route=='password.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Size</p>
                </a>
              </li>
         </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('product.view')}}" class="nav-link {{$route=='product.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
         </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Shopping Card
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('sizes.view')}}" class="nav-link {{$route=='password.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Size</p>
                </a>
              </li>
         </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Size
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('sizes.view')}}" class="nav-link {{$route=='password.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Size</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item {{$prefix =='password'?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Size
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{route('sizes.view')}}" class="nav-link {{$route=='password.update'?'menu-open':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Size</p>
                </a>
              </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    