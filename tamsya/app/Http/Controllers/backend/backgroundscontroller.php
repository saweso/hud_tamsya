<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Background;

class backgroundscontroller extends Controller
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
        $backgrounds = DB::table('backgrounds')->paginate(10);
        return view('backend.backgrounds.home',compact('backgrounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.backgrounds.create');
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
          'name' => 'required|string|max:255',
          'type' => 'required',
          'description' => 'required'
        ],[
          'name.required'=>'Kichwa cha Habari kinahitajika',
          'type.required'=>'Aina ya tamsya historia inahitajika',
          'description.required'=>'Maelezo kwa kina yanahitajika'
        ]);

        $setting = new Background;
        $setting->name = $request->name;
        $setting->type = $request->type;
        $setting->description = $request->description;
        $setting->save();
        session()->flash('message','created successful');
        return redirect('backgrounds/create');
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
        $background = Background::find($id);
        return view('backend.backgrounds.edit',compact('background'));
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
          'name' => 'required|string|max:255',
          'type' => 'required',
          'description' => 'required'
        ],[
          'name.required'=>'Kichwa cha Habari kinahitajika',
          'type.required'=>'Aina ya tamsya historia inahitajika',
          'description.required'=>'Maelezo kwa kina yanahitajika'
        ]);

        $setting = Background::find($id);
        $setting->name = $request->name;
        $setting->type = $request->type;
        $setting->description = $request->description;
        $setting->save();
        session()->flash('message','created successful');
        return redirect('/backgrounds/'.$id.'/edit');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Backgound::find($id);
        $logo = $setting->image;
        $filename = public_path().'\\uploads\\'.$logo;
        \File::delete($filename);
        $setting->delete();
        session()->flash('message','Imefanikiwa kuondolewa');
        return redirect('/backgrounds');
    }
}
