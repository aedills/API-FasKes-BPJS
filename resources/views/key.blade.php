@include('component.head', ['title' => 'halo'])

<!-- <div class="root"></div> -->
<link href="https://postmarkapp.com/dist/css/core.41adffa0f4ce990a6ef7.css" rel="stylesheet">
<link href="https://postmarkapp.com/dist/css/postmark.a57bd64ba57d1998406b.css" rel="stylesheet">
<link href="https://postmarkapp.com/dist/css/developerDocs.7f4a4cf88081b198bed9.css" rel="stylesheet">

<style>
    .side-navbar a:hover {
        color: #6675DF !important;
        background-color: #24272d !important;
    }

    .head-bar a:hover {
        color: #6675DF !important;
        background-color: #24272d !important;
    }
</style>

<script src="{{ url('assets/js/script.js') }}"></script>

<header class="header header--full-width header--compact" style="background-color: #6675DF;">
    <div class="u-container header_container head-bar">

        <div class="header_branding">
            <div class="logo">
                <img alt="logo bpjs" title="logo bpjs" src="{{url('images/icon/tag-name.png')}}" height="40" />
            </div>

            <div class="header_actions">
                @if(isset($data->id))
                <a href="{{url('/logout')}}" class="header_login cta-btn cta-btn--small">Log Out</a>
                @else
                <a href="{{url('/login')}}" class="header_login cta-btn cta-btn--small">Log In</a>
                @endif
                <button class="header_hamburger js-nav-mobile-button" aria-haspopup="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <nav class="nav nav--header nav--desktop" role="navigation" aria-label="Main">

            <ul class="nav_list">
                <li class="nav_item nav_item--btn">
                    @if(isset($data->id))
                    <a href="{{url('/logout')}}" class="nav_btn cta-btn ">Log Out</a>
                    @else
                    <a href="{{url('/login')}}" class="nav_btn cta-btn ">Log In</a>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
</header>

<div class="page">
    <!-- NavBar -->
    <section id="toc" class="docs-toc docs-toc--desktop side-navbar">
        @include('component.navbar_section')
    </section>

    <div class="data-root" id="root-view">
        <section class="docs-content docs-content--2-col">
            <!-- Docs Section -->
            <div class="docs-section docs-section--title">
                <div class="docs-description">
                    <h1 style="color: #6675DF">API Key</h1>
                    <p>Anda dapat menggunakan API Key ini untuk mengakses API dari FasKes BPJS kota Makassar.</p>
                    <p>Jika Anda merasa API Key diketahui dan digunakan oleh orang lain, maka silahkan ganti API Key Anda.</p>
                    <br>
                    @if(isset($data->id))
                    <h3>API Key Anda</h3>
                    <form>
                        <div class="input-group input-group-sm" id="key-form" style="width: 500px;">
                            <input type="password" id="key-value" class="form-control" value="{{$data->k3y}}" disabled style="font-size: 14pt; padding-left: 20px;">
                            <span class="input-group-text"><button type="button" style="border: none; background: transparent;" onclick="toggle()"><img class="show-hide-icon" style="border-radius: 20%;" id="show-hide" src="{{url('images/icon/hide.png')}}" alt="SHOW"></button></i></span>
                        </div>
                    </form>
                    @else
                    <h3>Login untuk mendapatkan API Key</h3>
                    @endif
                </div>
            </div>
        </section>
    </div>

</div>

@include('component.navbar_footer')

<script src="https://www.google.com/recaptcha/api.js?onload=loadRecaptcha&render=explicit" async defer></script>
<script src="https://postmarkapp.com/dist/js/developerDocs.b2b6ab461eef5e7e0b55.js"></script>

<script>
    function toggle() {
        var image = document.getElementById('show-hide');
        var key_value = document.getElementById('key-value');
        // const button = document.getElementById('show-hide-but');

        const show = 'http://127.0.0.20:8866/images/icon/show.png';
        const hide = 'http://127.0.0.20:8866/images/icon/hide.png';

        if (image.src == show) {
            image.removeAttribute('src')
            image.setAttribute('src', hide)

            key_value.removeAttribute('type')
            key_value.setAttribute('type', 'password')
        } else {
            image.removeAttribute('src')
            image.setAttribute('src', show)

            key_value.removeAttribute('type')
            key_value.setAttribute('type', 'text')
        }
    }
</script>
@include('component.foot')