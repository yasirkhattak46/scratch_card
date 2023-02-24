<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('/')}}"> <img alt="image" src="{{asset('public/assets/img/scratch_logo.jpg')}}" class="header-logo" /> <span
                    class="logo-name">Rublyx</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{url('/admin')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/admin/restaurants')}}" class="nav-link"><i data-feather="home"></i><span>Restaurants</span></a>
            </li>
            <li class="dropdown">
                <a href="{{url('/admin/quiz_list')}}" class="nav-link"><i data-feather="home"></i><span>Quiz</span></a>
            </li>
        </ul>
    </aside>
</div>
