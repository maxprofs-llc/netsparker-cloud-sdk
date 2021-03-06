<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class NotificationPriorityPair
{
    /**
     * Gets or sets the identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Gets or sets the priority.
     *
     * @var int
     */
    protected $priority;

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
     * Gets or sets the priority.
     *
     * @return int
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * Gets or sets the priority.
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}
