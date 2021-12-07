<?php

namespace App\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Description
{
    public function __construct(
        private string $description
    ) {
    }

    public function getDescription()
    {
        return $this->description;
    }
}
