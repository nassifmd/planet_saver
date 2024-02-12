<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://example.com/thumbnail.jpg">
    <meta property="og:image" content="https://example.com/thumbnail.jpg">
    <title>Share Achievement</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-gray-100">
    <div class="max-w-screen-md mx-auto p-8 bg-white rounded-md shadow-md my-10">
        <!-- ... (existing certificate content) -->

        <!-- User Upload Section -->
        <div class="my-4">
            <p class="text-lg font-semibold mb-2">Upload your picture:</p>
            <input type="file" accept="image/*" id="userImageInput" class="mb-2">
            <button onclick="previewImage()" class="bg-blue-500 text-white px-4 py-2 rounded">Preview</button>
        </div>

        <!-- Preview Image Section -->
        <div id="imagePreview" style="display: none;" class="my-4 relative">
            <p class="text-lg font-semibold mb-2">Preview:</p>
            <div class="relative">
                <img id="previewImg" alt="User's Preview Image" class="max-w-full mb-2">
                <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center">
                    <p class="text-2xl font-bold text-white bg-blue-500 p-4 rounded-full shadow-lg transform hover:scale-105 transition-transform duration-300">I am a PLANETSAVER</p>
                </div>
            </div>
            <!-- Add a button to download the preview image with overlay -->
            <button onclick="downloadPreview()" class="bg-green-500 text-white px-4 py-2 rounded mt-2">Download Preview</button>
        </div>

        <!-- Share Section -->
        <div class="my-4">
            <p class="text-lg font-semibold mb-2">Share your achievement with others:</p>
            <a href="#" onclick="shareOnFacebook()" class="inline-block mr-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Share on Facebook</a>
            <a href="#" onclick="shareOnTwitter()" class="inline-block mr-2 px-4 py-2 bg-blue-400 text-white rounded hover:bg-blue-600">Share on Twitter</a>
            <a href="#" onclick="shareOnLinkedIn()" class="inline-block px-4 py-2 bg-blue-800 text-white rounded hover:bg-blue-900">Share on LinkedIn</a>
        </div>

        <div class="my-4">
            <a href="{{ route('dashboard.index') }}" class="text-blue-500 hover:underline">Back to Home Page</a>
        </div>
    </div>


    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script>
        // Function to preview uploaded image
        function previewImage() {
            var input = document.getElementById('userImageInput');
            var preview = document.getElementById('previewImg');
            var previewSection = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    previewSection.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Function to download the preview image with overlay
        function downloadPreview() {
            var previewImage = document.getElementById('previewImg');
            var overlayText = "I am a PLANETSAVER";
            
            // Create a new canvas for overlay
            var overlayCanvas = document.createElement("canvas");
            var overlayContext = overlayCanvas.getContext("2d");
            
            // Set the overlay canvas size
            overlayCanvas.width = previewImage.width;
            overlayCanvas.height = previewImage.height;
            
            // Draw the preview image on the overlay canvas
            overlayContext.drawImage(previewImage, 0, 0, overlayCanvas.width, overlayCanvas.height);
            
            // Apply the overlay text
            overlayContext.font = "bold 24px Arial";
            overlayContext.fillStyle = "white";
            overlayContext.textAlign = "center";
            overlayContext.textBaseline = "middle";
            overlayContext.fillText(overlayText, overlayCanvas.width / 2, overlayCanvas.height / 2);
            
            // Create a download link
            var downloadLink = document.createElement('a');
            downloadLink.href = overlayCanvas.toDataURL("image/jpeg");
            downloadLink.download = 'preview_image_with_overlay.jpg'; // You can set the filename here
            document.body.appendChild(downloadLink);
            
            // Trigger the download
            downloadLink.click();
            
            // Remove the download link
            document.body.removeChild(downloadLink);
        }

        function shareLinkedIn(event) {
            event.preventDefault();
            var url = encodeURIComponent(window.location.href);
            var title = encodeURIComponent(document.title);
            var linkedinShareUrl = 'https://www.linkedin.com/sharing/share-offsite/?url=' + url + '&title=' + title;
            window.open(linkedinShareUrl, '_blank');
        }

        function shareFacebook(event) {
            event.preventDefault();
            html2canvas(document.querySelector(".certificate")).then(function (canvas) {
                var certificateData = canvas.toDataURL("image/jpeg");
                var thumbnailCanvas = document.createElement("canvas");
                var thumbnailContext = thumbnailCanvas.getContext("2d");
                var thumbnailWidth = 200;
                var thumbnailHeight = (canvas.height * thumbnailWidth) / canvas.width;
                thumbnailCanvas.width = thumbnailWidth;
                thumbnailCanvas.height = thumbnailHeight;
                thumbnailContext.drawImage(canvas, 0, 0, thumbnailWidth, thumbnailHeight);
                var thumbnailData = thumbnailCanvas.toDataURL("image/jpeg");
                FB.ui(
                    {
                        method: "share",
                        href: window.location.href,
                        picture: thumbnailData,
                        description: "Check out my certificate of achievement!",
                    },
                    function (response) {
                        console.log(response);
                    }
                );
            });
        }
    </script>
</body>
</html>
