@extends('app')
@section('content')

<form method="POST" action="/contact-us">
    
<input type="text" name="name" placeholder="name"> <br>
<textarea name="message" cols="30" rows="10" placeholder="message"></textarea> <br>
 <button type="submit">send</button>
</form>

@stop