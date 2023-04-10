<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} - Lista treni</title>
@vite('resources/js/app.js')

</head>
<body>
    <main>
        <section class="container">
            <h1>Lista treni</h1>
            <div class="row">

                @forelse ($trains as $train)
                    <div class="col 3">
                       
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title"> {{ $train->azienda}}</h5>
                              <h6 class="card-subtitle mb-2 text-muted">{{ $train->stazione_di_partenza}}</h6>
                              <p class="card-text">Orario di partenza: {{ $train->orario_di_partenza}}</p>
                              <p class="card-text">Orario di arrivo: {{ $train->orario_di_arrivo}}</p>
                              <a href="#" class="card-link">{{ $train->codice_treno}}</a>
                              <a href="#" class="card-link">{{ $train->numero_carrozze}}</a>
                            </div>
                          </div>



                    </div>
                @empty
                    
                @endforelse





            </div>
        </section>
    </main>
</body>
</html>