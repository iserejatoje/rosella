(function(){const n=document.createElement("link").relList;if(n&&n.supports&&n.supports("modulepreload"))return;for(const t of document.querySelectorAll('link[rel="modulepreload"]'))i(t);new MutationObserver(t=>{for(const o of t)if(o.type==="childList")for(const s of o.addedNodes)s.tagName==="LINK"&&s.rel==="modulepreload"&&i(s)}).observe(document,{childList:!0,subtree:!0});function c(t){const o={};return t.integrity&&(o.integrity=t.integrity),t.referrerPolicy&&(o.referrerPolicy=t.referrerPolicy),t.crossOrigin==="use-credentials"?o.credentials="include":t.crossOrigin==="anonymous"?o.credentials="omit":o.credentials="same-origin",o}function i(t){if(t.ep)return;t.ep=!0;const o=c(t);fetch(t.href,o)}})();$(function(){console.log("init"),typeof Swiper<"u"&&new Swiper(".partners-slider .swiper",{maxBackfaceHiddenSlides:5,autoplay:{delay:5e3},slidesPerView:5,speed:800,navigation:{nextEl:".partners-slider .next",prevEl:".partners-slider .prev"}}),document.querySelectorAll('[type="tel"]').forEach(e=>IMask(e,{mask:"{61} (00) 0000 0000"})),$(".cart-icon").click(function(){return $(this).next().toggleClass("cart-open"),!1}),$(".faq-button").click(function(){return $(this).next().slideToggle(300),$(this).toggleClass("open"),!1}),$(".cart-close").click(function(){$(".cart-content").removeClass("cart-open")}),$(document).on("click",function(e){$(e.target).closest(".cart-content").length||$(".cart-content").removeClass("cart-open")}),$(".cart-remove").click(function(){let e=$(this).parents(".cart-item"),r=$(".cart-bottom .cart-item");return r.length<2&&$(".header .button--subtotal").hide(),$(this).parents(".cart-item").slideUp(300,function(){r.length<2&&$(".header .cart-bottom").html('<span style="opacity: .5; display: block;">Cart is empty</span>'),e.remove();let a=$(".cart-bottom .cart-item").length;$(".cart-counter span").html("("+a+")"),$(".cart-count").html(a)}),!1}),$(".cart-amount .plus").click(function(){$(this).parents(".cart-amount").find(".cart-input").get(0).value++}),$(".cart-amount .minus").click(function(){$(this).parents(".cart-amount").find(".cart-input").val()>1&&$(this).parents(".cart-amount").find(".cart-input").get(0).value--});function n(){$(window).scroll(function(e){$(window).scrollTop()>=90?$("header").addClass("small"):$("header").removeClass("small"),$(window).scrollTop()>=10?$(".header-faq, .header-blog, .header-service").addClass("header--blur"):$(".header-faq, .header-blog, .header-service").removeClass("header--blur")})}const c=document.querySelectorAll(".service"),i=new IntersectionObserver(e=>{e.forEach(r=>{r.isIntersecting&&$(r.target).css({opacity:"1"})})},{root:null,threshold:.5});c.forEach(e=>{i.observe(e)});const t=document.querySelectorAll(".footer .seo-page"),o=new IntersectionObserver(e=>{e.forEach(r=>{r.isIntersecting&&$(r.target).css({opacity:"1"})})},{root:null,threshold:.7});t.forEach(e=>{o.observe(e)});const s=document.querySelectorAll(".faqs .faq-item, .article-list .article"),u=new IntersectionObserver(e=>{e.forEach(r=>{r.isIntersecting&&$(r.target).css({opacity:"1"})})},{root:null,threshold:.4});s.forEach(e=>{u.observe(e)});const d=document.querySelectorAll(".images-grid .row"),f=new IntersectionObserver(e=>{e.forEach(r=>{r.isIntersecting&&$(r.target).css({opacity:"1"})})},{root:null,threshold:.4});d.forEach(e=>{f.observe(e)}),n()});
