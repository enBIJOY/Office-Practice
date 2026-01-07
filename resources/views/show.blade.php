<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>

        <style>
        .t-header {
        text-align: center;
        }
        tr {
        border: 1px solid red;
        padding: 1px;
        }
        td {
        padding: 0 25px;
        }
    </style>

    <body>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div style="text-align:center; width:400px; margin:0 auto; background-color:white; color:black; padding: 5px;">
               <h1>All Clients List</h1>
        </div>

        <div class="container my-3" style="text-align:center; width:1200px; margin:1 auto; background-color:white; color:black; padding:2px;" >
            <a style="float: right;" class="btn btn-primary me-md-2 " href="{{ url('/') }}">Create</a>
            </br>
            @if($clients->count() > 0)
            <table>
                <tr class="t-header">
                <td>Name</td>
                <td>Country</td>
                <td>email</td>
                <td>Phone</td>
                <td>Description</td>
                <td>sub_description</td>
                <td>image</td>
                <td>Action</td>
                </tr>
                @foreach($clients as $client)
                <tr>
                    <td>
                        {{$client->name}}
                    </td>
                    <td>
                        {{$client->Country}}
                    </td>
                    <td>
                        {{$client->email}}
                    </td>
                    <td>
                        {{$client->phone}}
                    </td>
                    <td>
                        {{ str($client->description)->limit(15) }}
                    </td>
                    <td>
                        {{ str($client->sub_description)->limit(20) }}
                    </td>
                    <td>
                        <img src="{{ asset('upp') }}/{{ $client->image }}" height="50" weight="50" alt="Image">
                    </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('edit', $client->id) }}">Edit</a>
                        <form action="{{route('client.Delete', $client->id)}}", method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button class='btn btn-sm btn-danger' type='submit'>Delete</button>
                        </form>
                    </td>                   
                </tr>
                @endforeach
            </table>  
            @else
            <span>There is no Clients in your collection.</span>
            @endif  
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>