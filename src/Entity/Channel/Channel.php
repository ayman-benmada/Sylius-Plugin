<?php

declare(strict_types=1);

namespace App\Entity\Channel;

use Abenmada\BackofficePlugin\Model\Channel\ChannelTrait as AbenmadaBackofficeChannelTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Channel as BaseChannel;
use Sylius\Component\Core\Model\ImagesAwareInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_channel")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_channel')]
class Channel extends BaseChannel implements ImagesAwareInterface
{
    use AbenmadaBackofficeChannelTrait;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        parent::__construct();
    }
}
