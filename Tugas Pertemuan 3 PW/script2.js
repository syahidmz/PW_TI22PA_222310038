function hitung() {
    var namaPemesan = document.getElementById('nama_pemesan').value;
    var tujuan = document.getElementById('tujuan').value;
    var kelas = document.getElementById('kelas').value;
    var banyakTiket = parseInt(document.getElementById('banyak_tiket').value);
    var member = document.querySelector('input[name="member"]:checked').value;

    var hargaTiket = 0;
    if (tujuan === "Jakarta") {
        if (kelas === "Eksekutif") {
            hargaTiket = 70000;
        } else if (kelas === "Bisnis") {
            hargaTiket = 40000;
        } else {
            hargaTiket = 10000;
        }
    } else if (tujuan === "Solo") {
        if (kelas === "Eksekutif") {
            hargaTiket = 80000;
        } else if (kelas === "Bisnis") {
            hargaTiket = 50000;
        } else {
            hargaTiket = 20000;
        }
    } else if (tujuan === "Surabaya") {
        if (kelas === "Eksekutif") {
            hargaTiket = 90000;
        } else if (kelas === "Bisnis") {
            hargaTiket = 60000;
        } else {
            hargaTiket = 30000;
        }
    }

    var subtotal = hargaTiket * banyakTiket;

    var diskon = 0;
    if (member === "Ya") {
        diskon = subtotal * 0.1;
    }

    var totalBayar = subtotal - diskon;

    // document.getElementById('harga_tiket').textContent = hargaTiket.toLocaleString('id-ID', {style : 'currency', currency: 'IDR'});
    // document.getElementById('subtotal').textContent = subtotal.toLocaleString('id-ID', {style : 'currency', currency: 'IDR'});
    // document.getElementById('diskon').textContent = diskon.toLocaleString('id-ID', {style : 'currency', currency: 'IDR'});
    // document.getElementById('total_bayar').textContent = totalBayar.toLocaleString('id-ID', {style : 'currency', currency: 'IDR'});

    document.getElementById('harga_tiket').innerHTML = hargaTiket.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    document.getElementById('subtotal').innerHTML = subtotal.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    document.getElementById('diskon').innerHTML = diskon.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    document.getElementById('total_bayar').innerHTML = totalBayar.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
}