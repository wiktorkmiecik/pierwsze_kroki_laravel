<?php $__env->startSection('content'); ?>
<div class="col-xs-12 videos-header card">
    <h2>Zdobywaj klientów i zwiększaj zyski z Facebook Ads.</h2>
</div>

<div class="row">

    <!-- left col. -->
    <div class="col-xs-12 col-md-9 single-video-left">

        <div class="card">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php echo e($page->url); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        
            <div class="single-video-content">
                <div class="categories">
                    <h4>Kategorie</h4>
                    <span>
                    <a href="">Webdesign</a>,&nbsp;
                    <a href="">PHP</a>,&nbsp;
                    <a href="">Angular</a>
                    </span>
                </div>
                <h4>Pełny opis</h4>
                <p>Maecenas dictum eu purus vitae ornare. In finibus pharetra est in ultricies. Nunc elit metus, hendrerit ut massa et, porttitor vestibulum elit. Sed non enim feugiat, facilisis enim quis, tempus nibh. Integer sit amet lorem sit amet metus suscipit molestie ut ut nibh? Vestibulum in odio convallis, pulvinar libero non, mollis dolor. Integer sit amet lorem sit amet metus suscipit molestie ut ut nibh? teger sit ameestibulum in odio convallis, pulvinar libero non, mollis dolor.</p>
                <span class="upper-label">Dodał</span>
                <span class="video-author">Strefa Kursów</span>
                <div class="edit-button">
                    <button class="btn btn-primary btn-lg">
                        Edytuj Video
                    </button>
                </div>
            </div>
            
        </div>
        
    </div>

    <!-- right col. -->
    <div class="col-xs-12 col-md-3 single-video-right">
        
        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4>Udostępnij</h4>
                <div class="social-icons">
                    <i class="fa fa-facebook-official"></i>
                    <i class="fa fa-twitter-square"></i>
                    <i class="fa fa-google-plus-square"></i> 
                    <i class="fa fa-youtube-square"></i>
                </div>
            </div>
        </div>

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box categories-box">
                <h4>Popularne kategorie</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5>Webdesign</h5>
                        <span>234 filmów</span>
                    </li>
                    <li class="list-group-item">
                        <h5>JavaScript</h5>
                        <span>87 filmów</span>
                    </li>
                    <li class="list-group-item">
                        <h5>Laravel</h5>
                        <span>56 filmów</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4>Statystyki</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">1342</span>Filmów
                    </li>
                    <li class="list-group-item">
                        <span class="badge">18</span>Kategorii
                    </li>
                    <li class="list-group-item">
                        <span class="badge">7800</span>Użytkowników
                    </li>
                    <li class="list-group-item">
                        <span class="badge">832</span>Komentarzy
                    </li>
                </ul>                            
            </div>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>