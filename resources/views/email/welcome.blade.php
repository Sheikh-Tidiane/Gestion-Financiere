<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 20px;
            line-height: 1.6;
            color: #666;
        }

        .signature {
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bienvenue sur notre plateforme, {{ $user->name }}!</h2>
        <p>Nous sommes ravis de vous accueillir sur notre application.</p>
        <p>Voici quelques détails sur votre compte :</p>
        <ul>
            <li><strong>Téléphone :</strong> {{ $user->telephone }}</li>
            <li><strong>Type de Compte :</strong> {{ $user->type_compte }}</li>
            <li><strong>Votre Clé RIB :</strong> {{ $user->rib }}</li>
            <li><strong>Type de Pack :</strong> {{ $user->pack_id }}</li>
            <li><strong>Solde :</strong> {{ $user->solde }}</li>
        </ul>
        <p>Merci de vous être inscrit. Nous espérons que vous apprécierez votre expérience.</p>
        <p class="signature">Cordialement,<br>L'équipe GèreTonCash</p>
    </div>
</body>
</html>
