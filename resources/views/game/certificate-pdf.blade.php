<!DOCTYPE html>
<html>
<head>
    <title>Printable Certificate</title>
    <style>
        /* Styles for the certificate section */
        .certificate {
            width: 600px;
            height: auto;
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
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 10px;
        }
        
        .signature {
            text-align: center;
            flex-basis: 50%;
            max-width: 200px;
            grid: row 2px;;
        }
        
        .signature img {
            max-width: 150px;
            margin-bottom: 1px;
            z-index: -1;
            max-height: 90px;
        }
        
        .signature p {
            margin-bottom: 5px;
            color: #555;
        }

        .name {
    font-family: cursive;
}
        
        /* Hide everything else on the page for printing */
        @media print {
            body * {
                display: none;
            }
            
            .certificate,
            .certificate * {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="certificate">
        <img src="img/logo1.png" class="watermark" alt="Watermark Logo">
        <h1>Certificate of Achievement</h1>

        <p>This certificate is awarded to:</p>
        <h2>{{ $user->name }}</h2>

        <p>For achieving a score of <span class="score">{{ $user->score }}</span> points and securing the <span class="score">{{ $rank !== false ? $rank + 1 : 'N/A' }}</span> position.</p>

        <p>Well done and congratulations on your outstanding achievement!</p>

        <p>Issued on: {{ date('Y-m-d') }}</p>

        <div class="signature-container">
            <div class="signature">
                <img src="img/sign.png" alt="Signature 1">
                <p class="name">Nassif Dauda</p>
                <p>CTO, AgricConnect</p>
            </div>

            <div class="signature">
                <img src="img/sign1.png" alt="Signature 2">
                <p>Shaibu Fuseini</p>
                <p>Operations Officer, AgricConnect</p>
            </div>
        </div>
    </div>
</body>
</html>
