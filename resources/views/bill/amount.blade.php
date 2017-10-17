@extends('layouts.master')

@section('title')
	Bill Splitter
@endsection

@push('head')
 	<link rel="stylesheet" type="text/css" href="/css/bill.css">
@endpush

@section('content')
		<div class='display'>
		Everyone owes <span class='amount'>$$</span>
		</div>
@endsection