<div id="new-window" class="window">
    <div class="card">
        <div class="content card-body">
            <form action="../sql/add.php" class="form d-flex flex-column justify-content-between" method="POST" style="height: 100%;">
                <div>
                    <div class="row">
                        <div class="col my-3">
                            <label class="form-label">Product name</label>
                            <input type="text" name="product_name" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col my-3">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" class="form-control" />
                        </div>
                        <div class="col my-3">
                            <label class="form-label">Units</label>
                            <input type="number" name="units" class="form-control" />
                        </div>
                    </div>
                    <div class="my-3">
                        <label class="form-label">Product price</label>
                        <input type="number" name="unit_price" class="form-control" />
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a id="btn-new-cancel" class="btn btn-danger">Cancel</a>
                    <input type="submit" value="Create" class="btn btn-primary" />
                 </div>
            </form>
        </div>
    </div>
</div>