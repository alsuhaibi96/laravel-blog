@extends('layouts.layout')
@section('content')

    <article>
        <h1>{{$post->title}}</h1>

        <div>{!! $post->body !!}</div>

    </article>

@endsection
