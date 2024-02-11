<header class="main-header">
    <nav class="navbar navbar-default navbar-mobile navbar-sticky bootsnav">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="ti-home"></i>
                            Dasboard
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('post.list') }}" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-layout-list-post"></i>
                            Posts
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('post.create') }}">
                                    <i class="fa fa-plus"></i>
                                    Create
                                </a>
                                <a href="{{ route('post.edit') }}">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <a href="{{ route('post.list') }}">
                                    <i class="fa fa-list"></i>
                                    List
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="clearfix"></div>
</header>
