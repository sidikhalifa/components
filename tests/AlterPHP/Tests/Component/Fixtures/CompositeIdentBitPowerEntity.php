<?php

namespace AlterPHP\Tests\Component\Fixtures;

use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/** @Entity */
class CompositeIdentBitPowerEntity implements UserInterface
{

   /** @Id @Column(type="integer") */
   protected $id1;

   /** @Id @Column(type="integer") */
   protected $id2;

   /** @Column(type="string") */
   public $name;

   /** @Column(type="string", unique=true) */
   public $bitPower;

   public function __construct($id1, $id2, $name, $bitPower)
   {
      $this->id1 = $id1;
      $this->id2 = $id2;
      $this->name = $name;
      $this->bitPower = $bitPower;
   }

   public function getRoles()
   {

   }

   public function getPassword()
   {

   }

   public function getSalt()
   {

   }

   public function getUsername()
   {
      return $this->name;
   }

   public function eraseCredentials()
   {

   }

   public function equals(UserInterface $user)
   {

   }

}
