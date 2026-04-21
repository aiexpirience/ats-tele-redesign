<?php
/**
 * АТС ТЕЛЕКОМ — page-contacts.php
 * Template Name: Контакты
 */
/*
 * Template Name: Контакты
 */
?>
<?php get_header(); ?>
<style>
:root{--bg:#f8f7f3;--bg2:#fff;--card:#fff;--card2:#f0ede6;--border:#e5e1d8;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#1565C0;--mag-bg:rgba(34,158,217,.08);--mag-bd:rgba(34,158,217,.24);--navy:#2D3748;--green:#1565C0;--text:#1c2030;--text2:#4a5568;--text3:#8a93a8;--shadow-sm:0 2px 8px rgba(45,55,72,.07);--shadow:0 4px 24px rgba(45,55,72,.10);--radius:12px;--nav-h:72px;--max-w:1240px;color-scheme:light}[data-theme="dark"]{--bg:#121212;--bg2:#1a1a1a;--card:#202020;--card2:#282828;--border:#303030;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#42A5F5;--mag-bg:rgba(34,158,217,.12);--navy:#b8b8c8;--green:#42A5F5;--text:#e8e8f2;--text2:#9e9eb0;--text3:#6b6b7a;--shadow-sm:0 2px 8px rgba(0,0,0,.30);--shadow:0 4px 24px rgba(0,0,0,.45);color-scheme:dark}*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth}body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--text);padding-top:var(--nav-h);overflow-x:hidden;-webkit-font-smoothing:antialiased;transition:background.35s,color.35s}a{color:inherit;text-decoration:none}.nav{position:fixed;top:0;left:0;right:0;z-index:1000;height:var(--nav-h);background:rgba(248,247,243,.92);backdrop-filter:blur(24px) saturate(160%);-webkit-backdrop-filter:blur(24px);border-bottom:1px solid var(--border);transition:background .4s}
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


.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}.grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:20px}.card{background:var(--card);border:1.5px solid var(--border);border-radius:16px;padding:24px;transition:all.25s;position:relative;overflow:hidden}.card::before{content:"";position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--accent),var(--mag));opacity:0;transition:.3s}.card:hover{transform:translateY(-4px);box-shadow:var(--shadow);border-color:var(--accent)}.card:hover::before{opacity:1}.card-ico{font-size:28px;margin-bottom:12px}.card-title{font-size:14px;font-weight:800;color:var(--text);margin-bottom:8px}.card-text{font-size:13px;color:var(--text3);line-height:1.7}.cta-band{background:var(--navy);border-radius:24px;padding:48px;display:flex;align-items:center;gap:20px;position:relative;overflow:hidden}[data-theme="dark"].cta-band{background:var(--card);border:1.5px solid var(--border)}.cta-band::before{content:"";position:absolute;top:-70px;right:-70px;width:260px;height:260px;background:var(--accent);opacity:.07;transform:rotate(45deg);border-radius:48px}.cta-text{flex:1;position:relative}.cta-text .display{font-size:clamp(24px,3vw,40px);color:white}[data-theme="dark"].cta-text .display{color:var(--text)}.cta-text .lead{color:rgba(255,255,255,.6);margin-top:8px}[data-theme="dark"].cta-text .lead{color:var(--text2)}.cta-actions{display:flex;gap:12px;flex-wrap:wrap;flex-shrink:0;position:relative}.footer{background:var(--navy);border-top:1px solid rgba(34,158,217,.25);padding:32px 32px 20px;transition:background.35s}[data-theme="dark"].footer{background:var(--bg2)}.footer-inner{max-width:var(--max-w);margin:0 auto}.footer-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr 1fr;gap:20px;padding-bottom:36px;border-bottom:1px solid rgba(255,255,255,.12)}[data-theme="dark"].footer-top{border-bottom-color:var(--border)}.footer-logo-text{font-family:'Inter',sans-serif;font-size:12px;font-weight:800;color:white;line-height:1.25}.footer-desc{font-size:13px;line-height:1.75;color:rgba(255,255,255,.55);margin:10px 0 18px}[data-theme="dark"].footer-desc{color:var(--text3)}.footer-messengers{display:flex;gap:8px}.footer-msg{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;transition:all.2s}.footer-msg.wa{background:rgba(37,211,102,.18);color:#25d366}.footer-msg.tg{background:rgba(34,158,217,.18);color:#229ED9}.footer-col h4{font-size:10px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:14px}[data-theme="dark"].footer-col h4{color:var(--text3)}.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:8px}.footer-col a{font-size:13px;color:rgba(255,255,255,.65);transition:color.15s}[data-theme="dark"].footer-col a{color:var(--text2)}.footer-col a:hover{color:var(--accent)}.footer-bottom{display:flex;justify-content:space-between;padding-top:18px;font-size:12px;color:rgba(255,255,255,.35)}[data-theme="dark"].footer-bottom{color:var(--text3)}.float-contacts{position:fixed;bottom:28px;right:28px;z-index:800;display:flex;flex-direction:column;gap:10px}.float-btn{width:50px;height:50px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow);transition:all.2s;text-decoration:none}.float-btn:hover{transform:scale(1.1)}.float-wa{background:#25d366}.float-tg{background:#229ED9}@media(max-width:900px){.grid-3{grid-template-columns:1fr 1fr}.grid-2{grid-template-columns:1fr}.cta-band{flex-direction:column;text-align:center;padding:36px 24px}.cta-actions{justify-content:center}.footer-top{grid-template-columns:1fr 1fr;gap:24px}}@media(max-width:600px){.section{padding:48px 20px}.page-hero{padding:40px 20px 36px}.page-hero-inner>div:last-child{display:none}.grid-3{grid-template-columns:1fr}.footer-top{grid-template-columns:1fr}}
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


.accent-bar{width:40px;height:4px;border-radius:2px;background:var(--accent);margin-bottom:16px}
.divider{height:1px;background:var(--border);margin:32px 0}
.eyebrow{font-size:10px;font-weight:800;letter-spacing:3px;text-transform:uppercase;color:var(--accent);margin-bottom:12px}

</style>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "АТС ТЕЛЕКОМ",
  "legalName": "ООО \"АТС Телеком\"",
  "alternateName": ["ATS Telecom", "АТС Телеком", "ATS TELECOM"],
  "taxID": "7839401824",
  "vatID": "783901001",
  "identifier": {
    "@type": "PropertyValue",
    "name": "ОГРН",
    "value": "1097847083510"
  },
  "description": "Специализированный сервисный центр по ремонту ИБП, продаже, аренде и выкупу оборудования. Телефония и ВКС. Работаем с 2009 года.",
  "url": "https://ats-tele.com/",
  "telephone": "+79046490909",
  "email": "atstelecomspb@yandex.ru",
  "foundingDate": "2009",
  "priceRange": "₽₽",
  "currenciesAccepted": "RUB",
  "paymentAccepted": "Cash, Invoice",
  "openingHours": "Mo-Sa 10:00-20:00",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "ул. Розенштейна, д. 34",
    "addressLocality": "Санкт-Петербург",
    "postalCode": "198095",
    "addressCountry": "RU"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 59.8967,
    "longitude": 30.2743
  },
  "sameAs": ["https://t.me/atstelecom"],
  "serviceArea": {
    "@type": "GeoCircle",
    "geoMidpoint": {
      "@type": "GeoCoordinates",
      "latitude": 59.8967,
      "longitude": 30.2743
    },
    "geoRadius": "100000"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Услуги АТС ТЕЛЕКОМ",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Ремонт ИБП"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Замена АКБ ИБП"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Аренда ИБП"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Выкуп оборудования"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Телефония и ВКС"}}
    ]
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Главная", "item": "https://ats-tele.com/"},
    {"@type": "ListItem", "position": 2, "name": "Контакты", "item": "https://ats-tele.com/contacts.html"}
  ]
}
</script>
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"FAQPage",
  "mainEntity":[
    {"@type":"Question","name":"Как записаться на диагностику ИБП?","acceptedAnswer":{"@type":"Answer","text":"Позвоните по телефону +7 (904) 649-09-09 или заполните форму обратной связи на сайте. Наш менеджер свяжется с вами в течение 30 минут в рабочее время и согласует удобное время для доставки оборудования."}},
    {"@type":"Question","name":"Есть ли у вас выездной сервис?","acceptedAnswer":{"@type":"Answer","text":"Да, мы предлагаем выездное обслуживание по Санкт-Петербургу и Ленинградской области. Выезд специалиста возможен для диагностики, ремонта на месте, технического обслуживания и монтажа оборудования."}},
    {"@type":"Question","name":"Как привезти ИБП на ремонт?","acceptedAnswer":{"@type":"Answer","text":"Вы можете привезти оборудование самостоятельно по адресу нашего сервисного центра в рабочее время Пн–Сб 10:00–20:00. Также доступна курьерская доставка через транспортные компании. Для крупного промышленного оборудования организуем самовывоз нашим транспортом."}},
    {"@type":"Question","name":"В какие дни и часы вы работаете?","acceptedAnswer":{"@type":"Answer","text":"Сервисный центр АТС ТЕЛЕКОМ работает Пн–Сб с 10:00 до 20:00. В воскресенье -- выходной. Принимаем заявки через сайт и Telegram круглосуточно."}}
  ]
}
</script>


  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-inner">
      <div>
        <div class="page-hero-badge"><span></span>Контакты · Санкт-Петербург</div>
        <h1>СВЯЖИТЕСЬ<br><span>с нами</span></h1>
        <p class="page-hero-desc">Приём в сервисный центр ежедневно. Адрес, телефон, мессенджеры — выберите удобный способ связи. Выезд специалиста на объект в Санкт-Петербурге и Ленинградской области.</p>
        <div class="page-hero-btns">
          <a href="tel:+79046490909" class="btn btn-lg" style="background:white;color:var(--accent);font-weight:800">📞 Позвонить</a>
          <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background:white;color:var(--accent);font-weight:800"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg> Telegram</a>
        </div>
      </div>
      <div class="page-hero-stats">
      <div class="phstat">
        <div class="phstat-num">Пн–Сб</div>
        <div class="phstat-label">10:00–20:00</div>
      </div>
      <div class="phstat">
        <div class="phstat-num">Вс</div>
        <div class="phstat-label">выходной</div>
      </div>
      <div class="phstat">
        <div class="phstat-num">выезд</div>
        <div class="phstat-label">по городу и области</div>
      </div>
      </div>
    </div>
  </div>

<section class="section">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:32px">

      <!-- Левая колонка -- контакты -->
      <div style="display:flex;flex-direction:column;gap:16px">

        <div class="card">
          <div style="display:flex;gap:14px;align-items:flex-start">
            <div style="font-size:26px;flex-shrink:0">📞</div>
            <div>
              <div style="font-size:11px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--text3);margin-bottom:6px">Контактный телефон</div>
              <div style="font-size:16px;font-weight:800;color:var(--text)">+7 (904) 649-09-09</div>
              <div style="font-size:12px;color:var(--text3);margin-top:4px">Пн–Сб: 10:00–20:00</div>
            </div>
          </div>
        </div>

        <div class="card">
          <div style="display:flex;gap:14px;align-items:flex-start">
            <div style="flex-shrink:0"><svg width="26" height="26" viewBox="0 0 24 24" fill="#229ED9"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></div>
            <div>
              <div style="font-size:11px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--text3);margin-bottom:6px">Контакт в Telegram</div>
              <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" style="font-size:18px;font-weight:800;color:#229ED9">@atstelecom</a>
              <div style="font-size:12px;color:var(--text3);margin-top:4px">Отвечаем в течение часа в рабочее время</div>
            </div>
          </div>
        </div>

        <div class="card">
          <div style="display:flex;gap:14px;align-items:flex-start">
            <div style="font-size:26px;flex-shrink:0">✉️</div>
            <div>
              <div style="font-size:11px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--text3);margin-bottom:6px">Контактный e-mail</div>
              <a href="mailto:atstelecomspb@yandex.ru" style="font-size:15px;font-weight:800;color:var(--accent)">atstelecomspb@yandex.ru</a>
              <div style="font-size:12px;color:var(--text3);margin-top:4px">Для запросов КП и прочих вопросов</div>
            </div>
          </div>
        </div>

        <div class="card">
          <div style="display:flex;gap:14px;align-items:flex-start">
            <div style="font-size:26px;flex-shrink:0">🕐</div>
            <div>
              <div style="font-size:11px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--text3);margin-bottom:8px">Время работы</div>
              <div style="display:flex;flex-direction:column;gap:6px">
                <div style="display:flex;justify-content:space-between;gap:24px;font-size:14px">
                  <span style="color:var(--text2);font-weight:600">Пн–Сб</span>
                  <span style="color:var(--text);font-weight:800">10:00–20:00</span>
                </div>
                <div style="display:flex;justify-content:space-between;gap:24px;font-size:14px">
                  <span style="color:var(--text2);font-weight:600">Воскресенье</span>
                  <span style="color:var(--text3);font-weight:700">выходной</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Правая колонка -- адреса и реквизиты -->
      <div style="display:flex;flex-direction:column;gap:16px">

        <div class="card">
          <div style="display:flex;gap:14px;align-items:flex-start">
            <div style="font-size:26px;flex-shrink:0">🔧</div>
            <div>
              <div style="font-size:11px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--text3);margin-bottom:6px">Адрес сервисного центра</div>
              <div style="font-size:15px;font-weight:800;color:var(--text);line-height:1.5">198095, г. Санкт-Петербург,<br>ул. Розенштейна, д. 34</div>
              <div style="margin-top:10px;display:flex;gap:8px;flex-wrap:wrap">
                <span style="font-size:12px;background:var(--accent-bg);color:var(--accent);border-radius:6px;padding:3px 10px;font-weight:700">м. Балтийская</span>
                <span style="font-size:12px;background:var(--accent-bg);color:var(--accent);border-radius:6px;padding:3px 10px;font-weight:700">м. Нарвская</span>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div style="display:flex;gap:14px;align-items:flex-start">
            <div style="font-size:26px;flex-shrink:0">🏛️</div>
            <div>
              <div style="font-size:11px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--text3);margin-bottom:6px">Юридический адрес</div>
              <div style="font-size:14px;font-weight:700;color:var(--text);line-height:1.5">198095, г. Санкт-Петербург,<br>ул. Розенштейна, д. 34, лит. А, п. 1Н, оф. 55</div>
            </div>
          </div>
        </div>

        <div class="card" style="background:var(--card2)">
          <div style="font-size:11px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:var(--text3);margin-bottom:14px">Реквизиты организации</div>
          <div style="display:flex;flex-direction:column;gap:8px;font-size:13.5px">
            <div style="font-weight:800;font-size:15px;color:var(--text);margin-bottom:4px">ООО "АТС Телеком"</div>
            <div style="display:flex;justify-content:space-between;gap:12px;padding:6px 0;border-bottom:1px solid var(--border)">
              <span style="color:var(--text3)">ИНН</span>
              <span style="font-weight:700;color:var(--text);font-family:monospace">7839401824</span>
            </div>
            <div style="display:flex;justify-content:space-between;gap:12px;padding:6px 0;border-bottom:1px solid var(--border)">
              <span style="color:var(--text3)">КПП</span>
              <span style="font-weight:700;color:var(--text);font-family:monospace">783901001</span>
            </div>
            <div style="display:flex;justify-content:space-between;gap:12px;padding:6px 0">
              <span style="color:var(--text3)">ОГРН</span>
              <span style="font-weight:700;color:var(--text);font-family:monospace">1097847083510</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- ЗАЯВКА ОНЛАЙН -->
  <section class="section">
    <div class="section-hd">
      <div class="accent-bar"></div>
      <p class="eyebrow">Оставить заявку</p>
      <h2 class="display" style="font-size:clamp(22px,3vw,42px);margin-bottom:12px">НАПИШИТЕ НАМ</h2>
      <p class="lead" style="font-size:15px;max-width:560px">Опишите проблему, укажите модель ИБП - ответим в течение часа в рабочее время и предварительно назовём стоимость ремонта.</p>
    </div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:32px;align-items:start">
      <div style="display:flex;flex-direction:column;gap:12px">
        <div style="display:flex;align-items:center;gap:12px;padding:14px 18px;background:var(--card2);border-radius:12px;font-size:14px;color:var(--text2)">
          <span style="font-size:20px">⚡</span><span>Предварительная оценка стоимости по описанию</span>
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding:14px 18px;background:var(--card2);border-radius:12px;font-size:14px;color:var(--text2)">
          <span style="font-size:20px">📷</span><span>Можно прикрепить фото ИБП для точной диагностики</span>
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding:14px 18px;background:var(--card2);border-radius:12px;font-size:14px;color:var(--text2)">
          <span style="font-size:20px">🕐</span><span>Ответ в течение часа - Пн–Сб с 10:00 до 20:00</span>
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding:14px 18px;background:var(--card2);border-radius:12px;font-size:14px;color:var(--text2)">
          <span style="font-size:20px">📋</span><span>Для юрлиц: договор, счёт, акт выполненных работ</span>
        </div>
      </div>
      <div id="cntctForm" style="background:var(--card);border:1.5px solid var(--border);border-radius:20px;padding:32px">
        <div style="margin-bottom:16px"><label style="font-size:11px;font-weight:700;letter-spacing:.5px;text-transform:uppercase;color:var(--text3);display:block;margin-bottom:6px">Ваше имя *</label><input id="cName" type="text" placeholder="Иван Петров" style="width:100%;padding:12px 14px;background:var(--card2);border:1.5px solid var(--border);border-radius:10px;font-size:14px;font-family:inherit;color:var(--text);outline:none;transition:border-color.2s" onfocus="this.style.borderColor='var(--accent)'" onblur="this.style.borderColor=''"></div>
        <div style="margin-bottom:16px"><label style="font-size:11px;font-weight:700;letter-spacing:.5px;text-transform:uppercase;color:var(--text3);display:block;margin-bottom:6px">Телефон *</label><input id="cPhone" type="tel" placeholder="+7 (___) ___-__-__" style="width:100%;padding:12px 14px;background:var(--card2);border:1.5px solid var(--border);border-radius:10px;font-size:14px;font-family:inherit;color:var(--text);outline:none;transition:border-color.2s" onfocus="this.style.borderColor='var(--accent)'" onblur="this.style.borderColor=''"></div>
        <div style="margin-bottom:20px"><label style="font-size:11px;font-weight:700;letter-spacing:.5px;text-transform:uppercase;color:var(--text3);display:block;margin-bottom:6px">Опишите проблему</label><textarea id="cDesc" placeholder="Модель ИБП, симптомы неисправности..." style="width:100%;padding:12px 14px;background:var(--card2);border:1.5px solid var(--border);border-radius:10px;font-size:14px;font-family:inherit;color:var(--text);outline:none;transition:border-color.2s;resize:vertical;min-height:80px;line-height:1.6" onfocus="this.style.borderColor='var(--accent)'" onblur="this.style.borderColor=''"></textarea></div>
        <button onclick="sendCntct()" style="width:100%;padding:14px;background:var(--accent);color:#fff;font-size:15px;font-weight:800;border:none;border-radius:12px;cursor:pointer;font-family:inherit;transition:all.2s" onmouseover="this.style.opacity='.88'" onmouseout="this.style.opacity='1'">Отправить заявку →</button>
        <p style="font-size:11.5px;color:var(--text3);margin-top:12px;text-align:center">* обязательные поля · ответим в рабочее время</p>
      </div>
      <div id="cntctSuccess" style="display:none;background:var(--card);border:1.5px solid var(--border);border-radius:20px;padding:48px;text-align:center">
        <div style="font-size:48px;margin-bottom:14px">✅</div>
        <h3 style="font-family:'Inter',sans-serif;font-size:20px;margin-bottom:8px">Заявка принята!</h3>
        <p style="color:var(--text2);font-size:14px">Свяжемся в течение часа в рабочее время.</p>
      </div>
    </div>
    <script>
    function sendCntct(){
      var n=document.getElementById('cName'),p=document.getElementById('cPhone');
      var ok=true;
      [n,p].forEach(function(f){if(!f.value.trim()){f.style.borderColor='#229ED9';ok=false;}else{f.style.borderColor=''}});
      if(!ok)return;
      var btn=document.querySelector('[onclick="sendCntct()"]');
      btn.textContent='Отправляем...';btn.disabled=true;btn.style.opacity='.6';
      var fd=new FormData();
      fd.append('name',n.value.trim());fd.append('phone',p.value.trim());
      fd.append('desc',document.getElementById('cDesc').value.trim());
      fetch('<?php echo admin_url("admin-ajax.php"); ?>',{method:'POST',body:fd})
        .then(function(){document.getElementById('cntctForm').style.display='none';document.getElementById('cntctSuccess').style.display='block'})
        .catch(function(){document.getElementById('cntctForm').style.display='none';document.getElementById('cntctSuccess').style.display='block'})
    }
    </script>
  </section>

  <div class="divider"></div>

  <!-- КАРТА -->
  <section class="section">
    <div class="section-hd">
      <div class="accent-bar"></div>
      <p class="eyebrow">Как нас найти</p>
      <h2 class="display" style="font-size:clamp(22px,3vw,42px);margin-bottom:12px">НА КАРТЕ</h2>
    </div>
    <div style="border-radius:20px;overflow:hidden;border:1.5px solid var(--border);height:420px;background:var(--card2)">
      <iframe
        src="https://yandex.ru/map-widget/v1/?ll=30.288290%2C59.904536&z=16&l=map&pt=30.288290,59.904536,pm2rdm&text=%D1%83%D0%BB.%20%D0%A0%D0%BE%D0%B7%D0%B5%D0%BD%D1%88%D1%82%D0%B5%D0%B9%D0%BD%D0%B0%2C%2034"
        width="100%" height="100%" frameborder="0" allowfullscreen style="display:block">
      </iframe>
    </div>
    <div style="margin-top:12px;font-size:13px;color:var(--text3);text-align:center">
      198095, г. Санкт-Петербург, ул. Розенштейна, д. 34 · м. Балтийская / Нарвская
    </div>
  </section>

</div>
<?php get_footer(); ?>
