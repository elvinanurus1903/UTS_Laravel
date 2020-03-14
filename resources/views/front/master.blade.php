<html>
 <head>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600&display=swap" rel="stylesheet">
<link rel='stylesheet' href='style.css'>

 <title>@yield('title')</title>
 </head>
 <body>
 	<div class="container p-0">
 	@include('layout.header')
 	<div class="container-fluid">
 		   <div class="row">
 	@include('layout.sidebar')
     @yield('main')
 </div></div></div>
 </body>
</html>