<?= $this->extend('layout/master'); ?>
<?= $this->section("main");?>
<div class="container-fluid m-0 p-0">
    <?php
    $imgProperties = [
        'src' => 'public/assets/img/2.jpg',
        'alt' => 'H4ckNet',
        'class' => 'p-0 m-0 img-fluid w-100',
        'title' => 'My H4ckerz web',
        //'rel'=>'lightbox'
    ];
    echo img($imgProperties);
    ?>
</div>
<?= $this->endSection(); ?>