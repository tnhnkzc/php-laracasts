    <?php require('partials/header.php'); ?>


    <?php require('partials/nav.php'); ?>

    <?php require('partials/banner.php'); ?>

    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
          <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">Go back</a>
          </p>
          <p><?= $note['body'] ?></p>
        </div>
        <!-- /End replace -->
      </div>
    </main>
    <?php require('partials/footer.php'); ?>