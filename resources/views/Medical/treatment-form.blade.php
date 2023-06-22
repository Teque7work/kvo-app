@extends('layouts.app')

@section('title', 'Treatment Form')

@section('pagecss')

  <link rel="stylesheet" href="{{ asset ('assets/vendor/libs/flatpickr/flatpickr.css') }}" />


@endsection

@section ('content')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        
        
            @include('layouts.header')

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Medical/</span> Treatment</h4>
              <div class="card mb-4">
                <form class="card-body">  
                  <div class="row g-3">
                    <div class="col-md-4">
                      <label class="form-label" for="multicol-username">Patient Name</label>
                      <input type="text" id="multicol-username" class="form-control" placeholder="john.doe">
                    </div>
                    <div class="col-md-4">
                      <label class="form-label" for="multicol-phone"> Patient Phone No</label>
                      <input type="text" id="multicol-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941">
                    </div>
                    <div class="col-md-4">
                      <label class="form-label" for="multicol-first-name">Treatment</label>
                      <input type="text" id="multicol-treatment-name" class="form-control" placeholder="">
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="collapsible-address">Patient Address</label>
                      <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2" placeholder="1456, Mall Road"></textarea>
                    </div>
                    <!-- Datetime Picker-->
                    <div class="col-md-4">
                      <label for="flatpickr-datetime" class="form-label">Date</label>
                      <input type="text" class="form-control" placeholder="DD-MM-YYYY HH:MM" id="flatpickr-datetime" />
                    </div>
                    <!-- /Datetime Picker-->                   
                    <div class="col-md-4">
                      <label class="form-label" for="multicol-username">Doctor Name</label>
                      <input type="text" id="multicol-username" class="form-control" placeholder="Dr. Shah">
                    </div>
                    <div class="col-md-4">
                      <label class="form-label" for="formtabs-country">Payment Mode</label>
                        <div class="position-relative"><select id="formtabs-country" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="formtabs-country" tabindex="-1" aria-hidden="true">
                          <option value="" data-select2-id="11">Select</option>        
                          <option value="United Arab Emirates">Abc123</option>
                          <option value="United Kingdom">Abc123</option>
                          <option value="United States">Abc123</option></select>   
                        </div>
                    </div>
                    <div class="col-md-4">
                      <label class="form-label" for="multicol-phone"> Rupees</label>
                      <input type="text" id="multicol-rupees" class="form-control phone-mask" placeholder="" aria-label="">
                    </div>
                    <div class="col-md-8">
                      <label class="form-label" for="multicol-username">In Words</label>
                      <input type="text" id="multicol-text" class="form-control" placeholder="five Thousand">
                    </div>
                    <div class="col-8">
                      <label class="form-label" for="collapsible-address">Remark</label>
                      <textarea name="collapsible-remark" class="form-control" id="collapsible-remark" rows="2" placeholder="Hello,"></textarea>
                    </div>
                  </div>
                  <!-- <hr class="my-4 mx-n4"> -->
                 
                 
                  <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                    <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
                  </div>
                </form>
              </div>
            </div>

      </div>
    </div>
            <!--/ Content -->

@section('pagejs')

<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>


<!-- Page JS -->

<script src="{{ asset('assets/js/forms-pickers.js') }}"></script>


@endsection

@endsection