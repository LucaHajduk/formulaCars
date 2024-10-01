<!DOCTYPE html>
<html>
<head>
    <title>Formula 1 Races</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="p-5">
        <div class="container text-center p-4">
            <div class="row justify-content-md-center">
                <h1>Formula 1 Races</h1>
                        <form method="GET" action="{{ route('index') }}">
                            <div class="container full-height d-flex justify-content-center align-items-center">
                                <div class="d-flex">
                                    <div class="mb-3 mx-1">
                                        <input class="form-control p-3" type="text" name="season" placeholder="Season" value="{{ request('season') }}">
                                    </div>
                                    <div class="mb-3 mx-1">
                                        <input class="form-control p-3" type="text" name="raceName" placeholder="Race Name" value="{{ request('raceName') }}">
                                    </div>
                                    <div class="mb-3 mx-1">
                                        <input class="form-control p-3" type="date" name="date" value="{{ request('date') }}">
                                    </div>
                                    <div class="mb-3 mx-1">
                                        <button class="btn btn-dark p-3" type="submit">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
    
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-dark">
                            <th>Season</th>
                            <th>Round</th>
                            <th>Race Name</th>
                            <th>Circuit Name</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($races as $race)
                            <tr>
                                <td>{{ $race->season }}</td>
                                <td>{{ $race->round }}</td>
                                <td>{{ $race->raceName }}</td>
                                <td>{{ $race->circuitName }}</td>
                                <td>{{ $race->date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
        </div>  
    </div>
</body>
</html>