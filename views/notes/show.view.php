 <?php view('partials/header.php'); ?>
 <?php view('partials/nav.php'); ?>
 <?php view('partials/banner.php'); ?>


 <main>
   <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
     <!-- Replace with your content -->
     <div class="px-4 py-6 sm:px-0">
       <p class="mb-6">
         <a href="/notes" class="text-blue-500 underline">Go back</a>
       </p>
       <p><?= htmlspecialchars($note['body']) ?></p>
     </div>
     <!-- /End replace -->
   </div>
 </main>
 <?php view('partials/footer.php'); ?>