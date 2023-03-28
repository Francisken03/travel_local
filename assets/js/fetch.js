window.addEventListener('load', () => {

    interval()

}); 

function interval() {
    
    setInterval("fetch()", 1000);
    
}


function fetch() {
    // console.log("fetched");
    $.ajax(
        {
            type: 'POST',
            url: "controllers/fetch.php",
            success: (result) => {
                if (result == "error") {
                    alert("Error. Please call system administrator");
                } else {
                    document.getElementById('memberList').innerHTML = result
                }
            }
        }
);
}

function itemDelete(itemId) {
    
    // alert("delete " + itemId);

    $.ajax(
        {
            type: 'POST',
            url: "controllers/delete.php",
            data: { nId: itemId },
            // beforeSend: () => {
            
            // },
            success: (result) => {
                if (result == "error") {
                    alert("Error. Please call system administrator");
                } else {
                    
                    document.getElementById('memberList').innerHTML = result;
                }
            }
        }
);
}


function itemEdit(itemId) {

    // alert("clickable" + itemId);

    $.ajax(
        {
            type: 'POST',
            url: "controllers/edit.php",
            data: { nId: itemId },
            // beforeSend: () => {
            
            // },
            success: (result) => {
                if (result == "error") {
                    alert("Error. Please call system administrator");
                } else {
                    var jsonConvert = JSON.parse(result); //This converts JSON results to object
                    // console.log(jsonConvert.first_name);
                    // document.getElementById('memberList').innerHTML = result;

                    document.getElementById('firstName').value = jsonConvert.first_name;
                    document.getElementById('lastName').value = jsonConvert.last_name;
                    document.getElementById('email').value = jsonConvert.email;
                    document.getElementById('cellNum').value = jsonConvert.phone;
                    document.querySelector('#txtId').value = itemId;
                    $('#editModal').modal('show');

                    document.getElementById('btnSave').addEventListener('click', function () {
                    
                        
                        var itemnId = document.getElementById('txtId').value;
                        var sFname = document.getElementById('firstName').value;
                        var sLname = document.getElementById('lastName').value;
                        var sEmail = document.getElementById('email').value;
                        var nCell = document.getElementById('cellNum').value;
                    
                        var sJsonData = {
                            itemNId: itemnId,
                            fname: sFname,
                            lname: sLname,
                            email: sEmail,
                            cell: nCell
                        };

                        console.log(sJsonData);
                        console.log("this is nId" + itemnId);

                        $.ajax({
                            type: 'POST',
                            url: "controllers/update.php",
                            data: sJsonData,
                            beforeSend: () => {
            
                            },
                            success: (result) => {
                                // console.log(result)
                                // console.log(result)
                                
                                // var sFname = document.getElementById('firstName').value = "";
                                // var sLname = document.getElementById('lastName').value = "";
                                // var sEmail = document.getElementById('email').value = "";
                                // var nCell = document.getElementById('cellNum').value = "";

                                // fetch()
                                $('#editModal').modal('hide');
                                
                            }
                    
                        });
                    }
                )};
        }

     });

};
