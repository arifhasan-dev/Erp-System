var e=class{constructor(e){this.element=e,this.value=parseInt(e.getAttribute(`data-value`))||0,this.size=parseInt(e.getAttribute(`data-size`))||100,this.color=e.getAttribute(`data-color`)||`#0d6efd`,this.text=e.getAttribute(`data-text`),this.strokeWidth=e.hasAttribute(`data-stroke-width`)?parseInt(e.getAttribute(`data-stroke-width`)):6,this.bgStrokeWidth=e.hasAttribute(`data-bg-stroke-width`)?parseInt(e.getAttribute(`data-bg-stroke-width`)):this.strokeWidth,this.bgColor=e.getAttribute(`data-bg-color`)||`#eee`,this.init(),this.animate()}init(){let e=this.size/2-Math.max(this.strokeWidth,this.bgStrokeWidth)/2,t=2*Math.PI*e,n=t-this.value/100*t;this.element.style.width=`${this.size}px`,this.element.style.height=`${this.size}px`,this.element.innerHTML=`
            <svg width="${this.size}" height="${this.size}" viewBox="0 0 ${this.size} ${this.size}">
                ${this.bgStrokeWidth>0?`<circle class="progress-bg" 
                        cx="${this.size/2}" 
                        cy="${this.size/2}" 
                        r="${e}" 
                        stroke="${this.bgColor}" 
                        stroke-width="${this.bgStrokeWidth}"/>`:``}
                <circle class="progress-fill" 
                        cx="${this.size/2}" 
                        cy="${this.size/2}" 
                        r="${e}" 
                        stroke="${this.color}" 
                        stroke-width="${this.strokeWidth}" 
                        stroke-dasharray="${t}" 
                        stroke-dashoffset="${t}"/>
            </svg>
            <div class="progress-text">
                <div class="progress-text-inner">
                    <div class="animate-count">0%</div>
                    ${this.text?`<div class="small">${this.text}</div>`:``}
                </div>
            </div>
        `,this.fillElement=this.element.querySelector(`.progress-fill`),this.countElement=this.element.querySelector(`.animate-count`),this.radius=e,this.circumference=t,this.offset=n}animate(){setTimeout(()=>{this.fillElement.style.strokeDashoffset=this.offset;let e=0,t=this.value,n=t/(1e3/16),r=setInterval(()=>{e+=n,e>=t&&(e=t,clearInterval(r)),this.countElement.textContent=Math.round(e)+`%`},16)},100)}};document.addEventListener(`DOMContentLoaded`,function(){document.querySelectorAll(`.progress-circle`).forEach(t=>{new e(t)})});