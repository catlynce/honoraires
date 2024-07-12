<html lang="en">
<head>
    <title>Note d'honoraires</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        .roboto-light {
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .roboto-regular {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .roboto-bold {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="px-8 py-4 text-lg max-sm roboto-regular">
    <h1 class="flex items-center justify-end text-2xl font-bold">Note d'honoraires / Note de débit</h1>
    <hr class="my-4 h-2 bg-orange-400">
    <div class="flex flex-col">
        <div class="p-6 text-base border rounded-lg bg-slate-100 shadow-md">
            <p class="font-medium">Bénéficiaire :</p>
            <div class="flex flex-col justify-between">
                <div>Nom / Prénom : {{ $fee->user->name }}</div>
                <div>Adresse : {{ $fee->user->info->address }}</div>
                <div>Matricule : {{ $fee->user->info->social_number }}</div>
            </div>
        </div>

        <div class="mt-12 pl-4 text-slate-800 text-sm">Date : {{ $fee->worked_at }}</div>

        <div class="mt-6 pl-4 text-slate-900">Prestation</div>
        <div class="mt-1 p-4 text-base border bg-slate-100 rounded">
            <div class="mt-1 mb-2">{!! $fee->description !!}</div>
        </div>

        <div class="mt-10 px-6 py-2 inline-flex flex-col self-end items-end rounded shadow-xs border border-orange-400 bg-orange-200">
            <div>Solde demandé</div>
            <div>{{ Number::currency($fee->price, 'eur', 'fr') }}</div>
        </div>

        <div class="mt-8">
            <div class="underline">Mode de payement : </div>
            <div>
                <div class="flex items-center pl-2">
                    @if ($fee->payed)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    @else
                        <span class="w-6"></span>
                    @endif
                    <span class="ml-2">Virement sur le compte IBAN : {{ $fee->user->info->bank_iban }}</span>
                </div>
                <div class="pl-10">SWIFT / BIC Banque : {{ $fee->user->info->bank_swift }}</div>
            </div>

            @if ($fee->payed_at)
                <div class="flex items-center mt-8 pl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    <span class="inline pl-2">Comptant : réglé au {{ $fee->payed_at }}</span>
                </div>
            @endif
        </div>

    </body>
    </html>
