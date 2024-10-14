<style>
    .menu {
    background-color: rgb(70, 245, 1);
    height: 30px;
    padding: 10px
}

.menu a {
    background-color: rgb(186, 253, 0);
    text-decoration: none;
    color: white;
    padding: 5px;
    font-size: 20px;
}
</style>

<div class="menu">
    <a href="<?= base_url(); ?>admin">Beranda</a>
    <a href="<?= base_url(); ?>pendaftaran">Pendaftaran</a>
    <a href="<?= base_url(); ?>data_event">Data Event</a>
    <a href="<?= base_url(); ?>login/logout">logout</a>
</div>