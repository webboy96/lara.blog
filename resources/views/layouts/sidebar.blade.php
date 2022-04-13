<div class="col-12 col-lg-3">
    <aside class="sidebar mb-5 mb-lg-0">
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Search Widget -->
            <div class="widget-content search-widget">
                <form action="#">
                    <input type="text" placeholder="Enter your keywords">
                </form>
            </div>
        </div>
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Category Widget -->
            <div class="widget catagory-widget">
                <h5 class="text-uppercase d-block py-3">Categories</h5>
                <!-- Category Widget Content -->
                <div class="widget-content">
                    <!-- Category Widget Items -->
                    <ul class="widget-items">
                        @foreach($categoryList as $categoryListItem)
                            <li><a href="{{ route('categories.single', ['slug' => $categoryListItem->slug]) }}" class="d-flex py-3"><span>{{ $categoryListItem->title }}</span><span class="ml-auto">(14)</span></a></li>
                        @endforeach
                        </ul>
                </div>
            </div>
        </div>
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Post Widget -->
            <div class="widget post-widget">
                <h5 class="text-uppercase d-block py-3">Popular Post</h5>
                <!-- Post Widget Content -->
                <div class="widget-content">
                    <!-- Post Widget Items -->
                    <ul class="widget-items">
                        <li>
                            <a href="#" class="single-post media py-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb avatar-lg h-100">
                                    <img class="align-self-center" src="assets/front/img/case_studies/case_studies_1/thumb_1.jpg" alt="">
                                </div>
                                <div class="post-content media-body ml-3 py-2">
                                    <p class="post-date mb-2">05 Feb, 2020</p>
                                    <h6>Post Tile Here</h6>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="single-post media py-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb avatar-lg h-100">
                                    <img class="align-self-center" src="assets/front/img/case_studies/case_studies_1/thumb_2.jpg" alt="">
                                </div>
                                <div class="post-content media-body ml-3 py-2">
                                    <p class="post-date mb-2">09 Apr, 2020</p>
                                    <h6>Post Tile Here</h6>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="single-post media py-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb avatar-lg h-100">
                                    <img class="align-self-center" src="assets/front/img/case_studies/case_studies_1/thumb_3.jpg" alt="">
                                </div>
                                <div class="post-content media-body ml-3 py-2">
                                    <p class="post-date mb-2">13 Jul, 2020</p>
                                    <h6>Post Tile Here</h6>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="single-post media py-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb avatar-lg h-100">
                                    <img class="align-self-center" src="assets/front/img/case_studies/case_studies_1/thumb_4.jpg" alt="">
                                </div>
                                <div class="post-content media-body ml-3 py-2">
                                    <p class="post-date mb-2">03 Oct, 2020</p>
                                    <h6>Post Tile Here</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Single Widget -->
        <div class="single-widget">
            <!-- Tags Widget -->
            <div class="widget tags-widget">
                <h5 class="text-uppercase d-block py-3">Popular Tags</h5>
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
