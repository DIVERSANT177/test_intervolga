<main>
    <div class="w-75 mx-auto">
        <div class="h1 pb-3 text-center">
            Авторизация
        </div>
        <form method="post" action="/admin/login">
            <div class="row w-50 mx-auto mb-3">
                <div class="col-4 mt-1">
                    <label for="email" class="form-label">
                        Введите почту
                    </label>
                </div>
                <div class="col-8">
                    <input type="email" value="<?=$_POST['email']?>" placeholder="Email" id="email" class="form-control" name="email">
                </div>
            </div>
            <div class="row w-50 mx-auto mb-3">
                <div class="col-4 mt-1">
                    <label for="password" class="form-label">
                        Введите пароль
                    </label>
                </div>
                <div class="col-8">
                    <input type="password" placeholder="Пароль" id="password" class="form-control" name="password">
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Войти" name="login" class="btn btn-primary mt-2">
            </div>
        </form>
    </div>
</main>
