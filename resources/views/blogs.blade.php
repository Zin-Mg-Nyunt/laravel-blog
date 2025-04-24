<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <div class="blog-list">
        @foreach ($blogs as $blog) 
            <div class="blog-card">
                <h2>
                    <a href="/blogs/<?= $blog->slug?>">
                        {{$blog->title}}
                    </a>
                </h2>
                <p>
                    posted at - {{$blog->date}}
                </p>
                <p>
                    {{$blog->intro}}
                </p>
            </div>
        @endforeach
    </div>
</body>
</html>