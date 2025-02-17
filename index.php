<!DOCTYPE html>
<?php require_once("config.php") ?>

<!--public function -->
<?php require_once( ROOT_PATH .'/includes/public_functions.php')?>
    <?php $posts = getPublishedPosts(); ?>

<?php require_once(ROOT_PATH .'/includes/head_section.php')?>
    <title>Life Blog SIR | Home</title> <!--judul paling atas pada saat buka blog nya-->
</head>
<body>
    <div class="container"><!-- bungkus keseluruhan tampilan blog class dengan nama container-->
    
   
        
    <!-- NAVBAR -->
    <?php include(ROOT_PATH .'/includes/navbar.php')?>

    <!-- BANNER -->
        
    <?php include(ROOT_PATH .'/includes/banner.php')?>

    

    <!-- TAMPILAN KONTEN/ PAGE CONTENT -->
    <div class="content"> <!--buat class dengan nama 'content' -->
        <h2 class = "content-title">Recent Article</h2> <!-- buat class buat artikel yang lain nya -->
        <hr>

        <?php foreach ($posts as $post): ?>
            <div class="post" style="margin-left: 0px;">
                <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
                <!-- IF STATETMENT -->
                <?php if (isset($post['topic']['name'])): ?>
                    <a 
                        href = "<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id']?>"
                        class="btn category">
                        <?php echo $post['topic']['name'] ?>
                    </a>
                <?php endif ?>

                <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                    <div class="post_info">
                        <h3><?php echo $post['title'] ?></h3>
                        <div class="info">
                            <span><?php echo date("F j, Y", strtotime($post["created_at"])); ?></span>
                            <span class="read_more">Read more...</span>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach?>

    

    <!-- FOOTER -->
    <?php include( ROOT_PATH .'/includes/footer.php')?>