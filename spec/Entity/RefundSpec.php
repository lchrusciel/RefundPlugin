<?php

declare(strict_types=1);

namespace spec\Sylius\RefundPlugin\Entity;

use PhpSpec\ObjectBehavior;
use Sylius\RefundPlugin\Entity\RefundInterface;
use Sylius\RefundPlugin\Model\RefundType;

final class RefundSpec extends ObjectBehavior
{
    function let(): void
    {
        $this->beConstructedWith('000666', 1000, 3, RefundType::orderItemUnit());
    }

    function it_implements_refund_interface(): void
    {
        $this->shouldImplement(RefundInterface::class);
    }

    function it_has_order_number(): void
    {
        $this->getOrderNumber()->shouldReturn('000666');
    }

    function it_has_amount(): void
    {
        $this->getAmount()->shouldReturn(1000);
    }

    function it_has_refunded_unit_id(): void
    {
        $this->getRefundedUnitId()->shouldReturn(3);
    }

    function it_has_type(): void
    {
        $this->getType()->shouldBeLike(RefundType::orderItemUnit());
    }
}
