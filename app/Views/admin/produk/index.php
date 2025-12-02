<?= $this->extend('admin/layout'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <h2 style="margin-bottom: 15px;">Products</h2>

    <a href="/admin/produk/create" style="
        background:#ffdf3c;padding:10px 15px;border-radius:8px;
        font-weight:600;color:#000;text-decoration:none;">
        + Add New Product
    </a>    

    <table style="width:100%; margin-top:20px; border-collapse: collapse;">
        <thead>
            <tr style="background:#1f2732;">
                <th style="padding:12px;">Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Status</th>
                <th style="text-align:center;">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($products as $p): ?>
            <tr style="border-bottom:1px solid rgba(255,255,255,0.08);">
                <td style="padding:12px;"><?= $p['nama']; ?></td>
                <td>Rp <?= number_format($p['harga']); ?></td>
                <td><?= $p['stok']; ?></td>
                <td>
                    <span style="color:<?= $p['status']=='active'?'#9eff9e':'#ff8282'; ?>">
                        <?= ucfirst($p['status']); ?>
                    </span>
                </td>
                <td style="text-align:center;">
                    <a href="/admin/produk/edit/<?= $p['produk_id']; ?>" 
                        style="color:#ffdf3c; margin-right:10px;">Edit</a>

                    <a href="/admin/produk/delete/<?= $p['produk_id']; ?>" 
                        onclick="return confirm('Yakin hapus produk?')" 
                        style="color:#ff4c4c;">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
