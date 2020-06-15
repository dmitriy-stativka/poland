<?php
/*
Template Name: Page single utp
*/

get_header();?>
<div class="page-single-utp">
    <div class="flex_container">

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis, incidunt ullam impedit neque ad similique. Pariatur dolores, accusantium hic sint fugiat aut. Vitae rem perspiciatis sapiente? Tempore, placeat est.

        <?php
            $content_no_filter = get_the_content(); // содержимое поста (текущего в цикле) из базы
            $content_filter_applied = apply_filters( 'the_content', $content_no_filter ); // применяем фильтр the_content
            echo str_replace( ']]>', ']]>', $content_filter_applied ); // делаем небольшую замену и выводим результат
        ?>
    </div>
</div>

<?php get_footer();?>