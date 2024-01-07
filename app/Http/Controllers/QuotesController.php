<?php
    namespace App\Http\Controllers;

    use App\Models\Dtos\PageDto;
    use App\Services\QuotesService;

    class QuotesController extends Controller
    {
        public function __construct(
            private readonly QuotesService $quotesService
        )
        {}

        public function single(int $id)
        {
            $quote = $this->quotesService->find($id);

            $page = new PageDto([
                'title' =>  sprintf("Quote from %s", $quote->author),
                'record' => $quote,
            ]);

            return view('quotes.single', compact('page', 'quote'));
        }

        public function random()
        {
            return view('quotes.single');
        }
    }
