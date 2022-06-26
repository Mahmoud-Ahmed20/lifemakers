@extends('layouts.admin.mastar')
@section('title')
التبرعات
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
              <h4 class="mb-0"> التبرعات </h4>
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
                      <th>الثمن</th>
                      <th>المبلغ الخاص </th>
                      <th>طريقة الدفع </th>
                      <th> الاسم  </th>
                      <th> الايميل الخاص  بة  </th>
                      <th> الهاتف </th>
                      <th> العنوان </th>
                      <th> الرغبة في التبرع </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $donates as $donate)
                    <tr>
                        <td>{{ $donate->donate_amount }}</td>
                        <td>{{ $donate->quantity }}</td>
                        <td>{{ $donate->payment_method }}</td>
                        <td>{{ $donate->name }}</td>
                        <td>{{ $donate->email }}</td>
                        <td>{{ $donate->phone }}</td>
                        <td>{{ $donate->address }}</td>
                        @if ($donate->Month==1)
                        <td>{{ 'أرغب في التبرع تلقائيًا يتكرر كل شهر'  }}</td>
                        @else
                        <td>{{ 'لا أرغب في التبرع تلقائيًا يتكرر كل شهر'  }}</td>

                        @endif

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



