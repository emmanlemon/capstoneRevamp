<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcademicController extends Controller
{
    public function __invoke($pages){
        $column = [
            DB::raw('GROUP_CONCAT(DISTINCT polls.title) AS polls'),
            DB::raw('GROUP_CONCAT(DISTINCT options.content) AS content'),
            DB::raw('SUM(vote) AS vote'),
            DB::raw('COUNT(vote) AS response')
        ];
        $polls = DB::table('polls')
        ->leftJoin('options', 'options.poll_id', '=', 'polls.id')
        ->where('status', 'STARTED')
        ->get();

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


        return view('academic.'.$pages , compact('polls' , 'total_response' , 'responses'));
    }
}
