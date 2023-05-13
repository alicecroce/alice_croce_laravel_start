
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  
  <div class="container mt-5">
    <div class="row">
      <div class="col-6 text-center bg-secondary-subtle">
        <h2>Partenze</h2>
        <div class="row">
          <div class="col-3"><h5>Città</h5></div>
          <div class="col-2"><h5>Orario</h5></div>
          <div class="col-2"><h5>Compagnia</h5></div>
          <div class="col-2"><h5>Gate</h5></div>
        </div>
        @foreach ($voli['departure'] as $volo)
        <div class="row">
          <div class="col-3">
            {{$volo['city']}}
          </div>
          <div class="col-2">
            {{$volo['time']}}
          </div>
          <div class="col-2">
            {{$volo['company']}}
          </div>
          <div class="col-2">
            {{$volo['gate']}}
          </div>
          <div class="col-2">
            <a href="{{route('dettagliovolo', $volo['id'])}}">Dettagli</a>
          </div>
        </div>
        
        @endforeach
        
      </div>
      <div class="col-6 text-center bg-secondary">
        <h3>Arrivi</h3>
        <div class="row">
          <div class="col-3"><h5>Città</h5></div>
          <div class="col-2"><h5>Orario</h5></div>
          <div class="col-2"><h5>Compagnia</h5></div>
          <div class="col-2"><h5>Gate</h5></div>
        </div>
        @foreach ($voli['arrival'] as $volo)
        
        <div class="row">
          <div class="col-3">
            {{$volo['city']}}
          </div>
          <div class="col-2">
            {{$volo['time']}}
          </div>
          <div class="col-2">
            {{$volo['company']}}
          </div>
          <div class="col-2">
            {{$volo['gate']}}
          </div>
          <div class="col-2">
            <button>Dettagli</button>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>