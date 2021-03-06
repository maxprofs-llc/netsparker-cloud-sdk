<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Montross50\NetsparkerCloud\SDK\Model;

class ApiFileModel
{
    /**
     * Gets or sets the content in Base64 format.
     *
     * @var string
     */
    protected $content;
    /**
     * Gets or sets the name of the file.
     *
     * @var string
     */
    protected $fileName;

    /**
     * Gets or sets the content in Base64 format.
     *
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Gets or sets the content in Base64 format.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Gets or sets the name of the file.
     *
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * Gets or sets the name of the file.
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }
}
