<?php

namespace Go\FriendlyRoutingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="go_friendly_routing_translations")
 */
class Translation
{
    /**
     * Identifier.
     * 
     * @var integer
     * 
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id", type="integer")
     */
    private $id;
    
    /**
     * Identifier.
     * 
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
