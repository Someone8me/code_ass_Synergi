@extends('layouts.public',['title' => 'User','wrapper_class' => ''])
		

@section('content')

<div class="page_container">
    <header>
        <h3>
            @if (isset($this_user))
                Edit Existing User {{ $this_user->id }}
            @else
                Create new user
            @endisset
        </h3>
    </header>
    <div class="page_container_content">
        @if (isset($this_user->id))
            <form action="{{ route('users.update',[$this_user->id]) }}" method="POST" enctype="multipart/form-data" class="basicform">
                @method('PUT')
        @else
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data" class="basicform">
        @endif


        <div class="input_field">
            <label for="username">User Name:</label>
            <input type="text" name="username" placeholder="Enter user name here...." maxlength="255" value="{{ $this_user->username ?? '' }}">
            @error('username')
                <p class="field_error">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="input_field">
            <label for="email">Email address:</label>
            <input type="text" name="email" placeholder="example.email@synergi.com" maxlength="255" value="{{ $this_user->email ?? '' }}">
            @error('email')
                <p class="field_error">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="input_field">
            <label for="comments">Comments</label>
            <textarea name="comments" id="comments" maxlength="2000" placeholder="Post comments here...">{{ $this_user->comments ?? '' }}</textarea>
            @error('comments')
                <p class="field_error">
                    {{ $message }}
                </p>
            @enderror
        </div>


        <div class="basicform_actions">
            @csrf

            @if (isset($this_user->id))
                <ul>
                    <li><button type="submit" name="action" id="update" value="{{ $this_user->id }}">Update</button></li>
                </ul>
            @else
                <ul>
                    <li><button type="submit" name="action" id="save" value="SAVED">Save</button></li>
                </ul>
            @endif
        </div><!--save-stngs end-->
    </div>
</div>


@endsection
