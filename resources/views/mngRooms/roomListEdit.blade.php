<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body style="background: url('{{ URL('images/back.jpeg') }}');background-size:100%;">
  <div style="backdrop-filter:blur(1px);width:100%;height:100vh;background: rgba(0, 0, 0, 0.247)">
    @include('navigation-menu')

<div class="card mb-3" style="width:90%;margin:auto">
  @if(session()->has('message'))
          <div id="hh" class="alert alert-success">
              {{session()->get('message')}}
          </div>
    @endif
<div class="card-body">
    <h1>Rooms Halls List</h1>
    <table class="table">
      <thead class="thread-light">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Capacity</th>
          <th scope="col">Floor</th>
          <th scope="col">Type</th>
          <th scope="col">State</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
        @foreach($rooms as $room)
        <tr>
            <td>{{ $room->name }}</td>
            <td>{{ $room->capacity }}</td>
            <td>{{ $room->floor }}</td>
            <td>{{ $room->type }}</td>
            <td>{{ $room->state }}</td>
            <td>
              <a href="{{ url('/edit/'.$room->id) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</body>
</html>