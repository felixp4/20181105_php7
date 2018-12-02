<?php ## Трейт Tag
namespace PHP7;

trait Tag
{
    public function tags()
    {
        // $query = "SELECT * FROM authors WHERE id IN(:ids) LIMIT 1";
        echo "Tag::tags<br />";
    }
}