<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <script>
        // Inisialisasi Select2
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
<script>
    // Fungsi untuk menghitung usia
    function hitungUsia() {
        const tglLahir = document.getElementById('tglLahir').value;

        // Cek apakah tanggal lahir tidak kosong
        if (tglLahir) {
            const tglLahirDate = new Date(tglLahir);
            const tglSekarang = new Date();

            const diffTime = Math.abs(tglSekarang - tglLahirDate);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            // Hitung tahun, bulan, dan hari
            const years = Math.floor(diffDays / 365);
            const months = Math.floor((diffDays % 365) / 30);
            const days = diffDays % 30;

            // Format hasil perhitungan sebagai "tahun bulan hari"
            const formattedResult = years + ' tahun ' + months + ' bulan ' + days + ' hari';

            // Tampilkan hasil usia dalam bentuk string "tahun bulan hari"
            document.getElementById('usia').value = formattedResult;
        } else {
            // Jika tanggal lahir kosong, isi nilai usia dengan string kosong
            document.getElementById('usia').value = '';
        }
    }

    // Panggil fungsi hitungUsia() saat halaman dimuat
    window.onload = function () {
        // Ubah nilai input tanggal lahir ke format "yyyy-mm-dd" saat halaman dimuat
        const inputTglLahir = document.getElementById('tglLahir');
        inputTglLahir.addEventListener('change', function () {
            hitungUsia();
        });

        // Hitung usia saat halaman dimuat
        hitungUsia();
    };
</script>

 </body>

 </html>