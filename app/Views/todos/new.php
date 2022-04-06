<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Create new product</h5>

            <form action="/todos" method="post">

                <div class="form-group">
                    <label for="example-todos-title">Todos Title</label>
                    <input type="text" class="form-control" id="example-todos-title" aria-describedby="emailHelp" 
                        placeholder="Enter todos title" required name="title">
                </div>

                <div class="form-group">
                    <label for="example-todos-description">Description</label>
                    <input type="text" class="form-control" id="example-todos-description" aria-describedby="emailHelp" 
                        placeholder="Enter todos title" required name="title">
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>