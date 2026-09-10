<!doctype html>
<html lang="fr" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}" />
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}" />
    <title>@yield('title', 'Dashboard') — Impaxis Admin</title>
    @stack('styles')
</head>
<body class="admin-body">
    <div class="admin-shell">
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="admin-brand">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('assets/logos.png') }}" alt="Impaxis">
                    <span>Admin</span>
                </a>
            </div>

            <nav class="admin-nav">
                <p class="nav-label">Vue d'ensemble</p>
                <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i> Tableau de bord
                </a>

                <p class="nav-label">Contenu du site</p>
                <a href="{{ route('admin.actualities.index') }}" class="nav-item {{ request()->routeIs('admin.actualities.*') ? 'active' : '' }}">
                    <i class="bi bi-newspaper"></i> Articles
                </a>
                <a href="{{ route('admin.team.index') }}" class="nav-item {{ request()->routeIs('admin.team.*') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Équipe
                </a>

                <p class="nav-label">Administration</p>
                <a href="{{ route('admin.users.index') }}" class="nav-item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                    <i class="bi bi-shield-lock"></i> Utilisateurs
                </a>
                <a href="{{ route('admin.account') }}" class="nav-item {{ request()->routeIs('admin.account*') ? 'active' : '' }}">
                    <i class="bi bi-gear"></i> Mon compte
                </a>
            </nav>

            <div class="admin-sidebar-footer">
                <a href="{{ route('front.welcome', ['locale' => 'fr']) }}" target="_blank" class="nav-item">
                    <i class="bi bi-box-arrow-up-right"></i> Voir le site
                </a>
            </div>
        </aside>

        <div class="admin-main">
            <header class="admin-topbar">
                <button type="button" class="btn btn-icon sidebar-toggle" id="sidebarToggle" aria-label="Menu">
                    <i class="bi bi-list"></i>
                </button>
                <div class="topbar-title">
                    <h1>@yield('page-title', 'Dashboard')</h1>
                    @hasSection('page-subtitle')
                        <p>@yield('page-subtitle')</p>
                    @endif
                </div>
                <div class="topbar-actions">
                    <div class="dropdown">
                        <button class="user-chip dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <span class="avatar">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                            <span class="user-meta">
                                <strong>{{ auth()->user()->name }}</strong>
                                <small>{{ auth()->user()->email }}</small>
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('admin.account') }}"><i class="bi bi-person me-2"></i>Mon compte</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Déconnexion
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>

            <main class="admin-content">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('assets/libs/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script>
        document.getElementById('sidebarToggle')?.addEventListener('click', () => {
            document.body.classList.toggle('sidebar-open');
        });
    </script>
    @stack('scripts')
</body>
</html>
