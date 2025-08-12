@extends('layouts.admin.base')

@section('content')
    <section class="about">
        <form action="{{ route('admin.messages.update_status', $message->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="titlebar">
                <h1>Edit Message</h1>
            </div>
            <div class="card-wrapper">
                <div class="wrapper_left">
                    <div class="card">
                        <label>Title :</label>
                        <p>{{ $message->name }}</p>
                        <br>
                        <label>Email :</label>
                        <p>{{ $message->email }}</p>
                        <br>
                        <label>Subject :</label>
                        <p>{{ $message->subject }}</p>
                        <br>
                        <label>Description :</label>
                        <p>{{ $message->description }}</p>
                        <br>
                        <div>
                            <label>Status :</label>
                            <div>
                                <input id="status" type="radio" name="status" value="1" {{ (isset($message) && 1 == $message->status) ? 'checked' : '' }}>
                                <span>Read</span>
                            </div style="display:inline">
                            <div>
                                <input id="status" type="radio" name="status" value="0" {{ (isset($message) && 0 == $message->status) ? 'checked' : '' }}>
                                <span>Unread</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="titlebar">
                <button>Update Message</button>
            </div>
        </form>
    </section>
@endsection
