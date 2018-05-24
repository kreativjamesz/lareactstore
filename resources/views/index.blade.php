@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div id="sidebar">
                    <div class="logo" style="padding-bottom: 90px;text-align: center;">
                        <img src="{{asset('images/defiantmediacomicslogo.jpg')}}" class="img-fluid" alt="Company Logo" width="200">
                    </div>
                    <div class="search">
                        <form class="bd-search d-flex align-items-center">
                            <input 
                                type="search" 
                                class="form-control ds-input flat" 
                                id="search-input" 
                                placeholder="Search..." 
                                autocomplete="off" 
                                spellcheck="false" 
                                role="combobox" 
                                aria-autocomplete="list" 
                                aria-expanded="false" 
                                aria-owns="algolia-autocomplete-listbox-0" 
                                dir="auto" 
                                style="position: relative; vertical-align: top;">
                        </form>
                    </div>
                    <div class="recents">
                        <h5 class="recent-tits">Recent Posts</h5>
                        <div class="posts">
                            <div class="post bb-1">
                                <p class="post-date">Thursay, May 22, 2018</p>
                                <p class="post-tits"><b><a href="/">Fourth Post</b></a></p>
                                <p class="post-by">Post by: <b>John Doe</b></p>
                            </div>
                            <div class="post bb-1">
                                <p class="post-date">Thursay, May 22, 2018</p>
                                <p class="post-tits"><b><a href="/">Third Post</b></a></p>
                                <p class="post-by">Post by: <b>John Doe</b></p>
                            </div>
                            <div class="post bb-1">
                                <p class="post-date">Thursay, May 22, 2018</p>
                                <p class="post-tits"><b><a href="/">Second Post</b></a></p>
                                <p class="post-by">Post by: <b>John Doe</b></p>
                            </div>
                            <div class="post bb-1">
                                <p class="post-date">Thursay, May 22, 2018</p>
                                <p class="post-tits"><b><a href="/">First Post</b></a></p>
                                <p class="post-by">Post by: <b>John Doe</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('images/arts/carousel/scroll1.jpg')}}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Featured Title 1</h5>
                                        <p>amazingcontent.com</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/arts/carousel/scroll2.jpg')}}" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Featured Title 2</h5>
                                        <p>amazingcontent.com</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/arts/carousel/scroll3.jpg')}}" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Featured Title 3</h5>
                                        <p>amazingcontent.com</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 cats">
                        <div class="row pb-1">
                            <div class="col" style="padding-left: 0px;">
                                <div class="some-cat">
                                    <img class="d-block w-100" src="{{asset('images/arts/cats/cats-1.jpg')}}" alt="First slide">
                                    <div class="bot-overlay">
                                        <p class="tits">Manga Comics</p>
                                        <span class="btn-go-right btn-1">></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-1">
                            <div class="col" style="padding-left: 0px;">
                                <div class="some-cat">
                                    <img class="d-block w-100" src="{{asset('images/arts/cats/cats-2.jpg')}}" alt="First slide">
                                    <div class="bot-overlay">
                                        <p class="tits">Anime Magazine</p>
                                        <span class="btn-go-right btn-2">></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-1">
                            <div class="col" style="padding-left: 0px;">
                                <div class="some-cat">
                                    <img class="d-block w-100" src="{{asset('images/arts/cats/cats-3.jpg')}}" alt="First slide">
                                    <div class="bot-overlay">
                                        <p class="tits">International Magazines</p>
                                        <span class="btn-go-right btn-3">></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="featured-news">
                            <div class="header">
                                <h5 class="feat-news-tites">New Releases</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <img class="d-block w-100" src="{{asset('images/scroll-promo.jpg')}}" alt="First slide">
                    </div>
                    <div class="col">
                        <img class="d-block w-100" src="{{asset('images/scroll-promo.jpg')}}" alt="First slide">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <img class="d-block w-100" src="{{asset('images/scroll-promo.jpg')}}" alt="First slide">
                    </div>
                    <div class="col">
                        <img class="d-block w-100" src="{{asset('images/scroll-promo.jpg')}}" alt="First slide">
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
@endsection