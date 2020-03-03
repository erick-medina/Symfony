<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use function Symfony\Component\VarDumper\Dumper\esc;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShowMyNameRepository")
 */
class ShowMyName
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $name = "Unknown";

    public function getId(): ?int
    {
        return $this->id;
    }

    public function showMyName() : string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getName() : string
    {
        if(isset($_POST['name'])) {
            $_SESSION['name'] = $_POST['name'];
            $this->name = $_POST['name'];
        }
        elseif (isset($_SESSION['name'])) {
            $this->name = $_SESSION['name'];
        }
        else {
            $this->name = $this->showMyName();
        }
        return $this->name;
    }






}
