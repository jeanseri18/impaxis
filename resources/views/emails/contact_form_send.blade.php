<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de contact - Impaxis groupe</title>
</head>
<body>
    <div style="font-family: monospace; font-size: 12px; color: #575757; background-color: #fefefe; padding: 40px;">
        Hi Admin, <br><br>
        <p style="color: #656565; font-size: 12px; padding-bottom: 15px;">
            Je suis <strong>{{ $fullname }}</strong>.
            <p>
                Je vous contacte via le formulaire de contact de votre site web. Je reste joignable par
            </p>
            <ul>
                <li>Téléphone au :<strong> {{ $phone }}</strong> </li>
                <li>Adresse mail :<strong> {{ $email }}</strong> </li>
            </ul>
        </p>

        <p style="">
            {{ $messageContent }}
        </p>

        <p style="font-size: 11px; color: #888;">
            Cet email a été envoyé automatiquement depuis votre site web.
        </p>
    </div>

</body>
</html>