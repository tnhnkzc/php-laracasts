 <?php view('partials/header.php'); ?>
 <?php view('partials/nav.php'); ?>
 <?php view('partials/banner.php'); ?>

 <main>
   <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
     <!-- Replace with your content -->
     <div class="px-4 py-6 sm:px-0">
       <ul class="p-4">
         <?php foreach ($notes as $note) : ?>
           <li class="list-disc">
             <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
               <?= htmlspecialchars($note['body']) ?>
             </a>
           </li>
         <?php endforeach; ?>
       </ul>
       <p class="pt-6">
         <a href="/notes/create" class="text-blue-500 hover:underline">Create a note</a>
       </p>
     </div>
     <!-- /End replace -->
   </div>
 </main>
 <?php view('partials/footer.php'); ?>