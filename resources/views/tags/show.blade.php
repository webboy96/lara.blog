@extends('layouts.tag_layout')

@section('title', 'Блог Путешественника :: Статьи c тегом: ' . $tag->title)

@section('content')
    <div class="col-12 col-lg-9">
        <div class="row">
            <div class="col-12 col-md-12">
                <!-- Single Blog -->
                <div class="single-blog res-margin">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <h3 class="blog-title my-3">
                            @if ($articles->count())
                                Статьи c тегом: {{ $tag->title }}
                            @else Нет статей c тегом: {{ $tag->title }}
                                @endif
                        </h3>
                    </div>
                </div>
            </div>
            @if ($articles->count())
            @foreach($articles as $article)
                <div class="col-12 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog res-margin">
                        <!-- Blog Thumb -->
                        <div class="blog-thumb">
                            <a href="{{ route('articles.single', ['slug' => $article->slug]) }}"><img src="{{ $article->getImage() }}" alt=""></a>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Meta Info -->
                            <ul class="meta-info d-flex justify-content-between">
                                <li><a href="{{ route('categories.single', ['slug' => $article->category->slug]) }}"><i class="fa fa-hashtag"></i> {{ $article->category->title }}</a></li>
                                <li><i class="fa fa-calendar-day"></i> {{ $article->getPostDate() }}</li>
                                <li><i class="fa fa-eye"></i> {{ $article->views }} </li>
                            </ul>
                            <!-- Blog Title -->
                            <h3 class="blog-title my-3"><a href="{{ route('articles.single', ['slug' => $article->slug]) }}">{{ $article->title }}</a></h3>
                            <div>
                                {!! $article->cutDescription() !!}
                            </div>
                            <a href="{{ route('articles.single', ['slug' => $article->slug]) }}" class="blog-btn mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Pagination -->
                {{--<ul class="pagination justify-content-center">--}}
                {{ $articles->links() }}
                {{--                <li class="disabled px-1">
                                    <a href="#" aria-label="Previous">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </li>
                                <li class="px-1"><a href="#">1</a></li>
                                <li class="active px-1"><a href="#">2</a></li>
                                <li class="px-1"><a href="#">3</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>--}}
                {{--</ul>--}}
            </div>
        </div>
    </div>
@endsection




