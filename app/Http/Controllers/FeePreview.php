<?php

namespace App\Http\Controllers;

use App\Models\Fee;

use function Spatie\LaravelPdf\Support\pdf;

class FeePreview extends Controller
{
    public function __invoke(Fee $fee)
    {
        return pdf()
                ->view('pdfs.invoice', compact('fee'));
    }
}
