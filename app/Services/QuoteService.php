<?php
    namespace App\Services;


    class QuoteService
    {
        public function find(int $id)
        {
            return Quote::findOrFail($id);
        }
    }
