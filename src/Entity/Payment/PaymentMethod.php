<?php

declare(strict_types=1);

namespace App\Entity\Payment;

use Abenmada\MediaPlugin\Entity\Media\Media;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\PaymentMethod as BasePaymentMethod;
use Sylius\Component\Payment\Model\PaymentMethodTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_payment_method")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_payment_method')]
class PaymentMethod extends BasePaymentMethod
{
    /**
     * @ORM\ManyToOne(targetEntity=Media::class, inversedBy="paymentMethods")
     * @ORM\JoinColumn(name="logo_id", nullable=true, onDelete="SET NULL")
     */
    private ?Media $logo = null;

    public function getLogo(): ?Media
    {
        return $this->logo;
    }

    public function setLogo(?Media $logo): void
    {
        $this->logo = $logo;
    }

    protected function createTranslation(): PaymentMethodTranslationInterface
    {
        return new PaymentMethodTranslation();
    }
}
