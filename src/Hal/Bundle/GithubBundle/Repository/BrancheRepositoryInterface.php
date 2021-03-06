<?php

namespace Hal\Bundle\GithubBundle\Repository;

use Hal\Bundle\GithubBundle\Entity\Branche;

interface BrancheRepositoryInterface
{

    public function getByFullName($name);

    public function saveBranche(Branche $branche);
}