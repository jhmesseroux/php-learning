<main class="p-6">
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul class="list-disc">
      <?php foreach($expenses as $expense ) : ?>
        <a href="/expense?id=<?=$expense['id']?>">
          <li class="text-blue-400 hover:underline hover:text-blue-500 duration-400 tansitions-colors"> <?= $expense['description']?></li>
        </a>
      <?php endforeach ?>

    </ul>
</div>
</main>