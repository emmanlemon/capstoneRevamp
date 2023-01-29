<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\Announcement;
use App\Models\News;
use Carbon\Carbon;

class BulletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $bulletin )
    {
        $request->validate([
            'thumbnailImage' => 'required|max:2048',
            'fullImage' => 'required|max:2048',
          ]);
          if ($request == true) {
    
            $input = $request->except(['_token' , 'page' , 'save']);
            $input['thumbnailImage'] = $request->thumbnailImage->getClientOriginalName();
            $input['fullImage'] = $request->fullImage->getClientOriginalName();
            $request->thumbnailImage->move(public_path('images/Admin/Bulletin/'.ucfirst($bulletin)), $input['thumbnailImage']);
            $request->fullImage->move(public_path('images/Admin/Bulletin/'.ucfirst($bulletin)), $input['fullImage']);
            $sample = DB::table($bulletin)->insert($input);
            return redirect()->back()->with('success', ucfirst($bulletin).' Post Added Successfully'); 

        }
    
          return response()->json(['error'=>$request->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bulletin)
    {

        $bulletinNav = DB::table($bulletin)->latest()->paginate(5);
        return view('admin.bulletin.'.$bulletin , compact('bulletinNav'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($bulletin, $id = null)
    {
        DB::table($bulletin)->where('id', $id)->delete();
        return back()->with('delete', ucfirst($bulletin).' Post Deleted Successfully');   
    }
    
}
