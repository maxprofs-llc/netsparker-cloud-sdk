<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class SaveScanProfileApiModel
{
    /**
     * Gets or sets the agent group identifier.
     *
     * @var string
     */
    protected $agentGroupId;
    /**
     * Gets or sets the agent identifier.
     *
     * @var string
     */
    protected $agentId;
    /**
     * Gets or sets the type of the create.
     *
     * @var string
     */
    protected $createType;
    /**
     * Gets or sets a value indicating whether this instance is primary.
     *
     * @var bool
     */
    protected $isPrimary;
    /**
     * Gets or sets a value indicating whether this instance is shared.
     *
     * @var bool
     */
    protected $isShared;
    /**
     * Gets or sets a value indicating whether timewindow is enabled or not.
     *
     * @var bool
     */
    protected $isTimeWindowEnabled;
    /**
     * Gets or sets the scan policy identifier.
    Default: Default Security Checks
     *
     * @var string
     */
    protected $policyId;
    /**
     * Gets or sets the profile identifier.
     *
     * @var string
     */
    protected $profileId;
    /**
     * Gets or sets a name for this instance.
     *
     * @var string
     */
    protected $profileName;
    /**
     * Gets or sets the report policy identifier.
    Default: Default Report Policy
     *
     * @var string
     */
    protected $reportPolicyId;
    /**
     * Gets or sets the target website URL.
     *
     * @var string
     */
    protected $targetUri;
    /**
     * Gets or sets the user identifier.
     *
     * @var string
     */
    protected $userId;
    /**
     * Gets or sets the additional websites to scan.
     *
     * @var AdditionalWebsiteModel[]
     */
    protected $additionalWebsites;
    /**
     * Represents a model for carrying out basic authentication settings.
     *
     * @var BasicAuthenticationSettingModel
     */
    protected $basicAuthenticationApiModel;
    /**
     * Represents a model for carrying out client certificate authentication settings.
     *
     * @var ClientCertificateAuthenticationApiModel
     */
    protected $clientCertificateAuthenticationSetting;
    /**
     * Gets or sets the cookies. Separate multiple cookies with semicolon. Cookie values must be URL encoded. You can use the.
    following format: Cookiename=Value
     *
     * @var string
     */
    protected $cookies;
    /**
     * Gets or sets a value indicating whether parallel attacker is enabled.
    Default: true
     *
     * @var bool
     */
    protected $crawlAndAttack;
    /**
     * Gets or sets a value indicating whether Heuristic URL Rewrite support is enabled together with custom URL Rewrite.
    support.
     *
     * @var bool
     */
    protected $enableHeuristicChecksInCustomUrlRewrite;
    /**
     * Gets or sets the excluded links.
    Default: "(log|sign)\\-?(out|off)", "exit", "endsession", "gtm\\.js"
     *
     * @var ExcludedLinkModel[]
     */
    protected $excludedLinks;
    /**
     * Gets or sets the disallowed http methods.
     *
     * @var string[]
     */
    protected $disallowedHttpMethods;
    /**
     * Gets or sets a value indicating whether links should be excluded/included.
    Default: <see ref="bool.True" />
     *
     * @var bool
     */
    protected $excludeLinks;
    /**
     * Gets or sets a value indicating whether automatic crawling is enabled.
     *
     * @var bool
     */
    protected $findAndFollowNewLinks;
    /**
     * Represents a model for carrying out form authentication settings.
     *
     * @var FormAuthenticationSettingModel
     */
    protected $formAuthenticationSettingModel;
    /**
     * Represents a model for carrying out header authentication setttings.
     *
     * @var HeaderAuthenticationModel
     */
    protected $headerAuthentication;
    /**
     * Gets or sets the imported links.
     *
     * @var string[]
     */
    protected $importedLinks;
    /**
     * Gets or sets the imported files.
     *
     * @var ApiFileModel[]
     */
    protected $importedFiles;
    /**
     * Gets or sets a value indicating whether max scan duration is enabled.
    This is only used for scheduled group scan and regular group scan.
     *
     * @var bool
     */
    protected $isMaxScanDurationEnabled;
    /**
     * Gets or sets the root path maximum dynamic signatures for heuristic URL Rewrite detection.
    Default: 60
     *
     * @var int
     */
    protected $maxDynamicSignatures;
    /**
     * Gets or sets the maximum duration of the scan in hours.
    Default: 48 hours
     *
     * @var int
     */
    protected $maxScanDuration;
    /**
     * Gets or sets the scan scope.
    Default: {Netsparker.Cloud.Core.Models.ScanTaskScope.EnteredPathAndBelow}
     *
     * @var string
     */
    protected $scope;
    /**
     * Gets or sets the sub path maximum dynamic signatures for heuristic URL Rewrite detection.
    Default: 30
     *
     * @var int
     */
    protected $subPathMaxDynamicSignatures;
    /**
     * Represents a model for carrying out scan time window settings.
     *
     * @var ScanTimeWindowModel
     */
    protected $timeWindow;
    /**
     * Gets or sets the extensions that will be analyzed for heuristic URL Rewrite detection.
    Default: htm,html
     *
     * @var string
     */
    protected $urlRewriteAnalyzableExtensions;
    /**
     * Gets or sets the block separators for heuristic URL Rewrite detection.
    Default: /_ $.,;|:
     *
     * @var string
     */
    protected $urlRewriteBlockSeparators;
    /**
     * Gets or sets the URL Rewrite mode.
    Default: Heuristic
     *
     * @var string
     */
    protected $urlRewriteMode;
    /**
     * Gets or sets the URL Rewrite rules.
     *
     * @var UrlRewriteRuleModel[]
     */
    protected $urlRewriteRules;

    /**
     * Gets or sets the agent group identifier.
     *
     * @return string
     */
    public function getAgentGroupId(): ?string
    {
        return $this->agentGroupId;
    }

    /**
     * Gets or sets the agent group identifier.
     *
     * @param string $agentGroupId
     *
     * @return self
     */
    public function setAgentGroupId(?string $agentGroupId): self
    {
        $this->agentGroupId = $agentGroupId;

        return $this;
    }

    /**
     * Gets or sets the agent identifier.
     *
     * @return string
     */
    public function getAgentId(): ?string
    {
        return $this->agentId;
    }

    /**
     * Gets or sets the agent identifier.
     *
     * @param string $agentId
     *
     * @return self
     */
    public function setAgentId(?string $agentId): self
    {
        $this->agentId = $agentId;

        return $this;
    }

    /**
     * Gets or sets the type of the create.
     *
     * @return string
     */
    public function getCreateType(): ?string
    {
        return $this->createType;
    }

    /**
     * Gets or sets the type of the create.
     *
     * @param string $createType
     *
     * @return self
     */
    public function setCreateType(?string $createType): self
    {
        $this->createType = $createType;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether this instance is primary.
     *
     * @return bool
     */
    public function getIsPrimary(): ?bool
    {
        return $this->isPrimary;
    }

    /**
     * Gets or sets a value indicating whether this instance is primary.
     *
     * @param bool $isPrimary
     *
     * @return self
     */
    public function setIsPrimary(?bool $isPrimary): self
    {
        $this->isPrimary = $isPrimary;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether this instance is shared.
     *
     * @return bool
     */
    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    /**
     * Gets or sets a value indicating whether this instance is shared.
     *
     * @param bool $isShared
     *
     * @return self
     */
    public function setIsShared(?bool $isShared): self
    {
        $this->isShared = $isShared;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether timewindow is enabled or not.
     *
     * @return bool
     */
    public function getIsTimeWindowEnabled(): ?bool
    {
        return $this->isTimeWindowEnabled;
    }

    /**
     * Gets or sets a value indicating whether timewindow is enabled or not.
     *
     * @param bool $isTimeWindowEnabled
     *
     * @return self
     */
    public function setIsTimeWindowEnabled(?bool $isTimeWindowEnabled): self
    {
        $this->isTimeWindowEnabled = $isTimeWindowEnabled;

        return $this;
    }

    /**
     * Gets or sets the scan policy identifier.
    Default: Default Security Checks
     *
     * @return string
     */
    public function getPolicyId(): ?string
    {
        return $this->policyId;
    }

    /**
     * Gets or sets the scan policy identifier.
    Default: Default Security Checks
     *
     * @param string $policyId
     *
     * @return self
     */
    public function setPolicyId(?string $policyId): self
    {
        $this->policyId = $policyId;

        return $this;
    }

    /**
     * Gets or sets the profile identifier.
     *
     * @return string
     */
    public function getProfileId(): ?string
    {
        return $this->profileId;
    }

    /**
     * Gets or sets the profile identifier.
     *
     * @param string $profileId
     *
     * @return self
     */
    public function setProfileId(?string $profileId): self
    {
        $this->profileId = $profileId;

        return $this;
    }

    /**
     * Gets or sets a name for this instance.
     *
     * @return string
     */
    public function getProfileName(): ?string
    {
        return $this->profileName;
    }

    /**
     * Gets or sets a name for this instance.
     *
     * @param string $profileName
     *
     * @return self
     */
    public function setProfileName(?string $profileName): self
    {
        $this->profileName = $profileName;

        return $this;
    }

    /**
     * Gets or sets the report policy identifier.
    Default: Default Report Policy
     *
     * @return string
     */
    public function getReportPolicyId(): ?string
    {
        return $this->reportPolicyId;
    }

    /**
     * Gets or sets the report policy identifier.
    Default: Default Report Policy
     *
     * @param string $reportPolicyId
     *
     * @return self
     */
    public function setReportPolicyId(?string $reportPolicyId): self
    {
        $this->reportPolicyId = $reportPolicyId;

        return $this;
    }

    /**
     * Gets or sets the target website URL.
     *
     * @return string
     */
    public function getTargetUri(): ?string
    {
        return $this->targetUri;
    }

    /**
     * Gets or sets the target website URL.
     *
     * @param string $targetUri
     *
     * @return self
     */
    public function setTargetUri(?string $targetUri): self
    {
        $this->targetUri = $targetUri;

        return $this;
    }

    /**
     * Gets or sets the user identifier.
     *
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * Gets or sets the user identifier.
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Gets or sets the additional websites to scan.
     *
     * @return AdditionalWebsiteModel[]
     */
    public function getAdditionalWebsites(): ?array
    {
        return $this->additionalWebsites;
    }

    /**
     * Gets or sets the additional websites to scan.
     *
     * @param AdditionalWebsiteModel[] $additionalWebsites
     *
     * @return self
     */
    public function setAdditionalWebsites(?array $additionalWebsites): self
    {
        $this->additionalWebsites = $additionalWebsites;

        return $this;
    }

    /**
     * Represents a model for carrying out basic authentication settings.
     *
     * @return BasicAuthenticationSettingModel
     */
    public function getBasicAuthenticationApiModel(): ?BasicAuthenticationSettingModel
    {
        return $this->basicAuthenticationApiModel;
    }

    /**
     * Represents a model for carrying out basic authentication settings.
     *
     * @param BasicAuthenticationSettingModel $basicAuthenticationApiModel
     *
     * @return self
     */
    public function setBasicAuthenticationApiModel(?BasicAuthenticationSettingModel $basicAuthenticationApiModel): self
    {
        $this->basicAuthenticationApiModel = $basicAuthenticationApiModel;

        return $this;
    }

    /**
     * Represents a model for carrying out client certificate authentication settings.
     *
     * @return ClientCertificateAuthenticationApiModel
     */
    public function getClientCertificateAuthenticationSetting(): ?ClientCertificateAuthenticationApiModel
    {
        return $this->clientCertificateAuthenticationSetting;
    }

    /**
     * Represents a model for carrying out client certificate authentication settings.
     *
     * @param ClientCertificateAuthenticationApiModel $clientCertificateAuthenticationSetting
     *
     * @return self
     */
    public function setClientCertificateAuthenticationSetting(?ClientCertificateAuthenticationApiModel $clientCertificateAuthenticationSetting): self
    {
        $this->clientCertificateAuthenticationSetting = $clientCertificateAuthenticationSetting;

        return $this;
    }

    /**
     * Gets or sets the cookies. Separate multiple cookies with semicolon. Cookie values must be URL encoded. You can use the.
    following format: Cookiename=Value
     *
     * @return string
     */
    public function getCookies(): ?string
    {
        return $this->cookies;
    }

    /**
     * Gets or sets the cookies. Separate multiple cookies with semicolon. Cookie values must be URL encoded. You can use the.
    following format: Cookiename=Value
     *
     * @param string $cookies
     *
     * @return self
     */
    public function setCookies(?string $cookies): self
    {
        $this->cookies = $cookies;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether parallel attacker is enabled.
    Default: true
     *
     * @return bool
     */
    public function getCrawlAndAttack(): ?bool
    {
        return $this->crawlAndAttack;
    }

    /**
     * Gets or sets a value indicating whether parallel attacker is enabled.
    Default: true
     *
     * @param bool $crawlAndAttack
     *
     * @return self
     */
    public function setCrawlAndAttack(?bool $crawlAndAttack): self
    {
        $this->crawlAndAttack = $crawlAndAttack;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether Heuristic URL Rewrite support is enabled together with custom URL Rewrite.
    support.
     *
     * @return bool
     */
    public function getEnableHeuristicChecksInCustomUrlRewrite(): ?bool
    {
        return $this->enableHeuristicChecksInCustomUrlRewrite;
    }

    /**
     * Gets or sets a value indicating whether Heuristic URL Rewrite support is enabled together with custom URL Rewrite.
    support.
     *
     * @param bool $enableHeuristicChecksInCustomUrlRewrite
     *
     * @return self
     */
    public function setEnableHeuristicChecksInCustomUrlRewrite(?bool $enableHeuristicChecksInCustomUrlRewrite): self
    {
        $this->enableHeuristicChecksInCustomUrlRewrite = $enableHeuristicChecksInCustomUrlRewrite;

        return $this;
    }

    /**
     * Gets or sets the excluded links.
    Default: "(log|sign)\\-?(out|off)", "exit", "endsession", "gtm\\.js"
     *
     * @return ExcludedLinkModel[]
     */
    public function getExcludedLinks(): ?array
    {
        return $this->excludedLinks;
    }

    /**
     * Gets or sets the excluded links.
    Default: "(log|sign)\\-?(out|off)", "exit", "endsession", "gtm\\.js"
     *
     * @param ExcludedLinkModel[] $excludedLinks
     *
     * @return self
     */
    public function setExcludedLinks(?array $excludedLinks): self
    {
        $this->excludedLinks = $excludedLinks;

        return $this;
    }

    /**
     * Gets or sets the disallowed http methods.
     *
     * @return string[]
     */
    public function getDisallowedHttpMethods(): ?array
    {
        return $this->disallowedHttpMethods;
    }

    /**
     * Gets or sets the disallowed http methods.
     *
     * @param string[] $disallowedHttpMethods
     *
     * @return self
     */
    public function setDisallowedHttpMethods(?array $disallowedHttpMethods): self
    {
        $this->disallowedHttpMethods = $disallowedHttpMethods;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether links should be excluded/included.
    Default: <see ref="bool.True" />
     *
     * @return bool
     */
    public function getExcludeLinks(): ?bool
    {
        return $this->excludeLinks;
    }

    /**
     * Gets or sets a value indicating whether links should be excluded/included.
    Default: <see ref="bool.True" />
     *
     * @param bool $excludeLinks
     *
     * @return self
     */
    public function setExcludeLinks(?bool $excludeLinks): self
    {
        $this->excludeLinks = $excludeLinks;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether automatic crawling is enabled.
     *
     * @return bool
     */
    public function getFindAndFollowNewLinks(): ?bool
    {
        return $this->findAndFollowNewLinks;
    }

    /**
     * Gets or sets a value indicating whether automatic crawling is enabled.
     *
     * @param bool $findAndFollowNewLinks
     *
     * @return self
     */
    public function setFindAndFollowNewLinks(?bool $findAndFollowNewLinks): self
    {
        $this->findAndFollowNewLinks = $findAndFollowNewLinks;

        return $this;
    }

    /**
     * Represents a model for carrying out form authentication settings.
     *
     * @return FormAuthenticationSettingModel
     */
    public function getFormAuthenticationSettingModel(): ?FormAuthenticationSettingModel
    {
        return $this->formAuthenticationSettingModel;
    }

    /**
     * Represents a model for carrying out form authentication settings.
     *
     * @param FormAuthenticationSettingModel $formAuthenticationSettingModel
     *
     * @return self
     */
    public function setFormAuthenticationSettingModel(?FormAuthenticationSettingModel $formAuthenticationSettingModel): self
    {
        $this->formAuthenticationSettingModel = $formAuthenticationSettingModel;

        return $this;
    }

    /**
     * Represents a model for carrying out header authentication setttings.
     *
     * @return HeaderAuthenticationModel
     */
    public function getHeaderAuthentication(): ?HeaderAuthenticationModel
    {
        return $this->headerAuthentication;
    }

    /**
     * Represents a model for carrying out header authentication setttings.
     *
     * @param HeaderAuthenticationModel $headerAuthentication
     *
     * @return self
     */
    public function setHeaderAuthentication(?HeaderAuthenticationModel $headerAuthentication): self
    {
        $this->headerAuthentication = $headerAuthentication;

        return $this;
    }

    /**
     * Gets or sets the imported links.
     *
     * @return string[]
     */
    public function getImportedLinks(): ?array
    {
        return $this->importedLinks;
    }

    /**
     * Gets or sets the imported links.
     *
     * @param string[] $importedLinks
     *
     * @return self
     */
    public function setImportedLinks(?array $importedLinks): self
    {
        $this->importedLinks = $importedLinks;

        return $this;
    }

    /**
     * Gets or sets the imported files.
     *
     * @return ApiFileModel[]
     */
    public function getImportedFiles(): ?array
    {
        return $this->importedFiles;
    }

    /**
     * Gets or sets the imported files.
     *
     * @param ApiFileModel[] $importedFiles
     *
     * @return self
     */
    public function setImportedFiles(?array $importedFiles): self
    {
        $this->importedFiles = $importedFiles;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether max scan duration is enabled.
    This is only used for scheduled group scan and regular group scan.
     *
     * @return bool
     */
    public function getIsMaxScanDurationEnabled(): ?bool
    {
        return $this->isMaxScanDurationEnabled;
    }

    /**
     * Gets or sets a value indicating whether max scan duration is enabled.
    This is only used for scheduled group scan and regular group scan.
     *
     * @param bool $isMaxScanDurationEnabled
     *
     * @return self
     */
    public function setIsMaxScanDurationEnabled(?bool $isMaxScanDurationEnabled): self
    {
        $this->isMaxScanDurationEnabled = $isMaxScanDurationEnabled;

        return $this;
    }

    /**
     * Gets or sets the root path maximum dynamic signatures for heuristic URL Rewrite detection.
    Default: 60
     *
     * @return int
     */
    public function getMaxDynamicSignatures(): ?int
    {
        return $this->maxDynamicSignatures;
    }

    /**
     * Gets or sets the root path maximum dynamic signatures for heuristic URL Rewrite detection.
    Default: 60
     *
     * @param int $maxDynamicSignatures
     *
     * @return self
     */
    public function setMaxDynamicSignatures(?int $maxDynamicSignatures): self
    {
        $this->maxDynamicSignatures = $maxDynamicSignatures;

        return $this;
    }

    /**
     * Gets or sets the maximum duration of the scan in hours.
    Default: 48 hours
     *
     * @return int
     */
    public function getMaxScanDuration(): ?int
    {
        return $this->maxScanDuration;
    }

    /**
     * Gets or sets the maximum duration of the scan in hours.
    Default: 48 hours
     *
     * @param int $maxScanDuration
     *
     * @return self
     */
    public function setMaxScanDuration(?int $maxScanDuration): self
    {
        $this->maxScanDuration = $maxScanDuration;

        return $this;
    }

    /**
     * Gets or sets the scan scope.
    Default: {Netsparker.Cloud.Core.Models.ScanTaskScope.EnteredPathAndBelow}
     *
     * @return string
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * Gets or sets the scan scope.
    Default: {Netsparker.Cloud.Core.Models.ScanTaskScope.EnteredPathAndBelow}
     *
     * @param string $scope
     *
     * @return self
     */
    public function setScope(?string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Gets or sets the sub path maximum dynamic signatures for heuristic URL Rewrite detection.
    Default: 30
     *
     * @return int
     */
    public function getSubPathMaxDynamicSignatures(): ?int
    {
        return $this->subPathMaxDynamicSignatures;
    }

    /**
     * Gets or sets the sub path maximum dynamic signatures for heuristic URL Rewrite detection.
    Default: 30
     *
     * @param int $subPathMaxDynamicSignatures
     *
     * @return self
     */
    public function setSubPathMaxDynamicSignatures(?int $subPathMaxDynamicSignatures): self
    {
        $this->subPathMaxDynamicSignatures = $subPathMaxDynamicSignatures;

        return $this;
    }

    /**
     * Represents a model for carrying out scan time window settings.
     *
     * @return ScanTimeWindowModel
     */
    public function getTimeWindow(): ?ScanTimeWindowModel
    {
        return $this->timeWindow;
    }

    /**
     * Represents a model for carrying out scan time window settings.
     *
     * @param ScanTimeWindowModel $timeWindow
     *
     * @return self
     */
    public function setTimeWindow(?ScanTimeWindowModel $timeWindow): self
    {
        $this->timeWindow = $timeWindow;

        return $this;
    }

    /**
     * Gets or sets the extensions that will be analyzed for heuristic URL Rewrite detection.
    Default: htm,html
     *
     * @return string
     */
    public function getUrlRewriteAnalyzableExtensions(): ?string
    {
        return $this->urlRewriteAnalyzableExtensions;
    }

    /**
     * Gets or sets the extensions that will be analyzed for heuristic URL Rewrite detection.
    Default: htm,html
     *
     * @param string $urlRewriteAnalyzableExtensions
     *
     * @return self
     */
    public function setUrlRewriteAnalyzableExtensions(?string $urlRewriteAnalyzableExtensions): self
    {
        $this->urlRewriteAnalyzableExtensions = $urlRewriteAnalyzableExtensions;

        return $this;
    }

    /**
     * Gets or sets the block separators for heuristic URL Rewrite detection.
    Default: /_ $.,;|:
     *
     * @return string
     */
    public function getUrlRewriteBlockSeparators(): ?string
    {
        return $this->urlRewriteBlockSeparators;
    }

    /**
     * Gets or sets the block separators for heuristic URL Rewrite detection.
    Default: /_ $.,;|:
     *
     * @param string $urlRewriteBlockSeparators
     *
     * @return self
     */
    public function setUrlRewriteBlockSeparators(?string $urlRewriteBlockSeparators): self
    {
        $this->urlRewriteBlockSeparators = $urlRewriteBlockSeparators;

        return $this;
    }

    /**
     * Gets or sets the URL Rewrite mode.
    Default: Heuristic
     *
     * @return string
     */
    public function getUrlRewriteMode(): ?string
    {
        return $this->urlRewriteMode;
    }

    /**
     * Gets or sets the URL Rewrite mode.
    Default: Heuristic
     *
     * @param string $urlRewriteMode
     *
     * @return self
     */
    public function setUrlRewriteMode(?string $urlRewriteMode): self
    {
        $this->urlRewriteMode = $urlRewriteMode;

        return $this;
    }

    /**
     * Gets or sets the URL Rewrite rules.
     *
     * @return UrlRewriteRuleModel[]
     */
    public function getUrlRewriteRules(): ?array
    {
        return $this->urlRewriteRules;
    }

    /**
     * Gets or sets the URL Rewrite rules.
     *
     * @param UrlRewriteRuleModel[] $urlRewriteRules
     *
     * @return self
     */
    public function setUrlRewriteRules(?array $urlRewriteRules): self
    {
        $this->urlRewriteRules = $urlRewriteRules;

        return $this;
    }
}