<?php

class DB
{
    public $query;

    public function select()
    {
        $this->query .= "SELECT * FROM TABLE ";
        return $this;
    }

    public function where()
    {
        $this->query .= " WHERE ID = 50";
        return $this;
    }

    public function limit()
    {
        $this->query .= " LIMIT 5";
        return $this;
    }
}

$db = new DB;

echo $db->select()->limit()->query;



//Something to write to txt log
$log  = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, g:i a") . PHP_EOL .
    "Attempt: TESTING" .
    "-------------------------" . PHP_EOL;
//Save string to log, use FILE_APPEND to append.
file_put_contents('logs', $log, FILE_APPEND);
