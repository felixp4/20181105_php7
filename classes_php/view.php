<?php  ## Использование метода bindTo()

class View
{
    protected $pages = [];
    protected $title = 'Контакты';
    protected $body = 'Содержимое страницы Контакты';

    public function addPage($page, $pageCallback)
    {
        $this->pages[$page] = $pageCallback->bindTo($this, __CLASS__);
    }

    public function render($page)
    {
        $this->pages[$page]();

        var_dump($this);
        var_dump(__CLASS__);
        var_dump($this->pages[$page]);

        $content = <<<HTML
<!DOCKTYPE html>
<html lang='ru'>
<head>
    <title>{$this->title()}</title>
    <meta charset='utf-8'>
</head>
<body>
    <p>{$this->body()}</p>
</body>
</html>
HTML;

        echo $content;
    }

    public function title()
    {
        return htmlspecialchars($this->title);
    }

    public function body()
    {
        return htmlspecialchars($this->body);
    }
}

$view = new View();
$view->addPage('about', function() {
    $this->title = 'О нас';
    $this->body = 'Содержимое страницы О нас';
});

$view->render('about');

echo IntlChar::ord("А")."<br />";
echo IntlChar::ord("A")."<br />";
echo IntlChar::chr(1040)."<br />";
echo IntlChar::chr(65)."<br /><br />";

echo IntlChar::toupper("a")."<br />";
echo IntlChar::toupper("A")."<br /><br />";

echo IntlChar::tolower("A")."<br />";
echo IntlChar::tolower("a")."<br /><br />";

echo IntlChar::isalnum("1")."<br />";
echo IntlChar::isalnum("A")."<br />";
echo IntlChar::isalnum("-")."<br /><br />";

echo IntlChar::isdigit("1")."<br />";
echo IntlChar::isdigit("A")."<br /><br />";

echo IntlChar::isalpha("Ф")."<br />";
echo IntlChar::isalpha("1")."<br /><br />";