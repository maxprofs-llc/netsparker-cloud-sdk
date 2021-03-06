<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class HeaderAuthenticationModel
{
    /**
     * Gets or sets the headers.
     *
     * @var CustomHttpHeaderModel[]
     */
    protected $headers;
    /**
     * Gets or sets whether the authentication is enabled;.
     *
     * @var bool
     */
    protected $isEnabled;

    /**
     * Gets or sets the headers.
     *
     * @return CustomHttpHeaderModel[]
     */
    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    /**
     * Gets or sets the headers.
     *
     * @param CustomHttpHeaderModel[] $headers
     *
     * @return self
     */
    public function setHeaders(?array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Gets or sets whether the authentication is enabled;.
     *
     * @return bool
     */
    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    /**
     * Gets or sets whether the authentication is enabled;.
     *
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }
}
