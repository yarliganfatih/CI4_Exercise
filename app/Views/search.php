<?= $this->extend("layout/template"); ?>
<?= $this->section("content"); ?>


<section class="section">
   <div class="container">
      <div class="columns is-justify-content-center">
         <div class="column is-8-desktop">
            <h2 class="mb-5 has-text-weight-medium">Search result for <span class="text-primary">install</span></h2>
            <div class="p-6 shadow rounded">
               <div class="has-text-centered"><img class="img-fluid" src="images/no-search-found.png">
                  <h3>No Search Found</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



<?= $this->endSection(); ?>