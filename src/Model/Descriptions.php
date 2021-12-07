<?php

namespace App\Model;

class Descriptions
{
    /**
     * @var Description[]
     */
    private array $descriptions = [];

    public function __construct(array $descriptions)
    {
        $this->descriptions = array_map(fn (string $description) => new Description($description), $descriptions);
    }

    public function getDescriptions(): array
    {
        return $this->descriptions;
    }
}
