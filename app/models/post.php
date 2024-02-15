<?php
namespace App\Models;

class Post
{
    public $title = '';
    public $description = '';
    public $image = '';
    public $created_at;
    public ?Category $category ;
    public function __construct($title = '', $description = '', $image = '', $created_at = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->created_at = $created_at;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDesc(string $description)
    {
        $this->description = $description;
    }

    public function category(Category $cate)
    {
        $this->category = $cate;
    }

    public function image($img)
    {
        $this->image = $img;
    }

    const TIMEZONE = 'UTC';
}
