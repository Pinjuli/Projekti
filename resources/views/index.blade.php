<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<div class="container">

    <nav class="navbar-inverse">
        <a class="navbar-brand" href="{{ URL::to('tapahtumat') }}">shark Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('tapahtumat') }}">View All sharks</a></li>
        <li><a href="{{ URL::to('tapahtumat/create') }}">Create a shark</a>
    </ul>
</nav>

<h1>All the sharks</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Tapahtuma</td>
            <td>Pisteet</td>

        </tr>
    </thead>
    <tbody>
    @foreach($tapahtumat as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->tapahtuma }}</td>
            <td>{{ $value->pisteet }}</td>
            

     
            <td>

               
             
                <a class="btn btn-small btn-success" href="{{ URL::to('tapahtumat/' . $value->id) }}">Show this shark</a>

          
                <a class="btn btn-small btn-info" href="{{ URL::to('tapahtumat/' . $value->id . '/edit') }}">Edit this shark</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>


</body>
</html>