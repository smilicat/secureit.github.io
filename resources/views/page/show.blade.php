@extends('layouts.main')
@section('title', ' - '. $page->title)

@section('header')
     <header class="intro-header"   style="background: linear-gradient( rgba(000, 0, 0, 0.45),  rgba(0, 12, 27, 0.45)),
   url('/storage/{{ $page->image }}') center center no-repeat;background-size: cover"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{$page->title}}</h1>
                        <h2 class="subheading">{{$page->excerpt}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
@section('content')
<article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  {!! $page->body!!} 

                </div>
            </div>
        </div>
    </article>

    <hr>
@stop
