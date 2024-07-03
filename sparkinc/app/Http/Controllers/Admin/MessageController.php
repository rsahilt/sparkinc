<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //index function to display all the table details
    public function index(){
        $title = "Messages Recieved";
        $messages = Message::all();
        $slug = "dashboardmessage";
        $totalMessages = Message::count();
        return view('admin.messages', compact('title', 'messages', 'slug', 'totalMessages'));
    }

    //store function to store the message
    public function store(Request $request){
        //validate the user input
        $validatedData= $request->validate([
            'firstname' => 'required|string|min:1|max:255',
            'lastname' => 'required|string|min:1|max:255',
            'email' => 'required|string|min:1|max:255',
            'message' => 'required|string|min:2|max:400',
        ]);

        Message::create($validatedData);

        return redirect('/contact')->with('success', 'Your message has been sent succefully!');
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('admin.messages')
            ->with('success', 'Message deleted successfully');
    }
}
