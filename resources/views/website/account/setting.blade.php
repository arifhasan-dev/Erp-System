@extends('website.master')
@section('body')
@include('website.account.includes.includes')
<h6 class="mt-5 mb-1">Security</h6>
<p class="mb-5 text-muted"><a href="#!" class="text-decoration-underline link link-primary">Learn More</a> about securing your account from external and unknown intrusion.</p>
<div class="card">
    <div class="card-body row">
        <div class="col-12 col-md-9">
            <h6 class="mb-1">Account Security</h6>
            <p class="mb-2 text-muted">Secured Account means any account for which the related obligor has pledged assets or made a cash collateral deposit as security for payment of receivables that arise in such an account.</p>
            <a href="#!" class="link link-primary">
                Learn More
                <i data-lucide="move-right" class="size-4"></i>
            </a>
        </div>
        <div class="col-12 col-md-3">
            <img src="assets/security-Xxy50td3.png" loading="lazy" alt="security" class="size-24 mx-auto d-block">
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body d-flex flex-wrap flex-md-nowrap gap-3">
        <div class="flex-shrink-0">
            <div class="d-flex gap-2 align-items-center">
                <img src="data:image/png;base64,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" loading="lazy" alt="google" class="size-5">
                <h6 class="mb-0">Google Authentication</h6>
            </div>
        </div>
        <div>
            <p class="mb-3 text-muted">If you set up 2-Step Verification, you can use the Google Authenticator app to generate codes. You can still generate codes without internet connection or mobile service. Learn more about <a href="#!" class="link link-primary">2-Step Verification</a></p>
            <span class="badge bg-success-subtle text-success border border-success-subtle">
                    <i data-lucide="circle-check-big" class="size-3 me-1"></i>
                    <span>Connected</span>
                </span>
        </div>

        <div class="flex-shrink-0">
            <button type="button" class="btn btn-light" data-bs-target="#googleAuthenticationModal" data-bs-toggle="modal">Enable</button>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0">Update Password</h6>
    </div>

    <div class="card-body">
        @livewire('profile.update-password-form')
    </div>
</div>

<div class="main-footer">
    <div class="w-100">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <ul class="d-flex align-items-center mb-0 list-unstyled gap-4">
                    <li><a href="#!" class="fw-medium link link-custom-primary">About</a></li>
                    <li><a href="#!" class="fw-medium link link-custom-primary">Support</a></li>
                    <li><a href="#!" class="fw-medium link link-custom-primary">Purchase Nowhttps://srbthemes.kcubeinfotech.com/
                </ul>
            </div>
            <div class="col-lg-6 text-muted text-center text-lg-end">
                <div>
                    &copy; <span id="currentYearFooter"></span> GotPOS. Crafted by <a href="https://1.envato.market/srbthemes" target="_blank" class="fw-semibold text-reset">SRBThemes</a>
                </div>
            </div>
        </div>
    </div>
</div></div>
</div>
</div>

<!-- First Modal -->
<div class="modal fade" id="googleAuthenticationModal" aria-hidden="true" aria-labelledby="googleAuthenticationModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Set up two-factor authentication</h6>
                <button type="button" class="btn-close size-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-dark">To authorize transactions, kindly scan this QR code with your Google Authenticator App and then enter the verification code provided below.</p>
                <div class="p-4 mb-3">
                    <img src="assets/qr-CspI8cA0.png" loading="lazy" alt="QR Code" class="size-28 mx-auto d-block">
                </div>
                <div>
                    <div class="d-flex justify-content-center gap-3">
                        <input type="text" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*">
                        <input type="text" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*">
                        <input type="text" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*">
                        <input type="text" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*">
                        <input type="text" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*">
                        <input type="text" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*">
                    </div>
                    <div class="mt-5">
                        <button type="button" id="verifyButton" class="btn btn-primary w-100">Verify Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Second Modal -->
<div class="modal fade" id="googleAuthenticationModal2" aria-hidden="true" aria-labelledby="googleAuthenticationModalLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mb-5">
                    <h6 class="mb-2 fs-16">Please check your email</h6>
                    <p class="mb-2">We've sent a code to <b>lucasethan@gotpos.com</b></p>
                </div>
                <form action="{{route('password.update')}}" method="post">
                    @csrf
                    <div class="d-flex justify-content-center gap-3">
                        <input type="text" id="input1" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*" oninput="validateInput(this, event)">
                        <input type="text" id="input2" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*" oninput="validateInput(this, event)">
                        <input type="text" id="input3" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*" oninput="validateInput(this, event)">
                        <input type="text" id="input4" class="form-control pattern-input text-center fs-3 fw-bold bg-light rounded p-2 size-14" maxlength="1" pattern="\d*" oninput="validateInput(this, event)">
                    </div>
                    <div class="mt-5 d-flex justify-content-center gap-2">
                        <button type="button" class="btn btn-active-danger w-100" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary w-100" type="submit">Verify</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
