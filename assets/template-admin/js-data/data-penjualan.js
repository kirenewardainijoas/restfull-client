const url = "http://localhost/prediksi-keuntungan-penjualan/Admin/tb_barang"
$(document).ready(function() {
    $('#dataTable').DataTable({
        "ajax": url,
        "columns": [
            { "data": "tgl" },
            { "data": "bulan" },
            { "data": "tahun" },
            { "data": "stok" },
            { "data": "terjual" },
            { "data": "sisa" },
            { "data": "hasil_penjualan" },
            { "data": "modal" },
            { "data": "keuntungan" }
        ]
    });
});