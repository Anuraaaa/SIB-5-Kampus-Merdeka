function tambah() {
    frm = document.getElementById("frm_calc");
    bil1 = parseInt(frm.a1.value);
    bil2 = parseInt(frm.a2.value);
    total = bil1 + bil2;
    frm.hasil.value = total;
    alert(`hasil penjumlahan ${bil1} + ${bil2} adalah ${total}`);
}

function kurang() {
    frm = document.getElementById("frm_calc");
    bil1 = parseInt(frm.a1.value);
    bil2 = parseInt(frm.a2.value);
    total = bil1 - bil2;
    frm.hasil.value = total;
    alert(`hasil pengurangan ${bil1} - ${bil2} adalah ${total}`);
}

function kali() {
    frm = document.getElementById("frm_calc");
    bil1 = parseInt(frm.a1.value);
    bil2 = parseInt(frm.a2.value);
    total = bil1 * bil2;
    frm.hasil.value = total;
    alert(`hasil perkalian ${bil1} x ${bil2} adalah ${total}`);
}

function bagi() {
    frm = document.getElementById("frm_calc");
    bil1 = parseInt(frm.a1.value);
    bil2 = parseInt(frm.a2.value);
    total = bil1 / bil2;
    frm.hasil.value = total;
    alert(`hasil pembagian ${bil1} / ${bil2} adalah ${total}`);
}

function pangkat() {
    frm = document.getElementById("frm_calc");
    bil1 = parseInt(frm.a1.value);
    bil2 = parseInt(frm.a2.value);
    total = Math.pow(bil1, bil2);
    frm.hasil.value = total;
    alert(`hasil pangkat ${bil1} ^ ${bil2} adalah ${total}`);
}

