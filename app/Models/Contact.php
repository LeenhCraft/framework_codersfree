<?php

namespace App\Models;

use mysqli;

class Contact
{
    protected $db_host = 'localhost';
    protected $db_user = "db_leenh";
    protected $db_pass = "321321";
    protected $db_name = "db_mvc";
    protected $connection;

    public function __construct()
    {
        $this->connection();
    }

    public function connection()
    {
        $this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
}
