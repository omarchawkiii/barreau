@extends('layouts.app')
@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="banner-content">

                                <h1 class="wow animate__animated animate__fadeInDown" data-wow-delay="1s">ORDRE DES AVOCATS D’ALGER</h1>
                                <h2 class="wow animate__animated animate__fadeInDown text-center" data-wow-delay="1s">Savoir - Courage - Indépendance</h3>
                                <div class="banner-btn wow animate__animated animate__fadeInUp text-center" data-wow-delay="1s">
                                    <a href="pricing-style-one.html" class="default-btn">
                                        <span>En savoir plus </span>
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    {{-- Start Login  Area --}}
    <section id="login-section" class="my-5">
        <div class="container">
            <div class="login-container text-center">
              <h3 class="mb-5">Accédez à votre espace <span class="primay-color">Ordre des avocats d'Alger</span></h3>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex justify-content-center">
                    <div class="icon mb-3">
                        <img src="{{ asset('/assets/icons/icon_avocat.png') }}" class="img-thumbnail">
                      </div>
                    <div class="mr-3 ">
                        <input type="text" name="email" class="form-control rounded" placeholder="E-mail">
                    </div>
                    <div class="mx-3 ">
                        <input type="password" name="password" class="form-control rounded" placeholder="Mot de passe">
                    </div>
                    <div class="ml-3">
                        <button type="submit" class="default-btn rounded">Se connecter</button>
                    </div>
                </div>
                 @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                    </div>
                @endif
                
              </form>
              <p class="create-account mt-3">
                Vous n’avez pas de compte ? <a href="#" class="text-decoration-none">Créer un</a>.
              </p>
            </div>
          </div>
    </section>
    
     {{-- End Login  Area --}}

    <!-- Start Choose Us Area -->
    <section class="choose-us-area pt-100 pb-70 bg-barreau-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-us-content">
                        <div class="section-title">
                            <h2 class="text-center"><i class="bx bx-calendar"></i> Nos activités</h2>
                            <p class="text-center">Nous offrons une gamme complète de services juridiques, garantissant une expertise légale approfondie pour répondre aux besoins de nos clients. Notre engagement est de fournir des conseils fiables et une représentation efficace.</p>
                         </div>
                        <div class="choose-us-slider owl-carousel owl-theme ">
                            <div class="single-choose-us-box bg-dark text-white text-center">
                                <i class="bx bx-calendar "></i>
                                <span>CONSEIL JURIDIQUE ET REPRÉSENTATION</span>
                            </div>

                            <div class="single-choose-us-box bg-dark text-white text-center">
                                <i class="bx bx-globe"></i>
                                <span>DÉFENSE DES DROITS ET INTÉRÊTS DES CLIENTS</span>
                            </div>

                            <div class="single-choose-us-box bg-dark text-white text-center">
                                <i class="bx bx-user"></i>
                                <span>FORMATION ET PERFECTIONNEMENT DES AVOCATS</span>
                            </div>

                            <div class="single-choose-us-box bg-dark text-white text-center">
                                <i class="bx bx-calendar"></i>
                                <span>MÉDIATION ET RÉSOLUTION DES CONFLITS</span>
                            </div>

                            <div class="single-choose-us-box bg-dark text-white text-center">
                                <i class="bx bx-calendar"></i>
                                <span>ASSISTANCE LÉGALE POUR ENTREPRISES ET PARTICULIERS</span>
                            </div>
                            <div class="single-choose-us-box bg-dark text-white text-center">
                                <i class="bx bx-calendar"></i>
                                <span>20+ Years Work Experiences</span>
                            </div>

                            <div class="single-choose-us-box bg-dark text-white text-center">
                                <i class="bx bx-calendar"></i>
                                <span>20+ Years Work Experiences</span>
                            </div>
                            <div class="single-choose-us-box bg-dark text-white text-center">
                                <i class="bx bx-calendar"></i>
                                <span>20+ Years Work Experiences</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Choose Us Area -->

     <!-- Start Choose Us Area -->
     <section class="choose-us-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="choose-us-content p-5 bg-barreau-primary rounded">
                        <div class="section-title">
                            <h4 class="text-center"><i class="bx bx-calendar"></i> {{$event_category_annonces?->title}}</h4>
                            <p class="text-center text-dark">Restez au fait des développements importants! <br /> Ne manquez aucune mise a jour des annonces  </p>
                        </div>
                        @if ($event_category_annonces)
                        @foreach ($event_category_annonces?->events as $event)
                        <div class="card bg-barreau-light mb-2">
                            <div class="row no-gutters p-2">
                                <!-- Image à gauche -->
                                <div class="col-md-4">
                                    <img src="{{$event?->thumbnail_url}}" class="card-img" alt="Image">
                                </div>
                                <!-- Contenu à droite -->
                                <div class="col-md-8 d-flex align-items-start flex-column">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$event?->title}}</h5>
                                        <a href="" class="btn btn-link read-more"><i class=" bx bx-plus bx-border-circle bx-sm bx-border-circle-barreau"  > </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        

                        <div class=" text-center">
                            <a href="{{ route('front.event.byCategory',['category_id'=>$event_category_annonces->id])}}" class="default-btn btn  btn-light-barreau ">
                                <span>Plus de nouvelle </span>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="choose-us-content p-5 bg-barreau-primary rounded">
                        <div class="section-title">
                            <h4 class="text-center"><i class="bx bx-calendar"></i> {{$event_category_deliberation?->title}}</h4>
                            <p class="text-center text-dark">Restez au fait des développements importants! <br /> Ne manquez aucune mise a jour des annonces</p>
                        </div>
                        @if ($event_category_deliberation)
                        @foreach ($event_category_deliberation?->events as $event)
                        <div class="card bg-barreau-light mb-2">
                            <div class="row no-gutters p-2">
                                <!-- Image à gauche -->
                                <div class="col-md-4">
                                    <img src="{{$event?->thumbnail_url}}" class="card-img" alt="Image">
                                </div>
                                <!-- Contenu à droite -->
                                <div class="col-md-8 d-flex align-items-start flex-column">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$event?->title}}</h5>
                                        <a href="#" class="btn btn-link read-more"><i class=" bx bx-plus bx-border-circle bx-sm bx-border-circle-barreau"  > </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                        <div class=" text-center">
                            <a href="{{ route('front.event.byCategory',['category_id'=>$event_category_deliberation->id])}}" class="default-btn btn  btn-light-barreau ">
                                <span>Plus de nouvelle </span>
                            </a>
                        </div>

                        @endif
                    </div>

                </div>
                <div class="col-lg-4 ">
                    <div class="choose-us-content p-5 bg-barreau-primary rounded">
                        <div class="section-title">
                            <h4 class="text-center"><i class="bx bx-calendar"></i> {{$event_category_memoires?->title}}</h4>
                            <p class="text-center text-dark">Restez au fait des développements importants! <br /> Ne manquez aucune mise a jour des annonces</p>
                        </div>

                        @if ($event_category_memoires)
                        @foreach ($event_category_memoires?->events as $event)
                        <div class="card bg-barreau-light mb-2">
                            <div class="row no-gutters p-2">
                                <!-- Image à gauche -->
                                <div class="col-md-4">
                                    <img src="{{$event?->thumbnail_url}}" class="card-img" alt="Image">
                                </div>
                                <!-- Contenu à droite -->
                                <div class="col-md-8 d-flex align-items-start flex-column">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$event?->title}}</h5>
                                        <a href="#" class="btn btn-link read-more"><i class=" bx bx-plus bx-border-circle bx-sm bx-border-circle-barreau"  > </i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class=" text-center">
                            <a href="{{ route('front.event.byCategory',['category_id'=>$event_category_memoires->id])}}" class="default-btn btn  btn-light-barreau ">
                                <span>Plus de nouvelle </span>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Us Area -->

    <!-- Start Blog Area -->
    <section class="blog-area ptb-100 bg-color">
        <div class="container">
            <div class="section-title">
                <h2> <i class="bx bx-news"></i>  Actualités</h2>
                <p>Plongez-vous dans l'actualité visuelle et découvrez des histoires uniques, des moments émouvants et des perspectives fascinantes, le tout à travers des médias immersifs.</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="section-title mb-4">
                        <h4>{{$news_category_photos?->title}}</h2>
                    </div>
                    @if ($news_category_photos)
                    <div class="row">
                        @foreach ($news_category_photos?->news as $news)
                        <div class="single-blog-post col-md-5">
                            <div class="post-image">
                                <a href="blog-details.html">
                                    <img src="{{$news?->thumbnail_url}}" alt="image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h5>
                                    <a href="blog-details.html">{{$news?->title}}</a>
                                </h5>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <div class=" text-center">
                        <a href="{{ route('front.news.byCategory',['category_id'=>$news_category_photos->id])}}" class="default-btn btn  ">
                            <span>Voir plus </span>
                        </a>
                    </div>
                    @endif
                </div>

                <div class="col-md-6">
                    <div class="section-title mb-4">
                        <h4>{{$news_category_videos?->title}}</h2>
                    </div>
                    @if ($news_category_videos)
                    <div class="row">
                        @foreach ($news_category_videos?->news as $news)
                        <div class="single-blog-post col-md-5">
                            <div class="post-image">
                                <a href="blog-details.html">
                                    <img src="{{$news?->thumbnail_url}}" alt="image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h5>
                                    <a href="blog-details.html">{{$news?->title}}</a>
                                </h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class=" text-center">
                        <a href="{{ route('front.news.byCategory',['category_id'=>$news_category_videos->id])}}" class="default-btn btn  ">
                            <span>Voir plus </span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </section>
    <!-- End Blog Area -->

    <section class="subscription bg-white  ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-center text-md-left">
                        <h4 class="flex-fill">S'abonner à notre newsletter</h4>
                        <p>Accedez a du contentu exclusif et restez au courant des derneire nouvelles en vous inscrivant a notre liste de diffusion </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="#" class="row flex-fill">
                        <div class="col-lg-8 my-md-2 my-2">
                        <input type="email" class="form-control px-4 border-0 w-100 text-md-left" id="email" placeholder="Entrer votre adresse E-mail" name="email">
                        </div>
                        <div class="col-lg-4 my-md-2 my-2">
                            <a href="contact-us.html" class="default-btn btn">
                                <span>S'inscrire</span>
                            </a>
                        </div>
                    </form>
                    <p>Accedez a du contentu exclusif et restez au courant des derneire nouvelles  </p>
                </div>

            </div>
        </div>

    </section>

    <!-- Start Partner Area -->
    <div class="partner-area bg-color ptb-70">
        <div class="container">
            <div class="section-title">
                <h2><i class="bx bx-male-female" ></i> partenaires</h2>
                <p>Nous collaborons avec des partenaires stratégiques pour offrir des services juridiques de qualité supérieure.</p>
            </div>
            <div class="row">
                <div class="partner-slider owl-carousel owl-theme">
                    <div class="partner-item">
                        <a href="about-us.html">
                            <img src="assets/img/partner/partner-1.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="about-us.html">
                            <img src="assets/img/partner/partner-2.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="about-us.html">
                            <img src="assets/img/partner/partner-3.png" alt="Image">
                        </a>
                    </div>
                    <div class="partner-item">
                        <a href="about-us.html">
                            <img src="assets/img/partner/partner-4.png" alt="Image">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

@endsection


@section('customcss')
    <style>

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title {
            align-self: flex-start;
        }
        .read-more {
            align-self: flex-end;
        }


        /*   NewsLetter ***/



        .subscription.bg-white {
            background: none;
        }

        .bg-white {
            background-color: #fff!important;
        }

        .subscription.bg-white .subscription-wrapper {
            background: #fff;
        }

        .subscription-wrapper {

            padding: 70px 50px;
            z-index: 1;
            width: 100%;


        }

        .subscription-wrapper {

        }

        .subscription-content {
            -webkit-transform: skewY(-1deg);
            transform: skewY(-1deg);
        }

        h3, .h3 {
            font-size: 30px;
        }

        .flex-fill {
            -ms-flex: 1 1 auto!important;
            flex: 1 1 auto!important;
        }

        .subscription.bg-white .form-control {
            border: 1px solid #ebebeb !important;
        }

        .subscription-wrapper .form-control {
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 45px;
        }

        .subscription-wrapper .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            outline: 0;
            box-shadow: none;
        }











    </style>
@endsection
