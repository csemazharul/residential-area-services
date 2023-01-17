<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        <li class="{{ request()->path() == 'admin/dashboard' ? 'active' : '' }}"><a href="{{route('admin.dashboard')}}"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="{{ request()->path() == 'admin/agent/' ? 'active' : '' }}"><a href="{{url('admin/user/list')}}"><i class="fa fa-fw fa-users"></i> Manage Users</a></li>
        <li class="{{ request()->path() == 'admin/agent/' ? 'active' : '' }}"><a href="{{url('admin/provider/list')}}"><i class="fa fa-fw fa-users"></i> Manage Service Providers</a></li>
        <li>
            <a href="#sm_counter" data-toggle="collapse">
                <i class="fa fa-list-alt"></i> Manage Categories
            </a>
            <ul id="sm_counter" class="list-unstyled collapse">
                <li class=""><a href="{{url('admin/categories/create')}}"> Add</a></li>
                <li class=""><a href="{{url('admin/categories')}}">List</a></li>
            </ul>
        </li>

        <li class=""><a href="{{url('admin/all/reviews')}}"><i class="fa fa-fw fa-star"></i> Customer review</a></li>
        <li class=""><a href="{{url('admin/all/contacts')}}"><i class="fa fa-solid fa-phone"></i> Contact List</a></li>


    </ul>
</div>
