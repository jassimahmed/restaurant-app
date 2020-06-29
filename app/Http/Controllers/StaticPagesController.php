<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use App\Reservation;

class StaticPagesController extends Controller
{
	public function home(){
		return view('home');
	}
	public function about(){
		return view('pages/about');
	}
	public function reservations(){
		return view('pages/reservations');
	}
	public function offers(){
		return view('pages/offers');
	}
	public function menu(){
		return view('menu/index');
	}
	public function singleMenu(){
		return view('menu/single-menu');
	}
	public function contact(){
		return view('pages/contact');
	}
	public function registermember(){
		request()->validate([
			'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone_number' => ['string'],
		]);
		Members::create(request()->all())->save();
		return redirect('/offers/thank-you');
	}
	public function registerreservation(){
		request()->validate([
			'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:8'],
			'guests' => ['required', 'string', 'max:255'],
			'time' => ['required'],
		]);
		Reservation::create(request()->all())->save();
		return view('pages/thank-you');
	}
	public function offersthanks(){
		return view('pages/thank-you');
	}
}
