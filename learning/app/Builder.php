<?php

namespace App;

use App\Models\UserRegister;

abstract class Builder
{
    protected $salt = "mS_w@2JD@H9g";
    protected $data = [];
    protected $errors = [];

    abstract function getTableName();
    abstract function getFields();

    function setData($data)
    {
        $this->data = $data;
    }

    function isEmptyFields(): Builder
    {
        foreach ($this->getFields() as $key => $field) {
            if($this->data[$key] == ''){
                $this->errors[] = "Заполните поле '" . $this->getFields()[$key] . "'";
            }
        }
        return $this;
    }

    function validateEmail(): Builder
    {
        if(filter_var($this->data['email'], FILTER_VALIDATE_EMAIL) === false)
            $this->errors[] = "Введен невалидный Email";
        return $this;
    }

    function validatePassword(): Builder
    {
        $uppercase = preg_match('@[A-Z]@', $this->data['password']);
        $lowercase = preg_match('@[a-z]@', $this->data['password']);
        $number = preg_match('@\d@', $this->data['password']);
        $specialChars = preg_match('@\W@', $this->data['password']);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($_POST['password']) < 6)
            $this->errors[] = "Пароль должен быть длиной не менее 6 символов и в нем должны присутствовать заглавные и прописные 
            буквы, цифры и специальные символы";
        return $this;
    }
    function get()
    {
        $db = Database::getInstance();
        $query = $db::prepare("SELECT * FROM " . $this->getTableName());
        $query->execute();
        return $query->fetchAll();
    }

    function where($key, $value){
        $db = Database::getInstance();
        $query = $db::prepare("SELECT * FROM " . $this->getTableName(). " WHERE $key = '$value';");
        $query->execute();
        return $query->fetchObject();
    }

    function insert(){
        $query = "INSERT INTO " . $this->getTableName() . " (";
        foreach ($this->data as $key => $field){
            $query .= $key . ", ";
        }
        $query = rtrim($query, ', ');
        $query .= ") VALUES (";
        foreach ($this->data as $key => $field) {
            $query .= ":$key, ";
        }
        $query = rtrim($query, ', ');
        $query .= ");";
//        var_dump($query);
//        die();
        $query = Database::prepare($query);
        foreach ($this->data as $key => $item){
            $query->bindValue(":$key", $item);
        }

        if(!$query->execute()){
            return "При добавлении произошла ошибка";
        }
    }


    function update($key, $value)
    {
        $query = "UPDATE " . $this->getTableName() . " SET ";
        foreach ($this->data as $field => $item){
            $query .= "$field = :$field, ";
        }
        $query = rtrim($query, ', ');
        $query .= " WHERE $key = '$value';";
        $query = Database::prepare($query);
        foreach ($this->data as $field => $item){
            $query->bindValue(":$field", $item);
        }
        if(!$query->execute()){
            return "При измении произошла ошибка";
        }
    }
}
