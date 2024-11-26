@extends('layouts.app')
@section('content')
    <div class="page-title-area bg-23">
        <div class="container">
            <div class="page-title-content">
                <h2 class="active">Actualités</h2>
                <ul>
                    <li>
                        <a href="/">
                            Accueil
                        </a>
                    </li>
                    <li class="active">{{$news->title}}</li>
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
                            <img src="{{$news->thumbnail_url}}" alt="{{$news->title}}">
                        </div>

                        <div class="blog-top-content">
                            <div class="news-content">
                                <ul class="admin">
                                    

                                    <li class="float">
                                        <i class="bx bx-calendar-alt"></i>
                                        {{ $news->created_at }}
                                    </li>
                                </ul>

                                <h3>{{$news->title}}</h3>

                                <p>{!! $news->content !!}</p>
                            </div>

                        </div>


                    </div>
                </div>

                
            </div>
        </div>
    </div>
@endsection
