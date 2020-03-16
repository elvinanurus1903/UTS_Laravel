@extends('front.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/film.css') }}" media="all">
</head>

@section('title', 'Movie List')
@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 movie_list">
                    <div class="pt-8 pb-2 mb-3 border-bottom">
                    <div class="row">
                            <h1>Movies</h1>
                        </div>
                    <div class="row">
                    <!-- Movie Card Start -->
                             @foreach($film as $row)
                              <a href="{{route('front.show', $row->id)}}">
                                <div class="card-view">
                                <div class="card-header"><img src="{{ URL::to('/') }}/images/{{ $row->image }}" height="100" width="50" />
                                </div>
                                <br>
                                <br>
                                <div class="card-movie-content">
                                    <div class="card-movie-content-head">
                                        <a href="#">
                                            <h3 class="card-movie-title">{{ $row->judul }}</h3>
                                        </a>
                                        <div class="ratings"><span>{{ $row->jenis_genre }}</span></div>
                                    </div>
                                    <div class="card-movie-info">
                                        <div class="movie-running-time">
                                            <label>Year</label>
                                            <span>{{ $row->tahun }}</span>
                                        </div>
                                        <div class="movie-running-time">
                                            <label>Duration</label>
                                            <span>{{ $row->kode }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             </a>
                            @endforeach
                            {!! $film->appends(request()->except('page'))->render() !!}
                            <!-- Movie Card End -->
                        </div>
                    </div>
                </main>
  @endsection
</body>
</html>