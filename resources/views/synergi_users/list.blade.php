@extends('layouts.public')
		

@section('content')

<div class="page_container">
    <header>
        <h3>
            User Created
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
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="input_field">
            <label for="email">Email address:</label>
            <input type="text" name="email" placeholder="example.email@synergi.com" maxlength="255" value="{{ $this_user->email ?? '' }}">
            @error('email')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="input_field">
            <label for="comments">Comments</label>
            <textarea name="comments" id="comments" maxlength="2000" placeholder="Post comments here...">{{ $this_user->comments ?? '' }}</textarea>
            @error('comments')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>

        @if ($errors->any())
            <div class="cp-field">
                @foreach ($errors->all() as $error)
                    <li class="text-danger">
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif


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
