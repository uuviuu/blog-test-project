<?php

namespace App\Http\Requests\Traits;

use App\DTO\Abstracts\DTO;

trait HasDto
{
    /**
     * @return class-string<DTO>
     */
    abstract protected function getDto(): string;

    /**
     * @param  array<string, mixed>  $data
     */
    public function dto(array $data = []): DTO
    {
        /** @var DTO $dtoClass */
        $dtoClass = $this->getDto();

        return new $dtoClass(...$data);
    }
}
