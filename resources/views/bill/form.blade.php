@extends('layouts.master')

@section('title')
	Bill Splitter Form
@endsection

@push('head')
 	<link rel="stylesheet" type="text/css" href="/css/bill.css">
@endpush

@section('form')

	<h1>Bill Splitter</h1>

	<form method='GET' action='/form'>
		<p><label for='people'>Split how many ways?</label><input type="text" name="people" id="people" value='{{ $how_many_people or '' }}'></p>

		<p><label for='tab'>How much was the tab? </label><input type="text" name="tab" id="tab" value='{{ $how_much_tab or '' }}'></p>

		<p><label for='tip_amount'>How was the service?</label><select name='tip_amount' id='tip_amount'><option value="18">Good (18% tip) </option><option value="20"> Excellent (20% tip) </option>
		</select></p>

		<p><b>Round up?</b> <input type="checkbox" name="round_up" id="round_up" value="yes"><label for="round_up"> Yes </label></p>

		<p><b>Anyone paying for their girlfriend's tab?</b> <input type="checkbox" name="girlfriend" id="girlfriend" value="yes"><label for="girlfriend"> Yes </label></p>

		<p>
		<input type="submit" value="Calculate"></p>

		</form>

		
@endsection

@section('content')
	@if($how_many_people != null)
			@if($how_much_tab != null) 
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