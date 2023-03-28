
<main>
    <div class="w-75 text-center mx-auto">
        <div class="h1 pb-3 ">
            Создание новости
        </div>
        <form method="post" action="/admin/createNews">
            <div class="row w-50 mx-auto mb-3">
                <div class="col-4 mt-1">
                    <label for="heading" class="form-label">
                        Заголовок
                    </label>
                </div>
                <div class="col-8">
                    <input type="text" value="" placeholder="Заголовок" id="heading" class="form-control" name="heading">
                </div>
            </div>
            <div class="row w-50 mx-auto mb-3">
                <div class="col-4 mt-1">
                    <label for="text" class="form-label">
                        Текст
                    </label>
                </div>
                <div class="col-8">
                    <input type="text" value="" placeholder="Текст" id="text" class="form-control" name="text">
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Создать" name="create" class="btn btn-primary mt-2">
            </div>
        </form>
    </div>

</main>