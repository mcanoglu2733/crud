<!DOCTYPE html>
<html lang="en">

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add book</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('books.store') }}">
          @csrf
          <div class="form-group">    
              <label for="title">title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
 
          <div class="form-group">
              <label for="genre">genre:</label>
              <input type="text" class="form-control" name="genre"/>
          </div>
 
          <div class="form-group">
              <label for="writer">writer:</label>
              <input type="text" class="form-control" name="writer"/>
          </div>
          <button type="submit" class="btn btn-primary">Add book</button>
      </form>
  </div>
</div>
</div>
