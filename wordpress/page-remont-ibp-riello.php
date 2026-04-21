<?php
/**
 * АТС ТЕЛЕКОМ — page-remont-ibp-riello.php
 * Template Name: Ремонт Riello
 */
/*
 * Template Name: Ремонт Riello
 */
?>
<?php get_header(); ?>
<style>
:root{--bg:#f8f7f3;--bg2:#fff;--card:#fff;--card2:#f0ede6;--border:#e5e1d8;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#1565C0;--mag-bg:rgba(34,158,217,.08);--mag-bd:rgba(34,158,217,.24);--navy:#252525;--green:#1565C0;--text:#1c2030;--text2:#4a5568;--text3:#8a93a8;--shadow-sm:0 2px 8px rgba(45,55,72,.07);--shadow:0 4px 24px rgba(45,55,72,.10);--radius:12px;--nav-h:72px;--max-w:1240px;color-scheme:light}[data-theme="dark"]{--bg:#121212;--bg2:#1a1a1a;--card:#202020;--card2:#282828;--border:#303030;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#42A5F5;--mag-bg:rgba(34,158,217,.12);--navy:#b8b8c8;--green:#42A5F5;--text:#e8e8f2;--text2:#9e9eb0;--text3:#6b6b7a;--shadow-sm:0 2px 8px rgba(0,0,0,.30);--shadow:0 4px 24px rgba(0,0,0,.45);color-scheme:dark}*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth}body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--text);padding-top:var(--nav-h);overflow-x:hidden;-webkit-font-smoothing:antialiased;transition:background.35s,color.35s}a{color:inherit;text-decoration:none}.nav{position:fixed;top:0;left:0;right:0;z-index:1000;height:var(--nav-h);background:rgba(248,247,243,.92);backdrop-filter:blur(24px) saturate(160%);-webkit-backdrop-filter:blur(24px);border-bottom:1px solid var(--border);transition:background .4s}
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


.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}.grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:20px}.card{background:var(--card);border:1.5px solid var(--border);border-radius:16px;padding:24px;transition:all.25s;position:relative;overflow:hidden}.card::before{content:"";position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--accent),var(--mag));opacity:0;transition:.3s}.card:hover{transform:translateY(-4px);box-shadow:var(--shadow);border-color:var(--accent)}.card:hover::before{opacity:1}.card-ico{font-size:28px;margin-bottom:12px}.card-title{font-size:14px;font-weight:800;color:var(--text);margin-bottom:8px}.card-text{font-size:13px;color:var(--text3);line-height:1.7}.cta-band{background:var(--navy);border-radius:24px;padding:48px;display:flex;align-items:center;gap:20px;position:relative;overflow:hidden}[data-theme="dark"].cta-band{background:var(--card);border:1.5px solid var(--border)}.cta-band::before{content:"";position:absolute;top:-70px;right:-70px;width:260px;height:260px;background:var(--accent);opacity:.07;transform:rotate(45deg);border-radius:48px}.cta-text{flex:1;position:relative}.cta-text .display{font-size:clamp(24px,3vw,40px);color:white}[data-theme="dark"].cta-text .display{color:var(--text)}.cta-text .lead{color:rgba(255,255,255,.6);margin-top:8px}[data-theme="dark"].cta-text .lead{color:var(--text2)}.cta-actions{display:flex;gap:12px;flex-wrap:wrap;flex-shrink:0;position:relative}.footer{background:var(--navy);border-top:1px solid rgba(34,158,217,.25);padding:32px 32px 20px;transition:background.35s}[data-theme="dark"].footer{background:var(--bg2)}.footer-inner{max-width:var(--max-w);margin:0 auto}.footer-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr 1fr;gap:20px;padding-bottom:36px;border-bottom:1px solid rgba(255,255,255,.12)}[data-theme="dark"].footer-top{border-bottom-color:var(--border)}.footer-logo-text{font-family:'Inter',sans-serif;font-size:12px;font-weight:800;color:white;line-height:1.25}.footer-desc{font-size:13px;line-height:1.75;color:rgba(255,255,255,.55);margin:10px 0 18px}[data-theme="dark"].footer-desc{color:var(--text3)}.footer-messengers{display:flex;gap:8px}.footer-msg{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;transition:all.2s}.footer-msg.wa{background:rgba(37,211,102,.18);color:#25d366}.footer-msg.tg{background:rgba(34,158,217,.18);color:#229ED9}.footer-col h4{font-size:10px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:14px}[data-theme="dark"].footer-col h4{color:var(--text3)}.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:8px}.footer-col a{font-size:13px;color:rgba(255,255,255,.65);transition:color.15s}[data-theme="dark"].footer-col a{color:var(--text2)}.footer-col a:hover{color:var(--accent)}.footer-bottom{display:flex;justify-content:space-between;padding-top:18px;font-size:12px;color:rgba(255,255,255,.35)}[data-theme="dark"].footer-bottom{color:var(--text3)}.float-contacts{position:fixed;bottom:28px;right:28px;z-index:800;display:flex;flex-direction:column;gap:10px}.float-btn{width:50px;height:50px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow);transition:all.2s;text-decoration:none}.float-btn:hover{transform:scale(1.1)}.float-wa{background:#25d366}.float-tg{background:#229ED9}@media(max-width:900px){.grid-3{grid-template-columns:1fr 1fr}.grid-2{grid-template-columns:1fr}.cta-band{flex-direction:column;text-align:center;padding:36px 24px}.cta-actions{justify-content:center}.footer-top{grid-template-columns:1fr 1fr;gap:24px}}@media(max-width:600px){.section{padding:48px 20px}.page-hero{padding:40px 20px 36px}.grid-3{grid-template-columns:1fr}.footer-top{grid-template-columns:1fr}}
.section{padding:80px 32px;max-width:var(--max-w);margin:0 auto}.section-hd{margin-bottom:44px}
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
[data-theme="dark"] h2{color:var(--text)}
[data-theme="dark"] h3{color:var(--text)}
[data-theme="dark"] p{color:var(--text2)}
[data-theme="dark"] .section-title{color:var(--text)}
[data-theme="dark"] .section-desc{color:var(--text2)}


</style>
</div>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-inner">
      <div>
        <div class="page-hero-badge"><span></span>Ремонт · Riello</div>
        <h1>РЕМОНТ<br><span>источников бесперебойного питания Riello</span></h1>
        <p class="page-hero-desc">Компонентный ремонт источников бесперебойного питания Riello всех серий. Сертифицированные инженеры, нагрузочное тестирование после ремонта, официальные документы для бухгалтерии.</p>
        <div class="page-hero-btns">
          <a href="tel:+79046490909" class="btn btn-lg" style="background:white;color:var(--accent);font-weight:800">📞 Позвонить</a>
          <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background:white;color:var(--accent);font-weight:800"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg> Telegram</a>
        </div>
      </div>
      <div class="page-hero-stats">
      <div class="phstat">
        <div class="phstat-num">от <span>3</span> <span>000</span> ₽</div>
        <div class="phstat-label">стоимость ремонта</div>
      </div>
      <div class="phstat">
        <div class="phstat-num"><span>≤</span> <span>2</span> дня</div>
        <div class="phstat-label">диагностика</div>
      </div>
      <div class="phstat">
        <div class="phstat-num"><span>3</span> мес</div>
        <div class="phstat-label">гарантия</div>
      </div>
      </div>
    </div>
  </div>

<section class="section">
  <div class="section-hd">
    <div class="accent-bar"></div>
    <p class="eyebrow">Ремонтируем модели</p>
    <h2 class="display" style="font-size:clamp(22px,3vw,42px);margin-bottom:12px">СЕРИИ RIELLO</h2>
    <p class="lead" style="font-size:15px;max-width:640px">Ремонтируем все серии Riello - от офисных однофазных до промышленных трёхфазных систем. Диагностика бесплатно при ремонте.</p>
  </div>
  <div class="grid-3"><div class="card"><div class="card-ico">🔋</div><div class="card-title">Riello Dialog (600–2000 ВА)</div><div class="card-text">Линейно-интерактивный ИБП для офиса. Ремонт AVR-стабилизатора, замена АКБ, контроллера.</div></div><div class="card"><div class="card-ico">🔋</div><div class="card-title">Riello iDialog (800–3300 ВА)</div><div class="card-text">Улучшенная версия Dialog с USB и LCD. Ремонт платы управления, инвертора, зарядного.</div></div><div class="card"><div class="card-ico">🔋</div><div class="card-title">Riello Sentinel Dual (800–10 кВА)</div><div class="card-text">Онлайн ИБП двойного преобразования. Ремонт силовых IGBT, трансформатора, платы управления.</div></div><div class="card"><div class="card-ico">🔋</div><div class="card-title">Riello SDH / MPT (1–30 кВА)</div><div class="card-text">Трёхфазные онлайн ИБП для промышленности. Ремонт силовых модулей, системы управления.</div></div><div class="card"><div class="card-ico">🔋</div><div class="card-title">Riello Multi Sentry (10–800 кВА)</div><div class="card-text">Промышленные модульные системы. Ремонт и замена силовых модулей, контроллеров.</div></div><div class="card"><div class="card-ico">🔋</div><div class="card-title">Riello NetPower / Master HP</div><div class="card-text">Серверные и промышленные серии. Ремонт инвертора, зарядного устройства, шин связи.</div></div></div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="grid-2">
    <div>
      <div class="accent-bar"></div>
      <p class="eyebrow">Типовые неисправности</p>
      <h2 class="display" style="font-size:clamp(22px,3vw,38px);margin-bottom:20px">ЧТО МЫ ЧИНИМ</h2>
      <div style="display:flex;gap:16px;padding:16px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:12px;align-items:flex-start">
          <div style="font-size:24px;flex-shrink:0">⚡</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Выход из строя IGBT и диодных мостов</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">Типично для Sentinel Dual и MDT при перегрузках. Проявляется как аварийное отключение, ошибка инвертора. Требует замены силовых ключей.</div>
            <div style="font-size:12px;color:var(--accent);font-weight:700;margin-top:6px">→ Ремонт от 9 000 ₽</div>
          </div>
        </div><div style="display:flex;gap:16px;padding:16px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:12px;align-items:flex-start">
          <div style="font-size:24px;flex-shrink:0">🔋</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Неисправность аккумуляторных батарей</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">Сигнал замены АКБ, короткое время автономии. Riello использует стандартные VRLA/AGM батареи - есть на нашем складе.</div>
            <div style="font-size:12px;color:var(--accent);font-weight:700;margin-top:6px">→ Замена АКБ от 3 000 ₽</div>
          </div>
        </div><div style="display:flex;gap:16px;padding:16px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:12px;align-items:flex-start">
          <div style="font-size:24px;flex-shrink:0">🌡️</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Сбои платы управления и EEPROM</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">ИБП не стартует, зависает на инициализации, ошибки на дисплее. Перепрошивка или замена контроллера.</div>
            <div style="font-size:12px;color:var(--accent);font-weight:700;margin-top:6px">→ Ремонт от 5 000 ₽</div>
          </div>
        </div><div style="display:flex;gap:16px;padding:16px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:12px;align-items:flex-start">
          <div style="font-size:24px;flex-shrink:0">⚡</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Износ вентиляторов охлаждения</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">Riello склонен к перегреву при изношенных вентиляторах - особенно промышленные серии в пыльных помещениях. Замена вентиляторов быстро решает проблему.</div>
            <div style="font-size:12px;color:var(--accent);font-weight:700;margin-top:6px">→ Замена вентиляторов от 2 500 ₽</div>
          </div>
        </div><div style="display:flex;gap:16px;padding:16px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:12px;align-items:flex-start">
          <div style="font-size:24px;flex-shrink:0">🔋</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Деградация конденсаторов</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">В Riello старше 6–8 лет - нестабильная работа, ложные аварии, самоперезагрузка. Профилактическая замена конденсаторов.</div>
            <div style="font-size:12px;color:var(--accent);font-weight:700;margin-top:6px">→ Профилактика от 4 500 ₽</div>
          </div>
        </div>
    </div>
    <div>
      <div class="accent-bar"></div>
      <p class="eyebrow">Как проходит ремонт</p>
      <h2 class="display" style="font-size:clamp(22px,3vw,38px);margin-bottom:20px">ПРОЦЕСС</h2>
      <div style="display:flex;align-items:flex-start;gap:16px;padding:18px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:10px">
          <div style="width:36px;height:36px;border-radius:50%;background:var(--accent);color:#fff;font-family:'Inter',sans-serif;font-size:16px;font-weight:800;display:flex;align-items:center;justify-content:center;flex-shrink:0">1</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Приём и первичный осмотр</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">Принимаем ИБП в офисе или организуем вывоз. Для промышленных систем - выезд инженера на объект.</div>
          </div>
        </div><div style="display:flex;align-items:flex-start;gap:16px;padding:18px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:10px">
          <div style="width:36px;height:36px;border-radius:50%;background:var(--accent);color:#fff;font-family:'Inter',sans-serif;font-size:16px;font-weight:800;display:flex;align-items:center;justify-content:center;flex-shrink:0">2</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Диагностика (бесплатно при ремонте)</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">Нагрузочный тест, проверка батарей, осмотр силовой части и платы управления. Точный диагноз - точная цена.</div>
          </div>
        </div><div style="display:flex;align-items:flex-start;gap:16px;padding:18px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:10px">
          <div style="width:36px;height:36px;border-radius:50%;background:var(--accent);color:#fff;font-family:'Inter',sans-serif;font-size:16px;font-weight:800;display:flex;align-items:center;justify-content:center;flex-shrink:0">3</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Согласование стоимости</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">Сообщаем точную сумму и сроки до начала работ. Приступаем только после согласия.</div>
          </div>
        </div><div style="display:flex;align-items:flex-start;gap:16px;padding:18px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:10px">
          <div style="width:36px;height:36px;border-radius:50%;background:var(--accent);color:#fff;font-family:'Inter',sans-serif;font-size:16px;font-weight:800;display:flex;align-items:center;justify-content:center;flex-shrink:0">4</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Компонентный ремонт</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">Ремонтируем на уровне компонентов, не заменяем платы целиком. Это экономит ваши деньги.</div>
          </div>
        </div><div style="display:flex;align-items:flex-start;gap:16px;padding:18px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:10px">
          <div style="width:36px;height:36px;border-radius:50%;background:var(--accent);color:#fff;font-family:'Inter',sans-serif;font-size:16px;font-weight:800;display:flex;align-items:center;justify-content:center;flex-shrink:0">5</div>
          <div>
            <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px">Тестирование и гарантия</div>
            <div style="font-size:13px;color:var(--text3);line-height:1.6">Полная проверка после ремонта. Акт выполненных работ, гарантийный талон 6–12 месяцев.</div>
          </div>
        </div>
      <div style="margin-top:24px;padding:20px;background:var(--accent-bg);border-radius:14px;border:1.5px solid var(--accent-bd)">
        <div style="font-weight:800;font-size:15px;color:var(--text);margin-bottom:6px">⚡ Срочный ремонт</div>
        <div style="font-size:13px;color:var(--text2);line-height:1.6">При наличии запчастей на складе - ремонт в день обращения. Подменный фонд ИБП на время ремонта: <a href="<?php echo home_url('/rent/'); ?>" style="color:var(--accent)">аренда ИБП</a>.</div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="section-hd">
    <div class="accent-bar"></div>
    <p class="eyebrow">Часто спрашивают</p>
    <h2 class="display" style="font-size:clamp(22px,3vw,42px);margin-bottom:12px">ВОПРОСЫ О РЕМОНТЕ RIELLO</h2>
  </div>
  <div style="max-width:760px"><div style="border:1.5px solid var(--border);border-radius:14px;overflow:hidden;margin-bottom:10px">
        <div style="padding:18px 20px;font-weight:800;font-size:15px;cursor:pointer;display:flex;justify-content:space-between;align-items:center;background:var(--card)" onclick="var a=this.nextElementSibling;a.style.display=a.style.display==='none'?'block':'none'">
          <span>Сколько стоит ремонт Riello Sentinel Dual?</span><span style="color:var(--accent);font-size:18px">▾</span>
        </div>
        <div style="display:none;padding:0 20px 18px;background:var(--card)"><p style="font-size:14px;line-height:1.75;color:var(--text2);margin:0">Зависит от неисправности. Замена АКБ - от 4 000 ₽. Ремонт инвертора - от 9 000 ₽. Точную стоимость назовём после бесплатной диагностики.</p></div>
      </div><div style="border:1.5px solid var(--border);border-radius:14px;overflow:hidden;margin-bottom:10px">
        <div style="padding:18px 20px;font-weight:800;font-size:15px;cursor:pointer;display:flex;justify-content:space-between;align-items:center;background:var(--card)" onclick="var a=this.nextElementSibling;a.style.display=a.style.display==='none'?'block':'none'">
          <span>Есть ли запчасти для Riello?</span><span style="color:var(--accent);font-size:18px">▾</span>
        </div>
        <div style="display:none;padding:0 20px 18px;background:var(--card)"><p style="font-size:14px;line-height:1.75;color:var(--text2);margin:0">Для наиболее распространённых серий - Dialog, iDialog, Sentinel Dual - запчасти есть на складе. Для редких моделей возможен заказ. Уточняйте по телефону.</p></div>
      </div><div style="border:1.5px solid var(--border);border-radius:14px;overflow:hidden;margin-bottom:10px">
        <div style="padding:18px 20px;font-weight:800;font-size:15px;cursor:pointer;display:flex;justify-content:space-between;align-items:center;background:var(--card)" onclick="var a=this.nextElementSibling;a.style.display=a.style.display==='none'?'block':'none'">
          <span>Даёте ли гарантию на ремонт Riello?</span><span style="color:var(--accent);font-size:18px">▾</span>
        </div>
        <div style="display:none;padding:0 20px 18px;background:var(--card)"><p style="font-size:14px;line-height:1.75;color:var(--text2);margin:0">Да. На работы - 6 месяцев, на замену АКБ - 12 месяцев. Документы: договор, акт, гарантийный талон.</p></div>
      </div><div style="border:1.5px solid var(--border);border-radius:14px;overflow:hidden;margin-bottom:10px">
        <div style="padding:18px 20px;font-weight:800;font-size:15px;cursor:pointer;display:flex;justify-content:space-between;align-items:center;background:var(--card)" onclick="var a=this.nextElementSibling;a.style.display=a.style.display==='none'?'block':'none'">
          <span>Починит ли Riello, который вообще не подаёт признаков жизни?</span><span style="color:var(--accent);font-size:18px">▾</span>
        </div>
        <div style="display:none;padding:0 20px 18px;background:var(--card)"><p style="font-size:14px;line-height:1.75;color:var(--text2);margin:0">Часто - да. Разряженные батареи, неисправность платы управления или силовой части легко диагностируются. Привозите - разберёмся.</p></div>
      </div><div style="border:1.5px solid var(--border);border-radius:14px;overflow:hidden;margin-bottom:10px">
        <div style="padding:18px 20px;font-weight:800;font-size:15px;cursor:pointer;display:flex;justify-content:space-between;align-items:center;background:var(--card)" onclick="var a=this.nextElementSibling;a.style.display=a.style.display==='none'?'block':'none'">
          <span>Берёте ли в ремонт промышленные Riello Multi Sentry?</span><span style="color:var(--accent);font-size:18px">▾</span>
        </div>
        <div style="display:none;padding:0 20px 18px;background:var(--card)"><p style="font-size:14px;line-height:1.75;color:var(--text2);margin:0">Да, работаем с промышленными и модульными системами Riello. Для крупных ИБП возможен выезд инженера на объект по Санкт-Петербургу и ЛО.</p></div>
      </div></div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="section-hd">
    <div class="accent-bar"></div>
    <p class="eyebrow">Другие услуги</p>
    <h2 class="display" style="font-size:clamp(20px,2.5vw,34px);margin-bottom:12px">ТАКЖЕ У НАС</h2>
  </div>
  <div class="grid-3">
    <a href="<?php echo home_url('/zamena-akb-ibp/'); ?>" style="text-decoration:none"><div class="card"><div class="card-ico">🔋</div><div class="card-title">Замена АКБ ИБП</div><div class="card-text">Замена батарей для всех марок ИБП. Оригинальные и совместимые АКБ, гарантия на работы и батареи.</div></div></a>
    <a href="<?php echo home_url('/rent/'); ?>" style="text-decoration:none"><div class="card"><div class="card-ico">📦</div><div class="card-title">Аренда ИБП</div><div class="card-text">Подменный фонд на время ремонта. Мощность 0,5–160 кВА, доставка и монтаж по СПб.</div></div></a>
    <a href="<?php echo home_url('/buyout/'); ?>" style="text-decoration:none"><div class="card"><div class="card-ico">💰</div><div class="card-title">Выкуп ИБП</div><div class="card-text">Выкупаем нерабочие и устаревшие ИБП. Быстрая оценка, честная цена, вывоз за наш счёт.</div></div></a>
  </div>
</section>

<div style="max-width:1240px;margin:0 auto;padding:0 32px 56px">
  <div style="background:var(--navy);border-radius:24px;padding:48px;display:flex;align-items:center;gap:20px;position:relative;overflow:hidden">
    <div style="position:absolute;top:-70px;right:-70px;width:260px;height:260px;background:var(--accent);opacity:.07;transform:rotate(45deg);border-radius:48px"></div>
    <div style="flex:1;position:relative">
      <h2 class="display" style="font-size:clamp(24px,3vw,40px);color:white">НУЖЕН РЕМОНТ RIELLO?</h2>
      <p class="lead" style="color:rgba(255,255,255,.6);margin-top:8px">Привезите ИБП к нам или вызовите инженера на выезд. Диагностика - бесплатно при ремонте.</p>
    </div>
    <div style="display:flex;gap:12px;flex-wrap:wrap;flex-shrink:0;position:relative">
      <a href="tel:+79046490909" class="btn btn-lg" style="background:var(--accent);color:white">📞 Позвонить</a>
      <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background:#229ED9;color:white">Telegram</a>
    </div>
  </div>
</div>

</div><?php get_footer(); ?>
