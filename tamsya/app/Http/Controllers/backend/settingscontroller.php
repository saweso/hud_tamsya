<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class settingscontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = DB::table('settings')->get();
        return view('backend.settings.home',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'title' => 'required|string|max:255',
          'slogan'=>'required',
          'country' => 'required',
          'region' => 'required',
          'phone' => 'required',
          'email' => 'required|string|email|max:255|unique:groups',
          'address' => 'required'
      ],[
          'title.required'=>'jina la Taasisi linahitajika',
          'slogan.required'=>'Kauli Mbiu ya Taasisi inahitajika',
          'country.required'=>'jina la nchi linahitajika',
          'region.required'=>'jina la mkoa linahitajika',
          'phone.required'=>'namba ya simu inahitajika',
          'email.required'=>'barua pepe inahitajika',
          'address.required'=>'anwani ya Taasisi inahitajika'
      ]);
        if($request->hasFile('logo')){
        $filename = $request->logo->getClientOriginalName();
        $request->logo->move(public_path('/uploads'), $filename);
        $setting = new Setting;
        $setting->title = $request->title;
        $setting->slogan = $request->slogan;
        $setting->country = $request->country;
        $setting->region = $request->region;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->instagram = $request->instagram;
        $setting->logo = $filename;
        $setting->save();
        session()->flash('message','Taasisi Imetengeneza Kikamilifu');
        return redirect('settings/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('backend.settings.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
          'title' => 'required|string|max:255',
          'abbr'=>'required',
          'slogan'=>'required',
          'country' => 'required',
          'region' => 'required',
          'phone' => 'required',
          'email' => 'required|string|email|max:255|unique:groups',
          'address' => 'required'
      ],[
          'title.required'=>'jina la Taasisi linahitajika',
          'abbr.required'=>'Kifupi cha Taasisi kinahitajika',
          'slogan.required'=>'Kauli Mbiu ya Taasisi inahitajika',
          'country.required'=>'jina la nchi linahitajika',
          'region.required'=>'jina la mkoa linahitajika',
          'phone.required'=>'namba ya simu inahitajika',
          'email.required'=>'barua pepe inahitajika',
          'address.required'=>'anwani ya Taasisi inahitajika'
      ]);

        $setting = Setting::find($id);
        $setting->title = $request->title;
        $setting->abbr = $request->abbr;
        $setting->slogan = $request->slogan;
        $setting->country = $request->country;
        $setting->region = $request->region;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->address = $request->address;
        if($request->hasFile('logo')){
        $filename = $request->logo->getClientOriginalName();
        $request->logo->move(public_path('/uploads'), $filename);
        $setting->logo = $filename;
        }else{
            
            $setting->logo = $setting->logo; 
        }
        $setting->save();
        session()->flash('message','Taasisi Imehaririwa Kikamilifu');
        return redirect('/settings/'.$id.'/edit');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        $logo = $setting->logo;
        $filename = public_path().'\\uploads\\'.$logo;
        \File::delete($filename);
        $setting->delete();
        session()->flash('message','Taasisi imefanikiwa kuondolewa');
        return redirect('/settings');
    }
}
