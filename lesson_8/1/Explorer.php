<?php


class Explorer extends DirectoryIterator
{
    public function __construct($path)
    {
        parent::__construct($path);
    }

    public function showPath()
    {
        ob_clean();
        ob_start();
        $page = '';
        $path = pathinfo($_SERVER['REQUEST_URI'])['filename'];
        foreach ($this as $item) {
            if (pathinfo($item)['extension'] != '') {
                $page .= "<div>file --> $item</div>";
            } else {
                $page .= "<div>";
                $page .= "<a href='?folder=$path>" . DIRECTORY_SEPARATOR;
                $page .= "<a>$item'>$item</a></div>";
            }
        }
        echo $page;
    }
}