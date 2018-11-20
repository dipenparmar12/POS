8m@extends('admin.main')
@section('content')
		@if($message = Session::get('success'))
			<div class="alert alert-info alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<strong>Success!</strong> {{ $message }}

				<p>{{ $message }}</p>
			</div>
		@endif
		
		<p>{{ $message }}</p>

		{!! Session::forget('success') !!}
		<br />
	
		<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<h2> Sub_categories Table </h2>
			<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Excel xls</button></a>
			<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Excel xlsx</button></a>
			<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">CSV</button></a>
			<input type="file" name="import_file" />
					<input type="text" class="" placeholder="DB Table Name" name="table" value="users">
			<button class="btn btn-primary">Import File</button>
		</form>
@endsection