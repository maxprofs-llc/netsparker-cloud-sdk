<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class AgentGroupModel
{
    /**
     * Agents which are in agent group.
     *
     * @var string[]
     */
    protected $agents;
    /**
     * Agent group identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Agent Group Name.
     *
     * @var string
     */
    protected $name;

    /**
     * Agents which are in agent group.
     *
     * @return string[]
     */
    public function getAgents(): ?array
    {
        return $this->agents;
    }

    /**
     * Agents which are in agent group.
     *
     * @param string[] $agents
     *
     * @return self
     */
    public function setAgents(?array $agents): self
    {
        $this->agents = $agents;

        return $this;
    }

    /**
     * Agent group identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Agent group identifier.
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
     * Agent Group Name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Agent Group Name.
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
}
