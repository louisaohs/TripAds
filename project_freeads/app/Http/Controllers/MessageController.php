<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(10);

        return view('Message.index', ['messages' => $messages]);
    }

    public function show($id)
    {
        $messages = Message::find($id);
        
        return view('Message.show', ['messages' => $messages]);
    }

    public function create()
    {
        return view('Message.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
            'destinataire' => 'required'
        ]);

        $message = new Message();
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->destinataire = $request->input('destinataire');
        $message->save();

        return redirect()->route('Message.index')->with('success', 'Message envoyé !');
    }

    public function showSentMessages($destinataire)
    {
        $messages = Message::where('destinataire', $destinataire)->orderBy('created_at', 'desc')->paginate(10);

        return view('Message.sent', ['messages' => $messages, 'destinataire' => $destinataire]);
    }
}
