<?php

require_once "../core/basemodel.php";

abstract class Project
{
    protected $id;
    protected $title;
    protected $description;
    protected $type;

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    abstract public function getInfo(): string;
}
