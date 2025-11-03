<?php

declare(strict_types=1);

namespace N1ebieski\KSEFClient\ValueObjects\Requests;

use N1ebieski\KSEFClient\Support\AbstractValueObject;
use Stringable;

final class EuEntityName extends AbstractValueObject implements Stringable
{
    public function __construct(
        public readonly string $euSubjectName,
        public readonly string $euSubjectAddress
    ) {
    }

    public static function from(string $euSubjectName, string $euSubjectAddress): self
    {
        return new self($euSubjectName, $euSubjectAddress);
    }

    public function __toString(): string
    {
        return "{$this->euSubjectName}, {$this->euSubjectAddress}";
    }
}
