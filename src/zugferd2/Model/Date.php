<?php

declare(strict_types=1);

namespace Easybill\ZUGFeRD2\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

class Date
{
    #[Type(DateString::class)]
    #[XmlElement(cdata: false, namespace: 'urn:un:unece:uncefact:data:standard:UnqualifiedDataType:100')]
    #[SerializedName('DateString')]
    public DateString $dateString;

    public static function create(int $format, string $value): self
    {
        $self = new self();
        $self->dateString = DateString::create($format, $value);
        return $self;
    }
}
