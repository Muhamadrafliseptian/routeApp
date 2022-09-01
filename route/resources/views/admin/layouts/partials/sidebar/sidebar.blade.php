{{-- @php
use App\Models\Akun\MenuRole;
use App\Models\Pengaturan\Menu;
@endphp --}}

<style>
    .skin-blue .sidebar-menu>li.active>a {
        border-left-color: #008d4c;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu {
        padding-left: 0;
        margin-right: 0;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu>li.active>i {
        padding-left: 100px;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu>li.active {
        background-color: #0071BB;
    }

    .skin-blue .sidebar-menu>li>.treeview-menu>li a {
        margin-left: 3px;
    }
</style>

<ul class="sidebar-menu" data-widget="tree">
    <li class="{{ Request::is('/') ? 'active' : '' }}">
        <a href="{{ url('/') }}">
            <i class="fa fa-files-o"></i>
            <span>Dashboard</span>
        </a>
    </li>
     <li class="{{ Request::is('/teritory') ? 'active' : '' }}">
        <a href="{{ url('/teritory') }}">
            <i class="fa fa-files-o"></i>
            <span>teritory</span>
        </a>
    </li>
</ul>
