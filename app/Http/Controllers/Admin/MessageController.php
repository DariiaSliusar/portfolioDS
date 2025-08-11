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
}
