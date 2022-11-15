<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        <li class="{{ request()->path() == 'admin/dashboard' ? 'active' : '' }}"><a href="{{route('admin.dashboard')}}"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="{{ request()->path() == 'admin/agent/' ? 'active' : '' }}"><a href=""><i class="fa fa-fw fa-users"></i> Manage Society Manager</a></li>
        <li class="{{ request()->path() == 'admin/agent/' ? 'active' : '' }}"><a href=""><i class="fa fa-fw fa-users"></i> Manage Services Provider</a></li>
        <li>
            <a href="#sm_counter" data-toggle="collapse">
                <i class="fa fa-bank"></i> Manage Categories
            </a>
            <ul id="sm_counter" class="list-unstyled collapse">
                <li class=""><a href="{{url('admin/categories/create')}}"> Add</a></li>
                <li class=""><a href="{{url('admin/categories')}}">List</a></li>
            </ul>
        </li>
        <li>
            <a href="#manage_service" data-toggle="collapse">
                <i class="fa fa-bank"></i> Manage Services
            </a>
            <ul id="manage_service" class="list-unstyled collapse">
                <li class=""><a href=""> Add</a></li>
                <li class=""><a href="">List</a></li>
            </ul>
        </li>

        <li class=""><a href=""><i class="fa fa-fw fa-star"></i> Customer review</a></li>


    </ul>
</div>
