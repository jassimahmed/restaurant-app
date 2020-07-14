<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use App\Reservation;
use App\GeneralSetting;
use App\SocialSetting;
use App\FoodCategory;
use App\FoodItems;

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
		$categories = FoodCategory::all();
		return view('menu/all-categories', [
			'categories' => $categories
		]);
	}
	public function singleMenu($slug){
		$food_category = FoodCategory::where('title', '=', $slug)->first();
		$food_items = FoodItems::where('category_id', '=', $food_category->id)->get();
		return view('menu/single-menu', [
			'food_item_name' => ucfirst($slug),
			'food_items' => $food_items
		]);
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
