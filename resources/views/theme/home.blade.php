@extends('layouts.theme')

@section('titulo' , 'Home-Diversoft Code')

@section('head')
@endsection

@section('header')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Diversoft Code</h1>
                        <span class="subheading">Tu blog de programacion</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('contenido')
    @for($i = 0 ; $i < 5 ; $i++)
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">
                    Man must explore, and this is exploration at its greatest
                </h2>
                <h3 class="post-subtitle">
                    Problems look mighty small from 150 miles up
                </h3>
            </a>
            <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on September 24, 2019</p>
        </div>
    @endfor
    <!-- Pager -->
    <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Posts anteriores&rarr;</a>
    </div>
@endsection
