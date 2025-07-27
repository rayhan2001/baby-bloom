@extends('admin.layouts.app')
@section('title', @$data['title'])
@section('content')
    <main class="page-content">
        <div class="profile-cover bg-dark"></div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-0">My Account</h5>
                            <hr>
                            <div class="card shadow-none border">
                                <div class="card-header">
                                    <h6 class="mb-0">USER INFORMATION</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control"
                                                value="{{ $data['user']['username'] }}">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Email address <sup class="text-danger">*</sup></label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $data['user']['email'] }}">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="first_name" class="form-control"
                                                value="{{ $data['user']['first_name'] }}">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control"
                                                value="{{ $data['user']['last_name'] }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Profile Picture</label>
                                            <input type="file" name="profile_picture"
                                                class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none border">
                                <div class="card-header">
                                    <h6 class="mb-0">CONTACT INFORMATION</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control"
                                                value="{{ $data['user']['address'] }}">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">City</label>
                                            <input type="text" name="city" class="form-control"
                                                value="{{ $data['user']['city'] }}">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Country</label>
                                            <input type="text" name="country" class="form-control"
                                                value="{{ $data['user']['country'] }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">About Me</label>
                                            <textarea name="about_me" class="form-control" rows="4" cols="4" placeholder="Describe yourself..." value="{{ $data['user']['about_me'] ?? '' }}">{{ $data['user']['about_me'] ?? '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none border">
                                <div class="card-header">
                                    <h6 class="mb-0">Change Password</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label">Old Password <sup class="text-danger">*</sup></label>
                                            <input type="password" name="old_password" class="form-control"
                                                placeholder="Enter your old password">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">New Password <sup class="text-danger">*</sup></label>
                                            <input type="password" name="new_password" class="form-control"
                                                placeholder="Enter your new password">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Confirm Password <sup
                                                    class="text-danger">*</sup></label>
                                            <input type="password" name="new_password_confirmation" class="form-control"
                                                placeholder="Confirm your new password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-start">
                                <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="card-body">
                        <div class="profile-avatar text-center">
                            <img src="assets/images/avatars/avatar-1.png" class="rounded-circle shadow" width="120"
                                height="120" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-around mt-5 gap-3">
                            <div class="text-center">
                                <h4 class="mb-0">45</h4>
                                <p class="mb-0 text-secondary">Friends</p>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-0">15</h4>
                                <p class="mb-0 text-secondary">Photos</p>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-0">86</h4>
                                <p class="mb-0 text-secondary">Comments</p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <h4 class="mb-1">Jhon Deo, 27</h4>
                            <p class="mb-0 text-secondary">Sydney, Australia</p>
                            <div class="mt-4"></div>
                            <h6 class="mb-1">HR Manager - Codervent Technology</h6>
                            <p class="mb-0 text-secondary">University of Information Technology</p>
                        </div>
                        <hr>
                        <div class="text-start">
                            <h5 class="">About</h5>
                            <p class="mb-0">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout. The point of using Lorem.
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Followers
                            <span class="badge bg-primary rounded-pill">95</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            Following
                            <span class="badge bg-primary rounded-pill">75</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            Templates
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
