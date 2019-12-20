<?php

//include_once __DIR__ . '/sql.php';

class model_news
{
    public $title;

    public $short_description;

    public $full_description;

    public $img;

    public $errors;

    public function addInfo()
    {
        if (empty($this->title)) {
            $errors['title'] = 'title not null';
        }
        if (empty($this->short_description)) {
            $errors['short_description'] = 'short_description not null';
        }
        if (empty($this->full_description)) {
            $errors['full_description'] = 'full_description not null';
        }
        if (empty($this->img)) {
            $errors['img'] = 'img  not null';
        }
        if (empty($errors)) {

            $connection = (new Connection())->create();
            return $connection->query("INSERT INTO `add_news` (`title`, `short_description`, `full_description`,`img`) VALUES ('$this->title','$this->short_description','$this->full_description','$this->img')");
        }
        $this->errors = $errors;
        return false;

    }
}