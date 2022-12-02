<?php

namespace App\Http\Controllers\Admin\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;
use Session;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = DB::table('announcements')->latest()->paginate(5);
        return view('admin.bulletin.announcements', [
            'announcements' => $announcements
        ]);
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
    public function store(Request $request)
    {
        $request->validate([
            'thumbnailImage' => 'required|max:2048',
            'fullImage' => 'required|max:2048',
          ]);
          if ($request == true) {
    
            $input = $request->all();
            
            $input['thumbnailImage'] = $request->thumbnailImage->getClientOriginalName();
            $input['fullImage'] = $request->fullImage->getClientOriginalName();
            $request->thumbnailImage->move(public_path('images/Admin/Bulletin/Announcement'), $input['thumbnailImage']);
            $request->fullImage->move(public_path('images/Admin/Bulletin/Announcement'), $input['fullImage']);
    
            Announcement::create($input);
     
            return redirect()->back()->with('success', 'Announcement Post Added Successfully');   
        }
    
          return response()->json(['error'=>$request->errors()->all()]);
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
    public function destroy($id)
    {
        $Announcement = Announcement::findOrFail($id);
        $Announcement->delete();
        return back()->with('delete', 'Announcement Post Deleted Successfully');   
    } 
}
