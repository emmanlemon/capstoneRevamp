<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Poll;
use App\Models\Option;
use App\Models\Vote;
use App\Enums\PollStatus;
use Auth;

class PollController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $end_at = DB::table('polls')->select('title','status','id')->paginate(10);
        // $polls = DB::table('polls')
        // ->leftJoin('options', 'options.poll_id', '=', 'polls.id')
        // ->get();
        
        // return view('admin.poll' , compact('polls' , 'end_at'));
    
        $polls = DB::table('polls')->select('title','status','id')->paginate(10);
        return view('admin.poll', compact('polls'));
    
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
        DB::table('polls')->select(array('id' => $request));
        $poll = Poll::create($request->except('options' , '_token'));
        $poll->options()->createMany($request->options);
        return redirect()->back()->with('success', 'Poll Added Successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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

    public function showPoll(Poll $poll)
    {
        $poll = $poll->load('options');
        return view('admin.showPoll' , compact('poll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poll $poll)
    {
        $poll->title = $request->title;
        $poll->status = $request->status;
        foreach ($request->pollId as $key => $value) {
            $data = [             
                'content' => $request->options[$key],
            ];         
            Option::where('id',$request->pollId[$key])
            ->update($data); 
        }
        $poll->save();
        return back()->with('update', 'Poll Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poll $poll)
    {
        $poll->options()->delete();
        $poll->delete();
        return back()->with('delete', 'Poll Deleted Successfully');
    }

    public function printPoll(Poll $poll){
        $poll = $poll->load('options');
        return view('admin.print.printPoll' , compact('poll'));
    }

    public function show(Poll $poll)
    {
        $poll = $poll->load('options');
     
        $selectedOption = $poll->votes()->where('user_id', auth()->id())->orderBy('created_at', 'DESC')->first()?->option_id;
       
        if ($poll->is(auth()->user())) {
            return view('poll', compact('poll' ,'selectedOption'));
        }

        abort_if($poll->status != PollStatus::STARTED->value, 404);

        return view('poll', compact('poll', 'selectedOption'));
    }

    public function vote(Request $request, Poll $poll)
    {   
        abort_if($poll->status != PollStatus::STARTED->value, 404);
        if (Auth::user() != null) {

    $existingVote = Vote::where('poll_id', $poll->id)->where('user_id', $request->user()->id)->first();
    if ($existingVote) {
        return redirect()->back()->with('error', 'You have already voted on this poll.'); 
    }
    
    
    Vote::create(['poll_id' => $poll->id ,'user_id'=>auth()->id() , 'option_id'=>$request->option_id, 'voted' => 'sample']);
    
    // DB::table('votes')->insert(['poll_id' => $poll->id ,'user_id'=>auth()->id() , 'option_id'=>$request->option_id, 'voted' => 'sample']);
    // $poll->votes()->updateorCreate(['user_id'=>auth()->id()],['option_id'=>$request->option_id] , ['voted' => true]);

    $newOption =  Option::find($request->option_id);
    $newOption->increment('votes_count');

    // if ($selectedOption) {
    //         $selectedOption->decrement('votes_count');
    // }

    $selectedOption = $newOption;
    return redirect()->back()->with('success', 'Thank You for Your Vote!');
}else{
    return redirect()->back()->with('error', 'You Need To Login First'); 
}
            }
}
