@extends('layouts.layout')
@section('title', 'Блог Путешественника :: ' . $articles->title)
@section('content')
    <div class="col-12 col-lg-9 mb-5">
        <!-- Single Blog Details -->
        <article class="single-blog-details">
            <!-- Blog Thumb -->
            <div class="blog-thumb">
                <a href="{{ route('articles.single', ['slug' => $articles->slug]) }}"><img src="{{ $articles->getImage() }}" alt=""></a>
            </div>
            <!-- Blog Content -->
            <div class="blog-content digimax-blog p-3">
                <!-- Meta Info -->
                <div class="meta-info d-flex flex-wrap align-items-center py-2">
                    <ul>

                        <li class="d-none d-md-inline-block p-2"><i class="fa fa-calendar-day"></i> {{ $articles->getPostDate() }}</li>
                        <li class="d-inline-block p-2">
                            <a href="{{ route('categories.single', ['slug' => $articles->category->slug]) }}">
                                <i class="fa fa-hashtag"></i> {{ $articles->category->title }}
                            </a>
                        </li>
                        <li class="d-inline-block p-2"><i class="fa fa-eye"></i> {{ $articles->views }} </li>

                            <li class="d-inline-block p-2">
                                <i class="fa fa-tag"></i> Теги:
                                @foreach($articles->tags as $tag)
                                <a style="font-weight: bold;" href="{{ route('tags.single', ['slug' => $tag->slug]) }}"> {{ $tag->title }}</a>
                                @endforeach
                            </li>


                    </ul>
                    <!-- Blog Share -->
                    <div class="blog-share ml-auto d-none d-sm-block">
                        <!-- Social Icons -->
                        <div class="social-icons d-flex justify-content-center">
                            <a class="bg-white facebook" href="#">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="bg-white twitter" href="#">
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="bg-white google-plus" href="#">
                                <i class="fab fa-google-plus-g"></i>
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Blog Details -->
                <div class="blog-details">
                    <h3 class="blog-title py-3">{{ $articles->title }}</h3>
                    <div>
                        {!! $articles->content !!}
                    </div>
                </div>
            </div>
            <!-- Blog Comments -->
            @include('layouts.comments')
        </article>
    </div>

@endsection
