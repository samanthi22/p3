<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function amount() {
    	return 'The amount is $$';
    }

    public function double_amount() {
    	return 'The amount including the tab for your gilfriend is $$';
    }
}
