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

class WebsiteApiModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\WebsiteApiModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\WebsiteApiModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\WebsiteApiModel();
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'CreatedAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'CreatedAt'}));
        }
        if (property_exists($data, 'UpdatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'UpdatedAt'}));
        }
        if (property_exists($data, 'RootUrl')) {
            $object->setRootUrl($data->{'RootUrl'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Groups')) {
            $values = [];
            foreach ($data->{'Groups'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Montross50\\NetsparkerCloud\\SDK\\Model\\IdNamePair', 'json', $context);
            }
            $object->setGroups($values);
        }
        if (property_exists($data, 'IsVerified')) {
            $object->setIsVerified($data->{'IsVerified'});
        }
        if (property_exists($data, 'LicenseType')) {
            $object->setLicenseType($data->{'LicenseType'});
        }
        if (property_exists($data, 'AgentMode')) {
            $object->setAgentMode($data->{'AgentMode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'CreatedAt'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'UpdatedAt'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getRootUrl()) {
            $data->{'RootUrl'} = $object->getRootUrl();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getGroups()) {
            $values = [];
            foreach ($object->getGroups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Groups'} = $values;
        }
        if (null !== $object->getIsVerified()) {
            $data->{'IsVerified'} = $object->getIsVerified();
        }
        if (null !== $object->getLicenseType()) {
            $data->{'LicenseType'} = $object->getLicenseType();
        }
        if (null !== $object->getAgentMode()) {
            $data->{'AgentMode'} = $object->getAgentMode();
        }

        return $data;
    }
}
