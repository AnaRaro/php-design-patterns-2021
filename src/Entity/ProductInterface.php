<?php

declare(strict_types=1);

namespace App\Entity;

use Money\Money;

interface ProductInterface
{
    public function getName(): string;

    public function getRetailPrice(): Money;
}