<?= $this->extend("layout/template"); ?>
<?= $this->section("content"); ?>


<section class="section">
   <div class="container">
      <div class="columns is-desktop is-justify-content-center">
         <div class="column is-8-desktop">
            <div class="p-6 shadow rounded content">
               <h2 class="section-title">Got Any Questions</h2>
               <form method="POST" action="#">
                  <div class="columns is-multiline">
                     <div class="form-group column is-6-desktop">
                        <label for="fname">First Name</label>
                        <input type="text" class="input" id="fname" name="fname" placeholder="Your First Name"
                           required>
                     </div>
                     <div class="form-group column is-6-desktop">
                        <label for="lname">Last Name</label>
                        <input type="text" class="input" id="lname" name="lname" placeholder="Your Last Name">
                     </div>
                     <div class="form-group column is-12">
                        <label for="email">Email</label>
                        <input type="email" class="input" id="email" name="email" placeholder="Your Email Address"
                           required>
                     </div>
                     <div class="form-group column is-12">
                        <label for="reason">Reason of Contact</label>
                        <select id="reason" class="input custom-select" name="reason" required>
                           <option selected disabled>Choose Your Reason</option>
                           <option value="business">Business</option>
                           <option value="ticket">Ticket</option>
                           <option value="project">Project</option>
                        </select>
                     </div>
                     <div class="form-group column is-12">
                        <label for="message">Start Writing From Here</label>
                        <textarea name="message" id="message" class="input"
                           placeholder="Your Text here ..."></textarea>
                     </div>
                     <div class="column is-12">
                        <button type="submit" class="btn btn-primary">Send</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>


<?= $this->endSection(); ?>