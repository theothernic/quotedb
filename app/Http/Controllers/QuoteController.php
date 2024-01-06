<?php
    namespace App\Http\Controllers;

    class QuoteController extends Controller
    {
        public function single(int $id)
        {
            return view('quote.single');
        }

        public function random()
        {
            return view('quote.single');
        }
    }
