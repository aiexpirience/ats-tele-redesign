<?php
/**
 * АТС ТЕЛЕКОМ — page-article-remont-ibp.php
 * Template Name: Статья: Ремонт ИБП
 */
/*
 * Template Name: Статья: Ремонт ИБП
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
<div class="page-wrap">
  <div class="page-hero" style="background:var(--surface2)">
    <div class="page-hero-inner">
      <div class="accent-bar"></div>
      <p class="eyebrow">Статья · Полное руководство</p>
      <h1 class="display" style="font-size:clamp(24px,3.5vw,48px);letter-spacing:-1px;font-weight:800;margin:16px 0 14px">
        Ремонт ИБП APC в Санкт-Петербурге:<br>как выбрать сервисный центр
      </h1>
      <p style="font-size:15px;line-height:1.8;color:var(--text2);max-width:680px">
        Подробный материал о том, как устроен качественный ремонт источников бесперебойного питания, 
        что влияет на стоимость и как избежать типичных ошибок при выборе сервиса.
      </p>
      <div style="margin-top:16px;font-size:12px;color:var(--text3)">Время чтения: ~7 минут · Обновлено: март 2025</div>
    </div>
  </div>

  <div style="max-width:860px;margin:0 auto;padding:64px 32px">
    
    <div style="background:var(--surface2);border-left:3px solid var(--gold);border-radius:0 12px 12px 0;padding:20px 24px;margin-bottom:48px;font-size:14px;color:var(--text2);line-height:1.7">
      <strong style="color:var(--text)">Коротко:</strong> в Санкт-Петербурге более 90 сервисных центров заявляют о ремонте ИБП. 
      Большинство из них - мультибрендовые мастерские по ремонту бытовой техники без специализированного стенда и склада запчастей. 
      Ремонт промышленных ИБП APC Symmetra, Eaton 9PX, MGE Galaxy требует иного уровня компетенции.
    </div>

    <h2 style="font-family:'Inter',sans-serif;font-size:clamp(20px,2.5vw,32px);font-weight:800;color:var(--text);margin:0 0 16px;letter-spacing:-.5px">
      Почему ИБП ломается и что с этим делать
    </h2>
    <p style="font-size:15px;line-height:1.8;color:var(--text2);margin-bottom:16px">
      Источник бесперебойного питания - это силовая электроника с аккумуляторными батареями. Самая частая причина обращений в сервис - <strong>выход АКБ из строя</strong>: аккумуляторы имеют ограниченный срок службы (3–5 лет при правильной эксплуатации) и требуют плановой замены.
    </p>
    <p style="font-size:15px;line-height:1.8;color:var(--text2);margin-bottom:32px">
      Следующие по частоте - <strong>неисправности силовой части</strong>: конденсаторы, транзисторы IGBT, дроссели. Особенно актуально для ИБП старше 7–10 лет. Наконец, <strong>платы управления</strong> - самый сложный и дорогой узел, особенно в модульных системах Symmetra.
    </p>

    <h2 style="font-family:'Inter',sans-serif;font-size:clamp(20px,2.5vw,32px);font-weight:800;color:var(--text);margin:0 0 16px;letter-spacing:-.5px">
      Ремонт APC Smart-UPS в Санкт-Петербурге
    </h2>
    <p style="font-size:15px;line-height:1.8;color:var(--text2);margin-bottom:16px">
      Серия Smart-UPS - наиболее распространённые ИБП в офисном и серверном применении. Модели SUA, SMT, SMX, SMC мощностью от 750 ВА до 3 кВА встречаются практически в каждой серверной. Мы обслуживаем и ремонтируем все модификации:
    </p>
    <ul style="list-style:none;display:flex;flex-direction:column;gap:8px;margin-bottom:32px">
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">✓</span>Замена АКБ в кассетах RBC2, RBC17, RBC48, RBC123, RBC124 и других</li>
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">✓</span>Ремонт и замена платы управления, дисплея, портов связи</li>
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">✓</span>Установка и обновление сетевых карт AP9630, AP9631, AP9640, AP9641</li>
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">✓</span>Сброс наработки АКБ, обновление прошивки (firmware)</li>
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">✓</span>Нагрузочное тестирование, калибровка</li>
    </ul>

    <h2 style="font-family:'Inter',sans-serif;font-size:clamp(20px,2.5vw,32px);font-weight:800;color:var(--text);margin:0 0 16px;letter-spacing:-.5px">
      Ремонт APC Symmetra в Санкт-Петербурге
    </h2>
    <p style="font-size:15px;line-height:1.8;color:var(--text2);margin-bottom:16px">
      Symmetra - модульные трёхфазные ИБП для дата-центров и критической инфраструктуры. Стоимость нового оборудования начинается от 500 000 рублей, поэтому качественный ремонт экономически оправдан даже при серьёзных неисправностях. Ключевое отличие от обычного ремонта - работа с отдельными силовыми модулями (SYPM4KI, SYPM2KU, SYPM25KD), модулями управления (SYMIM5, SYMIM3, SYMIM16) и батарейными модулями (SYBT2, SYBT5, SYBTU1-PLP).
    </p>
    <p style="font-size:15px;line-height:1.8;color:var(--text2);margin-bottom:32px">
      Особенность нашего сервиса - возможность провести <strong>выездную диагностику с предоставлением подменного оборудования</strong>. Пока ваш основной ИБП на ремонте, серверная продолжает работать в штатном режиме.
    </p>

    <h2 style="font-family:'Inter',sans-serif;font-size:clamp(20px,2.5vw,32px);font-weight:800;color:var(--text);margin:0 0 16px;letter-spacing:-.5px">
      Сколько стоит ремонт ИБП в СПб
    </h2>
    <p style="font-size:15px;line-height:1.8;color:var(--text2);margin-bottom:20px">
      Стоимость зависит от мощности ИБП, типа неисправности и необходимых запчастей. Ориентировочные цены:
    </p>
    <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:32px">
      <div style="display:flex;justify-content:space-between;background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:16px 20px;gap:20px">
        <div><div style="font-weight:700;font-size:14px;color:var(--text)">Диагностика ИБП</div><div style="font-size:12px;color:var(--text3);margin-top:2px">При выполнении ремонта у нас</div></div>
        <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:var(--green)">Бесплатно</div>
      </div>
      <div style="display:flex;justify-content:space-between;background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:16px 20px;gap:20px">
        <div><div style="font-weight:700;font-size:14px;color:var(--text)">Замена АКБ Smart-UPS</div><div style="font-size:12px;color:var(--text3);margin-top:2px">Работа + батарея в наличии</div></div>
        <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:var(--gold)">от 1 500 ₽</div>
      </div>
      <div style="display:flex;justify-content:space-between;background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:16px 20px;gap:20px">
        <div><div style="font-weight:700;font-size:14px;color:var(--text)">Ремонт платы управления</div><div style="font-size:12px;color:var(--text3);margin-top:2px">Компонентный ремонт</div></div>
        <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:var(--gold)">от 2 500 ₽</div>
      </div>
      <div style="display:flex;justify-content:space-between;background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:16px 20px;gap:20px">
        <div><div style="font-weight:700;font-size:14px;color:var(--text)">Ремонт трёхфазного ИБП</div><div style="font-size:12px;color:var(--text3);margin-top:2px">Symmetra, Eaton от 10 кВА</div></div>
        <div style="font-family:'Inter',sans-serif;font-size:16px;font-weight:800;color:var(--gold)">от 8 000 ₽</div>
      </div>
    </div>

    <h2 style="font-family:'Inter',sans-serif;font-size:clamp(20px,2.5vw,32px);font-weight:800;color:var(--text);margin:0 0 16px;letter-spacing:-.5px">
      Как выбрать сервисный центр по ремонту ИБП
    </h2>
    <p style="font-size:15px;line-height:1.8;color:var(--text2);margin-bottom:16px">
      На что обратить внимание:
    </p>
    <ul style="list-style:none;display:flex;flex-direction:column;gap:10px;margin-bottom:32px">
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">1.</span><strong>Специализация.</strong> Мастер по ноутбукам и телевизорам не тот, кто нужен для ремонта промышленного ИБП. Ищите сервис с профилем именно по силовой электронике.</li>
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">2.</span><strong>Нагрузочный стенд.</strong> Без него невозможно объективно проверить ИБП после ремонта. Спросите есть ли он.</li>
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">3.</span><strong>Склад запчастей.</strong> Если запчасти нужно заказывать - срок ремонта растягивается на недели. Сервис со своим складом делает это быстрее.</li>
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">4.</span><strong>Документы.</strong> Договор, акт выполненных работ, гарантийный талон - обязательны для юридических лиц.</li>
      <li style="font-size:14px;color:var(--text2);padding-left:20px;position:relative;line-height:1.6"><span style="position:absolute;left:0;color:var(--gold);font-weight:800">5.</span><strong>Согласование стоимости до ремонта.</strong> Порядочный сервис называет цену после диагностики и только с вашего согласия приступает к работе.</li>
    </ul>

    <div style="background:linear-gradient(135deg,var(--navy),#1a2a4a);border-radius:20px;padding:36px;text-align:center;position:relative;overflow:hidden">
      <div style="position:absolute;inset:0;background:radial-gradient(circle at 80% 20%,rgba(34,158,217,.15),transparent 60%)"></div>
      <div style="position:relative;z-index:1">
        <h3 style="font-family:'Inter',sans-serif;font-size:22px;font-weight:800;color:white;margin-bottom:10px">Остались вопросы?</h3>
        <p style="font-size:14px;color:rgba(255,255,255,.6);margin-bottom:24px;line-height:1.7">Позвоните или напишите - бесплатно проконсультируем и скажем можно ли отремонтировать ваш ИБП.</p>
        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
          <a href="<?php echo home_url('/contacts/'); ?>" class="btn btn-lg" style="background:var(--gold);color:#fff;font-weight:700;border-radius:12px;padding:14px 28px">Оставить заявку</a>
          <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background:rgba(255,255,255,.1);color:white;border:1.5px solid rgba(255,255,255,.25);border-radius:12px;padding:14px 28px">Написать в Telegram</a>
        </div>
      </div>
    </div>

  </div>
</div>



<script>function toggleTheme(){const h=document.documentElement,cur=h.getAttribute('data-theme')||'light',next=cur==='dark'?'light':'dark';h.setAttribute('data-theme',next);document.getElementById('themeBtn').textContent=next==='dark'?'☀️':'🌙'}</script>

<script>
function showBrand(id){
  document.querySelectorAll('.brand-tab').forEach(function(t){t.classList.remove('active')});
  document.querySelectorAll('.brand-panel').forEach(function(p){p.classList.remove('active')});
  event.currentTarget.classList.add('active');
  document.getElementById('panel-'+id).classList.add('active');
  // Закрыть все аккордеоны при смене таба
  document.querySelectorAll('.acc-item').forEach(function(i){i.classList.remove('open')});
}
function toggleAcc(btn){
  var item=btn.closest('.acc-item');
  var panel=item.closest('.brand-panel');
  var isOpen=item.classList.contains('open');
  panel.querySelectorAll('.acc-item').forEach(function(i){i.classList.remove('open')});
  if(!isOpen) item.classList.add('open');
}
</script>


<?php get_footer(); ?>
