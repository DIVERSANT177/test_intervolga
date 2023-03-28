<?php

namespace App\Models;

use App\Builder;

class UserChange extends Builder{

    function getTableName(): string
    {
        return "users";
    }

    function getFields(): array
    {
        return [
            "surname" => "Фамилия",
            "name" => "Имя",
        ];
    }

    function changeData()
    {
        $this->isEmptyFields();
        if ($this->errors != []){
            echo '<div class="text-center mt-3 text-danger mx-auto w-50">';
            foreach ($this->errors as $error){
                echo $error . '<br>';
            }
            echo '</div>';
        } else {
            unset($this->data['change']);
            $this->update('id', $_SESSION['user']);
            header('Location: /admin/personalAccount');
        }
        return;
    }
}