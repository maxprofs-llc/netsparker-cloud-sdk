<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Endpoint;

class ScansReport extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * @param array $queryParameters {
     *
     *     @var string $contentFormat Gets or sets the content format. This parameter can only be used for vulnerabilities XML and JSON report.
     *     @var bool $excludeResponseData If set to true, HTTP response data will be excluded from the vulnerability detail. This parameter can only be
     *     @var string $format Gets or sets the report format.
     *     @var string $id gets or sets the scan identifier
     *     @var string $type Gets or sets the report type.
    FullScanDetail option corresponds to "Detailed Scan Report (Including addressed issues)".
    ScanDetail option corresponds to "Detailed Scan Report (Excluding addressed issues)".
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/api/1.0/scans/report/';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['contentFormat', 'excludeResponseData', 'format', 'id', 'type']);
        $optionsResolver->setRequired(['format', 'id', 'type']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('contentFormat', ['string']);
        $optionsResolver->setAllowedTypes('excludeResponseData', ['bool']);
        $optionsResolver->setAllowedTypes('format', ['string']);
        $optionsResolver->setAllowedTypes('id', ['string']);
        $optionsResolver->setAllowedTypes('type', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\ScansReportBadRequestException
     * @throws \Montross50\NetsparkerCloud\SDK\Exception\ScansReportNotFoundException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Montross50\NetsparkerCloud\SDK\Exception\ScansReportBadRequestException();
        }
        if (404 === $status) {
            throw new \Montross50\NetsparkerCloud\SDK\Exception\ScansReportNotFoundException();
        }
    }
}