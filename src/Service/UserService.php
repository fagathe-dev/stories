<?php

use App\Utils\ServiceTrait;
use Psr\Log\LoggerInterface;
use App\Helpers\DateTimeHelperTrait;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class UserService
{

    use ServiceTrait;
    use DateTimeHelperTrait;

    public function __construct(
        private PaginatorInterface $paginator,
        private UserPasswordHasherInterface $hasher,
        private LoggerInterface $logger,
        private EntityManagerInterface $manager,
        private Security $security
    ) {
    }
}
