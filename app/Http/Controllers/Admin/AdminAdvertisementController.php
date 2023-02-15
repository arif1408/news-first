<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeAdvertisement;

class AdminAdvertisementController extends Controller
{
    public function home_ad_show()
    {
        $home_ad_data = HomeAdvertisement::where('id',1)->first();
        return view('admin.advertisement_home_view',compact('home_ad_data'));
    }

    public function home_ad_update(Request $request)
    {
        $home_ad_data = HomeAdvertisement::where('id',1)->first();
        $home_ad_data->above_search_ad_url = $request->above_search_ad_url;
        $home_ad_data->above_search_ad_status = $request->above_search_ad_status;
        $home_ad_data->above_footer_ad_url = $request->above_footer_ad_url;
        $home_ad_data->above_footer_ad_status = $request->above_footer_ad_status;
        $home_ad_data->update();
        return redirect()->back()->with('success','Data is updated successfully');
    }
}
