<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">Laravel ToDo</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>
                {{ Auth::user()->name }}
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a href="{{ route('settings.profile') }}"><i class="fa fa-user fa-fw"></i> Update Profile</a>
                </li>
                <li>
                    <a href="{{ route('settings.password') }}"><i class="fa fa-gear fa-fw"></i> Update Password</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       <i class="fa fa-sign-out fa-fw"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    {!! Form::open(['url' => route('admin.todo.index'), 'method' => 'get']) !!}
                        <div class="input-group custom-search-form">
                            <input id="search" name="search" type="text" value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}" class="form-control" placeholder="Search todo">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    {!! Form::close() !!}
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admin.todo.create') }}"><i class="fa fa-edit fa-fw"></i> Create Todo</a>
                </li>
                <li>
                    <a href="{{ route('admin.todo.index') }}"><i class="fa fa-navicon fa-fw"></i> Todo List</a>
                </li>
                <li>
                    <a href="{{ route('admin.todo.index', ['status' => '1']) }}"><i class="fa fa-check-circle fa-fw"></i> Status: Completed</a>
                </li>
                <li>
                    <a href="{{ route('admin.todo.index', ['status' => '0']) }}"><i class="fa fa-minus-circle fa-fw"></i> Status: Not Completed</a>
                </li>
                <li>
                    <a href="{{ route('admin.todo.index', ['filter' => 'high']) }}"><i class="fa fa-star fa-fw"></i> Priority: High</a>
                </li>
                <li>
                    <a href="{{ route('admin.todo.index', ['filter' => 'medium']) }}"><i class="fa fa-star-half-empty fa-fw"></i> Priority: Medium</a>
                </li>
                <li>
                    <a href="{{ route('admin.todo.index', ['filter' => 'low']) }}"><i class="fa fa-star-o fa-fw"></i> Priority: Low</a>
                </li>
            </ul>
        </div>
    </div>
</nav>