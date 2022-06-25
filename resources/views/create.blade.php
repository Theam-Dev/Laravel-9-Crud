@extends('layout')
@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<h4>Create</h4>
				<hr>
				<form action="{{route('posts.store')}}" method="POST">
					{{ csrf_field()}}
					<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
						<label for="title">Title:</label>
						<input type="text" class="form-control " id="title" name="title" value="{{old('title')}}">
						@if($errors->has('title'))
						<span class="text-danger">
							{{ $errors->first('title') }}
						</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
						<label for="body">Body:</label>
						<input type="text" class="form-control " id="body" name="body" value="{{old('body')}}">
						@if($errors->has('body'))
						<span class="text-danger">
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