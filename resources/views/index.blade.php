@extends('layout')
@section('content')
<div class="card">
	<div class="card-header"><a href="{{route('posts.create')}}" class="btn btn-primary btn-sm" >
          Create
        </a></div>
	<div class="card-body">
		<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Title</th>
      <th>Body</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($post as $val)
    
    <tr>
      <td>{{ $val->id}}</td>
      <td>{{ $val->title}}</td>
      <td>{{ $val->body }}</td>
     
      <td>
        <a href="{{ route('posts.edit', $val->id)}}" class="btn btn-primary">Edit</a>

       
        <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" >
            Delete
        </button>
       
        <form id="logout-form" action="{{ route('posts.destroy',$val->id) }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
       
        
      </td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>
	</div>
</div>

@endsection
