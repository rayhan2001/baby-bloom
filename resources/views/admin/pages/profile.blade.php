@extends('admin.layouts.app')
@section('title', @$data['title'])
@section('content')
    <main class="page-content">
        <div class="profile-cover bg-dark"></div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
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
                                            <input type="text" name="username"
                                                class="form-control @error('username') is-invalid @enderror"
                                                value="{{ $data['user']['username'] }}">
                                            @error('password')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Email address <sup class="text-danger">*</sup></label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ $data['user']['email'] }}">
                                            @error('email')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="first_name"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                value="{{ $data['user']['first_name'] }}">
                                            @error('first_name')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                value="{{ $data['user']['last_name'] }}">
                                            @error('last_name')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Profile Picture</label>
                                            <input type="file" name="profile_picture"
                                                class="form-control @error('profile_picture') is-invalid @enderror"
                                                accept="image/*">
                                            @error('profile_picture')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Birthday</label>
                                            <input type="date" name="birthday"
                                                class="form-control @error('birthday') is-invalid @enderror"
                                                value="{{ $data['user']['birthday'] }}">
                                            @error('birthday')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
                                            <textarea name="about_me" class="form-control" rows="4" cols="4" placeholder="Describe yourself..."
                                                value="{{ $data['user']['about_me'] ?? '' }}">{{ $data['user']['about_me'] ?? '' }}</textarea>
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
                                            <input type="password" name="old_password"
                                                class="form-control @error('old_password') is-invalid @enderror"
                                                placeholder="Enter your old password">
                                            @error('old_password')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">New Password <sup
                                                    class="text-danger">*</sup></label>
                                            <input type="password" name="new_password"
                                                class="form-control @error('new_password') is-invalid @enderror"
                                                placeholder="Enter your new password">
                                            @error('new_password')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Confirm Password <sup
                                                    class="text-danger">*</sup></label>
                                            <input type="password" name="new_password_confirmation"
                                                class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                                placeholder="Confirm your new password">
                                            @error('new_password_confirmation')
                                                <div class="invalid-feedback d-block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
                            <img src="{{ $data['user']->profile_picture }}" class="rounded-circle shadow" width="120"
                                height="120" alt="">
                        </div>
                        <div class="text-center mt-4">
                            <h4 class="mb-1">{{ $data['user']['username'] ?? 'John Doe' }} </h4>
                            <p class="mb-0 text-secondary">{{ $data['user']['city'] ?? 'Unknown' }},
                                {{ $data['user']['country'] ?? 'Unknown' }}</p>
                            <p class="mb-0 text-secondary">{{ $data['user']['email'] ?? 'No Email' }}</p>
                        </div>
                        <hr>
                        <div class="text-start">
                            <h5 class="">About</h5>
                            <p class="mb-0">
                                {{ $data['user']['about_me'] ?? 'No description provided.' }}
                            </p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li
                            class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-top">
                            Birthday
                            <span
                                class="badge bg-primary rounded-pill">{{ format_date($data['user']->birthday, 'd F Y') ?? 'Unknown' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
