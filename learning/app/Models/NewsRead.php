<?php

namespace App\Models;

use App\Builder;

class NewsRead extends Builder{

    public function getTableName(): string
    {
        return 'news';
    }

    public function getFields(): array
    {
        return [
            'heading' => 'Заголовок',
            'text' => 'Текст',
            //'id_author' => 'ID автора',
            'writing_date' => 'Дата публикации'
        ];
    }

//    function readNews()
//    {
//        var_dump($this->get());
//    }
}