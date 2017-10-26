<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function index() {
		return view('layouts.master');
	}

	public function form (Request $request) {

		$tip = $request->input('tip_amount');
		$round = $request->input('round_up');
		$girlfriend = $request->input('girlfriend');

		return view('bill.form')->with([
			'round' => $round,
			'girlfriend' => $girlfriend,
			'tip' => $tip
			]);
	}

	public function submit(Request $request) {

		$this->validate($request, [
			'people' => 'required|numeric',
			'tab' => 'required|numeric',
			]);

		$how_many_people = $request->input('people');
		$how_much_tab = $request->input('tab');
		$tip = $request->input('tip_amount');
		$round = $request->input('round_up');
		$girlfriend = $request->input('girlfriend');

		$each_pay = 0;
		$double_amount = 0;

		if($request->has('people')) {
			if($request->has('tab')) {
				$amount_with_tip = $how_much_tab*(($tip/100)+1.0);
				if($request->has('round_up')) {
					$each_pay = $amount_with_tip / $how_many_people;
					$each_pay = round($each_pay);
				} else {
					$each_pay = $amount_with_tip / $how_many_people;
				}

				if($request->has('girlfriend')) {
					$double_amount = $each_pay * 2;
				}
			
			}
		}

		
		return view('bill.submit')->with([
		'each_pay' => $each_pay,
		'double_amount' => $double_amount,
		'how_many_people' => $how_many_people,
		'how_much_tab' => $how_much_tab,
		'tip' => $tip,
		'round' => $round,
		'girlfriend' => $girlfriend
		]);
	}
}		

