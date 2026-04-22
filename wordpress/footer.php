<style>
/* ── FOOTER ── */
.footer{background:var(--navy);border-top:1px solid rgba(34,158,217,.2);padding:48px 32px 24px;transition:background .35s}
[data-theme="dark"] .footer{background:var(--bg2)}
.footer-inner{max-width:var(--max-w,1240px);margin:0 auto}
.footer-top{display:grid;grid-template-columns:2fr 1fr 1fr 1fr 1fr;gap:20px;padding-bottom:36px;border-bottom:1px solid rgba(255,255,255,.12)}
[data-theme="dark"] .footer-top{border-bottom-color:var(--border)}
.footer-logo-text{font-family:'Inter',sans-serif;font-size:12px;font-weight:800;color:#fff;line-height:1.25}
.footer-desc{font-size:13px;line-height:1.75;color:rgba(255,255,255,.55);margin:10px 0 18px}
[data-theme="dark"] .footer-desc{color:var(--text3)}
.footer-messengers{display:flex;gap:8px}
.footer-msg{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;transition:all .2s}
.footer-msg.wa{background:rgba(37,211,102,.18);color:#25d366}
.footer-msg.tg{background:rgba(34,158,217,.18);color:#229ED9}
.footer-col h4{font-size:10px;font-weight:800;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:14px}
[data-theme="dark"] .footer-col h4{color:var(--text3)}
.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:8px}
.footer-col a{font-size:13px;color:rgba(255,255,255,.65);transition:color .15s;text-decoration:none}
[data-theme="dark"] .footer-col a{color:var(--text2)}
.footer-col a:hover{color:var(--accent)}
.footer-bottom{display:flex;justify-content:space-between;padding-top:18px;font-size:12px;color:rgba(255,255,255,.35)}
[data-theme="dark"] .footer-bottom{color:var(--text3)}
@media(max-width:960px){.footer-top{grid-template-columns:1fr 1fr;gap:24px}}
@media(max-width:600px){.footer-top{grid-template-columns:1fr;gap:16px}.footer{padding:32px 16px 16px}.footer-bottom{flex-direction:column;gap:6px;font-size:11px}}

<style>
.float-wrap{position:fixed;bottom:28px;right:28px;z-index:900;display:flex;flex-direction:column;gap:10px}
.float-btn{width:52px;height:52px;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 20px rgba(0,0,0,.25);transition:all .25s;text-decoration:none}
.float-tg{background:#229ED9}
.float-btn:hover{transform:scale(1.1)}
@media(max-width:600px){.float-wrap{bottom:14px;right:14px}.float-btn{width:46px;height:46px}}
.footer-brand{font-family:'Inter',sans-serif;font-size:15px;font-weight:800;color:#fff !important;line-height:1.2}
.footer-brand span{color:rgba(255,255,255,.5);display:block;font-size:11px;font-weight:500;margin-top:3px}
.footer-desc{font-size:13px;line-height:1.7;color:rgba(255,255,255,.38);margin:14px 0 20px;max-width:260px}
.footer-socials{display:flex;gap:8px}
.footer-social{width:36px;height:36px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:16px;transition:all .2s;border:1px solid rgba(255,255,255,.1);text-decoration:none}
.footer-social:hover{border-color:#1565C0;background:rgba(21,101,192,.15)}
</style>
<footer class="footer">
  <div class="footer-inner">
    <div class="footer-top">
      <div>
        <div class="footer-brand">АТС ТЕЛЕКОМ<span>Санкт-Петербург · с 2009 года</span></div>
        <p class="footer-desc">Ремонт и продажа ИБП, телефония и ВКС, аренда и выкуп оборудования.</p>
        <div class="footer-socials">
          <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="footer-social" style="color:#229ED9"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
        </div>
      </div>
      <div class="footer-col"><h4>Услуги</h4><ul>
        <li><a href="<?php echo home_url("/repair/"); ?>">Ремонт ИБП</a></li>
        <li><a href="<?php echo home_url("/shop/"); ?>">Магазин ИБП</a></li>
        <li><a href="<?php echo home_url("/telephony/"); ?>">Телефония и ВКС</a></li>
        <li><a href="<?php echo home_url("/rent/"); ?>">Аренда ИБП</a></li>
        <li><a href="<?php echo home_url("/buyout/"); ?>">Выкуп оборудования</a></li>
      </ul></div>
      <div class="footer-col"><h4>Ремонтируем</h4><ul>
        <li><a href="<?php echo home_url("/repair/"); ?>">APC by Schneider</a></li>
        <li><a href="<?php echo home_url("/repair/"); ?>">Eaton</a></li>
        <li><a href="<?php echo home_url("/repair/"); ?>">Riello UPS</a></li>
        <li><a href="<?php echo home_url("/repair/"); ?>">Все бренды ИБП</a></li>
            <li><a href="<?php echo home_url("/remont-ibp-apc/"); ?>">Ремонт APC</a></li>
            <li><a href="<?php echo home_url("/remont-ibp-eaton/"); ?>">Ремонт Eaton</a></li>
            <li><a href="<?php echo home_url("/remont-ibp-riello/"); ?>">Ремонт Riello</a></li>
      </ul></div>
      <div class="footer-col"><h4>Контакты</h4><ul>
        <li><a href="tel:+79046490909">+7 (904) 649-09-09</a></li>
        <li><a href="mailto:atstelecomspb@yandex.ru">atstelecomspb@yandex.ru</a></li>
        <li>Пн–Сб: 10:00–20:00</li>
        <li><a href="<?php echo home_url("/contacts/"); ?>">Санкт-Петербург</a></li>
      
    </ul></div>
      <div class="footer-col"><h4>База знаний</h4><ul><li><a href="<?php echo home_url("/chto-takoe-ibp/"); ?>">Что такое ИБП</a></li><li><a href="<?php echo home_url("/zamena-akb-ibp/"); ?>">Замена АКБ</a></li><li><a href="<?php echo home_url("/article-remont-ibp/"); ?>">Ремонт ИБП</a></li><li><a href="<?php echo home_url("/remont-ibp-apc/"); ?>">Ремонт APC</a></li></ul></div>
    </div>
<div class="footer-bottom">
      <span>© 2026 АТС ТЕЛЕКОМ · ООО "АТС Телеком" · ИНН 7839401824</span>
      <span>Санкт-Петербург</span>
    </div>
<div style="text-align:center;padding-top:12px;font-size:11px;color:rgba(255,255,255,.3);line-height:1.6">Информация на сайте носит информационный характер и не является публичной офертой. Точные цены, сроки и условия уточняйте у менеджеров.</div>

  </div>
</footer>

<div class="float-wrap">
  <a href="https://t.me/atstelecom" target="_blank" rel="noopener noreferrer" class="float-btn float-tg"><svg width="22" height="22" viewBox="0 0 24 24" fill="white"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
</div>

<script>
<?php
// AJAX URL для форм
echo 'var atcAjaxUrl = "' . admin_url('admin-ajax.php') . '";';
echo 'var atcAjaxAction = "atctelecom_form";';
?>
</script>

<script>
function getSystemTheme(){return window.matchMedia('(prefers-color-scheme: dark)').matches?'dark':'light'}
function applyTheme(t){document.documentElement.setAttribute('data-theme',t);const b=document.getElementById('themeBtn');if(b)b.textContent=t==='dark'?'☀️':'🌙';localStorage.setItem('atc_theme',t)}
function toggleTheme(){applyTheme(document.documentElement.getAttribute('data-theme')==='dark'?'light':'dark')}
(function(){applyTheme(localStorage.getItem('atc_theme')||getSystemTheme())})();
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change',function(e){if(!localStorage.getItem('atc_theme'))applyTheme(e.matches?'dark':'light')});
function toggleMenu(){const b=document.getElementById('burger'),m=document.getElementById('mobileNav');b.classList.toggle('open');m.classList.toggle('open');document.body.style.overflow=m.classList.contains('open')?'hidden':''}
document.addEventListener('click',function(e){const b=document.getElementById('burger'),m=document.getElementById('mobileNav');if(m&&m.classList.contains('open')&&!m.contains(e.target)&&!b.contains(e.target)){b.classList.remove('open');m.classList.remove('open');document.body.style.overflow=''}})
function handleFile(input){if(input.files&&input.files[0]){document.getElementById('fileText').textContent=input.files[0].name;document.getElementById('fileLabel').style.borderColor='var(--accent)';document.getElementById('fileLabel').style.background='var(--accent-bg)'}}
function submitForm(){
  const name=document.getElementById('reqName'),phone=document.getElementById('reqPhone');
  const btn=document.querySelector('[onclick="submitForm()"]');
  let ok=true;
  [name,phone].forEach(function(f){f.classList.remove('error');if(!f.value.trim()){f.classList.add('error');ok=false}});
  if(!ok){if(!name.value.trim())name.focus();return}
  btn.textContent='Отправляем...';btn.disabled=true;btn.style.opacity='.7';
  var fd=new FormData();
  fd.append('name',name.value.trim());fd.append('phone',phone.value.trim());
  fd.append('desc',document.getElementById('reqDesc').value.trim());
  var f=document.getElementById('reqFile');if(f.files&&f.files[0])fd.append('file',f.files[0]);
  fetch(atcAjaxUrl + '?action=' + atcAjaxAction, {method:'POST',body:fd})
   .then(function(r){return r.json()})
   .then(function(){document.getElementById('reqForm').style.display='none';document.getElementById('reqSuccess').style.display='block'})
   .catch(function(){document.getElementById('reqForm').style.display='none';document.getElementById('reqSuccess').style.display='block'})
}
</script>

<style>
/* Universal scroll reveal */
.u-reveal{opacity:0;transform:translateY(24px);transition:opacity .6s ease,transform .6s ease}
.u-reveal.u-visible{opacity:1;transform:none}
.u-reveal[data-d="1"]{transition-delay:.08s}
.u-reveal[data-d="2"]{transition-delay:.16s}
.u-reveal[data-d="3"]{transition-delay:.24s}
.u-reveal[data-d="4"]{transition-delay:.32s}
</style>
<script>
(function(){
  /* Не запускать на главной — там своя система reveal */
  if(document.querySelector('.hero-h1')) return;
  var sel = '.card, .section-hd, .page-hero, .acc-item, .grid-2 > *, .grid-3 > *, section > .btn, section > p, .cta-band';
  var els = document.querySelectorAll(sel);
  if(!els.length) return;
  /* Нумеруем карточки внутри одного грида для stagger */
  document.querySelectorAll('.grid-2, .grid-3').forEach(function(g){
    g.querySelectorAll(':scope > *').forEach(function(c,i){c.setAttribute('data-d', (i%4)+1);});
  });
  els.forEach(function(el){el.classList.add('u-reveal');});
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(e.isIntersecting){e.target.classList.add('u-visible');io.unobserve(e.target);}
    });
  },{threshold:0.08,rootMargin:'0px 0px -32px 0px'});
  els.forEach(function(el){io.observe(el);});
})();
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
   })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=108341486', 'ym');
   ym(108341486, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/108341486" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>
</body>
</html>
