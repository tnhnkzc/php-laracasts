 <?php view('partials/header.php'); ?>
 <?php view('partials/nav.php'); ?>
 <?php view('partials/banner.php'); ?>

 <main>
   <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
     <!-- Replace with your content -->
     <div class="px-4 py-6 sm:px-0">
       <div class="mt-5 md:col-span-2 md:mt-0">
         <form method="POST">
           <div class="shadow sm:overflow-hidden sm:rounded-md">
             <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
               <div>
                 <label for="about" class="block text-sm font-medium text-gray-700">Body</label>
                 <div class="mt-1">
                   <textarea id="body" name="body" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Your Note" required><?= $_POST['body'] ?? '' ?></textarea>
                   <?php if (isset($errors['body'])) : ?>
                     <p class="text-red-500 text-xs mt-2 "><?= $errors['body']; ?></p>
                   <?php endif; ?>
                 </div>
               </div>

               <div>
                 <div class="mt-1 flex items-center">
                   <button type="submit" class="ml-5 rounded-md border border-gray-300 bg-white py-2 px-3 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                 </div>
               </div>

             </div>

             <!-- /End replace -->
           </div>
 </main>
 <?php view('partials/footer.php'); ?>