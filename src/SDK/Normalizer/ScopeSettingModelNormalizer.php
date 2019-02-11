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

class ScopeSettingModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\ScopeSettingModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\ScopeSettingModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\ScopeSettingModel();
        if (property_exists($data, 'BlockAdNetworks')) {
            $object->setBlockAdNetworks($data->{'BlockAdNetworks'});
        }
        if (property_exists($data, 'ByPassScopeForStaticChecks')) {
            $object->setByPassScopeForStaticChecks($data->{'ByPassScopeForStaticChecks'});
        }
        if (property_exists($data, 'CaseSensitiveScope')) {
            $object->setCaseSensitiveScope($data->{'CaseSensitiveScope'});
        }
        if (property_exists($data, 'ContentTypeCheckEnabled')) {
            $object->setContentTypeCheckEnabled($data->{'ContentTypeCheckEnabled'});
        }
        if (property_exists($data, 'IgnoredContentTypes')) {
            $values = [];
            foreach ($data->{'IgnoredContentTypes'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Montross50\\NetsparkerCloud\\SDK\\Model\\ContentTypeModel', 'json', $context);
            }
            $object->setIgnoredContentTypes($values);
        }
        if (property_exists($data, 'RestrictedExtensions')) {
            $object->setRestrictedExtensions($data->{'RestrictedExtensions'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBlockAdNetworks()) {
            $data->{'BlockAdNetworks'} = $object->getBlockAdNetworks();
        }
        if (null !== $object->getByPassScopeForStaticChecks()) {
            $data->{'ByPassScopeForStaticChecks'} = $object->getByPassScopeForStaticChecks();
        }
        if (null !== $object->getCaseSensitiveScope()) {
            $data->{'CaseSensitiveScope'} = $object->getCaseSensitiveScope();
        }
        if (null !== $object->getContentTypeCheckEnabled()) {
            $data->{'ContentTypeCheckEnabled'} = $object->getContentTypeCheckEnabled();
        }
        if (null !== $object->getIgnoredContentTypes()) {
            $values = [];
            foreach ($object->getIgnoredContentTypes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'IgnoredContentTypes'} = $values;
        }
        if (null !== $object->getRestrictedExtensions()) {
            $data->{'RestrictedExtensions'} = $object->getRestrictedExtensions();
        }

        return $data;
    }
}