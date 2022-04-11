<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('users')}}" class="nav-link {{ Request::is('users') ? 'active' : '' }} ">
        <i class="nav-icon fas fa-users"></i>
        <p>Users List</p>
    </a>
</li>
<li class="nav-item">
    <a  href="{{route('agents')}}" class="nav-link {{ Request::is('agents') ? 'active' : '' }} ">
        <i class="nav-icon fas fa-address-book"></i>
        <p>Agent List</p>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="nav-link ">
        <i class="nav-icon fas fa-list"></i>
        <p>Order</p>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="nav-link ">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>Cart</p>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="nav-link ">
        <i class="nav-icon fas fa-trophy"></i>
        <p>Coupon Code</p>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="nav-link ">
        <i class="nav-icon fas fa-receipt"></i>
        <p>Gift</p>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="nav-link ">
        <i class="nav-icon fas fa-wallet"></i>
        <p>Wallet</p>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="nav-link ">
        <i class="nav-icon fas fa-code-branch"></i>
        <p>Role and Permissions</p>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="nav-link ">
        <i class="nav-icon fas fa-credit-card"></i>
        <p>Payment History</p>
    </a>
</li>
<li class="nav-item">
    <a href="javascript:void(0)" class="nav-link ">
        <i class="nav-icon fas fa-receipt"></i>
        <p>Billing History</p>
    </a>
</li>


