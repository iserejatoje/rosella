(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const o of document.querySelectorAll('link[rel="modulepreload"]'))s(o);new MutationObserver(o=>{for(const e of o)if(e.type==="childList")for(const r of e.addedNodes)r.tagName==="LINK"&&r.rel==="modulepreload"&&s(r)}).observe(document,{childList:!0,subtree:!0});function n(o){const e={};return o.integrity&&(e.integrity=o.integrity),o.referrerPolicy&&(e.referrerPolicy=o.referrerPolicy),o.crossOrigin==="use-credentials"?e.credentials="include":o.crossOrigin==="anonymous"?e.credentials="omit":e.credentials="same-origin",e}function s(o){if(o.ep)return;o.ep=!0;const e=n(o);fetch(o.href,e)}})();$(function(){console.log("init");function c(){$(window).scroll(function(e){$(window).scrollTop()>=90?$("header").addClass("small"):$("header").removeClass("small")})}const t=document.querySelectorAll(".service"),n=new IntersectionObserver(e=>{e.forEach(r=>{r.isIntersecting&&$(r.target).css({opacity:"1"})})},{root:null,threshold:.5});t.forEach(e=>{n.observe(e)});const s=document.querySelectorAll(".footer .page"),o=new IntersectionObserver(e=>{e.forEach(r=>{r.isIntersecting&&$(r.target).css({opacity:"1"})})},{root:null,threshold:.5});s.forEach(e=>{o.observe(e)}),c()});
