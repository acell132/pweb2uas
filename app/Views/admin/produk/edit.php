<?= $this->extend('admin/layout'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <h2 style="margin-bottom:20px;">Edit Product</h2>

    <form action="/admin/produk/update/<?= $product['produk_id']; ?>" method="post">

        <label>Nama Produk</label>
        <input type="text" name="nama" value="<?= $product['nama']; ?>" class="input">

        <label>Deskripsi</label>
        <textarea name="deskripsi" class="input"><?= $product['deskripsi']; ?></textarea>

        <label>Harga</label>
        <input type="number" name="harga" value="<?= $product['harga']; ?>" class="input">

        <label>Stok</label>
        <input type="number" name="stok" value="<?= $product['stok']; ?>" class="input">

        <label>Status</label>
        <select name="status" class="input">
            <option value="active" <?= $product['status']=='active'?'selected':''; ?>>Active</option>
            <option value="inactive" <?= $product['status']=='inactive'?'selected':''; ?>>Inactive</option>
        </select>

        <button class="btn-save">Update</button>
    </form>
</div>

<style>
.input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    background: #2c3440;
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 8px;
    color: #fff;
}
.btn-save {
    background:#ffdf3c;
    color:#000;
    padding:12px 20px;
    border:none;
    border-radius:8px;
    font-weight:600;
    cursor:pointer;
}
</style>

<?= $this->endSection(); ?>
