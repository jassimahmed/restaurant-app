<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Members;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MembersController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){
		$members = Members::paginate(10);
		return view('admin/members/all', [
			'members' => $members
		]);
	}
	public function delete($id){
		Members::destroy($id);
		return redirect('/admin/members');
	}
}
