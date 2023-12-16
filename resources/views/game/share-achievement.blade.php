<!DOCTYPE html>
<html>
<head>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://example.com/thumbnail.jpg">
    <meta property="og:image" content="https://example.com/thumbnail.jpg">


    <title>Share Achievement</title>
    <style>
    .certificate {
        width: 600px;
        height: 450px;
        border: 2px solid #000;
        margin: 50px auto;
        padding: 20px;
        text-align: center;
        background-color: #F8F8F8;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .certificate h1 {
        font-size: 32px;
        color: #333;
        margin-bottom: 20px;
    }

    .certificate h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .certificate p {
        font-size: 18px;
        margin-bottom: 10px;
        color: #555;
    }

    .certificate .score {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 30px;
        color: #333;
    }

    .certificate .rank {
        font-size: 20px;
        margin-bottom: 30px;
        color: #555;
    }

    .signature-container {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }

    .signature {
        text-align: center;
    }

    .signature img {
        max-width: 150px;
        margin-bottom: 1px;
        z-index:-1;
        max-height: 90px;
    }

    .signature p {
        margin-bottom: 5px;
        color: #555;
    }

    .share-section {
        margin-top: 30px;
    }

    .share-section p {
        font-size: 16px;
        margin-bottom: 10px;
        color: #333;
    }

    .share-section a {
        display: inline-block;
        margin-right: 10px;
        padding: 10px 20px;
        background-color: #3b5998;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .share-section a:hover {
        background-color: #2c4372;
    }

    /* Updated color styles */

    .certificate {
        background-color: #f2f8f2;
    }

    .certificate h1 {
        color: #156a10;
    }

    .certificate h2 {
        color: #156a10;
    }

    .certificate p {
        color: #333;
    }

    .certificate .score {
        color: #156a10;
    }

    .certificate .rank {
        color: #555;
    }

    .signature p {
        color: #555;
    }

    .share-section p {
        color: #333;
    }

    .share-section a {
        background-color: #156a10;
    }

    .share-section a:hover {
        background-color: #0f4607;
    }

    .watermark {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0.2;
    pointer-events: none;
}

.name {
    font-family: cursive;
}
</style>
</head>
<body>
    <div class="certificate">
        <img src="/img/logo1.png" class="watermark" alt="Watermark Logo">
        <h1>Certificate of Achievement</h1>

        <p>This certificate is awarded to:</p>
        <h2 class="name">{{ $user->name }}</h2>

        <p>For achieving a score of <span class="score">{{ $user->score }}</span> points and securing the <span class="score">{{ $rank !== false ? $rank + 1 : 'N/A' }}</span> position.</p>

        <p>Well done and congratulations on your outstanding achievement!</p>

        <p>Issued on: {{ date('Y-m-d') }}</p>

        <div class="signature-container">
            <div class="signature">
                <img src="/img/sign.png" alt="Signature 1">
                <p>Nassif Dauda</p>
                <p>CTO, AgricConnect</p>
            </div>

            <div class="signature">
                <img src="/img/sign1.png" alt="Signature 2">
                <p>Shaibu Fuseini</p>
                <p>Operations Officer, AgricConnect</p>
            </div>
        </div>

        <div class="share-section">
            <p>Share your achievement with others:</p>

            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank">Share on Facebook</a>
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank">Share on Twitter</a>
            <a href="#" onclick="shareLinkedIn(event)">Share on LinkedIn</a>
            <a href="#" onclick="shareFacebook(event)">Share on Facebook</a>

        </div>

        <!-- Download Certificate button -->
        <div class="download-section">
            <p>Download your certificate:</p>
            <a href="{{ route('game.download-certificate') }}">Download</a>
        </div>
    </div>

    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script>
    function shareLinkedIn(event) {
        event.preventDefault();
        var url = encodeURIComponent(window.location.href);
        var title = encodeURIComponent(document.title);
        var linkedinShareUrl = 'https://www.linkedin.com/sharing/share-offsite/?url=' + url + '&title=' + title;
        window.open(linkedinShareUrl, '_blank');
    }

    function shareFacebook(event) {
  event.preventDefault();

  // Capture the certificate as an image using html2canvas
  html2canvas(document.querySelector(".certificate")).then(function (canvas) {
    // Convert the canvas to a data URL
    var certificateData = canvas.toDataURL("image/jpeg");

    // Create a thumbnail canvas
    var thumbnailCanvas = document.createElement("canvas");
    var thumbnailContext = thumbnailCanvas.getContext("2d");

    // Calculate the thumbnail width and height
    var thumbnailWidth = 200; // Adjust the width as desired
    var thumbnailHeight = (canvas.height * thumbnailWidth) / canvas.width;

    // Set the thumbnail canvas dimensions
    thumbnailCanvas.width = thumbnailWidth;
    thumbnailCanvas.height = thumbnailHeight;

    // Draw the certificate image onto the thumbnail canvas
    thumbnailContext.drawImage(canvas, 0, 0, thumbnailWidth, thumbnailHeight);

    // Convert the thumbnail canvas to a data URL
    var thumbnailData = thumbnailCanvas.toDataURL("image/jpeg");

    // Share the certificate and thumbnail on Facebook
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
