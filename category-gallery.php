<?php get_header(); ?>
<section class="title-section">
        <p class="welcome-text">Welcome to</p>
        <h1>Gallery</h1>
        <p class="sub-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis 
        dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
        pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, 
        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum 
        felis eu pede </p>
    </section>

<section class="gallery"> 
    <?php $gallery_query = new WP_Query(array('category_name' => 'gallery')); ?>
    <?php while($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
   
    <div class="large-4 small-12 columns">
        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('full', array(
            'class' => 'hvr-grow'
        )); ?>
    </div>

<?php endwhile; ?>
</section>   
   <?php get_footer(); ?>