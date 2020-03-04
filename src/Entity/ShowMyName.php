<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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
        $session = new Session();
        $setSession = $session->get('name');
        if(isset($_POST['name'])) {
            $session->set('name', $_POST['name']);
            $this->name = $_POST['name'];
        }
        elseif(isset($setSession)) {
            $this->name = $setSession;
        }
        return $this->name;
    }







}
