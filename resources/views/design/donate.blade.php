@extends('layouts.design.master')
@section('contant')
@include('layouts.massegs')
<section class="breadcrumb-section" style="background-image: url(./home-main-slides/himage.jpg);">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>  اتــــبــــرع
            </h1>
        </div>
        <ul class="breadcrumb-nav">
            <li>  اتــــبــــرع
            </li>
            <li><a href="index.html">الرئيسية</a></li>
        </ul>
        <span class="btg-text">صناع الحياة</span>
    </div>

</section>
<!-- donation-page-section -->
<section class="donation-page-section">
<div class="outer-container">
    <div class="donate-content">
        <div class="sec-title centred">
            <span class="top-text">تبرع</span>
            <h2>خلق غد أكثر إشراقًا</h2>
        </div>
        <form action="{{ route('donate.store') }}" method="post" class="default-form">
            @csrf
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 donate-column">
                    <div class="donate-box">
                        <div class="donate-option">
                            <h3>كم الثمن؟</h3>
                            <ul class="donate-list clearfix">
                                <li>
                                    <input type="radio" id="donate-amount-1" value="$10" name="donate_amount" checked="checked" />
                                    <label for="donate-amount-1" data-amount="1000" >$10</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-2" value="$20" name="donate_amount" />
                                    <label for="donate-amount-2" data-amount="2000">$20</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-3"value="$50" name="donate_amount" />
                                    <label for="donate-amount-3" data-amount="3000">$50</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-4" value="$100" name="donate_amount" />
                                    <label for="donate-amount-4" data-amount="4000">$100</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-5" value="$500" name="donate_amount" />
                                    <label for="donate-amount-5" data-amount="5000">$500</label>
                                </li>
                                <li>
                                    <input type="radio" id="donate-amount-6" value="$1000" name="donate_amount" />
                                    <label for="donate-amount-6" data-amount="5000">$1000</label>
                                </li>
                            </ul>
                            <div class="other-amount">
                                <div class="text">
                                    <h4>ترغب في التبرع</h4>
                                    <p>أدخل المبلغ المخصص الخاص بك</p>
                                </div>
                                <div class="amount-box">
                                    <div class="item-quantity"><input class="quantity-spinner" type="text" value="750" name="quantity"></div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-option">
                            <h3>اختر خيار الدفع</h3>
                            <ul class="payment-list clearfix">
                                <li>
                                    <input type="radio" id="payment-method-1" value="صافي المصرفية " name="payment_method" checked="checked" />
                                    <label for="payment-method-1" >صافي المصرفية</label>
                                </li>
                                <li>
                                    <input type="radio" id="payment-method-2" value="لائتمان - بطاقة الخصم" name="payment_method" />
                                    <label for="payment-method-2">الائتمان - بطاقة الخصم</label>
                                </li>
                                <li>
                                    <input type="radio" id="payment-method-3" value="الدفع دون اتصال" name="payment_method" />
                                    <label for="payment-method-3">الدفع دون اتصال</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 donate-form">
                    <div class="form-inner">
                        <h3>بيانات المتبرع</h3>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <div class="form-group">
                                    <label>اسمك <span>*</span></label>
                                    <input type="text" name="name" placeholder="الأسم " required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <div class="form-group">
                                    <label>عنوان بريد الكتروني <span>*</span></label>
                                    <input type="email" name="email" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <div class="form-group">
                                    <label>الهاتف</label>
                                    <input type="text" name="phone" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 column">
                                <div class="form-group">
                                    <label>العنوان</label>
                                    <input type="text" name="address" required="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                <div class="form-group">
                                    <label class="custom-control material-checkbox">
                                        <input type="checkbox" name="Month" value="1" class="material-control-input">
                                        <span class="material-control-indicator"></span>
                                        <span class="description">أرغب في التبرع تلقائيًا يتكرر كل شهر</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn btn-one">تبرع الان</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</section>


@endsection
