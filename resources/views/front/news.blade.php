@extends('layouts.app')
@section('content')
    <div class="page-title-area bg-21">
        <div class="container">
            <div class="page-title-content">
                @if (isset($category))
                <h2 class="active">{{ $category?->title}}</h2>
                @else
                <h2 class="active">Actualités</h2>
                @endif
                <ul>
                    <li>
                        <a href="/">
                            Accueil
                        </a>
                    </li>
                    @if (isset($category))
                    <li class="active">{{ $category?->title}}</li>
                    @else
                    <li class="active">Actualités</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <section class="blog-column-three-area ptb-100">
        <div class="container">
            <div class="row">

                @forelse ($news as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="{{ $item->thumbnail_url }}" alt="image">
                            </a>
                        </div>

                        <div class="blog-content">
                            <div class="date">
                                <i class="bx bx-calendar"></i>
                                <span>{{$item->created_at}}</span>
                            </div>

                            <h3>
                                <a href="blog-details.html">{{ $item->title}}</a>
                            </h3>

                            <p>{!! Str::of( $item->content)->limit(120); !!}</p>

                            <a href="blog-details.html" class="default-btn">
                                <span>En savoir plus</span>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <p> Pas d'actualités </p>
                @endforelse
                    
               

                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
