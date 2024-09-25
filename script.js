//back_btn
function goBack() {
    window.history.back();
}
//pp
// document.getElementById('upload-form').addEventListener('submit', function(event) {
//     event.preventDefault();

//     const formData = new FormData();
//     const fileInput = document.getElementById('pp');
//     const file = fileInput.files[0];
//     formData.append('pp', file);

//     fetch('upload.php', {
//         method: 'POST',
//         body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.success) {
//             document.getElementById('dashboard-picture').src = data.filePath;
//         } else {
//             alert('Failed to upload the picture.');
//         }
//     })
//     .catch(error => {
//         console.error('Error:', error);
//         alert('An error occurred while uploading the picture.');
//     });
// });


// document.getElementById('upload-form').addEventListener('submit', function(event) {
//     event.preventDefault();

//     const formData = new FormData();
//     const fileInput = document.getElementById('profile-picture');
//     const file = fileInput.files[0];
//     formData.append('profile-picture', file);

//     fetch('upload.php', {
//         method: 'POST',
//         body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.success) {
//             document.getElementById('dashboard-picture').src = data.filePath;
//         } else {
//             alert('Failed to upload the picture.');
//         }
//     })
//     .catch(error => {
//         console.error('Error:', error);
//         alert('An error occurred while uploading the picture.');
//     });
// });

