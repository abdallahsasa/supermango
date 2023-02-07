<?php

namespace App\Http\Controllers;

use App\Models\WebsiteProfile;
use Illuminate\Http\Request;

class WebsiteProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = WebsiteProfile::all();
        if (is_null($data)) {
            return view('/dashboard.website_profile.index');

        }

        return view('/dashboard.website_profile.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new WebsiteProfile();
        $obj::truncate();

        $request = $request->validate([
            'location' => 'required|string|min:3|max:200',
            'email' => 'required|email',
            'number' => 'required|numeric|digits:10',
            'facebook' => '|string|min:3|max:200',
            'instagram' => '|string|min:3|max:200',
            'snapchat' => '|string|min:3|max:200',
        ]);

        $obj->location = $request['location'];
        $obj->email = $request['email'];
        $obj->number = $request['number'];
        $obj->facebook = $request['facebook'];
        $obj->instagram = $request['instagram'];
        $obj->snapchat = $request['snapchat'];

        $obj->save();
        return redirect()->back()->with('success', 'Data Have Been Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\WebsiteProfile $websiteProfile
     * @return \Illuminate\Http\Response
     */
    public function show(WebsiteProfile $websiteProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\WebsiteProfile $websiteProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(WebsiteProfile $websiteProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\WebsiteProfile $websiteProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebsiteProfile $websiteProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\WebsiteProfile $websiteProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebsiteProfile $websiteProfile)
    {
        //
    }
}
