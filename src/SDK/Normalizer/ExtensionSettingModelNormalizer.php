<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ExtensionSettingModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\ExtensionSettingModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\ExtensionSettingModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\ExtensionSettingModel();
        if (property_exists($data, 'AttackOption')) {
            $object->setAttackOption($data->{'AttackOption'});
        }
        if (property_exists($data, 'CrawlOption')) {
            $object->setCrawlOption($data->{'CrawlOption'});
        }
        if (property_exists($data, 'Extension')) {
            $object->setExtension($data->{'Extension'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAttackOption()) {
            $data->{'AttackOption'} = $object->getAttackOption();
        }
        if (null !== $object->getCrawlOption()) {
            $data->{'CrawlOption'} = $object->getCrawlOption();
        }
        if (null !== $object->getExtension()) {
            $data->{'Extension'} = $object->getExtension();
        }

        return $data;
    }
}
