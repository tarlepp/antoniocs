<?php

namespace App\Model;

class Header
{
    private ?string $OrganizationID = null;
    private ?int $DivisionID = null;
    public \DateTimeImmutable $date;

    public function __construct() {
        $this->date = new \DateTimeImmutable();
    }

    public function getOrganizationID(): ?string
    {
        return $this->OrganizationID;
    }

    public function setOrganizationID(?string $OrganizationID): void
    {
        $this->OrganizationID = $OrganizationID;
    }

    public function getDivisionID(): ?int
    {
        return $this->DivisionID;
    }

    public function setDivisionID(?int $DivisionID): void
    {
        $this->DivisionID = $DivisionID;
    }
}
