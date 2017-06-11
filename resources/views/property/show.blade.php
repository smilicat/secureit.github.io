@extends('layouts.main')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background: linear-gradient( rgba(000, 0, 0, 0.45),  rgba(0, 12, 27, 0.45)),
    url('/storage/{{$property->image}}') center center no-repeat;background-size: cover" />
    </header>

@section('content')
  <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   <div class="post-heading">
                        <h1>{{$property->title}}</h1>
                        <h2 class="subheading">{{$property->description}}</h2>
                       <span>Owner : {{$property->user->name }}. {{$property -> created_at->format('d M Y')}} </span>
                       
                    </div>
                </div>
            </div>
        </div>
    </article>

    <hr>
@stop




   

    <!-- Post Content -->
  

    <!-- Footer -->
   
