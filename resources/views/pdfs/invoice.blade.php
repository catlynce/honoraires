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
            <div><input type="checkbox" checked> <span class="inline pl-2">Virement sur le compte IBAN : {{ $fee->user->info->bank_iban }}</span></div>
            <div class="pl-6">SWIFT / BIC Banque : {{ $fee->user->info->bank_swift }}</div>
        </div>

        <div class="mt-4">
            <input type="checkbox" id=""><span class="inline pl-2">Comptant : réglé au {{ $fee->paid_date }}</span>
        </div>
    </div>

</body>
</html>
