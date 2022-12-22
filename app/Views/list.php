<?= $this->extend("layout/template"); ?>
<?= $this->section("content"); ?>

<!-- details page -->
<section class="pt-5">
   <div class="container shadow section-sm rounded">
      <div class="columns is-multiline">
         <!-- sidebar -->
         <div class="column is-3-desktop is-12-tablet">
            <ul class="sidenav">
               <li title="Basic Startup" class="sidelist parent active">
                  <a href="list">Basic Startup</a>
                  <ul>
                     <li class="sidelist">
                        <a href="single">Elements</a>
                     <li class="sidelist">
                        <a href="single">Installation</a>
                     <li class="sidelist">
                        <a href="single">Configuration</a>
                     <li class="sidelist">
                        <a href="single">Customization</a>
                     <li class="sidelist">
                        <a href="single">Requerments</a>
                     </li>
                  </ul>
               </li>
               <li class="sidelist">
                  <a href="list">Account Bill</a>
                  <ul>
                     <li class="sidelist">
                        <a href="single">Linux</a>
                     <li class="sidelist">
                        <a href="single">Mac OS</a>
                     <li class="sidelist">
                        <a href="single">Routing</a>
                     <li class="sidelist">
                        <a href="single">Ubuntu</a>
                     <li class="sidelist">
                        <a href="single">Windows</a>
                  </ul>
               </li>
               <li class="sidelist">
                  <a href="list">Our Features</a>
                  <ul>
                     <li class="sidelist">
                        <a href="single">Linux</a>
                     <li class="sidelist">
                        <a href="single">Mac OS</a>
                     <li class="sidelist">
                        <a href="single">Routing</a>
                     <li class="sidelist">
                        <a href="single">Ubuntu</a>
                     <li class="sidelist">
                        <a href="single">Windows</a>
                  </ul>
               </li>
               <li class="sidelist">
                  <a href="list">Theme Facility</a>
                  <ul>
                     <li class="sidelist">
                        <a href="single">Linux</a>
                     <li class="sidelist">
                        <a href="single">Mac OS</a>
                     <li class="sidelist">
                        <a href="single">Routing</a>
                     <li class="sidelist">
                        <a href="single">Ubuntu</a>
                     <li class="sidelist">
                        <a href="single">Windows</a>
                  </ul>
               </li>
            </ul>
         </div>

         <!-- body -->
         <div class="column is-8-desktop is-12-tablet">
            <div class="px-4">
               <h2 class="mb-4 has-text-weight-medium">Basic Startup</h2> <!-- main content -->
               <div class="content">
                  <p><img src="images/getting-started.jpg" width="500px" alt="image"></p>
                  <p>Most of the documentation site are looks identical. Thats why we take an initiative to make
                     something
                     different and bring some new concept with minimal design. Meet Godocs , a documentation and
                     knowledge
                     based website template. It can be used for software, API, frameworks, plugins and templates online
                     documentation website building.</p>
               </div>
               <!-- navigation -->
               <nav class="pagination">
                  <a class="nav nav-prev" href="https://examplesite.com/"><i class="ti-arrow-left mr-2"></i>
                     <span class="d-none d-md-block">Hugo documentation theme</span></a>
                  <a class="nav nav-next" href="https://examplesite.com/basic-startup/requirments/"> <span
                        class="d-none d-md-block">Requirments</span><i class="ti-arrow-right ml-2"></i></a>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /details page -->

<?= $this->endSection(); ?>