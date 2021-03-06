<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class SecurityCheckSetting
{
    /**
     * Gets or sets the name of this setting.
     *
     * @var string
     */
    protected $name;
    /**
     * Gets or sets the value of this setting.
     *
     * @var string
     */
    protected $value;

    /**
     * Gets or sets the name of this setting.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Gets or sets the name of this setting.
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
     * Gets or sets the value of this setting.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Gets or sets the value of this setting.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
