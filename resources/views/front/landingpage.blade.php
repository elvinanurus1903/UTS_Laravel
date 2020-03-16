@extends('front.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{ asset('/layout/styles/layout.css') }}" media="all">

</head>

@section('title', 'Home')
@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 movie_list">
	 	<div class="card-detailfilmawal">
<img src="{{asset('/images/film.jpg')}}" alt="Los Angeles">
<hr>
<center>
<p>
Website Cinema21 menyajikan film, Drama, anime, dan Acara populer dengan subtitle Bahasa Indonesia.
<br>
Website ini menyediakan data film lengkap seperti Pemain dan Sinopsis Film tersebut.
</p>
</center>
<hr>
<center>
                <button type="submit" class="btn btn-dark">
                	<a href="{{ route('front.index') }}">Movie List</a></button>
</center>
</div>
</div></div></div>
</main>

  @endsection
</body>
</html>