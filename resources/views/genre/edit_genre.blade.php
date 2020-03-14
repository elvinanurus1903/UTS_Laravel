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
            <div align="right">
                <a href="{{ route('film.index') }}" class="btn btn-default">Back</a>
            </div>
            <br />
     <form method="post" action="{{ route('genre.update', $genre->id_genre) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              
      <div class="form-group">
       <label class="col-md-4 text-right">Kode</label>
       <div class="col-md-8">
        <input type="text" name="jenis_genre" value="{{ $genre->jenis_genre }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>

@endsection
