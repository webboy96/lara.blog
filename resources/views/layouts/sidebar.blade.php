<div class="col-12 col-lg-3">
    <aside class="sidebar mb-5 mb-lg-0">
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Search Widget -->
            <div class="widget-content search-widget">
                <form action="{{ route('search') }}" method="get">
                    <input type="text" name="s"  placeholder="Введите текст для поиска">
                </form>
            </div>
        </div>
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Category Widget -->
            <div class="widget catagory-widget">
                <h5 class="text-uppercase d-block py-3">Категории</h5>
                <!-- Category Widget Content -->
                <div class="widget-content">
                    <!-- Category Widget Items -->
                    <ul class="widget-items">
                        @foreach($categoryList as $categoryListItem)
                            <li><a href="{{ route('categories.single', ['slug' => $categoryListItem->slug]) }}" class="d-flex py-3"><span>{{ $categoryListItem->title }}</span><span class="ml-auto">{{ $categoryListItem->posts()->count() }}</span></a></li>
                        @endforeach
                        </ul>
                </div>
            </div>
        </div>
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Post Widget -->
            <div class="widget post-widget">
                <h5 class="text-uppercase d-block py-3">Популярные статьи</h5>
                <!-- Post Widget Content -->
                <div class="widget-content">
                    <!-- Post Widget Items -->
                    <ul class="widget-items">
                        <li>
                            @foreach($mostViewedPosts as $mostViewedPost)
                            <a href="{{ route('articles.single', ['slug'=>$mostViewedPost->slug]) }}" class="single-post media py-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb avatar-lg h-100">
                                    <img class="align-self-center" src="{{ $mostViewedPost->getImage() }}" alt="">
                                </div>
                                <div class="post-content media-body ml-3">
                                    <p class="post-date mb-2">{{ $mostViewedPost->getPostDate() }}</p>
                                    <h6>{{ $mostViewedPost->title }}</h6>
                                </div>
                            </a>
                            @endforeach
                        </li>
                       </ul>
                </div>
            </div>
        </div>
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Tags Widget -->
            <div class="widget tags-widget">
                <h5 class="text-uppercase d-block py-3">Теги</h5>
                <!-- Tags Widget Content -->
                <div class="widget-content">
                    <!-- Tags Widget Items -->
                    <div class="widget-content tags-widget-items pt-2">
                        @foreach($tagList as $tagListItem)
                        <a href="{{ route('tags.single', ['slug'=>$tagListItem->slug]) }}" class="d-inline-block mt-2 mr-1 px-2 py-1">{{ $tagListItem->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
