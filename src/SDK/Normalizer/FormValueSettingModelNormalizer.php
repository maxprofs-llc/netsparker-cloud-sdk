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

class FormValueSettingModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\FormValueSettingModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\FormValueSettingModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\FormValueSettingModel();
        if (property_exists($data, 'Force')) {
            $object->setForce($data->{'Force'});
        }
        if (property_exists($data, 'Match')) {
            $object->setMatch($data->{'Match'});
        }
        if (property_exists($data, 'MatchTarget')) {
            $values = [];
            foreach ($data->{'MatchTarget'} as $value) {
                $values[] = $value;
            }
            $object->setMatchTarget($values);
        }
        if (property_exists($data, 'MatchTargetValue')) {
            $object->setMatchTargetValue($data->{'MatchTargetValue'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Pattern')) {
            $object->setPattern($data->{'Pattern'});
        }
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }
        if (property_exists($data, 'Value')) {
            $object->setValue($data->{'Value'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getForce()) {
            $data->{'Force'} = $object->getForce();
        }
        if (null !== $object->getMatch()) {
            $data->{'Match'} = $object->getMatch();
        }
        if (null !== $object->getMatchTarget()) {
            $values = [];
            foreach ($object->getMatchTarget() as $value) {
                $values[] = $value;
            }
            $data->{'MatchTarget'} = $values;
        }
        if (null !== $object->getMatchTargetValue()) {
            $data->{'MatchTargetValue'} = $object->getMatchTargetValue();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getPattern()) {
            $data->{'Pattern'} = $object->getPattern();
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }
        if (null !== $object->getValue()) {
            $data->{'Value'} = $object->getValue();
        }

        return $data;
    }
}