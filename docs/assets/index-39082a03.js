(function(){const r=document.createElement("link").relList;if(r&&r.supports&&r.supports("modulepreload"))return;for(const t of document.querySelectorAll('link[rel="modulepreload"]'))s(t);new MutationObserver(t=>{for(const e of t)if(e.type==="childList")for(const o of e.addedNodes)o.tagName==="LINK"&&o.rel==="modulepreload"&&s(o)}).observe(document,{childList:!0,subtree:!0});function n(t){const e={};return t.integrity&&(e.integrity=t.integrity),t.referrerPolicy&&(e.referrerPolicy=t.referrerPolicy),t.crossOrigin==="use-credentials"?e.credentials="include":t.crossOrigin==="anonymous"?e.credentials="omit":e.credentials="same-origin",e}function s(t){if(t.ep)return;t.ep=!0;const e=n(t);fetch(t.href,e)}})();$(function(){console.log("init"),$(".cart-icon").click(function(){return $(this).next().toggleClass("cart-open"),!1});function c(){$(window).scroll(function(e){$(window).scrollTop()>=90?$("header").addClass("small"):$("header").removeClass("small")})}const r=document.querySelectorAll(".service"),n=new IntersectionObserver(e=>{e.forEach(o=>{o.isIntersecting&&$(o.target).css({opacity:"1"})})},{root:null,threshold:.5});r.forEach(e=>{n.observe(e)});const s=document.querySelectorAll(".footer .page"),t=new IntersectionObserver(e=>{e.forEach(o=>{o.isIntersecting&&$(o.target).css({opacity:"1"})})},{root:null,threshold:.7});s.forEach(e=>{t.observe(e)}),c()});
