<div class="header-large-title">
    <h1 class="title">Topik Khusus</h1>
</div>
<div class="card-body text-left">
    <?php foreach ($fokus as $key => $data) {; ?>
        <a href="<?= base_url() ?>/tag/<?= str_replace(" ","-",$data['slug'])?>" class="btn btn-outline-primary mr-1 mb-1 font-weight-bold text-uppercase">#<?=$data['slug']?></a>
    <?php } ?>
</div>