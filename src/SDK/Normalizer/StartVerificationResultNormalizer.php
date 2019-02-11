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

class StartVerificationResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\StartVerificationResult';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\StartVerificationResult;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\StartVerificationResult();
        if (property_exists($data, 'Data')) {
            $object->setData($data->{'Data'});
        }
        if (property_exists($data, 'Message')) {
            $object->setMessage($data->{'Message'});
        }
        if (property_exists($data, 'VerifyOwnershipResult')) {
            $object->setVerifyOwnershipResult($data->{'VerifyOwnershipResult'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getData()) {
            $data->{'Data'} = $object->getData();
        }
        if (null !== $object->getMessage()) {
            $data->{'Message'} = $object->getMessage();
        }
        if (null !== $object->getVerifyOwnershipResult()) {
            $data->{'VerifyOwnershipResult'} = $object->getVerifyOwnershipResult();
        }

        return $data;
    }
}