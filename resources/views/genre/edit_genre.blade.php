@extends('film.parent')

@section('main')
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
     <form method="post" action="{{ route('genre.update', $genre->id_genre) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')       
          <div class="form-group">
           <label>Jenis Genre</label>
            <input type="text" name="jenis_genre" value="{{ $genre->jenis_genre }}" class="form-control" />
           </div>
          <div class="form-group">
           <input type="submit" name="edit" class="btn btn-primary" value="Edit" />
          </div>
    </form>

@endsection
