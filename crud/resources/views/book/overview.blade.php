<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
    <table id= "myTable" class = "display" >
        <thead>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Writer</th>
                <th>Show</th>
                <th>Delete</th>
                <th>Edit</th>
            

            </tr> 
        </thead>
        <tbody>
            @foreach ($Books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->genre }}</td>
                    <td>{{ $book->writer }}</td>
                    <td><a href="{{route ('books.show', $book->id)}}" class="btn btn-primary">Show</a></td>
                    <td>
                <form action="{{ route('books.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td><a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a></td>

            
                </tr>
                
            @endforeach
        </tbody>
    </table>
            <td><a href="{{ route('books.create',$book->id)}}" class="btn btn-primary">create</a></td>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"> </script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>
</body>
</html>




