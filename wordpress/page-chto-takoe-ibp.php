<?php
/**
 * АТС ТЕЛЕКОМ — page-chto-takoe-ibp.php
 * Template Name: Что такое ИБП
 */
/*
 * Template Name: Что такое ИБП
 */
?>
<?php get_header(); ?>
<style>

:root{--bg:#f8f7f3;--bg2:#fff;--card:#fff;--card2:#f0ede6;--border:#e5e1d8;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#1565C0;--mag-bg:rgba(34,158,217,.08);--mag-bd:rgba(34,158,217,.24);--navy:#252525;--green:#1565C0;--text:#1c2030;--text2:#4a5568;--text3:#8a93a8;--shadow-sm:0 2px 8px rgba(45,55,72,.07);--shadow:0 4px 24px rgba(45,55,72,.10);--radius:12px;--nav-h:72px;--max-w:1240px;color-scheme:light}
[data-theme="dark"]{--bg:#121212;--bg2:#1a1a1a;--card:#202020;--card2:#282828;--border:#303030;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#42A5F5;--mag-bg:rgba(34,158,217,.12);--mag-bd:rgba(34,158,217,.28);--navy:#b8b8c8;--green:#42A5F5;--text:#e8e8f2;--text2:#9e9eb0;--text3:#6b6b7a;--shadow-sm:0 2px 8px rgba(0,0,0,.30);--shadow:0 4px 24px rgba(0,0,0,.45);color-scheme:dark}
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--text);overflow-x:hidden;-webkit-font-smoothing:antialiased;transition:background.35s,color.35s}a{color:inherit;text-decoration:none}
.nav{position:fixed;top:0;left:0;right:0;z-index:1000;height:var(--nav-h);background:rgba(248,247,243,.92);backdrop-filter:blur(24px) saturate(160%);-webkit-backdrop-filter:blur(24px);border-bottom:1px solid var(--border);transition:background .4s}
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

.display{font-family:'Inter',sans-serif;line-height:1.05;color:var(--text);letter-spacing:-.5px}
.eyebrow{font-size:10px;font-weight:800;letter-spacing:3px;text-transform:uppercase;color:var(--accent)}
.lead{font-size:16px;line-height:1.8;color:var(--text2)}
.accent-bar{width:44px;height:4px;border-radius:2px;background:linear-gradient(90deg,var(--accent),var(--mag));margin-bottom:18px}
.btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;font-weight:800;border-radius:var(--radius);cursor:pointer;transition:all.2s;border:none;font-family:'Inter',sans-serif;white-space:nowrap;text-decoration:none}
.btn-lg{font-size:14px;padding:14px 28px}.btn-md{font-size:13px;padding:11px 22px}
.btn-primary{background:var(--accent);color:#fff}.btn-primary:hover{background:var(--accent-h);transform:translateY(-2px);box-shadow:0 8px 24px rgba(34,158,217,.4)}
.btn-green{background:#229ED9;color:white}.btn-green:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(34,158,217,.32)}
.section{padding:80px 32px;max-width:var(--max-w);margin:0 auto}.section-hd{margin-bottom:44px}
.divider{height:1px;background:var(--border)}.page-wrap{padding-top:var(--nav-h);min-height:100vh}
.page-hero{
  background:
    linear-gradient(to right, var(--card2) 45%, rgba(240,237,230,0) 100%),
    linear-gradient(to bottom, rgba(240,237,230,0.95) 0%, rgba(240,237,230,0.6) 100%),
    url('https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=1400&q=85&auto=format&fit=crop') center/cover no-repeat;
  border-bottom:1px solid var(--border);padding:56px 40px 52px;min-height:280px;
}
[data-theme="dark"] .page-hero{
  background:
    linear-gradient(to right, var(--bg2) 50%, rgba(18,21,32,0.4) 80%, rgba(18,21,32,0.05) 100%),
    url('https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=1400&q=85&auto=format&fit=crop') center/cover no-repeat;
}




.hero-badge{display:inline-flex;align-items:center;gap:6px;padding:4px 12px;border-radius:20px;font-size:11px;font-weight:700;background:var(--accent-bg);border:1px solid var(--accent-bd);color:var(--accent);margin-bottom:18px}





.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:20px}
.card{background:var(--card);border:1.5px solid var(--border);border-radius:16px;padding:24px;transition:all.25s;position:relative;overflow:hidden}
.card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--accent),var(--mag));opacity:0;transition:.3s}
.card:hover{transform:translateY(-4px);box-shadow:var(--shadow);border-color:var(--accent)}.card:hover::before{opacity:1}
.card-ico{font-size:28px;margin-bottom:12px}.card-title{font-size:14px;font-weight:800;color:var(--text);margin-bottom:8px}
.card-text{font-size:13px;color:var(--text3);line-height:1.7}
.price-card{background:var(--card);border:1.5px solid var(--border);border-radius:16px;padding:24px;display:flex;align-items:center;justify-content:space-between;gap:20px;transition:all.2s}
.price-card:hover{border-color:var(--accent);box-shadow:var(--shadow-sm)}
.price-name{font-weight:700;font-size:14px;color:var(--text)}
.price-desc{font-size:12px;color:var(--text3);margin-top:3px}
.price-val{font-family:'Inter',sans-serif;font-size:18px;color:var(--accent);white-space:nowrap;font-weight:800}
.warn-box{background:var(--accent-bg);border:1.5px solid var(--accent-bd);border-radius:14px;padding:20px 24px;display:flex;gap:14px;align-items:flex-start}
.warn-ico{font-size:22px;flex-shrink:0}
.warn-text{font-size:13.5px;line-height:1.7;color:var(--text2)}
.process-row{display:flex;gap:0;position:relative}
.process-row::before{content:'';position:absolute;top:24px;left:24px;right:24px;height:2px;background:linear-gradient(90deg,var(--accent),var(--mag));opacity:.2}
.proc-step{flex:1;text-align:center;padding:0 12px;position:relative}
.proc-num{width:48px;height:48px;border-radius:50%;background:var(--accent);color:#fff;font-weight:800;font-size:17px;display:inline-flex;align-items:center;justify-content:center;margin-bottom:14px;position:relative;z-index:1;box-shadow:0 4px 14px rgba(30,136,229,.35)}
.proc-title{font-weight:800;font-size:14px;color:var(--text);margin-bottom:6px}.proc-text{font-size:13px;color:var(--text3);line-height:1.6}
.cta-band{background:var(--navy);border-radius:24px;padding:48px;display:flex;align-items:center;gap:20px;position:relative;overflow:hidden}
[data-theme="dark"] .cta-band{background:var(--card);border:1.5px solid var(--border)}
.cta-band::before{content:'';position:absolute;top:-70px;right:-70px;width:260px;height:260px;background:var(--accent);opacity:.07;transform:rotate(45deg);border-radius:48px}
.cta-text{flex:1;position:relative}.cta-text .display{font-size:clamp(24px,3vw,40px);color:white}
[data-theme="dark"] .cta-text .display{color:var(--text)}.cta-text .lead{color:rgba(255,255,255,.6);margin-top:8px}
[data-theme="dark"] .cta-text .lead{color:var(--text2)}.cta-actions{display:flex;gap:12px;flex-wrap:wrap;flex-shrink:0;position:relative}
.footer{background:var(--navy);border-top:1px solid rgba(34,158,217,.25);padding:32px 32px 20px;transition:background.35s}
[data-theme="dark"] .footer{background:var(--bg2)}.footer-inner{max-width:var(--max-w);margin:0 auto}
.footer-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr 1fr;gap:20px;padding-bottom:36px;border-bottom:1px solid rgba(255,255,255,.12)}
[data-theme="dark"] .footer-top{border-bottom-color:var(--border)}
.footer-logo-text{font-family:'Inter',sans-serif;font-size:12px;font-weight:800;color:white;line-height:1.25}
.footer-desc{font-size:13px;line-height:1.75;color:rgba(255,255,255,.55);margin:10px 0 18px}
[data-theme="dark"] .footer-desc{color:var(--text3)}.footer-messengers{display:flex;gap:8px}
.footer-msg{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;transition:all.2s}
.footer-msg.wa{background:rgba(37,211,102,.18);color:#25d366}.footer-msg.tg{background:rgba(34,158,217,.18);color:#229ED9}
.footer-col h4{font-size:10px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:14px}
[data-theme="dark"] .footer-col h4{color:var(--text3)}.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:8px}
.footer-col a{font-size:13px;color:rgba(255,255,255,.65);transition:color.15s}
[data-theme="dark"] .footer-col a{color:var(--text2)}.footer-col a:hover{color:var(--accent)}
.footer-bottom{display:flex;justify-content:space-between;padding-top:18px;font-size:12px;color:rgba(255,255,255,.35)}
[data-theme="dark"] .footer-bottom{color:var(--text3)}
.float-contacts{position:fixed;bottom:28px;right:28px;z-index:800;display:flex;flex-direction:column;gap:10px}
.float-btn{width:50px;height:50px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow);transition:all.2s;text-decoration:none}
.float-btn:hover{transform:scale(1.1)}.float-wa{background:#25d366}.float-tg{background:#229ED9}
@media(max-width:900px){.grid-3{grid-template-columns:1fr 1fr}.grid-2{grid-template-columns:1fr}.page-hero-inner{flex-direction:column}.cta-band{flex-direction:column;text-align:center;padding:36px 24px}.cta-actions{justify-content:center}.footer-top{grid-template-columns:1fr 1fr;gap:24px}.process-row{flex-direction:column;gap:20px}.process-row::before{display:none}}
@media(max-width:600px){.section{padding:48px 20px}.page-hero{padding:40px 20px 36px}.grid-3{grid-template-columns:1fr}.footer-top{grid-template-columns:1fr}}

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


/* ── ЗАМЕТНЫЙ БЛОК ЗАЯВКИ ── */
.req-cta-block{background:linear-gradient(135deg,var(--accent) 0%,#1565C0 100%);border-radius:24px;padding:52px;display:grid;grid-template-columns:1fr auto;gap:20px;align-items:center;position:relative;overflow:hidden}
.req-cta-block::before{content:'';position:absolute;top:-60px;right:-60px;width:240px;height:240px;background:rgba(255,255,255,.07);border-radius:50%}
.req-cta-block::after{content:'';position:absolute;bottom:-80px;left:30%;width:200px;height:200px;background:rgba(255,255,255,.05);border-radius:50%}
.req-cta-left{position:relative;z-index:1}
.req-cta-right{display:flex;flex-direction:column;gap:16px;flex-shrink:0;position:relative;z-index:1}
.req-cta-fact{background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);border-radius:14px;padding:14px 20px;text-align:center;min-width:160px}
.req-cta-num{display:block;font-family:'Inter',sans-serif;font-size:18px;font-weight:800;color:white;line-height:1.2}
.req-cta-label{display:block;font-size:11px;color:rgba(255,255,255,.7);margin-top:4px;font-weight:600}
@media(max-width:900px){.req-cta-block{grid-template-columns:1fr}.req-cta-right{flex-direction:row;flex-wrap:wrap;justify-content:center}}
@media(max-width:600px){.req-cta-block{padding:28px 20px}.req-cta-fact{min-width:130px}}

/* ── БРЕНД ТАБЫ + АККОРДЕОН ── */
.brand-tabs{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:24px}
.brand-tab{display:flex;flex-direction:column;align-items:flex-start;gap:2px;padding:14px 20px;border-radius:14px;border:1.5px solid var(--border);background:var(--card);cursor:pointer;transition:all.2s;min-width:140px}
.brand-tab:hover{border-color:var(--accent);background:var(--accent-bg)}
.brand-tab.active{border-color:var(--accent);background:var(--accent-bg)}
.brand-tab.soon{opacity:.5;cursor:default}
.brand-tab.soon:hover{border-color:var(--border);background:var(--card)}
.brand-tab-ico{font-size:22px}
.brand-tab-name{font-size:13px;font-weight:800;color:var(--text)}
.brand-tab-count{font-size:11px;color:var(--accent);font-weight:700}
.brand-tab.soon.brand-tab-count{color:var(--text3)}
.brand-panel{display:none}
.brand-panel.active{display:block}
.accordion{display:flex;flex-direction:column;gap:6px}
.acc-item{background:var(--card);border:1.5px solid var(--border);border-radius:12px;overflow:hidden;transition:border-color.2s}
.acc-item.open{border-color:var(--accent)}
.acc-head{width:100%;display:flex;align-items:center;justify-content:space-between;padding:14px 18px;background:none;border:none;cursor:pointer;text-align:left;gap:12px;transition:background.2s}
.acc-head:hover{background:var(--accent-bg)}
.acc-item.open.acc-head{background:var(--accent-bg)}
.acc-title{display:flex;align-items:center;gap:10px;font-size:14px;font-weight:700;color:var(--text);line-height:1.3}
.acc-ico{font-size:17px;flex-shrink:0}
.acc-arrow{font-size:20px;color:var(--accent);font-weight:300;transition:transform.3s;flex-shrink:0;line-height:1}
.acc-item.open .acc-arrow{transform:rotate(90deg)}
.acc-body{display:none;padding:0 18px 18px}
.acc-item.open .acc-body{display:block}
.acc-list{list-style:none;display:flex;flex-direction:column;gap:7px}
.acc-list li{font-size:13px;color:var(--text2);padding-left:16px;position:relative;line-height:1.5}
.acc-list li::before{content:"✓";position:absolute;left:0;color:var(--accent);font-weight:800}
@media(max-width:600px){
 .brand-tabs{gap:8px}
 .brand-tab{min-width:calc(50% -- 4px);padding:12px 14px}
 .acc-title{font-size:13px}
 .acc-head{padding:12px 14px}
 .acc-body{padding:0 14px 14px}
}

/* ── REPAIR PAGE REDESIGN ── */
.repair-hero{
  min-height:520px;
  background:var(--navy);
  position:relative;
  overflow:hidden;
  display:flex;
  align-items:center;
  padding:calc(var(--nav-h) + 48px) 40px 60px;
}
[data-theme="dark"] .repair-hero{background:#0a0d1a}
.repair-hero-bg{
  position:absolute;inset:0;
  background:
    radial-gradient(ellipse 60% 80% at 100% 0%,rgba(30,136,229,.25) 0%,transparent 60%),
    radial-gradient(ellipse 40% 60% at 0% 100%,rgba(34,158,217,.2) 0%,transparent 55%);
}
.repair-hero-grid{
  position:absolute;inset:0;
  background-image:linear-gradient(rgba(255,255,255,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.04) 1px,transparent 1px);
  background-size:48px 48px;
}
.repair-hero-inner{max-width:var(--max-w);margin:0 auto;width:100%;position:relative;z-index:2;display:grid;grid-template-columns:1fr auto;gap:60px;align-items:center}
.repair-hero-badge{display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:20px;background:rgba(30,136,229,.2);border:1px solid rgba(30,136,229,.4);color:#60a5fa;font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;margin-bottom:20px}
.repair-hero h1{font-family:'Inter',sans-serif;font-size:clamp(32px,5vw,64px);line-height:1.04;letter-spacing:-1.5px;color:white;margin-bottom:20px}
.repair-hero h1 span{color:#60a5fa}
.repair-hero-desc{font-size:15px;line-height:1.8;color:rgba(255,255,255,.65);max-width:520px;margin-bottom:32px}
.repair-hero-btns{display:flex;gap:12px;flex-wrap:wrap}
.repair-hero-stats{display:flex;flex-direction:column;gap:12px;flex-shrink:0}
.rstat{background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.12);border-radius:16px;padding:20px 24px;text-align:center;min-width:150px;backdrop-filter:blur(10px)}
.rstat-num{font-family:'Inter',sans-serif;font-size:28px;font-weight:800;color:white;line-height:1}
.rstat-num span{color:#60a5fa}
.rstat-label{font-size:11px;color:rgba(255,255,255,.5);margin-top:5px;font-weight:600}

/* Услуги сетка */
.services-row{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--border);border-radius:20px;overflow:hidden;border:1px solid var(--border)}
.svc-box{background:var(--card);padding:28px 24px;transition:all.25s;cursor:default;position:relative;overflow:hidden}
.svc-box::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--accent),var(--mag));transform:scaleX(0);transition:.3s;transform-origin:left}
.svc-box:hover{background:var(--accent-bg)}
.svc-box:hover::after{transform:scaleX(1)}
.svc-box-ico{font-size:32px;margin-bottom:14px}
.svc-box-title{font-weight:800;font-size:14px;color:var(--text);margin-bottom:8px;line-height:1.3}
.svc-box-text{font-size:12.5px;color:var(--text3);line-height:1.65}
.svc-box-price{display:inline-block;margin-top:12px;font-size:12px;font-weight:800;color:var(--accent);background:var(--accent-bg);border-radius:6px;padding:3px 10px}

/* Smart-UPS блок */
.smart-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.smart-card{background:var(--card);border:1.5px solid var(--border);border-radius:16px;padding:24px;transition:all.25s}
.smart-card:hover{border-color:var(--accent);box-shadow:var(--shadow)}
.smart-card-head{display:flex;align-items:center;gap:12px;margin-bottom:16px;padding-bottom:14px;border-bottom:1px solid var(--border)}
.smart-card-ico{width:44px;height:44px;border-radius:11px;background:var(--accent-bg);display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0}
.smart-card-title{font-weight:800;font-size:14px;color:var(--text);line-height:1.3}
.smart-card-sub{font-size:11.5px;color:var(--text3);margin-top:3px}
.smart-tags{display:flex;flex-wrap:wrap;gap:6px}
.smart-tag{font-size:11.5px;font-weight:700;padding:4px 10px;border-radius:6px;background:var(--card2);color:var(--text2);border:1px solid var(--border);font-family:monospace}
.smart-tag:hover{border-color:var(--accent);color:var(--accent);background:var(--accent-bg)}

/* Цены таблица */
.price-table{width:100%;border-collapse:separate;border-spacing:0 8px}
.price-table tr{background:var(--card);transition:all.2s}
.price-table tr:hover{transform:translateX(4px)}
.price-table td{padding:16px 20px;font-size:14px}
.price-table td:first-child{border-radius:12px 0 0 12px;font-weight:700;color:var(--text)}
.price-table td:nth-child(2){color:var(--text3);font-size:13px}
.price-table td:last-child{border-radius:0 12px 12px 0;font-weight:800;color:var(--accent);font-family:'Inter',sans-serif;font-size:15px;white-space:nowrap;text-align:right}
.price-free{color:var(--green)!important}

@media(max-width:900px){
 .repair-hero-inner{grid-template-columns:1fr}
 .repair-hero-stats{flex-direction:row;flex-wrap:wrap}
 .rstat{min-width:120px;flex:1}
 .services-row{grid-template-columns:1fr 1fr}
 .smart-grid{grid-template-columns:1fr}
}
@media(max-width:600px){
 .repair-hero{padding:calc(var(--nav-h) + 24px) 20px 40px}
 .services-row{grid-template-columns:1fr}
 .price-table td:nth-child(2){display:none}
 .repair-hero h1{font-size:clamp(28px,8vw,44px)}
}

/* ── DARK THEME FIXES ── */
[data-theme="dark"] .card{background:var(--card);border-color:var(--border)}
[data-theme="dark"] .svc-box{background:var(--card)}
[data-theme="dark"] .acc-item{background:var(--card)}
[data-theme="dark"] .prod-card{background:var(--card)}
[data-theme="dark"] .price-card{background:var(--card);border-color:var(--border)}
[data-theme="dark"] .price-name{color:var(--text)}
[data-theme="dark"] .price-desc{color:var(--text3)}
[data-theme="dark"] .smart-tag{background:var(--card2);color:var(--text2);border-color:var(--border2)}
[data-theme="dark"] .brand-tab{background:var(--card);border-color:var(--border)}
[data-theme="dark"] .brand-tab-name{color:var(--text)}
[data-theme="dark"] .req-form-card{background:var(--card)}
[data-theme="dark"] .req-input{background:var(--card2);border-color:var(--border);color:var(--text)}
[data-theme="dark"] .req-file-label{background:var(--card2);border-color:var(--border2)}
[data-theme="dark"] .acc-head:hover{background:var(--accent-bg)}
[data-theme="dark"] .services-row{background:var(--border)}
[data-theme="dark"] .rstat{background:rgba(255,255,255,.05);border-color:rgba(255,255,255,.1)}
[data-theme="dark"] table.price-table tr{background:var(--card)}
[data-theme="dark"] .mobile-nav{background:var(--bg)}


.art-h2{font-size:clamp(20px,2.5vw,28px);font-weight:800;color:var(--text);margin:40px 0 16px;line-height:1.2;letter-spacing:-.3px}
.art-h3{font-size:clamp(16px,2vw,20px);font-weight:700;color:var(--text);margin:28px 0 12px;line-height:1.3}
.art-p{font-size:15px;line-height:1.8;color:var(--text2);margin-bottom:18px}
.info-box{background:var(--card2);border-left:4px solid var(--accent);border-radius:0 12px 12px 0;padding:20px 24px;margin:24px 0}
.warn-box{background:rgba(245,158,11,.08);border-left:4px solid #F59E0B;border-radius:0 12px 12px 0;padding:20px 24px;margin:24px 0}
.type-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:16px;margin:24px 0}
.type-card{background:var(--card);border:1px solid var(--border);border-radius:14px;padding:20px}
.type-badge{display:inline-block;padding:3px 10px;border-radius:6px;font-size:11px;font-weight:700;margin-bottom:10px}
.badge-green{background:rgba(22,163,74,.12);color:#16a34a}
.badge-yellow{background:rgba(245,158,11,.12);color:#d97706}
.badge-red{background:rgba(220,38,38,.12);color:#dc2626}
.faq-item{border:1px solid var(--border);border-radius:12px;overflow:hidden;margin-bottom:10px}
.faq-q{display:flex;align-items:center;justify-content:space-between;padding:18px 20px;cursor:pointer;font-weight:600;font-size:15px;color:var(--text)}
.faq-arr{font-size:20px;color:var(--accent);transition:transform .3s}
.faq-a{padding:0 20px 18px;font-size:14px;line-height:1.75;color:var(--text2)}
.fault-item{display:flex;gap:16px;align-items:flex-start;padding:18px;background:var(--card);border:1px solid var(--border);border-radius:12px;margin-bottom:12px}
.fault-icon{font-size:24px;flex-shrink:0}
.fault-title{font-weight:700;font-size:14px;color:var(--text);margin-bottom:4px}
.fault-desc{font-size:13px;color:var(--text2);line-height:1.65}
.fault-action{display:inline-block;margin-top:8px;font-size:12px;font-weight:700;color:var(--accent)}
.art-cta{background:var(--accent);border-radius:16px;padding:32px;margin:40px 0;color:white;text-align:center}
.art-cta-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin-top:20px}
.btn-outline{padding:12px 24px;border-radius:10px;border:2px solid rgba(255,255,255,.5);color:white;font-weight:700;font-size:14px;transition:all .2s}


.art-lead{font-size:17px;line-height:1.9;color:var(--text2);margin-bottom:20px}
.art-h2{font-family:'Inter',sans-serif;font-size:clamp(20px,2.8vw,32px);font-weight:800;letter-spacing:-.3px;margin:48px 0 16px;color:var(--text)}
.art-h3{font-family:'Inter',sans-serif;font-size:clamp(16px,2vw,22px);font-weight:700;margin:32px 0 12px;color:var(--text)}
.art-p{font-size:15px;line-height:1.85;color:var(--text2);margin-bottom:16px}
.art-wrap{max-width:820px;margin:0 auto;padding:0 32px}
.info-box{background:var(--accent-bg);border-left:4px solid var(--accent);border-radius:0 12px 12px 0;padding:18px 20px;margin:24px 0}
.info-box p{font-size:14px;line-height:1.7;color:var(--text2);margin:0}
.info-box strong{color:var(--text)}
.warn-box{background:rgba(34,158,217,.07);border-left:4px solid var(--mag);border-radius:0 12px 12px 0;padding:18px 20px;margin:24px 0}
.warn-box p{font-size:14px;line-height:1.7;color:var(--text2);margin:0}
.type-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin:24px 0}
.type-card{background:var(--card);border:1.5px solid var(--border);border-radius:16px;padding:20px}
.type-card h4{font-family:'Inter',sans-serif;font-size:14px;font-weight:800;margin-bottom:8px;color:var(--text)}
.type-badge{display:inline-block;font-size:10px;font-weight:800;letter-spacing:1px;text-transform:uppercase;padding:3px 8px;border-radius:6px;margin-bottom:10px}
.badge-green{background:rgba(34,158,217,.12);color:#229ED9}
.badge-yellow{background:rgba(34,158,217,.15);color:#229ED9}
.badge-red{background:rgba(66,165,245,.1);color:#229ED9}
.fault-item{display:flex;gap:16px;padding:16px;background:var(--card);border:1.5px solid var(--border);border-radius:12px;margin-bottom:12px;align-items:flex-start}
.fault-icon{font-size:24px;flex-shrink:0;margin-top:2px}
.fault-title{font-weight:800;font-size:14px;color:var(--text);margin-bottom:4px}
.fault-desc{font-size:13px;color:var(--text3);line-height:1.6}
.fault-action{font-size:12px;color:var(--accent);font-weight:700;margin-top:6px}
.toc{background:var(--card2);border-radius:16px;padding:24px 28px;margin-bottom:40px}
.toc-title{font-family:'Inter',sans-serif;font-size:13px;font-weight:800;letter-spacing:1px;text-transform:uppercase;color:var(--text3);margin-bottom:14px}
.toc ol{padding-left:18px;display:flex;flex-direction:column;gap:6px}
.toc a{font-size:14px;color:var(--text2);text-decoration:none;transition:color.15s}
.toc a:hover{color:var(--accent)}
.faq-item{border:1.5px solid var(--border);border-radius:14px;overflow:hidden;margin-bottom:10px}
.faq-q{padding:18px 20px;font-weight:800;font-size:15px;cursor:pointer;display:flex;justify-content:space-between;align-items:center;background:var(--card)}
.faq-q:hover{background:var(--card2)}
.faq-a{padding:0 20px;max-height:0;overflow:hidden;transition:max-height.35s,padding.35s;background:var(--card)}
.faq-a.open{max-height:400px;padding:0 20px 18px}
.faq-a p{font-size:14px;line-height:1.75;color:var(--text2);margin:0}
.faq-arr{transition:transform.25s;font-size:18px;color:var(--accent)}
.faq-q.open .faq-arr{transform:rotate(180deg)}
.art-cta{background:var(--navy);border-radius:24px;padding:44px;text-align:center;position:relative;overflow:hidden}
[data-theme="dark"] .art-cta{background:var(--card);border:1.5px solid var(--border)}
.art-cta::before{content:"";position:absolute;top:-60px;right:-60px;width:220px;height:220px;background:var(--accent);opacity:.07;transform:rotate(45deg);border-radius:40px}
.art-cta h2{font-family:'Inter',sans-serif;font-size:clamp(22px,3vw,36px);color:white;margin-bottom:10px;position:relative}
[data-theme="dark"] .art-cta h2{color:var(--text)}
.art-cta p{font-size:15px;color:rgba(255,255,255,.65);margin-bottom:28px;position:relative}
[data-theme="dark"] .art-cta p{color:var(--text2)}
.art-cta-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;position:relative}
.srv-link{display:inline-flex;align-items:center;gap:6px;font-size:13px;font-weight:700;color:var(--accent);text-decoration:none;padding:6px 12px;border-radius:8px;background:var(--accent-bg);border:1px solid var(--accent-bd);transition:all.2s}
.srv-link:hover{background:var(--accent);color:#fff}
@media(max-width:900px){.type-grid{grid-template-columns:1fr}}
@media(max-width:600px){.art-wrap{padding:0 16px}.art-h2{margin:36px 0 12px}.art-cta{padding:28px 16px}}

</style>
</div>
<!-- Раздел 1 -->
  <h2 class="art-h2" id="chto-takoe">Что такое ИБП и зачем он нужен</h2>
  <p class="art-p">ИБП - <strong>источник бесперебойного питания</strong> (по-английски UPS - Uninterruptible Power Supply) - это электрическое устройство, которое обеспечивает бесперебойное питание подключённой нагрузки при пропадании, просадке или искажении сетевого напряжения.</p>
  <p class="art-p">Без ИБП внезапное отключение света означает потерю несохранённых данных, аварийную остановку производственного процесса, порчу дорогостоящего оборудования или - в случае медицинской техники - угрозу жизни пациента. ИБП устраняет эту проблему, давая системе время либо корректно завершить работу, либо продолжить её на батареях до восстановления питания.</p>

  <div class="info-box">
    <p><strong>Кому нужен ИБП?</strong> Серверным комнатам и ЦОД, промышленному и технологическому оборудованию, медицинским учреждениям, объектам с непрерывным производством (заводам, нефтянке, энергетике), офисам с критичными данными, системам видеонаблюдения и контроля доступа.</p>
  </div>

  <p class="art-p">ИБП выполняет три основные функции: <strong>резервирование питания</strong> (работа от батарей при отключении сети), <strong>стабилизацию напряжения</strong> (устранение просадок и скачков) и <strong>фильтрацию помех</strong> (защита от высокочастотных помех в сети).</p>

  <!-- Раздел 2 -->
  <h2 class="art-h2" id="princip-raboty">Принцип работы ИБП</h2>
  <p class="art-p">В упрощённом виде ИБП состоит из <strong>зарядного устройства</strong>, <strong>аккумуляторной батареи</strong> и <strong>инвертора</strong>. В нормальном режиме зарядное устройство поддерживает батарею в заряженном состоянии, а нагрузка питается от сети (в некоторых топологиях - через инвертор). При пропадании сети инвертор переключается на батарею и продолжает питать нагрузку стабилизированным напряжением.</p>
  <p class="art-p">Время автономной работы зависит от ёмкости батарей и мощности нагрузки. Типичное время для офисного ИБП - 5–20 минут. Для промышленных систем с выносными батарейными шкафами - несколько часов.</p>

  <div class="info-box">
    <p><strong>Важно:</strong> Время автономии снижается при высокой температуре, старении батарей и нагрузке, превышающей расчётную. ИБП мощностью 10 кВА при 30% нагрузке работает значительно дольше, чем при 80%.</p>
  </div>

  <!-- Раздел 3 -->
  <h2 class="art-h2" id="vidy">Виды ИБП</h2>
  <p class="art-p">По топологии работы все ИБП делятся на три класса:</p>

  <div class="type-grid">
    <div class="type-card">
      <span class="type-badge badge-green">Лучшая защита</span>
      <h4>Онлайн (Double Conversion)</h4>
      <p style="font-size:13px;color:var(--text3);line-height:1.65">Нагрузка всегда питается через инвертор. Идеальная фильтрация и нулевое время переключения. Подходит для серверов, медоборудования, ЦОД.</p>
      <p style="font-size:12px;color:var(--accent);font-weight:700;margin-top:10px">APC Symmetra, Eaton 9PX, MGE Galaxy</p>
    </div>
    <div class="type-card">
      <span class="type-badge badge-yellow">Оптимальный баланс</span>
      <h4>Линейно-интерактивный (Line-Interactive)</h4>
      <p style="font-size:13px;color:var(--text3);line-height:1.65">Нагрузка питается от сети через AVR-стабилизатор. Инвертор включается при пропадании сети. Время переключения - 2–10 мс. Для офисов и небольших серверных.</p>
      <p style="font-size:12px;color:var(--accent);font-weight:700;margin-top:10px">APC Smart-UPS, Eaton 5P/5SC</p>
    </div>
    <div class="type-card">
      <span class="type-badge badge-red">Базовая защита</span>
      <h4>Резервный / Off-Line (Standby)</h4>
      <p style="font-size:13px;color:var(--text3);line-height:1.65">Нагрузка питается напрямую от сети, инвертор «холодный». Время переключения - 10–20 мс. Подходит только для персональных компьютеров.</p>
      <p style="font-size:12px;color:var(--accent);font-weight:700;margin-top:10px">APC Back-UPS, бюджетные модели</p>
    </div>
  </div>

  <div class="warn-box">
    <p><strong>⚠️ Частая ошибка:</strong> Подключать серверное оборудование к резервным (off-line) ИБП. При время переключения 10–20 мс некоторые блоки питания серверов уходят в перезагрузку - это хуже, чем работа без ИБП вовсе. Для серверов используйте только онлайн или линейно-интерактивные модели с временем переключения не более 4–6 мс.</p>
  </div>

  <!-- Раздел 4 -->
  <h2 class="art-h2" id="brendy">Популярные бренды ИБП</h2>
  <h3 class="art-h3">APC by Schneider Electric</h3>
  <p class="art-p">Один из крупнейших производителей ИБП в мире. Линейка Smart-UPS - для офисов и небольших серверных комнат (0,5–10 кВА). Symmetra LX, PX, VT - промышленные трёхфазные системы мощностью от 16 до 500 кВА с возможностью параллельной работы и горячего резервирования. Широко распространены в России, запчасти и батареи доступны.</p>
  <h3 class="art-h3">Eaton (ранее MGE UPS Systems)</h3>
  <p class="art-p">Серия 9PX и 9SX - онлайн ИБП для серверных (750 ВА–20 кВА). 9E и 9EX - трёхфазные для среднего и крупного бизнеса. После поглощения MGE, бренд MGE Galaxy (теперь APC Galaxy) также относится к портфелю Schneider. Eaton известен высокой надёжностью и хорошей документацией.</p>
  <h3 class="art-h3">Riello UPS</h3>
  <p class="art-p">Итальянский производитель, популярный в промышленном секторе. Серия Dialog и Sentinel Dual - онлайн ИБП для коммерческой и промышленной применения. Отличаются хорошим КПД и доступностью сервисного обслуживания.</p>

  <!-- Раздел 5 -->
  <h2 class="art-h2" id="neispravnosti">Типовые неисправности ИБП</h2>
  <p class="art-p">За 17 лет работы наш сервисный центр накопил статистику по наиболее частым поломкам. Вот что встречается чаще всего:</p>

  <div class="fault-item">
    <div class="fault-icon">🔋</div>
    <div>
      <div class="fault-title">Износ или выход из строя аккумуляторов</div>
      <div class="fault-desc">Самая частая причина - 60–70% всех обращений. ИБП сигнализирует о замене батарей (индикатор или звуковой сигнал), время автономии резко сокращается. Срок службы свинцово-кислотных АКБ - 3–5 лет при температуре +20°C.</div>
      <div class="fault-action">→ Замена АКБ: от 2 500 ₽. <a href="<?php echo home_url('/zamena-akb-ibp/'); ?>" style="color:var(--accent)">Подробнее о замене батарей</a></div>
    </div>
  </div>

  <div class="fault-item">
    <div class="fault-icon">⚡</div>
    <div>
      <div class="fault-title">Выход из строя силовых транзисторов (IGBT)</div>
      <div class="fault-desc">Происходит при длительных перегрузках, некачественном питании или выработке ресурса. Симптомы: ИБП не включается, на байпасе, звуковой сигнал аварии. Требует замены силовых модулей и диагностики драйверов управления.</div>
      <div class="fault-action">→ Ремонт силовой части: от 8 000 ₽. <a href="<?php echo home_url('/repair/'); ?>" style="color:var(--accent)">Записаться на ремонт</a></div>
    </div>
  </div>

  <div class="fault-item">
    <div class="fault-icon">🌡️</div>
    <div>
      <div class="fault-title">Перегрев и выход из строя вентиляторов</div>
      <div class="fault-desc">ИБП работает только на байпасе, перегревается. Вентиляторы охлаждения изнашиваются через 3–7 лет. При неисправном вентиляторе ИБП отключает силовую часть для защиты от перегрева. Дешёвый ремонт - замена вентиляторов.</div>
      <div class="fault-action">→ Замена вентиляторов: от 2 000 ₽</div>
    </div>
  </div>

  <div class="fault-item">
    <div class="fault-icon">💧</div>
    <div>
      <div class="fault-title">Вздутие и утечка электролитических конденсаторов</div>
      <div class="fault-desc">Встречается у ИБП старше 7–10 лет. Конденсаторы в фильтрах и схемах управления теряют ёмкость, вздуваются и протекают. Это приводит к нестабильной работе, ложным авариям, сбоям заряда батарей. Профилактическая замена конденсаторов продлевает жизнь ИБП.</div>
      <div class="fault-action">→ Профилактика конденсаторов: от 4 000 ₽</div>
    </div>
  </div>

  <div class="fault-item">
    <div class="fault-icon">📡</div>
    <div>
      <div class="fault-title">Неисправность платы управления / EEPROM</div>
      <div class="fault-desc">ИБП не реагирует на кнопки, не отображает данные на дисплее, не выходит на связь по интерфейсу. Может потребовать перепрошивки или замены платы контроллера. У APC Symmetra - часто выходит из строя модуль Battery Management Module.</div>
      <div class="fault-action">→ Ремонт платы управления: от 4 500 ₽</div>
    </div>
  </div>

  <!-- Раздел 6 -->
  <h2 class="art-h2" id="akb">Аккумуляторы ИБП: всё что нужно знать</h2>
  <p class="art-p">В большинстве ИБП используются <strong>свинцово-кислотные герметичные аккумуляторы</strong> (VRLA/AGM - Valve Regulated Lead Acid / Absorbent Glass Mat). Они не требуют обслуживания, не выделяют газов в нормальном режиме и могут эксплуатироваться в любом положении.</p>

  <h3 class="art-h3">Почему батареи выходят из строя раньше срока</h3>
  <p class="art-p">Главный враг АКБ - температура. При +25°C срок службы 5 лет. При +35°C он сокращается вдвое - до 2,5 лет. Поэтому критично держать ИБП в прохладном помещении с нормальной вентиляцией. Второй фактор - глубокие разряды: каждый разряд ниже 80% глубины сокращает число циклов заряда-разряда.</p>

  <h3 class="art-h3">Можно ли заменить батареи самостоятельно?</h3>
  <p class="art-p">На большинстве ИБП - да. Это самый простой вид обслуживания: вынуть старые батареи, подключить новые с соблюдением полярности. Важно использовать батареи той же ёмкости (А·ч) и напряжения. Замена разнотипными или разновозрастными батареями снижает общую ёмкость и может привести к преждевременному отказу всей группы. Если не уверены - звоните нам.</p>

  <!-- Раздел 7 -->
  <h2 class="art-h2" id="kogda-v-remont">Когда везти в ремонт, а когда менять ИБП целиком</h2>
  <p class="art-p">Общее правило: <strong>ремонтировать выгодно</strong>, если стоимость ремонта не превышает 50–60% стоимости нового аналогичного ИБП, а возраст устройства - не более 10–12 лет.</p>
  <p class="art-p">Промышленные ИБП (APC Symmetra, Eaton 9E 40–160 кВА) стоят от 500 000 до нескольких миллионов рублей, поэтому их ремонтируют даже при серьёзных повреждениях - это экономически оправдано. Офисные ИБП до 3 кВА при стоимости ремонта выше 4 000–5 000 ₽ проще заменить.</p>

  <div class="info-box">
    <p><strong>Бесплатная диагностика:</strong> В АТС ТЕЛЕКОМ диагностика бесплатна при выполнении ремонта. Привезите ИБП к нам или вызовите инженера на выезд - мы оценим состояние и честно скажем: ремонтировать или менять. <a href="<?php echo home_url('/repair/'); ?>" style="color:var(--accent)">Подробнее о ремонте ИБП →</a></p>
  </div>

  <!-- Раздел: Как выбрать ИБП для сервера и ЦОД -->
  <h2 class="art-h2" id="vybor-ibp">Как выбрать ИБП для сервера и ЦОД</h2>
  <p class="art-p">Правильный выбор ИБП для серверной или центра обработки данных -- это не просто покупка мощного устройства со скидкой. Ошибка на этапе выбора обойдётся в сотни тысяч рублей потерь данных или простоев. В АТС ТЕЛЕКОМ мы помогаем компаниям выбрать оптимальное решение, учитывая текущие нагрузки и план развития инфраструктуры.</p>

  <p class="art-p"><strong>Шаг 1: Расчёт требуемой мощности.</strong> Сложите мощность всех серверов, коммутаторов, систем охлаждения и освещения. Важно: номинальная мощность блока питания сервера обычно на 30% выше реально потребляемой, поэтому приёмки ПБП 80% от номинала. Для примера: 20 серверов по 600W номинала -- реальная нагрузка около 9--10 кВА вместо заявленных 12 кВА. Выбирайте ИБП с мощностью 150--200% от реальной нагрузки (9 кВА реальная -- ИБП мощностью 15--20 кВА) для возможности будущего расширения.</p>

  <div class="info-box">
    <p><strong>Время автономии:</strong> Для большинства серверных нужно 10--15 минут для корректного завершения работы или запуска генератора. При увеличении мощности ИБП с 10 до 20 кВА при той же ёмкости батарей время автономии вырастет в 2 раза. Рекомендуем использовать формулу: <strong>Время (мин) = Ёмкость батарей (Ач) × Напряжение (В) / (Нагрузка (А) × 1000) × 60</strong>.</p>
  </div>

  <h3 class="art-h3">Топология и избыточность</h3>
  <p class="art-p">Для критичных объектов используйте <strong>онлайн ИБП</strong> (двойное преобразование) -- только они гарантируют нулевое время переключения и чистую синусоиду на выходе. Для серверной из 5--10 единиц оборудования достаточно одного модульного ИБП (APC Symmetra PX, Eaton 9PX), масштабируемого по модулям. Для крупного ЦОД с более чем 100 кВА нагрузки используйте <strong>параллельную архитектуру N+1</strong>: два и более ИБП работают параллельно с синхронизацией, при выходе одного остальные берут нагрузку.</p>

  <p class="art-p"><strong>Выносные батарейные шкафы</strong> (External Battery Packs) позволяют увеличить время автономии без замены самого ИБП. Система работает так: во время разряда батарей основной и выносной шкаф работают параллельно, увеличивая общую ёмкость. Это дешевле, чем покупать ИБП большей мощности.</p>

  <div class="warn-box">
    <p><strong>Частая ошибка выбора:</strong> Покупка ИБП с избыточной мощностью (100+ кВА) для текущей нагрузки 20 кВА. При загруженности 20% КПД падает, батареи живут дольше, но стоимость растёт в 3--4 раза. Выбирайте мощность с запасом 50--100%, а не 400--500%.</p>
  </div>

  <!-- Раздел: Обслуживание и профилактика ИБП -->
  <h2 class="art-h2" id="obsluzhivanie">Обслуживание и профилактика ИБП</h2>
  <p class="art-p">ИБП -- это не «выключи и забудь». Регулярное обслуживание продлевает срок службы, снижает риск отказа в критический момент и сохраняет гарантию производителя. В АТС ТЕЛЕКОМ мы составляем графики ТО для каждого клиента в зависимости от типа ИБП, условий эксплуатации и SLA.</p>

  <h3 class="art-h3">График профилактического обслуживания</h3>
  <p class="art-p"><strong>Ежемесячно:</strong> Визуальный осмотр корпуса (нет ли вздутия конденсаторов, потеков), проверка индикаторов и дисплея, прослушивание вентилятора (нет ли посторонних звуков). <strong>Раз в квартал:</strong> Тест самодиагностики ИБП (функция Self-Test в меню), проверка цепей заземления с помощью мультиметра, очистка вентиляционных отверстий от пыли. <strong>Раз в полгода:</strong> Нагрузочное тестирование -- подключите имитационную нагрузку (или отключите часть серверов) и проверьте время автономии. Результат должен совпадать с расчётным. <strong>Раз в год:</strong> Полная диагностика у специалистов АТС ТЕЛЕКОМ, включая измерение напряжения на батареях и их внутреннего сопротивления.</p>

  <div class="info-box">
    <p><strong>Замена батарей по сроку:</strong> Рекомендуется менять АКБ раз в 3 года при работе в нормальных условиях (+20°C, циклический режим) или раз в 2 года при температурах выше +25°C. Это предотвращает неожиданный отказ и повышает надёжность системы в целом. Стоимость замены батарей (2 500--5 000 ₽) значительно ниже потерь от простоя сервера.</p>
  </div>

  <h3 class="art-h3">Обновление прошивки и настройки</h3>
  <p class="art-p">Производители регулярно выпускают обновления прошивки (firmware) для повышения стабильности, исправления ошибок и добавления новых функций мониторинга. Перед обновлением проверьте совместимость с вашей версией оборудования и батарейных модулей. Обновление должно проводиться квалифицированным специалистом во время окна обслуживания (когда на ИБП нет критичной нагрузки).</p>

  <!-- Раздел: Однофазные и трёхфазные ИБП -->
  <h2 class="art-h2" id="odnofaznye-trehfaznye">Однофазные и трёхфазные ИБП: отличия и применение</h2>
  <p class="art-p">Выбор между однофазным и трёхфазным ИБП зависит от типа объекта и характера нагрузки. Это не просто техническое различие -- это разница в надёжности, экономичности и возможности масштабирования всей системы электроснабжения.</p>

  <p class="art-p"><strong>Однофазные ИБП</strong> (напряжение 230В) используются для офисов, небольших серверных и точек продаж. Мощность обычно не превышает 10--20 кВА. Примеры: APC Smart-UPS 1500 (1,5 кВА), Eaton 5P 3000 (3 кВА). Преимущества: компактность, простота монтажа, низкая стоимость, можно подключить к обычной розетке. Недостаток: при повышении мощности (свыше 10 кВА) нагревается кабель и требуется усиленная линия электроснабжения.</p>

  <div class="type-grid">
    <div class="type-card">
      <span class="type-badge badge-yellow">Небольшие нагрузки</span>
      <h4>Однофазный ИБП</h4>
      <p style="font-size:13px;color:var(--text3);line-height:1.65">До 20 кВА, 230В, простой монтаж, офисные и малые серверные. APC Smart-UPS, Eaton 5P.</p>
    </div>
    <div class="type-card">
      <span class="type-badge badge-green">Промышленные объекты</span>
      <h4>Трёхфазный ИБП</h4>
      <p style="font-size:13px;color:var(--text3);line-height:1.65">От 10 кВА до 500+ кВА, 400В, параллельная архитектура, ЦОД, заводы. APC Symmetra, Eaton 9E.</p>
    </div>
    <div class="type-card">
      <span class="type-badge badge-red">Переход между сегментами</span>
      <h4>Гибридные системы</h4>
      <p style="font-size:13px;color:var(--text3);line-height:1.65">Трёхфазный вход, однофазный выход или наоборот. Для объектов с переходом нагрузки.</p>
    </div>
  </div>

  <p class="art-p"><strong>Трёхфазные ИБП</strong> (напряжение 400В, три фазы + ноль) -- это стандарт для промышленности и крупных ЦОД. Они имеют мощность от 10 кВА до 500+ кВА. Преимущества: равномерное распределение нагрузки между тремя фазами, возможность горячего резервирования нескольких ИБП, лучшее качество напряжения, модульная архитектура. Недостатки: выше стоимость, требуют специализированного электромонтажа, нужен три-фазный источник питания на объекте.</p>

  <div class="warn-box">
    <p><strong>⚠️ Важно:</strong> Нельзя подключить трёхфазный ИБП к однофазной сети и наоборот. Если на вашем объекте только однофазное питание (как в большинстве офисов), выбирайте однофазные модели. Если есть трёхфазный ввод (как на заводах и в ЦОД), используйте трёхфазные системы для максимальной мощности и надёжности.</p>
  </div>

  <!-- Раздел: Модульные ИБП -->
  <h2 class="art-h2" id="modulnye-ibp">Модульные ИБП: архитектура и горячая замена</h2>
  <p class="art-p">Модульная архитектура ИБП -- это инновация, которая изменила подход к резервированию электроснабжения в крупных объектах. Вместо монолитного ИБП система состоит из нескольких независимых модулей, которые работают параллельно и покрывают друг друга при отказе.</p>

  <h3 class="art-h3">Как работают модульные ИБП</h3>
  <p class="art-p">Модульный ИБП (например, APC Symmetra PX, Eaton 9PX) содержит несколько силовых модулей, каждый из которых может поддерживать часть нагрузки. Если модуль выходит из строя, его доля нагрузки автоматически переносится на оставшиеся модули -- нагрузка не отключается. Это даёт архитектуру <strong>N+1</strong>: если у вас 4 модуля, один может быть в ремонте, а остальные 3 полностью покроют нагрузку.</p>

  <p class="art-p"><strong>Горячая замена (Hot-Swap)</strong> модулей -- это их главное преимущество. Нужно заменить вышедший из строя силовой модуль? Снимите его со стойки, установите новый -- без отключения нагрузки, без простоев. Это критично для ЦОД и объектов с SLA 99.99% и выше. В сравнении с монолитным ИБП, где даже диагностика требует пауз в питании, модульные системы дают существенный выигрыш в надёжности.</p>

  <div class="info-box">
    <p><strong>Масштабируемость:</strong> Начните с 2--3 модулей и по мере роста нагрузки добавляйте новые. Общая мощность растёт линейно: 3 модуля × 10 кВА = 30 кВА, 6 модулей × 10 кВА = 60 кВА. Это дешевле, чем заранее покупать ИБП мощностью 60 кВА и 5 лет использовать его на 10% нагрузки.</p>
  </div>

  <p class="art-p">Известные модульные системы: <strong>APC Symmetra LX/PX/VT</strong> -- трёхфазные ИБП с модулями по 10, 20, 30 кВА; <strong>Eaton 9PX</strong> -- универсальный модульный ИБП для средних и крупных нагрузок; <strong>Riello UPS Sentinel Dual</strong> -- итальянская модульная система с хорошей ремонтопригодностью.</p>

  <!-- Раздел: ИБП и генератор -->
  <h2 class="art-h2" id="ibp-generator">ИБП и дизельный генератор: типология и согласованная работа</h2>
  <p class="art-p">Комбинация ИБП + генератор -- это золотой стандарт для объектов, где сбои в питании недопустимы. ИБП обеспечивает мгновенное резервирование при пропадании сети, генератор держит нагрузку столько, сколько нужно (или пока не вернётся сетевое питание).</p>

  <p class="art-p"><strong>Типовая архитектура:</strong> Сеть → ИБП → Нагрузка. Параллельно: Генератор → АВР (автоматический выключатель резерва) → ИБП. Схема работает так: пока есть сетевое питание, ИБП пассивен (батареи заряжены). При отключении сети ИБП мгновенно (0 мс) переходит на батареи -- нагрузка не ощущает разницы. Одновременно подаётся сигнал на запуск генератора. Дизель запускается 10--60 секунд, выходит на режим. АВР переводит нагрузку с батарей ИБП на генератор -- и ИБП начинает заряжаться. Батареи быстро восстанавливаются за счёт мощности генератора.</p>

  <div class="info-box">
    <p><strong>Синхронизация:</strong> ИБП и генератор должны иметь <strong>одинаковую частоту</strong> (50 Гц в России) и <strong>совместимую топологию</strong>. Некоторые онлайн ИБП не «любят» питание от генератора, так как форма напряжения генератора отличается от идеальной синусоиды. Решение: использовать ИБП с режимом ECO (экономичный режим) при работе с генератором или выбирать системы с улучшенной защитой от искажённого напряжения.</p>
  </div>

  <h3 class="art-h3">Расчёт мощности генератора</h3>
  <p class="art-p">Генератор должен быть мощнее ИБП минимум на 20--30%. Почему? При включении нагрузки генератор испытывает импульс тока (пусковой момент), превышающий номинальный ток в 3--5 раз. Если мощность генератора равна мощности нагрузки, он не справится с импульсом и отключится. Пример: ИБП 40 кВА, нагрузка 40 кВА -- нужен генератор мощностью минимум 50--60 кВА.</p>

  <p class="art-p">В объектах с частыми скачками напряжения комбинацию ИБП + генератор дополняют <strong>стабилизаторами напряжения</strong> входного напряжения (AVR). Это защищает как сам ИБП, так и нагрузку от деградации.</p>

  <!-- Раздел: TCO ИБП -->
  <h2 class="art-h2" id="stoimost-ibp">Стоимость владения ИБП: расчёт и оптимизация TCO</h2>
  <p class="art-p">Цена ИБП -- это только верхушка айсберга. Реальная стоимость владения включает электроэнергию, замену батарей, техническое обслуживание, и, в худшем случае, потери от простоя при отказе. В АТС ТЕЛЕКОМ мы помогаем клиентам считать полный TCO (Total Cost of Ownership) и выбирать оптимальное соотношение цены и надёжности.</p>

  <h3 class="art-h3">Компоненты TCO</h3>
  <p class="art-p"><strong>Капитальные затраты (CapEx):</strong> Цена ИБП, батарей, кабелей, монтажа. Для примера: онлайн ИБП 30 кВА (APC Symmetra PX) стоит около 1,5 млн ₽; батареи выносного шкафа -- 400 000 ₽. <strong>Операционные затраты (OpEx):</strong> Электроэнергия на поддержание батарей в заряженном состоянии и охлаждение (600--1 200 ₽/месяц для промышленного ИБП); техническое обслуживание (10 000--30 000 ₽/год); замена батарей каждые 3 года (5 000--100 000 ₽ в зависимости от ёмкости).</p>

  <div class="info-box">
    <p><strong>Пример расчёта TCO на 5 лет:</strong> ИБП 10 кВА: капитальные -- 400 000 ₽; электроэнергия -- 400 000 ₽ (по 80 ₽/месяц); замена батарей x2 -- 100 000 ₽; ТО -- 50 000 ₽. <strong>Итого: 950 000 ₽</strong>, или ~190 000 ₽/год. Но если на этом сервере хранятся критичные данные, цена потери данных может быть миллионами -- и тогда ИБП -- инвестиция, а не затрата.</p>
  </div>

  <p class="art-p"><strong>Ремонт vs замена:</strong> ИБП возрастом 5--7 лет часто проще отремонтировать, чем заменить. Стоимость ремонта: 10 000--50 000 ₽. Стоимость нового аналогичного ИБП: 200 000--400 000 ₽. При размере ремонта ≤ 25% от стоимости нового -- ремонтируйте. При размере ремонта > 50% стоимости нового -- рассмотрите замену, т.к. новый ИБП даст 10 лет гарантийной надёжности.</p>

  <!-- Раздел: ИБП для медицины -->
  <h2 class="art-h2" id="ibp-medicina">ИБП для медицинского оборудования и требования стандартов</h2>
  <p class="art-p">Медицинское учреждение -- это особый класс объектов, где ИБП может спасать жизни. Требования к медицинским ИБП значительно выше, чем для офисов: стандарты IEC 60601, МУ 3.3.6, изоляция электроцепи, невысокая пульсация напряжения на выходе.</p>

  <p class="art-p"><strong>Стандарты и сертификация:</strong> Любой медицинский ИБП должен быть сертифицирован по IEC 60601-1 (базовая безопасность медицинских приборов). Он должен иметь <strong>двойную изоляцию</strong> (между входом и выходом, между входом и землей), что исключает утечку тока на пациента. Мощность пульсаций (THD -- Total Harmonic Distortion) на выходе не должна превышать 3%, иначе может искажаться работа кардиомониторов и других чувствительных приборов.</p>

  <div class="info-box">
    <p><strong>Требования к надёжности:</strong> Большинство медицинских учреждений требуют ИБП с архитектурой N+1 (резервирование) и временем автономии не менее 30 минут. Это позволяет корректно завершить операцию или перевести пациента в безопасное состояние. На реанимационных отделениях время автономии может быть 2--4 часа. Подробнее о требованиях -- в наших консультациях.</p>
  </div>

  <h3 class="art-h3">Какие ИБП подходят для больниц</h3>
  <p class="art-p">Для кабинетов диагностики и офисов поликлиник подходят онлайн ИБП среднего размера (5--10 кВА): APC Symmetra PX, Eaton 9PX с улучшенной изоляцией. Для операционных и реанимаций -- более мощные системы (20--40 кВА) с модульной архитектурой и обязательным резервированием. В крупных многопрофильных больницах используют централизованное резервирование питания: один большой ИБП (100+ кВА) питает все критичные системы (жизнеобеспечение, системы охлаждения, освещение операционных).</p>

  <!-- Раздел: ИБП для производства -->
  <h2 class="art-h2" id="ibp-promyshlennost">ИБП для промышленного оборудования и экстремальные условия</h2>
  <p class="art-p">Производственный ИБП -- это не просто ещё один ИБП. Он должен работать в условиях высокой влажности, пыли, вибрации, экстремальных температур и частых колебаний питающего напряжения. В АТС ТЕЛЕКОМ мы обслуживаем ИБП на заводах, нефтебазах, пищевых производствах и химических предприятиях.</p>

  <p class="art-p"><strong>Экстремальные условия:</strong> Промышленные ИБП должны быть защищены от пыли (IP54 минимум, на пищевых производствах -- IP65 с влагозащитой). При температурах выше +35°C батареи саморазряжаются и деградируют быстрее, поэтому нужна система охлаждения или размещение батарей в кондиционируемом помещении. На вибрирующих объектах (например, рядом с прессами) ИБП закрепляют на амортизирующих опорах, чтобы избежать механических отказов контактов и сварных соединений.</p>

  <div class="type-grid">
    <div class="type-card">
      <span class="type-badge badge-green">Пищевая промышленность</span>
      <h4>IP65, влагозащита</h4>
      <p style="font-size:13px;color:var(--text3);line-height:1.65">Требуется герметичный корпус, защита от попадания воды и моющих средств. Системы контроля температуры.</p>
    </div>
    <div class="type-card">
      <span class="type-badge badge-yellow">Химические заводы</span>
      <h4>Взрывозащищённые ИБП</h4>
      <p style="font-size:13px;color:var(--text3);line-height:1.65">Сертификация по ГОСТ Р МЭК 61241-11, искробезопасные компоненты, отсутствие открытого пламени.</p>
    </div>
    <div class="type-card">
      <span class="type-badge badge-red">На открытом воздухе</span>
      <h4>Уличные ИБП</h4>
      <p style="font-size:13px;color:var(--text3);line-height:1.65">Система климат-контроля, защита от осадков (-40 до +60°C), герметичный корпус на основе полиэстера.</p>
    </div>
  </div>

  <p class="art-p"><strong>Рекомендуемые модели:</strong> Для общего производства: Riello Dialog GP (хорошо переносит скачки напряжения и работает в пыльных условиях). Для химических производств с требованиями взрывозащиты: специализированные системы (требуют заказа и сертификации). На нефтебазах и энергообъектах: трёхфазные онлайн ИБП Eaton 9E с усилением защиты от перегруза и переброса тока.</p>

  <h3 class="art-h3">Мониторинг и диагностика на производстве</h3>
  <p class="art-p">На производстве критично знать состояние ИБП в реальном времени. Используйте встроенные интерфейсы SNMP, ModBus или проприетарные системы мониторинга. Интеграция с SCADA-системами позволяет отслеживать нагрузку, состояние батарей и сигналы о предстоящем обслуживании. АТС ТЕЛЕКОМ может помочь с настройкой мониторинга и обучением персонала.</p>

  <!-- FAQ -->
  <h2 class="art-h2" id="faq">Частые вопросы об ИБП</h2>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Можно ли подключить к ИБП кондиционер или электрочайник?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Категорически нет. Кондиционеры, чайники, обогреватели, пылесосы - это «реактивная» или мощная активная нагрузка. ИБП для такой нагрузки не предназначен: нагрев, выход из строя инвертора и потеря гарантии обеспечены. ИБП рассчитан на IT-оборудование, серверы, медицинскую и промышленную технику.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Почему ИБП пищит даже когда свет есть?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Причины: (1) плохое состояние батарей - замените АКБ; (2) перегруз - нагрузка превышает расчётную мощность ИБП; (3) высокая температура корпуса - проверьте вентиляцию; (4) неисправность платы управления. Расшифровать код сигнала можно по инструкции к конкретной модели ИБП.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Как долго может работать ИБП без нагрузки?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Хранить ИБП в выключенном состоянии без подзарядки дольше 6 месяцев не рекомендуется - батареи саморазряжаются и сульфатируются. Раз в 3–6 месяцев ИБП нужно подключать к сети для подзарядки батарей, даже если он не эксплуатируется.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Сколько стоит замена батарей в APC Smart-UPS 1500?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>APC Smart-UPS 1500 использует 2 батареи 12V 9Ah. Стоимость замены в АТС ТЕЛЕКОМ - от 3 500 ₽ включая работу и новые батареи. Срок выполнения - день в день. <a href="<?php echo home_url('/zamena-akb-ibp/'); ?>" style="color:var(--accent)">Посмотреть цены на замену АКБ →</a></p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Нужен ли ИБП если есть генератор?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Да, обязательно. Дизельный генератор запускается за 10–60 секунд - всё это время нагрузка без питания. ИБП обеспечивает бесшовный переход: пока сервера и оборудование работают от батарей, генератор стартует и выходит на режим. Без ИБП перед генератором нет смысла в самом генераторе для ИТ-нагрузки.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Что делать если ИБП не включается?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Проверьте следующее в порядке возрастания сложности: (1) питание -- убедитесь, что ИБП подключен к розетке и розетка работает (проверьте другой прибор); (2) кнопку включения -- нажмите и удерживайте 3--5 секунд (некоторые модели требуют долгого нажатия); (3) предохранители -- на задней панели ИБП иногда есть съёмные предохранители (обычно рядом с разъёмом питания), они могут перегореть при скачке напряжения; (4) батареи -- полностью разряженные батареи могут помешать включению (ИБП будет требовать предварительную зарядку в течение часа перед первым включением). Если ничего не помогает, обратитесь в АТС ТЕЛЕКОМ -- <a href="<?php echo home_url('/repair/'); ?>" style="color:var(--accent)">диагностика бесплатна</a>.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Какой ИБП нужен для 10 серверов?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Сложите потребляемую мощность серверов. Типичный сервер потребляет 400--600 Вт в работе. 10 серверов -- примерно 4--6 кВА реальной нагрузки. Рекомендуем выбрать ИБП мощностью 10--15 кВА для запаса (это позволит в будущем добавить коммутаторы, система охлаждения, дополнительные серверы без замены ИБП). Топология: обязательно онлайн (двойное преобразование) или линейно-интерактивный с временем переключения &lt;4 мс. Примеры: APC Symmetra PX 10 кВА (модульный, можно расширить), Eaton 9PX 10000i (компактный). Для критичной инфраструктуры используйте N+1 архитектуру -- два ИБП по 10 кВА параллельно, либо один модульный с запасом мощности.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Чем онлайн ИБП лучше линейно-интерактивного?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Три ключевых преимущества онлайна: (1) Время переключения -- ноль миллисекунд (нагрузка всегда питается через инвертор) vs 2--10 мс у линейно-интерактивного (за это время некоторые блоки питания серверов могут перезагрузиться); (2) Качество напряжения -- идеальная синусоида независимо от качества сетевого напряжения vs стабилизация через AVR (импульсное управление может давать волны напряжения); (3) Защита от импульсов -- онлайн ИБП фильтрует все атмосферные помехи и скачки, линейно-интерактивный менее эффективен. Недостаток онлайна: КПД 94--96% vs 98% у линейно-интерактивного (выше потребление электроэнергии). Для серверных выбирайте онлайн, для офисов ПК может хватить линейно-интерактивного.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Как рассчитать время автономии ИБП?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Формула: <strong>Время (часы) = Общая ёмкость батарей (Ач) × Напряжение системы (В) / Мощность нагрузки (Вт)</strong>. Пример: ИБП с батареями 2×12В 18Ач (итого 36 Ач при 24В), нагрузка 2000 Вт. Время = 36 × 24 / 2000 = 0,43 часа = 26 минут. Важные поправки: (1) батареи нельзя разряжать полностью (обычно глубина 80%), поэтому результат умножьте на 0,8 -- получается ~21 минут; (2) при холодной температуре (&lt;0°C) батареи теряют мощность на 30--50%; (3) при старении батарей (через 3--5 лет) ёмкость падает на 20--30%. Для точного расчёта обращайтесь к нам -- мы проведём тестирование вашего ИБП под реальной нагрузкой.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Можно ли использовать автомобильный аккумулятор в ИБП?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Нет, это плохая идея по нескольким причинам. Автомобильные аккумуляторы (обычно 12В 60--100 Ач) предназначены для коротких мощных разрядов (стартер). Батареи ИБП -- герметичные свинцово-кислотные (VRLA/AGM) для длительных разрядов. Они имеют другое соотношение пластин и электролита, оптимизированное для режима ИБП. При подключении автомобильного АКБ: (1) он будет перегреваться и вздуваться из-за неправильной зарядки; (2) выделять водород (опасно для закрытых помещений); (3) быстро потеряет ёмкость (5--10 циклов). Используйте только АКБ, рекомендованные производителем ИБП. Найти правильные батареи по модели ИБП можно в каталогах APC, Eaton, Riello или позвоните нам.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Как утилизировать старые батареи ИБП?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Свинцово-кислотные батареи -- это опасные отходы, их нельзя выбрасывать в мусор. Способы правильной утилизации: (1) Сдать в сервисный центр при замене -- мы берём старые батареи при установке новых (обычно это входит в стоимость работ или небольшая скидка); (2) Обратиться в специализированную компанию по утилизации электроотходов -- в Санкт-Петербурге есть несколько лицензированных центров (поиск по «пункт приёма свинцово-кислотных АКБ СПб»); (3) Вернуть у производителя (некоторые бренды как APC принимают старые батареи через авторизованные сервис-центры). В АТС ТЕЛЕКОМ можно сдать батареи при замене -- свяжитесь с нами и узнайте условия.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Зачем ИБП байпас и что это такое?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Байпас (Bypass) -- это электрический «обход» основной схемы ИБП, позволяющий напрямую подключить нагрузку к сети, минуя инвертор. Зачем это нужно? (1) Если инвертор вышел из строя, байпас позволяет продолжить питание нагрузки от сети (нет, конечно, потеряется защита и резервирование, но оборудование не отключится); (2) При техническом обслуживании ИБП инженер переводит нагрузку на байпас, выключает ИБП и спокойно ремонтирует его, не боясь отключить чувствительное оборудование; (3) На очень старых ИБП (10+ лет) иногда инвертор работает нестабильно -- переключение на байпас улучшает качество питания, хотя снимает защиту. Важно: байпас должен быть синхронизирован по фазе с сетевым напряжением (обычно автоматический), иначе при переключении может быть импульс тока, повредивший оборудование.</p>
    </div>
  </div>

  <div class="faq-item">
    <div class="faq-q" onclick="toggleFaq(this)">
      <span>Какой ИБП лучше: APC или Eaton?</span>
      <span class="faq-arr">▾</span>
    </div>
    <div class="faq-a">
      <p>Оба производителя -- мировые лидеры, выбор зависит от ваших нужд и доступного бюджета. <strong>APC (Schneider Electric)</strong> -- самый популярный на российском рынке, особенно в серверных комнатах. Линейка Smart-UPS и Symmetra хорошо изучена, запчасти и батареи доступны, много информации в интернете. Гарантия 3--5 лет в зависимости от модели. <strong>Eaton</strong> -- известен надёжностью в промышленном сегменте. Серии 9PX и 9E немного дороже, чем APC, но обладают лучшим КПД (98% vs 96%) и более удобным интерфейсом управления. Гарантия до 10 лет на отдельные модели. <strong>Итоговый совет:</strong> Для офисных ИБП (1--3 кВА) выбирайте APC Smart-UPS по цене. Для серверных (5--20 кВА) рассмотрите Eaton 9PX или APC Symmetra в зависимости от требований к модульности. Для крупных объектов (50+ кВА) сравните предложения обоих -- часто зависит от условий поставки и гарантии от местного дилера. Посоветуемся? Позвоните в АТС ТЕЛЕКОМ и опишите свою задачу.</p>
    </div>
  </div>

  <!-- CTA -->
  <div class="art-cta" style="margin-top:56px">
    <h2>Нужна помощь с ИБП?</h2>
    <p>Ремонт, замена батарей, аренда подменного фонда или просто консультация - звоните или пишите в Telegram.</p>
    <div class="art-cta-btns">
      <a href="tel:+79046490909" class="btn btn-primary btn-lg">📞 Позвонить</a>
      <a href="<?php echo home_url('/repair/'); ?>" class="btn btn-outline btn-lg" style="color:#fff;border-color:rgba(255,255,255,.3)">🔧 Ремонт ИБП</a>
      <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn btn-green btn-lg"><svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
    </div>
  </div>

</div>
</div><script>
function toggleFaq(el){
  el.classList.toggle('open');
  var a=el.nextElementSibling;
  a.classList.toggle('open');
}
</script>
<?php get_footer(); ?>
