<?php ## Новости
require_once "Cached.php";

class News extends Cached
{
    public function __construct($id)
    {
        parent::__construct('Заголовок новости', 'Текст новости', 10);

        if($this->isCached($this->id($id)))
        {
            parent::__construct($this->title(), $this->content());

        } else {
            // $query = "SELECT * FROM news WHERE id = :id LIMIT 1";
            // $sth = $dbh->prepare($query);
            // $sth = $dbh->execute($query, [$id]);
            // $page = $sth->fetch(PDO::FETCH_ASSOC);
            // parent::__construct($page['title'], $page['content']);

            parent::__construct('Новости', 'Содержимое страницы Новости');
        }
    }

    public function id($name)
    {
        return "news_{$name}";
    }
}

$n = new News('content');
//$n = new News('01');

$n->render();
var_dump($n);