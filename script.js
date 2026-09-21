const menu=document.querySelector('.menu');
const nav=document.querySelector('.nav nav');

if(menu&&nav){
  menu.addEventListener('click',()=>{
    const open=nav.classList.toggle('open');
    menu.setAttribute('aria-expanded',open);
  });
  nav.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{
    nav.classList.remove('open');
    menu.setAttribute('aria-expanded','false');
  }));
}

const pageHero=document.querySelector('.page-hero');
if(pageHero){
  const back=document.createElement('a');
  back.className='home-back';
  back.href='index.html';
  back.textContent='← Back Home';
  pageHero.appendChild(back);
  const style=document.createElement('style');
  style.textContent='.home-back{display:inline-flex;align-items:center;margin-top:34px;padding:12px 18px;border:1px solid #b99a5b;color:#d2b778;font-size:13px;letter-spacing:.06em;position:relative;z-index:2;transition:.2s}.home-back:hover{background:#b99a5b;color:#071628}';
  document.head.appendChild(style);
}

document.addEventListener("DOMContentLoaded", function () {

  const intro = document.getElementById("introScreen");

  if (intro) {
    intro.addEventListener("click", function () {
      intro.classList.add("hide");

      setTimeout(function () {
        intro.remove();
      }, 1100);
    });
  }

});
