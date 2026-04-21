<?php
/**
 * АТС ТЕЛЕКОМ — page-shop.php
 * Template Name: Магазин ИБП
 */
/*
 * Template Name: Магазин ИБП
 */
?>
<?php get_header(); ?>
<style>
:root{--bg:#f8f7f3;--bg2:#fff;--card:#fff;--card2:#f0ede6;--border:#e5e1d8;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#1565C0;--mag-bg:rgba(34,158,217,.08);--mag-bd:rgba(34,158,217,.24);--navy:#252525;--green:#1565C0;--text:#1c2030;--text2:#4a5568;--text3:#8a93a8;--shadow-sm:0 2px 8px rgba(45,55,72,.07);--shadow:0 4px 24px rgba(45,55,72,.10);--radius:12px;--nav-h:72px;--max-w:1240px;color-scheme:light}[data-theme="dark"]{--bg:#121212;--bg2:#1a1a1a;--card:#202020;--card2:#282828;--border:#303030;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#42A5F5;--mag-bg:rgba(34,158,217,.12);--navy:#b8b8c8;--green:#42A5F5;--text:#e8e8f2;--text2:#9e9eb0;--text3:#6b6b7a;--shadow-sm:0 2px 8px rgba(0,0,0,.30);--shadow:0 4px 24px rgba(0,0,0,.45);color-scheme:dark}*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth}body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--text);overflow-x:hidden;-webkit-font-smoothing:antialiased;transition:background.35s,color.35s}a{color:inherit;text-decoration:none}.nav{position:fixed;top:0;left:0;right:0;z-index:1000;height:var(--nav-h);background:rgba(248,247,243,.92);backdrop-filter:blur(24px) saturate(160%);-webkit-backdrop-filter:blur(24px);border-bottom:1px solid var(--border);transition:background .4s}
[data-theme="dark"] .nav{background:rgba(12,14,26,.92)}
.nav-inner{width:100%;max-width:var(--max-w);margin:0 auto;padding:0 32px;height:100%;display:flex;align-items:center;gap:8px}
.nav-logo{display:flex;align-items:center;gap:10px;margin-right:auto;flex-shrink:0;text-decoration:none}
.nav-logo-text{font-family:'Inter',sans-serif;font-size:17px;font-weight:800;color:var(--text);line-height:1.2;letter-spacing:.2px}
.nav-logo-text div{font-size:10px;font-weight:500;color:var(--text3);margin-top:1px;white-space:nowrap}
.nav-links{display:flex;list-style:none;gap:2px}
.nav-links a{display:block;padding:7px 12px;border-radius:9px;font-size:14px;font-weight:600;color:var(--text2);transition:all .18s;white-space:nowrap}
.nav-links a:hover{color:var(--text);background:var(--border)}
.nav-links a.active{color:var(--accent);font-weight:700}
.nav-right{display:flex;align-items:center;gap:8px;flex-shrink:0}
.theme-toggle{width:36px;height:36px;border-radius:10px;background:var(--border);border:1px solid var(--border2);display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:15px;transition:all .2s;flex-shrink:0}
.theme-toggle:hover{border-color:var(--accent)}
.nav-phone-btn{padding:8px 18px;border-radius:10px;background:var(--accent);color:#fff;font-size:14px;font-weight:700;transition:all .2s;white-space:nowrap;text-decoration:none}
.nav-phone-btn:hover{background:var(--accent-h);transform:translateY(-1px);box-shadow:0 4px 16px rgba(21,101,192,.35)}
.nav-tg-btn{display:flex;align-items:center;gap:6px;padding:8px 14px;border-radius:10px;background:var(--accent);color:#fff;font-size:14px;font-weight:700;transition:all .2s;white-space:nowrap;text-decoration:none}
.nav-tg-btn:hover{background:var(--accent-h);transform:translateY(-1px)}
.burger{display:none;align-items:center;justify-content:center;width:38px;height:38px;border-radius:10px;background:var(--border);border:1px solid var(--border2);cursor:pointer;font-size:20px;color:var(--text);transition:all .2s;flex-shrink:0}
.burger.open{background:var(--accent-bg);border-color:var(--accent);color:var(--accent)}
.mobile-nav{display:none;position:fixed;top:var(--nav-h);left:0;right:0;background:var(--bg);border-bottom:2px solid var(--accent);z-index:999;padding:12px 16px 16px;flex-direction:column;gap:2px;box-shadow:0 12px 40px rgba(0,0,0,.15);max-height:calc(100vh - var(--nav-h));overflow-y:auto}
.mobile-nav.open{display:flex}
.mobile-nav ul{list-style:none}
.mobile-nav a{display:block;padding:11px 14px;border-radius:10px;font-size:15px;font-weight:500;color:var(--text2);transition:all .18s;text-decoration:none}
.mobile-nav a:hover,.mobile-nav a.active{color:var(--accent);background:var(--accent-bg)}
.mobile-nav-btns{display:flex;gap:10px;margin-top:8px;padding-top:12px;border-top:1px solid var(--border)}
.mobile-nav-btns a{flex:1;text-align:center;padding:12px;border-radius:10px;font-weight:700;font-size:14px;text-decoration:none}
.mobile-nav-btns .nav-phone-btn{background:var(--accent)}
.mobile-nav-btns .nav-tg-btn{background:var(--accent)}


.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}.grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:20px}.card{background:var(--card);border:1.5px solid var(--border);border-radius:16px;padding:24px;transition:all.25s;position:relative;overflow:hidden}.card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--accent),var(--mag));opacity:0;transition:.3s}.card:hover{transform:translateY(-4px);box-shadow:var(--shadow);border-color:var(--accent)}.card:hover::before{opacity:1}.card-ico{font-size:28px;margin-bottom:12px}.card-title{font-size:14px;font-weight:800;color:var(--text);margin-bottom:8px}.card-text{font-size:13px;color:var(--text3);line-height:1.7}.prod-card{background:var(--card);border:1.5px solid var(--border);border-radius:16px;overflow:hidden;transition:all.25s}.prod-card:hover{transform:translateY(-4px);box-shadow:var(--shadow);border-color:var(--accent)}.prod-img{height:140px;background:var(--card2);display:flex;align-items:center;justify-content:center;font-size:52px;border-bottom:1px solid var(--border)}.prod-body{padding:20px}.prod-brand{font-size:10px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--accent);margin-bottom:6px}.prod-name{font-weight:800;font-size:14px;color:var(--text);margin-bottom:8px}.prod-desc{font-size:12.5px;color:var(--text3);line-height:1.6;margin-bottom:14px}.prod-price{font-family:'Inter',sans-serif;font-size:16px;color:var(--accent);font-weight:800}.prod-tag{display:inline-block;font-size:10px;font-weight:700;padding:2px 8px;border-radius:6px;margin-bottom:10px}.prod-tag.new{background:rgba(34,158,217,.12);color:#229ED9}.prod-tag.used{background:var(--accent-bg);color:var(--accent)}.cta-band{background:var(--navy);border-radius:24px;padding:48px;display:flex;align-items:center;gap:20px;position:relative;overflow:hidden}[data-theme="dark"].cta-band{background:var(--card);border:1.5px solid var(--border)}.cta-band::before{content:'';position:absolute;top:-70px;right:-70px;width:260px;height:260px;background:var(--accent);opacity:.07;transform:rotate(45deg);border-radius:48px}.cta-text{flex:1;position:relative}.cta-text .display{font-size:clamp(24px,3vw,40px);color:white}[data-theme="dark"].cta-text .display{color:var(--text)}.cta-text .lead{color:rgba(255,255,255,.6);margin-top:8px}[data-theme="dark"].cta-text .lead{color:var(--text2)}.cta-actions{display:flex;gap:12px;flex-wrap:wrap;flex-shrink:0;position:relative}.footer{background:var(--navy);border-top:1px solid rgba(34,158,217,.25);padding:32px 32px 20px;transition:background.35s}[data-theme="dark"].footer{background:var(--bg2)}.footer-inner{max-width:var(--max-w);margin:0 auto}.footer-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr 1fr;gap:20px;padding-bottom:36px;border-bottom:1px solid rgba(255,255,255,.12)}[data-theme="dark"].footer-top{border-bottom-color:var(--border)}.footer-logo-text{font-family:'Inter',sans-serif;font-size:12px;font-weight:800;color:white;line-height:1.25}.footer-desc{font-size:13px;line-height:1.75;color:rgba(255,255,255,.55);margin:10px 0 18px}[data-theme="dark"].footer-desc{color:var(--text3)}.footer-messengers{display:flex;gap:8px}.footer-msg{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;transition:all.2s}.footer-msg.wa{background:rgba(37,211,102,.18);color:#25d366}.footer-msg.tg{background:rgba(34,158,217,.18);color:#229ED9}.footer-col h4{font-size:10px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:14px}[data-theme="dark"].footer-col h4{color:var(--text3)}.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:8px}.footer-col a{font-size:13px;color:rgba(255,255,255,.65);transition:color.15s}[data-theme="dark"].footer-col a{color:var(--text2)}.footer-col a:hover{color:var(--accent)}.footer-bottom{display:flex;justify-content:space-between;padding-top:18px;font-size:12px;color:rgba(255,255,255,.35)}[data-theme="dark"].footer-bottom{color:var(--text3)}.float-contacts{position:fixed;bottom:28px;right:28px;z-index:800;display:flex;flex-direction:column;gap:10px}.float-btn{width:50px;height:50px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow);transition:all.2s;text-decoration:none}.float-btn:hover{transform:scale(1.1)}.float-wa{background:#25d366}.float-tg{background:#229ED9}
@media(max-width:900px){.grid-3{grid-template-columns:1fr 1fr}.grid-2{grid-template-columns:1fr}.cta-band{flex-direction:column;text-align:center;padding:36px 24px}.cta-actions{justify-content:center}.footer-top{grid-template-columns:1fr 1fr;gap:24px}}@media(max-width:600px){.section{padding:48px 20px}.page-hero{padding:40px 20px 36px}.grid-3{grid-template-columns:1fr}.footer-top{grid-template-columns:1fr}div[style*="grid-template-columns:repeat(2,1fr)"]{grid-template-columns:1fr!important}}
.section{padding:80px 32px;max-width:var(--max-w);margin:0 auto}.section-hd{margin-bottom:44px}
.page-wrap{padding-top:var(--nav-h);min-height:100vh}
.btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;font-weight:800;border-radius:var(--radius);cursor:pointer;transition:all.2s;border:none;font-family:'Inter',sans-serif;white-space:nowrap;text-decoration:none}
.btn-lg{font-size:14px;padding:14px 28px}
.btn-md{font-size:13px;padding:11px 22px}
.btn-sm{font-size:12px;padding:8px 16px}
.btn-primary{background:var(--accent);color:#fff}
.btn-primary:hover{background:var(--accent-h);transform:translateY(-1px)}
.btn-green{background:#229ED9;color:white}
.btn-green:hover{background:#1a8cc7;transform:translateY(-1px)}
.btn-white{background:white;color:var(--accent);font-weight:800}
.btn-outline{background:transparent;color:var(--accent);border:2px solid var(--accent)}

/* ── UNIFIED PAGE HERO ── */
.page-hero{
  min-height:400px;
  background:#000;
  position:relative;
  overflow:hidden;
  display:flex;
  align-items:center;
  padding:calc(var(--nav-h) + 32px) 40px 32px;
}
[data-theme="dark"] .page-hero{background:#0a0d1a}
.page-hero-bg{
  position:absolute;inset:0;
  background:
    radial-gradient(ellipse 60% 80% at 100% 0%,rgba(30,136,229,.25) 0%,transparent 60%),
    radial-gradient(ellipse 40% 60% at 0% 100%,rgba(34,158,217,.18) 0%,transparent 55%);
  pointer-events:none;
}
.page-hero-grid{
  position:absolute;inset:0;
  background-image:linear-gradient(rgba(255,255,255,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.04) 1px,transparent 1px);
  background-size:48px 48px;
  pointer-events:none;
}
.page-hero-inner{
  max-width:var(--max-w);margin:0 auto;width:100%;
  position:relative;z-index:2;
  display:grid;grid-template-columns:1fr auto;gap:40px;align-items:center;
}
.page-hero-badge{
  display:inline-flex;align-items:center;gap:6px;
  padding:5px 14px;border-radius:20px;
  background:rgba(30,136,229,.2);border:1px solid rgba(30,136,229,.4);
  color:#60a5fa;font-size:11px;font-weight:700;
  letter-spacing:2px;text-transform:uppercase;margin-bottom:20px;
}
.page-hero-badge span{width:6px;height:6px;border-radius:50%;background:#60a5fa;animation:blink 1.8s ease-in-out infinite;flex-shrink:0}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}
.page-hero h1{
  font-family:'Inter',sans-serif;
  font-size:clamp(28px,4vw,52px);
  line-height:1.04;letter-spacing:-1.5px;
  color:white;margin-bottom:16px;
}
.page-hero h1 span{color:#60a5fa}
.page-hero-desc{
  font-size:14px;line-height:1.75;
  color:rgba(255,255,255,.7);
  max-width:520px;margin-bottom:24px;
}
.page-hero-btns{display:flex;gap:12px;flex-wrap:wrap}
.page-hero-stats{display:flex;flex-direction:column;gap:12px;flex-shrink:0}
.phstat{
  background:rgba(255,255,255,.07);
  border:1px solid rgba(255,255,255,.12);
  border-radius:16px;padding:20px 24px;
  text-align:center;min-width:150px;
  backdrop-filter:blur(10px);
}
.phstat-num{font-family:'Inter',sans-serif;font-size:28px;font-weight:800;color:white;line-height:1}
.phstat-num span{color:#60a5fa}
.phstat-label{font-size:11px;color:rgba(255,255,255,.5);margin-top:5px;font-weight:600}
@media(max-width:900px){
  .page-hero-inner{grid-template-columns:1fr}
  .page-hero-stats{flex-direction:row;flex-wrap:wrap;justify-content:flex-start}
  .phstat{min-width:120px;flex:1}
}
@media(max-width:600px){
  .page-hero{padding:calc(var(--nav-h) + 24px) 20px 24px;min-height:auto}
  .page-hero h1{font-size:clamp(24px,7vw,36px);letter-spacing:-1px}
  .page-hero-stats{display:none}
}

/* ── BURGER & MOBILE NAV ── */
.burger{display:none;align-items:center;justify-content:center;width:42px;height:42px;border-radius:10px;background:var(--card2);border:1.5px solid var(--border);cursor:pointer;flex-shrink:0;transition:all.2s;font-size:22px;color:var(--text);line-height:1}
.burger:hover{border-color:var(--accent)}
.burger.open{background:var(--accent-bg);border-color:var(--accent);color:var(--accent)}

.mobile-nav{
  display:none;
  position:fixed;
  top:var(--nav-h);
  left:0;right:0;
  background:var(--bg);
  border-bottom:2px solid var(--accent);
  z-index:999;
  padding:12px 16px 16px;
  flex-direction:column;
  gap:2px;
  box-shadow:0 12px 40px rgba(0,0,0,.18);
  max-height:calc(100vh -- var(--nav-h));
  overflow-y:auto;
}
.mobile-nav.open{display:flex}
.mobile-nav a{
  display:flex;align-items:center;
  padding:13px 16px;
  border-radius:10px;
  font-size:16px;font-weight:700;
  color:var(--text2);
  transition:all.18s;
  text-decoration:none;
}
.mobile-nav a:hover,.mobile-nav a.active{
  color:var(--accent);
  background:var(--accent-bg);
}
.mobile-nav-btns{
  display:flex;gap:10px;
  margin-top:10px;
  padding-top:12px;
  border-top:1px solid var(--border);
}
.mobile-nav-btns a{
  flex:1;text-align:center;
  padding:13px 10px;
  border-radius:10px;
  font-weight:800;font-size:14px;
  text-decoration:none;
  display:flex;align-items:center;justify-content:center;gap:6px;
}

/* ── DESKTOP: скрываем бургер ── */
@media(min-width:901px){
 .burger{display:none!important}
 .mobile-nav{display:none!important}
}

/* ── TABLET/MOBILE ≤900px ── */
@media(max-width:900px){
 .nav-links{display:none!important}
 .nav-phone-btn{display:none!important}
 .nav-tg-btn{display:none!important}
 .burger{display:flex!important}
 .why-grid{grid-template-columns:1fr 1fr}
 .cta-band{flex-direction:column;text-align:center;padding:32px 20px}
 .cta-actions{justify-content:center}
 .process-row{flex-direction:column;gap:20px}
 .process-row::before{display:none}
 .footer-top{grid-template-columns:1fr 1fr;gap:20px}
 .grid-3{grid-template-columns:1fr 1fr}
 .grid-2{grid-template-columns:1fr}
 .hero-inner{grid-template-columns:1fr!important}
 .hero-right{display:none!important}
 .services-grid{grid-template-columns:1fr}
 .page-hero-inner{flex-direction:column;gap:24px}
 .page-hero-stats{gap:20px}
 .models-grid{grid-template-columns:repeat(2,1fr)}
}

/* ── MOBILE ≤600px ── */
@media(max-width:600px){
 :root{--nav-h:64px}
 .nav-inner{padding:0 16px}
 .hero{padding:0 16px}
 .hero-h1{font-size:clamp(26px,8vw,44px)!important;margin-bottom:14px}
 .hero-desc{font-size:14px}
 
 
 
 
 .section{padding:40px 16px!important}
 .section-hd{margin-bottom:28px}
 .page-hero{padding:28px 16px 24px!important}
 .page-hero h1{font-size:clamp(22px,7vw,38px)!important;margin:12px 0 10px}
 .page-hero p{font-size:14px}
 .display{font-size:clamp(20px,5.5vw,34px)}
 .lead{font-size:14px}
 .why-grid{grid-template-columns:1fr}
 .grid-3{grid-template-columns:1fr}
 .models-grid{grid-template-columns:1fr}
 .btn-lg{font-size:13px;padding:12px 18px}
 
 .hero-btns.btn-lg{width:100%;justify-content:center}
 .cta-band{padding:24px 16px!important}
 .cta-text .display{font-size:clamp(20px,6vw,32px)}
 .cta-actions{flex-direction:column;gap:10px;width:100%}
 .cta-actions.btn-lg{width:100%;justify-content:center}
 .footer{padding:36px 16px 16px}
 .footer-top{grid-template-columns:1fr;gap:20px}
 .footer-bottom{flex-direction:column;gap:6px;font-size:11px}
 .float-contacts{bottom:14px;right:14px;gap:8px}
 .float-btn{width:46px;height:46px}
 
 .price-card{flex-direction:column;gap:6px}
 .price-val{font-size:16px}
 .srv-footer{flex-direction:column;gap:12px}
 .srv-tags{flex-wrap:wrap}
}

/* ── DARK THEME FIXES ── */
[data-theme="dark"].card{background:var(--card);border-color:var(--border)}
[data-theme="dark"].svc-box{background:var(--card)}
[data-theme="dark"].acc-item{background:var(--card)}
[data-theme="dark"].prod-card{background:var(--card)}
[data-theme="dark"].price-card{background:var(--card);border-color:var(--border)}
[data-theme="dark"].price-name{color:var(--text)}
[data-theme="dark"].price-desc{color:var(--text3)}
[data-theme="dark"].smart-tag{background:var(--card2);color:var(--text2);border-color:var(--border2)}
[data-theme="dark"].brand-tab{background:var(--card);border-color:var(--border)}
[data-theme="dark"].brand-tab-name{color:var(--text)}
[data-theme="dark"].req-form-card{background:var(--card)}
[data-theme="dark"].req-input{background:var(--card2);border-color:var(--border);color:var(--text)}
[data-theme="dark"].req-file-label{background:var(--card2);border-color:var(--border2)}
[data-theme="dark"].acc-head:hover{background:var(--accent-bg)}
[data-theme="dark"].services-row{background:var(--border)}
[data-theme="dark"].rstat{background:rgba(255,255,255,.05);border-color:rgba(255,255,255,.1)}
[data-theme="dark"] table.price-table tr{background:var(--card)}
[data-theme="dark"].mobile-nav{background:var(--bg)}

/* Dark theme text fixes */
[data-theme="dark"] .display{color:var(--text)}
[data-theme="dark"] .eyebrow{color:var(--text2)}
[data-theme="dark"] .lead{color:var(--text2)}
[data-theme="dark"] .page-hero h1{color:white}
[data-theme="dark"] .page-hero p{color:rgba(255,255,255,.7)}
[data-theme="dark"] .hero-btns .btn{color:white}
[data-theme="dark"] .section-title{color:var(--text)}
[data-theme="dark"] .section-desc{color:var(--text2)}
[data-theme="dark"] h2{color:var(--text)}
[data-theme="dark"] h3{color:var(--text)}
[data-theme="dark"] p{color:var(--text2)}


</style>
</div>
<div class="page-wrap">

  
  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-inner">
      <div>
        <div class="page-hero-badge"><span></span>Магазин оборудования · Санкт-Петербург</div>
        <h1>МАГАЗИН<br><span>ИБП, телефонии и ВКС</span></h1>
        <p class="page-hero-desc"><strong style="color:white">Новое и б/у оборудование с гарантией.</strong> Источники бесперебойного питания, IP-телефоны, оборудование для видеоконференцсвязи и сопутствующие товары. Каждый б/у аппарат прошёл диагностику в нашем сервисе. Подберём под ваши задачи, даже если нет на витрине. Работаем с юрлицами — счёт, договор, акты.</p>
        <div class="page-hero-btns">
          <a href="tel:+79046490909" class="btn btn-lg" style="background:white;color:var(--accent);font-weight:800">📞 Позвонить</a>
          <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background:white;color:var(--accent);font-weight:800"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg> Telegram</a>
          <button class="btn btn-lg" style="background:white;color:var(--accent);font-weight:800" onclick="toggleShopForm()">📋 Запрос на поставку</button>
        </div>
      </div>
      <div class="page-hero-stats">
      <div class="phstat">
        <div class="phstat-num">новое и б/у</div>
        <div class="phstat-label">с гарантией</div>
      </div>
      <div class="phstat">
        <div class="phstat-num">ИБП, ВКС</div>
        <div class="phstat-label">телефония</div>
      </div>
      <div class="phstat">
        <div class="phstat-num">опт и розница</div>
        <div class="phstat-label">для юрлиц — полный пакет</div>
      </div>
      </div>
    </div>
  </div>

  <!-- ФОРМА ЗАПРОСА НА ПОСТАВКУ (скрытая) -->
  <div id="shopFormWrap" style="display:none;background:var(--card2);border-bottom:1px solid var(--border)">
    <div style="max-width:var(--max-w);margin:0 auto;padding:40px 32px">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;align-items:start">
        <div>
          <div class="accent-bar"></div>
          <h2 class="display" style="font-size:clamp(20px,3vw,36px);margin-bottom:12px">ЗАПРОС НА ПОСТАВКУ</h2>
          <p style="font-size:14px;line-height:1.8;color:var(--text2);margin-bottom:20px">Не нашли нужную модель? Опишите что требуется - подберём и рассчитаем стоимость.</p>
          <div style="display:flex;flex-direction:column;gap:10px">
            <div style="display:flex;gap:10px;align-items:flex-start">
              <div style="width:28px;height:28px;border-radius:7px;background:var(--accent-bg);display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0">⚡</div>
              <div style="font-size:13px;color:var(--text2)">Ответим с расчётом стоимости в течение рабочего дня</div>
            </div>
            <div style="display:flex;gap:10px;align-items:flex-start">
              <div style="width:28px;height:28px;border-radius:7px;background:var(--accent-bg);display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0">📋</div>
              <div style="font-size:13px;color:var(--text2)">Для юрлиц - КП, счёт, договор, акты</div>
            </div>
          </div>
        </div>
        <div id="shopForm">
          <div style="background:var(--card);border:1.5px solid var(--border);border-radius:16px;padding:24px;display:flex;flex-direction:column;gap:14px">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
              <div style="display:flex;flex-direction:column;gap:5px">
                <label style="font-size:12px;font-weight:700;color:var(--text2)">ФИО *</label>
                <input class="req-input" id="sfName" type="text" placeholder="Иван Иванов">
              </div>
              <div style="display:flex;flex-direction:column;gap:5px">
                <label style="font-size:12px;font-weight:700;color:var(--text2)">Телефон *</label>
                <input class="req-input" id="sfPhone" type="tel" placeholder="+7 (___) ___-__-__">
              </div>
            </div>
            <div style="display:flex;flex-direction:column;gap:5px">
              <label style="font-size:12px;font-weight:700;color:var(--text2)">E-mail</label>
              <input class="req-input" id="sfEmail" type="email" placeholder="company@mail.ru">
            </div>
            <div style="display:flex;flex-direction:column;gap:5px">
              <label style="font-size:12px;font-weight:700;color:var(--text2)">Название компании</label>
              <input class="req-input" id="sfCompany" type="text" placeholder="ООО &quot;Компания&quot;">
            </div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
              <div style="display:flex;flex-direction:column;gap:5px">
                <label style="font-size:12px;font-weight:700;color:var(--text2)">Наименование оборудования *</label>
                <input class="req-input" id="sfGoods" type="text" placeholder="APC Smart-UPS 1500">
              </div>
              <div style="display:flex;flex-direction:column;gap:5px">
                <label style="font-size:12px;font-weight:700;color:var(--text2)">Количество</label>
                <input class="req-input" id="sfQty" type="text" placeholder="1 шт.">
              </div>
            </div>
            <div style="display:flex;flex-direction:column;gap:5px">
              <label style="font-size:12px;font-weight:700;color:var(--text2)">Желаемый срок поставки</label>
              <input class="req-input" id="sfDeadline" type="text" placeholder="Например: в течение 2 недель">
            </div>
            <div style="display:flex;flex-direction:column;gap:5px">
              <label style="font-size:12px;font-weight:700;color:var(--text2)">Дополнительная информация</label>
              <textarea class="req-input req-textarea" id="sfDesc" style="min-height:70px" placeholder="Технические требования, особые условия..."></textarea>
            </div>
            <div style="display:flex;flex-direction:column;gap:5px">
              <label style="font-size:12px;font-weight:700;color:var(--text2)">Прикрепить фото (необязательно)</label>
              <label class="req-file-label" id="sfFileLabel">
                <input type="file" id="sfFile" accept="image/*" style="display:none" onchange="handleShopFile(this)">
                <span>📷</span>
                <span id="sfFileText" style="font-size:13px;color:var(--text3);font-weight:600">Выбрать фото (только изображения)</span>
              </label>
            </div>
            <div style="font-size:11.5px;color:var(--text3)">* - обязательные поля</div>
            <button class="btn btn-lg" style="background:var(--accent);color:white" style="width:100%;justify-content:center" onclick="submitShopForm()">Отправить запрос →</button>
          </div>
        </div>
        <div id="shopSuccess" style="display:none;background:var(--card);border:1.5px solid var(--border);border-radius:16px;padding:40px 24px;text-align:center">
          <div style="font-size:48px;margin-bottom:12px">✅</div>
          <h3 style="font-family:'Inter',sans-serif;font-size:18px;margin-bottom:10px;color:var(--text)">Запрос отправлен!</h3>
          <p style="color:var(--text2);font-size:13.5px;line-height:1.7">Получили ваш запрос на поставку. Ответим с расчётом стоимости в течение рабочего дня.</p>
        </div>
      </div>
    </div>
  </div>

<section class="section">
    <div class="section-hd"><div class="accent-bar"></div><p class="eyebrow">В наличии</p><h2 class="display" style="font-size:clamp(22px,3vw,42px);margin-bottom:12px">СИЛОВЫЕ МОДУЛИ И ИБП</h2><p class="lead" style="font-size:15px">Оригинальные комплектующие APC Symmetra. Новые, в заводской упаковке. Доставка по России.</p></div>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px">

      <!-- SYPM10KH -->
      <div class="prod-card" style="display:flex;flex-direction:column">
        <div class="prod-img" style="height:220px;background:var(--card2);position:relative">
          <div style="width:100%;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;background:linear-gradient(135deg,#1a1a2e 0%,#16213e 50%,#0f3460 100%);padding:20px">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#229ED9" stroke-width="1.5"><rect x="3" y="6" width="18" height="14" rx="2"/><path d="M7 6V4a1 1 0 011-1h8a1 1 0 011 1v2"/><line x1="12" y1="10" x2="12" y2="16"/><line x1="9" y1="13" x2="15" y2="13"/></svg>
            <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:#229ED9;margin-top:12px;letter-spacing:1px">SYPM10KH</div>
            <div style="font-size:11px;color:rgba(255,255,255,.5);margin-top:4px">Symmetra PX 10kW</div>
          </div>
          <span style="position:absolute;top:12px;left:12px;background:#229ED9;color:white;font-size:11px;font-weight:800;padding:4px 12px;border-radius:8px">В НАЛИЧИИ</span>
        </div>
        <div class="prod-body" style="flex:1;display:flex;flex-direction:column">
          <span class="prod-tag new">новый, заводская упаковка</span>
          <div class="prod-brand">APC</div>
          <div class="prod-name" style="font-size:18px;margin-bottom:12px">Силовой модуль SYPM10KH</div>
          <div class="prod-desc" style="flex:1">Силовой модуль Symmetra PX мощностью 10 кВт / 10 кВА, 400В. Форм-фактор 4U, с возможностью горячей замены без отключения нагрузки. Предназначен для ИБП Symmetra PX 40-80 кВА. Рабочая температура 0-40°C, входная частота 50/60 Гц.</div>
          <div style="display:flex;align-items:center;justify-content:space-between;margin-top:16px;padding-top:16px;border-top:1px solid var(--border)">
            <div class="prod-price" style="font-size:22px">180 000 ₽</div>
            <a href="tel:+79046490909" class="btn btn-md" style="background:var(--accent);color:white">Заказать</a>
          </div>
        </div>
      </div>

      <!-- SYPM10K16H -->
      <div class="prod-card" style="display:flex;flex-direction:column">
        <div class="prod-img" style="height:220px;background:var(--card2);position:relative">
          <div style="width:100%;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;background:linear-gradient(135deg,#1a1a2e 0%,#16213e 50%,#0f3460 100%);padding:20px">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#229ED9" stroke-width="1.5"><rect x="3" y="6" width="18" height="14" rx="2"/><path d="M7 6V4a1 1 0 011-1h8a1 1 0 011 1v2"/><line x1="12" y1="10" x2="12" y2="16"/><line x1="9" y1="13" x2="15" y2="13"/></svg>
            <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:#229ED9;margin-top:12px;letter-spacing:1px">SYPM10K16H</div>
            <div style="font-size:11px;color:rgba(255,255,255,.5);margin-top:4px">Symmetra PX 10/16kW</div>
          </div>
          <span style="position:absolute;top:12px;left:12px;background:#229ED9;color:white;font-size:11px;font-weight:800;padding:4px 12px;border-radius:8px">В НАЛИЧИИ</span>
        </div>
        <div class="prod-body" style="flex:1;display:flex;flex-direction:column">
          <span class="prod-tag new">новый, заводская упаковка</span>
          <div class="prod-brand">Schneider Electric</div>
          <div class="prod-name" style="font-size:18px;margin-bottom:12px">Силовой модуль SYPM10K16H</div>
          <div class="prod-desc" style="flex:1">Силовой модуль APC Symmetra PX мощностью 10/16 кВт, 400В. Высокоэффективный модуль с горячей заменой для масштабируемых ИБП Symmetra PX. Обеспечивает резервное электроснабжение и защиту от аномалий электросети. Компактный форм-фактор для установки в стойку.</div>
          <div style="display:flex;align-items:center;justify-content:space-between;margin-top:16px;padding-top:16px;border-top:1px solid var(--border)">
            <div class="prod-price" style="font-size:22px">800 000 ₽</div>
            <a href="tel:+79046490909" class="btn btn-md" style="background:var(--accent);color:white">Заказать</a>
          </div>
        </div>
      </div>

      <!-- SYPM4KI -->
      <div class="prod-card" style="display:flex;flex-direction:column">
        <div class="prod-img" style="height:220px;background:var(--card2);position:relative">
          <div style="width:100%;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;background:linear-gradient(135deg,#0f3460 0%,#16213e 50%,#1a1a2e 100%);padding:20px">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#229ED9" stroke-width="1.5"><rect x="3" y="6" width="18" height="14" rx="2"/><path d="M7 6V4a1 1 0 011-1h8a1 1 0 011 1v2"/><line x1="12" y1="10" x2="12" y2="16"/><line x1="9" y1="13" x2="15" y2="13"/></svg>
            <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:#229ED9;margin-top:12px;letter-spacing:1px">SYPM4KI</div>
            <div style="font-size:11px;color:rgba(255,255,255,.5);margin-top:4px">Symmetra LX 4kVA</div>
          </div>
          <span style="position:absolute;top:12px;left:12px;background:#229ED9;color:white;font-size:11px;font-weight:800;padding:4px 12px;border-radius:8px">В НАЛИЧИИ</span>
        </div>
        <div class="prod-body" style="flex:1;display:flex;flex-direction:column">
          <span class="prod-tag new">новый, заводская упаковка</span>
          <div class="prod-brand">APC by Schneider Electric</div>
          <div class="prod-name" style="font-size:18px;margin-bottom:12px">Силовой модуль SYPM4KI</div>
          <div class="prod-desc" style="flex:1">Силовой модуль APC Symmetra LX мощностью 2800 Вт / 4 кВА, 220-240В. Форм-фактор 4U, масса 17 кг. Предназначен для ИБП Symmetra LX. Поддерживает горячую замену для непрерывной работы критически важного оборудования.</div>
          <div style="display:flex;align-items:center;justify-content:space-between;margin-top:16px;padding-top:16px;border-top:1px solid var(--border)">
            <div class="prod-price" style="font-size:22px">280 000 ₽</div>
            <a href="tel:+79046490909" class="btn btn-md" style="background:var(--accent);color:white">Заказать</a>
          </div>
        </div>
      </div>

      <!-- SYAF16KRMI -->
      <div class="prod-card" style="display:flex;flex-direction:column">
        <div class="prod-img" style="height:220px;background:var(--card2);position:relative">
          <div style="width:100%;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;background:linear-gradient(135deg,#1a1a2e 0%,#0f3460 50%,#16213e 100%);padding:20px">
            <svg width="60" height="80" viewBox="0 0 24 32" fill="none" stroke="#229ED9" stroke-width="1.5"><rect x="2" y="2" width="20" height="28" rx="2"/><rect x="5" y="5" width="14" height="3" rx="1" fill="#229ED9" opacity=".3"/><rect x="5" y="10" width="14" height="3" rx="1" fill="#229ED9" opacity=".2"/><rect x="5" y="15" width="14" height="3" rx="1" fill="#229ED9" opacity=".15"/><circle cx="12" cy="25" r="2" fill="#229ED9" opacity=".4"/></svg>
            <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:#229ED9;margin-top:12px;letter-spacing:1px">SYAF16KRMI</div>
            <div style="font-size:11px;color:rgba(255,255,255,.5);margin-top:4px">Symmetra LX 16kVA Frame</div>
          </div>
          <span style="position:absolute;top:12px;left:12px;background:#229ED9;color:white;font-size:11px;font-weight:800;padding:4px 12px;border-radius:8px">В НАЛИЧИИ</span>
        </div>
        <div class="prod-body" style="flex:1;display:flex;flex-direction:column">
          <span class="prod-tag new">новый, заводская упаковка</span>
          <div class="prod-brand">APC by Schneider Electric</div>
          <div class="prod-name" style="font-size:18px;margin-bottom:12px">Фрейм ИБП SYAF16KRMI</div>
          <div class="prod-desc" style="flex:1">APC Symmetra LX 16 кВА N+1, корпус для монтажа в стойку 19U. Поддержка входного напряжения 220/230/240В или 380/400/415В. Двойное преобразование, модульная архитектура N+1. До 5 слотов силовых модулей и 4 слота батарей. Web/SNMP управление.</div>
          <div style="display:flex;align-items:center;justify-content:space-between;margin-top:16px;padding-top:16px;border-top:1px solid var(--border)">
            <div class="prod-price" style="font-size:22px">220 000 ₽</div>
            <a href="tel:+79046490909" class="btn btn-md" style="background:var(--accent);color:white">Заказать</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="divider"></div>

  <!-- DECT-ТЕЛЕФОНИЯ -->
  <section class="section">
    <div class="section-hd"><div class="accent-bar"></div><p class="eyebrow">DECT-телефония</p><h2 class="display" style="font-size:clamp(22px,3vw,42px);margin-bottom:12px">ОБОРУДОВАНИЕ SPECTRALINK IP-DECT</h2><p class="lead" style="font-size:15px">Профессиональные решения для корпоративной беспроводной DECT-телефонии. Новое и б/у оборудование в наличии на складе в Санкт-Петербурге.</p></div>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px">

      <!-- Spectralink IP-DECT Base Station -->
      <div class="prod-card" style="display:flex;flex-direction:column">
        <div class="prod-img" style="height:220px;background:var(--card2);position:relative">
          <div style="width:100%;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;background:linear-gradient(135deg,#1a1a2e 0%,#16213e 50%,#0f3460 100%);padding:20px">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#229ED9" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M16.24 7.76a6 6 0 010 8.49M7.76 16.24a6 6 0 010-8.49"/><path d="M19.07 4.93a10 10 0 010 14.14M4.93 19.07a10 10 0 010-14.14"/></svg>
            <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:#229ED9;margin-top:12px;letter-spacing:1px">02337400</div>
            <div style="font-size:11px;color:rgba(255,255,255,.5);margin-top:4px">IP-DECT Base Station</div>
          </div>
          <span style="position:absolute;top:12px;left:12px;background:#229ED9;color:white;font-size:11px;font-weight:800;padding:4px 12px;border-radius:8px">В НАЛИЧИИ</span>
        </div>
        <div class="prod-body" style="flex:1;display:flex;flex-direction:column">
          <span class="prod-tag new">новая, заводская упаковка</span>
          <div class="prod-brand">Spectralink</div>
          <div class="prod-name" style="font-size:18px;margin-bottom:12px">IP-DECT базовая станция (02337400)</div>
          <div class="prod-desc" style="flex:1">Базовая станция Spectralink IP-DECT обеспечивает связь между беспроводными DECT-трубками и серверами Spectralink. Поддерживает до 12 одновременных разговоров (32 Кбит/с). Зона покрытия 20–300 м в диаметре. Питание через PoE (IEEE 802.3af) или внешний блок. Ethernet 10/100 Мбит/с. Настенное крепление, возможность подключения внешней антенны. Совместима со всеми серверами Spectralink: IP-DECT Server 400, 6500, Virtual IP-DECT Server One и DECT 8000.</div>
          <div style="margin-top:10px;font-size:12px;color:var(--text3);line-height:1.6"><strong style="color:var(--text2)">На складе:</strong> 15 шт.</div>
          <div style="display:flex;align-items:center;justify-content:space-between;margin-top:16px;padding-top:16px;border-top:1px solid var(--border)">
            <div class="prod-price" style="font-size:22px">60 000 ₽</div>
            <a href="tel:+79046490909" class="btn btn-md" style="background:var(--accent);color:white">Заказать</a>
          </div>
        </div>
      </div>

      <!-- IP-DECT Server 6500 -->
      <div class="prod-card" style="display:flex;flex-direction:column">
        <div class="prod-img" style="height:220px;background:var(--card2);position:relative">
          <div style="width:100%;height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;background:linear-gradient(135deg,#0f3460 0%,#16213e 50%,#1a1a2e 100%);padding:20px">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#229ED9" stroke-width="1.5"><rect x="2" y="3" width="20" height="18" rx="2"/><line x1="6" y1="8" x2="18" y2="8"/><line x1="6" y1="12" x2="18" y2="12"/><circle cx="7" cy="16" r="1" fill="#229ED9"/><circle cx="11" cy="16" r="1" fill="#229ED9" opacity=".5"/></svg>
            <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:#229ED9;margin-top:12px;letter-spacing:1px">SERVER 6500</div>
            <div style="font-size:11px;color:rgba(255,255,255,.5);margin-top:4px">IP-DECT Controller</div>
          </div>
          <span style="position:absolute;top:12px;left:12px;background:#229ED9;color:white;font-size:11px;font-weight:800;padding:4px 12px;border-radius:8px">В НАЛИЧИИ</span>
        </div>
        <div class="prod-body" style="flex:1;display:flex;flex-direction:column">
          <span class="prod-tag used">б/у (used)</span>
          <div class="prod-brand">Spectralink</div>
          <div class="prod-name" style="font-size:18px;margin-bottom:12px">Контроллер IP-DECT Server 6500</div>
          <div class="prod-desc" style="flex:1">Контроллер системы IP-DECT Server 6500 обеспечивает интеграцию с IP-АТС по SIP-протоколу и управление базовыми станциями и трубками DECT. До 32 VoIP-каналов (G.711), до 256 базовых станций и 4096 абонентов. Ethernet 100BaseT, два слота для карт медиаресурсов. Исполнение 1U 19", встроенный блок питания 220В. Совместим с Asterisk, Cisco CUCM, Broadsoft, MS Lync и др. В наличии серверы с лицензиями и без — уточняйте при заказе.</div>
          <div style="margin-top:10px;font-size:12px;color:var(--text3);line-height:1.6"><strong style="color:var(--text2)">На складе:</strong> 5 шт. Есть варианты с лицензиями и без лицензий.</div>
          <div style="display:flex;align-items:center;justify-content:space-between;margin-top:16px;padding-top:16px;border-top:1px solid var(--border)">
            <div class="prod-price" style="font-size:22px">160 000 ₽</div>
            <a href="tel:+79046490909" class="btn btn-md" style="background:var(--accent);color:white">Заказать</a>
          </div>
        </div>
      </div>

    </div>
    <div style="margin-top:20px;background:var(--accent-bg);border:1.5px solid var(--accent-bd);border-radius:14px;padding:18px 24px;font-size:13.5px;color:var(--text2);line-height:1.7">
      📡 <strong>DECT-телефония:</strong> также подберём трубки, репитеры, лицензии и другие компоненты системы Spectralink. Помогаем с настройкой и интеграцией с вашей IP-АТС. <em style="color:var(--text3)">Раздел дополняется.</em>
    </div>
  </section>

  <div class="divider"></div>

  <section class="section">
    <div class="section-hd"><div class="accent-bar"></div><p class="eyebrow">Наши преимущества</p><h2 class="display" style="font-size:clamp(22px,3vw,42px);margin-bottom:12px">ПОЧЕМУ ПОКУПАЮТ У НАС</h2></div>
    <div class="grid-3">
      <div class="card"><div class="card-ico">🛡️</div><div class="card-title">Расширенная гарантия на б/у</div><div class="card-text">Каждый б/у ИБП проходит полную диагностику. Гарантия от 6 месяцев - как на новый.</div></div>
      <div class="card"><div class="card-ico">🔍</div><div class="card-title">Бесплатный подбор</div><div class="card-text">Расскажите задачу - подберём оптимальный ИБП по мощности, форм-фактору и бюджету.</div></div>
      <div class="card"><div class="card-ico">🚐</div><div class="card-title">Доставка по СПб</div><div class="card-text">Доставляем и устанавливаем по Санкт-Петербургу. Отправляем по всей России.</div></div>
    </div>
  </section>

  <div class="divider"></div>

  <section class="section">
    <div class="section-hd">
      <div class="accent-bar"></div>
      <p class="eyebrow">Аренда</p>
      <h2 class="display" style="font-size:clamp(22px,3vw,42px);margin-bottom:12px">АРЕНДА ИБП</h2>
      <p class="lead" style="font-size:15px">Оптимальное решение для временных объектов, мероприятий или подменного фонда на время ремонта.</p>
    </div>
    <div class="grid-3">
      <div class="card">
        <div class="card-ico">⚡</div>
        <div class="card-title">До 5 кВА - от 5 000 ₽/мес</div>
        <div class="card-text">Офисные и серверные ИБП для рабочих станций, небольших серверных. APC, Eaton, CyberPower.</div>
      </div>
      <div class="card">
        <div class="card-ico">🔋</div>
        <div class="card-title">5–15 кВА - от 12 000 ₽/мес</div>
        <div class="card-text">ИБП для серверных стоек, телекоммуникационного оборудования, ЦОД среднего размера.</div>
      </div>
      <div class="card">
        <div class="card-ico">🏭</div>
        <div class="card-title">15–20 кВА и выше - по запросу</div>
        <div class="card-text">Промышленные и трёхфазные ИБП. Индивидуальные условия, доставка и подключение включены.</div>
      </div>
    </div>
    <div style="margin-top:20px;background:var(--accent-bg);border:1.5px solid var(--accent-bd);border-radius:14px;padding:18px 24px;font-size:13.5px;color:var(--text2);line-height:1.7">
      📋 <strong>Условия аренды:</strong> доставка и подключение по Санкт-Петербургу, договор, счёт, акты. Минимальный срок аренды - 1 месяц. Подменный ИБП на время ремонта вашего - по отдельному соглашению.
    </div>
  </section>



  <div class="divider"></div>
  <div style="max-width:var(--max-w);margin:0 auto;padding:56px 32px 80px"><div class="cta-band"><div class="cta-text"><h2 class="display">НУЖЕН ИБП?</h2><p class="lead">Уточните наличие и цену - звоните или пишите в Telegram. Подберём под ваши задачи.</p></div><div class="cta-actions"><a href="tel:+79046490909" class="btn btn-lg" style="background:var(--accent);color:white">📞 Позвонить</a><a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background:#229ED9;color:white"><svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg> Telegram</a></div></div></div>
</div>





<script>
function toggleShopForm(){
  var w=document.getElementById('shopFormWrap');
  w.style.display=w.style.display==='none'?'block':'none';
  if(w.style.display==='block')w.scrollIntoView({behavior:'smooth',block:'start'});
}
function handleShopFile(input){
  if(input.files&&input.files[0]){
    document.getElementById('sfFileText').textContent=input.files[0].name;
    document.getElementById('sfFileLabel').style.borderColor='var(--accent)';
  }
}
function submitShopForm(){
  var name=document.getElementById('sfName');
  var phone=document.getElementById('sfPhone');
  var goods=document.getElementById('sfGoods');
  var valid=true;
  [name,phone,goods].forEach(function(f){f.classList.remove('error');if(!f.value.trim()){f.classList.add('error');valid=false;}});
  if(!valid){return;}
  var fd=new FormData();
  fd.append('name',name.value.trim());
  fd.append('phone',phone.value.trim());
  fd.append('email',document.getElementById('sfEmail').value.trim());
  fd.append('company',document.getElementById('sfCompany').value.trim());
  fd.append('goods',goods.value.trim());
  fd.append('qty',document.getElementById('sfQty').value.trim());
  fd.append('deadline',document.getElementById('sfDeadline').value.trim());
  fd.append('desc',document.getElementById('sfDesc').value.trim());
  var file=document.getElementById('sfFile');
  if(file.files&&file.files[0])fd.append('file',file.files[0]);
  // Send to mail.php
  fetch('mail_shop.php',{method:'POST',body:fd})
   .then(function(r){return r.json()})
   .then(function(d){
      document.getElementById('shopForm').style.display='none';
      document.getElementById('shopSuccess').style.display='block';
    })
   .catch(function(){
      // Show success anyway for now
      document.getElementById('shopForm').style.display='none';
      document.getElementById('shopSuccess').style.display='block';
    });
}
</script>
<?php get_footer(); ?>
