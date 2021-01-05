@extends('layouts.app')

@section('content')
    <div class="container">
       @guest
       <h1>Hello Guest</h1>    
       @else
       <h1>Hello Admin</h1>    
       @endguest
    </div>
@endsection
