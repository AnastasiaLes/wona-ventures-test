!function(){"use strict";var e={};(function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})})(e);var t=window.wc.tracks;const n=document.querySelector("#addtag #submit");function i(e){const n=e.target.parentElement.classList[0],i={edit:"edit",inline:"quick_edit",delete:"delete",view:"preview"};i[n]&&(0,t.recordEvent)("product_attributes_term_list_action_click",{selected_action:i[n]})}function c(){document.querySelectorAll(".row-actions span").forEach((e=>{e.removeEventListener("click",i),e.addEventListener("click",i)}))}c(),null==n||n.addEventListener("click",(function(){(0,t.recordEvent)("product_attributes_add_term",{page:"tags"}),setTimeout((()=>{c()}),1e3)})),(window.wc=window.wc||{}).addTermTracking=e}();