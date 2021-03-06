<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class ApiScanStatusModel
{
    /**
     * Gets or sets the completed steps.
     *
     * @var int
     */
    protected $completedSteps;
    /**
     * Gets or sets the estimated launch time in minutes for queued scans.
     *
     * @var int
     */
    protected $estimatedLaunchTime;
    /**
     * Gets or sets the estimated steps.
     *
     * @var int
     */
    protected $estimatedSteps;
    /**
     * Gets or sets the state.
     *
     * @var string
     */
    protected $state;

    /**
     * Gets or sets the completed steps.
     *
     * @return int
     */
    public function getCompletedSteps(): ?int
    {
        return $this->completedSteps;
    }

    /**
     * Gets or sets the completed steps.
     *
     * @param int $completedSteps
     *
     * @return self
     */
    public function setCompletedSteps(?int $completedSteps): self
    {
        $this->completedSteps = $completedSteps;

        return $this;
    }

    /**
     * Gets or sets the estimated launch time in minutes for queued scans.
     *
     * @return int
     */
    public function getEstimatedLaunchTime(): ?int
    {
        return $this->estimatedLaunchTime;
    }

    /**
     * Gets or sets the estimated launch time in minutes for queued scans.
     *
     * @param int $estimatedLaunchTime
     *
     * @return self
     */
    public function setEstimatedLaunchTime(?int $estimatedLaunchTime): self
    {
        $this->estimatedLaunchTime = $estimatedLaunchTime;

        return $this;
    }

    /**
     * Gets or sets the estimated steps.
     *
     * @return int
     */
    public function getEstimatedSteps(): ?int
    {
        return $this->estimatedSteps;
    }

    /**
     * Gets or sets the estimated steps.
     *
     * @param int $estimatedSteps
     *
     * @return self
     */
    public function setEstimatedSteps(?int $estimatedSteps): self
    {
        $this->estimatedSteps = $estimatedSteps;

        return $this;
    }

    /**
     * Gets or sets the state.
     *
     * @return string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Gets or sets the state.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }
}
