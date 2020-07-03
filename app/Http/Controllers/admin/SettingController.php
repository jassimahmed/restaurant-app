<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialSetting;

class SettingController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function general(){
		$id = 1;
		$gs = GeneralSetting::find($id);
		return view('admin/settings/general', [
			'general_settings' => $gs
		]);
	}
	public function saveGeneral(){
		$id = 1;
		request()->validate([
			'site_title' => ['required', 'string', 'max:255'],
            'logo_img_url' => ['required', 'string'],
            'address_1' => ['required', 'string'],
            'city' => ['required', 'string'],
			'province' => ['required', 'string'],
			'postalcode' => ['required', 'string'],
			'phone_number' => ['required', 'string'],
		]);
		GeneralSetting::find($id)->fill(request()->all())->save();
		return redirect('/admin/settings/general');
	}
	public function seo(){
		$id = 1;
		$ss = SeoSetting::find($id);
		return view('admin/settings/seo', [
			'seo_settings' => $ss
		]);
	}
	public function saveSeo(){
		$id = 1;
		request()->validate([
			'description' => ['required', 'string'],
            'keywords' => ['required', 'string'],
		]);
		SeoSetting::find($id)->fill(request()->all())->save();
		return redirect('/admin/settings/seo');
	}
	public function socialAccounts(){
		$id = 1;
		$ss = SocialSetting::find($id);
		return view('admin/settings/social', [
			'social_settings' => $ss
		]);
	}
	public function saveSocialAccounts(){
		$id = 1;
		request()->validate([
			'facebook_url' => ['string'],
            'twitter_url' => ['string'],
			'instagram_url' => ['string'],
		]);
		SocialSetting::find($id)->fill(request()->all())->save();
		return redirect('/admin/settings/social-accounts');
	}
}
