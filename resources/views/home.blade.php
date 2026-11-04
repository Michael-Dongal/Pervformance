<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Pervformance – Driven by Obsession</title>
<link rel="canonical" href="{{ url('/') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;0,600;1,600;1,700&family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Orbitron:wght@500;600&display=swap" rel="stylesheet">
<style>
@verbatim
:root{
  --bg:#060505; --ink:#FFFFFF; --muted:#A3A3AA; --line:#2A2A2D; --panel:#141415; --red:#E3202A; --hover:#202023;
  box-sizing:border-box; padding-top:env(safe-area-inset-top,0px); padding-bottom:env(safe-area-inset-bottom,0px); color-scheme:dark;
}
html,body{height:100%}
html{scroll-padding-top:env(safe-area-inset-top,0px)}
*,*::before,*::after{box-sizing:inherit}
body{margin:0;background:radial-gradient(ellipse 70% 40% at 50% 30%,rgba(227,32,42,.13),transparent 70%),var(--bg);color:var(--ink);font-family:"Exo 2",system-ui,-apple-system,"Segoe UI",sans-serif;font-size:16px;line-height:1.5}
a{color:inherit}
:focus-visible{outline:2px solid var(--red);outline-offset:3px}
.page{min-height:100%;display:flex;flex-direction:column;align-items:center}
.wrap{width:100%;max-width:1120px;padding:0 24px}

/* Navbar */
header{width:100%;border-bottom:1px solid rgba(255,255,255,.08);background:rgba(6,5,5,.6);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);position:relative;z-index:20}
.bar{display:flex;align-items:center;gap:28px;min-height:68px;max-width:none;padding:0 28px}
.nav-logo{display:block;height:34px}
.nav-logo img{height:100%;width:auto;display:block}
nav{margin-left:auto;display:flex;align-items:center;gap:32px}
nav a,nav button{font:inherit;font-weight:600;font-size:12.5px;letter-spacing:.22em;text-transform:uppercase;color:var(--muted);background:none;border:0;padding:8px 0;cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:8px;border-bottom:1px solid transparent;transition:color .2s}
nav a:hover,nav button:hover{color:var(--ink)}
nav .on{color:var(--ink);border-bottom-color:var(--red)}
nav a.contact{margin-left:8px;padding:10px 24px;border:1px solid var(--red);border-radius:999px;color:var(--ink);background:transparent;transition:background .25s,box-shadow .25s}
nav a.contact:hover{background:var(--red);box-shadow:0 0 24px rgba(227,32,42,.45)}
nav a.contact.on{border-bottom-color:var(--red);box-shadow:0 0 0 3px rgba(227,32,42,.3)}
.chev{width:13px;height:13px;transition:transform .25s}
.dd{position:relative}
.dd[data-open="true"] .chev{transform:rotate(180deg)}
.menu{position:absolute;top:calc(100% + 10px);left:-14px;min-width:190px;background:rgba(18,16,16,.88);backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);border:1px solid rgba(255,255,255,.1);border-top:1px solid var(--red);border-radius:4px;padding:8px;box-shadow:0 30px 60px -20px rgba(0,0,0,.9);opacity:0;visibility:hidden;transform:translateY(-6px);transition:opacity .2s,transform .2s,visibility .2s;z-index:10}
.dd[data-open="true"] .menu{opacity:1;visibility:visible;transform:none}
.menu a{display:flex;width:100%;padding:11px 14px;border-radius:6px;border:0;color:var(--ink)}
.menu a:hover{background:var(--hover)}

/* Views */
main{flex:1;width:100%}
.view[hidden]{display:none}
.hero{text-align:center;padding:48px 0}
.home-foot{position:fixed;left:0;right:0;bottom:50px;padding:0 40px;text-align:center}
.addr{display:inline-flex;max-width:100%;align-items:center;justify-content:center;gap:10px;margin:0;font-family:Orbitron,"Exo 2",sans-serif;font-weight:500;font-size:10.5px;letter-spacing:.22em;line-height:1.7;text-transform:uppercase;color:#8A8A91;text-decoration:none;transition:color .2s}
.addr:hover{color:var(--ink)}
.clabel{margin:0 0 14px;font-family:Orbitron,"Exo 2",sans-serif;font-weight:600;font-size:10.5px;letter-spacing:.34em;text-transform:uppercase;color:var(--ink)}
.socials{display:flex;flex-wrap:wrap;justify-content:center;gap:14px 32px;margin-bottom:22px}
.soc{display:inline-flex;align-items:center;gap:9px;color:#C9C9CE;text-decoration:none;font-family:Orbitron,"Exo 2",sans-serif;font-weight:500;font-size:11px;letter-spacing:.2em;text-transform:uppercase;transition:color .2s}
.soc svg{width:20px;height:20px;flex:none}
.soc:hover{color:var(--red)}
.more{display:inline-block;margin-top:32px;font-family:Orbitron,"Exo 2",sans-serif;font-size:11px;letter-spacing:.3em;text-transform:uppercase;font-weight:600;color:var(--ink);text-decoration:none;border-bottom:1px solid var(--red);padding-bottom:3px;transition:color .2s}
.more:hover{color:var(--red)}
.about{max-width:62ch}
.about .lede{font-family:"Cormorant Garamond",Georgia,serif;font-style:italic;font-weight:500;font-size:clamp(28px,5vw,40px);line-height:1.15;margin:0 0 24px;color:var(--ink)}
.about p{color:var(--muted);font-size:17px;line-height:1.75;margin:0 0 18px}
.about .sig{color:var(--ink);font-weight:600;border-left:2px solid var(--red);padding-left:14px;margin-top:28px}
.addr svg{width:14px;height:14px;color:var(--red);flex:none}
#v-beranda:not([hidden]){display:flex;align-items:center;justify-content:center;min-height:calc(100svh - 110px)}
body[data-view="beranda"]{background:radial-gradient(ellipse 55% 45% at 50% 46%,rgba(227,32,42,.2),transparent 70%),radial-gradient(ellipse at 50% 50%,#0D0B0B 0%,#020101 100%)}
body[data-view="beranda"] main::before{content:"";position:fixed;top:92px;right:24px;bottom:24px;left:24px;border:1px solid rgba(255,255,255,.1);pointer-events:none}
body[data-view="beranda"] main::after{content:"";position:fixed;top:91px;left:50%;width:72px;height:3px;margin-left:-36px;background:var(--red);box-shadow:0 0 18px rgba(227,32,42,.8);pointer-events:none}
body[data-view="beranda"] footer{display:none}
.logo{width:min(680px,80vw);height:auto;display:block;margin:0 auto;animation:rise 1.4s ease both,glow 6s ease-in-out 1.4s infinite}
@keyframes rise{from{opacity:0;transform:translateY(10px) scale(.98)}to{opacity:1;transform:none}}
@keyframes glow{0%,100%{filter:drop-shadow(0 0 12px rgba(227,32,42,.22))}50%{filter:drop-shadow(0 0 34px rgba(227,32,42,.55))}}
.rule{width:56px;height:2px;background:var(--red);margin:36px auto 0}
h1{font-style:italic;font-weight:600;font-size:clamp(26px,5.5vw,40px);line-height:1.1;margin:26px 0 0;letter-spacing:.01em}
h1 b{color:var(--red);font-weight:600}
.lead{max-width:40ch;margin:14px auto 0;color:var(--muted);font-size:18px}
.tiles{display:grid;grid-template-columns:repeat(2,1fr);gap:16px;max-width:520px;margin:40px auto 0}
.tile{display:flex;flex-direction:column;justify-content:center;min-height:84px;padding:18px 22px;border:1px solid var(--line);border-radius:14px;text-decoration:none;background:linear-gradient(160deg,var(--panel),var(--bg));transition:border-color .2s,transform .2s}
.tile:hover{border-color:var(--red);transform:translateY(-2px)}
.tile small{color:var(--muted);font-size:14px}
.tile strong{font-style:italic;font-size:22px;font-weight:600;display:flex;justify-content:space-between;align-items:center}
.tile strong span{color:var(--red)}

.head{padding:48px 0 28px}
.head h2{display:inline-block;font-family:"Cormorant Garamond",Georgia,serif;font-style:italic;font-weight:500;font-size:clamp(44px,8vw,72px);line-height:1;margin:0;letter-spacing:.01em}
.head h2::after{content:"";display:block;width:100%;height:2px;background:var(--red);margin-top:18px}
.head p{color:var(--muted);margin:16px 0 0;max-width:52ch}
.grid{display:grid;gap:18px;padding-bottom:28px;grid-template-columns:repeat(3,1fr)}
.grid[data-n="4"]{grid-template-columns:repeat(4,1fr)}
.grid[data-n="5"]{grid-template-columns:repeat(6,1fr)}
.grid[data-n="5"] .card{grid-column:span 2}
.grid[data-n="5"] .card:nth-child(4){grid-column:2 / span 2}
.grid[data-n="5"] .card:nth-child(5){grid-column:4 / span 2}
@media (max-width:900px){
  .grid[data-n="4"],.grid[data-n="5"]{grid-template-columns:repeat(2,1fr)}
  .grid[data-n="5"] .card,.grid[data-n="5"] .card:nth-child(4){grid-column:auto}
  .grid[data-n="5"] .card:nth-child(5){grid-column:1 / -1;width:calc(50% - 9px);justify-self:center}
}
@media (max-width:640px){
  .grid,.grid[data-n="4"],.grid[data-n="5"]{grid-template-columns:1fr}
  .grid[data-n="5"] .card:nth-child(5){grid-column:auto;width:auto}
  .card{flex-direction:row}
  .card .ph{width:38%;flex:none;aspect-ratio:auto;min-height:170px;border-bottom:0;border-right:1px solid var(--line)}
}
.card{border:1px solid rgba(255,255,255,.1);border-radius:3px;overflow:hidden;background:linear-gradient(180deg,#141213,#0A0909);display:flex;flex-direction:column;transition:border-color .3s,transform .3s,box-shadow .3s}
.card:hover{border-color:var(--red);transform:translateY(-3px);box-shadow:0 24px 50px -24px rgba(227,32,42,.5)}
.ph{aspect-ratio:4/3;display:flex;align-items:center;justify-content:center;color:var(--muted);font-size:13px;letter-spacing:.08em;background:radial-gradient(circle at 30% 20%,rgba(227,32,42,.22),transparent 60%),#0E0E0F;border-bottom:1px solid var(--line)}
.card .b{padding:16px;display:flex;flex-direction:column;gap:6px;flex:1}
.card h3{margin:0;font-family:"Cormorant Garamond",Georgia,serif;font-size:26px;font-weight:600;line-height:1.1}
.card p{margin:0;color:var(--muted);font-size:14px;flex:1}
.btn{font:inherit;font-weight:600;font-size:14px;display:inline-flex;align-items:center;justify-content:center;padding:10px 18px;border-radius:999px;border:1px solid var(--red);background:transparent;color:var(--ink);text-decoration:none;letter-spacing:.03em;margin-top:10px;transition:background .15s}
.btn:hover{background:var(--red)}
.btn.solid{background:var(--red);padding:13px 30px;font-size:16px}
.btn.solid:hover{filter:brightness(1.1)}
.note{color:var(--muted);font-size:11px;text-align:center;padding-bottom:12px}

.info{display:grid;grid-template-columns:auto 1fr;gap:12px 28px;margin:28px 0 64px;padding:24px 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line)}
.info dt{color:var(--muted)}
.info dd{margin:0;font-weight:600}

footer{width:100%;max-width:1120px;padding:20px 24px;font-size:13px;letter-spacing:.08em;color:var(--muted);border-top:1px solid var(--line);text-align:center}
.badge{align-self:flex-start;font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--red);border:1px solid var(--red);border-radius:999px;padding:2px 10px}
.modal{position:fixed;inset:0;z-index:50;display:flex;align-items:center;justify-content:center;padding:20px;background:rgba(0,0,0,.74);backdrop-filter:blur(6px);-webkit-backdrop-filter:blur(6px);opacity:0;visibility:hidden;transition:opacity .25s,visibility .25s}
.modal.open{opacity:1;visibility:visible}
.sheet{position:relative;width:min(460px,100%);max-height:calc(100svh - 40px);overflow:auto;background:linear-gradient(180deg,#181516,#0B0A0A);border:1px solid rgba(255,255,255,.14);border-radius:28px;padding:30px 24px 24px;transform:translateY(12px) scale(.98);transition:transform .25s}
.modal.open .sheet{transform:none}
.x{position:absolute;top:14px;right:14px;width:36px;height:36px;border-radius:50%;border:1px solid var(--line);background:none;color:var(--ink);font-size:20px;line-height:1;cursor:pointer}
.x:hover{border-color:var(--red)}
.sheet h3{font-family:"Cormorant Garamond",Georgia,serif;font-style:italic;font-weight:600;font-size:32px;line-height:1.05;margin:0 40px 6px 0}
.sheet .sub{color:var(--muted);font-size:14px;margin:0 0 22px}
.cars{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.car{font:inherit;font-weight:600;font-size:16px;padding:30px 10px;border-radius:14px;border:1px solid rgba(255,255,255,.14);background:#050404;color:var(--ink);cursor:pointer;transition:border-color .2s,box-shadow .2s}
.car:hover{border-color:var(--red);box-shadow:0 0 24px rgba(227,32,42,.3)}
.other{display:block;margin-top:18px;text-align:center;padding:14px 22px;line-height:1.4;border-radius:999px;background:var(--red);color:#fff;font-weight:600;text-decoration:none;letter-spacing:.04em}
.other:hover{filter:brightness(1.1)}
.back{font:inherit;font-size:14px;background:none;border:0;color:var(--muted);cursor:pointer;padding:0;margin-bottom:14px}
.back:hover{color:var(--ink)}
.gal{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin:16px 0}
.gal .ph{aspect-ratio:1/1;border:1px solid var(--line);border-radius:12px}
.gal .ph:first-child{grid-column:1/-1;aspect-ratio:16/9}
.sheet .btn.solid{display:flex;margin-top:6px}
.pv{aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;color:var(--muted);font-size:13px;letter-spacing:.08em;background:radial-gradient(circle at 30% 20%,rgba(227,32,42,.22),transparent 60%),#0E0E0F;border:1px solid var(--line);border-radius:12px;margin:16px 0 12px}
.vars{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-bottom:16px}
.vbtn{font:inherit;font-weight:600;font-size:12px;letter-spacing:.08em;text-transform:uppercase;line-height:1.25;padding:14px 6px;border-radius:12px;border:1px solid rgba(255,255,255,.14);background:#050404;color:var(--ink);cursor:pointer;transition:border-color .2s,box-shadow .2s}
.vbtn:hover{border-color:rgba(227,32,42,.6)}
.vbtn.on{border-color:var(--red);box-shadow:0 0 22px rgba(227,32,42,.32)}
.steps{list-style:none;margin:0 0 16px;padding:0;display:grid;gap:14px;counter-reset:s}
.steps li{display:grid;grid-template-columns:32px 1fr;gap:14px;align-items:start;counter-increment:s}
.steps li::before{content:counter(s);width:30px;height:30px;border:1px solid var(--red);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:600}
.steps b{display:block;font-weight:600}
.steps span{color:var(--muted);font-size:14px;line-height:1.5}
.sheet .fine{color:var(--muted);font-size:13px;margin:0 0 18px}
.sheet .btn.cancel{display:flex;width:100%;margin-top:10px;padding:13px 18px;color:var(--muted);border-color:var(--line)}
.sheet .btn.cancel:hover{background:transparent;color:var(--ink);border-color:var(--ink)}
.gal.flat .ph:first-child{grid-column:auto;aspect-ratio:1/1}
#confirm{z-index:60}
.help{padding:8px 0 40px;text-align:center}
.helplink{font:inherit;font-size:16px;line-height:1.55;text-align:center;display:inline-flex;justify-content:center;gap:10px;align-items:baseline;background:none;border:0;border-bottom:1px solid var(--red);color:var(--ink);padding:0 0 5px;cursor:pointer;transition:color .2s}
.helplink span{color:var(--red)}
.helplink:hover{color:var(--red)}
@media (max-width:560px){
  .nav-logo{height:26px}
  .bar{min-height:60px;gap:14px;padding:0 16px;flex-wrap:wrap}
  nav{margin-left:auto;gap:14px}
  nav a,nav button{font-size:10px;letter-spacing:.07em;gap:4px}
  nav a.contact{margin-left:0;padding:7px 11px}
  body[data-view="beranda"] main::before{top:84px;right:14px;bottom:14px;left:14px}
  body[data-view="beranda"] main::after{top:83px}
  .home-foot{bottom:36px;padding:0 24px}
  .addr{font-size:9.5px;letter-spacing:.12em}
  .socials{gap:12px 20px;margin-bottom:18px}
  .soc{font-size:9.5px;letter-spacing:.12em;gap:7px}
  .soc svg{width:18px;height:18px}
  .clabel{font-size:10px;letter-spacing:.3em}
  .tiles{grid-template-columns:1fr}
  .tile{min-height:72px}
  .info{grid-template-columns:1fr;gap:2px 0}
  .info dd{margin-bottom:12px}
}
@media (prefers-reduced-motion:reduce){*{transition:none!important;animation:none!important}}
/* product photos */
.ph img,.pv img{display:block;width:100%;height:100%;object-fit:cover}
.pv{overflow:hidden}
@endverbatim
</style>
</head>
<body data-view="beranda">
<div class="page">
  <header>
    <div class="wrap bar">
      <a class="nav-logo" href="#beranda" aria-label="Pervformance"><img src="{{ asset('images/logo-icon.png') }}" alt="Pervformance"></a>
      <nav aria-label="Main menu">
        <a href="#beranda" data-tab="beranda">Home</a>
        <div class="dd" id="dd" data-open="false">
          <button id="dd-btn" aria-expanded="false" aria-controls="menu" data-tab="products">Products
            <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="menu" id="menu">
            <a href="#interior" data-tab="interior">Interior</a>
            <a href="#eksterior" data-tab="eksterior">Exterior</a>
          </div>
        </div>
        <button type="button" id="consign-btn">Consignment</button>
      </nav>
    </div>
  </header>

  <main>
    <!-- HOME -->
    <section class="view" id="v-beranda">
      <div class="wrap">
        <div class="hero">
          <img class="logo" src="{{ asset('images/logo.png') }}" alt="Pervformance – Driven by Obsession" width="560" height="84">
          <a class="more" href="#about">About Us →</a>
          <div class="home-foot"><p class="clabel">Contact Us</p><div class="socials"><a class="soc" href="https://www.tiktok.com/@@pervformance_collection" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg><span>TikTok</span></a><a class="soc" href="https://www.instagram.com/pervformance_collection" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5.2"/><circle cx="12" cy="12" r="4.1"/><circle cx="17.4" cy="6.6" r="1.2" fill="currentColor" stroke="none"/></svg><span>Instagram</span></a><a class="soc" id="wa-home" data-confirm="1" href="#" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg><span>WhatsApp</span></a></div><a class="addr" href="https://www.google.com/maps/search/?api=1&amp;query=Kencana+Sari+Timur+III+A20%2C+Surabaya" target="_blank" rel="noopener" aria-label="Open address in Google Maps"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>Kencana Sari Timur III A20, Surabaya</a></div>
        </div>
      </div>
    </section>

    <!-- PRODUCTS (satu template, dua kategori) -->
    <section class="view" id="v-products" hidden>
      <div class="wrap">
        <div class="head"><h2 id="p-title"></h2><p id="p-desc"></p></div>
        <div class="grid" id="grid"></div>
        <div class="help"><button class="helplink" id="help-link" type="button">Can’t find what you’re looking for? Chat with us. We’d be happy to help. <span>→</span></button></div>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="view" id="v-about" hidden>
      <div class="wrap">
        <div class="head"><h2>About Us</h2></div>
        <div class="about">
          <h3 class="lede">More Than Just Automotive.<br>It’s About Performance.</h3>
          <p>At Pervformance Collection, we believe every car has the potential to stand out. We are an automotive solutions provider dedicated to bringing together quality products, professional installation, and personalized services to help every vehicle reach its full potential.</p>
          <p>From lighting upgrades and performance enhancements to styling and automotive accessories, we provide solutions that combine functionality, aesthetics, and reliability. Our goal is to make it easier for car owners to find the right products and services in one place, with attention to detail and quality at every step.</p>
          <p>Whether you’re looking to upgrade your daily drive, refine your car’s appearance, or build a setup that reflects your personal style, we’re here to help bring your vision to life.</p>
          <p class="sig">Pervformance Collection — Your One-Stop Automotive Solution.</p>
        </div>
        <dl class="info">
          <dt>Address</dt><dd>Kencana Sari Timur III A20, Surabaya</dd>
          <dt>Specialty</dt><dd>Lighting, performance &amp; accessories</dd>
        </dl>
        <a class="btn solid" id="wa-about" data-confirm="1" href="#" target="_blank" rel="noopener">Contact Us</a>
        <div style="height:64px"></div>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="view" id="v-kontak" hidden>
      <div class="wrap">
        <div class="head"><h2>Contact Us</h2><p>Tell us your car and what you’re after, or book your install slot. We’ll reply on WhatsApp.</p></div>
        <a class="btn solid" id="wa-main" data-confirm="1" target="_blank" rel="noopener">Chat on WhatsApp</a>
        <dl class="info">
          <dt>WhatsApp</dt><dd>0851-5607-0332</dd>
          <dt>Hours</dt><dd>Mon–Sat, 09.00–17.00</dd>
          <dt>Location</dt><dd>Store address coming soon</dd>
        </dl>
      </div>
    </section>
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

<script>window.PERV = @json($config);</script>
<script>
@verbatim
// Replace with the WhatsApp number (international format, no + or spaces)
var WA_NUMBER = PERV.waNumber;

// Sample data (later from the categories + products tables)
var CATEGORIES = PERV.categories;
// kind: "proof" = show finished work, "types" = show style options, "direct" = straight to WhatsApp
var PRODUCTS = PERV.products;

var IMG = PERV.imgBase + "/";
function photo(box, file, fallback, alt){
  box.textContent = "";
  if(!file){ box.textContent = fallback; return; }
  var img = document.createElement("img");
  img.alt = alt || "";
  img.onerror = function(){ box.textContent = fallback; };
  img.src = IMG + file;
  box.appendChild(img);
}

function wa(m){ return "https://wa.me/" + WA_NUMBER + "?text=" + encodeURIComponent(m); }
document.getElementById("wa-main").href = wa("Hello Pervformance, I’d like to place an order / book an appointment.");
document.getElementById("wa-home").href = wa("Hello Pervformance, I’d like to place an order / book an appointment.");
document.getElementById("wa-about").href = wa("Hello Pervformance, I’d like to place an order / book an appointment.");

var dd = document.getElementById("dd"), ddBtn = document.getElementById("dd-btn");
function setOpen(o){ dd.setAttribute("data-open", o); ddBtn.setAttribute("aria-expanded", o); }
ddBtn.addEventListener("click", function(e){ e.stopPropagation(); setOpen(dd.getAttribute("data-open") !== "true"); });
document.addEventListener("click", function(e){ if(!dd.contains(e.target)) setOpen(false); });
document.addEventListener("keydown", function(e){ if(e.key === "Escape"){ setOpen(false); ddBtn.focus(); } });

function mk(tag, cls, text){ var e = document.createElement(tag); if(cls) e.className = cls; if(text) e.textContent = text; return e; }
function waBtn(label, msg, cls){ var a = mk("a", cls || "btn", label); a.href = wa(msg); a.target = "_blank"; a.rel = "noopener"; return confirmLink(a); }

var modal = document.getElementById("modal"), mBody = document.getElementById("m-body"), mX = document.getElementById("m-x");
function openModal(){ modal.classList.add("open"); document.body.style.overflow = "hidden"; mX.focus(); }
function closeModal(){ modal.classList.remove("open"); document.body.style.overflow = ""; }
mX.addEventListener("click", closeModal);
modal.addEventListener("click", function(e){ if(e.target === modal) closeModal(); });
document.addEventListener("keydown", function(e){ if(e.key === "Escape") closeModal(); });

function gallery(labels, flat){
  var g = mk("div", flat ? "gal flat" : "gal");
  (labels || ["PHOTO / VIDEO", "PHOTO", "PHOTO"]).forEach(function(s){ g.appendChild(mk("div", "ph", s)); });
  return g;
}
function showProof(p){
  mBody.innerHTML = "";
  var h = mk("h3", "", p.name); h.id = "m-title";
  mBody.appendChild(h);
  mBody.appendChild(mk("p", "sub", "Fresh from our workshop. " + p.desc));
  mBody.appendChild(gallery(p.labels));
  if(p.req){
    mBody.appendChild(confirmLink(waBtn("Other car models welcome. Request yours and we’ll customize it just for you.", "Hello Pervformance, I’d like to request " + p.name + " for my car (a different model).", "other")));
  } else {
    mBody.appendChild(waBtn("Ask on WhatsApp", "Hello Pervformance, I’d like to ask about " + p.name + ".", "btn solid"));
  }
  openModal();
}

function showVariants(p){
  mBody.innerHTML = "";
  var h = mk("h3", "", p.name); h.id = "m-title";
  mBody.appendChild(h);
  mBody.appendChild(mk("p", "sub", "Tap a style to preview it."));
  var view = mk("div", "pv");
  var row = mk("div", "vars"), btns = [];
  function pick(i){
    photo(view, p.variants[i].image, "PHOTO · " + p.variants[i].name.toUpperCase(), p.name + " - " + p.variants[i].name);
    btns.forEach(function(b, j){ b.classList.toggle("on", j === i); b.setAttribute("aria-pressed", j === i); });
  }
  p.variants.forEach(function(v, i){
    var b = mk("button", "vbtn", v.name); b.type = "button";
    b.addEventListener("click", function(){ pick(i); });
    btns.push(b); row.appendChild(b);
  });
  mBody.appendChild(view); mBody.appendChild(row);
  mBody.appendChild(waBtn("Ask about " + p.name, "Hello Pervformance, I’d like to ask about " + p.name + ". Which styles are available?", "btn solid"));
  pick(0);
  openModal();
}
function showTypes(p){
  mBody.innerHTML = "";
  var h = mk("h3", "", p.name); h.id = "m-title";
  mBody.appendChild(h);
  mBody.appendChild(mk("p", "sub", "Pick your style, then hit us up on WhatsApp."));
  mBody.appendChild(gallery(["STYLE 1", "STYLE 2", "STYLE 3", "STYLE 4"], true));
  mBody.appendChild(waBtn("Ask about " + p.name, "Hello Pervformance, I’d like to ask about Slimframe. Which styles are available?", "btn solid"));
  openModal();
}

function showConsign(){
  mBody.innerHTML = "";
  var h = mk("h3", "", "Consignment"); h.id = "m-title";
  mBody.appendChild(h);
  mBody.appendChild(mk("p", "sub", "Got premium car gear you’re ready to pass on? Let us put it in front of the right buyers."));
  var ol = mk("ol", "steps");
  [["Send the details", "Share photos, condition, and your asking price on WhatsApp."],
   ["We review it", "Our team checks the item and agrees on the terms with you."],
   ["We showcase it", "Your item gets displayed and promoted to our community."],
   ["Get paid", "Once it sells, your payout is on its way."]].forEach(function(s){
    var li = mk("li"), d = mk("div");
    d.appendChild(mk("b", "", s[0])); d.appendChild(mk("span", "", s[1]));
    li.appendChild(d); ol.appendChild(li);
  });
  mBody.appendChild(ol);
  mBody.appendChild(mk("p", "fine", "Open to lighting, accessories, and performance parts in great condition. Terms are confirmed per item."));
  mBody.appendChild(waBtn("Start a consignment", "Hello Pervformance, I’d like to consign an item.", "btn solid"));
  openModal();
}
document.getElementById("consign-btn").addEventListener("click", showConsign);

/* Confirm before leaving for WhatsApp */
var conf = document.getElementById("confirm"), cGo = document.getElementById("c-go"), cCancel = document.getElementById("c-cancel");
function askWA(url){ cGo.href = url; conf.classList.add("open"); document.body.style.overflow = "hidden"; cGo.focus(); }
function closeConfirm(){ conf.classList.remove("open"); if(!modal.classList.contains("open")) document.body.style.overflow = ""; }
function confirmLink(a){ if(a._c) return a; a._c = 1; a.addEventListener("click", function(e){ e.preventDefault(); askWA(a.href); }); return a; }
cCancel.addEventListener("click", closeConfirm);
cGo.addEventListener("click", closeConfirm);
conf.addEventListener("click", function(e){ if(e.target === conf) closeConfirm(); });
document.addEventListener("keydown", function(e){ if(e.key === "Escape") closeConfirm(); });
document.querySelectorAll("[data-confirm]").forEach(confirmLink);

var curCat = "interior";
document.getElementById("help-link").addEventListener("click", function(){
  askWA(wa("Hello Pervformance, I couldn’t find what I’m looking for in " + CATEGORIES[curCat].name + ". Could you help me?"));
});

function renderProducts(key){
  curCat = key;
  var cat = CATEGORIES[key];
  document.getElementById("p-title").textContent = cat.name;
  document.getElementById("p-desc").textContent = cat.desc;
  var grid = document.getElementById("grid"); grid.innerHTML = "";
  var list = PRODUCTS.filter(function(p){ return p.c === key; });
  grid.setAttribute("data-n", list.length);
  list.forEach(function(p){
    var el = mk("article", "card");
    var ph = mk("div", "ph"); photo(ph, p.image, "PRODUCT PHOTO", p.name); el.appendChild(ph);
    var b = mk("div", "b");
    b.appendChild(mk("h3", "", p.name));
    b.appendChild(mk("p", "", p.desc));
    if(p.kind === "proof"){
      var y = mk("button", "btn", "See the build"); y.type = "button"; y.addEventListener("click", function(){ showProof(p); }); b.appendChild(y);
    } else if(p.kind === "variants"){
      var vb = mk("button", "btn", "Browse styles"); vb.type = "button"; vb.addEventListener("click", function(){ showVariants(p); }); b.appendChild(vb);
    } else if(p.kind === "types"){
      var z = mk("button", "btn", "Browse styles"); z.type = "button"; z.addEventListener("click", function(){ showTypes(p); }); b.appendChild(z);
    } else {
      b.appendChild(waBtn("Ask on WhatsApp", "Hello Pervformance, I’d like to ask about " + p.name + ".", "btn"));
    }
    el.appendChild(b); grid.appendChild(el);
  });
}

function route(){
  var h = (location.hash || "#beranda").slice(1);
  if(!["beranda","interior","eksterior","kontak","about"].includes(h)) h = "beranda";
  var view = (h === "interior" || h === "eksterior") ? "products" : h;
  ["beranda","products","kontak","about"].forEach(function(v){ document.getElementById("v-" + v).hidden = (v !== view); });
  if(view === "products") renderProducts(h);
  document.body.setAttribute("data-view", h);
  document.querySelectorAll("[data-tab]").forEach(function(el){
    var t = el.getAttribute("data-tab");
    el.classList.toggle("on", t === h || (t === "products" && view === "products"));
  });
  setOpen(false);
  closeModal();
  window.scrollTo(0,0);
}
window.addEventListener("hashchange", route);
route();
@endverbatim
</script>
</body>
</html>