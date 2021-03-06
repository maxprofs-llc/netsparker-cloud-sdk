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

class ScanPolicySettingItemApiModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\ScanPolicySettingItemApiModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\ScanPolicySettingItemApiModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\ScanPolicySettingItemApiModel();
        if (property_exists($data, 'Description')) {
            $object->setDescription($data->{'Description'});
        }
        if (property_exists($data, 'Groups')) {
            $values = [];
            foreach ($data->{'Groups'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Montross50\\NetsparkerCloud\\SDK\\Model\\WebsiteGroupModel', 'json', $context);
            }
            $object->setGroups($values);
        }
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'IsDefault')) {
            $object->setIsDefault($data->{'IsDefault'});
        }
        if (property_exists($data, 'IsShared')) {
            $object->setIsShared($data->{'IsShared'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'OptimizerOptions')) {
            $object->setOptimizerOptions($this->denormalizer->denormalize($data->{'OptimizerOptions'}, 'Montross50\\NetsparkerCloud\\SDK\\Model\\ScanPolicyOptimizerOptions', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDescription()) {
            $data->{'Description'} = $object->getDescription();
        }
        if (null !== $object->getGroups()) {
            $values = [];
            foreach ($object->getGroups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Groups'} = $values;
        }
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getIsDefault()) {
            $data->{'IsDefault'} = $object->getIsDefault();
        }
        if (null !== $object->getIsShared()) {
            $data->{'IsShared'} = $object->getIsShared();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getOptimizerOptions()) {
            $data->{'OptimizerOptions'} = $this->normalizer->normalize($object->getOptimizerOptions(), 'json', $context);
        }

        return $data;
    }
}
