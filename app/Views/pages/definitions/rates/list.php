<?=$this->extend('layouts/main')?>

<?=$this->section('styles')?>
<!-- ./add "custom" styles -->
<?=$this->endSection()?>

<?=$this->section('content')?>
rates
<?=$this->endSection()?>

<?=$this->section('scripts.vendor')?>
<!-- ./add "vendor" scripts -->
<?=$this->endSection()?>

<?=$this->section('scripts.page')?>
	<?=script_tag('public/assets/js/cs/checkall.js')?>
	<?=script_tag('public/assets/js/pages/customers.list.js')?>
<?=$this->endSection()?>
