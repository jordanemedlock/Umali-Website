<?php
include_once 'settings.php';

$tzGrouptImg = img("TZ_group_2013.png", cls("home-image"));

$blogLink = linkTo("Planning Our 2014 Tanzania Trainings", "blog");
$blogP = tag('p', array(), "We are so excited to be planning for our upcoming trip to Tanzania.  This year, we are raising funds for the trainings and workshops that UAFT will be providing about Autism Spectrum Disorders in Tanzania.  A very experienced team of professionals: a physician, two educators, and a speech-language pathologist are collaborating with professionals in Tanzania to develop resources for children with autism.");
$blogBtn = linkTo("Read More", "blog", cls("btn-primary"), true);
$latestBlog = row(spanDiv(12, h(2, $blogLink, cls("latest-blog")).$blogP.$blogBtn));

?>



<!-- First Row -->
<div class="hero-section hero-unit">
    <!--<img src="Dodoma-Sep-27.jpg" class="pull-right" width="400"/>-->

    <p><strong>Children with Autism Spectrum Disorder in Tanzania are largely undiagnosed.</strong> Many of their gifts remain hidden while the challenges can be severe. Our Mission at Umali Autism Foundation Tanzania is to bring these children and their families Special Education and Health Care Services which have been unavailable.</p>
</div>

<!-- Second Row -->
<div class="row-fluid second-row-section no-space">

    <article class="span8">
        <?php echo $tzGrouptImg; ?>
        <p class="caption">
            2013 trip to Tanzania (from left to right):  Grace Lyimo, Mathias Bali, Kerri Elliot, Brenda Shuma, Jillian Swinford, & Anthony Shuma
        </p>
        <?php echo $latestBlog; ?>
    </article>
    <article class="span4 goals">
        <p><strong>Umali Autism Foundation Tanzania (UAFT)</strong> is a group of American and Tanzanian professionals who are working together towards these goals in four ways:</p>
        <ol>
            <li><strong>To develop a network</strong> in Tanzania of future educators and care providers for children with ASD.</li>
            <li>To provide them with <strong>training.</strong></li>
            <li>To <strong>raise funds</strong> to support and house that network.</li>
            <li>To create <strong>liaison</strong> between Tanzanian and New Mexican Universities.</li>
        </ol>
    </article>
</div>
<!-- 

<div class="row-fluid second-row-section">
    <section class="span12 latest-blog">
        <h2><a href="#blog">Planning Our 2014 Tanzania Trainings</a></h2>
        <p>We are so excited to be planning for our upcoming trip to Tanzania.  This year, we are raising funds for the trainings and workshops that UAFT will be providing about Autism Spectrum Disorders in Tanzania.  A very experienced team of professionals: a physician, two educators, and a speech-language pathologist are collaborating with professionals in Tanzania to develop resources for children with autism.</p>
        <a href="#blog" class="btn btn-primary">Read More</a>
    </section>
</div>
 -->
