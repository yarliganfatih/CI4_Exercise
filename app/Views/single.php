<?= $this->extend("layout/template"); ?>
<?= $this->section("content"); ?>

<section class="pt-6">
   <div class="container shadow section-sm rounded">
      <div class="columns is-multiline">
         <!-- sidebar -->
         <div class="column is-3-desktop is-12-tablet">
            <ul class="sidenav">
               <li title="Basic Startup" class="sidelist parent">
                  <a href="list">Basic Startup</a>
                  <ul>
                     <li class="sidelist parent active">
                        <a href="single">Elements</a>
                     <li class="sidelist">
                        <a href="single">Installation</a>
                     <li class="sidelist">
                        <a href="single">Configuration</a>
                     <li class="sidelist">
                        <a href="single">Customization</a>
                     <li class="sidelist">
                        <a href="single">Requirements</a>
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

         <div class="column is-8-desktop is-12-tablet">
            <div class="px-4">
               <h2 class="mb-4 has-text-weight-medium">Elements</h2>
               <div class="content">

                  <!-- heading -->
                  <p>Here is example of hedings. You can use this heading by following markdownify rules. For example:
                     use
                     <code>#</code> for heading 1 and use <code>######</code> for heading 6.</p>
                  <h1 id="heading-1">Heading 1</h1>
                  <h2 id="heading-2">Heading 2</h2>
                  <h3 id="heading-3">Heading 3</h3>
                  <h4 id="heading-4">Heading 4</h4>
                  <h5 id="heading-5">Heading 5</h5>
                  <h6 id="heading-6">Heading 6</h6>

                  <hr>

                  <!-- emphasis -->
                  <h5 id="emphasis">Emphasis</h5>
                  <p>Emphasis, aka italics, with <em>asterisks</em> or <em>underscores</em>.</p>
                  <p>Strong emphasis, aka bold, with <strong>asterisks</strong> or <strong>underscores</strong>.</p>
                  <p>Combined emphasis with <strong>asterisks and <em>underscores</em></strong>.</p>
                  <p>Strikethrough uses two tildes. <del>Scratch this.</del></p>
                  <hr>
                  <h5 id="link">Link</h5>
                  <p><a href="https://www.google.com">I&rsquo;m an inline-style link</a></p>
                  <p><a href="https://www.google.com" title="Google's Homepage">I&rsquo;m an inline-style link with
                        title</a>
                  </p>
                  <p><a href="https://www.themefisher.com">I&rsquo;m a reference-style link</a></p>
                  <p><a href="../blob/master/LICENSE">I&rsquo;m a relative reference to a repository file</a></p>
                  <p><a href="https://gethugothemes.com">You can use numbers for reference-style link definitions</a>
                  </p>
                  <p>Or leave it empty and use the <a href="https://www.getjekyllthemes.com">link text itself</a>.</p>
                  <p>URLs and URLs in angle brackets will automatically get turned into links.
                     <a href="http://www.example.com">http://www.example.com</a> or <a
                        href="http://www.example.com">http://www.example.com</a> and sometimes
                     example.com (but not on Github, for example).</p>
                  <p>Some text to show that the reference links can follow later.</p>

                  <hr>

                  <!-- paragraph -->
                  <h5 id="paragraph">Paragraph</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nihil enim maxime corporis cumque
                     totam
                     aliquid nam sint inventore optio modi neque laborum officiis necessitatibus, facilis placeat
                     pariatur!
                     Voluptatem, sed harum pariatur adipisci voluptates voluptatum cumque, porro sint minima similique
                     magni
                     perferendis fuga! Optio vel ipsum excepturi tempore reiciendis id quidem? Vel in, doloribus debitis
                     nesciunt fugit sequi magnam accusantium modi neque quis, vitae velit, pariatur harum autem a! Velit
                     impedit atque maiores animi possimus asperiores natus repellendus excepturi sint architecto
                     eligendi non,
                     omnis nihil. Facilis, doloremque illum. Fugit optio laborum minus debitis natus illo perspiciatis
                     corporis
                     voluptatum rerum laboriosam.</p>

                  <hr>

                  <!-- ordered list -->
                  <h5 id="ordered-list">Ordered List</h5>
                  <ol>
                     <li>List item</li>
                     <li>List item</li>
                     <li>List item</li>
                     <li>List item</li>
                     <li>List item</li>
                  </ol>

                  <hr>

                  <!-- unordered list -->
                  <h5 id="unordered-list">Unordered List</h5>
                  <ul>
                     <li>List item</li>
                     <li>List item</li>
                     <li>List item</li>
                     <li>List item</li>
                     <li>List item</li>
                  </ul>

                  <hr>

                  <!-- notices -->
                  <h4 id="notice">Notice</h4>
                  <div class="notices note">
                     <p>This is a simple note.</p>
                  </div>

                  <div class="notices tip">
                     <p>This is a simple tip.</p>
                  </div>

                  <div class="notices info">
                     <p>This is a simple info.</p>
                  </div>

                  <hr>
                  
                  <!-- tabs -->
                  <h4 class="mb-3" id="tab">Tab</h4>
                  <div class="code-tabs">
                     <ul class="field has-addons nav-tabs"></ul>
                     
                     <div class="tab-content">
                        <div class="tab-pane" title="first">
                           This is first tab
                        </div>
                        <div class="tab-pane" title="second">
                           this is second tab
                        </div>
                        <div class="tab-pane" title="third">
                           this is third tab
                        </div>
                     </div>
                  </div>

                  <hr>

                  <!-- collapse -->
                  <h4 class="mb-3" id="collapse">Collapse</h4>
                  <div class="border border-default collapse-wrapper"> <a class="is-flex is-align-items-center p-2 collapse-head" data-toggle="collapse" href="#collapse-1" role="button">collapse 1 <i class="ti-plus ml-auto no-pointer"></i></a>
                     <div class="collapse" id="collapse-1">
                        <div class="p-2">This is a simple collapse</div>
                     </div>
                  </div>
                  <div class="border border-default collapse-wrapper"> <a class="is-flex is-align-items-center p-2 collapse-head" data-toggle="collapse" href="#collapse-2" role="button">collapse 2 <i class="ti-plus ml-auto no-pointer"></i></a>
                     <div class="collapse" id="collapse-2">
                        <div class="p-2">This is a simple collapse</div>
                     </div>
                  </div>
                  <div class="border border-default collapse-wrapper"> <a class="is-flex is-align-items-center p-2 collapse-head" data-toggle="collapse" href="#collapse-3" role="button">collapse 3 <i class="ti-plus ml-auto no-pointer"></i></a>
                     <div class="collapse" id="collapse-3">
                        <div class="p-2">This is a simple collapse</div>
                     </div>
                  </div>

                  <hr>

                  <!-- syntax highlighting -->
                  <h5 id="code-and-syntax-highlighting">Code and Syntax Highlighting</h5>
                  <p>Inline <code>code</code> has <code>back-ticks around</code> it.</p>

                  <pre>
              <code>
  var goDocs = 'hello world!';
  console.log(goDocs);
              </code>
            </pre>

                  <hr>

                  <!-- blockquote -->
                  <h5 id="blockquote">Blockquote</h5>
                  <blockquote>
                     <p>This is a blockquote example.</p>
                  </blockquote>

                  <hr>

                  <!-- inline html -->
                  <h5 id="inline-html">Inline HTML</h5>
                  <p>You can also use raw HTML in your Markdown, and it&rsquo;ll mostly work pretty well.</p>
                  <dl>
                     <dt>Definition list</dt>
                     <dd>Is something people use sometimes.</dd>
                     <dt>Markdown in HTML</dt>
                     <dd>Does *not* work **very** well. Use HTML <em>tags</em>.</dd>
                  </dl>
                  <hr>

                  <!-- table -->
                  <h5 id="tables">Tables</h5>
                  <p>Colons can be used to align columns.</p>
                  <table>
                     <thead>
                        <tr>
                           <th>Tables</th>
                           <th align="center">Are</th>
                           <th align="right">Cool</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>col 3 is</td>
                           <td align="center">right-aligned</td>
                           <td align="right">$1600</td>
                        </tr>
                        <tr>
                           <td>col 2 is</td>
                           <td align="center">centered</td>
                           <td align="right">$12</td>
                        </tr>
                        <tr>
                           <td>zebra stripes</td>
                           <td align="center">are neat</td>
                           <td align="right">$1</td>
                        </tr>
                     </tbody>
                  </table>
                  <p>There must be at least 3 dashes separating each header cell.
                     The outer pipes (|) are optional, and you don&rsquo;t need to make the
                     raw Markdown line up prettily. You can also use inline Markdown.</p>
                  <table>
                     <thead>
                        <tr>
                           <th>Markdown</th>
                           <th>Less</th>
                           <th>Pretty</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td><em>Still</em></td>
                           <td><code>renders</code></td>
                           <td><strong>nicely</strong></td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>2</td>
                           <td>3</td>
                        </tr>
                     </tbody>
                  </table>

                  <hr>

                  <!-- image -->
                  <h5 id="image">Image</h5>
                  <p><img src="images/getting-started.jpg" alt="image"></p>

                  <hr>

                  <!-- youtube video -->
                  <h5 id="youtube-video">Youtube video</h5>
                  <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                     <iframe src="https://www.youtube.com/embed/C0DPdy98e4c"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;"
                        allowfullscreen title="YouTube Video"></iframe>
                  </div>
               </div>
               <!-- navigation -->
               <nav class="pagination">
                  <a class="nav nav-prev" href="https://examplesite.com/"><i class="ti-arrow-left mr-2"></i>
                     <span class="d-none d-md-block">Hugo documentation theme</span></a>
                  <a class="nav nav-next" href="https://examplesite.com/basic-startup/requirements/"> <span
                        class="d-none d-md-block">Requirements</span><i class="ti-arrow-right ml-2"></i></a>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /details page -->

<?= $this->endSection(); ?>