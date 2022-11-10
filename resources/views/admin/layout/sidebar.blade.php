<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        <li class="{{ request()->path() == 'admin/dashboard' ? 'active' : '' }}"><a href="{{route('admin.dashboard')}}"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="{{ request()->path() == 'admin/agent/' ? 'active' : '' }}"><a href=""><i class="fa fa-fw fa-users"></i> Manage Society Manager</a></li>
        <li class="{{ request()->path() == 'admin/agent/' ? 'active' : '' }}"><a href=""><i class="fa fa-fw fa-users"></i> Manage Services Provider</a></li>
        <li><a href=""> Manage Services</a></li>

    </ul>
</div>
