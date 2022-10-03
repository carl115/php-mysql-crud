//OPTIONS PROFILE
const profileOptions = document.getElementById('content-user');
const userSubmenu = document.getElementById('submenu');

profileOptions.addEventListener('click', () => {
    userSubmenu.classList.toggle('open');
});
//

//DELETE
function alertDelete(number) {

    let id = number;

    document.querySelector('.confirm-window').classList.toggle('activate');

    $.ajax({
        url: 'Delete/sql/consult.php',
        method: 'POST',
        data: { id },
        success: res => {
            let data = JSON.parse(res);

            const idDelete = document.getElementById('idDelete');
            idDelete.value = data.id;
        }
    });
}

const btnConfirmCancel = document.getElementById('btn-confirm-cancel');
btnConfirmCancel.addEventListener('click', () => {
    document.querySelector('.confirm-window').classList.toggle('activate');
});
//

//EDIT
function editWindow(number) {

    let id = number;

    document.querySelector('.edit-window').classList.toggle('activate');

    $.ajax({
        url: 'Edit/sql/consult.php',
        method: 'POST',
        data: { id },
        success: res => {
            let data = JSON.parse(res);

            const id = document.getElementById('id');
            id.value = data.id;

            const editProduct = document.getElementById('edit-product');
            editProduct.value = data.product_name;

            const editCategory = document.getElementById('edit-category');
            editCategory.value = data.category;
            
            const editUnits = document.getElementById('edit-units');
            editUnits.value = data.units;

            const editUnitPrice = document.getElementById('edit-unit-price');
            editUnitPrice.value = data.unit_price;
        }
    });

}

const btnEditCancel = document.getElementById('btn-edit-cancel');
btnEditCancel.addEventListener('click', () => {
    document.querySelector('.edit-window').classList.toggle('activate');
});
//

//NEW
const btnNew = document.getElementById('btn-new');
btnNew.addEventListener('click', () => {
    document.getElementById('new-window').classList.toggle('activate'); 
});

const btnNuevoCancelar = document.getElementById('btn-new-cancel');
btnNuevoCancelar.addEventListener('click', () => {
    document.getElementById('new-window').classList.toggle('activate');
});
//

//PRODUCTOS_AGOSTADOS
const btnOutOfStock = document.getElementById('btn-outOfStock');
btnOutOfStock.addEventListener('click', () => {
    document.getElementById('outOfStock-window').classList.toggle('activate');
});

const btnOutOfStockCancel = document.getElementById('btn-outOfStock-cancel');
btnOutOfStockCancel.addEventListener('click', () => {
    document.getElementById('outOfStock-window').classList.toggle('activate');
});
//

//DATATABLE
$(document).ready(function() {
    $('#table').DataTable({
        "searching": false,
        "oLanguage": {
            "sLengthMenu": "Show _MENU_ rows",
            "sZeroRecords": "Nothing found - sorry",
            "sInfo": "Show _START_ to _END_ rows of _TOTAL_ datas",
            "oPaginate": {
                "sFirst":    "First",
                "sLast":    "Last",
                "sNext":    "Next",
                "sPrevious": "Previous"
            },
        }
    });
});
//