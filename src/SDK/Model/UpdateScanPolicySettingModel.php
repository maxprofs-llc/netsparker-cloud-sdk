<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class UpdateScanPolicySettingModel
{
    /**
     * Gets or sets the identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Gets or sets a value indicating whether this scan policy is shared.
     *
     * @var bool
     */
    protected $isShared;
    /**
     * Gets the desktop identifier.
     *
     * @var string
     */
    protected $desktopId;
    /**
     * Represents a model for carrying out attacking settings.
     *
     * @var AttackingSettingModel
     */
    protected $attackingSettings;
    /**
     * Gets or sets the auto complete settings.
     *
     * @var AutoCompleteSettingModel[]
     */
    protected $autoCompleteSettings;
    /**
     * Represents a model for carrying out authentication brute force settings.
     *
     * @var BruteForceSettingModel
     */
    protected $bruteForceSettings;
    /**
     * Represents a model for carrying out crawling settings.
     *
     * @var CrawlingSettingModel
     */
    protected $crawlingSettings;
    /**
     * Provides the settings for Cross-site Request Forgery checks.
     *
     * @var CsrfSettingModel
     */
    protected $csrfSettings;
    /**
     * Represents a model for carrying out custom 404 settings.
     *
     * @var Custom404SettingModel
     */
    protected $custom404Settings;
    /**
     * Gets or sets the custom HTTP header settings.
     *
     * @var CustomHttpHeaderSetting[]
     */
    protected $customHttpHeaderSettings;
    /**
     * Gets or sets the description.
     *
     * @var string
     */
    protected $description;
    /**
     * Gets or sets a value indicating whether knowledgebase is enabled.
     *
     * @var bool
     */
    protected $enableKnowledgebase;
    /**
     * Gets or sets the form value settings.
     *
     * @var FormValueSettingModel[]
     */
    protected $formValueSettings;
    /**
     * Represents a model for carrying out HTTP request settings.
     *
     * @var HttpRequestSettingModel
     */
    protected $httpRequestSettings;
    /**
     * Gets or sets the ignored email patterns.
     *
     * @var EmailPatternSetting[]
     */
    protected $ignoredEmailPatterns;
    /**
     * Gets or sets the ignored parameter patterns.
     *
     * @var IgnorePatternSettingModel[]
     */
    protected $ignorePatternSettings;
    /**
     * Represents a model for carrying out javascript settings.
     *
     * @var JavaScriptSettingsModel
     */
    protected $javaScriptSettings;
    /**
     * Gets or sets the name.
     *
     * @var string
     */
    protected $name;
    /**
     * Represents a model for carrying out authentication proxy settings.
     *
     * @var ProxySettingsModel
     */
    protected $proxySettings;
    /**
     * Represents a model for carrying out scope settings.
     *
     * @var ScopeSettingModel
     */
    protected $scopeSettings;
    /**
     * Gets or sets the engine settings.
     *
     * @var SecurityCheckGroupModel[]
     */
    protected $securityCheckGroups;
    /**
     * Gets or sets the selected website groups.
     *
     * @var string[]
     */
    protected $selectedGroups;
    /**
     * Gets or sets the sensitive keyword settings.
     *
     * @var SensitiveKeywordSettingModel[]
     */
    protected $sensitiveKeywordSettings;
    /**
     * Represents SSL/TLS settings.
     *
     * @var SslTlsSettingModel
     */
    protected $sslTlsSettingModel;
    /**
     * Gets or sets the Web Storage Settings.
     *
     * @var WebStorageSetting[]
     */
    protected $webStorageSettings;
    /**
     * Gets or sets the Extension Settings.
     *
     * @var ExtensionSettingModel[]
     */
    protected $extensionSettings;

    /**
     * Gets or sets the identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Gets or sets the identifier.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether this scan policy is shared.
     *
     * @return bool
     */
    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    /**
     * Gets or sets a value indicating whether this scan policy is shared.
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
     * Gets the desktop identifier.
     *
     * @return string
     */
    public function getDesktopId(): ?string
    {
        return $this->desktopId;
    }

    /**
     * Gets the desktop identifier.
     *
     * @param string $desktopId
     *
     * @return self
     */
    public function setDesktopId(?string $desktopId): self
    {
        $this->desktopId = $desktopId;

        return $this;
    }

    /**
     * Represents a model for carrying out attacking settings.
     *
     * @return AttackingSettingModel
     */
    public function getAttackingSettings(): ?AttackingSettingModel
    {
        return $this->attackingSettings;
    }

    /**
     * Represents a model for carrying out attacking settings.
     *
     * @param AttackingSettingModel $attackingSettings
     *
     * @return self
     */
    public function setAttackingSettings(?AttackingSettingModel $attackingSettings): self
    {
        $this->attackingSettings = $attackingSettings;

        return $this;
    }

    /**
     * Gets or sets the auto complete settings.
     *
     * @return AutoCompleteSettingModel[]
     */
    public function getAutoCompleteSettings(): ?array
    {
        return $this->autoCompleteSettings;
    }

    /**
     * Gets or sets the auto complete settings.
     *
     * @param AutoCompleteSettingModel[] $autoCompleteSettings
     *
     * @return self
     */
    public function setAutoCompleteSettings(?array $autoCompleteSettings): self
    {
        $this->autoCompleteSettings = $autoCompleteSettings;

        return $this;
    }

    /**
     * Represents a model for carrying out authentication brute force settings.
     *
     * @return BruteForceSettingModel
     */
    public function getBruteForceSettings(): ?BruteForceSettingModel
    {
        return $this->bruteForceSettings;
    }

    /**
     * Represents a model for carrying out authentication brute force settings.
     *
     * @param BruteForceSettingModel $bruteForceSettings
     *
     * @return self
     */
    public function setBruteForceSettings(?BruteForceSettingModel $bruteForceSettings): self
    {
        $this->bruteForceSettings = $bruteForceSettings;

        return $this;
    }

    /**
     * Represents a model for carrying out crawling settings.
     *
     * @return CrawlingSettingModel
     */
    public function getCrawlingSettings(): ?CrawlingSettingModel
    {
        return $this->crawlingSettings;
    }

    /**
     * Represents a model for carrying out crawling settings.
     *
     * @param CrawlingSettingModel $crawlingSettings
     *
     * @return self
     */
    public function setCrawlingSettings(?CrawlingSettingModel $crawlingSettings): self
    {
        $this->crawlingSettings = $crawlingSettings;

        return $this;
    }

    /**
     * Provides the settings for Cross-site Request Forgery checks.
     *
     * @return CsrfSettingModel
     */
    public function getCsrfSettings(): ?CsrfSettingModel
    {
        return $this->csrfSettings;
    }

    /**
     * Provides the settings for Cross-site Request Forgery checks.
     *
     * @param CsrfSettingModel $csrfSettings
     *
     * @return self
     */
    public function setCsrfSettings(?CsrfSettingModel $csrfSettings): self
    {
        $this->csrfSettings = $csrfSettings;

        return $this;
    }

    /**
     * Represents a model for carrying out custom 404 settings.
     *
     * @return Custom404SettingModel
     */
    public function getCustom404Settings(): ?Custom404SettingModel
    {
        return $this->custom404Settings;
    }

    /**
     * Represents a model for carrying out custom 404 settings.
     *
     * @param Custom404SettingModel $custom404Settings
     *
     * @return self
     */
    public function setCustom404Settings(?Custom404SettingModel $custom404Settings): self
    {
        $this->custom404Settings = $custom404Settings;

        return $this;
    }

    /**
     * Gets or sets the custom HTTP header settings.
     *
     * @return CustomHttpHeaderSetting[]
     */
    public function getCustomHttpHeaderSettings(): ?array
    {
        return $this->customHttpHeaderSettings;
    }

    /**
     * Gets or sets the custom HTTP header settings.
     *
     * @param CustomHttpHeaderSetting[] $customHttpHeaderSettings
     *
     * @return self
     */
    public function setCustomHttpHeaderSettings(?array $customHttpHeaderSettings): self
    {
        $this->customHttpHeaderSettings = $customHttpHeaderSettings;

        return $this;
    }

    /**
     * Gets or sets the description.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Gets or sets the description.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets or sets a value indicating whether knowledgebase is enabled.
     *
     * @return bool
     */
    public function getEnableKnowledgebase(): ?bool
    {
        return $this->enableKnowledgebase;
    }

    /**
     * Gets or sets a value indicating whether knowledgebase is enabled.
     *
     * @param bool $enableKnowledgebase
     *
     * @return self
     */
    public function setEnableKnowledgebase(?bool $enableKnowledgebase): self
    {
        $this->enableKnowledgebase = $enableKnowledgebase;

        return $this;
    }

    /**
     * Gets or sets the form value settings.
     *
     * @return FormValueSettingModel[]
     */
    public function getFormValueSettings(): ?array
    {
        return $this->formValueSettings;
    }

    /**
     * Gets or sets the form value settings.
     *
     * @param FormValueSettingModel[] $formValueSettings
     *
     * @return self
     */
    public function setFormValueSettings(?array $formValueSettings): self
    {
        $this->formValueSettings = $formValueSettings;

        return $this;
    }

    /**
     * Represents a model for carrying out HTTP request settings.
     *
     * @return HttpRequestSettingModel
     */
    public function getHttpRequestSettings(): ?HttpRequestSettingModel
    {
        return $this->httpRequestSettings;
    }

    /**
     * Represents a model for carrying out HTTP request settings.
     *
     * @param HttpRequestSettingModel $httpRequestSettings
     *
     * @return self
     */
    public function setHttpRequestSettings(?HttpRequestSettingModel $httpRequestSettings): self
    {
        $this->httpRequestSettings = $httpRequestSettings;

        return $this;
    }

    /**
     * Gets or sets the ignored email patterns.
     *
     * @return EmailPatternSetting[]
     */
    public function getIgnoredEmailPatterns(): ?array
    {
        return $this->ignoredEmailPatterns;
    }

    /**
     * Gets or sets the ignored email patterns.
     *
     * @param EmailPatternSetting[] $ignoredEmailPatterns
     *
     * @return self
     */
    public function setIgnoredEmailPatterns(?array $ignoredEmailPatterns): self
    {
        $this->ignoredEmailPatterns = $ignoredEmailPatterns;

        return $this;
    }

    /**
     * Gets or sets the ignored parameter patterns.
     *
     * @return IgnorePatternSettingModel[]
     */
    public function getIgnorePatternSettings(): ?array
    {
        return $this->ignorePatternSettings;
    }

    /**
     * Gets or sets the ignored parameter patterns.
     *
     * @param IgnorePatternSettingModel[] $ignorePatternSettings
     *
     * @return self
     */
    public function setIgnorePatternSettings(?array $ignorePatternSettings): self
    {
        $this->ignorePatternSettings = $ignorePatternSettings;

        return $this;
    }

    /**
     * Represents a model for carrying out javascript settings.
     *
     * @return JavaScriptSettingsModel
     */
    public function getJavaScriptSettings(): ?JavaScriptSettingsModel
    {
        return $this->javaScriptSettings;
    }

    /**
     * Represents a model for carrying out javascript settings.
     *
     * @param JavaScriptSettingsModel $javaScriptSettings
     *
     * @return self
     */
    public function setJavaScriptSettings(?JavaScriptSettingsModel $javaScriptSettings): self
    {
        $this->javaScriptSettings = $javaScriptSettings;

        return $this;
    }

    /**
     * Gets or sets the name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Gets or sets the name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Represents a model for carrying out authentication proxy settings.
     *
     * @return ProxySettingsModel
     */
    public function getProxySettings(): ?ProxySettingsModel
    {
        return $this->proxySettings;
    }

    /**
     * Represents a model for carrying out authentication proxy settings.
     *
     * @param ProxySettingsModel $proxySettings
     *
     * @return self
     */
    public function setProxySettings(?ProxySettingsModel $proxySettings): self
    {
        $this->proxySettings = $proxySettings;

        return $this;
    }

    /**
     * Represents a model for carrying out scope settings.
     *
     * @return ScopeSettingModel
     */
    public function getScopeSettings(): ?ScopeSettingModel
    {
        return $this->scopeSettings;
    }

    /**
     * Represents a model for carrying out scope settings.
     *
     * @param ScopeSettingModel $scopeSettings
     *
     * @return self
     */
    public function setScopeSettings(?ScopeSettingModel $scopeSettings): self
    {
        $this->scopeSettings = $scopeSettings;

        return $this;
    }

    /**
     * Gets or sets the engine settings.
     *
     * @return SecurityCheckGroupModel[]
     */
    public function getSecurityCheckGroups(): ?array
    {
        return $this->securityCheckGroups;
    }

    /**
     * Gets or sets the engine settings.
     *
     * @param SecurityCheckGroupModel[] $securityCheckGroups
     *
     * @return self
     */
    public function setSecurityCheckGroups(?array $securityCheckGroups): self
    {
        $this->securityCheckGroups = $securityCheckGroups;

        return $this;
    }

    /**
     * Gets or sets the selected website groups.
     *
     * @return string[]
     */
    public function getSelectedGroups(): ?array
    {
        return $this->selectedGroups;
    }

    /**
     * Gets or sets the selected website groups.
     *
     * @param string[] $selectedGroups
     *
     * @return self
     */
    public function setSelectedGroups(?array $selectedGroups): self
    {
        $this->selectedGroups = $selectedGroups;

        return $this;
    }

    /**
     * Gets or sets the sensitive keyword settings.
     *
     * @return SensitiveKeywordSettingModel[]
     */
    public function getSensitiveKeywordSettings(): ?array
    {
        return $this->sensitiveKeywordSettings;
    }

    /**
     * Gets or sets the sensitive keyword settings.
     *
     * @param SensitiveKeywordSettingModel[] $sensitiveKeywordSettings
     *
     * @return self
     */
    public function setSensitiveKeywordSettings(?array $sensitiveKeywordSettings): self
    {
        $this->sensitiveKeywordSettings = $sensitiveKeywordSettings;

        return $this;
    }

    /**
     * Represents SSL/TLS settings.
     *
     * @return SslTlsSettingModel
     */
    public function getSslTlsSettingModel(): ?SslTlsSettingModel
    {
        return $this->sslTlsSettingModel;
    }

    /**
     * Represents SSL/TLS settings.
     *
     * @param SslTlsSettingModel $sslTlsSettingModel
     *
     * @return self
     */
    public function setSslTlsSettingModel(?SslTlsSettingModel $sslTlsSettingModel): self
    {
        $this->sslTlsSettingModel = $sslTlsSettingModel;

        return $this;
    }

    /**
     * Gets or sets the Web Storage Settings.
     *
     * @return WebStorageSetting[]
     */
    public function getWebStorageSettings(): ?array
    {
        return $this->webStorageSettings;
    }

    /**
     * Gets or sets the Web Storage Settings.
     *
     * @param WebStorageSetting[] $webStorageSettings
     *
     * @return self
     */
    public function setWebStorageSettings(?array $webStorageSettings): self
    {
        $this->webStorageSettings = $webStorageSettings;

        return $this;
    }

    /**
     * Gets or sets the Extension Settings.
     *
     * @return ExtensionSettingModel[]
     */
    public function getExtensionSettings(): ?array
    {
        return $this->extensionSettings;
    }

    /**
     * Gets or sets the Extension Settings.
     *
     * @param ExtensionSettingModel[] $extensionSettings
     *
     * @return self
     */
    public function setExtensionSettings(?array $extensionSettings): self
    {
        $this->extensionSettings = $extensionSettings;

        return $this;
    }
}
