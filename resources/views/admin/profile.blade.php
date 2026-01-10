@extends('admin.layouts.app')

@section('title','Dashboard')

@section('content')

<!--page-wrapper-->
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">User Profile</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            <a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="user-profile-page">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-12 col-lg-7 border-right">
                                <div class="d-md-flex align-items-center">
                                    <div class="mb-md-0 mb-3">
                                        <img src="{{ asset($admin->profile_image ?? 'assets/images/avatars/avatar-1.png') }}" class="rounded-circle shadow" width="130" height="130" alt="Admin Image">
                                    </div>
                                    <div class="ms-md-4 flex-grow-1">
                                        <div class="d-flex align-items-center mb-1">
                                            <h4 class="mb-0">{{ $admin->first_name }} {{ $admin->last_name }}</h4>
                                        </div>
                                        <p class="mb-0 text-muted">Administrator</p>
                                        <p class="text-primary"><i class='bx bx-buildings'></i> School Of Athens (India)</p>
                                        <button type="button" class="btn btn-primary">Connect</button>
                                        <button type="button" class="btn btn-outline-secondary ms-2">Resume</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-12 col-lg-5">
                                <table class="table table-sm table-borderless mt-md-0 mt-3">
                                    <tbody>
                                        <tr>
                                            <th>Email:</th>
                                            <td>{{ $admin->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone:</th>
                                            <td>{{ $admin->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nation:</th>
                                            <td>{{ $admin->nation }}</td>
                                        </tr>
                                        <tr>
                                            <th>DOB:</th>
                                            <td>{{ \Carbon\Carbon::parse($admin->dob)->format('d M Y') }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="mb-3 mb-lg-0">
                                    @if($admin->twitter)
                                        <a href="{{ $admin->twitter }}" target="_blank" class="btn btn-sm btn-link"><i class='bx bxl-twitter'></i></a>
                                    @endif
                                    @if($admin->linkedin)
                                        <a href="{{ $admin->linkedin }}" target="_blank" class="btn btn-sm btn-link"><i class='bx bxl-linkedin'></i></a>
                                    @endif
                                    @if($admin->facebook)
                                        <a href="{{ $admin->facebook }}" target="_blank" class="btn btn-sm btn-link"><i class='bx bxl-facebook'></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--end row-->

                        <!-- Tabs -->
                        <ul class="nav nav-pills mt-3">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#Edit-Profile">
                                    <span class="btn btn-primary p-tab-name">Edit Profile</span>
                                    <i class='bx bx-message-edit font-24 d-sm-none'></i>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="Edit-Profile">
                                <div class="card shadow-none border mb-0 radius-15">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <!-- Left Form -->
                                                <div class="col-12 col-lg-5 border-end">
                                                    <form class="row g-3" method="POST" action="{{ route('admin.profile.update', $admin->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="col-6">
                                                            <label class="form-label">First Name</label>
                                                            <input type="text" name="first_name" value="{{ $admin->first_name }}" class="form-control">
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="form-label">Last Name</label>
                                                            <input type="text" name="last_name" value="{{ $admin->last_name }}" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Password</label>
                                                            <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" name="email" value="{{ $admin->email }}" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Phone</label>
                                                            <input type="text" name="phone" value="{{ $admin->phone }}" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Address</label>
                                                            <input type="text" name="address" value="{{ $admin->address }}" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Nation</label>
                                                            <input type="text" name="nation" value="{{ $admin->nation }}" class="form-control">
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <button type="submit" class="btn btn-success">Update Profile</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Right Form -->
                                                <div class="col-12 col-lg-7">
                                                    <form class="row g-3">
                                                        <div class="col-12">
                                                            <label class="form-label">Gender</label>
                                                            <select name="gender" class="form-control">
                                                                <option {{ $admin->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                                <option {{ $admin->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                                <option {{ $admin->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Language</label>
                                                            <select name="language" class="form-control">
                                                                <option>English</option>
                                                                <option>Hindi</option>
                                                                <option>French</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="mb-0">Date of Birth</p>
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="month" name="dob" value="{{ $admin->dob }}" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Twitter</label>
                                                            <input type="text" name="twitter" value="{{ $admin->twitter }}" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">LinkedIn</label>
                                                            <input type="text" name="linkedin" value="{{ $admin->linkedin }}" class="form-control">
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Facebook</label>
                                                            <input type="text" name="facebook" value="{{ $admin->facebook }}" class="form-control">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->

@include('admin.partials.footer') <!-- You can move footer to a partial -->

@endsection
