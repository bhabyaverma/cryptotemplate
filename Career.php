<?php include "header.php";?>
    <style>
        .bodyc {
            font-family: Arial, sans-serif;
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        .crypto-career-container {
            display: flex;
            width: 80%;
            max-width: 900px;
            background: #1e1e1e;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(255, 223, 0, 0.5);
            overflow: hidden;
        }
        .crypto-career-form, .crypto-job-listings {
            padding: 25px;
            color: white;
            flex: 1;
        }
        .crypto-career-form {
            background: #2b2b2b;
            text-align: center;
            position: relative;
        }
        .crypto-career-form h2 {
            color: #ff9900;
            text-shadow: 2px 2px 10px rgba(255, 153, 0, 0.8);
        }
        .crypto-career-form label {
            font-weight: bold;
            display: block;
            margin-top: 12px;
            text-align: left;
        }
        .crypto-career-form input, .crypto-career-form select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ff9900;
            border-radius: 6px;
            background: #3a3a3a;
            color: white;
        }
        .crypto-career-form button {
            width: 100%;
            background: #ff9900;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
        }
        .crypto-career-form button:hover {
            background: #ffcc00;
        }
        .crypto-job-listings {
            background: #1e1e1e;
            overflow-y: auto;
            animation: fadeIn 1s ease-in-out;
        }
        .crypto-job-listings h2 {
            color: #ff9900;
            text-align: center;
        }
        .crypto-job-item {
            background: #2b2b2b;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            transition: transform 0.3s;
        }
        .crypto-job-item:hover {
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="bodyc">
    <div class="crypto-career-container">
        <form class="crypto-career-form" action="submit_career.php" method="POST" enctype="multipart/form-data">
            <h2>Join Our Crypto Revolution</h2>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="education">Last Education</label>
            <input type="text" id="education" name="education" required>
            
            <label for="experience">Experience</label>
            <select id="experience" name="experience" required>
                <option value="fresher">Fresher</option>
                <option value="experience">Experienced</option>
            </select>
            
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="resume">Upload Resume</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            
            <button type="submit">Apply Now</button>
        </form>
        <div class="crypto-job-listings">
            <h2>Current Job Openings</h2>
            <div class="crypto-job-item">
                <h3 style="color: #fff;">Blockchain Developer</h3>
                <p>Looking for an expert in blockchain technologies, smart contracts, and Solidity.</p>
            </div>
            <div class="crypto-job-item">
                <h3 style="color: #fff;">Crypto Marketing Specialist</h3>
                <p>Seeking a digital marketing expert with experience in crypto promotions.</p>
            </div>
            <div class="crypto-job-item">
                <h3 style="color: #fff;">Full Stack Developer</h3>
                <p>Experienced in front-end and back-end development, React, and Node.js.</p>
            </div>
        </div>
    </div>

</div>
<?php include "footer.php";?>
</body>
</html>
