<?php

session_start();
require_once('Model.php');
class Controller
{
    private $model;
    public function __construct()
    {
        $this->model = new Model();
    }
    public function handleRequest()
    {
        // Verifying the Existance of the user
        if (isset($_POST['user_data_login'])) {
            $user_email = $_POST['user_email_login'];
            $password = $_POST['user_password_login'];
            $user = $this->model->verifyUserExistance($user_email, $password);
            if ($user) {
                $_SESSION['user_first_name_login'] = $user['first_name'];
                $_SESSION['user_last_name_login'] = $user['last_name'];
                header("location:index.php?page=dashboard");
                exit();
            } else {
                echo "Password or email is not correct !";
            }
        }

        //Adding the new user to the DB
        if (isset($_POST['user_data_registration'])) {
            if (!($this->model->emailExists($_POST['user_email_registration']))) {
                $user_first_name = $_POST['user_first_name_registration'];
                $user_last_name = $_POST['user_last_name_registration'];
                $user_password = $_POST['user_password_registration'];
                $user_email = $_POST['user_email_registration'];
                $this->model->addUser($user_first_name, $user_last_name, $user_password, $user_email);
                header("location:index.php?page=login");
                exit();
            } else {
                echo "This email is already registered with! have another one";
            }
        }
    }
}
