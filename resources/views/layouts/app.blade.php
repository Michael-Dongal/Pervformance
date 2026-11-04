<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>@yield('title', 'Pervformance – Driven by Obsession')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;0,600;1,600;1,700&family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Orbitron:wght@500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body data-view="@yield('view')">
<div class="page">
  <header>
    <div class="wrap bar">
      <a class="nav-logo" href="{{ route('home') }}" aria-label="Pervformance"><img src="{{ asset('images/logo-icon.png') }}" alt="Pervformance"></a>
      <nav aria-label="Main menu">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'on' : '' }}">Home</a>
        <div class="dd" id="dd" data-open="false">
          <button id="dd-btn" aria-expanded="false" aria-controls="menu" class="{{ request()->routeIs('interior', 'exterior') ? 'on' : '' }}">Products
            <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="menu" id="menu">
            <a href="{{ route('interior') }}" class="{{ request()->routeIs('interior') ? 'on' : '' }}">Interior</a>
            <a href="{{ route('exterior') }}" class="{{ request()->routeIs('exterior') ? 'on' : '' }}">Exterior</a>
          </div>
        </div>
        <button type="button" id="consign-btn">Consignment</button>
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>© Pervformance · Driven by Obsession</footer>
</div>

<div class="modal" id="modal" role="dialog" aria-modal="true" aria-labelledby="m-title">
  <div class="sheet"><button class="x" id="m-x" aria-label="Close">×</button><div id="m-body"></div></div>
</div>

<div class="modal" id="confirm" role="dialog" aria-modal="true" aria-labelledby="c-title">
  <div class="sheet">
    <h3 id="c-title">Open WhatsApp?</h3>
    <p class="sub">You’re about to leave this page and chat with Pervformance on WhatsApp. Would you like to continue?</p>
    <a class="btn solid" id="c-go" href="#" target="_blank" rel="noopener">Continue to WhatsApp</a>
    <button class="btn cancel" id="c-cancel" type="button">Stay on this page</button>
  </div>
</div>

<script>var IMG_URL = "{{ asset('images') }}/";</script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>