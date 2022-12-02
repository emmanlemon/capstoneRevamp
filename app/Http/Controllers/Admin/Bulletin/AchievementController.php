<?php

namespace App\Http\Controllers\Admin\Bulletin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use Session;
use Illuminate\Support\Facades\DB;
use Livewire\Livewire;
use Livewire\WithPagination;

class AchievementController extends Controller
{
    use WithPagination;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = DB::table('achievements')->latest()->paginate(5);
        return view('admin.bulletin.achievements', [
            'achievements' => $achievements
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
            $request->thumbnailImage->move(public_path('images/Admin/Bulletin/Achievement'), $input['thumbnailImage']);
            $request->fullImage->move(public_path('images/Admin/Bulletin/Achievement'), $input['fullImage']);
    
            Achievement::create($input);
     
            return redirect()->back()->with('success', 'Achievements Post Added Successfully');   
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
        $Achievement = Achievement::findOrFail($id);
        $Achievement->delete();
        return back()->with('delete', 'Announcement Post Deleted Successfully');   
    }
}
