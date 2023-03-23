<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Carbon\Carbon;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $contact = DB::table('contacts')->latest()->paginate(10);
        return view('admin.feedback', [
            'contact' => $contact
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
         Contact::create($request->all());

         $message = <<<EOT
         Subject: {$request->subject}
         Message: {$request->message}
         Email: {$request->email}
         Recipient: {$request->recipient}
         EOT;
 
         Http::post('https://discord.com/api/webhooks/1081126489141035028/I6bLN4bWmkFramdngrNIRtldmD1O6pR8TFpb7iPaZ160rXnzxHMwiJayerCoJB8ceoyg', [
            'username' => $request->name, 
            'content' => $message
         ]);

         return response()->json(['success' => true,
                'messages' => 'Data inserted successfully',
                'statusCode' => 200]
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'client' => $client,
            'message' => 'Retrieved Client',
        ]); 
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
        //
    }
}
