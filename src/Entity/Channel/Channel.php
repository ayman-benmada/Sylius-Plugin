<?php

declare(strict_types=1);

namespace App\Entity\Channel;

use Abenmada\BackofficePlugin\Model\Channel\ChannelTrait as AbenmadaBackofficeChannelTrait;
use Abenmada\MediaPlugin\Model\Channel\ChannelTrait as AbenmadaMediaChannelTrait;
use Abenmada\TranslationPlugin\Model\Channel\ChannelTrait as AbenmadaTranslationChannelTrait;
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
    use AbenmadaMediaChannelTrait;
    use AbenmadaTranslationChannelTrait;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->medias = new ArrayCollection();
        $this->channelTranslations = new ArrayCollection();
        parent::__construct();
    }
}
