<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class HtmlpdfController extends Controller
{

    public function showPDF()
    {
        // Assuming this is your form view, return it here
        return view('welcome');
    }

    public function downloadPDF(Request $request)
    {


        // Get the input data from the request

        $data = [
            'companyName' => $request->input('companyName'),
            'activity' => $request->input('activity'),
            'vatNumber' => $request->input('vatNumber'),
            'codiceFiscale' => $request->input('codiceFiscale'),
            'legalRep' => $request->input('legalRep'),
            'telMobile' => $request->input('telMobile'),
            'email' => $request->input('email'),
            'hqAddress' => $request->input('hqAddress'),
            'via' => $request->input('via'),
            'PEC' => $request->input('PEC'),

            'codiceUnivoco' => $request->input('codiceUnivoco'),

            'province' => $request->input('province'),
            'postalCode' => $request->input('postalCode'),
            'website' => $request->input('website'),
            'approvedBudget' => $request->input('approvedBudget'),
            'chamberCertificate' => $request->input('chamberCertificate'),
            'turnover' => $request->input('turnover'),
            'market' => $request->input('market[]', []),
            'mainContact' => $request->input('mainContact'),
            'mainContactMobile' => $request->input('mainContactMobile'),
            'mainContactEmail' => $request->input('mainContactEmail'),
            'account1' => $request->input('account1'),
            'account1Mobile' => $request->input('account1Mobile'),
            'account1Email' => $request->input('account1Email'),

            'account2' => $request->input('account2'),
            'account2Mobile' => $request->input('account2Mobile'),
            'account2Email' => $request->input('account2Email'),

            'account3' => $request->input('account3'),
            'account3Mobile' => $request->input('account3Mobile'),
            'account3Email' => $request->input('account3Email'),
            'note' => $request->input('note'),

            'creditInstitution' => $request->input('creditInstitution'),
            'branch' => $request->input('branch'),
            'iban' => $request->input('iban'),
            'date' => $request->input('date'),
            'identificativoCreditore' => $request->input('identificativoCreditore'),
            'identificativoMandato' => $request->input('identificativoMandato'),
            'percentuale' => $request->input('percentuale'),
            'data1' => $request->input('data1'),
            'legalRepresentative1' => $request->input('legalRepresentative1'),
            'date2' => $request->input('date2'),
            'legalRepresentative2' => $request->input('legalRepresentative2'),
            'date3' => $request->input('date3'),
            'legalRepresentative3' => $request->input('legalRepresentative3'),
            'legalRepresentative4' => $request->input('legalRepresentative4'),
            'date4' => $request->input('date4'),
            'signature' => $request->input('signature'),
            'data' => $request->input('data'),

        ];

        // Load the data into the PDF view
        $pdf = PDF::loadView('document', compact('data'));

        $tempPdfPath = resource_path("templates/pdf/document.pdf");
        $pdf->save($tempPdfPath);
        // Return the PDF as a response

        Mail::send('emails.attachment', [], function ($message) use ($tempPdfPath, $request) {
            // $request->input('email') ||
            $message->to('example@gmail.com')->subject('Your PDF Attachment sir');
            $message->attach($tempPdfPath);
        });
        return $pdf->stream('document.pdf');
    }


}
