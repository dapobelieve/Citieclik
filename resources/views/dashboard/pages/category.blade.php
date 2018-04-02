@extends('dashboard.layouts.template')
@section('title')
    <title>Dashboard :: CitieClik</title>
@endsection

@section('admin-content')
	<div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">Category</h5>
            <p class="text-muted m-b-10">List of registered categories</p>
        </div>
    </div>
	<div class="page-body">
		<div class="row">
			@foreach($categories as $category)
				<div class="col-md-12 col-lg-4">
		            <div class="card">
		                <div class="card-block text-center">
		                   	<h4 class="m-t-20"><span class="text-c-blue">{{ $category->category }}</span></h4>
		                   	<p class="m-b-20">Your have <span class="text-c-blue">5</span> subcategories</p>
		                   	<button class="btn btn-primary btn-sm btn-round">Manage subcategories</button>
		                </div>
		            </div>
		          </div>
			@endforeach
			<div class="col-md-12 col-lg-4">
		            <div class="card">
		                <div class="card-block text-center">
		                   	<h4 class="m-t-20"><span class="text-c-blue ti-plus"></span></h4>
		                   	<p class="m-b-20">Add new category</p>
		                   	<button class="btn btn-primary btn-sm btn-round">Add new</button>
		                </div>
		            </div>
		          </div>
		</div>
	</div>
@stop