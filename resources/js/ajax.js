$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("body").on("click", "#createNewCompany", function (e) {

        e.preventDefault;
        $('#userCrudModal').html("Create company");
        $('#submit').val("Create company");
        $('#modal-id').modal('show');
        $('#company_id').val('');
        $('#companydata').trigger("reset");

    });
});