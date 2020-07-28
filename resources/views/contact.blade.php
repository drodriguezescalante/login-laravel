@extends('/layouts/layout')

@section('title')Contact @endsection

@section('content')

  <h1>Contact</h1>
  <form method="POST" action="{{route('contact')}}">
    @csrf
      <input name="name" type="text" placeholder="Name" value="{{old('name')}}"/><br>
      {!! $errors->first('name','<small>:message</small><br>') !!}
      
      <input name="lastName" type="text" placeholder="Last name" value="{{old('lastName')}}"/><br>
      {!! $errors->first('lastName','<small>:message</small><br>') !!}

      <input name="email" type="text" placeholder="email@example.com" value="{{old('email')}}"/><br>
      {!! $errors->first('email','<small>:message</small><br>') !!}

      <input name="subject" type="text" placeholder="Subject" value="{{old('subject')}}"/><br>
      {!! $errors->first('subject','<small>:message</small><br>') !!}
      
      <textarea name="content" type="content" placeholder="Content" value="{{old('content')}}"></textarea><br>
      {!! $errors->first('content','<small>:message</small><br>') !!}
      <button>Send it!</button>
  </form>
@endsection
