<?php

declare(strict_types=1);

namespace App\Entity\User;

use Abenmada\MultiFactorAuthenticationPlugin\Model\MultiFactorAuthenticationTrait;
use Doctrine\ORM\Mapping as ORM;
use Scheb\TwoFactorBundle\Model\Google\TwoFactorInterface;
use Sylius\Component\Core\Model\ShopUser as BaseShopUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_shop_user")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_shop_user')]
class ShopUser extends BaseShopUser implements TwoFactorInterface
{
    use MultiFactorAuthenticationTrait;

    public function getGoogleAuthenticatorUsername(): string
    {
        return $this->getEmail() ?: '';
    }
}
