<section class="docs-content docs-content--2-col">
    <div class="docs-section docs-section--title">
        <div class="docs-description">
        <h1 style="color: #6675DF">../api/getDetail</h1>
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
        </div>
    </div>
</section>