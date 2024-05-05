<?php

declare(strict_types=1);

namespace App\Entity\User;

use Abenmada\MultiFactorAuthenticationPlugin\Model\MultiFactorAuthenticationTrait;
use Doctrine\ORM\Mapping as ORM;
use Scheb\TwoFactorBundle\Model\Google\TwoFactorInterface;
use Sylius\Component\Core\Model\AdminUser as BaseAdminUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_admin_user")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_admin_user')]
class AdminUser extends BaseAdminUser implements TwoFactorInterface
{
    use MultiFactorAuthenticationTrait;

    public function getGoogleAuthenticatorUsername(): string
    {
        return $this->getEmail() ?: '';
    }
}
