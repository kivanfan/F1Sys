@extends('layouts.app')
@section('content')
    <div class="content-box">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <div id="app">
                    <h1>Test Chat Room @{{usersInRoom.length}} <span v-for="user in usersInRoom">@{{user.name}} </span>
                    </h1>
                    <chat-log :messages="messages"></chat-log>
                    <chat-composer v-on:messagesent="addMessage"></chat-composer>
                </div>
            </div>
        </div>
    </div>

@endsection
