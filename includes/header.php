<?php
// Pengaturan dasar website Webcraft.id
if (!defined('WA_URL')) {
    define('WA_URL', 'https://wa.me/6282252090125');
}
$pageTitle = isset($pageTitle) ? $pageTitle : 'Webcraft.id - Jasa Pembuatan Website Profesional';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Webcraft.id membantu bisnis memiliki website profesional, modern, responsif, dan siap digunakan.">
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<style>
:root{--navy:#0b1f52;--blue:#1463ff;--ink:#17233d;--muted:#667085;--soft:#f4f7fc;--white:#fff}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;font-family:Inter,Arial,sans-serif;color:var(--ink);line-height:1.65}
a{color:inherit;text-decoration:none}
.site-header{height:76px;display:flex;align-items:center;justify-content:space-between;padding:0 max(5vw,20px);background:#fff;position:sticky;top:0;z-index:10;border-bottom:1px solid #edf0f5}
.brand{font-size:24px;font-weight:800;color:var(--navy);letter-spacing:-1px}
.brand span{color:var(--blue)}
.site-nav{display:flex;gap:28px;align-items:center;font-size:14px;font-weight:600}
.site-nav a:hover{color:var(--blue)}
.site-nav .nav-cta{background:var(--blue);color:#fff;padding:10px 18px;border-radius:9px}
.w{width:min(1160px,90%);margin:auto}
.hero{background:linear-gradient(125deg,#091a43,#123d91 65%,#1463ff);color:#fff;padding:88px 0}
.hg{display:grid;grid-template-columns:1.1fr .9fr;gap:48px;align-items:center}
.hero h1{font-size:clamp(34px,5vw,58px);line-height:1.12;margin:0 0 22px;letter-spacing:-1.5px}
.hero h1 span{color:#8db7ff}
.hero p{font-size:17px;color:#e0eaff;max-width:650px}
.cta{display:flex;gap:12px;flex-wrap:wrap;margin:28px 0}
.btn{display:inline-block;background:var(--blue);color:white;padding:13px 21px;border-radius:9px;font-weight:700}
.hero .btn{background:#fff;color:#123d91}
.hero .btn.o{background:transparent;color:#fff;border:1px solid #ffffff80}
.chips{display:flex;flex-wrap:wrap;gap:10px;margin-top:26px}
.chips span{font-size:12px;background:#ffffff18;border:1px solid #ffffff2b;padding:7px 10px;border-radius:30px}
.mock{background:#ffffff17;border:1px solid #ffffff35;border-radius:20px;padding:25px;min-height:290px}
.note{font-size:13px;color:#dce8ff;margin-bottom:20px}
.lap{background:#dce5f5;border:9px solid #172c52;border-radius:14px;padding:12px;height:170px;box-shadow:0 18px 40px #06142e55}
.scr{height:100%;background:linear-gradient(135deg,#f8fbff,#dbeafe);display:flex;flex-direction:column;align-items:center;justify-content:center;color:#17345f;font-weight:800;text-align:center}
.scr small{display:block;font-size:12px;color:#55709a}
.scr u{width:55%;height:5px;background:#8bb3ed;margin-top:16px;border-radius:5px}
.ph{width:75%;height:18px;background:#9db4d8;margin:0 auto;border-radius:0 0 30px 30px}
.ph em{display:none}
section{padding:76px 0}
section h2,.band h2{font-size:clamp(27px,3.5vw,39px);line-height:1.2;color:var(--navy);margin:0 0 18px}
.sub{color:var(--muted);font-size:16px;max-width:650px}
.why{display:grid;grid-template-columns:.8fr 1.2fr;gap:50px;align-items:center}
.pic{min-height:260px;border-radius:20px;background:linear-gradient(135deg,#dceaff,#edf3ff);position:relative}
.pic:after{content:"Webcraft.id";position:absolute;inset:0;display:grid;place-items:center;color:#1a4a9b;font-size:30px;font-weight:800}
.g4{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin-top:28px}
.f{background:var(--soft);padding:15px;border-radius:12px;font-size:13px;font-weight:700}
.ic{font-size:24px;color:var(--blue);margin-bottom:6px}
.soft{background:var(--soft)}
.ph2{text-align:center;margin-bottom:32px}
.tabs{display:flex;justify-content:center;gap:8px;flex-wrap:wrap;margin-top:22px}
.tabs button{border:1px solid #dce3ef;background:#fff;padding:9px 16px;border-radius:30px;cursor:pointer;color:#44516a}
.tabs button.on{background:var(--blue);color:#fff;border-color:var(--blue)}
.pf{display:grid;grid-template-columns:repeat(4,1fr);gap:18px}
.card{min-height:190px;border-radius:16px;padding:24px;background:linear-gradient(145deg,var(--c),#12234b);color:#fff;display:flex;flex-direction:column;justify-content:flex-end;box-shadow:0 12px 28px #10264b18}
.card b{font-size:20px}.card small{color:#e4ebf8;margin:5px 0 12px}.card span{font-size:12px;font-weight:700}
.g4b{display:grid;grid-template-columns:.8fr 1.2fr;gap:45px;align-items:start}
.sv{display:grid;grid-template-columns:repeat(2,1fr);gap:15px}
.sv>div{padding:22px;border:1px solid #e7ebf2;border-radius:14px}
.sv b{font-size:17px}.sv p{color:var(--muted);font-size:14px;margin-bottom:0}
.pr{display:grid;grid-template-columns:.7fr 1.3fr;gap:35px;align-items:start}
.pg{display:grid;grid-template-columns:repeat(2,1fr);gap:14px}
.pk{background:#fff;border:1px solid #e6eaf1;border-radius:15px;padding:22px;position:relative}
.pk h3{font-size:21px;margin:0;color:var(--navy)}
.pk .p{font-size:24px;font-weight:800;color:var(--blue);margin:8px 0}
.pk ul{padding-left:18px;color:#536078;font-size:13px}
.pk a{display:inline-block;background:#edf3ff;color:#1555c5;padding:9px 13px;border-radius:8px;font-weight:700;font-size:13px}
.pk.h{border:2px solid var(--blue)}
.tag{font-size:11px;background:var(--blue);color:#fff;padding:5px 9px;border-radius:20px}
.st{display:grid;grid-template-columns:repeat(5,1fr);gap:16px;margin-top:28px}
.st>div{background:var(--soft);padding:18px;border-radius:13px;font-size:13px;color:var(--muted)}
.st b{display:block;color:var(--navy);font-size:15px;margin:7px 0}
.n{width:32px;height:32px;background:var(--blue);color:white;border-radius:50%;display:grid;place-items:center;font-weight:800}
.band{background:linear-gradient(120deg,#0b1f52,#1453b8);padding:65px 0;color:#fff;text-align:center}
.band h2{color:#fff}.band p{color:#dce8ff}.band .btn{background:#fff;color:#1555c5;margin-top:12px}
.site-footer{background:#071632;color:#d7e1f3;padding:28px 5%;text-align:center;font-size:13px}
.site-footer strong{font-size:18px;color:#fff}
@media(max-width:800px){.site-header{height:auto;padding:16px 5%;align-items:flex-start;gap:14px;flex-direction:column}.site-nav{gap:14px;flex-wrap:wrap;font-size:13px}.hg,.why,.g4b,.pr{grid-template-columns:1fr}.hero{padding:60px 0}.g4{grid-template-columns:repeat(2,1fr)}.pf{grid-template-columns:repeat(2,1fr)}.st{grid-template-columns:repeat(2,1fr)}}
@media(max-width:480px){.pg,.sv{grid-template-columns:1fr}.pf{grid-template-columns:1fr 1fr}.card{padding:15px;min-height:160px}.st{grid-template-columns:1fr 1fr}.mock{padding:15px}}
</style>
</head>
<body>
<header class="site-header">
<a class="brand" href="/">Webcraft<span>.id</span></a>
<nav class="site-nav" aria-label="Navigasi utama">
<a href="#tentang">Tentang</a><a href="#portfolio">Portfolio</a><a href="#layanan">Layanan</a><a href="#harga">Harga</a>
<a class="nav-cta" href="<?= htmlspecialchars(WA_URL, ENT_QUOTES, 'UTF-8'); ?>">Konsultasi</a>
</nav>
</header>
<main>
