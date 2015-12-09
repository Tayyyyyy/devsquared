@extends('app')

@section('content-1')
    <div class="home">
        <a id="home"></a><h2>Home</h2>
    </div>
    <div class="who">
        <a id="who"></a><h2>Who</h2>
    </div>
    <div class="what">
        <a id="what"></a><h2>What</h2>
    </div>
    <div class="how">
        <a id="how"></a><h2>How</h2>
    </div>
    <div class="contact">
        <a id="contact"></a><h2>Content</h2>
    </div>
    <div class="blog">
        <a id="blog"></a><h2>Blog</h2>
    </div>
@stop

@section('content-2')
    <h1>Menu</h1>
    <ul>
        <a href="#home"><li>home</li></a>
        <a href="#who"><li>who</li></a>
        <a href="#what"><li>what</li></a>
        <a href="#how"><li>how</li></a>
        <a href="#contact"><li>contact</li></a>
        <a href="#blog"><li>blog</li></a>
    </ul>
@stop


