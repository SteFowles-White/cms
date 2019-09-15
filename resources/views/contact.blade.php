
<!-- This means it will include all the layouts.app.bade.php file when the page is rendered-->

@extends('layouts.app')

<!-- this is the start of the content that is yeilded-->
@section('content')


<h1> This is my First Lavavel Page </h1>

<p>This is my first step to making a cms</p>

<p>Here are some peoples anmes </p>

@if (count($people))


    <ul>
    @foreach ($people as $person)
        <li>{{ $person }}</li>
        
    @endforeach
    </ul>

@endif

@stop
<!-- This is the end of the content that is yielded -->



@section('footer')

<script>alert('hello visitor')</script>

@stop