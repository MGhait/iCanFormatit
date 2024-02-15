<?php
namespace App\Models;

class Category
{
    public $title= 'nothing';

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
