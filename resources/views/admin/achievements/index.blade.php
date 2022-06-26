@extends('layouts.admin.mastar')
@section('title')
انجازات صناع الحياة
@endsection
@section('contact')
<div class="wrapper">
<!--=================================
 preloader -->



<!--=================================
 preloader -->


<!--=================================
 header start-->

@include('layouts.admin.nav')

<!--=================================
 header End-->

<!--=================================
 Main content -->

<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar start-->
    @include('layouts.admin.sidebar')

<!-- Left Sidebar End-->

 <!--=================================
wrapper -->
<div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
         @include('layouts.massegs')
            <h4 class="mb-0"> انجازات صناع الحياة  </h4>
          @include('admin.achievements.add')

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Page Title</li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body -->
    <div class="row">
      <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
          <div class="card-body">
            <div class="card card-statistics h-100">
                <div class="card-body">

                 <h5 class="card-title border-0 pb-0">Table simple</h5>
                 <div class="table-responsive">
                  <table class="mb-0 table">
                  <thead>
                    <tr>
                      <th>نص</th>
                      <th>صورة</th>
                      <th>العمليات</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ( $Achievements as $Achievement )
                    <tr>
                        <td>
                           {{ $Achievement->title }}
                        </td>
                        <td>
                            <img src="{{ asset('Achievement/'.$Achievement->img) }}" style="width: 287px;height: 163px;" alt="" srcset="">
                        </td>
                        <td>
                            @include('admin.achievements.edit')
                            @include('admin.achievements.delete')
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>
<!--=================================
 wrapper -->

<!--=================================
 footer -->

 @include('layouts.admin.footer')

<!--=================================
 footer -->

@endsection


<!--=================================
 Main content -->

 <!--=================================
wrapper -->



