<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Achievement;
use App\Models\Announcement;
use App\Models\News;
use Auth;
use Session;

class HomeController extends Controller
{
    public function bulletins($bulletin, $id = null){
        
            $bulletinData = DB::table($bulletin)->latest()->paginate(5);
            $bulletinId = DB::table($bulletin)->where('id', $id)->first();
            $latestNews = DB::table('news')->latest()->take(2)->get();
            $latestEvent = DB::table('news')->latest()->get();
         
            return view('bulletin.'.$bulletin , compact('bulletinData','bulletinId' ,'latestNews' ));
    }
   
    public function index(){
        
        $role = Auth::user()->role;
        if(Auth::user()->role === null)
        {
            return view('index');
        }
        elseif($role === "0")
        {
            return view('user.dashboard');
        }
        else
        {
            return redirect('/admin');
        }
    }

    public function indexShow(){
        $achievements = DB::table('achievements')->latest()->first();
        $announcements = DB::table('announcements')->latest()->first();      
        $news = DB::table('news')->latest()->take(3)->get();

        return view('index', [
            'achievement' => $achievements,
            'announcement' => $announcements,
            'news' => $news
        ]);
    }
}