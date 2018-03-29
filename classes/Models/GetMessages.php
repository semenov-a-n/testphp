<?php

namespace App\Models;

use PDO;

class GetMessages extends AddRecord
{
    protected $data;
    protected $num_pages;
    public $max_posts = 2;  // кол-во сообщений на странице

    public function getList($get)
    {
        $this->dbh = new PDO($this->dsn, 'root', '');
        $sql = "SELECT * FROM `messages` ORDER BY id"; // запрос данных, с сортировкой по id
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $this->data = $sth->fetchALL();
        $num_posts = $this->dbh->query("SELECT COUNT(*) as count FROM messages")->fetchColumn();
        $this->num_pages = intval(($num_posts - 1) / $this->max_posts) + 1;
        if ($get) {// определение страницы, если в строке запроса будет введена неверная страница.
            $page = $get;
            if ($page < 1)
                $page = 1;
            elseif ($page > $this->num_pages)
                $page = $this->num_pages;
        } else {
            $page = 1;
        }
        foreach ($this->data as $item) { //вывожу сообщения на страницу
            if (($item['id'] > $page * $this->max_posts - $this->max_posts) && ($item['id'] <= $page * $this->max_posts)) {
                $items[] = $item['messages'];
            };
        };
        return $items;
    }

    public function getNav()
    {
        $this->dbh = new PDO($this->dsn, 'root', '');
        $num_posts = $this->dbh->query("SELECT COUNT(*) as count FROM messages")->fetchColumn();// получаю кол-во строк в таблице
        $this->num_pages = intval(($num_posts - 1) / $this->max_posts) + 1; //кол-во страниц
        if ($this->num_pages <= 1) { // не вывожу навигацию, если страница 1
            exit();
        } else {
            for ($i = 1; $i <= $this->num_pages; $i++)
                $nav[] = "<a href='/list.php?page=$i'>$i</a>";
            return $nav;
        }

    }

}
