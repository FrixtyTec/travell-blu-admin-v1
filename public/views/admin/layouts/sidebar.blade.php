<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('images/logo.jpeg') }}"
             alt="AdminLTE Logo"
             class="brand-image  elevation-3">
        <span class="brand-text font-weight-light"></span>
    </a>
    <div class="clearfix"></div>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('admin.layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
