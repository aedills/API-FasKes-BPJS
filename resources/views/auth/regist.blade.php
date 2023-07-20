@include('component.head', ['title' => 'Registration | API FasKes Makassar'])

<link rel="stylesheet" type="text/css" href="{{ url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/main.css') }}">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="{{ url('reg') }}" method="GET" class="login100-form validate-form">
                <span class="login100-form-title p-b-43">
                    Daftarkan Diri Anda
                </span>


                <div class="wrap-input100 " data-validate="Anda perlu memasukkan Nama">
                    <input class="input100" type="text" name="nama">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Nama</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pA" id="p1" onchange="passCheck()">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Buat Password</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pB" id="p2" onchange="passCheck()">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Konfirmasi Password</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox" style="padding-left: 4px;">

                    </div>

                    <div>
                        <a href="{{url('/login')}}" class="txt1" style="padding-right: 4px;">
                            Sudah punya akun?
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn" style="padding: 2px;">
                    <button class="login100-form-btn" disabled id="daftar">
                        Daftar
                    </button>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('images/bg.jpg');">
            </div>
        </div>
    </div>
</div>

<script>
    var inA = document.getElementById("p1");
    var inB = document.getElementById("p2");
    var save = document.getElementById("daftar");

    inA.addEventListener("input", passCheck);
    inB.addEventListener("input", passCheck);

    function passCheck() {
        var p1 = inA.value;
        var p2 = inB.value;

        if (p1 === p2) {
            if (p1 != '' || p2 != '') {
                save.removeAttribute("disabled");
            } else {
                save.setAttribute("disabled", "disabled");
            }
        } else {
            save.setAttribute("disabled", "disabled");
        }
    }
</script>



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