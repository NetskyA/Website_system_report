// Navbar Fixed
window.onscroll = function () {
  const header = document.querySelector('header');
  const fixedNav = header.offsetTop;
  const toTop = document.querySelector('#to-top');

  if (window.pageYOffset > fixedNav) {
    header.classList.add('navbar-fixed');
    toTop.classList.remove('hidden');
    toTop.classList.add('flex');
  } else {
    header.classList.remove('navbar-fixed');
    toTop.classList.remove('flex');
    toTop.classList.add('hidden');
  }
};

$(document).ready(function () {
  $("#ingridents").hide();
  $("#menu").hide();

});

let dataArray = [];

function simpanNilai() {
  // Dapatkan elemen input dan ambil nilainya
  let inputElem = document.getElementById('inputAngka');
  let nilai = inputElem.value.trim();

  if (nilai === '') {
    alert('Plase input raw price!');
    return false;
  } else if (!isNaN(nilai)) {
    // Pastikan nilai yang dimasukkan adalah angka dan bukan NaN
    // Tambahkan nilai ke dalam array
    dataArray.push(nilai);

    // Tampilkan kembali data yang telah disimpan dalam array
    tampilkanData();
  }
  // Kosongkan input setelah data disimpan
  inputElem.value = '';
}

function tampilkanData() {
  let dataListElem = document.getElementById('dataList');

  // Kosongkan data sebelum menampilkan kembali
  dataListElem.innerHTML = '';

  // Tampilkan kembali data yang telah disimpan dalam array
  for (let i = 0; i < dataArray.length; i++) {
    let listItem = document.createElement('li');
    listItem.textContent = dataArray[i];
    dataListElem.appendChild(listItem);
  }
}

function formatRupiah(angka) {
  return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(angka);
}

function totalMenu() {
  let maxDis = 0.07;
  let minDis = 0.80
  let inputAngka1 = parseFloat(document.getElementById('inputAngka1').value);
  let inputAngka2 = parseFloat(document.getElementById('inputAngka2').value);
  let inputAngka3 = parseFloat(document.getElementById('inputAngka3').value);
  let inputAngka4 = parseFloat(document.getElementById('inputAngka4').value);
  let inputAngka5 = parseFloat(document.getElementById('inputAngka5').value);
  let inputAngka6 = parseFloat(document.getElementById('inputAngka6').value);

  if (inputAngka6 > maxDis) {
    alert('Max tax %');
    return false;
  }

  let subtotal = inputAngka1 + inputAngka2 + inputAngka3 + inputAngka4;
  let subtotalOther = subtotal + inputAngka5;
  let hargaPajak = subtotalOther * (1 + inputAngka6);
  let tambahDiskon = maxDis + minDis;
  let jualPasar = Math.round(hargaPajak * tambahDiskon);
  let angkaRupiah = formatRupiah(jualPasar);

  document.getElementById('hargaAsli').textContent = `Rp. ${subtotal}`;
  document.getElementById('hargaTambah').textContent = `Rp. ${subtotalOther}`;
  document.getElementById('hargaJual').textContent = `Rp. ${hargaPajak}`;
  document.getElementById('hargaPasar').textContent = `${angkaRupiah}`;
}

function hitungTambahSepuluhPersen() {
  const inputAngka = document.getElementById("inputAngka").value;
  const angka = parseFloat(inputAngka);

  if (!isNaN(angka)) {
    const penambahan = 0.05;
    const angkaSetelahDitambah = angka * (1 + penambahan);
    document.getElementById("hasil").textContent = `Harga telah di 5% : Rp. ${angkaSetelahDitambah}`;
    document.getElementById("hasil2").textContent = `Rp. ${angka}`;
  } else {
  }
}

