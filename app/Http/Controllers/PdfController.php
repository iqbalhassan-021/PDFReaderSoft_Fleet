<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class PDFController  extends Controller
{

    public function readPDF(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf',
        ]);

        $pdfFile = $request->file('pdf_file');

        // Use spatie/pdf-to-text to read the PDF
        $text = (new Pdf())
            ->setPdf($pdfFile)
            ->text();

 
        // Pass the extracted text to the view
        return view('welcome', compact('text'));
    }
}
