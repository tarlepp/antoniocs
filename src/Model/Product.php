<?php

namespace App\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Product
{
    /**
     * @SerializedName("@Name")
     */
    private string $name = '';

    /**
     * @SerializedName("@Descriptions")
     */
    private ?Descriptions $descriptions = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescriptions(): ?Descriptions
    {
        return $this->descriptions;
    }

    public function setDescriptions(array $descriptions): void
    {
        $this->descriptions = new Descriptions($descriptions['Description']);
    }
}
