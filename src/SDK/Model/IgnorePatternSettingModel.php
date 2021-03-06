<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class IgnorePatternSettingModel
{
    /**
     * Gets or sets the pattern name.
     *
     * @var string
     */
    protected $name;
    /**
     * Gets or sets the type of the parameter.
     *
     * @var string
     */
    protected $parameterType;
    /**
     * Gets or sets the RegEx pattern.
     *
     * @var string
     */
    protected $pattern;

    /**
     * Gets or sets the pattern name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Gets or sets the pattern name.
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
     * Gets or sets the type of the parameter.
     *
     * @return string
     */
    public function getParameterType(): ?string
    {
        return $this->parameterType;
    }

    /**
     * Gets or sets the type of the parameter.
     *
     * @param string $parameterType
     *
     * @return self
     */
    public function setParameterType(?string $parameterType): self
    {
        $this->parameterType = $parameterType;

        return $this;
    }

    /**
     * Gets or sets the RegEx pattern.
     *
     * @return string
     */
    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    /**
     * Gets or sets the RegEx pattern.
     *
     * @param string $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }
}
