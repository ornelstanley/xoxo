!function(e){function t(n){if(o[n])return o[n].exports;var i=o[n]={i:n,l:!1,exports:{}};return e[n].call(i.exports,i,i.exports,t),i.l=!0,i.exports}var o={};t.m=e,t.c=o,t.d=function(e,o,n){t.o(e,o)||Object.defineProperty(e,o,{configurable:!1,enumerable:!0,get:n})},t.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(o,"a",o),o},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="https://dce5jani6jm7e.cloudfront.net/app/",t(t.s=469)}({469:function(e,t,o){"use strict";o(470),o(471),o(472),o(473)},470:function(e,t){},471:function(e,t,o){"use strict";function n(){jQueryBridget("flickity",Flickity,$),$(".carousel-oc-modal").hasClass("flickity-enabled")&&$(".carousel-oc-modal").flickity("destroy"),$(".carousel-oc-modal").show(),$(".carousel-oc-modal").flickity({wrapAround:!1,freeScroll:!1,setGallerySize:!1,contain:!0,groupCells:2,adaptiveHeight:!0})}function i(){jQueryBridget("flickity",Flickity,$),$(".carousel-oc-modal").hasClass("flickity-enabled")&&$(".carousel-oc-modal").flickity("destroy"),$(".carousel-oc-modal").show(),$(".carousel-oc-modal").flickity({wrapAround:!1,freeScroll:!1,groupCells:1,contain:!0,adaptiveHeight:!0})}function s(){$(".risk-floated__body").css("display","none")}function a(){$(".risk-floated__body").css("display","block")}function l(){var e=d("regulator_name");$(".switcher-btn").removeClass("active"),$(".oc-label").removeClass("selected"),$(".switcher-btn."+e).addClass("active"),$(".oc-label."+e).addClass("selected"),$(".oc-modal-wrapper").removeClass("active"),$("body").removeClass("noscroll"),m(),a()}function c(e){return"none"===window.getComputedStyle(e).display}function r(e,t,o){var n=new Date;n.setTime(n.getTime()+24*o*60*60*1e3);var i="expires="+n.toUTCString();document.cookie=e+"="+t+";"+i+";path=/"}function d(e){for(var t=e+"=",o=document.cookie.split(";"),n=0;n<o.length;n++){for(var i=o[n];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(t))return i.substring(t.length,i.length)}return""}function u(){var e=d("regulator"),t=$(".tooltip-text-modal");if(""==e&&isShowModal){s(),t.addClass("active"),t.addClass("forced");var o=$(".oc-modal-wrapper");return o.length&&(o.toggleClass("active"),g(),document.dispatchEvent(w),window.innerWidth<700?i():n(),$("body").toggleClass("noscroll")),!1}""!=e||isShowModal||r("regulator",1,365)}function m(){var e=$("body");e.css("overflow","auto"),e.css("position","relative")}function g(){if($(window).innerWidth()>992){var e=$(".oc-switcher-tooltip.active"),t=$(window).innerWidth()/2,o=$(".oc-modal-main .arrow"),n=$("#regulator-switcher").find(".custom-tooltip").offset(),i=$(window).scrollTop();e.css({top:n.top-i+30+"px"}),o.css({right:t-n.left+"px"})}}var f=document.getElementById("regulator-switcher"),v=document.getElementById("regulator-switcher-sm"),p=f||"",h=v||"",w=new Event("showOcModal");""===p&&""===h||(function(){[].slice.call(document.querySelectorAll(".tooltip-trigger")).forEach(function(e){e.addEventListener("click",function(){var e=$(".tooltip-text-modal");e.hasClass("active")?(a(),$("body").removeClass("noscroll"),window.$zopim&&$zopim(function(){$zopim.livechat.window.show()})):(s(),$("body").addClass("noscroll"),window.$zopim&&$zopim(function(){$zopim.livechat.window.hide()})),$(".oc-modal-wrapper").toggleClass("active"),e.toggleClass("active"),document.dispatchEvent(w),g();var t=document.getElementById("regulator-sm");t&&t.addEventListener("click",function(){window.innerWidth<700?i():n()})})})}(),function(){document.addEventListener("click",function(e){var t=document.getElementsByClassName("tooltip-text-modal")[0],o=t.contains(e.target);c(t)||"regulator-sm"==e.target.id||"regulator"==e.target.id||o||t.classList.contains("forced")||(r("regulator",1,365),t.classList.remove("active"),l())}),$(document).keyup(function(e){var t=document.querySelector(".tooltip-text-modal");if(t.classList.contains("forced"))return!1;27==e.keyCode&&(t.classList.remove("active"),0==u()&&r("regulator",1,365),l())});var e=[].slice.call(document.querySelectorAll(".regulator-agreed")),t=$(".tooltip-text-modal");e.forEach(function(e){e.addEventListener("click",function(e){0==u()?(r("regulator",1,365),t.removeClass("active").removeClass("forced")):t.removeClass("active").removeClass("forced"),l()})})}(),function(){var e=[].slice.call(document.querySelectorAll(".switcher-btn"));[].slice.call(document.querySelectorAll(".oc-button")).forEach(function(e){e.addEventListener("click",function(e){e.preventDefault();var t=this.dataset.regulator;if(r("regulator",1,365),"asic"===t)return void(window.location=this.href);if(void 0!==this.dataset.external){var o=-1!==this.href.indexOf("?")?"&regulator=":"?regulator=";return void(window.location=this.href+o+t)}return r("regulator_name",t,365),void(window.location=window.location.origin+window.location.pathname+"?regulator="+t)})}),e.forEach(function(e){e.addEventListener("click",function(e){e.preventDefault();var t=this.dataset.regulator;if("true"===this.dataset.newdomain)return r("regulator_name",t,365),r("regulator",1,365),window.location=this.href,!0;var o=document.querySelectorAll(".switcher-btn");[].forEach.call(o,function(e){e.classList.remove("active")}),this.classList.add("active"),r("regulator_name",t,365),$(".oc-modal-wrapper").removeClass("active"),window.location=window.location.origin+window.location.pathname+"?regulator="+t})})}(),function(){var e="";if(""==d("regulator")&&isShowModal){var t=document.querySelectorAll(".switcher-btn");[].forEach.call(t,function(e){e.classList.remove("active")}),$("#oc_modal_footer_note_without_regulator").show(),$("#oc_modal_footer_note_with_regulator").hide()}else""==d("regulator")||isShowModal?""!=d("regulator")||isShowModal||(e=d("regulator_name"),$(".switcher-btn."+e).addClass("active"),$("#oc_modal_footer_note_without_regulator").hide(),$("#oc_modal_footer_note_with_regulator").show()):(e=d("regulator_name"),$(".switcher-btn."+e).addClass("active"),$("#oc_modal_footer_note_without_regulator").hide(),$("#oc_modal_footer_note_with_regulator").show());if(""!=d("regulator")&&""!=d("regulator_name")){var o=d("regulator_name");$(".oc-label."+o).addClass("selected")}var s=document.getElementById("regulator-sm");s&&s.addEventListener("click",function(){window.innerWidth<700?i():n()})}(),g()),function(){!function(e,t,o){o=o||window;var n=!1,i=function(){n||(n=!0,requestAnimationFrame(function(){o.dispatchEvent(new CustomEvent("optimizedResize")),n=!1}))};o.addEventListener("resize",i)}()}(),window.addEventListener("resize",function(e){e.preventDefault(),$(".tooltip-text-modal").length&&(window.innerWidth<992&&(window.innerWidth<700?i():n()),clearTimeout(void 0),g())}),""!=p&&""!=h&&u(),"undefined"!=typeof $&&$(document).ready(function(){var e=$("#oc-modal-main-popup"),t=d("regulator_name"),o=$("button.oc-label.selected",e),n=$("button.oc-label."+t,e);o.length>1&&(o.removeClass("selected"),n.addClass("selected"))})},472:function(e,t,o){"use strict";!function(){function e(){null!==d&&null!==c&&null!==r&&(r.classList.add("active"),d.classList.add("active"),c.classList.add("overflow-hidden"))}function t(){null!==d&&null!==c&&null!==r&&(r.classList.remove("active"),d.classList.remove("active"),c.classList.remove("overflow-hidden"))}function o(e,t){for(var o in t)t.hasOwnProperty(o)&&(e[o]=t[o]);return e}function n(e){var t={contextElement:"aside.sidenav",menu_activeClass:"active",submenuActiveClass:"is-active",suMenuTriggerClass:"mobile-nav-menu-item",uiElements:{triggerClassName:"open-aside-menu_updated",closeElementClassName:"hamburger",subNavigationClass:"sub-nav"},commonClasses:{animation_in_progress:"animation_in_progress",fadeOut:"fadeOut",external:"link"}};this.config=o(e,t),this.context=document.querySelector(this.config.contextElement),this.trigger=document.getElementsByClassName(this.config.uiElements.triggerClassName),this.closeModalElement=this.context?this.context.getElementsByClassName(this.config.uiElements.closeElementClassName):[],this.closeBTN=this.context?this.context.getElementsByClassName(this.config.uiElements.closeElementClassName):[],this.menuElements=this.context?this.context.getElementsByClassName(this.config.suMenuTriggerClass):[],this.registerEventListeners()}function i(){var e=document.getElementById("header-wrapper"),t=document.getElementById("navbar-main");if(e&&!v){var o=e.getElementsByClassName("header-contact-box")[0].offsetHeight;v=!0,f>a&&f>o?t.classList.add("nav_up"):t.classList.remove("nav_up"),setTimeout(function(){v=!1},400)}}function s(){var e=document.getElementById("header-wrapper");if(e){var t=e.getElementsByClassName("scroll")[0].offsetHeight;t>=f?e.style.top="-"+(t+(f-t))+"px":t<f&&(e.style.top="-"+t+"px")}}var a=0,l=document.getElementById("open-aside-menu"),c=document.getElementById("wrapper"),r=document.getElementById("sidenav"),d=document.querySelector(".overlay"),u=document.getElementById("closebtn"),m=document.querySelector(".language-modal"),g=document.querySelector(".language-modal_mobile"),f=(function(){var e=!1;!function(t){(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(e=!0)}(navigator.userAgent||navigator.vendor||window.opera)}(),0),v=!1;Element.prototype.matches||(Element.prototype.matches=Element.prototype.msMatchesSelector||Element.prototype.webkitMatchesSelector),Element.prototype.closest||(Element.prototype.closest=function(e){var t=this;if(!document.documentElement.contains(t))return null;do{if(t.matches(e))return t;t=t.parentElement||t.parentNode}while(null!==t&&1===t.nodeType);return null});var p=document.getElementById("dark_notification_block_rw230919");p&&p.addEventListener("click",function(e){e.target.classList.contains("active")&&setCookie?(setCookie("risk_warning_clicked",1,365),e.target.classList.remove("active")):e.target.classList.add("active"),window.dispatchEvent(new Event("resize"))}),window.addEventListener("touchstart",function(e){e.target.classList.contains("fixed_pos")||e.target.closest(".fixed_pos")||p&&p.classList.contains("active")&&p.classList.remove("active")}),void 0!==l&&null!==l&&l.addEventListener("click",e),void 0!==u&&null!==u&&u.addEventListener("click",t),n.prototype.registerEventListeners=function(){var e=this;e.initTriggerComponent(),e.initCloseComponent(),e.initMenuComponent()},n.prototype.initCloseComponent=function(){var e=this;this.closeModalElement.length>0&&[].forEach.call(this.closeModalElement,function(t){t.addEventListener("click",function(t){void 0!==t.preventDefault&&t.preventDefault(),e.close()})})},n.prototype.initMenuComponent=function(){var e=this;this.menuElements.length>0&&[].forEach.call(this.menuElements,function(t){t.addEventListener("click",function(t){if(!t)var t=widnow.event;if(t.target.classList.contains(e.config.commonClasses.external))return!0;void 0!==t.preventDefault&&t.preventDefault(),void 0!==t.stopPropagation&&t.stopPropagation(),e.openSub(t.target)})})},n.prototype.initTriggerComponent=function(){var e=this;this.trigger.length>0&&[].forEach.call(this.trigger,function(t){t.addEventListener("click",function(t){void 0!==t.preventDefault&&t.preventDefault(),void 0!==t.stopPropagation&&t.stopPropagation(),e.open()})})},n.prototype.open=function(){this.context.classList.add(this.config.menu_activeClass),this.closeBTN[0].classList.add(this.config.submenuActiveClass)},n.prototype.openSub=function(e){if(e.classList.contains("fa"))var e=e.parentElement;e.classList.contains(this.config.submenuActiveClass)?(e.classList.remove(this.config.submenuActiveClass),e.getElementsByClassName("arrow")[0].classList.remove(this.config.submenuActiveClass),e.nextSibling.nextSibling.classList.remove(this.config.submenuActiveClass)):(e.classList.add(this.config.submenuActiveClass),e.getElementsByClassName("arrow")[0].classList.add(this.config.submenuActiveClass),e.nextSibling.nextSibling.classList.add(this.config.submenuActiveClass))},n.prototype.close=function(){var e=this;e.context.classList.contains(this.config.commonClasses.animation_in_progress)||(e.context.classList.add(this.config.commonClasses.animation_in_progress),e.context.classList.add(this.config.commonClasses.fadeOut),[].forEach.call(e.closeBTN,function(t){t.classList.remove(e.config.submenuActiveClass)}),setTimeout(function(){e.context.classList.remove(e.config.menu_activeClass),e.context.classList.remove(e.config.commonClasses.fadeOut),e.context.classList.remove(e.config.commonClasses.animation_in_progress),e.resetState()},600))},n.prototype.resetState=function(){var e=this,t=this.context.getElementsByClassName("arrow"),o=this.context.getElementsByClassName("sub-nav"),n=this.context.getElementsByClassName("mobile-nav-menu-item");[].forEach.call(t,function(t){t.classList.remove(e.config.submenuActiveClass)}),[].forEach.call(o,function(t){t.classList.remove(e.config.submenuActiveClass)}),[].forEach.call(n,function(t){t.classList.remove(e.config.submenuActiveClass)})},n.prototype.isVisible=function(){return!!this.context&&this.context.classList.contains(this.config.menu_activeClass)};var h=new n({}),w=function(e){var t=h;if(t.isVisible())if($(e.target).closest(".sidenav").length){if($(".sidenav_inner").prop("scrollHeight")===$(window).innerHeight())return e.preventDefault(),!1}else t.close()},y=function(e){var t=h;t.isVisible()&&!$(e.target).hasClass("open-aside-menu_updated")&&($(e.target).closest(".sidenav").length||t.close())},E=function(e){h.isVisible()&&h.close()};document.addEventListener("touchmove",w,{passive:!1}),document.addEventListener("click",y),window.addEventListener("resize",E),[].forEach.call(document.querySelectorAll(".show-lang-modal"),function(e){e.addEventListener("click",function(e){window.innerWidth<729&&!m.classList.contains("language-modal__shown")&&$("body,html").animate({scrollTop:0},500),e.preventDefault(),e.stopPropagation(),window.innerWidth<727?g.classList.toggle("language-modal__shown"):m.classList.toggle("language-modal__shown")})}),m&&g&&(m.addEventListener("click",function(e){e.stopPropagation()}),document.addEventListener("click",function(e){m.classList.remove("language-modal__shown")}),document.addEventListener("showOcModal",function(){m.classList.remove("language-modal__shown")}),window.addEventListener("resize",function(){m.classList.remove("language-modal__shown"),window.innerWidth>727&&g.classList.remove("language-modal__shown")})),document.addEventListener("scroll",function(){f=window.pageYOffset||document.documentElement.scrollTop,s(),i(),a=f<=0?0:f}),function(){f=window.pageYOffset||document.documentElement.scrollTop;var e=document.getElementById("header-wrapper");e&&(e.classList.add("sticky"),e.nextSibling.nextSibling.style.paddingTop=e.offsetHeight+"px"),s(),i()}(),window.addEventListener("resize",function(){f=window.pageYOffset||document.documentElement.scrollTop;var e=document.getElementById("header-wrapper");e&&(e.nextSibling.nextSibling.style.paddingTop=e.offsetHeight+"px"),s()}),function(e,t){if(e){var o,n=e.clientHeight;!function i(){o=e.clientHeight,n!=o&&t(),n=o,e.onElementHeightChangeTimer&&clearTimeout(e.onElementHeightChangeTimer),e.onElementHeightChangeTimer=setTimeout(i,200)}()}}(document.getElementById("header-wrapper"),function(){window.dispatchEvent(new Event("resize"))})}()},473:function(e,t,o){"use strict";!function(){$("#user-link").on("click",function(e){e.preventDefault(),$(".header-user-popup").toggle()}),$(window).resize(function(){$(this).width()>991&&$(".header-user-popup").hide()})}()}});