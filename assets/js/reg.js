document.getElementById('btnReg').addEventListener('click', function () {
    // console.log('clicked')

    var sFname = document.getElementById('firstName').value;
    var sLname = document.getElementById('lastName').value;
    var sEmail = document.getElementById('email').value;
    var nCell = document.getElementById('cellNum').value;

    var sJsonData = {
        fname: sFname,
        lname: sLname,
        email: sEmail,
        cell: nCell
    }

    const objAjaxData = {
        type: 'POST',
        url: "controllers/save.php",
        data: sJsonData,
        success: (result) => {
            // console.log(result)
            alert("You are now registered!")
            var sFname = document.getElementById('firstName').value = "";
            var sLname = document.getElementById('lastName').value = "";
            var sEmail = document.getElementById('email').value = "";
            var nCell = document.getElementById('cellNum').value = "";
        }
    }

    $.ajax(objAjaxData);

})