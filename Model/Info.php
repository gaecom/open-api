<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Model;

class Info
{
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $termsOfService;
    /**
     * @var Contact
     */
    protected $contact;
    /**
     * @var License
     */
    protected $license;

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
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
     * @return string
     */
    public function getTermsOfService(): ?string
    {
        return $this->termsOfService;
    }

    /**
     * @param string $termsOfService
     *
     * @return self
     */
    public function setTermsOfService(?string $termsOfService): self
    {
        $this->termsOfService = $termsOfService;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     *
     * @return self
     */
    public function setContact(?Contact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return License
     */
    public function getLicense(): ?License
    {
        return $this->license;
    }

    /**
     * @param License $license
     *
     * @return self
     */
    public function setLicense(?License $license): self
    {
        $this->license = $license;

        return $this;
    }
}
