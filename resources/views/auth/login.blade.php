@include('component.head', ['title' => 'Login | FasKes Makassar'])

<link rel="stylesheet" type="text/css" href="{{ url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/main.css') }}">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
                <span class="login100-form-title p-b-43">
                    Login to Get Access
                </span>


                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="p">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox" style="padding-left: 4px;">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1" style="padding-right: 4px;">
                            Forgot Password?
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn" style="padding: 2px;">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('images/bg.jpg');">
            </div>
        </div>
    </div>
</div>





<script src="{{ url('assets/vendor/jquery/jquery-3.2.1.min.js ')}}"></script>
<script src="{{ url('assets/vendor/animsition/js/animsition.min.js ')}}"></script>
<script src="{{ url('assets/vendor/bootstrap/js/popper.js ')}}"></script>
<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.min.js ')}}"></script>
<script src="{{ url('assets/vendor/select2/select2.min.js ')}}"></script>
<script src="{{ url('assets/vendor/daterangepicker/moment.min.js ')}}"></script>
<script src="{{ url('assets/vendor/daterangepicker/daterangepicker.js ')}}"></script>
<script src="{{ url('assets/vendor/countdowntime/countdowntime.js ')}}"></script>
<script src="{{ url('assets/js/main.js ')}}"></script>



@include('component.foot')