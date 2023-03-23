<link rel="stylesheet" href="{{ url('css/admin/navigator_side.css') }}">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="wrapper">
        <div class="sidebar">
        <div class="profile">
            <img src="{{ url("../images/sepnas_logo.png") }}" alt="" style="width:100px; height:100px;">
                <p style="font-size: 1.5em;">Speaker Eugenio Perez National Agricultural School</p>
                <p>Admin Page</p>
            </div>
            <ul>
                <li>
                    <a href="{{ route('home.admin') }}"
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bulletin' , 'achievements') }}">
                        <span class="icon"><i class="fa fa-book"></i></span>
                        <span class="item">Achievements</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bulletin' , 'announcements') }}">
                        <span class="icon"><i class="fa fa-book"></i></span>
                        <span class="item">Announcements</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bulletin' , 'news') }}">
                        <span class="icon"><i class="fa fa-book"></i></span>
                        <span class="item">News</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bulletin' , 'upcoming_events') }}">
                        <span class="icon"><i class="fa fa-book"></i></span>
                        <span class="item">Upcoming Events</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages' , 'poll') }}">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <span class="item">Poll</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages' , 'feedback') }}">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="item">Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.show') }}">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="item">User Profile</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
            {{-- <a href="#"><i class="fa fa-user" aria-hidden="true">Logout</i> --}}
                        <button type="submit">
                            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                            <span class="item">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
@yield('navigator_side')