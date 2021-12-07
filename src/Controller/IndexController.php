<?php

namespace App\Controller;

use App\Model\Product;
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
<Products>
 <Product>
  <Name>Test</Name>
  <Descriptions>
    <Description>
      Description string 1
    </Description>
    <Description>
      Description string 2
    </Description>
  </Descriptions>
 </Product>
</Products>
XML;

        $data = $serializer->deserialize($xml, Product::class . '[]', 'xml');

        dd($data);

        return new JsonResponse($data);
    }
}
