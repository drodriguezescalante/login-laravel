@extends('/layouts/layout')
@section('title')Disclaimer @endsection
@section('content')
  <h1>Disclaimer</h1>
  <ul>
      @forelse ($variable as $item)
        <li>{{ $item['title'] }}</li>
      @empty
      <li>Por favor, cargar los términos.</li>
      @endforelse
  </ul>
@endsection
