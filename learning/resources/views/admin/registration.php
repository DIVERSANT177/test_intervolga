<main>
    <div class="w-75 mx-auto">
        <div class="h1 pb-3 text-center">
            Регистрация
        </div>
        <form method="post" action="/admin/registration">
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
            <div class="row w-50 mx-auto mb-3">
                <div class="col-4 mt-1">
                    <label for="checkPassword" class="form-label">
                        Повторите пароль
                    </label>
                </div>
                <div class="col-8">
                    <input type="password" placeholder="Повторите пароль" id="checkPassword" class="form-control" name="checkPassword">
                </div>
            </div>
            <div class="row w-50 mx-auto mb-3">
                <div class="col-4 mt-1">
                    <label for="surname" class="form-label">
                        Введите фамилию
                    </label>
                </div>
                <div class="col-8">
                    <input type="text" value="<?=$_POST['surname']?>" placeholder="Фамилия" id="surname" class="form-control" name="surname">
                </div>
            </div>
            <div class="row w-50 mx-auto mb-3">
                <div class="col-4 mt-1">
                    <label for="name" class="form-label">
                        Введите имя
                    </label>
                </div>
                <div class="col-8">
                    <input type="text" value="<?=$_POST['name']?>" placeholder="Имя" id="name" class="form-control" name="name">
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Зарегистрироваться" name="registration" class="btn btn-primary mt-2">
            </div>
        </form>
    </div>
</main>