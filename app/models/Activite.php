<?php

require_once "../core/BaseModel.php";

class Activite extends BaseModel
{
    protected $id;
    protected $title;
    protected $description;
    protected $project_id;

    public function getId()
    {
        return $this->id;
    }

    public function setTitle(string $title)
    {
        if (empty($title)) {
            throw new Exception("Le titre est obligatoire");
        }
        $this->title = $title;
    }

    public function setDescription(string $description)
    {
        if (empty($description)) {
            throw new Exception("La description est obligatoire");
        }
        $this->description = $description;
    }

    public function setProjectId(int $project_id)
    {


        if ($project_id <= 0) {
            throw new Exception("Projet invalide");
        }
        $this->project_id = $project_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getProjectId(): int
    {
        return $this->project_id;
    }
}
