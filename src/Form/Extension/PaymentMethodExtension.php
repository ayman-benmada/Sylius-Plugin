<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Abenmada\MediaPlugin\Entity\Media\MediaTypeInterface;
use Abenmada\MediaPlugin\Form\Choice\MediaChoiceType;
use Sylius\Bundle\PaymentBundle\Form\Type\PaymentMethodType;
use Sylius\Component\Channel\Context\ChannelContextInterface;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

final class PaymentMethodExtension extends AbstractTypeExtension
{
    public function __construct(private readonly ChannelContextInterface $channelContext)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('logo', MediaChoiceType::class, [
                'required' => false,
                'multiple' => false,
                'row_attr' => [
                    'channels' => [$this->channelContext->getChannel()->getCode()],
                    'tags' => ['payment_method'],
                    'types' => [MediaTypeInterface::IMAGE],
                ],
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [PaymentMethodType::class];
    }
}
