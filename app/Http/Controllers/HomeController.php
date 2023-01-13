<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Achievement;
use App\Models\Announcement;
use App\Models\News;
use App\Models\User;
use Auth;
use Session;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function bulletins($bulletin, $id = null){
    
         $comments = DB::table('users')
        ->leftJoin('comments', 'comments.user_id', '=', 'users.id')
        ->where('bulletin_id', $id)
        ->where('bulletin' , $bulletin)
        ->orderBy('comments.id', 'DESC')
        ->paginate(5);

            $user = Auth::user();
            $bulletinData = DB::table($bulletin)->latest()->paginate(5);
            $bulletinId = DB::table($bulletin)->where('id', $id)->first();
            $latestNews = DB::table('news')->latest()->take(2)->get();
            $latestEvent = DB::table('upcoming_events')->latest()->take(1)->get();
            return view('bulletin.'.$bulletin , compact('bulletinData','bulletinId' ,'latestNews', 'latestEvent','user' , 'comments'));
    }
   
    public function index(){
        
        $user = Auth::user();
        $role = Auth::user()->role;
        if(Auth::user()->role === null)
        {
            return view('index');
        }
        elseif($role === "0")
        {
            $user = Auth::user();
            $achievements = DB::table('achievements')->latest()->first();
            $announcements = DB::table('announcements')->latest()->first(); 
            $polls = DB::table('polls')->where('status', 'STARTED')->first();     
            $events = DB::table('upcoming_events')->latest()->first();    
            $news = DB::table('news')->latest()->take(3)->get();
    
            return view('index', [
                'user' => $user,
                'achievement' => $achievements,
                'announcement' => $announcements,
                'news' => $news,
                'event' => $events,
                'polls' => $polls
            ]);
        }
        else
        {
            return redirect('/admin/dashboard');
        }
    }

    public function indexShow(){

        $achievements = DB::table('achievements')->latest()->first();
        $polls = DB::table('polls')->where('status', 'STARTED')->first();
        $announcements = DB::table('announcements')->latest()->first();      
        $events = DB::table('upcoming_events')->latest()->first();    
        $news = DB::table('news')->latest()->take(3)->get();

        return view('index', [
            'achievement' => $achievements,
            'announcement' => $announcements,
            'news' => $news,
            'event' => $events,
            'polls' => $polls
        ]);
    }
}