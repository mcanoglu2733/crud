

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form method="post" action="{{ route('books.update', $book->id) }}">
            @csrf 
            @method('PUT')
            <div class="form-group">
 
                <label for="book_Title">book Title:</label>
                <input type="text" class="form-control" name="title" value="{{ $book->title }}" />
            </div>
 
            <div class="form-group">
                <label for="Genre">Book Genre:</label>
                <input type="text" class="form-control" name="genre" value="{{ $book->genre }}" />
            </div>
 
            <div class="form-group">
                <label for="value">Book Writer:</label>
                <input type="text" class="form-control" name="writer" value="{{ $book->writer }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>    


</body>
</html>