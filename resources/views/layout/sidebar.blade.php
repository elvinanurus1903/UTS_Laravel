     
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/film.css') }}" media="all">
</head>
     <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <br>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('landingpage') }}">
                                    <span data-feather="home"></span>
                                     <i class="material-icons">receipt</i> Home
                                </a>
                            </li>
                            <br>
                            <hr/>
                            <br>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('front.index') }}">
                                    <span data-feather="file"></span>
                                    <i class="material-icons">videocam</i> Movies
                                </a>
                            </li>
                            <br>
                            <hr/>   
                        </ul>
                         <ul class="nav flex-column mb-2">
                             <li class="nav-item">
                                <a class="nav-link" href="{{ url('premium') }}">
                                    <span data-feather="shopping-cart"></span>
                                    <i class="material-icons">card_giftcard</i> Premium 
                                </a>
                            </li>
                            <br>
                            <hr/>
                            <br>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('help') }}">
                                    <span data-feather="file-text"></span>
                                    <i class="material-icons">help</i> Help
                                </a>
                            </li>
                            <br>
                            <hr/>
                            <br>
                        </ul>
 
                    </div>
                </nav>