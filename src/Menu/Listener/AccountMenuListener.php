<?php

declare(strict_types=1);

namespace App\Menu\Listener;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AccountMenuListener
{
    public function invoke(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $menu
            ->addChild('multiFactorAuthentication', ['route' => 'sylius_shop_account_abenmada_multi_factor_authentication_plugin_shop_user_enable'])
            ->setLabel('abenmada_multi_factor_authentication_plugin.ui.multi_factor_authentication')
            ->setLabelAttribute('icon', 'shield');
    }
}
