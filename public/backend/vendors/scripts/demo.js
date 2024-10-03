// Hide the success message after 5 seconds
setTimeout(function () {
  var successMessage = document.getElementById("success-message");
  if (successMessage) {
    successMessage.style.display = "none";
  }
}, 5000); // 5000 milliseconds = 5 seconds

// Hide the errors message after 5 seconds
setTimeout(function () {
  var errorMessage = document.getElementById("error-message");
  if (errorMessage) {
    errorMessage.style.display = "none";
  }
}, 5000); // 5000 milliseconds = 5 seconds

/*table show  */
document.getElementById('room_floor').addEventListener('change', function () {
  const roomContainer = document.getElementById('room-container');
  const statusContainer = document.getElementById('status-container');

  // Show room container when a floor is selected
  if (this.value) {
    roomContainer.classList.remove('d-none');
  } else {
    roomContainer.classList.add('d-none');
    statusContainer.classList.add('d-none'); // Hide status when floor is deselected
  }
});

// Optionally, you can add another listener for the room dropdown to show the status container
document.getElementById('room_no').addEventListener('change', function () {
  const statusContainer = document.getElementById('status-container');

  // Show status container when a room is selected
  if (this.value) {
    statusContainer.classList.remove('d-none');
  } else {
    statusContainer.classList.add('d-none');
  }
});
/********************************form button submit******************************************* */
$(document).ready(function() {
  $('#add-staff-form').modal('show');
});

/*************************************************************************** */


