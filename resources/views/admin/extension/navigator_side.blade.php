<link rel="stylesheet" href="{{ url('css/admin/navigator_side.css') }}">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="wrapper">
        <div class="sidebar">
        <div class="profile">
            <img src="{{ url("../images/sepnas_logo.png") }}" alt="" style="width:100px; height:100px;">
                <h3>Speaker Eugenio Perez National Agricultural School</h3>
                <p>Admin Page</p>
            </div>
            <ul>
                <li>
                    <a href="{{ url('/admin') }}">
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bulletin' , 'achievements') }}">
                        <span class="icon"><i class="fa fa-address-book"></i></span>
                        <span class="item">Achievements</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bulletin' , 'announcements') }}">
                        <span class="icon"><i class="fas fa-chalkboard-teacher"></i></span>
                        <span class="item">Announcements</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bulletin' , 'news') }}">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <span class="item">News</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bulletin' , 'upcoming_events') }}">
                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                        <span class="item">Upcoming Events</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-book"></i></span>
                        <span class="item">Subject</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/contact">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="item">Feedback</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
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