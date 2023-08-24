document.addEventListener("DOMContentLoaded", function () {
  function getTanggalBulanTahun() {
    const now = new Date();
    const tanggal = now.getDate();
    const bulan = now.toLocaleString("default", { month: "long" });
    const tahun = now.getFullYear();
    return { tanggal, bulan, tahun };
  }

  function updateTampilan() {
    const tglBlnThn = getTanggalBulanTahun();
    const tampilan = `${tglBlnThn.tanggal} ${tglBlnThn.bulan} ${tglBlnThn.tahun}`;
    document.getElementById("tanggalBulanTahun").textContent = tampilan;
  }
  updateTampilan();
  setInterval(updateTampilan, 1000);
});

function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) { i = "0" + i };  // add zero in front of numbers < 10
  return i;
}

