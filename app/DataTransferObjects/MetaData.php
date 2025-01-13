<?php

namespace App\DataTransferObjects;

final class MetaData
{
    public function __construct(
        public string $description,
        public int $type
    ) {}

    public static function fromJson($value): self
    {
        $array = json_decode($value, true);
        return self::fromArray($array);
    }

    public static function fromArray(array $array): self
    {
        return new self(
            description: $array['description'],
            type: $array['type']
        );
    }

    public function toArray(): array
    {
        return [
            'description' => $this->description,
            'type' => $this->type
        ];
    }
}
