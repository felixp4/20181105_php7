<?php ## Базовый класс для кешируемых страниц

require_once "Page.php";

class Cached extends Page
{
    protected $expires;
    protected $store;

    public function __construct($title = '', $content = '', $expires = 0)
    {
        parent::__construct($title, $content);
        $this->expires = $expires;

        $this->store = new Memcached();
        $this->store->addServer('localhost', 11211);
        $this->store->set('title', $title);
        $this->store->set('content', $content);
    }

    public function getm()
    {
        echo "Test memcache: " . $this->store->get('title');
    }

    protected function isCached($key)
    {
        // var_dump($key);
        return (bool) $this->store->get($key);
    }

    protected function set($key, $value, $force = false)
    {
        if($force) {
            $this->store->set($key, $value, $this->expires);
        } else {
            if($this->isCached($key)) {
                $this->store->set($key, $value, $this->expires);
            }
        }
    }

    public function get($key)
    {
        return $this->store->get($key);
    }

    public function title()
    {
        if($this->isCached('title')) {
            return $this->get('title');
        } else {
            return parent::title();
        }
    }

    public function content()
    {
        if($this->isCached('content')) {
            return $this->get('content');
        } else {
            return parent::content();
        }
    }
}

/* $ch = new Cached('Cache', 'Testing Memcache', 10);
$ch->render();
$ch->getm();

// echo "<br /> Test memcache: " . $ch->isCached('content');
echo "<br />" . $ch->get('content');

echo "<br /><br />" . $ch->title();
echo "<br /><br />" . $ch->content(); */