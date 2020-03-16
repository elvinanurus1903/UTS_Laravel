@extends('front.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/film.css') }}" media="all">

</head>

@section('title', 'Premium')
@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 movie_list">
    <div class="pt-8 pb-2 mb-3 border-bottom">
      <div class="row"></div>
      <div class="row">
        <div class="table-responsive table-invoice">
          <table class="table table-striped">
             <tr>
               <th width="50%"></th>
              <th width="25%">Standard</th>
              <th width="25%">Premium</th>
             </tr>
             <tr>
              <td> Harga Per Bulan </td>
              <td><center> IDR 0 </center></td>
              <td><center> IDR 67,000 </center></td>
             </tr>
             <tr>
              <td> Support HD </td>
              <td> <center><b> * </b> </center> </td>
              <td> <center><b> * </b> </center> </td>
             </tr>
             <tr>
              <td> Ultra HD </td>
              <td> <center><b> - </b> </center> </td>
              <td> <center><b> * </b> </center> </td>
             </tr>
             <tr>
              <td> Split Screen </td>
              <td> <center><b> 2 </b> </center> </td>
              <td> <center><b> 4 </b> </center> </td>
             </tr>
             <tr>
              <td> Unlimited Movies </td>
              <td> <center><b> - </b> </center> </td>
              <td> <center><b> * </b> </center> </td>
             </tr>
             <tr>
              <td> Download </td>
              <td> <center><b> - </b> </center> </td>
              <td> <center><b> * </b> </center> </td>
             </tr>
             <tr>
              <td> Play Offline </td>
              <td> <center><b> - </b> </center> </td>
              <td> <center><b> * </b> </center> </td>
             </tr>
             <tr>
              <td> Skip Video </td>
              <td> <center><b> * </b> </center> </td>
              <td> <center><b> * </b> </center> </td>
             </tr>
        </table>
    <div class="form-group">
                    <button type="submit" class="btn btn-dark">Berlangganan Premium</button>
    </div>
    </div>
    </div>
    </div>
    </main>
@endsection
</body>
</html>