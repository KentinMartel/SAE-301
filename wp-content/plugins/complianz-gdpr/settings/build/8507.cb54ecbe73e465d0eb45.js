"use strict";(globalThis.webpackChunkcomplianz_gdpr=globalThis.webpackChunkcomplianz_gdpr||[]).push([[8507],{7320:(e,r,t)=>{t.r(r),t.d(r,{default:()=>a});var l=t(86087),n=t(62848);const a=(0,l.memo)((({label:e,id:r,value:t,onChange:a,required:o,defaultValue:c,disabled:u,options:i={}})=>(0,l.createElement)(n.bL,{disabled:u&&!Array.isArray(u),className:"cmplz-input-group cmplz-radio-group",value:t,"aria-label":e,onValueChange:a,required:o,default:c},Object.entries(i).map((([e,t])=>(0,l.createElement)("div",{key:e,className:"cmplz-radio-group__item"},(0,l.createElement)(n.q7,{disabled:Array.isArray(u)&&u.includes(e),value:e,id:r+"_"+e},(0,l.createElement)(n.C1,{className:"cmplz-radio-group__indicator"})),(0,l.createElement)("label",{className:"cmplz-radio-label",htmlFor:r+"_"+e},t)))))))},16214:(e,r,t)=>{t.d(r,{N:()=>c});var l=t(51609),n=t(62133),a=t(91071),o=t(33362);function c(e){const r=e+"CollectionProvider",[t,c]=(0,n.A)(r),[u,i]=t(r,{collectionRef:{current:null},itemMap:new Map}),s=e+"CollectionSlot",d=e+"CollectionItemSlot",m="data-radix-collection-item";return[{Provider:e=>{const{scope:r,children:t}=e,n=l.useRef(null),a=l.useRef(new Map).current;return l.createElement(u,{scope:r,itemMap:a,collectionRef:n},t)},Slot:l.forwardRef(((e,r)=>{const{scope:t,children:n}=e,c=i(s,t),u=(0,a.s)(r,c.collectionRef);return l.createElement(o.DX,{ref:u},n)})),ItemSlot:l.forwardRef(((e,r)=>{const{scope:t,children:n,...c}=e,u=l.useRef(null),s=(0,a.s)(r,u),p=i(d,t);return l.useEffect((()=>(p.itemMap.set(u,{ref:u,...c}),()=>{p.itemMap.delete(u)}))),l.createElement(o.DX,{[m]:"",ref:s},n)}))},function(r){const t=i(e+"CollectionConsumer",r);return l.useCallback((()=>{const e=t.collectionRef.current;if(!e)return[];const r=Array.from(e.querySelectorAll(`[${m}]`));return Array.from(t.itemMap.values()).sort(((e,t)=>r.indexOf(e.ref.current)-r.indexOf(t.ref.current)))}),[t.collectionRef,t.itemMap])},c]}},71427:(e,r,t)=>{t.d(r,{jH:()=>a});var l=t(51609);const n=(0,l.createContext)(void 0);function a(e){const r=(0,l.useContext)(n);return e||r||"ltr"}},18723:(e,r,t)=>{var l;t.d(r,{B:()=>u});var n=t(51609),a=t(88200);const o=(l||(l=t.t(n,2)))["useId".toString()]||(()=>{});let c=0;function u(e){const[r,t]=n.useState(o());return(0,a.N)((()=>{e||t((e=>null!=e?e:String(c++)))}),[e]),e||(r?`radix-${r}`:"")}},85357:(e,r,t)=>{t.d(r,{Z:()=>n});var l=t(51609);function n(e){const r=(0,l.useRef)({value:e,previous:e});return(0,l.useMemo)((()=>(r.current.value!==e&&(r.current.previous=r.current.value,r.current.value=e),r.current.previous)),[e])}}}]);