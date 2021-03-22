require('./bootstrap');
import 'bootstrap/dist/js/bootstrap.bundle.min';

var myModal = document.getElementById('myModal')
     var myInput = document.getElementById('myInput')
     
     myModal.addEventListener('shown.bs.modal', function () {
       myInput.focus()
     });
     
var map = L.map('map').
     setView([41.66, -4.72],
     15);

