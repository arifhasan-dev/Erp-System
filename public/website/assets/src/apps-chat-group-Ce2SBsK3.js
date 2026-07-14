import{a as e}from"../admin.bundle-CBXoUBAg.js";import"../main-B7Jkv9i9.js";import{t}from"../sweetalert2-BUm3ePnk.js";/* empty css                            */var n=e(t(),1);VirtualSelect.init({ele:`#addMemberSelect`,options:[{label:`Auli Ahokas`,value:`Auli Ahokas`},{label:`Sirpa Kolkka`,value:`Sirpa Kolkka`},{label:`Leena Laine`,value:`Leena Laine`},{label:`Risto Saraste`,value:`Risto Saraste`},{label:`Mikko Virtanen`,value:`Mikko Virtanen`},{label:`Tuula Nieminen`,value:`Tuula Nieminen`},{label:`Rosa Lynch`,value:`Rosa Lynch`},{label:`Meagan Snow`,value:`Meagan Snow`},{label:`Jessica Perry`,value:`Jessica Perry`},{label:`Julie Lawson`,value:`Julie Lawson`},{label:`Fiona Smith`,value:`Fiona Smith`},{label:`Linda Stucky`,value:`Linda Stucky`}],search:!0,allowNewOption:!0,showValueAsTags:!0,multiple:!0});var r=[{id:1,name:`Shopify Developers`,message:`Hello, How are you?`,time:`11:48AM`,img:`assets/images/brands/img-01.png`,badge:2,active:!0},{id:2,name:`Social Medium Team`,message:`Hello, How are you?`,time:`08:14AM`,img:`assets/images/brands/img-02.png`,badge:2,active:!1},{id:3,name:`Deployment Disruptor`,message:`Hello, How are you?`,time:`04:00PM`,img:`assets/images/brands/img-03.png`,badge:null,active:!1},{id:4,name:`Full-Stack Crew`,message:`Hello, How are you?`,time:`05:14PM`,img:`assets/images/brands/img-04.png`,badge:null,active:!1},{id:5,name:`UX/UI Avengers`,message:`Hello, How are you?`,time:`11:57AM`,img:`assets/images/brands/img-05.png`,badge:null,active:!1},{id:6,name:`Frontend Ninjas`,message:`Can you review the latest UI changes?`,time:`09:42AM`,img:`assets/images/brands/img-06.png`,badge:2,active:!1},{id:7,name:`Backend Builders`,message:`API deployment completed successfully.`,time:`10:18AM`,img:`assets/images/brands/img-07.png`,badge:null,active:!1},{id:8,name:`DevOps Squad`,message:`Server maintenance scheduled tonight.`,time:`Yesterday`,img:`assets/images/brands/img-08.png`,badge:1,active:!1},{id:9,name:`Product Thinkers`,message:`Let’s finalize the roadmap today.`,time:`Yesterday`,img:`assets/images/brands/img-09.png`,badge:null,active:!1},{id:10,name:`QA Heroes`,message:`Found a few edge cases in checkout.`,time:`08:36AM`,img:`assets/images/brands/img-10.png`,badge:3,active:!1}],i=document.getElementById(`chatList`);r.forEach(e=>{let t=e.badge?`<span class="badge bg-danger-subtle text-danger">${e.badge}</span>`:``,n=e.active?`active`:``;i.innerHTML+=`
      <li id="chat-${e.id}">
        <a href="#!" class="chat-list-item ${n}">
          <div class="position-relative size-10 bg-light flex-shrink-0 rounded-circle p-2">
            <img src="${e.img}" alt="" class="img-fluid rounded-circle">
          </div>
          <div class="flex-grow-1 overflow-hidden">
            <h6 class="mb-1 lh-sm">${e.name}</h6>
            <p class="text-muted text-truncate">${e.message}</p>
          </div>
          <div class="flex-shrink-0 text-end">
            <p class="mb-1 fs-12 text-muted">${e.time}</p>
            ${t}
          </div>
        </a>
      </li>
    `});var a=document.querySelectorAll(`.chat-list-item`);a.forEach(e=>{e.addEventListener(`click`,t=>{a.forEach(e=>e.classList.remove(`active`)),e.classList.add(`active`);let n=e.closest(`li`).id.split(`-`)[1];r.forEach(e=>{e.active=e.id==n})})});var o=document.getElementById(`saveGroupBtn`),s=document.getElementById(`locationInput`);o.addEventListener(`click`,()=>{let e=s.value.trim();if(e!==``){let t={id:r.length+1,name:e,message:`Group created`,time:new Date().toLocaleTimeString([],{hour:`2-digit`,minute:`2-digit`}),img:`assets/images/brands/img-27.png`,badge:null,active:!1};r.unshift(t);let n=`
        <li id="chat-${t.id}">
          <a href="#!" class="chat-list-item">
            <div class="position-relative size-10 bg-body-secondary flex-shrink-0 rounded-circle p-2">
              <img src="${t.img}" alt="" class="img-fluid rounded-circle">
            </div>
            <div class="flex-grow-1 overflow-hidden">
              <h6 class="mb-0">${t.name}</h6>
              <p class="fs-12 text-muted text-truncate">${t.message}</p>
            </div>
            <div class="flex-shrink-0 text-end">
              <p class="mb-1 fs-12 text-muted">${t.time}</p>
            </div>
          </a>
        </li>
      `;i.insertAdjacentHTML(`afterbegin`,n),s.value=``,window.bootstrap.Modal.getInstance(document.querySelector(`.modal`))}else alert(`Please enter group name`)});var c=document.getElementById(`searchChat`),l=document.getElementById(`noResult`);c.addEventListener(`keyup`,()=>{let e=c.value.toLowerCase(),t=document.querySelectorAll(`#chatList li`),n=!1;t.forEach(t=>{t.querySelector(`h6`).textContent.toLowerCase().includes(e)?(t.style.display=`block`,n=!0):t.style.display=`none`}),n?l.classList.add(`d-none`):l.classList.remove(`d-none`)});var u=document.querySelector(`.avatar img`),d=document.querySelector(`.avatar`).nextElementSibling.querySelector(`a`),f=document.querySelector(`.text-center img`),p=document.querySelector(`.text-center h6`);i.addEventListener(`click`,e=>{let t=e.target.closest(`.chat-list-item`);if(!t)return;let n=t.querySelector(`img`).src,r=t.querySelector(`h6`).textContent;u.src=n,d.textContent=r,f.src=n,p.textContent=r});var m=[{id:1,name:`User 15`,message:`Hey team, I hope everyone is doing well. Let's do a quick standup. What are everyone's updates for today?`,time:`Today, 09:59 AM`,avatar:`assets/images/avatar/user-15.png`,position:`left`},{id:2,name:`You`,message:`Morning! I’m working on the new theme design. Almost done with the homepage. I'll move on to the product pages next. Could use some feedback on the hero section if anyone has time.`,time:`Today, 10:00 AM`,avatar:`assets/images/avatar/user-17.png`,position:`right`},{id:3,name:`User 11`,message:`Hey all. I’m debugging an issue with the checkout process. There seems to be a problem with the payment gateway integration. I'll keep you posted.`,time:`Today, 10:11 AM`,avatar:`assets/images/avatar/user-11.png`,position:`left`},{id:4,name:`User 19`,message:`Hi team! I’m working on integrating the third-party review system. I’ve run into a small issue with the API limits, but I’m handling it. Should have it sorted by the end of the day.`,time:`Today, 10:30 AM`,avatar:`assets/images/avatar/user-19.png`,position:`left`},{id:5,name:`User 4`,message:`Hi team. I’m testing the recent updates on the staging server. Found a couple of minor bugs in the user registration flow. Jamie, I’ll share the details with you in a bit.`,time:`Today, 10:30 AM`,avatar:`assets/images/avatar/user-4.png`,position:`left`},{id:6,name:`User 20`,message:`Thanks, Sarah. Casey, I’ll ping you when I start on the product pages. Your mockups look great!`,time:`Today, 10:30 AM`,avatar:`assets/images/avatar/user-20.png`,position:`left`},{id:7,name:`User 17`,message:`Sure thing, Sarah. I might need a second pair of eyes on the checkout flow once you're done with the gateway integration.`,time:`Today, 10:30 AM`,avatar:`assets/images/avatar/user-17.png`,position:`right`}],h=document.querySelector(`.d-flex.flex-column.gap-5`);document.querySelector(`.form-control`);var g=document.querySelector(`.btn-active-primary`);function _(){h.innerHTML=``,m.forEach(e=>{let t=`
      <div class="d-flex align-items-end gap-4 ${e.position===`right`?`ms-auto`:``} max-w-xl" data-id="${e.id}">
        ${e.position===`left`?`
          <div class="position-relative size-8 flex-shrink-0 avatar">
            <img src="${e.avatar}" alt="" class="img-fluid rounded-circle">
            <span class="status-indicator bg-success size-2-5"></span>
          </div>`:``}

        <div class="flex-grow-1">
          <div class="d-flex align-items-end gap-4">
            <div class="flex-grow-1">
              <p class="text-muted mb-1 fs-12 ${e.position===`right`?`text-end`:``}">${e.time}</p>
              <div class="px-4 py-10px position-relative text-body ${e.position===`right`?`rounded-top-3 rounded-start-3 bg-light chat-right-bubble`:`rounded-top-3 rounded-end-3 border chat-left-bubble `}">
                ${e.message}
              </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-link text-muted p-0" type="button" aria-label="Dropdown" data-bs-toggle="dropdown" aria-expanded="true">
                    <i class="ri-more-2-fill"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a href="#!" class="dropdown-item">
                            <i class="ri-reply-line me-1"></i>
                            <span>Reply</span>
                        </a>
                    </li>
                    <li class="delete-msg" data-id="${e.id}">
                        <a href="#!" class="dropdown-item">
                            <i class="ri-delete-bin-line me-1"></i>
                            <span>Delete</span>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
        </div>

        ${e.position===`right`?`
          <div class="position-relative size-8 flex-shrink-0 avatar">
            <img src="${e.avatar}" alt="" class="img-fluid rounded-circle">
            <span class="status-indicator bg-success size-2-5"></span>
          </div>`:``}
      </div>
    `;h.innerHTML+=t}),document.querySelectorAll(`.delete-msg`).forEach(e=>{e.addEventListener(`click`,function(){v(parseInt(this.dataset.id))})})}function v(e){m.splice(m.findIndex(t=>t.id===e),1),_()}function y(){let e=messageInput.value.trim();if(e!==``){let t={id:m.length+1,sender:`You`,avatar:`assets/images/avatar/user-17.png`,message:e,time:`Today, `+new Date().toLocaleTimeString([],{hour:`2-digit`,minute:`2-digit`}),position:`right`};m.push(t),_(),x(),h.scrollTop=h.scrollHeight,messageInput.value=``,messageInput.focus()}}g.onclick=y;var b=document.querySelector(`.chat-messages`);function x(){setTimeout(()=>{let e=b.lastElementChild;e&&e.scrollIntoView({behavior:`smooth`,block:`end`})},200)}messageInput.addEventListener(`keydown`,function(e){e.key===`Enter`&&!e.shiftKey&&(y(),e.preventDefault())}),document.addEventListener(`click`,function(e){let t=e.target.closest(`.dropdown-item`);t&&t.innerText.includes(`Clear Chat`)&&n.default.fire({title:`Are you sure?`,text:`You want to clear all chat messages!`,icon:`warning`,showCancelButton:!0,confirmButtonColor:`#3085d6`,cancelButtonColor:`#d33`,confirmButtonText:`Yes, Clear it!`}).then(e=>{e.isConfirmed&&(h.innerHTML=``,m.splice(0,m.length),x(),n.default.fire({title:`Cleared!`,text:`All chat messages have been cleared.`,icon:`success`,timer:1500,showConfirmButton:!1}))})}),_(),window.onload=function(){x()};