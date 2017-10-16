<?php

namespace App\Http\Controllers\backend;
use App\Models\Leader;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class leaderscontroller extends Controller
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
        $leaders = DB::table('leaders')->paginate(10);
        return view('backend.leaders.home',compact('leaders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.leaders.create');
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
          'first_name' => 'required',
          'last_name' => 'required',
          'mobile'=>'required',
          'email' => 'required',
          'cheo' => 'required',
          'category' => 'required'
        ],[
          'first_name.required'=>'Jina la kwanza linahitajika',
          'last_name.required'=>'Jina la mwisho linahitajika',
          'mobile.required'=>'Namba ya simu inahitajika',
          'email.required'=>'barua pepe inahitajika',
          'cheo.required'=>'cheo Kinahitajika kinahitajika',
          'category.required'=>'Aina ya uongozi unahitajika',
        ]);
        if($request->hasFile('image')){
        $filename = $request->image->getClientOriginalName();
        $request->image->move(public_path('/uploads'), $filename);
        $setting = new Leader;
        $setting->first_name = $request->first_name;
        $setting->middle_name = $request->middle_name;
        $setting->last_name = $request->last_name;
        $setting->mobile = $request->mobile;
        $setting->email = $request->email;
        $setting->cheo = $request->cheo;
        $setting->category = $request->category; 
        $setting->image = $filename;
        $setting->save();
        session()->flash('message','Leader has created successful');
        return redirect('leaders/create');
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
        $leader = DB::table('leaders')->where('email','=',$id)->first();
        return view('backend.leaders.edit',compact('leader'));
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
          'first_name' => 'required',
          'last_name' => 'required',
          'mobile'=>'required',
          'email' => 'required',
          'cheo' => 'required',
          'category' => 'required'
        ],[
          'first_name.required'=>'Jina la kwanza linahitajika',
          'last_name.required'=>'Jina la mwisho linahitajika',
          'mobile.required'=>'Namba ya simu inahitajika',
          'email.required'=>'barua pepe inahitajika',
          'cheo.required'=>'cheo Kinahitajika kinahitajika',
          'category.required'=>'Aina ya uongozi unahitajika',
        ]);

        $setting = Leader::find($id);
        $setting->first_name = $request->first_name;
        $setting->middle_name = $request->middle_name;
        $setting->last_name = $request->last_name;
        $setting->mobile = $request->mobile;
        $setting->email = $request->email;
        $setting->cheo = $request->cheo;
        $setting->category = $request->category;
        if($request->hasFile('image')){
        $filename = $request->image->getClientOriginalName();
        $request->image->move(public_path('/uploads'), $filename);
        $setting->image = $filename;
        }else{
            $setting->image = $setting->image; 
        }
        $setting->save();
        session()->flash('message','Taarifa zimehaririwa Kikamilifu');
        return redirect('/leaders/'.$id.'/edit');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Leader::find($id);
        $logo = $setting->image;
        $filename = public_path().'\\uploads\\'.$logo;
        \File::delete($filename);
        $setting->delete();
        session()->flash('message','Imefanikiwa kuondolewa');
        return redirect('/leaders');
    }
}
