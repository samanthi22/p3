@extends('layouts.master')

@section('title')
	Bill Splitter Form
@endsection

@push('head')
 	<link rel="stylesheet" type="text/css" href="/css/bill.css">
@endpush

@section('content')
	@if($how_many_people != null)
			@if($how_much_tab != null) 
			<h2> Results... </h2>
			<div class='display'>
			<h3> Everyone owes <span class='amount'>$ {{ $each_pay }} </span></h3>
			</div>
				@if($girlfriend == true) 
				<div class='display'>
				<h3> If you are paying for your girlfriend's tab too you owe <span class='amount'> $ {{ $double_amount }} </span></h3>
				</div>
				@endif
			@endif
		@endif
@endsection
