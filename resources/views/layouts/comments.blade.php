<div class="blog-comments p-3">
    <!-- Admin -->
    <div class="admin media py-4">
        <!-- Admin Thumb -->
        <div class="admin-thumb avatar-lg">
            <img class="rounded-circle" src="{{ asset('assets/front/img/avatar/avatar-1.png') }}" alt="">
        </div>
        <!-- Admin Content -->
        <div class="admin-content media-body pl-3 pl-sm-4">
            <h4 class="admin-name mb-2"><a href="#">Ринат Хабибуллин</a></h4>
            <p>Автор множества статей о путешесвтиях, миллиардер, филантроп.</p>
        </div>
    </div>
    <!-- Comments -->
    <div class="comments mt-4 mb-3">
        <!-- Comments Title -->
        <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Комментарии</h3>
        <!-- Single Comments -->
        <div class="single-comments media p-4">
            <!-- Comments Thumb -->
            <div class="comments-thumb avatar-lg">
                <img class="rounded-circle" src="{{ asset('assets/front/img/avatar/avatar-1.png') }}" alt="">
            </div>
            <!-- Comments Content -->
            <div class="comments-content media-body pl-3">
                <h5 class="d-flex mb-2">
                    <a href="#">Яна Малько</a>
                    <a href="#" class="ml-auto">Ответить</a>
                </h5>
                <p class="d-none d-lg-block">Отличная статья, полность выражает мои мысли по этой теме!</p>
                <p class="d-block d-lg-none">Спасибо.</p>
            </div>
        </div>
        <!-- Single Comments -->
        <div class="single-comments media p-4">
            <!-- Comments Thumb -->
            <div class="comments-thumb avatar-lg">
                <img class="rounded-circle" src="{{ asset('assets/front/img/avatar/avatar-1.png') }}" alt="">
            </div>
            <!-- Comments Content -->
            <div class="comments-content media-body pl-3">
                <h5 class="d-flex mb-2">
                    <a href="#">Ольга Громыко</a>
                    <a href="#" class="ml-auto">Ответить</a>
                </h5>
                <p class="d-none d-lg-block">Очень полезная информация!</p>
                <p class="d-block d-lg-none">Не раз ваш сайт помогал мне заграницей.</p>
            </div>
        </div>
    </div>
</div>
<div class="blog-contact p-3">
    <!-- Contact Title -->
    <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Оставьте ваш комментарий</h3>
    <!-- Comment Box -->
    <div class="contact-box comment-box">
        <form method="POST" action="#">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Имя" required="required">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Комментарий" required="required"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-bordered mt-3" type="submit">Отправить</button>
                </div>
            </div>
        </form>
    </div>
</div>
