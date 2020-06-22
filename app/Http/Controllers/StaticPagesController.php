<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
	public function home(){
		return view('home-backup');
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
}