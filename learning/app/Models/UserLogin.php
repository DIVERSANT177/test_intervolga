<?php

namespace App\Models;

use App\Builder;

class UserLogin extends Builder{

    function getTableName(): string
    {
        return "users";
    }

    function getFields(): array
    {
        return [
            "email" => "Email",
            "password" => "Пароль",
        ];
    }

    function login()
    {
        $this->isEmptyFields()->validateEmail()->validatePassword()->checkUser();
        if ($this->errors != []){
            echo '<div class="text-center mt-3 text-danger mx-auto w-50">';
            foreach ($this->errors as $error){
                echo $error . '<br>';
            }
            echo '</div>';
        } else {
            $user = $this->where('email', $this->data['email']);
            $_SESSION['user'] = $user->id;
            header("Location: /");
        }
    }

    function checkUser(): UserLogin
    {
        $user = $this->where('email', $this->data['email']);
        if (!password_verify($this->data['password'], $user->password))
            $this->errors[] = 'Неверный логин или пароль';
        return $this;
    }

}