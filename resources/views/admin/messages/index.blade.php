@extends('layouts.admin.base')

@section('content')
    <section class="messages">
        <div class="messages_container">
            <div class="titlebar">
                <h1>Messages </h1>
            </div>
            @includeIf('includes.flash_message')
            <div class="table">

                <div class="table-filter">
                    <div>
                        <ul class="table-filter-list">
                            <li>
                                <p class="table-filter-link link-active">All</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-search">
                    <div>
                        <select class="search-select" name="" id="">
                            <option value="">Filter Message</option>
                        </select>
                    </div>
                    <div class="relative">
                        <input class="search-input" type="text" name="search" placeholder="Search Message...">
                    </div>
                </div>

                <div class="message_table-heading">
                    <p>Name</p>
                    <p>Email</p>
                    <p>Subject</p>
                    <p>Description</p>
                    <p>Status</p>
                    <p>Actions</p>
                </div>
                @foreach($messages as $message)
                <div class="message_table-items">
                    <p>
                        <a href="{{ route('admin.messages.edit', $message->id) }}" style="text-decoration:none;color:blue;">
                            {{ $message->name }}
                        </a>
                    </p>
                    <p>{{ $message->email }}</p>
                    <p>{{ $message->subject }}</p>
                    <p>{{ $message->description }}</p>
                    <p>
                        @if ($message->status == "1")
                            <span class="badge_read">
                                Read
                                <input id="status" class="hidden" type="radio" name="status" value="1" {{ (isset($message) && 1 == $message->status) ? 'checked' : '' }}>
                            </span>
                        @else
                            <span class="badge_unread">
                                Unread
                                <input id="status" class="hidden" type="radio" name="status" value="1" {{ (isset($message) && 1 == $message->status) ? 'checked' : '' }}>
                            </span>
                        @endif
                    </p>
                    <div>
                        <form action="{{ route('admin.messages.destroy', $message->id) }}" id="{{ $message->id }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button class="btn danger" onClick="return confirm('Are you sure you want to delete this message?');">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
