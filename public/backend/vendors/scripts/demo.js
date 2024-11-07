/*---------------------- Hide the success message after 5 seconds---------------------*/
setTimeout(function () {
  var successMessage = document.getElementById("success-message");
  if (successMessage) {
    successMessage.style.display = "none";
  }
}, 5000); // 5000 milliseconds = 5 seconds

/*--------------------- Hide the errors message after 5 seconds-----------------------*/
setTimeout(function () {
  var errorMessage = document.getElementById("error-message");
  if (errorMessage) {
    errorMessage.style.display = "none";
  }
}, 5000); // 5000 milliseconds = 5 seconds

/*------------------------------registration success and error messages timeout------------------------------------------- */
function hideMessage(elementId, timeout) {
  const messageElement = document.getElementById(elementId);
  if (messageElement) {
      setTimeout(() => {
          messageElement.style.display = 'none';
      }, timeout);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  // Hide success message after 5 seconds
  hideMessage('successMsg', 5000);

  // Hide each error message after 5 seconds
  hideMessage('errorMsgName', 5000);
  hideMessage('errorMsgEmail', 5000);
  hideMessage('errorMsgPassword', 5000);
  hideMessage('errorMsgCpass', 5000);
});
/*-------------------------------password icon show and hide function -------------------------------------------*/
function togglePassword(passwordFieldId, toggleIconId) {
  const passwordField = document.getElementById(passwordFieldId);
  const toggleIcon = document.getElementById(toggleIconId);

  // Toggle the type attribute
  const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordField.setAttribute('type', type);

  // Toggle the icon
  toggleIcon.classList.toggle('fa-eye');
  toggleIcon.classList.toggle('fa-eye-slash');
}
/*------------------script by Sameer------------------------ */
// Object to hold room numbers for each floor
const roomsByFloor = {
  ground: ["001", "002", "003", "004"],
  first: ["101", "102", "103", "104"],
  second: ["201", "202", "203", "204"],
};

// Function to populate room numbers based on selected floor
function updateRoomOptions() {
  const roomSelect = document.getElementById('room_no');
  const selectedFloor = document.getElementById('floor').value;

  // Clear existing room options
  roomSelect.innerHTML = '<option value="">Select Room no.</option>';

  // Populate room options based on selected floor
  (roomsByFloor[selectedFloor] || []).forEach(room => {
      roomSelect.insertAdjacentHTML('beforeend', `<option value="${room}">${room}</option>`);
  });
}
// Event listener for floor type selection
document.getElementById('floor').addEventListener('change', updateRoomOptions);
/*---------------------delete staff form record  ------------------------------------ */
$(document).ready(function () {
  let deleteUrl;

  // Show confirmation modal
  $(document).on('click', '.delete-staff', function (e) {
      e.preventDefault();
      deleteUrl = $(this).attr('href');
      $('#confirmDeleteModal').modal('show');
  });

  // Handle the deletion
  $('#confirmDelete').on('click', function () {
      $.ajax({
          type: 'DELETE',
          url: deleteUrl,
          dataType: 'json',
          success: function (response) {
              const alertType = response.success ? 'success' : 'danger';
              const message = response.success ? response.message : 'Failed to delete data.';

              // Remove row and show response message
              $('#staffTableBody tr').has(`a[href="${deleteUrl}"]`).fadeOut('slow', function () {
                  $(this).remove();
              });

              showAlert(alertType, message);
              $('#confirmDeleteModal').modal('hide');
          },
          error: function (xhr) {
              showAlert('danger', `An error occurred: ${xhr.responseText}`);
              $('#confirmDeleteModal').modal('hide');
          }
      });
  });
  function showAlert(type, message) {
      $('#responseMessage').html(`
      <div class="alert alert-${type}">
          <i class="fa fa-${type === 'success' ? 'check' : 'cancel'}"></i> ${message}
      </div>
  `).fadeIn().delay(3000).fadeOut();
  }
});










