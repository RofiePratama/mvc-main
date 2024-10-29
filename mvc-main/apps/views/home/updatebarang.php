<form action="<?= BASE_URL . 'index.php?r=home/updatebarang/' . $item['id'] ?>" method="POST">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?= $item['nama'] ?>">
    <label>QTY:</label>
    <input type="number" name="qty" value="<?= $item['qty'] ?>">
    <button type="submit">Update</button>
</form>
