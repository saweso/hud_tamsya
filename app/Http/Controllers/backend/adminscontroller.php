<?php

namespace App\Http\Controllers\backend;
use App\models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class adminsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $admins= DB::table('admins')->orderBy('id','desc')->paginate(10);
        return view('backend.admins.home',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admins.create');
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
          'email' => 'required|string|email|max:255|unique:users',
          'mobile' => 'required|string|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
      ]);
      $user = new Admin;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->mobile = $request->mobile;
      $user->password = bcrypt($request->password);
      $user->save();
      session()->flash('message','Taarifa za mtumiaji zimefanikiwa kuandikishwa');
      return redirect('admins/create');
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
      $admin = Admin::find($id);
      return view('backend.admins.edit',compact('admin'));
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
          'mobile' => 'required',
          'email' => 'required',
          'password' => 'required|string|min:6|confirmed',
      ]);
      $user = Admin::find($id);
      $user->name = $request->name;
      $user->mobile = $request->mobile;
      $user->email = $request->email;
      $user->gender = $request->gender;
      $user->password = bcrypt($request->password);
      $user->save();
      session()->flash('message','Taarifa za mtumiaji zimefanikiwa kuhakikiwa vizuri');
      return redirect('admins/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($email)
    {
      $admin = DB::table('admins')->where('email','=',$email)->delete();
      session()->flash('message','Mtumiaji amefanikiwa kuondolewa');
      return redirect('/admins');
    }
}
