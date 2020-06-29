<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){
		$reservations = Reservation::paginate(10);
		return view('admin/reservations/all', [
			'reservations' => $reservations
		]);
	}
	public function create(){
		return view('admin/reservations/create');
	}
	public function store(){
		request()->validate([
			'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:8'],
			'guests' => ['required', 'string', 'max:255'],
			'time' => ['required'],
		]);
		Reservation::create(request()->all())->save();
		return redirect('/admin/reservations');
	}
	public function edit($id){
		$reservation = Reservation::find($id);
		return view('admin/reservations/edit', [
			'reservation' => $reservation
		]);
	}

	public function update($id){
		request()->validate([
			'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:8'],
			'guests' => ['required', 'string', 'max:255'],
			'time' => ['required'],
		]);
		Reservation::find($id)->fill(request()->all())->save();
		return redirect('/admin/reservations');
	}

	public function delete($id){
		Reservation::destroy($id);
		return redirect('/admin/reservations');
	}
}
