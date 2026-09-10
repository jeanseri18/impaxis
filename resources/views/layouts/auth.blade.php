<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
    <title>{{ $title ?? 'Connexion' }} — Impaxis</title>
    <style>
        :root {
            --imp-black: #232324;
            --imp-black-deep: #121212;
            --imp-orange: #F2920E;
        }
        body.auth-body {
            min-height: 100vh;
            margin: 0;
            background:
                radial-gradient(circle at top right, rgba(242, 146, 14, 0.28), transparent 42%),
                linear-gradient(145deg, #121212 0%, #232324 50%, #1a1a1a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            font-family: Inter, system-ui, sans-serif;
        }
        .auth-card {
            width: 100%;
            max-width: 420px;
            background: #fff;
            border-radius: 1rem;
            padding: 2rem 1.75rem;
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.35);
            border-top: 4px solid var(--imp-orange);
        }
        .auth-brand {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .auth-brand img {
            height: 48px;
            margin-bottom: .75rem;
        }
        .auth-brand h1 {
            margin: 0;
            font-size: 1.25rem;
            color: var(--imp-black);
            font-weight: 700;
        }
        .auth-brand p {
            margin: .35rem 0 0;
            color: #64748b;
            font-size: .9rem;
        }
        .form-label {
            font-weight: 600;
            color: var(--imp-black);
            font-size: .85rem;
        }
        .form-control:focus {
            border-color: var(--imp-orange);
            box-shadow: 0 0 0 .2rem rgba(242, 146, 14, 0.18);
        }
        .btn-auth {
            background: var(--imp-orange);
            border-color: var(--imp-orange);
            color: #121212;
            font-weight: 700;
            width: 100%;
            padding: .7rem 1rem;
        }
        .btn-auth:hover {
            background: var(--imp-black);
            border-color: var(--imp-black);
            color: #fff;
        }
        .auth-footer {
            text-align: center;
            margin-top: 1.25rem;
        }
        .auth-footer a {
            color: var(--imp-black);
            text-decoration: none;
            font-size: .875rem;
        }
        .auth-footer a:hover { color: var(--imp-orange); }
    </style>
</head>
<body class="auth-body">
    <div class="auth-card">
        <div class="auth-brand">
            <a href="{{ route('front.welcome', ['locale' => 'fr']) }}">
                <img src="{{ asset('assets/logos.png') }}" alt="Impaxis">
            </a>
            <h1>Espace administration</h1>
            <p>Connectez-vous pour gérer le site vitrine</p>
        </div>

        {{ $slot }}

        <div class="auth-footer">
            <a href="{{ route('front.welcome', ['locale' => 'fr']) }}">
                <i class="bi bi-arrow-left"></i> Retour au site
            </a>
        </div>
    </div>
</body>
</html>
