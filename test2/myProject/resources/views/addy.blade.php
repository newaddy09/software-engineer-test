<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/addy.css') }}">

    <title>Avana Test2</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        padding: 5%
    }
</style>
</head>
<body>
    <div class="container">


        <h2 class="text-left">
            Avana Test2 
        </h2>

        @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif

   

    @if (isset($err))
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <div>
        
            @foreach ($err as $err1)
                @if ($err1['error'] && !empty($err1['error']))
                <p>{{ $err1['val'].'. '.$err1['error'] }}</p>
                @endif
            @endforeach
        
    </div>
</div>
@endif



<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Choose your xls/xlsx File : <input type="file" name="file" class="form-control inp1">

    <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 3%">
</form>

</div>
</body>
</html>