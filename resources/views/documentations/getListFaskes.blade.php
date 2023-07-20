<section class="docs-content docs-content--2-col">
    <div class="docs-section docs-section--title">
        <div class="docs-description">
            <h1 style="color: #6675DF">../api/getListFaskes</h1>
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
            <script src="https://gist.github.com/aedills/4bcc9b7a8f99cffa9ca53613fd25fad9.js" async defer></script>
        </div>
    </div>

</section>