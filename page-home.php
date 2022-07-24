<?php get_header(); ?>

<main class="container">
  <section id="splash">
    <span class="code green">Hi, my name is</span>
    <h1 class="">Mitchell.</h1>

    <h2 class="code green h3">I like to build <span id="name-switch">Websites</span>.</h2>
  </section>

  <div class="separator"><span>&lt;</span><span>&gt;</span></div>

  <section id="about-me">
    <h3 class="h1 green opaque code">WHO AM I?</h3>

    <p class="bio">A reliable, committed and enthusiastic Web Developer based in York, North Yorkshire. My portfolio consists of a fleet of client and occupation based Websites and Web Apps, if there's something you or your company needs, chances are I can deliver it.</p>
    <p class="bio">I love to talk about tech, so if you're a local developer looking to share ideas and build something cool together then <a href="#contact">hit me up.</a></p>
  </section>

  <div class="separator"><span>&lt;</span><span>&gt;</span></div>
  

  <section id="skills">
    <h3 class="h1 green opaque code">WHAT I CAN OFFER</h3>

    <h3 class="h4 area-title">Languages:</h3>
    <ul class="skills">
      <li>HTML/CSS<span class="progress w-100"></span></li>
      <li>JavaScript / ES6<span class="progress w-100"></span></li>
      <li>PHP<span class="progress w-100"></span></li>
      <li>Python 3<span class="progress w-80"></span></li>
      <li>C#<span class="progress w-60"></span></li>
    </ul>

    <h3 class="h4 area-title">Frameworks:</h3>
    <ul class="skills">
      <li>Wordpress<span class="progress w-100"></span></li>
      <li>BigCommerce<span class="progress w-100"></span></li>
      <li>ReactJS<span class="progress w-100"></span></li>
      <li>Laravel 7+<span class="progress w-90"></span></li>
      <li>VueJS<span class="progress w-60"></span></li>
      <li>Magento<span class="progress w-40"></span></li>
    </ul>

    <h3 class="h4 area-title">Skills:</h3>
    <ul class="skills">
      <li>Site Speed Audits<span class="progress w-100"></span></li>
      <li>Time Management<span class="progress w-100"></span></li>
      <li>Project Management<span class="progress w-100"></span></li>
      <li>UX/UI Design<span class="progress w-80"></span></li>
      <li>DevOps<span class="progress w-80"></span></li>
      <li>Animation<span class="progress w-80"></span></li>
    </ul>
  </section>

  <div class="separator"><span>&lt;!</span><span>&gt;</span></div>

  <section id="contact-me">
    <h3 class="h1 green opaque code">GET IN TOUCH</h3>
    <p>Feel free to shoot me a message and we can start a discussion.</p>

    <?php echo do_shortcode('[contact-form-7 id="6" title="Contact"]') ?>
  </section>

</main>

<?php get_footer(); ?>