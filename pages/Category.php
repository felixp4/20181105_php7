<?php ## Категории
require_once "Cached.php";

class Category extends Cached
{
    public function __construct($id)
    {
        parent::__construct('Заголовок категории', 'Текст категории', 10);

        if($this->isCached($this->id($id)))
        {
            parent::__construct($this->title(), $this->content());

        } else {
            // $query = "SELECT * FROM category WHERE id = :id LIMIT 1";
            // $sth = $dbh->prepare($query);
            // $sth = $dbh->execute($query, [$id]);
            // $page = $sth->fetch(PDO::FETCH_ASSOC);
            // parent::__construct($page['title'], $page['content']);

            parent::__construct('Категории', 'Содержимое страницы Категории');
        }
    }

    public function id($name)
    {
        return "news_{$name}";
    }
}

$cat = new Category('title');
//$n = new News('01');

$cat->render();
var_dump($cat);