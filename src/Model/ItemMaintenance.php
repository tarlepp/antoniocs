<?php

namespace App\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ItemMaintenance
{
    /**
     * @SerializedName("@Version")
     */
    private ?float $Version = null;

    private ?Header $Header = null;

    public function getVersion(): ?float
    {
        return $this->Version;
    }

    public function setVersion(?float $Version): void
    {
        $this->Version = $Version;
    }

    public function getHeader(): ?Header
    {
        return $this->Header;
    }

    public function setHeader(?Header $Header): void
    {
        $this->Header = $Header;
    }
}
