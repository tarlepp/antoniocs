<?php

namespace App\Model;

class ItemMaintenance
{
    private ?Header $Header = null;

    public function getHeader(): ?Header
    {
        return $this->Header;
    }

    public function setHeader(?Header $Header): void
    {
        $this->Header = $Header;
    }
}
