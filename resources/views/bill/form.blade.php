@extends('layouts.master')

@section('title')
	Bill Splitter Form
@endsection

@push('head')
 	<link rel="stylesheet" type="text/css" href="/css/bill.css">
@endpush

@section('form')

	<h1>Bill Splitter</h1>

	<form method='GET' action='/form/submit'>
		<p><label for='people'>Split how many ways?</label><input type="text" name="people" id="people" value="{{ old('people') }}"></p>

		<p><label for='tab'>How much was the tab? </label><input type="text" name="tab" id="tab" value="{{ old('tab')}}"></p>

		<p><label for='tip_amount'>How was the service?</label><select name='tip_amount' id='tip_amount'><option value='18' {{ old('tip')=='18' ? 'selected' : '' }} >Good (18% tip) </option><option value='20' {{ old('tip')=='20' ? 'selected' : '' }} > Excellent (20% tip) </option>
		</select></p>

		<p><b>Round up?</b> <input type="checkbox" name="round_up" id="round_up" value="Yes" {{ old('round') ? 'CHECKED' : ''}}><label for="round_up"> Yes </label></p>

		<p><b>Anyone paying for their girlfriend's tab?</b> <input type="checkbox" name="girlfriend" id="girlfriend" value="Yes" {{ old('girlfriend') ? 'CHECKED' : ''}}><label for="girlfriend"> Yes </label></p>

		<p>
		<input type="submit" value="Calculate"></p>

		</form>
@endsection

@section('errors')
	@if($errors->any())
	<div class="error">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
@endsection


