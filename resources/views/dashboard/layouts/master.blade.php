@include('dashboard.layouts.header')
@include('dashboard.layouts.navbare')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLt</span>
    </a>
    @include('dashboard.layouts.sidebare')
  </aside>
 @yield('content')
  @include('notify::messages')
 @if(session()->has('success'))
<script type="text/javascript">
  $(function() {
    $.notify("{{session()->get('success')}}",{globalPosition:'top-right', className:'success'});
  });
</script>
 @endif
@include('dashboard.layouts.footer') 