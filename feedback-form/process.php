<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Feedback</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #4895ef;
            --secondary: #3f37c9;
            --dark: #1b263b;
            --light: #f8f9fa;
            --success: #4cc9f0;
            --warning: #f8961e;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .thank-you-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            overflow: hidden;
        }
        
        .thank-you-header {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .thank-you-header h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .thank-you-header p {
            opacity: 0.9;
            font-weight: 300;
        }
        
        .feedback-summary {
            padding: 30px;
        }
        
        .feedback-summary h2 {
            color: var(--dark);
            margin-bottom: 20px;
            font-size: 22px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .feedback-summary h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
        }
        
        .feedback-item {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid var(--primary-light);
        }
        
        .feedback-label {
            font-weight: 600;
            color: var(--dark);
            display: block;
            margin-bottom: 5px;
        }
        
        .feedback-value {
            color: #495057;
        }
        
        .return-link {
            display: inline-block;
            margin-top: 20px;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .return-link:hover {
            color: var(--secondary);
            text-decoration: underline;
        }
        
        .rating-stars {
            color: var(--warning);
            font-size: 18px;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <div class="thank-you-header">
            <h1>Thank You for Your Feedback!</h1>
            <p>We appreciate you taking the time to share your thoughts with us.</p>
        </div>
        
        <div class="feedback-summary">
            <h2>Your Feedback Details</h2>
            
            <div class="feedback-item">
                <span class="feedback-label">Name:</span>
                <span class="feedback-value"><?php echo htmlspecialchars($_POST['name']); ?></span>
            </div>
            
            <div class="feedback-item">
                <span class="feedback-label">Email:</span>
                <span class="feedback-value"><?php echo htmlspecialchars($_POST['email']); ?></span>
            </div>
            
            <div class="feedback-item">
                <span class="feedback-label">Rating:</span>
                <span class="feedback-value">
                    <?php 
                        $rating = (int)$_POST['rating'];
                        echo $rating;
                        echo str_repeat('★', $rating) . str_repeat('☆', 5 - $rating);
                    ?>
                </span>
            </div>
            
            <div class="feedback-item">
                <span class="feedback-label">Your Feedback:</span>
                <div class="feedback-value" style="margin-top: 8px; line-height: 1.5;">
                    <?php echo nl2br(htmlspecialchars($_POST['message'])); ?>
                </div>
            </div>
            
            <a href="index.html" class="return-link">← Return to feedback form</a>
        </div>
    </div>
</body>
</html>