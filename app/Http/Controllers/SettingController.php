<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function setting(){
        return view('settings.index');
    }

    public function settingBranding(Request $request){

        $setting = Setting::firstOrNew();
        if ($request->isMethod('POST')){


            $setting->site_full_name = $request->input('site_full_name');
            $setting->site_short_name = $request->input('site_short_name');
            $setting->footer_text = $request->input('footer_text');

            if ($request->input('remove_login_background') == '1'){
                Storage::disk('public')->delete('img/login_background/'.$setting->login_background);
                $setting->login_background = null;
            }

            app('App\Http\Requests\ImageUploadRequest')->imageUpload('login_background', 'img/login_background/',$setting,'login_background');
            if ($request->input('remove_logo') == '1'){
                Storage::disk('public')->delete('img/logo/'.$setting->logo);
                $setting->logo = null;
            }
            app('App\Http\Requests\ImageUploadRequest')->imageUpload('logo', 'img/logo/',$setting,'logo');

            if ($request->input('remove_favicon') == '1'){
                Storage::disk('public')->delete('img/favicon/'.$setting->favicon);
                $setting->favicon = null;
            }
            app('App\Http\Requests\ImageUploadRequest')->imageUpload('favicon', 'img/favicon/',$setting,'favicon');

            $setting->save();
            return back()->with('success','Branding Setting Saved');
        }

        return view('settings.branding')->with(compact('setting'));
    }

    public function settingLocalization(Request $request){
        $setting = Setting::firstOrNew();
        if ($request->isMethod('POST')){
            $setting->date_format = $request->input('date_format');
            $setting->time_format = $request->input('time_format');
            $setting->timezone = $request->input('timezone');
            $setting->currency_code = $request->input('currency_code');
            $setting->save();

            return back()->with('success', 'Localization Setting saved');
        }

        return view('settings.localization')->with(compact('setting'));
    }
}
