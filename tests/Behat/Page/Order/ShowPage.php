<?php

declare(strict_types=1);

namespace Tests\Sylius\RefundPlugin\Behat\Page\Order;

use Sylius\Behat\Page\Admin\Order\ShowPage as BaseOrderShowPage;

final class ShowPage extends BaseOrderShowPage implements ShowPageInterface
{
    public function hasRefundsButton(): bool
    {
        return $this->getDocument()->hasButton('Refunds');
    }
}
