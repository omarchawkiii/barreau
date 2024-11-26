@extends('layouts.app')
@section('content')
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2 class="active">Evénement</h2>
                <ul>
                    <li>
                        <a href="/">
                            Accueil
                        </a>
                    </li>
                    <li class="active">{{$event->title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <div class="blog-details-img">
                            <img src="{{$event->thumbnail_url}}" alt="{{$event->title}}">
                        </div>

                        <div class="blog-top-content">
                            <div class="news-content">
                                <ul class="admin">
                                    

                                    <li class="float">
                                        <i class="bx bx-calendar-alt"></i>
                                        {{ $event->created_at }}
                                    </li>
                                </ul>

                                <h3>{{$event->title}}</h3>

                                <p>{!! $event->content !!}</p>
                            </div>

                        </div>


                    </div>
                </div>

                
            </div>
        </div>
    </div>
@endsection
