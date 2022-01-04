<?php
require_once('config/main.php');
include_once('inc/header.php');
?>

<main id="main-holder">

    <?php require_once('inc/search.php') ?>

    <section id="content">

        <?php
        if (!empty($_GET)) {

            if (isset($folder, $target)) {

                switch ($folder) {
                    case 'page':
                        if (!include_once("content/pages/$target.php"))
                            notFound();
                        break;
                    case 'article':
                        if (!include_once("content/articles/$target.html"))
                            notFound();
                        break;
                    default:
                        notFound();
                }
            }
            
        } else {
            require_once("content/pages/home.php");
        }
        ?>

    </section>

    <?php require_once('inc/sidebar.php') ?>
    <?php require_once('inc/advertisement-footer.php'); ?>
</main>

<?php
require_once('inc/footer.php');
?>