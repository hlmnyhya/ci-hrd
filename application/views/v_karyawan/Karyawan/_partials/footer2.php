<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <script>
        // Inisialisasi Select2
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
<script>
        // Fungsi untuk menghitung masa kerja
        function hitungMasaKerja() {
            const tglMasuk = document.getElementById('datepicker').value;

            // Cek apakah tanggal masuk tidak kosong
            if (tglMasuk) {
                const tglMasukDate = new Date(tglMasuk);
                const tglSekarang = new Date();

                const diffTime = Math.abs(tglSekarang - tglMasukDate);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                // Hitung tahun, bulan, dan hari
                const years = Math.floor(diffDays / 365);
                const months = Math.floor((diffDays % 365) / 30);
                const days = diffDays % 30;

                // Format hasil perhitungan sebagai "tahun bulan hari"
                const formattedResult = years + ' tahun ' + months + ' bulan ' + days + ' hari';

                // Tampilkan hasil masa kerja dalam bentuk string "tahun bulan hari"
                document.getElementById('masa_kerja').value = formattedResult;
            } else {
                // Jika tanggal masuk kosong, isi nilai masa kerja dengan string kosong
                document.getElementById('masa_kerja').value = '';
            }
        }

        // Panggil fungsi hitungMasaKerja() saat halaman dimuat
        window.onload = function () {
            // Ubah nilai input tanggal ke format "yyyy-mm-dd" saat halaman dimuat
            const inputTglMasuk = document.getElementById('datepicker');
            inputTglMasuk.addEventListener('change', function () {
                hitungMasaKerja();
            });

            // Hitung masa kerja saat halaman dimuat
            hitungMasaKerja();
        };
    </script>

 </body>

 </html>