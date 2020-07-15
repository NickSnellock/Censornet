<?php
namespace NickSnellock\Entities;

class Vegetable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $classification;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var bool
     */
    private $edible;

    public function __construct(?int $id, string $name, string $classification, ?string $description, bool $edible)
    {
        $this->id = $id;
        $this->name = $name;
        $this->classification = $classification;
        $this->description = $description == '\N' ? null : $description;
        $this->edible = $edible;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'classification' => $this->classification,
            'description' => $this->description,
            'edible' => $this->edible,
        ];
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getClassification(): string
    {
        return $this->classification;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isEdible(): bool
    {
        return $this->edible;
    }
}