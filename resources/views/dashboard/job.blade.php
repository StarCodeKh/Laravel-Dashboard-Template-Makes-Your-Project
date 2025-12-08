@extends('layouts.master')
@section('title', 'Job Dashboard')
@section('content')
    <!-- Page-content -->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Job Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Job Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="d-flex flex-column h-100">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--ST-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total Jobs</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="36894">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="total_jobs" data-colors="[" --ST-success"]"="" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                        <div class="col-xl-6 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--ST-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Apply Jobs</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="28410">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="apply_jobs" data-colors="[" --ST-success"]"="" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-6 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--ST-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">New Jobs</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="4305">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="new_jobs_chart" data-colors="[" --ST-success"]"="" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-6 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--ST-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Interview</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="5021">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="interview_chart" data-colors="[" --ST-danger"]"="" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-6 col-md-6">
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--ST-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Hired</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="3948">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="hired_chart" data-colors="[" --ST-success"]"="" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                        <div class="col-xl-6 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--ST-success)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Rejected</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="1340">0</span></h4>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div id="rejected_chart" data-colors="[" --ST-danger"]"="" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
            <div class="col-xl-6">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Featured Companies</h4>
                        <div class="flex-shrink-0">
                            <a href="#!" class="btn btn-soft-primary btn-sm material-shadow-none">View All Companies <i class="ri-arrow-right-line align-bottom"></i></a>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                    <div class="avatar-title bg-secondary-subtle rounded">
                                                        <img src="{{ asset('assets/images/img-1_1.png') }}" alt="" height="16">
                                                    </div>
                                                </div>
                                                <h6 class="mb-0">Force Medicines</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Cullera, Spain
                                        </td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                    <div class="avatar-title bg-warning-subtle rounded">
                                                        <img src="{{ asset('assets/images/img-3.png') }}" alt="" height="16">
                                                    </div>
                                                </div>
                                                <h6 class="mb-0">Syntyce Solutions</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Mughairah, UAE
                                        </td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                    <div class="avatar-title bg-primary-subtle rounded">
                                                        <img src="{{ asset('assets/images/img-2.png') }}" alt="" height="16">
                                                    </div>
                                                </div>
                                                <h6 class="mb-0">Moetic Fashion</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Mughairah, UAE
                                        </td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                    <div class="avatar-title bg-danger-subtle rounded">
                                                        <img src="{{ asset('assets/images/img-4.png') }}" alt="" height="16">
                                                    </div>
                                                </div>
                                                <h6 class="mb-0">Meta4Systems</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Germany
                                        </td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-xs me-2 flex-shrink-0">
                                                    <div class="avatar-title bg-danger-subtle rounded">
                                                        <img src="{{ asset('assets/images/img-5.png') }}" alt="" height="16">
                                                    </div>
                                                </div>
                                                <h6 class="mb-0">StarCode Kh</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="ri-map-pin-2-line text-primary me-1 align-bottom"></i> Limestone, US
                                        </td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-secondary"><i class="ri-facebook-fill"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-danger"><i class="ri-mail-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-primary"><i class="ri-global-line"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#!" class="link-info"><i class="ri-twitter-line"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="#!" class="btn btn-link btn-sm material-shadow-none">View More <i class="ri-arrow-right-line align-bottom"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="align-items-center mt-4 pt-2 justify-content-between d-md-flex">
                            <div class="flex-shrink-0 mb-2 mb-md-0">
                                <div class="text-muted">
                                    Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                                </div>
                            </div>
                            <ul class="pagination pagination-separated pagination-sm mb-0">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link">←</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">→</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- .card-->
            </div><!--end col-->
        </div><!--end row-->
        
        <div class="row">
            <div class="col-xxl-8">
                <div class="card card-height-100">
                    <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Applications Statistic</h4>
                        <div>
                            <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                                ALL
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm material-shadow-none">
                                6M
                            </button>
                            <button type="button" class="btn btn-soft-primary btn-sm material-shadow-none">
                                1Y
                            </button>
                        </div>
                    </div><!-- end card header -->
        
                    <div class="card-header p-0 border-0 bg-light-subtle">
                        <div class="row g-0 text-center">
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="3364">0</span></h5>
                                    <p class="text-muted mb-0">New Applications</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="2804">0</span></h5>
                                    <p class="text-muted mb-0">Interview</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="2402">0</span></h5>
                                    <p class="text-muted mb-0">Hired</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0 border-end-0">
                                    <h5 class="mb-1 text-success"><span class="counter-value" data-target="8">0</span>k</h5>
                                    <p class="text-muted mb-0">Total Applications</p>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div><!-- end card header -->
        
                    <div class="card-body p-0 pb-2">
                        <div class="w-100">
                            <div id="line_chart_dashed" data-colors="[" --ST-success",="" "--ST-info",="" "--ST-primary"]"="" data-colors-modern="[" --ST-primary",="" "--ST-secondary",="" "--ST-success"]"="" data-colors-interactive="[" --ST-secondary",="" data-colors-creative="[" --ST-info",="" data-colors-corporate="[" "--ST-success",="" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h6 class="card-title mb-0 flex-grow-1">Popular Candidates</h6>
                            <div class="flex-shrink-0">
                                <a href="apps-job-candidate-lists.html" class="link-primary">View All <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body border-end">
                                <div class="search-box">
                                    <input type="text" class="form-control bg-light border-light" autocomplete="off" id="searchList" placeholder="Search candidate...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                                <div data-simplebar="" style="max-height: 190px" class="px-3 mx-n3">
                                    <ul class="list-unstyled mb-0 pt-2" id="candidate-list">
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="{{ asset('assets/images/avatar-10.jpg') }}" alt="" class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Tonya Noble</span> <span class="text-muted fw-normal">@tonya</span></h5>
                                                    <div class="d-none candidate-position">Web Developer</div>
                                                </div>
                                            </a>
                                        </li>
                
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="{{ asset('assets/images/avatar-1.jpg') }}" alt="" class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Nicholas Ball</span> <span class="text-muted fw-normal">@nicholas</span></h5>
                                                    <div class="d-none candidate-position">Assistant / Store Keeper</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="{{ asset('assets/images/avatar-9.jpg') }}" alt="" class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Zynthia Marrow</span> <span class="text-muted fw-normal">@zynthia</span></h5>
                                                    <div class="d-none candidate-position">Full Stack Engineer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="{{ asset('assets/images/avatar-2.jpg') }}" alt="" class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Cheryl Moore</span> <span class="text-muted fw-normal">@Cheryl</span></h5>
                                                    <div class="d-none candidate-position">Product Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="{{ asset('assets/images/avatar-5.jpg') }}" alt="" class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Jennifer Bailey</span> <span class="text-muted fw-normal">@Jennifer</span></h5>
                                                    <div class="d-none candidate-position">Marketing Director</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="d-flex align-items-center py-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs">
                                                        <img src="{{ asset('assets/images/avatar-8.jpg') }}" alt="" class="img-fluid rounded-circle candidate-img">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-1 text-truncate"><span class="candidate-name">Hadley Leonard</span> <span class="text-muted fw-normal">@hadley</span></h5>
                                                    <div class="d-none candidate-position">Executive, HR Operations</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body text-center">
                                <div class="avatar-md mb-3 mx-auto">
                                    <img src="{{ asset('assets/images/avatar-10.jpg') }}" alt="" id="candidate-img" class="img-thumbnail rounded-circle shadow-none">
                                </div>
                
                                <h5 id="candidate-name" class="mb-0">Tonya Noble</h5>
                                <p id="candidate-position" class="text-muted">Web Developer</p>
                
                                <div class="d-flex gap-2 justify-content-center mb-3">
                                    <button type="button" class="btn avatar-xs p-0 material-shadow-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Google">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-google-line"></i>
                                        </span>
                                    </button>
                
                                    <button type="button" class="btn avatar-xs p-0 material-shadow-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-linkedin-line"></i>
                                        </span>
                                    </button>
                                    <button type="button" class="btn avatar-xs p-0 material-shadow-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Dribbble">
                                        <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-dribbble-fill"></i>
                                        </span>
                                    </button>
                                </div>
                
                                <div>
                                    <button type="button" class="btn btn-success custom-toggle w-100" data-bs-toggle="button" aria-pressed="false">
                                        <span class="icon-on"><i class="ri-add-line align-bottom me-1"></i> Follow</span>
                                        <span class="icon-off"><i class="ri-user-unfollow-line align-bottom me-1"></i> Unfollow</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="card overflow-hidden shadow-none">
                    <div class="card-body bg-danger-subtle">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avatar-sm">
                                    <div class="avatar-title bg-danger bg-opacity-10 text-danger rounded-circle fs-17">
                                        <i class="ri-gift-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="fs-16">Invite your friends to Template</h6>
                                <p class="text-muted mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally.</p>
                            </div>
                        </div>
                        <div class="mt-3 text-end">
                            <a href="#!" class="btn btn-danger">Invite Friends</a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!--end row-->
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-auto">
                                <div>
                                    <h4 class="card-title mb-0 flex-grow-1">Recommended Jobs</h4>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control" id="searchResultList" placeholder="Search for jobs...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="recomended-jobs" class="table-card"></div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        
        <div class="row">
            <div class="col-xxl-8">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Recent Applicants</h4>
                        <div class="flex-shrink-0">
                            <button type="button" class="btn btn-soft-info btn-sm material-shadow-none">
                                <i class="ri-file-list-3-line align-bottom"></i> Generate Report
                            </button>
                        </div>
                    </div><!-- end card header -->
        
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                <thead class="text-muted table-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Candidate Name</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Rate/hr</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#!" class="fw-medium link-primary">#ST2112</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <img src="{{ asset('assets/images/avatar-1.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">Nicholas Ball</div>
                                            </div>
                                        </td>
                                        <td>Assistant / Store Keeper</td>
                                        <td>
                                            <span class="text-success">$109.00</span>
                                        </td>
                                        <td>California, US</td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success">Full Time</span>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 fw-medium mb-0">5.0<span class="text-muted fs-11 ms-1">(245 Rating)</span></h5>
                                        </td>
                                    </tr><!-- end tr -->
                                    <tr>
                                        <td>
                                            <a href="#!" class="fw-medium link-primary">#ST2111</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <img src="{{ asset('assets/images/avatar-2.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">Elizabeth Allen</div>
                                            </div>
                                        </td>
                                        <td>Education Training</td>
                                        <td>
                                            <span class="text-success">$149.00</span>
                                        </td>
                                        <td>Zuweihir, UAE</td>
                                        <td>
                                            <span class="badge bg-secondary-subtle text-secondary">Freelancer</span>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 fw-medium mb-0">4.5<span class="text-muted fs-11 ms-1">(645 Rating)</span></h5>
                                        </td>
                                    </tr><!-- end tr -->
                                    <tr>
                                        <td>
                                            <a href="#!" class="fw-medium link-primary">#ST2109</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <img src="{{ asset('assets/images/avatar-3.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">Cassian Jenning</div>
                                            </div>
                                        </td>
                                        <td>Graphic Designer</td>
                                        <td>
                                            <span class="text-success">$215.00</span>
                                        </td>
                                        <td>Limestone, US</td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger">Part Time</span>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 fw-medium mb-0">4.9<span class="text-muted fs-11 ms-1">(89 Rating)</span></h5>
                                        </td>
                                    </tr><!-- end tr -->
                                    <tr>
                                        <td>
                                            <a href="#!" class="fw-medium link-primary">#ST2108</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <img src="{{ asset('assets/images/avatar-4.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">Scott Holt</div>
                                            </div>
                                        </td>
                                        <td>UI/UX Designer</td>
                                        <td>
                                            <span class="text-success">$199.00</span>
                                        </td>
                                        <td>Germany</td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger">Part Time</span>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 fw-medium mb-0">4.3<span class="text-muted fs-11 ms-1">(47 Rating)</span></h5>
                                        </td>
                                    </tr><!-- end tr -->
                                    <tr>
                                        <td>
                                            <a href="#!" class="fw-medium link-primary">#ST2109</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <img src="{{ asset('assets/images/avatar-6.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">Hadley Leonard</div>
                                            </div>
                                        </td>
                                        <td>React Developer</td>
                                        <td>
                                            <span class="text-success">$330.00</span>
                                        </td>
                                        <td>Mughairah, UAE</td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success">Full Time</span>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(161 Rating)</span></h5>
                                        </td>
                                    </tr><!-- end tr -->
                                    <tr>
                                        <td>
                                            <a href="#!" class="fw-medium link-primary">#ST2110</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <img src="{{ asset('assets/images/avatar-10.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">Harley Watkins</div>
                                            </div>
                                        </td>
                                        <td>Project Manager</td>
                                        <td>
                                            <span class="text-success">$330.00</span>
                                        </td>
                                        <td>Texanna, US</td>
                                        <td>
                                            <span class="badge bg-secondary-subtle text-secondary">Freelancer</span>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(3.21k Rating)</span></h5>
                                        </td>
                                    </tr><!-- end tr -->
                                    <tr>
                                        <td>
                                            <a href="#!" class="fw-medium link-primary">#ST2111</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <img src="{{ asset('assets/images/avatar-8.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">Nadia Harding</div>
                                            </div>
                                        </td>
                                        <td>Web Designer</td>
                                        <td>
                                            <span class="text-success">$330.00</span>
                                        </td>
                                        <td>Pahoa, US</td>
                                        <td>
                                            <span class="badge bg-danger-subtle text-danger">Part Time</span>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(2.93k Rating)</span></h5>
                                        </td>
                                    </tr><!-- end tr -->
                                    <tr>
                                        <td>
                                            <a href="#!" class="fw-medium link-primary">#ST2112</a>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <img src="{{ asset('assets/images/avatar-9.jpg') }}" alt="" class="avatar-xs rounded-circle">
                                                </div>
                                                <div class="flex-grow-1">Jenson Carlson</div>
                                            </div>
                                        </td>
                                        <td>Product Director</td>
                                        <td>
                                            <span class="text-success">$330.00</span>
                                        </td>
                                        <td>Pahoa, US</td>
                                        <td>
                                            <span class="badge bg-success-subtle text-success">Full Time</span>
                                        </td>
                                        <td>
                                            <h5 class="fs-14 fw-medium mb-0">4.7<span class="text-muted fs-11 ms-1">(4.31k Rating)</span></h5>
                                        </td>
                                    </tr><!-- end tr -->
                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                        </div>
                    </div>
                </div> <!-- .card-->
            </div> <!-- .col-->
            <div class="col-xxl-4">
                <!-- card -->
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Jobs Views Location</h4>
                        <div class="flex-shrink-0">
                            <button type="button" class="btn btn-soft-primary btn-sm material-shadow-none">
                                Export Report
                            </button>
                        </div>
                    </div><!-- end card header -->
            
                    <!-- card body -->
                    <div class="card-body">
                        <div id="sales-by-locations" data-colors="[" --ST-light",="" "--ST-success",="" "--ST-primary"]"="" style="height: 269px" dir="ltr"></div>
                        <div class="px-2 py-2 mt-4">
                            <p class="mb-1">Canada <span class="float-end">75%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                            </div>
            
                            <p class="mt-3 mb-1">Greenland <span class="float-end">47%</span>
                            </p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="47"></div>
                            </div>
            
                            <p class="mt-3 mb-1">Russia <span class="float-end">82%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="82"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div> <!-- end row-->
    </div>
    <!-- End Page-content -->
    @section('script')
        <!-- Dashboard init -->
        <script src="{{ asset('assets/js/dashboard-job.init.js') }}"></script>

        <script>
            // ---------------------
            // Applications Statistic Line Chart
            // ---------------------
            var lineOptions = {
                chart: {
                    height: 320,
                    type: "line",
                    toolbar: { show: false }
                },
                stroke: {
                    width: 3,
                    curve: "straight",
                    dashArray: [0, 8, 5]
                },
                series: [
                    { name: "New Applications", data: [45, 52, 38, 45, 19, 23, 2] },
                    { name: "Interview", data: [35, 41, 62, 42, 13, 18, 9] },
                    { name: "Hired", data: [87, 57, 74, 99, 75, 38, 62] }
                ],
                xaxis: {
                    categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]
                },
                colors: ["#0ab39c", "#299cdb", "#405189"]
            };
            new ApexCharts(document.querySelector("#line_chart_dashed"), lineOptions).render();

            // ---------------------
            // Top Creators Donut Chart
            // ---------------------
            var donutOptions = {
                chart: {
                    type: "donut",
                    height: 265
                },
                series: [34, 27, 21, 13, 5],
                labels: ["USA", "Russia", "Spain", "Italy", "Germany"],
                colors: ["#f1f3f5", "#0ab39c", "#405189", "#ffbe0b", "#e83e8c"],
                stroke: { width: 0 },
                legend: { show: false }
            };
            new ApexCharts(document.querySelector("#creators-by-locations"), donutOptions).render();
        </script>

        <script>
            const jobs = [
                ["Graphic Designer", "Digitech Galaxy", "Mughairah, UAE", "$160 - $230", "2-3+ year", "Full Time"],
                ["Marketing Director", "Meta4Systems", "Vinninga, Sweden", "$250 - $800", "0-5 year", "Full Time"],
                ["Marketing Director", "Zoetic Fashion", "Quesada, US", "$600 - $870", "0-5 year", "Freelancer"],
                ["Project Manager", "StarCode Kh", "California, US", "$400 - $600", "3+ year", "Part Time"],
                ["Project Manager", "Meta4Systems", "Limestone, US", "$210 - $300", "0-2+ year", "Freelancer"],
                ["React Developer", "iTest Factory", "Khabākhib, UAE", "$90 - $160", "5+ year", "Internship"],
            ];

            // Create the Grid.js instance
            const grid = new gridjs.Grid({
                columns: [
                "Position",
                "Company Name",
                "Location",
                "Salary",
                "Experience",
                "Job Type",
                ],
                data: jobs,
                pagination: {
                enabled: true,
                limit: 5,
                },
                sort: true,
                search: false, // we will do custom search below
            });

            // Render grid inside the div
            grid.render(document.getElementById("recomended-jobs"));

            // Custom search input handling to integrate with Grid.js
            document
                .getElementById("searchResultList")
                .addEventListener("input", (e) => {
                const query = e.target.value.toLowerCase();

                // Filter data based on query
                const filteredData = jobs.filter((row) =>
                    row.some((cell) => cell.toLowerCase().includes(query))
                );

                // Update the grid with filtered data
                grid.updateConfig({
                    data: filteredData,
                }).forceRender();
                });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {

                // 🔥 Reusable chart function
                function makeRadialChart(elementId, value, color) {
                    var el = document.querySelector(elementId);
                    if (!el) return; // prevent error if element missing

                    var options = {
                        series: [value],
                        chart: {
                            height: 85,
                            width: 85,
                            type: "radialBar"
                        },
                        plotOptions: {
                            radialBar: {
                                hollow: { size: "50%" },
                                track: { background: "#e9ecef" },
                                dataLabels: {
                                    name: { show: false },
                                    value: {
                                        show: true,
                                        fontSize: "14px",
                                        fontWeight: 700,
                                        color: "#000",
                                        offsetY: 5,
                                        formatter: (v) => v + "%"
                                    }
                                }
                            }
                        },
                        colors: [color],
                        stroke: { lineCap: "round" }
                    };

                    new ApexCharts(el, options).render();
                }

                // 🔥 Create all charts
                makeRadialChart("#total_jobs", 95, "#2AB7A9");         // success green
                makeRadialChart("#apply_jobs", 70, "#2AB7A9");         // success green
                makeRadialChart("#new_jobs_chart", 85, "#2AB7A9");     // success green
                makeRadialChart("#interview_chart", 40, "#E63946");    // danger red
                makeRadialChart("#hired_chart", 60, "#2AB7A9");        // success green
                makeRadialChart("#rejected_chart", 30, "#E63946");     // danger red

            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var options = {
                    series: [44, 55, 41], // example values
                    labels: ["USA", "Europe", "Asia"],
                    chart: {
                        type: "donut",
                        height: 269
                    },
                    colors: ["#5A6ACF", "#34C38F", "#50A5F1"], // blue, green, primary
                    stroke: {
                        width: 0
                    },
                    plotOptions: {
                        pie: {
                            donut: {
                                size: "70%"
                            }
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    legend: {
                        show: true,
                        position: "bottom",
                        horizontalAlign: "center",
                        markers: {
                            width: 10,
                            height: 10
                        }
                    }
                };

                var chart = new ApexCharts(
                    document.querySelector("#sales-by-locations"),
                    options
                );
                chart.render();
            });
        </script>
    @endsection
@endsection
