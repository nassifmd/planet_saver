// Example: Submit form via AJAX
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('create-thread-form');
    if (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            // Get form data
            var formData = new FormData(form);

            // Make AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', form.action, true);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Handle successful response
                    console.log(xhr.responseText);
                } else {
                    // Handle error response
                    console.error(xhr.responseText);
                }
            };
            xhr.onerror = function () {
                // Handle error
                console.error('An error occurred during the request.');
            };
            xhr.send(formData);
        });
    }
});


// Example: Update thread list dynamically
function updateThreadList(response) {
    var threadListContainer = document.getElementById('thread-list-container');
    if (threadListContainer) {
        threadListContainer.innerHTML = response;
    }
}

// Example: Attach event listener to a dynamic element
document.addEventListener('click', function (event) {
    if (event.target.matches('.delete-post-button')) {
        var postId = event.target.getAttribute('data-post-id');
        // Perform action based on postId
    }
});
