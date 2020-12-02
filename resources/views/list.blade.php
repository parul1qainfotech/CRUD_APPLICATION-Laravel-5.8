@extends('layout')
<title>@yield('home page')</title>



@section('content')
<section class="content">
@if(Session::has('msg'))
<div class="alert alert-success">{{Session::get('msg')}}</div>
@endif

   <h1>LIST</h1>
   <table id="example" class="table table-striped table-bordered">
  
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Author</th>
                <th>Created</th>
                <th>Delete</th>
                <th> Edit</th>
                
               
            </tr>
        </thead>
        <tbody>
       @foreach($datas as $i)
            <tr>
                  <td>{{$i->id}}</td>
                <td>{{$i->title}}</td>
                <td>{{$i->author}}</td>
                <td>{{$i->created_at}}</td>
                
                <td>  @csrf<a href="#" onclick='deleteme({{$i->id}});'class="btn btn-danger" name="delete">Delete</a></td>
                <td><a type="submit"  href="{{url('/show/edit/'.$i->id)}}" class="btn btn-success" name="update">edit</a></td>
                
            </tr>
     @endforeach
            </tbody>

      
    </table>
  
   </section>
   @endsection


<script>
function deleteme(id){
    if(confirm('are you sure you want to delete?')){
        window.location.href='{{url('show/deletes')}}/'+id;
    }
    
}


 

</script>