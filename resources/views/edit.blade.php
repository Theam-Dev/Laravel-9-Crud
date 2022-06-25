@extends('layout')
@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<h4>Edit</h4>
				<hr>
				<form action="{{route('posts.update',$post->id)}}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
						<label for="title">Title:</label>
						<input type="text" class="form-control " id="title" name="title" value="{{$post->title}}">
						@if($errors->has('title'))
						<span class="help-block">
							{{ $errors->first('title') }}
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
						<label for="body">Description:</label>
						<input type="text" class="form-control " id="body" name="body" value="{{$post->body}}">
						@if($errors->has('body'))
						<span class="help-block">
							{{ $errors->first('body') }}
						</span>
						@endif
					</div>
					<button type="submit" class="btn btn-primary pull-right">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection