(function(){const n=document.createElement("link").relList;if(n&&n.supports&&n.supports("modulepreload"))return;for(const r of document.querySelectorAll('link[rel="modulepreload"]'))c(r);new MutationObserver(r=>{for(const o of r)if(o.type==="childList")for(const s of o.addedNodes)s.tagName==="LINK"&&s.rel==="modulepreload"&&c(s)}).observe(document,{childList:!0,subtree:!0});function i(r){const o={};return r.integrity&&(o.integrity=r.integrity),r.referrerPolicy&&(o.referrerPolicy=r.referrerPolicy),r.crossOrigin==="use-credentials"?o.credentials="include":r.crossOrigin==="anonymous"?o.credentials="omit":o.credentials="same-origin",o}function c(r){if(r.ep)return;r.ep=!0;const o=i(r);fetch(r.href,o)}})();$(function(){typeof Swiper<"u"&&new Swiper(".partners-slider .swiper",{maxBackfaceHiddenSlides:5,autoplay:{delay:5e3},slidesPerView:5,speed:800,navigation:{nextEl:".partners-slider .next",prevEl:".partners-slider .prev"}}),typeof IMask<"u"&&document.querySelectorAll('[type="tel"]').forEach(t=>IMask(t,{mask:"{61} (00) 0000 0000"})),$(".cart-icon").click(function(){return $(this).next().toggleClass("cart-open"),!1}),$(".faq-button").click(function(){return $(this).next().slideToggle(300),$(this).toggleClass("open"),!1}),$(".cart-close").click(function(){$(".cart-content").removeClass("cart-open")}),$(document).on("click",function(e){$(e.target).closest(".cart-content").length||$(".cart-content").removeClass("cart-open")}),$(".cart-remove").click(function(){let e=$(this).parents(".cart-item"),t=$(".cart-bottom .cart-item");return t.length<2&&$(".header .button--subtotal").hide(),$(this).parents(".cart-item").slideUp(300,function(){t.length<2&&$(".header .cart-bottom").html('<span style="opacity: .5; display: block;">Cart is empty</span>'),e.remove();let l=$(".cart-bottom .cart-item").length;$(".cart-counter span").html("("+l+")"),$(".cart-count").html(l)}),!1}),$(".cart-amount .plus").click(function(){$(this).parents(".cart-amount").find(".cart-input").get(0).value++}),$(".cart-amount .minus").click(function(){$(this).parents(".cart-amount").find(".cart-input").val()>1&&$(this).parents(".cart-amount").find(".cart-input").get(0).value--});function a(){function e(){$(window).scrollTop()>=90?$("header").addClass("small"):$("header").removeClass("small"),$(window).scrollTop()>=10?$(".header-faq, .header-blog, .header-service").addClass("header--blur"):$(".header-faq, .header-blog, .header-service").removeClass("header--blur")}e(),$(window).scroll(function(t){e()})}const n=document.querySelectorAll(".service"),i=new IntersectionObserver(e=>{e.forEach(t=>{t.isIntersecting&&$(t.target).css({opacity:"1"})})},{root:null,threshold:.5});n.forEach(e=>{i.observe(e)});const c=document.querySelectorAll(".footer .seo-page"),r=new IntersectionObserver(e=>{e.forEach(t=>{t.isIntersecting&&$(t.target).css({opacity:"1"})})},{root:null,threshold:.7});c.forEach(e=>{r.observe(e)});const o=document.querySelectorAll(".faqs .faq-item, .article-list .article, .gallery .gallery-item, .contact-us-service"),s=new IntersectionObserver(e=>{e.forEach(t=>{t.isIntersecting&&$(t.target).css({opacity:"1"})})},{root:null,threshold:.35});o.forEach(e=>{s.observe(e)});const u=document.querySelectorAll(".header-service-wrapper"),d=new IntersectionObserver(e=>{e.forEach(t=>{t.isIntersecting&&$(t.target).addClass("active")})},{root:null,threshold:.1});u.forEach(e=>{d.observe(e)});const f=document.querySelectorAll(".images-grid .row"),h=new IntersectionObserver(e=>{e.forEach(t=>{t.isIntersecting&&$(t.target).css({opacity:"1"})})},{root:null,threshold:.4});f.forEach(e=>{h.observe(e)});const m=document.querySelectorAll(".partners .container"),p=new IntersectionObserver(e=>{e.forEach(t=>{t.isIntersecting&&$(t.target).css({opacity:"1"})})},{root:null,threshold:.6});m.forEach(e=>{p.observe(e)}),a()});