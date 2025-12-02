<?= $this->extend('admin/layout'); ?>
<?= $this->section('content'); ?>

<div class="product-card">
    <div class="card-header">
        <h2>Add New Product</h2>
    </div>

    <form action="/admin/produk/store" method="post" class="form-grid">

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama" required class="input">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" required class="input">
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" required class="input">
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="input">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <div class="form-group-full">
            <label>Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="input"></textarea>
        </div>

        <div class="form-actions">
            <button class="btn-save">Simpan Produk</button>
        </div>
    </form>
</div>

<style>
.product-card {
    background: #3a444e;
    padding: 30px;
    border-radius: 12px;
    margin-bottom: 30px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.25);
    border: 1px solid rgba(255,255,255,0.05);
}

.card-header h2 {
    margin: 0 0 20px 0;
    font-weight: 600;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group-full {
    grid-column: span 2;
    display: flex;
    flex-direction: column;
}

.input, .select {
    width: 90%;
    padding: 14px;
    margin-top: 5px;
    background: #2c3440;
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 8px;
    color: #fff;
    transition: 0.2s;
}

.input:focus {
    border-color: #ffdf3c;
    box-shadow: 0 0 8px rgba(255,223,60,0.4);
    outline: none;
}

label {
    font-size: 14px;
    color: #ffdf3c;
    font-weight: 500;
}

.form-actions {
    grid-column: span 2;
    text-align: right;
}

.btn-save {
    background: #ffdf3c;
    color: #000;
    padding: 14px 26px;
    border: none;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.2s;
}

.btn-save:hover {
    background: #ffe45c;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(255,223,60,0.4);
}

@media(max-width: 768px){
    .form-grid {
        grid-template-columns: 1fr;
    }
    .form-group-full,
    .form-actions {
        grid-column: span 1;
    }
}
</style>

<?= $this->endSection(); ?>
