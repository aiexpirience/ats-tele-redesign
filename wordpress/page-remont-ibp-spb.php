<?php
/**
 * АТС ТЕЛЕКОМ — page-remont-ibp-spb.php
 * Template Name: Ремонт ИБП в СПб
 */
/*
 * Template Name: Ремонт ИБП в СПб
 */
?>
<?php get_header(); ?>
<style>

:root{--bg:#f8f7f3;--bg2:#fff;--card:#fff;--card2:#f0ede6;--border:#e5e1d8;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#1565C0;--mag-bg:rgba(34,158,217,.08);--mag-bd:rgba(34,158,217,.24);--navy:#252525;--green:#1565C0;--text:#1c2030;--text2:#4a5568;--text3:#8a93a8;--shadow-sm:0 2px 8px rgba(45,55,72,.07);--shadow:0 4px 24px rgba(45,55,72,.10);--radius:12px;--nav-h:72px;--max-w:1240px;color-scheme:light;--surface:var(--bg2);--surface2:var(--card2)}
[data-theme="dark"]{--bg:#121212;--bg2:#1a1a1a;--card:#202020;--card2:#282828;--border:#303030;--accent:#1565C0;--accent-h:#0D47A1;--accent-bg:rgba(21,101,192,.10);--accent-bd:rgba(21,101,192,.30);--mag:#42A5F5;--mag-bg:rgba(34,158,217,.12);--mag-bd:rgba(34,158,217,.28);--navy:#b8b8c8;--green:#42A5F5;--text:#e8e8f2;--text2:#9e9eb0;--text3:#6b6b7a;--shadow-sm:0 2px 8px rgba(0,0,0,.30);--shadow:0 4px 24px rgba(0,0,0,.45);color-scheme:dark;--surface:var(--bg2);--surface2:var(--card2)}
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--text);overflow-x:hidden;-webkit-font-smoothing:antialiased;transition:background.4s,color.4s}
a{color:inherit;text-decoration:none}

/* NAV */
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
.page-wrap{padding-top:var(--nav-h);min-height:100vh}
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

.hero{min-height:60vh;display:flex;align-items:center;position:relative;overflow:hidden;padding:0 32px;
  background:
    linear-gradient(135deg, var(--bg) 50%, rgba(245,243,238,0.6) 100%),
    url('https://images.unsplash.com/photo-1597852074816-d933c7d2b988?w=1400&q=85&auto=format&fit=crop') center/cover no-repeat;
}
[data-theme="dark"] .hero{
  background:
    linear-gradient(135deg, var(--bg) 55%, rgba(8,12,20,0.4) 100%),
    url('https://images.unsplash.com/photo-1597852074816-d933c7d2b988?w=1400&q=85&auto=format&fit=crop') center/cover no-repeat;
}
.hero-canvas{position:absolute;inset:0;pointer-events:none;overflow:hidden}
.hero-orb{position:absolute;border-radius:50%;filter:blur(80px);opacity:.5}
.hero-orb-1{width:600px;height:600px;background:radial-gradient(circle,rgba(34,158,217,.35) 0%,transparent 70%);top:-200px;right:-100px;animation:orbFloat1 12s ease-in-out infinite}
.hero-orb-2{width:400px;height:400px;background:radial-gradient(circle,rgba(26,86,219,.2) 0%,transparent 70%);bottom:-100px;left:-50px;animation:orbFloat2 15s ease-in-out infinite}
.hero-orb-3{width:300px;height:300px;background:radial-gradient(circle,rgba(34,158,217,.15) 0%,transparent 70%);top:40%;left:40%;animation:orbFloat3 18s ease-in-out infinite}
[data-theme="dark"] .hero-orb-1{opacity:.35}[data-theme="dark"] .hero-orb-2{opacity:.25}
@keyframes orbFloat1{0%,100%{transform:translate(0,0) scale(1)}33%{transform:translate(-40px,30px) scale(1.05)}66%{transform:translate(20px,-20px) scale(.95)}}
@keyframes orbFloat2{0%,100%{transform:translate(0,0)}50%{transform:translate(30px,-40px)}}
@keyframes orbFloat3{0%,100%{transform:translate(0,0)}50%{transform:translate(-20px,30px)}}
.hero-grid-tex{position:absolute;inset:0;background-image:linear-gradient(rgba(0,0,0,.02) 1px,transparent 1px),linear-gradient(90deg,rgba(0,0,0,.02) 1px,transparent 1px);background-size:60px 60px}
[data-theme="dark"] .hero-grid-tex{background-image:linear-gradient(rgba(255,255,255,.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.025) 1px,transparent 1px)}
.hero-accent-line{position:absolute;width:2px;height:200px;background:linear-gradient(180deg,transparent,var(--accent),transparent);top:15%;right:20%;transform:rotate(25deg);opacity:.35}
.hero-inner{max-width:var(--max-w);margin:0 auto;width:100%;padding:calc(var(--nav-h) + 64px) 0 80px;display:grid;grid-template-columns:1fr 400px;gap:80px;align-items:center;position:relative;z-index:2}
.hero-tag{display:inline-flex;align-items:center;gap:8px;padding:6px 16px;border-radius:100px;background:var(--accent-bg);border:1px solid var(--accent-bd);font-size:11px;font-weight:600;color:var(--accent);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:28px}
.hero-dot{width:6px;height:6px;border-radius:50%;background:var(--accent);animation:blink 2s ease-in-out infinite}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}
.hero-h1{font-family:'Inter',sans-serif;font-size:clamp(44px,6.2vw,84px);line-height:.95;letter-spacing:-2.5px;font-weight:800;color:var(--text);margin-bottom:24px}
.hero-h1.gold{color:var(--accent)}
.hero-h1.sub{display:block;font-size:.3em;font-weight:500;letter-spacing:0;line-height:1.4;color:var(--text3);margin-top:14px;font-family:'Inter',sans-serif}
.hero-desc{font-size:15.5px;line-height:1.78;color:var(--text2);max-width:500px;margin-bottom:36px}

.btn-gold{padding:14px 28px;border-radius:12px;background:var(--accent);color:#fff;font-size:14px;font-weight:700;transition:all.25s;display:inline-flex;align-items:center;gap:8px;border:none;cursor:pointer;font-family:'Inter',sans-serif;white-space:nowrap}
.btn-gold:hover{background:var(--accent-h);transform:translateY(-2px);box-shadow:0 12px 32px rgba(34,158,217,.45)}
.btn-ghost{padding:14px 28px;border-radius:12px;background:transparent;border:1.5px solid var(--border2);color:var(--text2);font-size:14px;font-weight:600;transition:all.25s;display:inline-flex;align-items:center;gap:8px;cursor:pointer;font-family:'Inter',sans-serif;white-space:nowrap}
.btn-ghost:hover{border-color:var(--accent);color:var(--accent);background:var(--accent-bg);transform:translateY(-2px)}


.hstat:hover{background:var(--surface2)}


.hero-services{display:flex;flex-direction:column;gap:8px}
.svc-link{display:flex;align-items:center;gap:14px;padding:15px 18px;background:var(--surface);border:1px solid var(--border);border-radius:14px;transition:all.22s;position:relative;overflow:hidden}
.svc-link::before{content:'';position:absolute;left:0;top:0;bottom:0;width:3px;background:var(--accent);transform:scaleY(0);transition:transform.25s;transform-origin:bottom;border-radius:0 2px 2px 0}
.svc-link:hover{border-color:var(--accent-bd);background:var(--accent-bg);transform:translateX(4px);box-shadow:var(--shadow)}
.svc-link:hover::before{transform:scaleY(1)}
.svc-link.mag:hover{border-color:rgba(34,158,217,.3);background:rgba(34,158,217,.06)}
.svc-link.mag::before{background:var(--mag)}
.svc-icon{width:40px;height:40px;border-radius:10px;background:var(--surface2);display:flex;align-items:center;justify-content:center;font-size:17px;flex-shrink:0;transition:background.2s}
.svc-link:hover.svc-icon{background:rgba(34,158,217,.15)}
.svc-link.mag:hover.svc-icon{background:rgba(34,158,217,.1)}
.svc-name{font-size:13px;font-weight:600;color:var(--text)}
.svc-sub{font-size:11.5px;color:var(--text3);margin-top:2px}
.svc-arr{margin-left:auto;font-size:15px;color:var(--text3);transition:all.2s}
.svc-link:hover.svc-arr{color:var(--accent);transform:translateX(4px)}
.svc-link.mag:hover.svc-arr{color:var(--mag)}

/* SECTIONS */
.section{padding:96px 32px;max-width:var(--max-w);margin:0 auto}
.section-tag{display:inline-flex;align-items:center;gap:8px;font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:var(--accent);margin-bottom:16px}
.section-tag::before{content:'';display:block;width:24px;height:2px;background:var(--accent);border-radius:1px}
.section-title{font-family:'Inter',sans-serif;font-size:clamp(28px,3.5vw,52px);font-weight:800;line-height:1.05;letter-spacing:-1px;color:var(--text);margin-bottom:14px}
.section-sub{font-size:16px;line-height:1.75;color:var(--text2);max-width:560px}
.divider{height:1px;background:var(--border)}

/* ADVANTAGES */
.adv-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:52px}
.adv-card{padding:28px;background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);transition:all.3s;position:relative;overflow:hidden}
.adv-card::after{content:'';position:absolute;inset:0;border-radius:var(--radius-lg);background:linear-gradient(135deg,var(--accent-bg) 0%,transparent 60%);opacity:0;transition:opacity.3s}
.adv-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);border-color:var(--accent-bd)}
.adv-card:hover::after{opacity:1}
.adv-num{position:absolute;top:24px;right:24px;font-family:'Inter',sans-serif;font-size:48px;font-weight:800;color:var(--border2);line-height:1;transition:color.3s;pointer-events:none}
[data-theme="dark"] .adv-num{color:rgba(255,255,255,.04)}
.adv-ico{font-size:30px;margin-bottom:16px;position:relative;z-index:1}
.adv-title{font-size:15px;font-weight:700;color:var(--text);margin-bottom:8px;position:relative;z-index:1}
.adv-text{font-size:13px;line-height:1.7;color:var(--text3);position:relative;z-index:1}
.adv-note{font-size:11px;color:var(--text3);margin-top:10px;padding-top:10px;border-top:1px solid var(--border);line-height:1.5;font-style:italic;position:relative;z-index:1}

/* FORM */
.form-section{background:var(--surface2);border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
.form-inner{max-width:var(--max-w);margin:0 auto;padding:80px 32px;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.eyebrow-num{font-family:'Inter',sans-serif;font-size:80px;font-weight:800;color:var(--border2);line-height:1;margin-bottom:-8px}
[data-theme="dark"] .eyebrow-num{color:rgba(255,255,255,.05)}
.form-features{display:flex;flex-direction:column;gap:14px;margin-top:28px}
.form-feat{display:flex;align-items:center;gap:12px;font-size:14px;color:var(--text2)}
.form-feat-dot{width:8px;height:8px;border-radius:50%;background:var(--accent);flex-shrink:0}
.form-card{background:var(--surface);border:1px solid var(--border2);border-radius:var(--radius-lg);padding:36px;box-shadow:var(--shadow-lg)}
.form-field{display:flex;flex-direction:column;gap:7px;margin-bottom:16px}
.form-label{font-size:11.5px;font-weight:600;color:var(--text3);letter-spacing:.5px;text-transform:uppercase}
.form-input{padding:13px 16px;background:var(--surface2);border:1.5px solid var(--border2);border-radius:10px;font-size:14px;font-family:'Inter',sans-serif;color:var(--text);transition:border-color.2s,background.2s,box-shadow.2s;outline:none;width:100%}
.form-input:focus{border-color:var(--accent);background:var(--surface);box-shadow:0 0 0 3px var(--accent-bg)}
.form-input::placeholder{color:var(--text3)}
.form-textarea{resize:vertical;min-height:96px;line-height:1.6}
.form-file-label{display:flex;align-items:center;gap:10px;padding:13px 16px;background:var(--surface2);border:1.5px dashed var(--border2);border-radius:10px;cursor:pointer;transition:all.2s}
.form-file-label:hover{border-color:var(--accent);background:var(--accent-bg)}
.form-note{font-size:11.5px;color:var(--text3);line-height:1.6;margin-bottom:20px}
.form-input.error{border-color:#229ED9;background:rgba(229,62,62,.04)}

/* PROCESS */
.process-wrap{display:grid;grid-template-columns:repeat(3,1fr);gap:0;position:relative;margin-top:56px}
.process-wrap::before{content:'';position:absolute;top:36px;left:calc(100%/6);right:calc(100%/6);height:1px;background:linear-gradient(90deg,transparent,var(--accent),transparent);opacity:.4}
.proc-item{text-align:center;padding:0 24px}
.proc-circle{width:72px;height:72px;border-radius:50%;background:var(--surface);border:1.5px solid var(--border2);display:flex;align-items:center;justify-content:center;margin:0 auto 20px;position:relative;z-index:1;transition:all.3s;font-family:'Inter',sans-serif;font-size:22px;font-weight:800;color:var(--text3)}
.proc-item:hover.proc-circle{background:var(--accent);color:#fff;border-color:var(--accent);box-shadow:0 8px 24px rgba(34,158,217,.4);transform:scale(1.08)}
.proc-title{font-family:'Inter',sans-serif;font-size:15px;font-weight:700;color:var(--text);margin-bottom:8px}
.proc-text{font-size:13px;color:var(--text3);line-height:1.6}

/* CTA */
.cta-section{background:var(--navy);position:relative;overflow:hidden}
[data-theme="dark"] .cta-section{background:var(--surface2)}
.cta-bg{position:absolute;inset:0;background-image:radial-gradient(circle at 20% 50%,rgba(34,158,217,.12) 0%,transparent 50%),radial-gradient(circle at 80% 20%,rgba(26,86,219,.1) 0%,transparent 40%)}
[data-theme="dark"] .cta-bg{background-image:radial-gradient(circle at 20% 50%,rgba(34,158,217,.07) 0%,transparent 50%),radial-gradient(circle at 80% 20%,rgba(26,86,219,.07) 0%,transparent 40%)}
.cta-grid{position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.025) 1px,transparent 1px);background-size:48px 48px}
.cta-inner{max-width:var(--max-w);margin:0 auto;padding:96px 32px;position:relative;z-index:2;display:flex;align-items:center;justify-content:space-between;gap:60px}
.cta-title{font-family:'Inter',sans-serif;font-size:clamp(32px,4vw,56px);font-weight:800;letter-spacing:-1px;color:white;line-height:1.05;margin-bottom:16px}
[data-theme="dark"] .cta-title{color:var(--text)}
.cta-title.gold{color:var(--accent)}
.cta-sub{font-size:16px;line-height:1.7;color:rgba(255,255,255,.5);max-width:480px}
[data-theme="dark"] .cta-sub{color:var(--text2)}
.cta-actions{display:flex;flex-direction:column;gap:12px;flex-shrink:0}
.btn-white{padding:16px 32px;border-radius:12px;background:white;color:#0D0F14;font-size:15px;font-weight:700;transition:all.25s;display:inline-flex;align-items:center;gap:10px;white-space:nowrap;font-family:'Inter',sans-serif;border:none;cursor:pointer}
.btn-white:hover{transform:translateY(-2px);box-shadow:0 12px 32px rgba(0,0,0,.3)}
[data-theme="dark"] .btn-white{background:var(--accent);color:#fff}
.btn-outline-w{padding:16px 32px;border-radius:12px;background:transparent;color:rgba(255,255,255,.75);border:1.5px solid rgba(255,255,255,.2);font-size:15px;font-weight:600;transition:all.25s;display:inline-flex;align-items:center;gap:10px;white-space:nowrap;font-family:'Inter',sans-serif}
.btn-outline-w:hover{border-color:var(--accent);color:var(--accent);background:var(--accent-bg);transform:translateY(-2px)}
[data-theme="dark"] .btn-outline-w{color:var(--text2);border-color:var(--border2)}

/* BRANDS */
.brands-section{background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:40px 32px}
.brands-header{max-width:var(--max-w);margin:0 auto 24px;display:flex;align-items:center;gap:16px}
.brands-label{font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:var(--text3);white-space:nowrap}
.brands-line{flex:1;height:1px;background:var(--border)}
.brands-pills{max-width:var(--max-w);margin:0 auto;display:flex;flex-wrap:wrap;gap:8px}
.brand-pill{padding:8px 18px;border-radius:100px;background:var(--surface2);border:1px solid var(--border);font-size:12.5px;font-weight:600;color:var(--text2);transition:all.2s;cursor:default}
.brand-pill:hover{border-color:var(--accent-bd);color:var(--accent);background:var(--accent-bg)}
.brand-pill.featured{border-color:var(--accent-bd);color:var(--accent);background:var(--accent-bg);font-weight:700}

/* FOOTER */
.footer{background:var(--navy);padding:64px 32px 28px;border-top:1px solid rgba(34,158,217,.2)}
[data-theme="dark"] .footer{background:var(--surface)}
.footer-inner{max-width:var(--max-w);margin:0 auto}
.footer-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr 1fr;gap:20px;padding-bottom:40px;border-bottom:1px solid rgba(255,255,255,.08);margin-bottom:24px}
[data-theme="dark"] .footer-top{border-bottom-color:var(--border)}
.footer-brand{font-family:'Inter',sans-serif;font-size:13px;font-weight:800;color:white;line-height:1.2}
[data-theme="dark"] .footer-brand{color:var(--text)}
.footer-brand span{color:var(--accent);display:block;font-size:10.5px;font-weight:500;margin-top:3px;letter-spacing:.5px}
.footer-desc{font-size:13px;line-height:1.7;color:rgba(255,255,255,.4);margin:14px 0 20px;max-width:260px}
[data-theme="dark"] .footer-desc{color:var(--text3)}
.footer-socials{display:flex;gap:8px}
.footer-social{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:15px;transition:all.2s;border:1px solid rgba(255,255,255,.1)}
[data-theme="dark"] .footer-social{border-color:var(--border)}
.footer-social:hover{border-color:var(--accent);background:var(--accent-bg)}
.footer-col h4{font-size:10px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.3);margin-bottom:14px}
[data-theme="dark"] .footer-col h4{color:var(--text3)}
.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:8px}
.footer-col a{font-size:13px;color:rgba(255,255,255,.45);transition:color.15s}
[data-theme="dark"] .footer-col a{color:var(--text3)}
.footer-col a:hover{color:var(--accent)}
.footer-bottom{display:flex;justify-content:space-between;font-size:12px;color:rgba(255,255,255,.22)}
[data-theme="dark"] .footer-bottom{color:var(--text3)}

/* FLOAT */
.float-wrap{position:fixed;bottom:28px;right:28px;z-index:800;display:flex;flex-direction:column;gap:10px}
.float-btn{width:50px;height:50px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow-lg);transition:all.25s}
.float-btn:hover{transform:scale(1.12)}
.float-tg{background:#229ED9}.float-wa{background:#25D366}

/* ANIMATIONS */
.fade-up{opacity:0;transform:translateY(20px);animation:fadeUp.65s ease forwards}
.d1{animation-delay:.08s}.d2{animation-delay:.16s}.d3{animation-delay:.24s}.d4{animation-delay:.32s}.d5{animation-delay:.42s}
@keyframes fadeUp{to{opacity:1;transform:translateY(0)}}

/* RESPONSIVE */
@media(max-width:1000px){
 .hero-inner{grid-template-columns:1fr}.hero-services{display:none}
 .adv-grid{grid-template-columns:1fr 1fr}
 .form-inner{grid-template-columns:1fr;gap:20px}
 .process-wrap{grid-template-columns:1fr;gap:32px}.process-wrap::before{display:none}
 .cta-inner{flex-direction:column;text-align:center}.cta-actions{flex-direction:row;justify-content:center;flex-wrap:wrap}
 .footer-top{grid-template-columns:2fr 1fr 1fr 1fr 1fr;gap:20px}
 .nav-links{display:none}.nav-phone-btn{display:none}.nav-tg-btn{display:none}.burger{display:flex}
}
@media(max-width:600px){
 :root{--nav-h:64px}
 .hero{padding:0 20px}.hero-h1{font-size:clamp(36px,10vw,52px);letter-spacing:-1.5px}
 .adv-grid{grid-template-columns:1fr}
 .section{padding:64px 20px}.form-inner{padding:56px 20px}.cta-inner{padding:64px 20px}
 .footer-top{grid-template-columns:1fr;gap:24px}.footer-bottom{flex-direction:column;gap:6px}
 .nav-inner{padding:0 16px}.brands-section{padding:28px 20px}
 
 .hero-btns.btn-gold,.hero-btns.btn-ghost{width:100%;justify-content:center}
}

/* SEO PAGE SPECIFIC */
.seo-hero{
  padding:calc(var(--nav-h) + 56px) 32px 56px;
  background:var(--bg);
  position:relative;
  overflow:hidden;
}
.seo-hero-bg{
  position:absolute;inset:0;
  background:
    radial-gradient(ellipse 50% 70% at 100% 0%, rgba(34,158,217,.12) 0%, transparent 60%),
    radial-gradient(ellipse 40% 50% at 0% 100%, rgba(34,158,217,.07) 0%, transparent 60%);
  pointer-events:none;
}
.seo-hero-inner{max-width:var(--max-w);margin:0 auto;position:relative;z-index:1}
.seo-hero-grid{
  display:grid;grid-template-columns:1fr 340px;
  gap:64px;align-items:start;margin-top:32px;
}
.seo-eyebrow{
  display:inline-flex;align-items:center;gap:8px;
  padding:5px 14px;border-radius:100px;
  background:var(--accent-bg);border:1px solid var(--accent-bd);
  font-size:11px;font-weight:600;color:var(--accent);
  letter-spacing:1.5px;text-transform:uppercase;
  margin-bottom:20px;
}
.seo-h1{
  font-family:'Inter',sans-serif;
  font-size:clamp(32px,4.5vw,60px);
  line-height:1.04;letter-spacing:-1.5px;
  font-weight:800;color:var(--text);
  margin-bottom:18px;
}
.seo-intro{
  font-size:15.5px;line-height:1.78;
  color:var(--text2);max-width:560px;
  margin-bottom:28px;
}
.seo-btns{display:flex;gap:12px;flex-wrap:wrap}

/* Works list */
.works-list{list-style:none;display:flex;flex-direction:column;gap:8px;margin-top:8px}
.works-list li{
  padding:14px 18px;
  background:var(--surface);
  border:1px solid var(--border);
  border-radius:12px;
  font-size:13.5px;color:var(--text2);
  line-height:1.5;transition:all .2s;
  display:flex;flex-direction:column;gap:3px;
}
.works-list li:hover{border-color:var(--accent-bd);background:var(--accent-bg)}
.works-list li strong{
  color:var(--text);font-weight:700;
  font-family:monospace;font-size:12.5px;
}

/* Sidebar card */
.seo-sidebar{display:flex;flex-direction:column;gap:14px;position:sticky;top:calc(var(--nav-h) + 20px)}
.sidebar-card{
  background:var(--surface);
  border:1px solid var(--border2);
  border-radius:var(--radius-lg);
  padding:24px;
}
.sidebar-price{
  font-family:'Inter',sans-serif;
  font-size:38px;font-weight:800;
  color:var(--accent);line-height:1;
}
.sidebar-perks{list-style:none;display:flex;flex-direction:column;gap:9px;margin-top:14px}
.sidebar-perks li{
  font-size:13px;color:var(--text2);
  display:flex;align-items:center;gap:8px;
}
.sidebar-perks li::before{
  content:'✓';color:var(--accent);
  font-weight:800;font-size:15px;flex-shrink:0;
}
.btn-tg{background:#229ED9;color:white}
.btn-tg:hover{background:#1a8cc7;transform:translateY(-2px)}

/* Related pills */
.related-pills{display:flex;flex-wrap:wrap;gap:8px;margin-top:24px}
.rel-pill{
  padding:8px 16px;border-radius:100px;
  background:var(--surface2);border:1px solid var(--border);
  font-size:12.5px;font-weight:600;color:var(--text2);
  transition:all .2s;
}
.rel-pill:hover,.rel-pill.active{
  border-color:var(--accent-bd);color:var(--accent);background:var(--accent-bg);
}

/* Info block */
.info-block{
  background:var(--accent-bg);
  border:1.5px solid var(--accent-bd);
  border-radius:14px;padding:18px 22px;
  font-size:14px;color:var(--text2);line-height:1.7;
  margin-top:28px;
}

/* CTA inline */
.seo-cta{
  background:var(--navy);
  border-radius:24px;padding:48px;
  display:flex;align-items:center;
  justify-content:space-between;gap:20px;
  position:relative;overflow:hidden;
  margin-top:56px;
}
[data-theme="dark"] .seo-cta{background:var(--surface2);border:1px solid var(--border)}
.seo-cta::before{
  content:'';position:absolute;
  top:-60px;right:-60px;
  width:220px;height:220px;
  background:var(--accent);opacity:.07;
  transform:rotate(45deg);border-radius:44px;
}
.seo-cta-title{
  font-family:'Inter',sans-serif;
  font-size:clamp(22px,3vw,38px);
  font-weight:800;color:white;
  letter-spacing:-1px;margin-bottom:10px;
}
[data-theme="dark"] .seo-cta-title{color:var(--text)}
.seo-cta-sub{font-size:15px;color:rgba(255,255,255,.55);line-height:1.6}
[data-theme="dark"] .seo-cta-sub{color:var(--text2)}
.seo-cta-actions{display:flex;flex-direction:column;gap:10px;flex-shrink:0}

@media(max-width:900px){
  .seo-hero-grid{grid-template-columns:1fr}
  .seo-sidebar{position:static}
  .seo-cta{flex-direction:column;text-align:center;padding:32px 24px}
  .seo-cta-actions{flex-direction:row;justify-content:center;flex-wrap:wrap}
}
@media(max-width:600px){
  .seo-hero{padding:calc(var(--nav-h) + 32px) 20px 40px}
  .seo-h1{font-size:clamp(28px,8vw,44px)}
}

/* btn-white btn-outline-w */
.btn-white{background:white;color:#0D0F14;border:none}.btn-white:hover{transform:translateY(-2px);box-shadow:0 12px 32px rgba(0,0,0,.3)}
[data-theme="dark"] .btn-white{background:var(--accent)}
.btn-outline-w{background:transparent;color:rgba(255,255,255,.75);border:1.5px solid rgba(255,255,255,.2)}.btn-outline-w:hover{border-color:var(--accent);color:var(--accent);background:var(--accent-bg)}

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


</style>
</div>
<!-- HERO -->
<div class="page-wrap">

    <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-grid"></div>
    <div class="page-hero-inner">
      <div>
        <div class="page-hero-badge"><span></span>Ремонт · Санкт-Петербург</div>
        <h1>РЕМОНТ<br><span>источников бесперебойного питания в Санкт-Петербурге</span></h1>
        <p class="page-hero-desc">Сервисный центр по ремонту источников бесперебойного питания всех марок и мощностей. Компонентный ремонт, собственный склад запчастей, выезд на объект, полный пакет документов для юрлиц.</p>
        <div class="page-hero-btns">
          <a href="tel:+79046490909" class="btn btn-lg" style="background:white;color:var(--accent);font-weight:800">📞 Позвонить</a>
          <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn btn-lg" style="background:white;color:var(--accent);font-weight:800"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
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

<!-- CONTENT -->
  <section class="section">
    <div class="seo-hero-grid">

      <!-- Список работ -->
      <div>
        <div class="section-tag">Что именно делаем</div>
        <h2 class="section-title" style="font-size:clamp(22px,2.8vw,36px)">Виды работ</h2>
        <ul class="works-list"><li><span>Ремонт и диагностика ИБП любой сложности</span><strong>APC, Eaton, Riello, CyberPower, Ippon, Штиль</strong></li>
<li><span>Замена аккумуляторных батарей любых типоразмеров</span><strong>склад в наличии</strong></li>
<li><span>Ремонт силовых модулей инвертора и выпрямителя</span></li>
<li><span>Диагностика и ремонт плат управления</span></li>
<li><span>Нагрузочное тестирование, гарантийный акт</span></li>
<li><span>Выезд инженера по Санкт-Петербургу и Ленобласти</span></li>
</ul>
        <div class="info-block">
          🚐 <strong>Выездная диагностика</strong> - возможна с предоставлением подменного оборудования на время ремонта вашего ИБП. В пределах Санкт-Петербурга и отдельных населённых пунктов Ленинградской области.
        </div>
      </div>

      <!-- Сайдбар -->
      <div class="seo-sidebar">
        <div class="sidebar-card">
          <div style="font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--text3);margin-bottom:12px">Стоимость ремонта</div>
          <div class="sidebar-price">от 1 500 ₽</div>
          <div style="font-size:12px;color:var(--text3);margin-top:6px;line-height:1.5">Точная стоимость - после диагностики. Называем цену до начала работ.</div>
          <div style="height:1px;background:var(--border);margin:16px 0"></div>
          <ul class="sidebar-perks">
            <li>Диагностика бесплатно *</li>
            <li>Гарантия от 3 месяцев</li>
            <li>Подменный ИБП на время ремонта</li>
            <li>Договор, счёт, акт для юрлиц</li>
          </ul>
        </div>
        <a href="<?php echo home_url('/contacts/'); ?>" class="btn-gold btn btn-lg" style="width:100%;justify-content:center">Оставить заявку →</a>
        <a href="tel:+79046490909" class="btn-ghost btn btn-lg" style="width:100%;justify-content:center">📞 Позвонить</a>
        <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn-tg btn btn-lg" style="width:100%;justify-content:center"><svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
      </div>

    </div>
  
    <div style="margin-top:24px;padding:20px;background:var(--accent-bg);border-radius:14px;border:1.5px solid var(--accent-bd)">
      <div style="font-weight:800;font-size:14px;color:var(--text);margin-bottom:10px">Страницы по конкретным брендам:</div>
      <div style="display:flex;gap:10px;flex-wrap:wrap">
        <a href="<?php echo home_url('/remont-ibp-eaton/'); ?>" style="font-size:13px;font-weight:700;color:var(--accent);padding:6px 14px;border:1.5px solid var(--accent-bd);border-radius:8px;background:var(--card);text-decoration:none">Ремонт Eaton →</a>
        <a href="<?php echo home_url('/remont-ibp-riello/'); ?>" style="font-size:13px;font-weight:700;color:var(--accent);padding:6px 14px;border:1.5px solid var(--accent-bd);border-radius:8px;background:var(--card);text-decoration:none">Ремонт Riello →</a>
        <a href="<?php echo home_url('/remont-apc-symmetra-lx/'); ?>" style="font-size:13px;font-weight:700;color:var(--accent);padding:6px 14px;border:1.5px solid var(--accent-bd);border-radius:8px;background:var(--card);text-decoration:none">APC Symmetra LX →</a>
        <a href="<?php echo home_url('/remont-apc-smart-ups/'); ?>" style="font-size:13px;font-weight:700;color:var(--accent);padding:6px 14px;border:1.5px solid var(--accent-bd);border-radius:8px;background:var(--card);text-decoration:none">APC Smart-UPS →</a>
        <a href="<?php echo home_url('/zamena-akb-ibp/'); ?>" style="font-size:13px;font-weight:700;color:var(--accent);padding:6px 14px;border:1.5px solid var(--accent-bd);border-radius:8px;background:var(--card);text-decoration:none">Замена АКБ →</a>
        <a href="<?php echo home_url('/chto-takoe-ibp/'); ?>" style="font-size:13px;font-weight:700;color:var(--accent);padding:6px 14px;border:1.5px solid var(--accent-bd);border-radius:8px;background:var(--card);text-decoration:none">База знаний ИБП →</a>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- CTA -->
  <section class="section">
    <div class="seo-cta">
      <div style="position:relative;z-index:1">
        <div class="seo-cta-title">Сломался ИБП?<br><span style="color:var(--accent)">Позвоните сейчас</span></div>
        <p class="seo-cta-sub">Диагностика бесплатно. Называем стоимость до начала ремонта. Подменный ИБП на время работ.</p>
      </div>
      <div class="seo-cta-actions" style="position:relative;z-index:1">
        <a href="tel:+79046490909" class="btn-white btn btn-lg">📞 Позвонить</a>
        <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn-outline-w btn btn-lg"><svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <!-- ДРУГИЕ СЕРИИ -->
  <section class="section" style="padding-top:48px;padding-bottom:64px">
    <div class="section-tag">Также ремонтируем</div>
    <h2 class="section-title" style="font-size:clamp(20px,2.5vw,34px);margin-bottom:8px">Другие серии APC</h2>
    <p style="font-size:14px;color:var(--text3);margin-bottom:20px">Нажмите на серию чтобы узнать подробности</p>
    <div class="related-pills"><a href="<?php echo home_url('/remont-apc-symmetra-lx/'); ?>" class="rel-pill">APC Symmetra LX</a>
<a href="<?php echo home_url('/remont-apc-symmetra-rm/'); ?>" class="rel-pill">APC Symmetra RM</a>
<a href="<?php echo home_url('/remont-apc-symmetra-px/'); ?>" class="rel-pill">APC Symmetra PX</a>
<a href="<?php echo home_url('/remont-apc-symmetra-vt/'); ?>" class="rel-pill">APC Symmetra VT</a>
<a href="<?php echo home_url('/remont-apc-mge-galaxy/'); ?>" class="rel-pill">APC MGE Galaxy</a>
<a href="<?php echo home_url('/remont-apc-surt-surtd/'); ?>" class="rel-pill">APC SURT / SURTD</a>
<a href="<?php echo home_url('/remont-apc-srt/'); ?>" class="rel-pill">APC Smart-UPS SRT</a>
<a href="<?php echo home_url('/remont-apc-smart-ups/'); ?>" class="rel-pill">APC Smart-UPS</a>
<a href="<?php echo home_url('/zamena-akb-ibp/'); ?>" class="rel-pill">Замена АКБ</a>
<a href="<?php echo home_url('/repair/'); ?>" class="rel-pill">Все серии →</a>
</div>
  </section>

</div>



<?php get_footer(); ?>
