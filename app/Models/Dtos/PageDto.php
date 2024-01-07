<?php
    namespace App\Models\Dtos;

    use App\Models\Dtos\IDto;
    use Bearlovescode\Datamodels\Dto\Dto;

    class PageDto extends Dto implements IDto
    {
        public string $title;
        public IDto $record;
        public array $records = [];
    }
