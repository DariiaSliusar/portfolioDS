<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::query()->orderBy('id', 'desc')->get();
        return view('admin.messages.index', compact('messages'));
    }

    public function edit($id)
    {
        $message = Message::query()->find($id);
        return view('admin.messages.edit', compact('message'));
    }

    public function updateStatus(Request $request, $id)
    {
        $message = Message::query()->find($id);
        $message->status = $request->status;
        $message->save();
        return redirect()->route('admin.messages.index')->with('flash_message', 'Message status updated successfully.');
    }

    public function destroy($id)
    {
        $message = Message::query()->find($id);
        $message->delete();
        return redirect()->route('admin.messages.index')->with('flash_message', 'Message deleted successfully.');
    }
}
