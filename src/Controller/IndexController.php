<?php

namespace App\Controller;

use App\Model\ItemMaintenance;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class IndexController
{
    /**
     * @Route(path="/")
     */
    public function __invoke(SerializerInterface $serializer): JsonResponse
    {
        $xml = <<<XML
<ItemMaintenance Version="1.0">
    <Header>
        <OrganizationID>Test</OrganizationID>
        <DivisionID>41</DivisionID>
    </Header>
</ItemMaintenance>
XML;

        $data = $serializer->deserialize($xml, ItemMaintenance::class, 'xml');

        dd($data);

        return new JsonResponse($data);
    }
}
