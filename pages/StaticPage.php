<?php ## Статические страницы
require_once "Cached.php";

class StaticPage extends Cached
{
    public function __construct($id)
    {
        parent::__construct();

        if ($this->isCached($this->id($id))) {
            parent::__construct($this->title(), $this->content());
        } else {
            // $query = "SELECT * FROM static_page WHERE id = :id LIMIT 1";
            // $sth = $dbh->prepare($query);
            // $sth = $dbh->execute($query, [id]);
            // $page = $sth->fetch(PDO::FETCH_ASSOC);
            // $parent::__construct($page['title'], $page['content']);
            parent::__construct("Контакты1","Содержимое страницы Контакты1", 10);
        }
    }

    public function id($name)
    {
        return "static_page_{$name}";
    }
}