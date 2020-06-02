@extends('layouts.app')

@section('content')
<form action="send" method="post">
    @csrf
    <div class="container col-6">
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId"
                placeholder="Please Enter an Email">
            <small id="helpId" class="form-text text-muted">Enter Email to Send it the Message</small>
        </div>

        <div class="form-group">
            <label for="message">Message :</label>
            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary float-right">Send</button>
    </div>
</form>
@endsection