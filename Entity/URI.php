<?php

namespace Go\FriendlyRoutingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="go_friendly_routing_uris")
 */
class URI
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
     * @ORM\Column(name="uri", type="string")
     */
    private $uri;
    
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
