!function(e){function t(n){if(o[n])return o[n].exports;var r=o[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,t),r.l=!0,r.exports}var o={};t.m=e,t.c=o,t.d=function(e,o,n){t.o(e,o)||Object.defineProperty(e,o,{configurable:!1,enumerable:!0,get:n})},t.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(o,"a",o),o},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="https://dce5jani6jm7e.cloudfront.net/app/",t(t.s=1196)}({1196:function(e,t,o){"use strict";o(1197),o(1198)},1197:function(e,t){},1198:function(e,t,o){"use strict";function n(){document.querySelectorAll("#compare-our-offers-wrapper .table").forEach(function(e){e.addEventListener("scroll",function(){var t=e.scrollLeft,o=document.querySelector("#compare-our-offers-wrapper .freeze-column");t>0?o.classList.add("shadow"):o.classList.remove("shadow")})})}function r(){document.querySelectorAll('#compare-our-offers-wrapper a[href^="#"]').forEach(function(e){e.addEventListener("click",function(t){var o=document.querySelector(e.attributes.href.value);t.preventDefault(),u(document.scrollingElement,o.offsetTop,400)})})}function c(){document.querySelector(".to-sign_up").addEventListener("click",function(e){var t=document.querySelector("#sign-up-form");e.preventDefault(),u(document.scrollingElement,t.offsetTop,800)})}function u(e,t,o){if(!(o<=0)){var n=t-e.scrollTop,r=n/o*10;setTimeout(function(){e.scrollTop=e.scrollTop+r,e.scrollTop!==t&&u(e,t,o-10)},10)}}document.addEventListener("DOMContentLoaded",function(){n(),r(),c()})}});