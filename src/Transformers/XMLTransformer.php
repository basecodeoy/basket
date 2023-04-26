<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Transformers;

use BombenProdukt\Basket\Order;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerialiser;

final class XMLTransformer extends AbstractTransformer
{
    /**
     * @return mixed
     */
    public function transform(Order $order): string
    {
        return (new SymfonySerialiser(
            [new ObjectNormalizer()],
            [new XmlEncoder()],
        ))->serialize($this->build($order), 'xml');
    }
}
