<?php

namespace App\Service;

use App\Entity\PackageRepo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;

class RepoService {
    
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;        
    }

}