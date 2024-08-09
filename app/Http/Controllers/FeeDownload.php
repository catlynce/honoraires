<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;

use function Spatie\LaravelPdf\Support\pdf;

class FeeDownload extends Controller
{
    public function __invoke(Request $request, Fee $fee)
    {
        if ( $request->user()->cannot('view', $fee) ){
            abort(403);
        }

        return pdf()
                ->view('pdfs.invoice', compact('fee'))
                ->download();
    }
}
