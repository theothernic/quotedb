<?php
    namespace App\Models\Dtos;

    use App\Models\Dtos\IDto;
    use Bearlovescode\Datamodels\Dto\Dto;

    class QuoteDto extends Dto implements IDto
    {
        public int $id;

        public string $body;
        public string $author;

    }
