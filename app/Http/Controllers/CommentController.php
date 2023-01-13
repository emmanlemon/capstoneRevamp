<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $bulletin , $id = null)
    {
        if(Auth::user() != null){
            $input = $request->except(['page' ,'_token']);
                $input['bulletin'] = $bulletin;
                $input['bulletin_id'] = $id;
                $input['user_id'] = auth()->id();
                DB::table('comments')->insert($input);
                return redirect()->back()->with('success', 'Your Comment Added Successfully'); 
        }else {
            return redirect()->back()->with('error', 'You Need To Login First'); 
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
    public function destroy($bulletin , $bulletin_id=null , $id =null)
    {
        //  $sample = DB::table('comments')
        // ->where('bulletin' , $bulletin)
        // ->where('bulletin_id' , $bulletin_id)
        // ->where('id', $id)->delete();
    }
}
