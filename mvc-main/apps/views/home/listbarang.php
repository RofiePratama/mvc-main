<a href="<?= BASE_URL . 'index.php?r=home/insertbarang' ?>" class="btn btn-primary">Tambah Barang</a>
<table class="table">
    <thead>
        <tr><th>ID</th><th>Nama Barang</th><th>QTY</th><th>Action</th></tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nama'] ?></td>
                <td><?= $item['qty'] ?></td>
                <td>
                    <a href="<?= BASE_URL . 'index.php?r=home/updatebarang/' . $item['id'] ?>">Update</a>
                    <a href="<?= BASE_URL . 'index.php?r=home/deletebarang/' . $item['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
