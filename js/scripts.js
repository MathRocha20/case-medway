function openNav(){document.getElementById("menu-mobile").style.width="100%",document.getElementById("menu-mobile").style.backgroundColor="rgba(0,0,0,0.8)",document.getElementById("abremenu").style.opacity="0"}function closeNav(){document.getElementById("menu-mobile").style.width="0%",document.getElementById("abremenu").style.opacity="1"}!function(){var e=document.getElementById("menu");window.addEventListener("scroll",function(){window.scrollY>0?e.classList.add("menuFixo"):e.classList.remove("menuFixo")})}();const menuItems=document.querySelectorAll('.nav-slow a[href^="#"]');function getScrollTopByHref(e){let o=e.getAttribute("href");return document.querySelector(o).offsetTop}function scrollToPosition(e){smoothScrollTo(0,e)}function scrollToIdOnClick(e){e.preventDefault();let o=getScrollTopByHref(e.currentTarget)-80;scrollToPosition(o)}function smoothScrollTo(e,o,t){let l=window.scrollX||window.pageXOffset,s=window.scrollY||window.pageYOffset,n=e-l,i=o-s,r=new Date().getTime();t=void 0!==t?t:400;let c=(e,o,t,l)=>(e/=l/2)<1?t/2*e*e*e*e+o:-t/2*((e-=2)*e*e*e-2)+o,d=setInterval(()=>{let e=new Date().getTime()-r,o=c(e,l,n,t),m=c(e,s,i,t);e>=t&&clearInterval(d),window.scroll(o,m)},1e3/60)}menuItems.forEach(e=>{e.addEventListener("click",scrollToIdOnClick)}),$(".slider-projetos").slick({dots:!1,arrows:!0,infinite:!0,speed:300,slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:991,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}}]});