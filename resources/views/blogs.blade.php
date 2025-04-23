<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    {{-- <div class="blog-list">
        <div class="blog-card">
            <h2><a href="/blogs/first-blog">First Blog</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur harum esse, dolorum incidunt mollitia nisi obcaecati! Obcaecati placeat nostrum facilis dolor magni, dolores repudiandae, nam, tempore amet modi ex veniam sed voluptatibus incidunt aut sapiente natus provident magnam mollitia similique assumenda nisi voluptates libero! Pariatur ea eum culpa, labore doloremque, quis iure laborum ipsam est eaque molestias nesciunt veritatis ducimus, sunt voluptatum sapiente maxime tenetur accusantium doloribus amet obcaecati alias minus! Consectetur dolorem, minus similique explicabo placeat cumque corrupti et. Velit exercitationem quas deleniti ad harum alias saepe a corrupti odit facere? Magni velit consectetur quia dolor quo, ad doloremque.</p>
        </div>
        <div class="blog-card">
            <h2><a href="/blogs/second-blog">Second Blog</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur harum esse, dolorum incidunt mollitia nisi obcaecati! Obcaecati placeat nostrum facilis dolor magni, dolores repudiandae, nam, tempore amet modi ex veniam sed voluptatibus incidunt aut sapiente natus provident magnam mollitia similique assumenda nisi voluptates libero! Pariatur ea eum culpa, labore doloremque, quis iure laborum ipsam est eaque molestias nesciunt veritatis ducimus, sunt voluptatum sapiente maxime tenetur accusantium doloribus amet obcaecati alias minus! Consectetur dolorem, minus similique explicabo placeat cumque corrupti et. Velit exercitationem quas deleniti ad harum alias saepe a corrupti odit facere? Magni velit consectetur quia dolor quo, ad doloremque.</p>
        </div>
        <div class="blog-card">
            <h2><a href="/blogs/third-blog">Third Blog</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur harum esse, dolorum incidunt mollitia nisi obcaecati! Obcaecati placeat nostrum facilis dolor magni, dolores repudiandae, nam, tempore amet modi ex veniam sed voluptatibus incidunt aut sapiente natus provident magnam mollitia similique assumenda nisi voluptates libero! Pariatur ea eum culpa, labore doloremque, quis iure laborum ipsam est eaque molestias nesciunt veritatis ducimus, sunt voluptatum sapiente maxime tenetur accusantium doloribus amet obcaecati alias minus! Consectetur dolorem, minus similique explicabo placeat cumque corrupti et. Velit exercitationem quas deleniti ad harum alias saepe a corrupti odit facere? Magni velit consectetur quia dolor quo, ad doloremque.</p>
        </div>
    </div> --}}
    <?php foreach ($blogs as $blog) :?>
    <?= $blog;?>
    <?php endforeach ?>
</body>
</html>