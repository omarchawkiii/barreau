<div>
    <div class="product-area ptb-100">
        <div class="container">
            <div class="showing-result">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="showing-result-count">
                            <p>Filter par categorie</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="showing-top-bar-ordering">
                            <select wire:model="selectedCategory" class="form-select">
                                <option value="">All Categories</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse ($news as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="post-image">
                            <a href="blog-details.html">
                                <img src="{{ $item->thumbnail_url}}" alt="image">
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

                            <p>{!! $item->content !!}</p>

                            <a href="blog-details.html" class="default-btn">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <p> Pas d'article </p>
                @endforelse
                    
                {{ $news->links() }}
            </div>
        </div>
    </div>
</div>
