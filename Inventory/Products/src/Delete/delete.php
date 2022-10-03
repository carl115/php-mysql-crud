<div class="window confirm-window" style="z-index: 30;">
    <div class="card" style="margin-bottom: 330px;">
        <div class="content card-body" style="width: 400px; height: 220px;">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <strong>¿Are you sure you want to delete the data?</strong>
            </div>
            <form action="../sql/delete.php" method="POST">
                <input id="idDelete" type="hidden" name="id" />
                <div class="d-flex justify-content-between">
                    <a id="btn-confirm-cancel" class="btn btn-danger">Cancel</a>
                    <input type="submit" value="Accept" class="btn btn-success" />
                </div>
            </form>
        </div>
    </div>
</div>