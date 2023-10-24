<?php
$obj_jenis = new Jenis(); //ciptakan object dari class Jenis
$rs = $obj_jenis->index(); //panggil fungsi index untuk mendapatkan data jenis produk
$ar_kondisi = ['Baru','Second']; //buat array kondisi produk
?>
<div class="container px-5 my-5">
    <h3>Form Produk</h3>
    <form id="contactForm" method="POST" action="produk_controller.php">
        <div class="form-floating mb-3">
            <input class="form-control" name="kode" id="kodeProduk" type="text" placeholder="Kode Produk" data-sb-validations="required" />
            <label for="kodeProduk">Kode Produk</label>
            <div class="invalid-feedback" data-sb-feedback="kodeProduk:required">Kode Produk is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nama" id="namaProduk" type="text" placeholder="Nama Produk" data-sb-validations="required" />
            <label for="namaProduk">Nama Produk</label>
            <div class="invalid-feedback" data-sb-feedback="namaProduk:required">Nama Produk is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Kondisi Produk</label>
            <?php
            foreach($ar_kondisi as $kondisi){
            ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="<?= $kondisi ?>" type="radio" name="kondisi" data-sb-validations="required" />
                <label class="form-check-label" for="<?= $kondisi ?>"><?= $kondisi ?></label>
            </div>
            <?php } ?>
            <div class="invalid-feedback" data-sb-feedback="kondisiProduk:required">One option is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="harga" id="hargaProduk" type="text" placeholder="Harga Produk" data-sb-validations="required" />
            <label for="hargaProduk">Harga Produk</label>
            <div class="invalid-feedback" data-sb-feedback="hargaProduk:required">Harga Produk is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="stok" id="stokProduk" type="text" placeholder="Stok Produk" data-sb-validations="required" />
            <label for="stokProduk">Stok Produk</label>
            <div class="invalid-feedback" data-sb-feedback="stokProduk:required">Stok Produk is required.</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="idjenis" id="jenisProduk" aria-label="Jenis Produk">
                <option value="-- Pilih Produk --">-- Pilih Produk --</option>
                <?php
                foreach($rs as $jenis){
                    echo '<option value="'.$jenis['id'].'">'.$jenis['nama'].'</option>';
                }
                ?>
            </select>
            <label for="jenisProduk">Jenis Produk</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="foto" id="fotoProduk" type="text" placeholder="Foto Produk" data-sb-validations="" />
            <label for="fotoProduk">Foto Produk</label>
        </div>
        
        
        <div class="text-center">
            <button class="btn btn-primary" name="proses" type="submit" value="simpan">Simpan</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>