<!-- This page was quickly generated with Trae AI Code editor -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lessons Index</title>
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
        }

        .container {
            width: 100%;
            max-width: 800px;
            background: white;
            border-radius: 8px;
            box-shadow: var(--card-shadow);
            padding: 2rem;
        }

        h1 {
            color: var(--secondary-color);
            text-align: center;
            margin-bottom: 2rem;
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

        .lesson-list {
            list-style: none;
            width: 100%;
        }

        .lesson-item {
            margin-bottom: 1rem;
            transition: transform 0.2s ease;
        }

        .lesson-item:hover {
            transform: translateX(5px);
        }

        .lesson-link {
            display: block;
            padding: 0.8rem 1.2rem;
            background: white;
            border-left: 4px solid var(--primary-color);
            text-decoration: none;
            color: var(--secondary-color);
            font-weight: 500;
            border-radius: 4px;
            transition: all 0.3s ease;
            box-shadow: var(--card-shadow);
        }

        .lesson-link:hover {
            background: var(--primary-color);
            color: white;
            border-left-color: var(--secondary-color);
        }

        .file-icon {
            margin-right: 0.8rem;
            color: var(--accent-color);
        }

        footer {
            margin-top: 2rem;
            text-align: center;
            color: #777;
            font-size: 0.9rem;
        }

        footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: var(--accent-color);
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .container {
                padding: 1.5rem;
            }

            h1 {
                font-size: 1.8rem;
            }

            .lesson-link {
                padding: 0.6rem 1rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <h1>PHP Learning Chapters</h1>

        <div class="lesson-list">
            <?php
            function scanDirectory($dir, $basePath = '') {
                $items = scandir($dir);
                $results = [];

                foreach ($items as $item) {
                    if ($item != '.' && $item != '..') {
                        $fullPath = $dir . $item;
                        if (is_dir($fullPath)) {
                            $subResults = scanDirectory($fullPath . '/', $basePath . $item . '/');
                            $results = array_merge($results, $subResults);
                        } else if (pathinfo($item, PATHINFO_EXTENSION) == 'php') {
                            $results[] = [
                                'path' => $basePath . $item,
                                'fullPath' => $fullPath
                            ];
                        }
                    }
                }
                return $results;
            }

            $directory = __DIR__ . "/Chapters/";
            $files = scanDirectory($directory);

            if (empty($files)) {
                echo "<p style='text-align:center; color:#777;'>No PHP files found in the directory.</p>";
            } else {
                foreach ($files as $file) {
                    $displayPath = str_replace('/', ' / ', $file['path']);
                    $formattedName = ucwords(str_replace(['-', '_'], ' ', $displayPath));
                    
                    echo "<div class='lesson-item'>
                            <a href='Chapters/{$file['path']}' class='lesson-link' target='_blank'>
                                <i class='fas fa-file-code file-icon'></i>
                                {$formattedName}
                            </a>
                          </div>";
                }
            }
            ?>
        </div>
    </div>

    <footer>
        PHP Learning Journey by
        <a href="https://github.com/rahulpandit2" target="_blank" rel="noopener noreferrer" style="color: var(--primary-color); text-decoration: none;">
            Rahul Pandit
        </a>
        &copy; <?php echo date('Y'); ?>
    </footer>
</body>

</html>