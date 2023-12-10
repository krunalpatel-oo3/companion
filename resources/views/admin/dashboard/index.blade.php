@extends('admin.includes.app')

@section('title', 'Dashboard')

@section('content')
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
    <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Multipurpose</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="index.html" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">Dashboards</li>
            </ul>
        </div>
    </div>
</div>

<div id="kt_app_content" class="app-content  flex-column-fluid ">    
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
         <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">   
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>             
                    </div>
                </div>
                <div class="card-body d-flex align-items-end pt-0">
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>43 Pending</span>
                            <span>72%</span>
                        </div>
                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        </div>
    </div>
</div>
@endsection
