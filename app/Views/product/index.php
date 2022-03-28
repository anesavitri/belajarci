<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <table class="table table-hover">
        <thead style="background-color:#6F7378">
            <tr style="color:pink">
                <td>No.</td>
                <td>Name</td>
                <td>Stock</td>
                <td>Price</td>
                <td>Category</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        <a style="color:pink" href="/product/new" class="btn btn-secondary" >Add new product</a>
        <br />
        <br />
        <?php $no = 0; ?>
        <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['stock'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['category'] ?></td>
                <td>
                    <a style="color:pink" href="/product/<?= $item['id'] ?>/edit" class="btn btn-secondary">Edit</a>
                    <form action="/product/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                        <input type="hidden" name="_method" value="delete" />
                        <button style="background-color:pink;color:#6F7378k" type="button">Delete</button>
                    </form>
                    
                </td>
            </tr>

        <?php endforeach ?>
        </tbody>
    </table>
<?= $this->endSection() ?>