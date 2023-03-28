
<main>
    <div class="w-75 text-center mx-auto">
        <div class="h1 pb-3 ">
            Изменение данных
        </div>
        <form method="post" action="/admin/changeData">
            <div class="row w-50 mx-auto mb-3">
                <div class="col-4 mt-1">
                    <label for="surname" class="form-label">
                        Фамилия
                    </label>
                </div>
                <div class="col-8">
                    <input type="text" value="<?=$user->surname?>" placeholder="Фамилия" id="surname" class="form-control" name="surname">
                </div>
            </div>
            <div class="row w-50 mx-auto mb-3">
                <div class="col-4 mt-1">
                    <label for="name" class="form-label">
                        Имя
                    </label>
                </div>
                <div class="col-8">
                    <input type="text" value="<?=$user->name?>" placeholder="Имя" id="name" class="form-control" name="name">
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Изменить" name="change" class="btn btn-primary mt-2">
            </div>
        </form>
    </div>

</main>