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
                    <div class="pt-8 pb-2 mb-3 border-bottom">
 
 
                        <div class="row">
	 <div class="card-detail2">
	 	<center>
	 	<div class="card-detailfilmawal">
<img src="{{asset('/images/film.jpg')}}" alt="Los Angeles">
</div>
<hr>
<p>
Website Cinema21 menyajikan film, Drama, anime, dan Acara populer dengan subtitle Bahasa Indonesia.
<br>
Website ini menyediakan data film lengkap seperti Pemain dan Sinopsis Film tersebut.
</p>
<hr>
<div class="form-group">
                <button type="submit" class="btn btn-dark">
                	<a href="{{ route('front.index') }}">Movie List</a></button>
              </div>

</div>


</center>
</div></div></div>
</main>

  @endsection
</body>
</html>