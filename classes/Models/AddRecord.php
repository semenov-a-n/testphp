<?php

namespace App\Models;

use PDO;

class AddRecord
{
    public $dsn = 'mysql:host=localhost;dbname=messages';
    protected $dbh;

    public function record($text)
    {
        $this->dbh = new PDO($this->dsn, 'root', '');
        $sql = "INSERT INTO messages (messages) VALUES ('$text')";
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();

    }
}
