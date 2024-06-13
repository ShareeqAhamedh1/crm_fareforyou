<!DOCTYPE html>
<html>
<head>
    <title>CRM Plugins Installation</title>
    <style>
        body {
            font-family: Roboto, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .container {
            text-align: center;
        }

        .label {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .timer {
            font-size: 18px;
        }

        .progress-bar {
            height: 10px;
            width: 300px;
            background-color: #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .progress-bar-fill {
            height: 100%;
            background-color: #4CAF50;
            width: 0%;
            transition: width 1s ease;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="progress-bar">
        <div class="progress-bar-fill" id="progress-bar-fill"></div>
    </div>
    <h2 class="label">Installing CRM Plugins for Report...</h2>
    <div class="timer">
        <span id="time-remaining"></span>
    </div>
</div>

<script>
    const timeRemainingElement = document.getElementById('time-remaining');
    const progressBarFill = document.getElementById('progress-bar-fill');
    let totalTime = 1 * 60 * 60; // 2 hours in seconds

    function updateTimer() {
        const hours = Math.floor(totalTime / 3600);
        const minutes = Math.floor((totalTime % 3600) / 60);
        const seconds = totalTime % 60;
        timeRemainingElement.textContent = `${hours}:${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        if (totalTime > 0) {
            totalTime--;

            // Update progress bar
            const progressPercentage = ((2 * 60 * 60 - totalTime) / (2 * 60 * 60)) * 100;
            progressBarFill.style.width = `${progressPercentage}%`;
        } else {
            clearInterval(timerInterval);
            timeRemainingElement.textContent = "Installation Complete!";
            // Add any further actions you want to happen after installation (redirect, etc.)
        }
    }

    const timerInterval = setInterval(updateTimer, 1000);
    updateTimer(); // Initial display
</script>

</body>
</html>
