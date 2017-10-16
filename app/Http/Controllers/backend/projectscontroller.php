<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class projectscontroller extends Controller
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
        $projects = DB::table('projects')->paginate(10);
        return view('backend.projects.home',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.projects.create');
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
          'slug'=>'required',
          'type' => 'required',
          'description' => 'required'
        ],[
          'title.required'=>'Kichwa cha Habari kinahitajika',
          'slug.required'=>'neno la pekee linahitajika',
          'type.required'=>'Aina ya shughuli inahitajika',
          'description.required'=>'Maelezo kwa kina ya shughuli yanahitajika'
        ]);

        $setting = new Project;
        $setting->title = $request->title;
        $setting->slug = $request->slug;
        $setting->type = $request->type;
        $setting->description = $request->description;
        if($request->hasFile('image')){
        $filename = $request->image->getClientOriginalName();
        $request->image->move(public_path('/uploads'), $filename);
        $setting->image = $filename;
        }
        $setting->save();
        session()->flash('message','Tamsya Activity created successful');
        return redirect('projects/create');
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
        $project = Project::find($id);
        return view('backend.projects.edit',compact('project'));
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
          'slug'=>'required',
          'type' => 'required',
          'description' => 'required'
        ],[
          'title.required'=>'Kichwa cha Habari kinahitajika',
          'slug.required'=>'neno la pekee linahitajika',
          'type.required'=>'Aina ya shughuli inahitajika',
          'description.required'=>'Maelezo kwa kina ya shughuli yanahitajika'
        ]);

        $setting = Project::find($id);
        $setting->title = $request->title;
        $setting->slug = $request->slug;
        $setting->type = $request->type;
        $setting->description = $request->description;
        if($request->hasFile('image')){
        $filename = $request->image->getClientOriginalName();
        $request->image->move(public_path('/uploads'), $filename);
        $setting->image = $filename;
        }else{
            $setting->image = $setting->image; 
        }
        $setting->save();
        session()->flash('message','Taarifa zimehaririwa Kikamilifu');
        return redirect('/projects/'.$id.'/edit');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = Project::find($id);
        $logo = $setting->image;
        $filename = public_path().'\\uploads\\'.$logo;
        \File::delete($filename);
        $setting->delete();
        session()->flash('message','Imefanikiwa kuondolewa');
        return redirect('/projects');
    }
}
