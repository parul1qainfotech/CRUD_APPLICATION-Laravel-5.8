@extends('layout')

@section('content')
<h1> ADD FORM</h1>

<form method="post" action="/addsave">
    @csrf
  <div class="form-group">


    <label for="title">Title</label>
    <input type="Text" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title" name="title" value="{{old('title')}}">
 @error('title')
 <div class="errormsg">{{$message}}</div>
 @enderror
  
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="text" rows='6'  class="form-control" id="description" placeholder="Description" name="description" >{{old('description')}}</textarea>
    @error('description')
 <div class="errormsg">{{$message}}</div>
 @enderror
</div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text"  class="form-control" id="author" placeholder="Author" name="author" value="{{old('author')}}">
    @error('author')
 <div class="errormsg">{{$message}}</div>
 @enderror
  </div>

  <button type="submit" class="btn btn-primary">ADD</button>
</form>

@endsection


