<?php

namespace O4l3x4ndr3\SdkOmie\Types;

/**
 *
 */
class Tags
{
    /** Tag do Cliente ou Fornecedor
     *
     * @var string|null
     */
    private ?string $tag;

    /**
     * @param string|null $tag
     */
    public function __construct(?string $tag = null)
    {
        $this->tag = $tag;
    }

    /**
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string|null $tag
     * @return Tags
     */
    public function setTag(?string $tag): Tags
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        return array_filter([
            "tag" => $this->tag,
        ], function ($v) {
            return !is_null($v);
        });
    }
}