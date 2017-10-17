<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function index() {
		return view('layouts.master');
	}

    public function amount() {
    	return view('bill.amount');
    }

    public function double_amount() {
    	$double_amount = $amount*2;
    	return '';
    }
}
