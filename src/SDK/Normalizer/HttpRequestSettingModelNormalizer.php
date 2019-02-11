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

class HttpRequestSettingModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\NetsparkerCloud\\SDK\\Model\\HttpRequestSettingModel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\NetsparkerCloud\SDK\Model\HttpRequestSettingModel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\NetsparkerCloud\SDK\Model\HttpRequestSettingModel();
        if (property_exists($data, 'Accept')) {
            $object->setAccept($data->{'Accept'});
        }
        if (property_exists($data, 'AcceptCharset')) {
            $object->setAcceptCharset($data->{'AcceptCharset'});
        }
        if (property_exists($data, 'AcceptLanguage')) {
            $object->setAcceptLanguage($data->{'AcceptLanguage'});
        }
        if (property_exists($data, 'EnableCookies')) {
            $object->setEnableCookies($data->{'EnableCookies'});
        }
        if (property_exists($data, 'EnableGzipAndDeflate')) {
            $object->setEnableGzipAndDeflate($data->{'EnableGzipAndDeflate'});
        }
        if (property_exists($data, 'HttpKeepAlive')) {
            $object->setHttpKeepAlive($data->{'HttpKeepAlive'});
        }
        if (property_exists($data, 'LogHttpRequests')) {
            $object->setLogHttpRequests($data->{'LogHttpRequests'});
        }
        if (property_exists($data, 'RequestLimiterRequestPerUnitTime')) {
            $object->setRequestLimiterRequestPerUnitTime($data->{'RequestLimiterRequestPerUnitTime'});
        }
        if (property_exists($data, 'RequestLimiterUnitTime')) {
            $object->setRequestLimiterUnitTime($data->{'RequestLimiterUnitTime'});
        }
        if (property_exists($data, 'RequestTimeout')) {
            $object->setRequestTimeout($data->{'RequestTimeout'});
        }
        if (property_exists($data, 'ThreadCount')) {
            $object->setThreadCount($data->{'ThreadCount'});
        }
        if (property_exists($data, 'UserAgent')) {
            $object->setUserAgent($data->{'UserAgent'});
        }
        if (property_exists($data, 'UserAgents')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'UserAgents'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setUserAgents($values);
        }
        if (property_exists($data, 'ForceUserAgent')) {
            $object->setForceUserAgent($data->{'ForceUserAgent'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccept()) {
            $data->{'Accept'} = $object->getAccept();
        }
        if (null !== $object->getAcceptCharset()) {
            $data->{'AcceptCharset'} = $object->getAcceptCharset();
        }
        if (null !== $object->getAcceptLanguage()) {
            $data->{'AcceptLanguage'} = $object->getAcceptLanguage();
        }
        if (null !== $object->getEnableCookies()) {
            $data->{'EnableCookies'} = $object->getEnableCookies();
        }
        if (null !== $object->getEnableGzipAndDeflate()) {
            $data->{'EnableGzipAndDeflate'} = $object->getEnableGzipAndDeflate();
        }
        if (null !== $object->getHttpKeepAlive()) {
            $data->{'HttpKeepAlive'} = $object->getHttpKeepAlive();
        }
        if (null !== $object->getLogHttpRequests()) {
            $data->{'LogHttpRequests'} = $object->getLogHttpRequests();
        }
        if (null !== $object->getRequestLimiterRequestPerUnitTime()) {
            $data->{'RequestLimiterRequestPerUnitTime'} = $object->getRequestLimiterRequestPerUnitTime();
        }
        if (null !== $object->getRequestLimiterUnitTime()) {
            $data->{'RequestLimiterUnitTime'} = $object->getRequestLimiterUnitTime();
        }
        if (null !== $object->getRequestTimeout()) {
            $data->{'RequestTimeout'} = $object->getRequestTimeout();
        }
        if (null !== $object->getThreadCount()) {
            $data->{'ThreadCount'} = $object->getThreadCount();
        }
        if (null !== $object->getUserAgent()) {
            $data->{'UserAgent'} = $object->getUserAgent();
        }
        if (null !== $object->getUserAgents()) {
            $values = new \stdClass();
            foreach ($object->getUserAgents() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'UserAgents'} = $values;
        }
        if (null !== $object->getForceUserAgent()) {
            $data->{'ForceUserAgent'} = $object->getForceUserAgent();
        }

        return $data;
    }
}