<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body>
    <div class="form-container">
        <form method="POST" action="{{ route('process-form') }}" name="submit">
            @csrf
            @include('components.sections.company_details')
            @include('components.sections.attached_documents')
            @include('components.sections.more_information')
            @include('components.sections.main_contact')
            @include('components.sections.additional_portal_account')
            @include('components.sections.note')


            <div class="form-section step step-7">
                <p><strong>Payment by: Bank transfer, credit card, or direct debit from a bank account (SEPA)</strong>
                </p>

                <div class="form-group">
                    <label for="creditInstitution">Credit institution:</label>
                    <input type="text" id="creditInstitution" name="creditInstitution" class="form-control">
                </div>

                <div class="form-group">
                    <label for="branch">Branch of:</label>
                    <input type="text" id="branch" name="branch" class="form-control">
                </div>

                <div class="form-group">
                    <label for="iban">IBAN:</label>
                    <input type="text" id="iban" name="iban" class="form-control">
                </div>

                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="data" id="data" name="data" class="form-control">
                </div>

                <div class="form-group">
                    <label for="identificativoCreditore">Identificativo del creditore:</label>
                    <input type="text" id="identificativoCreditore" name="identificativoCreditore"
                        class="form-control">
                </div>

                <div class="form-group">
                    <label for="identificativoMandato">Identificativo del mandato:</label>
                    <input type="text" id="identificativoMandato" name="identificativoMandato" class="form-control">
                </div>

                percentuale

                <div class="form-group">
                    <label for="percentuale">percentuale:</label>
                    <input type="number" id="percentuale" name="percentuale" class="form-control">
                </div>

                <div class="form-group">
                    <label for="data1">Data:</label>
                    <input type="date1" id="data1" name="data1" class="form-control">
                </div>

                <div class="form-group">
                    <label for="legalRepresentative">The legal representative:</label>
                    <input type="text" id="legalRepresentative" name="legalRepresentative" class="form-control">
                </div>

                <div class="form-group">
                    <label for="date2">Data:</label>
                    <input type="date" id="date2" name="date2" class="form-control">
                </div>

                <div class="form-group">
                    <label for="legalRepresentative2">The legal representative:</label>
                    <input type="text" id="legalRepresentative2" name="legalRepresentative2" class="form-control">
                </div>

                <div class="form-group">
                    <label for="date3">Data:</label>
                    <input type="date" id="date3" name="date3" class="form-control">
                </div>

                <div class="form-group">
                    <label for="legalRepresentative3">The legal representative:</label>
                    <input type="text" id="legalRepresentative3" name="legalRepresentative3" class="form-control">
                </div>

                <div class="form-group">
                    <label for="date4">Data:</label>
                    <input type="text" id="date4" name="date4" class="form-control">
                </div>

                <div class="form-group">
                    <label for="signature">Legal Representative Stamp and Signature:</label>
                    <input type="text" id="signature" name="signature" accept="image/*" class="form-control-file">
                </div>


            </div>


            <!-- Submit Button -->
            <button id="submitBtn" type='submit'>Submit</button>
        </form>
    </div>


    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
</body>

</html>
