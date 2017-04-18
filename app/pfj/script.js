// Add Record
function addRecord() {
    // get values
    var nomeclie = $("#nomeclie").val();
    nomeclie = nomeclie.trim();
    var apelido = $("#apelido").val();
    apelido = apelido.trim();
 
    if (nomeclie == "") {
        alert("O nome é obrigatório!");
    }
    else if (apelido == "") {
        alert("O apelido é obrigatório!");
    }
    else {
        // Add record
        $.post("create.php", {
            nomeclie: nomeclie,
            apelido: apelido
        }, function (data, status) {
            // close the popup
            $("#add_new_record_modal").modal("hide");
 
            // read records again
            readRecords();
 
            // clear fields from the popup
            $("#nomeclie").val("");
            $("#apelido").val("");
        });
    }
}

// READ records
function readRecords() {
    $.get("read.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}
function GetUserDetails(id) {
    // Add User ID to the hidden field
    $("#hidden_user_id").val(id);
    $.post("details.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assign existing values to the modal popup fields
            $("#update_first_name").val(user.NOMECLIE);
            $("#update_last_name").val(user.APELIDO);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var nomeclie = $("#update_first_name").val();
    nomeclie = nomeclie.trim();
    var apelido = $("#update_last_name").val();
    apelido = apelido.trim();
 
    if (nomeclie == "") {
        alert("O nome é obrigatório!");
    }
    else if (apelido == "") {
        alert("O apelido é obrigatório!");
    }
    else {
        // get hidden field value
        var id = $("#hidden_user_id").val();
 
        // Update the details by requesting to the server using ajax
        $.post("update.php", {
                id: id,
                nomeclie: nomeclie,
                apelido: apelido
            },
            function (data, status) {
                // hide modal popup
                $("#update_user_modal").modal("hide");
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}


function DeleteUser(id) {
    var conf = confirm("Você deseja excluir esse cliente?");
    if (conf == true) {
        $.post("delete.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

$(document).ready(function () {
    // READ records on page load
    readRecords(); // calling function
});