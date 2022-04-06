<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Update product <?= $data['title'] ?></h5>

            <form action="/todos/<?= $data['id'] ?>" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="example-todos-title">Todos List</label>
                    <input type="text" class="form-control" id="example-todos-title" aria-describedby="emailHelp" 
                        placeholder="Enter todos title" required name="title" value="<?= $data['title'] ?>">
                </div>

                <div class="form-group">
                    <label for="example-todos-description">Stock</label>
                    <input type="text" class="form-control" id="example-todos-description" aria-describedby="emailHelp" 
                        placeholder="Enter todos description" required name="title" value="<?= $data['description'] ?>">
                </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>