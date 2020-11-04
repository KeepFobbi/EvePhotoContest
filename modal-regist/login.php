<div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Форма авторизации</h4>
                <button class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <form action="../validation-form/auth_check.php" method="post" class="regisForm">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remPass"> Запомнить пароль
                        </label>
                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-outline-primary"data-toggle="modal" data-target="#register" type="button">Зарегестрироваться</button>
                    <button class="btn btn-success" type="submit">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!--register-->
<div id="register" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Форма регистрации</h4>
                <button class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <form action="../validation-form/register_check.php" method="post" class="regisForm">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Введите email"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <input type="password" class="form-control" name="ConfirmPass" id="ConfirmPass" placeholder="Подтвердите пароль"><br>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Зарегестрироваться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>