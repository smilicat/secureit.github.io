@extends('layouts.main')
@section('header')
 <header class="intro-header" style="background: linear-gradient( rgba(000, 0, 0, 0.45),  rgba(0, 12, 27, 0.45)),
    url('/img/main-bg.jpg')center center no-repeat;background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Secure<span>IT</span></h1>
                        <hr class="small">
                        <span class="subheading">We will make you feel <strong>secure</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop
@include('partials.title')
@section('content')
  <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1>Welcome to Secure<strong>IT</strong> main page</h1>
            <p>We will try to make your life more secure</p>
               
            </div>
        </div>
       @stop