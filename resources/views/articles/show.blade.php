@extends('layouts.layout')
@section('content')
    <div class="col-12 col-lg-9">
        <!-- Single Blog Details -->
        <article class="single-blog-details">
            <!-- Blog Thumb -->
            <div class="blog-thumb">
                <a href="#"><img src="assets/front/img/blog/blog-1.jpg" alt=""></a>
            </div>
            <!-- Blog Content -->
            <div class="blog-content digimax-blog p-3">
                <!-- Meta Info -->
                <div class="meta-info d-flex flex-wrap align-items-center py-2">
                    <ul>
                        <li class="d-inline-block p-2">By <a href="#">Junaid Hasan</a></li>
                        <li class="d-none d-md-inline-block p-2"><a href="#">05 Feb, 2020</a></li>
                        <li class="d-inline-block p-2"><a href="#">2 Comments</a></li>
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
                    <h3 class="blog-title py-3"><a href="#">Blog Content Here</a></h3>
                    <p class="d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique placeat deleniti repellat alias maiores corrupti, commodi rem eum molestiae distinctio vitae perferendis at esse ex quas hic quis debitis quasi aspernatur incidunt, excepturi sapiente ducimus nisi. Ad molestiae, blanditiis ducimus.</p>
                    <p class="d-block d-sm-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est mollitia, tenetur libero voluptate quisquam consectetur facilis natus molestiae officiis aperiam.</p>
                    <blockquote class="blockquote px-4 py-3 my-3 ml-4">
                        <p class="font-italic d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime magnam, molestias omnis quam veritatis consectetur nihil aliquid quo culpa? Ullam molestiae id temporibus nemo inventore, at reiciendis distinctio porro atque!</p>
                        <p class="font-italic d-block d-sm-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ullam dolor, omnis maiores molestiae ducimus.</p>
                    </blockquote>
                    <p class="d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique placeat deleniti repellat alias maiores corrupti, commodi rem eum molestiae distinctio vitae perferendis at esse ex quas hic quis debitis quasi aspernatur incidunt, excepturi sapiente ducimus nisi. Ad molestiae, blanditiis ducimus.</p>
                    <p class="d-block d-sm-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est mollitia, tenetur libero voluptate quisquam consectetur facilis natus molestiae officiis aperiam.</p>
                </div>
            </div>
            <!-- Blog Comments -->
            <div class="blog-comments p-3">
                <!-- Admin -->
                <div class="admin media py-4">
                    <!-- Admin Thumb -->
                    <div class="admin-thumb avatar-lg">
                        <img class="rounded-circle" src="assets/front/img/avatar/avatar-1.png" alt="">
                    </div>
                    <!-- Admin Content -->
                    <div class="admin-content media-body pl-3 pl-sm-4">
                        <h4 class="admin-name mb-2"><a href="#">Junaid Hasan</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo eius nam facere enim, voluptas incidunt officiis molestiae, nostrum dolor? Fugit.</p>
                    </div>
                </div>
                <!-- Comments -->
                <div class="comments mt-4 mb-3">
                    <!-- Comments Title -->
                    <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Recent Comments</h3>
                    <!-- Single Comments -->
                    <div class="single-comments media p-4">
                        <!-- Comments Thumb -->
                        <div class="comments-thumb avatar-lg">
                            <img class="rounded-circle" src="assets/front/img/avatar/avatar-2.png" alt="">
                        </div>
                        <!-- Comments Content -->
                        <div class="comments-content media-body pl-3">
                            <h5 class="d-flex mb-2">
                                <a href="#">Jassica William</a>
                                <a href="#" class="ml-auto">Reply</a>
                            </h5>
                            <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere optio ipsum maiores mollitia quisquam.</p>
                            <p class="d-block d-lg-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <!-- Single Comments -->
                    <div class="single-comments media p-4">
                        <!-- Comments Thumb -->
                        <div class="comments-thumb avatar-lg">
                            <img class="rounded-circle" src="assets/front/img/avatar/avatar-3.png" alt="">
                        </div>
                        <!-- Comments Content -->
                        <div class="comments-content media-body pl-3">
                            <h5 class="d-flex mb-2">
                                <a href="#">Md. Arham</a>
                                <a href="#" class="ml-auto">Reply</a>
                            </h5>
                            <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere optio ipsum maiores mollitia quisquam.</p>
                            <p class="d-block d-lg-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Contact -->
            <div class="blog-contact p-3">
                <!-- Contact Title -->
                <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Post your Comments</h3>
                <!-- Comment Box -->
                <div class="contact-box comment-box">
                    <form method="POST" action="#">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-bordered mt-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </div>

@endsection
