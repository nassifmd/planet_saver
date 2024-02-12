<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Crop Disease Identification</title>
    <style>
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Crop Disease Identification</h2>
        <form id="cropForm">
            <input type="file" id="imageInput" accept="image/*" required>
            <button type="submit">Identify Disease</button>
        </form>
        <div id="resultContainer" style="display: none;">
            <h3>Result:</h3>
            <p id="diseaseResult"></p>
            <p id="recommendationResult"></p>
        </div>
    </div>

    <script>
        document.getElementById('cropForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData();
            formData.append('image', document.getElementById('imageInput').files[0]);

            fetch('/identify-disease', {
                method: 'POST',
                body: formData
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                document.getElementById('diseaseResult').textContent = 'Disease: ' + data.disease;
                document.getElementById('recommendationResult').textContent = 'Recommendations: ' + data.recommendations;
                document.getElementById('resultContainer').style.display = 'block';
            })
            .catch(function(error) {
                console.log('Error:', error);
            });
        });
    </script>
</body>
</html>
