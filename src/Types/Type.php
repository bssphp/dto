<?php

declare(strict_types=1);

namespace bssphp\dto\Types;

interface Type
{
    /**
     * Check if the given value is valid.
     *
     * @param mixed $value
     *
     * @return bool
     */
    public function isValid(mixed $value): bool;
}
