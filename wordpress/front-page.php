<?php
/**
 * АТС ТЕЛЕКОМ — front-page.php v2.0
 */
?>
<?php get_header(); ?>
<style>
/* ============================================================
   RESET + BASE
   ============================================================ */
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%}
body{font-family:'Inter',sans-serif;background:#F8F7F4;color:#0D0F14;overflow-x:hidden;-webkit-font-smoothing:antialiased}
a{color:inherit;text-decoration:none}
img{max-width:100%;display:block}

/* ============================================================
   CSS VARIABLES
   ============================================================ */
:root{
  --bg:#F8F7F4;
  --bg-alt:#FFFFFF;
  --dark:#0A0F1C;
  --dark2:#111827;
  --accent:#1565C0;
  --accent-h:#0D47A1;
  --accent-bg:rgba(21,101,192,.09);
  --accent-bd:rgba(21,101,192,.28);
  --text:#0D0F14;
  --text2:#454852;
  --text3:#8B95A8;
  --border:rgba(0,0,0,.08);
  --border2:rgba(0,0,0,.14);
  --shadow:0 4px 20px rgba(0,0,0,.07),0 1px 4px rgba(0,0,0,.04);
  --shadow-lg:0 20px 60px rgba(0,0,0,.12),0 6px 20px rgba(0,0,0,.06);
  --radius:14px;
  --radius-lg:20px;
  --nav-h:72px;
  --max:1240px;
  --px:40px;
}
@media(max-width:768px){:root{--px:20px;--nav-h:64px}}

/* ============================================================
   LAYOUT HELPERS
   ============================================================ */
.container{width:100%;max-width:var(--max);margin:0 auto;padding:0 var(--px)}
.section{padding:96px var(--px);max-width:var(--max);margin:0 auto}
.section--wide{padding:96px 0;max-width:100%}
@media(max-width:768px){.section,.section--wide{padding:64px var(--px)}}

/* ============================================================
   SCROLL REVEAL ANIMATIONS
   ============================================================ */
.reveal{opacity:0;transform:translateY(28px);transition:opacity .65s ease,transform .65s ease}
.reveal.visible{opacity:1;transform:translateY(0)}
.reveal[data-delay="1"]{transition-delay:.1s}
.reveal[data-delay="2"]{transition-delay:.18s}
.reveal[data-delay="3"]{transition-delay:.26s}
.reveal[data-delay="4"]{transition-delay:.34s}
.reveal[data-delay="5"]{transition-delay:.42s}
.reveal[data-delay="6"]{transition-delay:.50s}

/* ============================================================
   TYPOGRAPHY
   ============================================================ */
.section-tag{display:inline-flex;align-items:center;gap:8px;font-size:11.5px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--accent);margin-bottom:14px}
.section-tag::before{content:'';display:block;width:20px;height:2px;background:var(--accent);border-radius:1px;flex-shrink:0}
.section-tag--light{color:rgba(255,255,255,.5)}
.section-tag--light::before{background:rgba(255,255,255,.4)}
.section-h2{font-size:clamp(28px,3.8vw,52px);font-weight:800;line-height:1.06;letter-spacing:-1px;color:var(--text);margin-bottom:16px}
.section-h2--light{color:#fff}
.section-lead{font-size:17px;line-height:1.75;color:var(--text2);max-width:580px}
.section-lead--light{color:rgba(255,255,255,.55)}

/* ============================================================
   BUTTONS
   ============================================================ */
.btn{display:inline-flex;align-items:center;gap:9px;padding:14px 28px;border-radius:12px;font-family:'Inter',sans-serif;font-size:14.5px;font-weight:700;transition:all .22s;cursor:pointer;border:none;white-space:nowrap;text-decoration:none}
.btn-primary{background:var(--accent);color:#fff}
.btn-primary:hover{background:var(--accent-h);transform:translateY(-2px);box-shadow:0 10px 28px rgba(21,101,192,.38)}
.btn-secondary{background:transparent;color:var(--text2);border:1.5px solid var(--border2)}
.btn-secondary:hover{border-color:var(--accent);color:var(--accent);background:var(--accent-bg)}
.btn-white{background:#fff;color:var(--dark)}
.btn-white:hover{transform:translateY(-2px);box-shadow:0 10px 28px rgba(0,0,0,.2)}
.btn-outline-light{background:transparent;color:rgba(255,255,255,.75);border:1.5px solid rgba(255,255,255,.22)}
.btn-outline-light:hover{border-color:#fff;color:#fff;background:rgba(255,255,255,.08)}
.btn-lg{padding:16px 34px;font-size:15.5px}

/* ============================================================
   HERO
   ============================================================ */
.hero{position:relative;min-height:100vh;display:flex;align-items:center;overflow:hidden;padding:0 var(--px)}
.hero-bg{
  position:absolute;inset:0;z-index:0;
  background:
    linear-gradient(135deg,rgba(10,15,28,.97) 0%,rgba(10,15,28,.80) 55%,rgba(10,15,28,.70) 100%),
    url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=1800&q=80&auto=format&fit=crop') center/cover no-repeat;
}
.hero-noise{position:absolute;inset:0;z-index:1;opacity:.025;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E")}
.hero-glow{position:absolute;width:700px;height:700px;border-radius:50%;background:radial-gradient(circle,rgba(21,101,192,.18) 0%,transparent 70%);top:-200px;right:-150px;pointer-events:none;z-index:1}
.hero-grid{position:absolute;inset:0;z-index:1;background-image:linear-gradient(rgba(255,255,255,.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.03) 1px,transparent 1px);background-size:60px 60px}

.hero-inner{max-width:var(--max);margin:0 auto;width:100%;padding:calc(var(--nav-h) + 80px) 0 80px;position:relative;z-index:3;display:grid;grid-template-columns:1fr 420px;gap:72px;align-items:center}

.hero-badge{display:inline-flex;align-items:center;gap:8px;padding:6px 14px;border-radius:100px;background:rgba(21,101,192,.15);border:1px solid rgba(21,101,192,.3);font-size:11px;font-weight:700;color:rgba(255,255,255,.7);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:24px}
.hero-dot{width:6px;height:6px;border-radius:50%;background:#4A9EE0;animation:blink 2s ease-in-out infinite;flex-shrink:0}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.25}}

.hero-h1{font-size:clamp(40px,5.5vw,72px);font-weight:800;line-height:1.0;letter-spacing:-2px;color:#fff;margin-bottom:20px}
.hero-h1 em{font-style:normal;color:#4A9EE0}
.hero-sub{font-size:17px;line-height:1.75;color:rgba(255,255,255,.6);max-width:500px;margin-bottom:14px}
.hero-promise{display:inline-flex;align-items:center;gap:8px;font-size:14px;color:rgba(255,255,255,.45);margin-bottom:36px}
.hero-promise::before{content:'✓';color:#4ade80;font-weight:700}

.hero-actions{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:48px}

.hero-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:rgba(255,255,255,.07);border-radius:16px;overflow:hidden;border:1px solid rgba(255,255,255,.07)}
.hstat{padding:18px 20px;background:rgba(255,255,255,.04);transition:background .2s}
.hstat:hover{background:rgba(255,255,255,.07)}
.hstat-num{font-size:26px;font-weight:800;color:#fff;line-height:1;margin-bottom:4px}
.hstat-label{font-size:11.5px;color:rgba(255,255,255,.4);line-height:1.4}

/* Hero right — service links */
.hero-links{display:flex;flex-direction:column;gap:10px}
.hlink{display:flex;align-items:center;gap:14px;padding:16px 18px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius);transition:all .22s;position:relative;overflow:hidden}
.hlink::before{content:'';position:absolute;left:0;top:0;bottom:0;width:3px;background:var(--accent);transform:scaleY(0);transition:transform .25s;transform-origin:bottom;border-radius:0 2px 2px 0}
.hlink:hover{background:rgba(21,101,192,.12);border-color:rgba(21,101,192,.3);transform:translateX(4px)}
.hlink:hover::before{transform:scaleY(1)}
.hlink-icon{width:42px;height:42px;border-radius:10px;background:rgba(255,255,255,.06);display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0}
.hlink-name{font-size:13.5px;font-weight:700;color:#fff}
.hlink-sub{font-size:12px;color:rgba(255,255,255,.4);margin-top:2px}
.hlink-arr{margin-left:auto;color:rgba(255,255,255,.3);font-size:16px;transition:all .2s}
.hlink:hover .hlink-arr{color:#4A9EE0;transform:translateX(3px)}

.hero-scroll{position:absolute;bottom:32px;left:50%;transform:translateX(-50%);z-index:3;display:flex;flex-direction:column;align-items:center;gap:8px;color:rgba(255,255,255,.3);font-size:11px;letter-spacing:1px;text-transform:uppercase;animation:scrollBob 2.5s ease-in-out infinite}
@keyframes scrollBob{0%,100%{transform:translateX(-50%) translateY(0)}50%{transform:translateX(-50%) translateY(6px)}}

/* ============================================================
   TRUST STRIP
   ============================================================ */
.trust-strip{background:#fff;border-bottom:1px solid var(--border);padding:20px var(--px)}
.trust-inner{max-width:var(--max);margin:0 auto;display:flex;align-items:center;gap:20px;flex-wrap:wrap}
.trust-label{font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--text3);white-space:nowrap;flex-shrink:0}
.trust-divider{width:1px;height:20px;background:var(--border2);flex-shrink:0}
.trust-brands{display:flex;flex-wrap:wrap;gap:8px}
.trust-pill{padding:6px 14px;border-radius:100px;background:var(--bg);border:1px solid var(--border);font-size:13px;font-weight:600;color:var(--text2);transition:all .2s;cursor:default}
.trust-pill:hover{border-color:var(--accent-bd);color:var(--accent);background:var(--accent-bg)}
.trust-pill.featured{border-color:var(--accent-bd);color:var(--accent);background:var(--accent-bg)}

/* ============================================================
   SYMPTOMS
   ============================================================ */
.symptoms-section{background:var(--bg)}
.symptoms-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin:40px 0 32px}
.symptom-card{padding:22px;background:#fff;border:1.5px solid var(--border);border-radius:var(--radius);display:flex;align-items:flex-start;gap:14px;transition:all .25s;cursor:default}
.symptom-card:hover{border-color:var(--accent-bd);box-shadow:var(--shadow);transform:translateY(-3px)}
.symptom-icon{font-size:24px;flex-shrink:0;margin-top:1px}
.symptom-text{font-size:14.5px;font-weight:600;color:var(--text);line-height:1.5}
.symptom-sub{font-size:12.5px;color:var(--text3);margin-top:4px;line-height:1.5}
.symptoms-note{font-size:16px;color:var(--text2);line-height:1.7;margin-bottom:28px;padding:20px 24px;background:#fff;border-left:3px solid var(--accent);border-radius:0 var(--radius) var(--radius) 0;max-width:640px}

/* ============================================================
   RISK SECTION (dark)
   ============================================================ */
.risk-section{background:var(--dark);padding:96px var(--px)}
.risk-inner{max-width:var(--max);margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.risk-story{font-size:17px;line-height:1.85;color:rgba(255,255,255,.55)}
.risk-story p{margin-bottom:18px}
.risk-story p:last-child{margin-bottom:0}
.risk-story strong{color:#fff;font-weight:700}
.risk-callout{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);border-radius:var(--radius-lg);padding:32px;position:relative;overflow:hidden}
.risk-callout::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--accent),#4A9EE0)}
.risk-callout-label{font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.35);margin-bottom:20px}
.risk-compare{display:flex;flex-direction:column;gap:14px}
.risk-row{display:flex;justify-content:space-between;align-items:baseline;gap:16px;padding-bottom:14px;border-bottom:1px solid rgba(255,255,255,.06)}
.risk-row:last-child{border-bottom:none;padding-bottom:0}
.risk-item{font-size:13.5px;color:rgba(255,255,255,.5)}
.risk-price{font-size:17px;font-weight:800;color:#fff;white-space:nowrap}
.risk-price.accent{color:#4ade80}
.risk-note{font-size:12px;color:rgba(255,255,255,.3);margin-top:20px;padding-top:16px;border-top:1px solid rgba(255,255,255,.06);line-height:1.6}

/* ============================================================
   RENTAL FUND
   ============================================================ */
.rental-section{background:var(--bg-alt)}
.rental-inner{max-width:var(--max);margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.rental-visual{position:relative}
.rental-big-num{font-size:clamp(100px,14vw,180px);font-weight:800;line-height:1;color:var(--accent);opacity:.09;position:absolute;top:-20px;left:-10px;pointer-events:none;z-index:0;letter-spacing:-6px}
.rental-cards{position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:12px}
.rcard{padding:20px;background:var(--bg);border:1px solid var(--border);border-radius:var(--radius);text-align:center;transition:all .25s}
.rcard:hover{border-color:var(--accent-bd);background:var(--accent-bg)}
.rcard-num{font-size:28px;font-weight:800;color:var(--accent);line-height:1;margin-bottom:4px}
.rcard-label{font-size:12px;color:var(--text3);line-height:1.4}
.rental-content .section-lead{margin-bottom:28px}
.rental-feature{display:flex;align-items:flex-start;gap:12px;padding:14px 0;border-bottom:1px solid var(--border)}
.rental-feature:last-of-type{border-bottom:none}
.rental-feature-icon{width:36px;height:36px;border-radius:9px;background:var(--accent-bg);border:1px solid var(--accent-bd);display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0}
.rental-feature-text{font-size:14px;color:var(--text2);line-height:1.6}
.rental-feature-text strong{color:var(--text);display:block;font-size:14px;font-weight:700;margin-bottom:2px}

/* ============================================================
   PROCESS
   ============================================================ */
.process-section{background:var(--bg)}
.process-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:0;margin-top:52px;position:relative}
.process-grid::before{content:'';position:absolute;top:44px;left:calc(100%/6);right:calc(100%/6);height:1px;background:linear-gradient(90deg,transparent,var(--accent-bd),transparent)}
.proc{padding:0 28px;text-align:center}
.proc-num{width:88px;height:88px;border-radius:50%;background:#fff;border:2px solid var(--border2);display:flex;align-items:center;justify-content:center;margin:0 auto 24px;font-size:28px;font-weight:800;color:var(--text3);position:relative;z-index:1;transition:all .3s}
.proc:hover .proc-num{background:var(--accent);color:#fff;border-color:var(--accent);box-shadow:0 8px 24px rgba(21,101,192,.3)}
.proc-title{font-size:17px;font-weight:700;color:var(--text);margin-bottom:12px}
.proc-text{font-size:13.5px;color:var(--text3);line-height:1.7}
.proc-tag{display:inline-block;margin-top:12px;padding:4px 10px;border-radius:100px;background:var(--accent-bg);border:1px solid var(--accent-bd);font-size:11px;font-weight:700;color:var(--accent)}

/* ============================================================
   ABOUT
   ============================================================ */
.about-section{background:var(--bg-alt)}
.about-inner{max-width:var(--max);margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.about-stats{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:32px}
.astat{padding:22px;background:var(--bg);border:1px solid var(--border);border-radius:var(--radius);transition:all .25s}
.astat:hover{border-color:var(--accent-bd);transform:translateY(-2px);box-shadow:var(--shadow)}
.astat-num{font-size:32px;font-weight:800;color:var(--accent);line-height:1;margin-bottom:4px}
.astat-label{font-size:12.5px;color:var(--text3);line-height:1.4}
.about-text{font-size:15.5px;line-height:1.85;color:var(--text2)}
.about-text p{margin-bottom:18px}
.about-text p:last-child{margin-bottom:0}
.about-text strong{color:var(--text);font-weight:700}
.about-photo{border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-lg);position:relative}
.about-photo img{width:100%;height:380px;object-fit:cover;display:block}
.about-photo-badge{position:absolute;bottom:16px;left:16px;right:16px;background:rgba(10,15,28,.88);backdrop-filter:blur(12px);border-radius:12px;padding:14px 16px;border:1px solid rgba(74,158,224,.25)}
.about-photo-badge-title{font-size:15px;font-weight:800;color:#fff;margin-bottom:3px}
.about-photo-badge-sub{font-size:12px;color:rgba(255,255,255,.5)}

/* ============================================================
   FORM
   ============================================================ */
.form-section{background:var(--dark2);padding:96px var(--px)}
.form-inner{max-width:var(--max);margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.form-lede{font-size:16px;line-height:1.8;color:rgba(255,255,255,.5);max-width:420px;margin-bottom:32px}
.form-perks{display:flex;flex-direction:column;gap:12px}
.fperk{display:flex;align-items:center;gap:12px;font-size:14px;color:rgba(255,255,255,.55)}
.fperk::before{content:'✓';color:#4ade80;font-size:15px;font-weight:800;flex-shrink:0}
.form-card{background:#fff;border-radius:var(--radius-lg);padding:36px;box-shadow:0 24px 64px rgba(0,0,0,.3)}
.form-field{display:flex;flex-direction:column;gap:6px;margin-bottom:16px}
.form-label{font-size:11px;font-weight:700;color:var(--text3);letter-spacing:.8px;text-transform:uppercase}
.form-input{padding:13px 16px;background:var(--bg);border:1.5px solid var(--border2);border-radius:10px;font-size:14.5px;font-family:'Inter',sans-serif;color:var(--text);transition:border-color .2s,box-shadow .2s;outline:none;width:100%}
.form-input:focus{border-color:var(--accent);background:#fff;box-shadow:0 0 0 3px var(--accent-bg)}
.form-input::placeholder{color:var(--text3)}
.form-textarea{resize:vertical;min-height:100px;line-height:1.6}
.form-file-label{display:flex;align-items:center;gap:10px;padding:12px 16px;background:var(--bg);border:1.5px dashed var(--border2);border-radius:10px;cursor:pointer;transition:all .2s;font-size:13.5px;color:var(--text3)}
.form-file-label:hover{border-color:var(--accent);background:var(--accent-bg);color:var(--accent)}
.form-note{font-size:11.5px;color:var(--text3);line-height:1.6;margin-bottom:20px}
.form-submit{width:100%;justify-content:center;font-size:15.5px;padding:16px;border-radius:12px}
.form-success{display:none;text-align:center;padding:40px 20px}
.form-success-icon{font-size:56px;margin-bottom:16px}
.form-success-title{font-size:22px;font-weight:800;color:var(--text);margin-bottom:10px}
.form-success-text{font-size:14.5px;color:var(--text2);line-height:1.7}

/* ============================================================
   EXTRA SERVICES
   ============================================================ */
.services-section{background:var(--bg)}
.services-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-top:44px}
.svc-card{padding:26px;background:#fff;border:1px solid var(--border);border-radius:var(--radius);transition:all .28s;display:flex;flex-direction:column}
.svc-card:hover{border-color:var(--accent-bd);box-shadow:var(--shadow-lg);transform:translateY(-4px)}
.svc-card-icon{font-size:28px;margin-bottom:14px}
.svc-card-title{font-size:16px;font-weight:700;color:var(--text);margin-bottom:8px}
.svc-card-text{font-size:13.5px;color:var(--text3);line-height:1.65;flex:1}
.svc-card-link{margin-top:16px;font-size:13px;font-weight:700;color:var(--accent);display:inline-flex;align-items:center;gap:5px;transition:gap .2s}
.svc-card:hover .svc-card-link{gap:8px}

/* ============================================================
   BRANDS
   ============================================================ */
.brands-section{background:#fff;border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:44px var(--px)}
.brands-inner{max-width:var(--max);margin:0 auto}
.brands-header{display:flex;align-items:center;gap:16px;margin-bottom:20px}
.brands-label{font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--text3);white-space:nowrap}
.brands-line{flex:1;height:1px;background:var(--border)}
.brands-pills{display:flex;flex-wrap:wrap;gap:8px}
.brand-pill{padding:9px 20px;border-radius:100px;background:var(--bg);border:1px solid var(--border);font-size:13.5px;font-weight:600;color:var(--text2);transition:all .2s;cursor:default}
.brand-pill:hover{border-color:var(--accent-bd);color:var(--accent);background:var(--accent-bg)}
.brand-pill.featured{border-color:var(--accent-bd);color:var(--accent);background:var(--accent-bg)}

/* ============================================================
   FAQ
   ============================================================ */
.faq-section{background:var(--bg)}
.faq-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-top:44px;align-items:start}
.faq-item{background:#fff;border:1px solid var(--border);border-radius:var(--radius);overflow:hidden;transition:border-color .2s}
.faq-item.open{border-color:var(--accent-bd)}
.faq-q{display:flex;justify-content:space-between;align-items:center;gap:14px;padding:20px 22px;cursor:pointer;font-size:15px;font-weight:600;color:var(--text);line-height:1.45;user-select:none}
.faq-q:hover{color:var(--accent)}
.faq-icon{width:24px;height:24px;border-radius:50%;background:var(--bg);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:14px;color:var(--text3);flex-shrink:0;transition:all .25s}
.faq-item.open .faq-icon{background:var(--accent);border-color:var(--accent);color:#fff;transform:rotate(45deg)}
.faq-a{max-height:0;overflow:hidden;transition:max-height .35s ease,padding .35s ease;font-size:14px;line-height:1.75;color:var(--text2)}
.faq-a-inner{padding:0 22px 20px}
.faq-item.open .faq-a{max-height:400px}

/* ============================================================
   FINAL CTA
   ============================================================ */
.cta-section{background:var(--dark);padding:96px var(--px);position:relative;overflow:hidden}
.cta-glow{position:absolute;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(21,101,192,.14) 0%,transparent 70%);top:-200px;right:-100px;pointer-events:none}
.cta-grid-bg{position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.025) 1px,transparent 1px);background-size:52px 52px}
.cta-inner{max-width:var(--max);margin:0 auto;position:relative;z-index:2;display:grid;grid-template-columns:1fr auto;gap:60px;align-items:center}
.cta-h2{font-size:clamp(32px,4.5vw,60px);font-weight:800;line-height:1.05;letter-spacing:-1.5px;color:#fff;margin-bottom:16px}
.cta-h2 em{font-style:normal;color:#4A9EE0}
.cta-sub{font-size:16px;color:rgba(255,255,255,.45);line-height:1.7;max-width:480px}
.cta-actions{display:flex;flex-direction:column;gap:12px;flex-shrink:0}

/* ============================================================
   FLOATING BUTTONS
   ============================================================ */
.float-wrap{position:fixed;bottom:28px;right:28px;z-index:900;display:flex;flex-direction:column;gap:10px}
.float-btn{width:52px;height:52px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 20px rgba(0,0,0,.25);transition:all .25s;font-size:22px}
.float-btn:hover{transform:scale(1.1)}
.float-tg{background:#229ED9}
.float-wa{background:#25D366}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media(max-width:1080px){
  .hero-inner{grid-template-columns:1fr;gap:40px}
  .hero-links{display:none}
  .risk-inner,.rental-inner,.about-inner,.form-inner,.cta-inner{grid-template-columns:1fr;gap:48px}
  .cta-inner{grid-template-columns:1fr}
  .cta-actions{flex-direction:row;flex-wrap:wrap}
  .services-grid{grid-template-columns:1fr 1fr}
  .faq-grid{grid-template-columns:1fr}
}
@media(max-width:768px){
  .symptoms-grid{grid-template-columns:1fr 1fr}
  .process-grid{grid-template-columns:1fr;gap:32px}
  .process-grid::before{display:none}
  .about-stats{grid-template-columns:1fr 1fr}
  .rental-cards{grid-template-columns:repeat(2,1fr)}
  .rental-big-num{font-size:120px}
  .hero-stats{grid-template-columns:repeat(3,1fr)}
  .hero-h1{font-size:clamp(36px,9vw,52px);letter-spacing:-1.5px}
}
@media(max-width:520px){
  .symptoms-grid{grid-template-columns:1fr}
  .hero-actions{flex-direction:column}
  .hero-actions .btn{width:100%;justify-content:center}
  .hero-stats{grid-template-columns:1fr 1fr}
  .services-grid{grid-template-columns:1fr}
  .trust-inner{flex-direction:column;align-items:flex-start}
  .trust-divider{display:none}
}
</style>

<?php /* ============================================================
   SCHEMA.ORG JSON-LD
   ============================================================ */ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "АТС ТЕЛЕКОМ",
  "legalName": "ООО \"АТС Телеком\"",
  "description": "Специализированный сервисный центр по ремонту ИБП, продаже, аренде и выкупу оборудования. Телефония и ВКС. Работаем с 2009 года в Санкт-Петербурге.",
  "url": "https://ats-tele.com/",
  "telephone": "+78121234567",
  "email": "atstelecomspb@yandex.ru",
  "foundingDate": "2009",
  "priceRange": "₽₽",
  "openingHours": "Mo-Sa 10:00-20:00",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "ул. Розенштейна, д. 34",
    "addressLocality": "Санкт-Петербург",
    "postalCode": "198095",
    "addressCountry": "RU"
  },
  "geo": {"@type": "GeoCoordinates","latitude": 59.8967,"longitude": 30.2743},
  "sameAs": ["https://t.me/atstelecom"],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "47",
    "bestRating": "5"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Услуги АТС ТЕЛЕКОМ",
    "itemListElement": [
      {"@type":"Offer","itemOffered":{"@type":"Service","name":"Ремонт ИБП","description":"Компонентный ремонт источников бесперебойного питания 1–250 кВт. Бесплатная диагностика."}},
      {"@type":"Offer","itemOffered":{"@type":"Service","name":"Аренда ИБП","description":"Подменный фонд 20+ единиц от 1 до 250 кВт на время ремонта или для временных задач."}},
      {"@type":"Offer","itemOffered":{"@type":"Service","name":"Выкуп оборудования"}},
      {"@type":"Offer","itemOffered":{"@type":"Service","name":"IP-телефония"}}
    ]
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Сколько стоит ремонт ИБП?","acceptedAnswer":{"@type":"Answer","text":"Диагностика бесплатная. Стоимость ремонта называем до начала работ — после осмотра. Ориентировочно: замена АКБ от 2 500 ₽, ремонт платы управления от 3 500 ₽, ремонт силовой части от 5 000 ₽. Точная цена зависит от модели и неисправности."}},
    {"@type":"Question","name":"Как долго занимает ремонт?","acceptedAnswer":{"@type":"Answer","text":"Большинство неисправностей устраняем в день обращения. Сложные случаи — 2–3 рабочих дня. Если нужно ждать редкую запчасть — предупреждаем заранее."}}
  ]
}
</script>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero" id="top">
  <div class="hero-bg"></div>
  <div class="hero-noise"></div>
  <div class="hero-glow"></div>
  <div class="hero-grid"></div>

  <div class="hero-inner">
    <div>
      <div class="hero-badge"><span class="hero-dot"></span>Санкт-Петербург · с 2009 года</div>
      <h1 class="hero-h1">ИБП пищит, не включается<br>или ведёт себя <em>странно?</em></h1>
      <p class="hero-sub">Проверим и скажем, что с ним, в тот же день.<br>Сразу называем цену — без «давайте разберём, а там видно будет».</p>
      <p class="hero-promise">Работаем с юрлицами — счёт, договор, закрывающие документы</p>
      <div class="hero-actions">
        <a href="#request" class="btn btn-primary btn-lg">Оставить заявку</a>
        <a href="tel:+78121234567" class="btn btn-outline-light btn-lg">📞 Позвонить</a>
      </div>
      <div class="hero-stats">
        <div class="hstat"><div class="hstat-num">17 лет</div><div class="hstat-label">на рынке в СПб</div></div>
        <div class="hstat"><div class="hstat-num">20+</div><div class="hstat-label">подменных ИБП</div></div>
        <div class="hstat"><div class="hstat-num">0 ₽</div><div class="hstat-label">диагностика</div></div>
      </div>
    </div>

    <div class="hero-links">
      <a href="<?php echo home_url('/repair/'); ?>" class="hlink">
        <div class="hlink-icon">🔧</div>
        <div><div class="hlink-name">Ремонт ИБП</div><div class="hlink-sub">1–250 кВт · Выезд по СПб и ЛО</div></div>
        <span class="hlink-arr">→</span>
      </a>
      <a href="<?php echo home_url('/shop/'); ?>" class="hlink">
        <div class="hlink-icon">🔋</div>
        <div><div class="hlink-name">Магазин ИБП</div><div class="hlink-sub">APC, Eaton, HIDEN — новые и б/у</div></div>
        <span class="hlink-arr">→</span>
      </a>
      <a href="<?php echo home_url('/rent/'); ?>" class="hlink">
        <div class="hlink-icon">🔑</div>
        <div><div class="hlink-name">Аренда ИБП</div><div class="hlink-sub">Подменный фонд · от 1 кВт до 250 кВт</div></div>
        <span class="hlink-arr">→</span>
      </a>
      <a href="<?php echo home_url('/buyout/'); ?>" class="hlink">
        <div class="hlink-icon">🔄</div>
        <div><div class="hlink-name">Выкуп оборудования</div><div class="hlink-sub">Оценка за 1 час · Выезд и вывоз</div></div>
        <span class="hlink-arr">→</span>
      </a>
      <a href="<?php echo home_url('/telephony/'); ?>" class="hlink">
        <div class="hlink-icon">📞</div>
        <div><div class="hlink-name">IP-телефония</div><div class="hlink-sub">Panasonic, Avaya, Cisco · монтаж</div></div>
        <span class="hlink-arr">→</span>
      </a>
    </div>
  </div>

  <div class="hero-scroll">
    <span>прокрутите</span>
    <svg width="16" height="20" viewBox="0 0 16 20" fill="none"><path d="M8 1v16M2 13l6 6 6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
  </div>
</section>

<!-- ============================================================
     TRUST STRIP
     ============================================================ -->
<div class="trust-strip">
  <div class="trust-inner">
    <span class="trust-label">Ремонтируем</span>
    <div class="trust-divider"></div>
    <div class="trust-brands">
      <span class="trust-pill featured">APC by Schneider</span>
      <span class="trust-pill featured">Eaton</span>
      <span class="trust-pill">Riello UPS</span>
      <span class="trust-pill">Delta Electronics</span>
      <span class="trust-pill">CyberPower</span>
      <span class="trust-pill">Ippon</span>
      <span class="trust-pill">Штиль</span>
      <span class="trust-pill">Парус-Электро</span>
    </div>
  </div>
</div>

<!-- ============================================================
     SYMPTOMS
     ============================================================ -->
<section class="symptoms-section section">
  <div class="reveal">
    <div class="section-tag">Узнаёте ситуацию?</div>
    <h2 class="section-h2">Похоже на это?</h2>
  </div>

  <div class="symptoms-grid">
    <div class="symptom-card reveal" data-delay="1">
      <div class="symptom-icon">🔊</div>
      <div>
        <div class="symptom-text">ИБП начал громко пищать</div>
        <div class="symptom-sub">Сигнализирует постоянно или периодически без видимой причины</div>
      </div>
    </div>
    <div class="symptom-card reveal" data-delay="2">
      <div class="symptom-icon">⚡</div>
      <div>
        <div class="symptom-text">Не включился после отключения света</div>
        <div class="symptom-sub">Свет дали, а ИБП так и не запустился</div>
      </div>
    </div>
    <div class="symptom-card reveal" data-delay="3">
      <div class="symptom-icon">🔋</div>
      <div>
        <div class="symptom-text">Просит заменить батарею</div>
        <div class="symptom-sub">Мигает индикатор или появилась надпись Replace Battery</div>
      </div>
    </div>
    <div class="symptom-card reveal" data-delay="4">
      <div class="symptom-icon">🌐</div>
      <div>
        <div class="symptom-text">Пропал из мониторинга</div>
        <div class="symptom-sub">Не отображается в сети, не работает веб-интерфейс</div>
      </div>
    </div>
    <div class="symptom-card reveal" data-delay="5">
      <div class="symptom-icon">📉</div>
      <div>
        <div class="symptom-text">Отключается под нагрузкой</div>
        <div class="symptom-sub">Уходит в байпас или выключается сам по себе</div>
      </div>
    </div>
    <div class="symptom-card reveal" data-delay="6" style="background:var(--accent-bg);border-color:var(--accent-bd)">
      <div class="symptom-icon">💬</div>
      <div>
        <div class="symptom-text" style="color:var(--accent)">Другая ситуация?</div>
        <div class="symptom-sub">Опишите — разберёмся по опыту и скажем, что это может быть</div>
      </div>
    </div>
  </div>

  <div class="symptoms-note reveal">
    Если есть хотя бы один пункт — ИБП уже не защищает оборудование в полную силу. Опишите ситуацию, скажем по опыту во сколько примерно выйдет.
  </div>
  <a href="#request" class="btn btn-primary reveal">Описать проблему →</a>
</section>

<!-- ============================================================
     RISK
     ============================================================ -->
<section class="risk-section">
  <div class="risk-inner">
    <div class="reveal">
      <div class="section-tag section-tag--light">Почему не стоит тянуть</div>
      <h2 class="section-h2 section-h2--light" style="margin-bottom:32px">Обычно к нам<br>приходят не сразу</h2>
      <div class="risk-story">
        <p>Сначала — <strong>«пищит, но работает»</strong>. Поставили на заметку и забыли.</p>
        <p>Потом свет моргнул, ИБП не удержал нагрузку. <strong>Сервер упал некорректно.</strong> Файловая система повредилась.</p>
        <p>И вот уже ремонтируют не только ИБП — а сервер, базы данных, теряют рабочий день.</p>
        <p>Мы не пугаем. Просто <strong>таких историй у нас было много</strong>, и все они начинались одинаково.</p>
      </div>
    </div>
    <div class="reveal" data-delay="2">
      <div class="risk-callout">
        <div class="risk-callout-label">Считайте сами</div>
        <div class="risk-compare">
          <div class="risk-row">
            <span class="risk-item">Замена аккумуляторов ИБП</span>
            <span class="risk-price accent">от 2 500 ₽</span>
          </div>
          <div class="risk-row">
            <span class="risk-item">Ремонт платы управления</span>
            <span class="risk-price accent">от 3 500 ₽</span>
          </div>
          <div class="risk-row">
            <span class="risk-item">Ремонт силовой части</span>
            <span class="risk-price accent">от 5 000 ₽</span>
          </div>
          <div class="risk-row">
            <span class="risk-item">Восстановление данных с сервера</span>
            <span class="risk-price">от 30 000 ₽</span>
          </div>
          <div class="risk-row">
            <span class="risk-item">Замена сгоревшего коммутатора</span>
            <span class="risk-price">от 50 000 ₽</span>
          </div>
        </div>
        <div class="risk-note">Цены на ремонт ИБП ориентировочные, точную стоимость называем после диагностики. Диагностика бесплатная.</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     RENTAL FUND
     ============================================================ -->
<section class="rental-section section">
  <div class="rental-inner">
    <div class="rental-visual reveal">
      <div class="rental-big-num">20+</div>
      <div class="rental-cards">
        <div class="rcard"><div class="rcard-num">1–10</div><div class="rcard-label">кВт — офисные и серверные</div></div>
        <div class="rcard"><div class="rcard-num">10–80</div><div class="rcard-label">кВт — средние системы</div></div>
        <div class="rcard"><div class="rcard-num">80–250</div><div class="rcard-label">кВт — промышленные</div></div>
        <div class="rcard"><div class="rcard-num">20+</div><div class="rcard-label">единиц в подменном фонде</div></div>
      </div>
    </div>
    <div class="rental-content reveal" data-delay="2">
      <div class="section-tag">Подменный фонд</div>
      <h2 class="section-h2">Ремонт не означает простой</h2>
      <p class="section-lead">Забираем ваш ИБП в ремонт — привозим замену. В большинстве случаев оборудование продолжает работать без перерыва.</p>
      <div class="rental-feature">
        <div class="rental-feature-icon">🔄</div>
        <div class="rental-feature-text"><strong>Подмена в день обращения</strong>Доставляем подменный ИБП, забираем неисправный — всё за один выезд</div>
      </div>
      <div class="rental-feature">
        <div class="rental-feature-icon">📐</div>
        <div class="rental-feature-text"><strong>Подберём по мощности</strong>Есть оборудование от 1 кВт до 250 кВт — под любую задачу</div>
      </div>
      <div class="rental-feature">
        <div class="rental-feature-icon">📋</div>
        <div class="rental-feature-text"><strong>Договор и документы</strong>Аренда оформляется официально — договор, акт, счёт для юрлиц</div>
      </div>
      <a href="<?php echo home_url('/rent/'); ?>" class="btn btn-primary" style="margin-top:28px">Узнать об аренде →</a>
    </div>
  </div>
</section>

<!-- ============================================================
     PROCESS
     ============================================================ -->
<div style="height:1px;background:var(--border)"></div>
<section class="process-section section">
  <div class="reveal">
    <div class="section-tag">Как мы работаем</div>
    <h2 class="section-h2">Три шага от звонка до гарантии</h2>
  </div>
  <div class="process-grid">
    <div class="proc reveal" data-delay="1">
      <div class="proc-num">1</div>
      <div class="proc-title">Связь</div>
      <p class="proc-text">Позвоните или оставьте заявку. Быстро уточним ситуацию по телефону — иногда уже на этом этапе понятна причина и примерная стоимость.</p>
      <span class="proc-tag">В течение 15 минут</span>
    </div>
    <div class="proc reveal" data-delay="2">
      <div class="proc-num">2</div>
      <div class="proc-title">Диагностика</div>
      <p class="proc-text">Привезите ИБП сами или вызовите инженера. Смотрим, называем точную стоимость. Если не подходит — ок, ничего не платите.</p>
      <span class="proc-tag">Диагностика бесплатно</span>
    </div>
    <div class="proc reveal" data-delay="3">
      <div class="proc-num">3</div>
      <div class="proc-title">Ремонт и выдача</div>
      <p class="proc-text">Чиним на компонентном уровне, тестируем под нагрузкой. Отдаём с гарантийным актом и полным пакетом документов.</p>
      <span class="proc-tag">Гарантия 12 месяцев</span>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT
     ============================================================ -->
<div style="height:1px;background:var(--border)"></div>
<section class="about-section section">
  <div class="about-inner">
    <div>
      <div class="reveal">
        <div class="section-tag">О компании</div>
        <h2 class="section-h2">17 лет ремонтируем то,<br>с чем другие не берутся</h2>
      </div>
      <div class="about-stats reveal" data-delay="1">
        <div class="astat"><div class="astat-num">17 лет</div><div class="astat-label">работы в Петербурге, с 2009</div></div>
        <div class="astat"><div class="astat-num">250 кВт</div><div class="astat-label">максимальная мощность ИБП</div></div>
        <div class="astat"><div class="astat-num">20+</div><div class="astat-label">единиц подменного фонда</div></div>
        <div class="astat"><div class="astat-num">12 мес</div><div class="astat-label">гарантия на работы</div></div>
      </div>
      <div class="about-text reveal" data-delay="2">
        <p>Работаем с ИБП мощностью от 1,5 до 250 кВт — это промышленный и корпоративный сегмент, который требует другого уровня компетенций. Большинство конкурентов берётся за офисные ИБП до 3 кВт. Мы ремонтируем APC Symmetra 500 кВт.</p>
        <p>Большая часть клиентов приходит по рекомендации — новых с улицы у нас было мало. До сих пор. Но сейчас хотим расти, поэтому делаем сайт и работаем с новыми обращениями так же, как с постоянными.</p>
        <p><strong>Есть паяльная станция, нагрузочный стенд, склад запчастей.</strong> Ремонт на компонентном уровне, не «замена блоком».</p>
      </div>
    </div>
    <div class="reveal" data-delay="2">
      <div class="about-photo">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=85&auto=format&fit=crop" alt="Сервисный центр АТС ТЕЛЕКОМ — ремонт электроники" loading="lazy">
        <div class="about-photo-badge">
          <div class="about-photo-badge-title">Компонентный ремонт ИБП</div>
          <div class="about-photo-badge-sub">ул. Розенштейна 34 · Пн–Сб 10:00–20:00</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FORM
     ============================================================ -->
<section class="form-section" id="request">
  <div class="form-inner">
    <div class="reveal">
      <div class="section-tag section-tag--light">Онлайн заявка</div>
      <h2 class="section-h2 section-h2--light">Напишите, что<br>случилось с ИБП</h2>
      <p class="form-lede">Ответим в течение 15 минут в рабочее время. Можно прикрепить фото или видео — разберёмся быстрее.</p>
      <div class="form-perks">
        <div class="fperk">Диагностика бесплатная</div>
        <div class="fperk">Цену называем до начала работ</div>
        <div class="fperk">Если не беремся — так и скажем</div>
        <div class="fperk">Работаем с юрлицами, пакет документов</div>
        <div class="fperk">Пн–Сб 10:00–20:00</div>
      </div>
    </div>
    <div class="reveal" data-delay="2">
      <div class="form-card" id="reqForm">
        <div class="form-field">
          <label class="form-label" for="reqName">Ваше имя *</label>
          <input class="form-input" id="reqName" type="text" placeholder="Иван Иванов" autocomplete="name">
        </div>
        <div class="form-field">
          <label class="form-label" for="reqPhone">Телефон или Telegram *</label>
          <input class="form-input" id="reqPhone" type="tel" placeholder="+7 (___) ___-__-__">
        </div>
        <div class="form-field">
          <label class="form-label" for="reqDesc">Что случилось с ИБП</label>
          <textarea class="form-input form-textarea" id="reqDesc" placeholder="Например: APC Smart-UPS 1500 — пищит каждые 30 секунд, батарея меняли год назад..."></textarea>
        </div>
        <div class="form-field">
          <label class="form-label">Фото или видео (необязательно)</label>
          <label class="form-file-label" id="fileLabel">
            <input type="file" id="reqFile" accept="image/*,video/*" style="display:none" onchange="handleFile(this)">
            <span>📷</span>
            <span id="fileText">Выбрать файл</span>
          </label>
        </div>
        <p class="form-note">* — обязательные поля. Свяжемся по указанному номеру или напишем в Telegram.</p>
        <button class="btn btn-primary form-submit" onclick="submitForm()">Отправить заявку →</button>
      </div>
      <div class="form-success" id="reqSuccess">
        <div class="form-success-icon">✅</div>
        <div class="form-success-title">Заявка принята!</div>
        <p class="form-success-text">Ответим в течение 15 минут в рабочее время.<br>Если срочно — позвоните: <a href="tel:+78121234567" style="color:var(--accent);font-weight:700">+7 (812) 123-45-67</a></p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     EXTRA SERVICES
     ============================================================ -->
<section class="services-section section">
  <div class="reveal">
    <div class="section-tag">Также работаем</div>
    <h2 class="section-h2">Полный цикл с ИБП</h2>
    <p class="section-lead">Один подрядчик для всех задач — не нужно искать разных исполнителей.</p>
  </div>
  <div class="services-grid">
    <div class="svc-card reveal" data-delay="1">
      <div class="svc-card-icon">🔧</div>
      <div class="svc-card-title">Ремонт ИБП</div>
      <p class="svc-card-text">Компонентный ремонт 1–250 кВт. APC, Eaton, Riello, Delta и другие. Выезд по СПб и Ленобласти. Гарантия 12 месяцев.</p>
      <a href="<?php echo home_url('/repair/'); ?>" class="svc-card-link">Подробнее →</a>
    </div>
    <div class="svc-card reveal" data-delay="2">
      <div class="svc-card-icon">🔋</div>
      <div class="svc-card-title">Продажа ИБП</div>
      <p class="svc-card-text">Склад оборудования в наличии — новые и восстановленные ИБП от 1 до 250 кВт. Все прошли диагностику и нагрузочное тестирование.</p>
      <a href="<?php echo home_url('/shop/'); ?>" class="svc-card-link">В магазин →</a>
    </div>
    <div class="svc-card reveal" data-delay="3">
      <div class="svc-card-icon">🔑</div>
      <div class="svc-card-title">Аренда ИБП</div>
      <p class="svc-card-text">Подменный фонд 20+ единиц на время ремонта или для временных задач. Договор, доставка, забор — всё включено.</p>
      <a href="<?php echo home_url('/rent/'); ?>" class="svc-card-link">Условия аренды →</a>
    </div>
    <div class="svc-card reveal" data-delay="4">
      <div class="svc-card-icon">🔄</div>
      <div class="svc-card-title">Выкуп оборудования</div>
      <p class="svc-card-text">Выкупаем неисправные, устаревшие и б/у ИБП. Оценка за 1 час, выезд и вывоз. Удобно при замене парка оборудования.</p>
      <a href="<?php echo home_url('/buyout/'); ?>" class="svc-card-link">Сдать оборудование →</a>
    </div>
  </div>
</section>

<!-- ============================================================
     BRANDS
     ============================================================ -->
<div class="brands-section">
  <div class="brands-inner">
    <div class="brands-header">
      <span class="brands-label">Ремонтируем все бренды</span>
      <div class="brands-line"></div>
    </div>
    <div class="brands-pills">
      <span class="brand-pill featured">APC by Schneider Electric</span>
      <span class="brand-pill featured">Eaton</span>
      <span class="brand-pill">Riello UPS</span>
      <span class="brand-pill">Delta Electronics</span>
      <span class="brand-pill">CyberPower</span>
      <span class="brand-pill">Ippon</span>
      <span class="brand-pill">Штиль</span>
      <span class="brand-pill">Парус-Электро</span>
      <span class="brand-pill">Связь Инжиниринг</span>
      <span class="brand-pill">HIDEN</span>
      <span class="brand-pill">PowerCom</span>
      <span class="brand-pill">Legrand</span>
    </div>
  </div>
</div>

<!-- ============================================================
     FAQ
     ============================================================ -->
<section class="faq-section section">
  <div class="reveal">
    <div class="section-tag">Частые вопросы</div>
    <h2 class="section-h2">Отвечаем заранее</h2>
  </div>
  <div class="faq-grid">

    <div class="faq-item reveal" data-delay="1">
      <div class="faq-q" onclick="toggleFaq(this)">
        Сколько стоит ремонт ИБП?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">
        Диагностика бесплатная. Стоимость называем после осмотра — до начала работ. Ориентировочно: замена АКБ — от 2 500 ₽, ремонт платы управления — от 3 500 ₽, ремонт силовой части — от 5 000 ₽. Точная цена зависит от модели и характера неисправности. Если стоимость не устраивает — ничего не платите.
      </div></div>
    </div>

    <div class="faq-item reveal" data-delay="2">
      <div class="faq-q" onclick="toggleFaq(this)">
        Как долго занимает ремонт?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">
        Большинство неисправностей устраняем в день обращения — если есть запчасти на складе. Сложные случаи или редкое оборудование — 2–3 рабочих дня. Если нужно ждать запчасть — предупреждаем заранее и, если нужно, даём подменный ИБП.
      </div></div>
    </div>

    <div class="faq-item reveal" data-delay="1">
      <div class="faq-q" onclick="toggleFaq(this)">
        Вы выезжаете на объект?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">
        Да, выезжаем по Санкт-Петербургу и Ленинградской области. Инженер приедет с инструментом и необходимыми запчастями. Часть неисправностей устраняем прямо на месте — без эвакуации оборудования.
      </div></div>
    </div>

    <div class="faq-item reveal" data-delay="2">
      <div class="faq-q" onclick="toggleFaq(this)">
        Что такое «компонентный ремонт»?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">
        Это ремонт на уровне отдельных электронных компонентов — транзисторов, конденсаторов, микросхем — а не замена целого блока или модуля. Стоит в 2–5 раз дешевле узлового ремонта. Требует паяльной станции, диагностического оборудования и опыта. Именно так мы и работаем.
      </div></div>
    </div>

    <div class="faq-item reveal" data-delay="1">
      <div class="faq-q" onclick="toggleFaq(this)">
        Какие документы получу после ремонта?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">
        Договор на выполнение работ, акт выполненных работ, гарантийный талон (12 месяцев на работы). Для юридических лиц — счёт и счёт-фактура. Работаем без НДС.
      </div></div>
    </div>

    <div class="faq-item reveal" data-delay="2">
      <div class="faq-q" onclick="toggleFaq(this)">
        Как воспользоваться подменным ИБП?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">
        Просто скажите при обращении, что нужен подменный аппарат. Подберём по мощности и форм-фактору, доставим при заборе вашего ИБП. Оформляем договором аренды. После возврата вашего отремонтированного ИБП — забираем подменный.
      </div></div>
    </div>

    <div class="faq-item reveal" data-delay="1">
      <div class="faq-q" onclick="toggleFaq(this)">
        Работаете с физическими лицами?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">
        Да, принимаем заявки и от физических лиц. Основной фокус — B2B (юридические лица, предприятия, серверные), но если у вас сломался ИБП дома или в небольшом офисе — обращайтесь.
      </div></div>
    </div>

    <div class="faq-item reveal" data-delay="2">
      <div class="faq-q" onclick="toggleFaq(this)">
        Что если ремонт нецелесообразен?
        <span class="faq-icon">+</span>
      </div>
      <div class="faq-a"><div class="faq-a-inner">
        Честно скажем об этом — до начала работ. Ремонт имеет смысл, если его стоимость не превышает 40–60% цены нового аналога. Если не имеет — предложим купить восстановленный ИБП со склада или выкупим ваш.
      </div></div>
    </div>

  </div>
</section>

<!-- ============================================================
     FINAL CTA
     ============================================================ -->
<section class="cta-section">
  <div class="cta-glow"></div>
  <div class="cta-grid-bg"></div>
  <div class="cta-inner">
    <div class="reveal">
      <h2 class="cta-h2">Сломался ИБП?<br><em>Разберёмся.</em></h2>
      <p class="cta-sub">Диагностика бесплатно. Цену называем до начала работ. Подменный ИБП на время ремонта — если нужно.</p>
    </div>
    <div class="cta-actions reveal" data-delay="2">
      <a href="#request" class="btn btn-white btn-lg">Оставить заявку</a>
      <a href="tel:+78121234567" class="btn btn-outline-light btn-lg">📞 Позвонить</a>
      <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light btn-lg">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
        Telegram
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     JAVASCRIPT
     ============================================================ -->
<script>
/* Scroll reveal */
(function(){
  var els = document.querySelectorAll('.reveal');
  if(!els.length) return;
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(e.isIntersecting){e.target.classList.add('visible');io.unobserve(e.target);}
    });
  },{threshold:0.12,rootMargin:'0px 0px -40px 0px'});
  els.forEach(function(el){io.observe(el);});
})();

/* FAQ accordion */
function toggleFaq(btn){
  var item=btn.closest('.faq-item'),isOpen=item.classList.contains('open');
  document.querySelectorAll('.faq-item.open').forEach(function(i){
    i.classList.remove('open');i.querySelector('.faq-a').style.maxHeight=null;
  });
  if(!isOpen){
    item.classList.add('open');
    item.querySelector('.faq-a').style.maxHeight=item.querySelector('.faq-a-inner').scrollHeight+'px';
  }
}

/* Smooth scroll for anchor links */
document.querySelectorAll('a[href^="#"]').forEach(function(a){
  a.addEventListener('click',function(e){
    var id=this.getAttribute('href').slice(1),el=document.getElementById(id);
    if(el){e.preventDefault();window.scrollTo({top:el.getBoundingClientRect().top+window.scrollY-80,behavior:'smooth'});}
  });
});
</script>

<?php get_footer(); ?>
