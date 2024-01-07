<?php
    namespace App\Services;


    use App\Models\Dtos\QuoteDto;
    use App\Models\Quote;

    class QuotesService
    {
        public function find(int $id) : QuoteDto
        {
            $data = Quote::findOrFail($id);
            return new QuoteDto([
                'id' => $data->id,
                'body' => $data->body,
                'author' => $data->author->name
            ]);
        }

        public function random()
        {
            return new QuoteDto();
        }

    }
