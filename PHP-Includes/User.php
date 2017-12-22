<?php

class User {
    public $name;
    public $email;
    public $password;
    public $verification;
    public $con;

    function __construct($name, $nickname, $email, $password, $con) {
        $this->name = $name;
        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
        $this->verification = md5(rand(1000,5000));
        $this->con = $con;
    }

    protected function hash_password($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function sign_up($name, $nickname, $email, $password) {
        $this->hash_password($password);

        $query = "INSERT INTO users (user_name, user_nickname, user_email, user_password, user_verify) VALUES('$this->name', '$this->nickname', '$this->email', '$this->password', '$this->verification')";

        //$params = array($this->name, $this->email, $this->password);
        //$type = 'sss';
        $this->con->db_query($query);
        //$this->con->db_query($query, $params, $type);
    }

    public static function login($name, $password, $con) {
        $query = "SELECT user_nickname, user_email, user_password, user_active FROM users WHERE user_nickname = '$name' OR user_email = '$name'";
        $result = $con->db_query($query);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function test_name($name) {
        $query = "SELECT * FROM users WHERE user_nickname = '$name' LIMIT 1";
        $result = $this->con->db_query($query);
        $num_rows = $result->num_rows;
        return $num_rows;
    }

    public function test_email($email) {
        $query = "SELECT * FROM users WHERE user_email = '$email' LIMIT 1";
        $result = $this->con->db_query($query);
        $num_rows = $result->num_rows;
        return $num_rows;
    }

    public function verify_email() {
        $to = $this->email;
        $subject = 'Power Saver Verification';
        $message = "
        $this->name,
        Thanks for signing up for Power Saver, click here to activate your account:
        http://Power Saver.local/Login-Signup/verify_script.php?email=$this->email&hash=$this->verification.
        ";
        $header = 'From: noreply@Power Saver.local' . "\r\n";
        mail($to, $subject, $message, $header);
    }
}