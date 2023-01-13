<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Poll;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($pages){
        if($pages == 'feedback'){
            $contact = DB::table('contacts')->latest()->paginate(10);
            return view('admin.feedback', [
                'contact' => $contact
            ]);
        }else{
            $column = [
                DB::raw('GROUP_CONCAT(DISTINCT polls.title) AS polls'),
                DB::raw('GROUP_CONCAT(DISTINCT options.content) AS content'),
                DB::raw('SUM(vote) AS vote'),
                DB::raw('COUNT(vote) AS response')
            ];
            $polls = DB::table('polls')->select('title','status','id','created_at')->paginate(10);

            
             $responses = DB::table('responses')
             ->select($column)
            ->leftJoin('options', 'options.id', '=', 'responses.option_id')
            ->leftJoin('polls', 'polls.id', '=', 'responses.poll_id')
            ->groupBy('option_id', 'responses.poll_id')
            ->where('polls.status', 'STARTED')
            ->get();

            $total_response = $responses->groupBy('option_id')->map(function ($row) {
                return $row->sum('vote');
            });

            return view('admin.'.$pages , compact('responses','polls' ,'total_response'));
        }
    }
}
