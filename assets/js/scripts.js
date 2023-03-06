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
