<?php $pager->setSurroundCount(2) ?>

<nav>
	<ul class="pagination">

        <?php if ($pager->hasPreviousPage()) : ?>
            <li class="page-item">
                <a href="<?=$pager->getFirst()?>" class="page-link">
                    <i data-acorn-icon="prev"></i>
                </a>
            </li>
            <li class="page-item">
                <a href="<?=$pager->getPreviousPage()?>" class="page-link">
                    <i data-acorn-icon="chevron-left"></i>
                </a>
            </li>
        <?php endif; ?>

		<?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?=$link['active'] ? 'active' : null?>">
                <a href="<?=$link['uri']?>" class="page-link shadow">
                    <?=$link['title']?>
                </a>
            </li>
        <?php endforeach; ?>

        <?php if ($pager->hasNextPage()) : ?>
            <li class="page-item">
                <a href="<?=$pager->getNextPage()?>" class="page-link">
                    <i data-acorn-icon="chevron-right"></i>
                </a>
            </li>
            <li class="page-item">
                <a href="<?=$pager->getLast()?>" class="page-link">
                    <i data-acorn-icon="next"></i>
                </a>
            </li>
        <?php endif; ?>

	</ul>
</nav>
