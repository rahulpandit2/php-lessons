<!-- This page was quickly generated with Trae AI Code editor -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Learning Journey</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --text-color: #333;
            --light-bg: #f9f9f9;
            --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--light-bg);
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            text-align: center;
        }

        .container {
            max-width: 800px;
            background: white;
            border-radius: 8px;
            box-shadow: var(--card-shadow);
            padding: 2rem;
            margin: 0 auto;
        }

        h1 {
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            font-size: 2.2rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }

        p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            color: #555;
        }

        .cta-button {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .cta-button:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        footer {
            margin-top: 2rem;
            color: #777;
            font-size: 0.9rem;
        }

        footer a {
            color: var(--primary-color);
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .container {
                padding: 1.5rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My PHP Learning Journey</h1>
        <p>This repository documents my progress through PHP development, from fundamentals to advanced concepts.</p>
        <p>Each chapter contains practical examples and projects that showcase my growing skills.</p>
        
        <a href="../index.php" class="cta-button">View All Chapters</a>
    </div>

    <footer>
        Created by <a href="https://github.com/rahulpandit2" target="_blank" rel="noopener noreferrer">Rahul Pandit</a> &copy; <?php echo date('Y'); ?>
    </footer>
</body>
</html>