@extends('website.master')
@section('body')

@include('website.account.includes.includes')
<div class="mt-5 card">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-xl-3">
                <h6 class="card-title">Personal Information</h6>
            </div>
            <div class="col-12 col-xl-9">
                <div class="row g-5">
                    <div class="col-12">
                        <div>
                            <img id="profileImage" src="{{asset('/')}}website/assets/user-17-Y_OiPHJx.png" loading="lazy" alt="Profile Image" class="size-20 rounded-3">
                        </div>
                        <label for="fileInput" class="btn btn-sub-primary d-inline-flex gap-2 align-items-center mt-4">
                            <i data-lucide="upload" class="size-4"></i>
                            Upload Profile
                            <input type="file" id="fileInput" class="d-none">
                        </label>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="firstNameInput" class="form-label">First Name</label>
                        <input type="text" value="Lucas" id="firstNameInput" placeholder="Enter your first name" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="lastNameInput" class="form-label">Last Name</label>
                        <input type="text" value="Ethan" id="lastNameInput" placeholder="Enter your last name" class="form-control">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="roleInput" class="form-label">Role</label>
                        <input type="text" value="UI / UX Designer" id="roleInput" placeholder="Enter your role" class="form-control">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="birthDateInput" class="form-label">Birth of Date</label>
                        <input type="text" id="birthDateInput" class="form-control" data-datepicker data-date-format="yyyy-MM-dd" placeholder="Choose birth date">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="joiningDateInput" class="form-label">Joining Date</label>
                        <input type="text" id="joiningDateInput" class="form-control" data-datepicker data-date-format="yyyy-MM-dd" placeholder="Choose joining date">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="emailInput" class="form-label">Email Address</label>
                        <input type="email" value="lucas@gotpos.com" id="emailInput" placeholder="example@gotpos.com" class="form-control">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="phoneNumberInput" class="form-label">Phone Number</label>
                        <input type="number" value="01234 56789" id="phoneNumberInput" placeholder="+(00) 00000 00000" class="form-control">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="locationInput" class="form-label">Location</label>
                        <input type="text" value="Argentina" id="locationInput" placeholder="Enter location" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="languageSelect" class="form-label">Language</label>
                        <div id="languageSelect"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="currencySelect" class="form-label">Currency</label>
                        <div id="currencySelect"></div>
                    </div>
                    <div class="col-12">
                        <label for="textareaInput2" class="form-label">Objective</label>
                        <textarea type="text" rows="3" id="textareaInput2" placeholder="Write your objective" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="justify-content-end d-flex">
                            <button type="button" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-xl-3">
                <h6 class="card-title">Public Account</h6>
            </div>
            <div class="col-12 col-xl-9">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                    <div class="flex-grow-1">
                        <h6 class="mb-1">Publish your contact information publicly.</h6>
                        <p class="text-muted">Allow anyone viewing your profile to access your contact information.</p>
                    </div>
                    <div class="form-switch switch-outline-primary">
                        <input type="checkbox" id="publishContactSwitch">
                        <label class="label" for="publishContactSwitch"></label>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center mt-4 gap-2">
                    <div class="flex-grow-1">
                        <h6 class="mb-1">Make Contact Info Public</h6>
                        <p class="text-muted">Allow anyone viewing your profile to access your contact information.</p>
                    </div>
                    <div class="form-switch switch-outline-primary">
                        <input type="checkbox" id="makePublicSwitch">
                        <label class="label" for="makePublicSwitch"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0">Delete Account</h6>
    </div>
    <div class="card-body">
        <p class="text-muted mb-3">Please proceed with caution, as deleting your account and all associated data from our organization is a permanent action and cannot be undone.</p>
        <button type="button" class="btn btn-danger">Delete Account</button>
    </div>
</div>
@endsection
