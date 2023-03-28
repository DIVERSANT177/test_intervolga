<?php

namespace App\Models;

use App\Builder;

class NewsCreate extends Builder{

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
            //'writing_date' => 'Дата публикации'
        ];
    }

    function createNews()
    {
        $this->isEmptyFields();
        if ($this->errors != []){
            echo '<div class="text-center mt-3 text-danger mx-auto w-50">';
            foreach ($this->errors as $error){
                echo $error . '<br>';
            }
            echo '</div>';
        } else {
            unset($this->data['create']);
            $this->data['id_author'] = $_SESSION['user'];
            $this->data['writing_date'] = date("Y-m-d");
            $this->insert();
            header("Location: /");
        }

    }

}