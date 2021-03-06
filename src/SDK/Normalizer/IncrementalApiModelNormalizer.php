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

class IncrementalApiModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\IncrementalApiModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\IncrementalApiModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\IncrementalApiModel();
        if (property_exists($data, 'IsMaxScanDurationEnabled')) {
            $object->setIsMaxScanDurationEnabled($data->{'IsMaxScanDurationEnabled'});
        }
        if (property_exists($data, 'MaxScanDuration')) {
            $object->setMaxScanDuration($data->{'MaxScanDuration'});
        }
        if (property_exists($data, 'AgentName')) {
            $object->setAgentName($data->{'AgentName'});
        }
        if (property_exists($data, 'BaseScanId')) {
            $object->setBaseScanId($data->{'BaseScanId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsMaxScanDurationEnabled()) {
            $data->{'IsMaxScanDurationEnabled'} = $object->getIsMaxScanDurationEnabled();
        }
        if (null !== $object->getMaxScanDuration()) {
            $data->{'MaxScanDuration'} = $object->getMaxScanDuration();
        }
        if (null !== $object->getAgentName()) {
            $data->{'AgentName'} = $object->getAgentName();
        }
        if (null !== $object->getBaseScanId()) {
            $data->{'BaseScanId'} = $object->getBaseScanId();
        }

        return $data;
    }
}
