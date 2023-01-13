<link rel="stylesheet" href="{{ url('css/molecule/header.css') }}">

<nav class="nav_header" >
            <input id="nav-toggle" type="checkbox">
            <div class="logo"><img src="{{ url("../images/sepnas_logo.png") }}" alt="" style="width:100px; height:100px;"><p style="padding: 5px; text-shadow: 1px 1px 1px black;">Speaker Eugenio Perez National Agricultural School</p></div>

            <ul class="links">
                <li><a href="/">Home</a></li>
                <li>
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                       Bulletin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:green; z-index: 10;">
                        <a class="dropdown-item" href="{{ route('bulletin' , 'announcements') }}">Announcement</a>
                        <a class="dropdown-item" href="{{ route('bulletin' , 'news') }}">News</a>
                        <a class="dropdown-item" href="{{ route('bulletin' , 'achievements') }}">Achievements</a>
                        <a class="dropdown-item" href="{{ route('bulletin' , 'upcoming_events') }}">Upcoming Events</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        Academics
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:green; z-index: 10;">
                        <a class="dropdown-item" href="{{ route('academics' , 'programOfferings') }}">Program Offerings</a>
                        <a class="dropdown-item" href="{{ route('academics' , 'sepnasSeniorHighSchool') }}">SEPNAS Senior High School</a>
                        <a class="dropdown-item" href="{{ route('academics' , 'basicEducationProgram') }}">Basic Education Program</a>
                        </div>
                    </div>
                </li>
                <li>
                <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    About Us
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:green; z-index: 10;">
                    <a class="dropdown-item" href="/history">History</a>
                    <a class="dropdown-item" href="#">Sepnas Vission Mission</a>
                    <a class="dropdown-item" href="#">Privacy Policy</a>
                    <a class="dropdown-item" href="gallery.php">Campus Gallery</a>
                </div>
                </div></li>
                <li><a href="/contactus">Contact Us</a></li>
                <li>
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        <i class="fa fa-caret-down" style="font-size:20px;" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:green; z-index: 10;">
                        <a class="dropdown-item" href="{{ route('profile.show') }}">User Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" style="background-color: red;  color: white;">
                                <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                                <span class="item" style="font-size: 1em;">Logout</span>
                            </button>
                        </form>
                        </div>
                    </div>
                </li>
                {{-- <a href="login.php"><span class="fa fa-globe" id="login" style="font-size:20px;"></span></a> --}} 
                    {{-- <button type="button" id="formButton">Toggle Form!</button> --}}
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>
@yield('header_user')
<script>

</script>
