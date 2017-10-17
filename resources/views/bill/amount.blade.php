@extends('layouts.master')

@section('title')
	Bill Splitter
@endsection

@push('head')
 	<link rel="stylesheet" type="text/css" href="/css/bill.css">
@endpush

@section('errors')

	<?php if(!empty($errors)) : ?>
		<div class="error">
			<ul>
				<?php foreach($errors as $error) : ?>
					<li><?=$error?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif ?>

@endsection

@section('content')
		<div class='display'>
		Everyone owes <span class='amount'>$$</span>
		</div>
@endsection