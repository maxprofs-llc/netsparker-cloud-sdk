<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class HttpRequestSettingModel
{
    /**
     * Gets or sets the accept.
     *
     * @var string
     */
    protected $accept;
    /**
     * Gets or sets the accept charset.
     *
     * @var string
     */
    protected $acceptCharset;
    /**
     * Gets or sets the accept language.
     *
     * @var string
     */
    protected $acceptLanguage;
    /**
     * Gets or sets a value indicating whether cookies are disabled.
     *
     * @var bool
     */
    protected $enableCookies;
    /**
     * Gets or sets a value indicating whether gzip and deflate is enabled.
     *
     * @var bool
     */
    protected $enableGzipAndDeflate;
    /**
     * Gets or sets a value indicating whether HTTP keep alive is enabled.
     *
     * @var bool
     */
    protected $httpKeepAlive;
    /**
     * Gets or sets a value indicating whether cookies are disabled.
     *
     * @var bool
     */
    protected $logHttpRequests;
    /**
     * Gets or sets the request count per unit time.
     *
     * @var int
     */
    protected $requestLimiterRequestPerUnitTime;
    /**
     * Gets or sets the unit time for request limiter.
     *
     * @var int
     */
    protected $requestLimiterUnitTime;
    /**
     * Gets or sets the request timeout in seconds.
     *
     * @var int
     */
    protected $requestTimeout;
    /**
     * Gets or sets the thread count.
     *
     * @var int
     */
    protected $threadCount;
    /**
     * Gets or sets the user agent.
     *
     * @var string
     */
    protected $userAgent;
    /**
     * Gets or sets the user agents.
     *
     * @var string[]
     */
    protected $userAgents;
    /**
     * Gets or sets a value indicating whether user agent forced.
     *
     * @var bool
     */
    protected $forceUserAgent;

    /**
     * Gets or sets the accept.
     *
     * @return string
     */
    public function getAccept(): ?string
    {
        return $this->accept;
    }

    /**
     * Gets or sets the accept.
     *
     * @param string $accept
     *
     * @return self
     */
    public function setAccept(?string $accept): self
    {
        $this->accept = $accept;

        return $this;
    }

    /**
     * Gets or sets the accept charset.
     *
     * @return string
     */
    public function getAcceptCharset(): ?string
    {
        return $this->acceptCharset;
    }

    /**
     * Gets or sets the accept charset.
     *
     * @param string $acceptCharset
     *
     * @return self
     */
    public function setAcceptCharset(?string $acceptCharset): self
    {
        $this->acceptCharset = $acceptCharset;

        return $this;
    }

    /**
     * Gets or sets the accept language.
     *
     * @return string
     */
    public function getAcceptLanguage(): ?string
    {
        return $this->acceptLanguage;
    }

    /**
     * Gets or sets the accept language.
     *
     * @param string $acceptLanguage
     *
     * @return self
     */
    public function setAcceptLanguage(?string $acceptLanguage): self
    {
        $this->acceptLanguage = $acceptLanguage;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether cookies are disabled.
     *
     * @return bool
     */
    public function getEnableCookies(): ?bool
    {
        return $this->enableCookies;
    }

    /**
     * Gets or sets a value indicating whether cookies are disabled.
     *
     * @param bool $enableCookies
     *
     * @return self
     */
    public function setEnableCookies(?bool $enableCookies): self
    {
        $this->enableCookies = $enableCookies;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether gzip and deflate is enabled.
     *
     * @return bool
     */
    public function getEnableGzipAndDeflate(): ?bool
    {
        return $this->enableGzipAndDeflate;
    }

    /**
     * Gets or sets a value indicating whether gzip and deflate is enabled.
     *
     * @param bool $enableGzipAndDeflate
     *
     * @return self
     */
    public function setEnableGzipAndDeflate(?bool $enableGzipAndDeflate): self
    {
        $this->enableGzipAndDeflate = $enableGzipAndDeflate;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether HTTP keep alive is enabled.
     *
     * @return bool
     */
    public function getHttpKeepAlive(): ?bool
    {
        return $this->httpKeepAlive;
    }

    /**
     * Gets or sets a value indicating whether HTTP keep alive is enabled.
     *
     * @param bool $httpKeepAlive
     *
     * @return self
     */
    public function setHttpKeepAlive(?bool $httpKeepAlive): self
    {
        $this->httpKeepAlive = $httpKeepAlive;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether cookies are disabled.
     *
     * @return bool
     */
    public function getLogHttpRequests(): ?bool
    {
        return $this->logHttpRequests;
    }

    /**
     * Gets or sets a value indicating whether cookies are disabled.
     *
     * @param bool $logHttpRequests
     *
     * @return self
     */
    public function setLogHttpRequests(?bool $logHttpRequests): self
    {
        $this->logHttpRequests = $logHttpRequests;

        return $this;
    }

    /**
     * Gets or sets the request count per unit time.
     *
     * @return int
     */
    public function getRequestLimiterRequestPerUnitTime(): ?int
    {
        return $this->requestLimiterRequestPerUnitTime;
    }

    /**
     * Gets or sets the request count per unit time.
     *
     * @param int $requestLimiterRequestPerUnitTime
     *
     * @return self
     */
    public function setRequestLimiterRequestPerUnitTime(?int $requestLimiterRequestPerUnitTime): self
    {
        $this->requestLimiterRequestPerUnitTime = $requestLimiterRequestPerUnitTime;

        return $this;
    }

    /**
     * Gets or sets the unit time for request limiter.
     *
     * @return int
     */
    public function getRequestLimiterUnitTime(): ?int
    {
        return $this->requestLimiterUnitTime;
    }

    /**
     * Gets or sets the unit time for request limiter.
     *
     * @param int $requestLimiterUnitTime
     *
     * @return self
     */
    public function setRequestLimiterUnitTime(?int $requestLimiterUnitTime): self
    {
        $this->requestLimiterUnitTime = $requestLimiterUnitTime;

        return $this;
    }

    /**
     * Gets or sets the request timeout in seconds.
     *
     * @return int
     */
    public function getRequestTimeout(): ?int
    {
        return $this->requestTimeout;
    }

    /**
     * Gets or sets the request timeout in seconds.
     *
     * @param int $requestTimeout
     *
     * @return self
     */
    public function setRequestTimeout(?int $requestTimeout): self
    {
        $this->requestTimeout = $requestTimeout;

        return $this;
    }

    /**
     * Gets or sets the thread count.
     *
     * @return int
     */
    public function getThreadCount(): ?int
    {
        return $this->threadCount;
    }

    /**
     * Gets or sets the thread count.
     *
     * @param int $threadCount
     *
     * @return self
     */
    public function setThreadCount(?int $threadCount): self
    {
        $this->threadCount = $threadCount;

        return $this;
    }

    /**
     * Gets or sets the user agent.
     *
     * @return string
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    /**
     * Gets or sets the user agent.
     *
     * @param string $userAgent
     *
     * @return self
     */
    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Gets or sets the user agents.
     *
     * @return string[]
     */
    public function getUserAgents(): ?\ArrayObject
    {
        return $this->userAgents;
    }

    /**
     * Gets or sets the user agents.
     *
     * @param string[] $userAgents
     *
     * @return self
     */
    public function setUserAgents(?\ArrayObject $userAgents): self
    {
        $this->userAgents = $userAgents;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether user agent forced.
     *
     * @return bool
     */
    public function getForceUserAgent(): ?bool
    {
        return $this->forceUserAgent;
    }

    /**
     * Gets or sets a value indicating whether user agent forced.
     *
     * @param bool $forceUserAgent
     *
     * @return self
     */
    public function setForceUserAgent(?bool $forceUserAgent): self
    {
        $this->forceUserAgent = $forceUserAgent;

        return $this;
    }
}
