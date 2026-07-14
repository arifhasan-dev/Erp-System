
    <div class="min-vh-100 position-relative">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="position-relative">
                    <div class="main-profile-bg position-relative">
                        <div class="size-48 square-1"></div>
                        <div class="profile-bg bg-primary-subtle"></div>
                        <img src="{{asset('/')}}website/assets/user-14-BWimhkHc.png" alt="Avatar" class="avatar-1 size-16 rounded-circle d-none d-md-block">
                        <img src="{{asset('/')}}website/assets/user-54-BgoCiuFl.png" alt="Avatar" class="avatar-2 size-16 rounded-circle d-none d-md-block">
                        <img src="{{asset('/')}}website/assets/user-57-BgWfHmFH.png" alt="Avatar" class="avatar-3 size-16 rounded-circle d-none d-md-block">
                        <img src="{{asset('/')}}website/assets/user-5-BsT8d_Co.png" alt="Avatar" class="avatar-4 size-16 rounded-circle d-none d-md-block">
                        <div class="row g-0 d-none d-md-block">
                            <div class="col-7 col-xl-6 col-xxl-5 offset-5 offset-lg-4 offset-xl-5 offset-xxl-6">
                                <h3 class="fw-medium line-clamp-2 lh-base py-12 overflow-hidden">A powerful POS admin dashboard to manage sales, inventory, and daily store operations</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 border-bottom rounded-0 user-card">
                        <div class="card-body px-6 pb-0">
                            <div class="d-flex flex-wrap gap-3 justify-content-between align-items-end mb-3">
                                <img src="{{asset('/')}}website/assets/user-71-RNjOCE17.png" loading="lazy" alt="user-45" class="size-36 mt-n28 rounded-5 border border-5 border-light">
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    <div class="border py-1 px-2 d-flex align-items-center gap-3 h-100 rounded">
                                        <i class="ri-error-warning-fill text-secondary fs-xl"></i>
                                        <p>POS Offline Mode</p>
                                        <div class="form-switch switch-light-primary my-auto d-flex">
                                            <input type="checkbox" id="switch-light-1" /><label class="label" for="switch-light-1"></label>
                                        </div>
                                    </div>
                                    <a href="pos.html" class="btn btn-primary py-2">Open POS</a>
                                </div>
                            </div>
                            <div class="avatar justify-content-start gap-1 mb-1">
                                <h5 class="mt-2 mb-1">Lucas Ethan</h5>
                                <i data-lucide="badge-check" class="size-5 icon-primary"></i>
                            </div>
                            <ul class="text-muted avatar justify-content-start gap-2 flex-wrap ps-0 mb-5">
                                <li class="d-flex align-items-center gap-2">
                                    <i data-lucide="building-2" class="size-4"></i>
                                    <span>Store Manager · Main Branch</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <i data-lucide="map-pin" class="size-4"></i>
                                    <span>Buenos Aires, Argentina</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <i data-lucide="calendar-days" class="size-4"></i>
                                    <span>Joined on 24 April, 2024</span>
                                </li>
                            </ul>
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-4 mb-9">
                                <div class="d-flex flex-wrap gap-3 align-items-center">
                                    <div class="py-6px px-3 border rounded">
                                        <i class="ri-calendar-fill me-2"></i>Last Login: May 17, 2025 | 10:00 AM

                                    </div>
                                    <div class="py-6px px-3 text-white bg-primary border-primary border rounded">9 Active Staff</div>
                                </div>
                                <div class="d-flex flex-wrap gap-3 align-items-center">
                                    <a href="http://localhost:8080/index.html" class="link link-custom-primary py-6px px-3 border rounded">http://localhost:8080/index.html</a>
                                    <button type="button" class="btn btn-indigo btn-icon size-9"><i class="ri-facebook-fill fs-16"></i></button>
                                    <button type="button" class="btn btn-pink btn-icon size-9"><i class="ri-instagram-fill fs-16"></i></button>
                                    <button type="button" class="btn btn-info btn-icon size-9"><i class="ri-twitter-fill fs-16"></i></button>
                                </div>
                            </div>
                            <div>
                                <ul class="nav nav-underline gap-1 gap-lg-4">
                                    <li class="nav-item">
                                        <a class="nav-link {{request()->routeIs('website.account.index') ? 'active' : ''}}" aria-current="page" href="{{route('website.account.index')}}">
                                            <i data-lucide="user-round" class="size-4 me-1"></i>
                                            Account
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{request()->routeIs('website.account.setting') ? 'active' : ''}}" aria-current="page" href="{{route('website.account.setting')}}">
                                            <i data-lucide="shield-check" class="size-4 me-1"></i>
                                            Security
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="pages-account-billing-plan.html">
                                            <i data-lucide="gem" class="size-4 me-1"></i>
                                            Billing &amp; Plans
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="pages-account-notification.html">
                                            <i data-lucide="bell" class="size-4 me-1"></i>
                                            Notification
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="pages-account-statements.html">
                                            <i data-lucide="list-tree" class="size-4 me-1"></i>
                                            Statements
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="pages-account-logs.html">
                                            <i data-lucide="log-out" class="size-4 me-1"></i>
                                            Logs
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

