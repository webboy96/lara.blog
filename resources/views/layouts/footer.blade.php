<footer class="section footer-area">
    <!-- Footer Top -->
    <div class="footer-top ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-white text-uppercase mb-2">Об авторе</h3>
                        <ul>
                            <li class="py-2"><a class="text-white-50" href="#">История блога</a></li>
                            <li class="py-2"><a class="text-white-50" href="#">Упоминания</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-white text-uppercase mb-2">Категории</h3>
                        <ul>
                            @foreach($categoryList as $categoryListItem)
                                <li class="py-2"><a class="text-white-50" href="{{ route('categories.single', ['slug' => $categoryListItem->slug]) }}">{{ $categoryListItem->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-white text-uppercase mb-2">Разделы</h3>
                        <ul>
                            <li class="py-2"><a class="text-white-50" href="/">Главная</a></li>
                            <li class="py-2"><a class="text-white-50" href="#">Политика конфиденциальности</a></li>
                            <li class="py-2"><a class="text-white-50" href="#">Помощь</a></li>
                            <li class="py-2"><a class="text-white-50" href="#">Контакты</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <!-- Footer Items -->
                    <div class="footer-items">
                        <!-- Footer Title -->
                        <h3 class="footer-title text-white text-uppercase mb-2">Подпишитесь на меня</h3>
                        <!-- Social Icons -->
                        <ul class="social-icons list-inline pt-2">
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item px-1"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copyright Area -->
                    <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                        <!-- Copyright Left -->
                        <div class="copyright-left text-white-50">&copy; Блог Путешественника 2022 Все права защищены</div>
                        <!-- Copyright Right -->
                        <div class="copyright-right text-white-50">Made with <i class="fas fa-heart"></i> By <a href="#">Rinat</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
