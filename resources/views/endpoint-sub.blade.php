@include('component.head', ['title' => 'EndPoint | API FasKes Makassar'])

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
        <!-- getlistfaskes -->
        <section class="docs-content docs-content--2-col"  id="getlistfaskes" style="margin-bottom: 40px;">
            <div class="docs-section docs-section--title">
                <div class="docs-description">
                    <h1 style="color: #6675DF; font-weight: 600;">../api/getListFaskes</h1>
                    <p>
                        Endpoint 'getListFaskes' digunakan untuk mendapatkan daftar semua fasilitas kseshatan di daerah Makassar. Setiap fasilitas kesehatan dikelompokkan berdasarkan kategori/jenis fasilitas kesehatan masing-masing.
                    </p>
                    <br>
                    <h3 style="color: #6675DF">URL</h3>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 20%;">Method</th>
                                <th scope="col" style="width: 80%;">URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;&nbsp;POST</td>
                                <td>&nbsp;&nbsp;http://127.0.0.20:8866/api/getListFaskes</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 style="color: #6675DF">Parameters</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 12%;">Key</th>
                                <th scope="col" style="width: 11%;">Type</th>
                                <th scope="col" style="width: 18%;">Value</th>
                                <th scope="col" style="width: 10%;">Status</th>
                                <th scope="col" style="width: 40%;">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;&nbsp;X-API-Key</td>
                                <td>&nbsp;&nbsp;Header</td>
                                <td>&nbsp;&nbsp;32 bit String Value</td>
                                <td>&nbsp;&nbsp;Wajib</td>
                                <td>&nbsp;&nbsp;API Key untuk proses authentikasi</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;category*</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;String Value</td>
                                <td>&nbsp;&nbsp;Opsional</td>
                                <td>&nbsp;&nbsp;Kategori faskes yang ingin didapatkan</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;limit</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;Integer Value</td>
                                <td>&nbsp;&nbsp;Opsional</td>
                                <td>&nbsp;&nbsp;Menentukan jumlah data yang ingin didapatkan</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;rand</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;String (yes/no)<br>&nbsp;&nbsp;default: 'yes'</td>
                                <td>&nbsp;&nbsp;Opsional</td>
                                <td>&nbsp;&nbsp;Menentukan cara pengambilan data<br>&nbsp;&nbsp;(acak atau tidak)</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        Jika kategori tidak diisi (kosong) maka akan mengambil data di semua kategori.
                    </p>
                    <br>
                    <p>
                        * : pilihan value yaitu dentist, hospital, optical, pharmacy, practicing_doctor, pratama_clinic, utama_clinic,<br>&nbsp;&nbsp;&nbsp;&nbsp;public_health_center. Setiap kategori dipisahkan dengan semicolon ';' . <br>&nbsp;&nbsp;&nbsp;
                        Contoh: hospital;optical;pharmacy;
                    </p>

                    <h3 style="color: #6675DF">Contoh Request</h3>
                    <p>Contoh melakukan request untuk mendapatkan data faskes dengan kategori 'hospital' dan 'optical' dengan jumlah masing-masing kategori sebanyak 8 data serta data yang diambil secara acak.</p>
                    <h4>Request CURL</h4>
                    <script src="https://gist.github.com/aedills/4bcc9b7a8f99cffa9ca53613fd25fad9.js"></script>
                    
                    <h3 style="color: #6675DF">Contoh Respons</h3>
                    <script src="https://gist.github.com/aedills/dc612b0fc5899caa28455151a3976c57.js"></script>
                </div>
            </div>
        </section>


        <!-- search -->
        <section class="docs-content docs-content--2-col"  id="search" style="background-color: #f5f5f7; margin-bottom: 40px;">
            <div class="docs-section docs-section--title">
                <div class="docs-description">
                    <h1 style="color: #6675DF; font-weight: 600;">../api/search</h1>
                    <p>
                        Endpoint 'search' digunakan untuk mencari fasilitas kesehatan berdasarkan keyword yang diberikan.
                    </p>
                    <br>
                    <h3 style="color: #6675DF">URL</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 20%;">Method</th>
                                <th scope="col" style="width: 80%;">URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;&nbsp;POST</td>
                                <td>&nbsp;&nbsp;http://127.0.0.20:8866/api/search</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 style="color: #6675DF">Parameters</h3>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 12%;">Key</th>
                                <th scope="col" style="width: 11%;">Type</th>
                                <th scope="col" style="width: 18%;">Value</th>
                                <th scope="col" style="width: 10%;">Status</th>
                                <th scope="col" style="width: 40%;">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;&nbsp;X-API-Key</td>
                                <td>&nbsp;&nbsp;Header</td>
                                <td>&nbsp;&nbsp;32 bit String Value</td>
                                <td>&nbsp;&nbsp;Wajib</td>
                                <td>&nbsp;&nbsp;API Key untuk proses authentikasi</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;q</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;String Value</td>
                                <td>&nbsp;&nbsp;Wajib</td>
                                <td>&nbsp;&nbsp;Search keyword</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;category*</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;String Value</td>
                                <td>&nbsp;&nbsp;Opsional</td>
                                <td>&nbsp;&nbsp;Kategori faskes yang ingin didapatkan</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;limit</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;Integer Value</td>
                                <td>&nbsp;&nbsp;Opsional</td>
                                <td>&nbsp;&nbsp;Menentukan jumlah data yang ingin didapatkan</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        Jika kategori tidak diisi (kosong) maka akan mengambil data di semua kategori.
                    </p>
                    <br>
                    <p>
                        * : pilihan value yaitu dentist, hospital, optical, pharmacy, practicing_doctor, pratama_clinic, utama_clinic,<br>&nbsp;&nbsp;&nbsp;&nbsp;public_health_center. Setiap kategori dipisahkan dengan semicolon ';' . <br>&nbsp;&nbsp;&nbsp;
                        Contoh: hospital;optical;pharmacy;
                    </p>

                    <h3 style="color: #6675DF">Contoh Request</h3>
                    <p>Contoh melakukan request untuk mencari fasilitas kesehatan yang mengandung nama 'UNHAS' dengan batas maksimal sebanyak 2 data.</p>
                    <h4>Request CURL</h4>
                    <script src="https://gist.github.com/aedills/cf767c3f83b6fdcea791ab36bab0441a.js"></script>
                    
                    <h3 style="color: #6675DF">Contoh Respons</h3>
                    <script src="https://gist.github.com/aedills/93185ab5bf8ff6d81ee4334c0d4330ab.js"></script>
                </div>
            </div>
        </section>


        <!-- closest -->
        <section class="docs-content docs-content--2-col"  id="closest" style="margin-bottom: 40px;">
            <div class="docs-section docs-section--title">
                <div class="docs-description">
                    <h1 style="color: #6675DF; font-weight: 600;">../api/closest</h1>
                    <p>
                        Endpoint 'closest' digunakan untuk mencari dan menemukan fasilitas kesehatan terdekat dari posisi Anda sekarang.
                    </p>
                    <br>
                    <h3 style="color: #6675DF">URL</h3>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 20%;">Method</th>
                                <th scope="col" style="width: 80%;">URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;&nbsp;POST</td>
                                <td>&nbsp;&nbsp;http://127.0.0.20:8866/api/closest</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 style="color: #6675DF">Parameters</h3>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 12%;">Key</th>
                                <th scope="col" style="width: 11%;">Type</th>
                                <th scope="col" style="width: 18%;">Value</th>
                                <th scope="col" style="width: 10%;">Status</th>
                                <th scope="col" style="width: 40%;">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;&nbsp;X-API-Key</td>
                                <td>&nbsp;&nbsp;Header</td>
                                <td>&nbsp;&nbsp;32 bit String Value</td>
                                <td>&nbsp;&nbsp;Wajib</td>
                                <td>&nbsp;&nbsp;API Key untuk proses authentikasi</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;lat</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;String Value</td>
                                <td>&nbsp;&nbsp;Wajib</td>
                                <td>&nbsp;&nbsp;Latitude posisi yang akan menjadi patokan<br>&nbsp;&nbsp;pencarian faskes terdekat.</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;long</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;String Value</td>
                                <td>&nbsp;&nbsp;Wajib</td>
                                <td>&nbsp;&nbsp;Longitude posisi yang akan menjadi patokan<br>&nbsp;&nbsp;pencarian faskes terdekat.</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;count</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;Integer Value</td>
                                <td>&nbsp;&nbsp;Opsional</td>
                                <td>&nbsp;&nbsp;Menentukan jumlah faskes terdekat yang<br>&nbsp;&nbsp;ingin didapatkan</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 style="color: #6675DF">Contoh Request</h3>
                    <p>Contoh mencari 5 fasilitas kesehatan terdekat dari lokasi sekarang. Untuk melaksanakan request ini, kita membutuhkan data lokasi kita sekarang. Anggaplah lokasi kita berada pada kampus 1 PNUP (lat: -5.130006665573785, long: 119.48303938697465).</p>
                    <h4>Request CURL</h4>
                    <script src="https://gist.github.com/aedills/3903a27615fb967a3f70710e3e109c73.js"></script>
                    
                    <h3 style="color: #6675DF">Contoh Respons</h3>
                    <script src="https://gist.github.com/aedills/4207a6db0848488fc6f0fb72858ddde3.js"></script>
                </div>
            </div>
        </section>


        <!-- getdetail -->
        <section class="docs-content docs-content--2-col"  id="getdetail" style="background-color: #f5f5f7;">
            <div class="docs-section docs-section--title">
                <div class="docs-description">
                    <h1 style="color: #6675DF; font-weight: 600;">../api/getDetail</h1>
                    <p>
                        Endpoint 'getDetail' digunakan untuk mengambil informasi lengkap dari sebuah fasilitas kesehatan berdasarkan code fasilitas.
                    </p>
                    <br>
                    <h3 style="color: #6675DF">URL</h3>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 20%;">Method</th>
                                <th scope="col" style="width: 80%;">URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;&nbsp;POST</td>
                                <td>&nbsp;&nbsp;http://127.0.0.20:8866/api/getDetail</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 style="color: #6675DF">Parameters</h3>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 12%;">Key</th>
                                <th scope="col" style="width: 11%;">Type</th>
                                <th scope="col" style="width: 18%;">Value</th>
                                <th scope="col" style="width: 10%;">Status</th>
                                <th scope="col" style="width: 40%;">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;&nbsp;X-API-Key</td>
                                <td>&nbsp;&nbsp;Header</td>
                                <td>&nbsp;&nbsp;32 bit String Value</td>
                                <td>&nbsp;&nbsp;Wajib</td>
                                <td>&nbsp;&nbsp;API Key untuk proses authentikasi</td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;code</td>
                                <td>&nbsp;&nbsp;form-data</td>
                                <td>&nbsp;&nbsp;String Value</td>
                                <td>&nbsp;&nbsp;Wajib</td>
                                <td>&nbsp;&nbsp;Code ini merupakan code faskes yang<br>&nbsp;&nbsp;didapatkan dari endpoint-endpoint sebelumnya.</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 style="color: #6675DF">Contoh Request</h3>
                    <p>Berdasarkan data dari endpoint closest sebelumnya, kita mendapatkan code untuk FasKes 'RUMAH SAKIT UNHAS' yaitu 0342R031, maka kita dapat mencari detail faskes berdasarkan kode tersebut.</p>
                    <h4>Request CURL</h4>
                    <script src="https://gist.github.com/aedills/a9b3746fae50fe7435efe96ecf46e138.js"></script>
                    
                    <h3 style="color: #6675DF">Contoh Respons</h3>
                    <script src="https://gist.github.com/aedills/62c4eb49f39cfe42bee2432e680bff59.js"></script>
                </div>
            </div>
        </section>
    </div>

</div>

@include('component.navbar_footer')

<script src="https://www.google.com/recaptcha/api.js?onload=loadRecaptcha&render=explicit" async defer></script>
<script src="https://postmarkapp.com/dist/js/developerDocs.b2b6ab461eef5e7e0b55.js"></script>

@include('component.foot')