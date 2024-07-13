<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>

<div class="flex min-h-full max-w-4xl mx-auto flex-col px-6 py-12 lg:px-8">
<ul role="list" class="divide-y divide-gray-100 mt-12">
	
<?php foreach($bossList as $boss) : ?>
		<li class="flex justify-between gap-x-6 py-5 px-5 rounded <?= $boss['user_id'] != null ? 'bg-indigo-50' : '' ?>">
			<div class="flex min-w-0 gap-x-6 w-96">
				<img class="h-12 w-16 mt-1 flex-none rounded-lg bg-gray-50 brightness-125" src="<?= strlen($boss['image']) === 0 ? '/images/logo.jpg' : $boss['image'] ?>
					" alt="">
				<div class="min-w-0 flex-auto">
				<p class="text-sm font-semibold leading-6 text-gray-900"><?= $boss['name'] ?></p>
				<p class="mt-1 text-[0.65rem] leading-4 text-slate-300"><?= $boss['description'] ?></p>
				</div>
			</div>
			<div class="text-right shrink-0 sm:flex sm:flex-col sm:items-end  w-80">
				<p class="text-sm leading-6 text-gray-900"><?= $boss['location'] ?></p>
				<p class="mt-1 text-xs leading-5 text-gray-500"><?= $boss['region'] ?></p>
			</div>
			<div class="w-24 content-center text-center">
				<form method="post">
					<label class="text-[0.65rem] text-slate-300" for="<?= $boss['boss_id'] ?>">Defeated?&emsp;</label>	
					<input class="rounded" type="checkbox" <?= $boss['user_id'] != null ? 'checked' : '' ?> name="<?= $boss['boss_id'] ?>" id="<?= $boss['boss_id'] ?>">
				</form>
			</div>
		</li>
	<?php endforeach; ?>
</ul>
</div>


<?php require base_path('views/partials/foot.php'); ?>