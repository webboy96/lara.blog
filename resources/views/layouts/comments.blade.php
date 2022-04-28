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
    @if($comments->count())
        <!-- Comments Title -->
        <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Комментарии</h3>
        <!-- Single Comments -->

            @foreach($comments as $comment)
                <div class="single-comments media p-4">
                <!-- Comments Thumb -->
                <div class="comments-thumb avatar-lg">
                    <img class="rounded-circle" src="{{ asset('assets/front/img/avatar/avatar-1.png') }}" alt="">
                </div>
                <!-- Comments Content -->
                <div class="comments-content media-body pl-3">
                    <h5 class="d-flex mb-2">
                        <p>{{ $comment->users->name }}</p>
                    </h5>
                    <p class="d-none d-lg-block">{{ $comment->content }}</p>


                </div>
            </div>
            @endforeach
        @endif

    </div>
</div>
<div class="blog-contact p-3">
    <!-- Contact Title -->


    <!-- Comment Box -->

    <h3 class="comments-title text-uppercase text-left text-lg-right mb-3">Оставьте ваш комментарий</h3>
    <div class="contact-box comment-box">
        <form method="POST" action="{{ route('postcomment.store') }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" name="content" placeholder="Комментарий" required="required"></textarea>
                        @if (auth()->check())
                        <input type="text" hidden name="user_id" value="{{ Auth::id() }}">
                        <input type="text" hidden name="post_id" value="{{ $articles->id }}">
                        @else
                            <div id="need_commet" hidden>
                                <br>
                                <p>Необходимо войти или зарегистрироваться чтобы оставлять комментарии!</p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-bordered mt-3 disabled" id="disabled_button" type="submit">Отправить</button>
                </div>
            </div>
        </form>
    </div>
    <script>

            document.querySelector('#disabled_button').addEventListener('click', function (){
                document.querySelector('#need_commet > p').style.color = '#8830df'
                document.querySelector('#need_commet').removeAttribute('hidden')

            })

    </script>

</div>
