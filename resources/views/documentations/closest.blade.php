<section class="docs-content docs-content--2-col">
    <div class="docs-section docs-section--title">
        <div class="docs-description">
            <h1 style="color: #6675DF">../api/closest</h1>
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
                        <td>&nbsp;&nbsp;limit</td>
                        <td>&nbsp;&nbsp;form-data</td>
                        <td>&nbsp;&nbsp;Integer Value</td>
                        <td>&nbsp;&nbsp;Opsional</td>
                        <td>&nbsp;&nbsp;Menentukan jumlah faskes terdekat yang<br>&nbsp;&nbsp;ingin didapatkan</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>