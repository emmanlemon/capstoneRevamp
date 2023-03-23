<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url("../images/sepnas_logo.png") }}" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Admin Dashboard</title>
</head>
<body>
    @extends('admin.extension.navigator_side')
    @section('navigator_side')
    @endsection
<div class="section">
    <div class="container-dashboard" style="margin: 20px;">
        <h2>Admin Dashboard</h2>
        <div class="row g-6 mb-6">        
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">
                                    <i class='bx bx-user' ></i>
                                    Achievements</span>
                                <span class="h3 font-bold mb-0">{{ $achievement }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <a href="{{ url('admin/bulletin' , 'achievements') }}" style="text-decoration:none;">
                            <span class="text-nowrap text-xs text-muted">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i> More Info</span>                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">
                                    <i class='bx bxs-user-detail'></i>
                                    Announcements</span>
                                <span class="h3 font-bold mb-0">{{ $announcement }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <a href="{{ url('admin/bulletin' , 'announcements') }}" style="text-decoration:none;">
                            <span class="text-nowrap text-xs text-muted">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i> More Info</span>                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">
                                    <i class='bx bxs-calendar'></i>News</span>
                                <span class="h3 font-bold mb-0">{{ $news }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <a href="{{ url('admin/bulletin' , 'news') }}" style="text-decoration:none;">
                            <span class="text-nowrap text-xs text-muted">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i> More Info</span>                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">
                                    <i class='bx bxs-calendar'></i>Upcoming Events</span>
                                <span class="h3 font-bold mb-0">{{ $event }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <a href="{{ url('admin/bulletin' , 'upcoming_events') }}" style="text-decoration:none;">
                            <span class="text-nowrap text-xs text-muted">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i> More Info</span>                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12" style="margin-top: 20px;">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">
                                    <i class='bx bxs-calendar'></i>Poll</span>
                                <span class="h3 font-bold mb-0">{{ $poll }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <a href="{{ route('pages' , 'poll') }}" style="text-decoration:none;">
                            <span class="text-nowrap text-xs text-muted">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i> More Info</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12" style="margin-top: 20px;">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">
                                    <i class='bx bxs-calendar'></i>Feedback</span>
                                <span class="h3 font-bold mb-0">{{ $feedback }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <a href="{{ route('pages' , 'feedback') }}" style="text-decoration:none;">
                            <span class="text-nowrap text-xs text-muted">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i> More Info</span>                        </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-3 col-sm-6 col-12" style="margin-top: 20px;">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span class="h6 font-semibold text-muted text-sm d-block mb-2">
                                    <i class='bx bxs-calendar'></i>User</span>
                                <span class="h3 font-bold mb-0">{{ $user }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-0 text-sm">
                            <a href="" style="text-decoration:none;">
                            <span class="text-nowrap text-xs text-muted">
                            <i class='bx bxs-down-arrow-square'></i> More Info</span>                        </a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
</body>
</html>

