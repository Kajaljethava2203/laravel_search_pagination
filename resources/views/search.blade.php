<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Pagination with Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 40px">
                <h1>Search Everything</h1><br>
                <form action="{{ route('web.search') }}" method="get">
                    <div class="form-group">
                        <label for="" style="font-size: 20px">Enter Keyword</label><br>
                        <input type="text" class="form-control" name="query" placeholder="Search here..."/><br>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <br>
                <br>
                <br>
                <br>
                @if(isset($countries))

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Independence Year</th>
                            <th>Continent</th>
                        </tr>
                        </thead>

                        <tbody>
                        @if(count($countries)>0)
                            @foreach($countries as $countrie)
                                <tr>
                                    <td>{{ $countrie->Name }}</td>
                                    <td>{{ $countrie->Indepyear }}</td>
                                    <td>{{ $countrie->Continent }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td>No result found</td></tr>
                        @endif

                        </tbody>
                    </table>

                    <div class="pagination-block">
                        {{ $countries->links('layouts.paginationlinks') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
