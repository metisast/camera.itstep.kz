<!-- Footer -->
<div class="footer">
    <footer class="page-footer teal darken-1">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Компьютерная Академия ШАГ</h5>
                    <p class="grey-text text-lighten-4">международное
                        учебное заведение,
                        специализирующееся на
                        компьютерном образовании.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="http://astana.itstep.kz/about-academy/">Об Академии</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://astana.itstep.kz/formy-obucheniya/">Формы обучения</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://success.itstep.org/">Истории успеха</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://astana.itstep.kz/news/">Новости и акции</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://astana.itstep.kz/for-students/">Для студентов</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://astana.itstep.kz/nashi-partnery/">Наши партнеры</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Компьютерная Академия Шаг Казахстан
                <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
        </div>
    </footer>
</div>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class=""><i class="material-icons">lock</i>Авторизация</h4>
        <div class="row">
            <form class="col s12" id="form-auth">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" name="login" class="validate">
                        <label for="icon_prefix">Логин</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="icon_telephone" type="password" name="password" class="validate">
                        <label for="icon_telephone">Пароль</label>
                    </div>
                    <input type="hidden" name="city" class="auth_city">
                </div>
            </form>
        </div>
        <div class="progress" style="display: none">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Закрыть</a>
        <a href="#!" class=" modal-action waves-effect waves-green btn-flat btn-auth">Войти</a>
    </div>
</div>

<!-- Include scripts -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/materialize/dist/js/materialize.min.js"></script>
<script src="/js/script.js"></script>
<script src="/js/init.js"></script>
</body>
</html>