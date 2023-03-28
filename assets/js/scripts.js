

var modal = document.getElementById("bookingModal");
var btnShow = document.getElementById("btnBooking");
var btnHide = document.getElementById("close");

btnShow.onclick = function () {
    modal.style.display = "block";
}

btnHide.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

/*
CODE BLOCK FOR TRAVEL PACKAGE LOADER
*/

// function loadContent(btnId, contentID) {
    
// }

// const btnShow = document.querySelectorAll('clickable-card');
// const abangNaCotainer = document.getElementById('contentContainer');

// btnShow.forEach(function (button) {
//     button.addEventListener('click', function () {
    
//         // let result = document.getElementById('abangNaIframe').src = "baguio.html"
//         let result = button.getAttribute('data-content');

//         abangNaCotainer.src = result;
//         console.log(result)
//     });
    
// });



// var folderPath = "";

// function showContent(btnUrl) {
//     // var folderPath = btnUrl;

//     console.log(folderPath);

//     var result = document.getElementById('abangNaIframe').src = btnUrl;
// }

