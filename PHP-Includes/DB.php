<?php

class DB {
    protected $db_host = '127.0.0.1';
    protected $db_user = 'root';
    protected $db_password = '';
    protected $db_name = 'service_transform';

    public $con;

    function __construct()
    {
        $this->con = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
    }

    public function check_db() {
        if (mysqli_connect_errno()) {
            echo 'Connection failed: ' . mysqli_connect_errno() . ' ' . mysqli_connect_error();
        }
        //mysqli_report(MYSQLI_REPORT_ALL);
    }

    public function escape_string($string) {
        return $this->con->real_escape_string($string);
    }

    public function db_query($query) {
        $result = mysqli_query($this->con, $query);
        return $result;
    }

    /*public function db_query($query, $params, $type) {

    }*/
}