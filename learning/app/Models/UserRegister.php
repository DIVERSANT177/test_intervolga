<?php

namespace App\Models;

use App\Builder;

class UserRegister extends Builder {

    function getTableName(): string
    {
        return "users";
    }

    function getFields(): array
    {
        return [
            "email" => "Email",
            "password" => "Пароль",
            "checkPassword" => "Проверка пароля",
            "surname" => "Фамилия",
            "name" => "Имя"
        ];
    }

    function registration()
    {
        $this->isEmptyFields()->validateEmail()->validatePassword()->checkEmail()->checkPassword();
        if ($this->errors != []){
            echo '<div class="text-center mt-3 text-danger mx-auto w-50">';
            foreach ($this->errors as $error){
                echo $error . '<br>';
            }
            echo '</div>';
        } else {
            unset($this->data['checkPassword']);
            unset($this->data['registration']);
            $this->data['password'] = crypt($this->data['password'], $this->salt);
            $this->insert();
            $user = $this->where('email', $this->data['email']);
            $_SESSION['user'] = $user->id;
            header('Location: /');
        }
    }

    function checkEmail(): UserRegister
    {
        if ($this->where('email', $this->data['email']) != ''){
            $this->errors[] = "Пользователь с такой почтой уже существует";
        }
        return $this;
    }

    function checkPassword(): UserRegister
    {
        if($this->data['password'] != $this->data['checkPassword']){
            $this->errors[] = "Пароли не совпадают";
        }
        return $this;
    }


}
