@extends('layouts.app')
@section('content')
<link href="{{ asset('css/pagesIndex.css') }}" rel="stylesheet" type="text/css" >

<div class="text-center">
        
        <div >
                <div class="jumbotron">
                        <h1 class="display-4 text-light">Your Blogging Journey Starts Here</h1>
                        <p class="lead text-light">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p class="text-light">It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class="btn btn-dark btn-lg" href="/register" role="button">Sign Up Now!</a>
                </div>
        </div>

        {{-- Cards Section --}}
        <section id="news">
        <div class="section-content">
                <div class="container">
                <h3><em>Latest news</em></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. </p>
                <hr>
                <div class="row">
                <div class="col-sm-12">
                <div class="card-columns">
        <div class="card">
                <img src="https://images.pexels.com/photos/1076801/pexels-photo-1076801.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="fish in a aquarium">
                <div class="card-body">
                <h5 class="card-title">Is it easy to build websites?</h5>
                <p class="card-text">Yes. We offer a few different ways to create your own free website, so you can choose the creation process that works best for you. Need to get online fast? Answer a few simple questions and Wix ADI (Artificial Design Intelligence) will build a professional website for you in under 10 minutes. If you want 100% design freedom, start from scratch and drag and drop the website design features you need in the Opulennce Editor</p>
                </div>
        </div>
        <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                <p>“Every child is an artist, the problem is staying an artist when you grow up.”</p>
                <footer class="blockquote-footer">
                <small class="text-muted">
                        Pablo Picasso<cite title="Source Title">in great thoughts</cite>
                </small>
                </footer>
                </blockquote>
        </div>
        <div class="card">
                <img src="https://images.pexels.com/photos/889089/pexels-photo-889089.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="Gloomy picture">
                <div class="card-body">
                <h5 class="card-title">Mobile friendly websites?</h5>
                <p class="card-text">Your Wix website automatically comes with a mobile-optimized version that looks great on smaller screens. The Wix Mobile Editor makes it easy to customize your mobile site even more.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
        </div>
        <div class="card bg-dark text-white text-center p-3">
                <blockquote class="blockquote mb-0">
                <p>“Imagination is the beginning of creation. You imagine what you desire, you will what you imagine, and at last, you create what you will.”</p>
                <footer class="blockquote-footer text-white">
                <small>
                George Bernard Shaw<cite title="Source Title"> in summit of life</cite>
                </small>
                </footer>
                </blockquote>
        </div>
        <div class="card text-center">
                <div class="card-body">
                <h5 class="card-title">Should I hire a web developer?</h5>
                <p class="card-text">Our free website builder is intuitive to use. Looking for a specific web service? Explore the Wix Arena to find a certified freelancer or agency at a price that fits your budget.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
        </div>
        <div class="card">
                <img src="https://images.pexels.com/photos/1181226/pexels-photo-1181226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="artistic-celebration">
        </div>
        <div class="card p-3 text-right">
                <blockquote class="blockquote mb-0">
                <p>“Think left and think right and think low and think high. Oh, the thinks you can think up if only you try!”</p>
                <footer class="blockquote-footer">
                <small class="text-muted">
                        Dr. Seuss<cite title="Source Title"> in the paragon in the game of life</cite>
                </small>
                </footer>
                </blockquote>
        </div>
        <div class="card">
                <div class="card-body">
                <h5 class="card-title">How do I build and host my site for free?</h5>
                <p class="card-text">When you create a free website with Wix, you get reliable, scalable and free web hosting. All your web content will be stored on secure servers located around the world. So no matter where your visitors come from, your site will load fast. </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
        </div>
        </div>
                </div>
                </div>
                </div>
        </div>
        </section>
                
</div>
        
@endsection
   
