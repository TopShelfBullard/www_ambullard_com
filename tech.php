<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A. Mitchell Bullard - Tech</title>
    <?php include '_/components/php/common_content_head_tag_contents.php'; ?>
  </head>
  <body id="body_tech">
    <section  class="main_container  container">


<!-- header --> 
      <?php include '_/components/php/common_content_header.php'; ?>


<!-- navigation -->
      <?php include '_/components/php/common_content_navigation.php'; ?> 


<!-- content -->
      <section id="tech_content_container" class="content_container  container  col  col-xxs-12">
        <div class="row">  


<!-- code tab pane -->          
          <section id="tab_pane_code" class="col col-xxs-12 col-sm-6">           
            <div class="tech_img_right  col  col-xxs-12  col-xs-12  hidden-sm  hidden-md  hidden-lg">
              <img  src="images/tech_with_helen1.png" alt="A. Mitchell Bullard hacking with his daugther" width="100%" class="tech_img">
            </div>

            <h1>Code</h1>           
            <?php include '_/components/php/tech_code_tabs.php'; ?>
            
            <section class="tab-content">                                     
              <section id="html_css" class="tab-pane active" >                     
                <div class="col col-xxs-12">           
                  <?php include '_/components/php/tech_code_html_css.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane --> 

              <section id="javascript" class="tab-pane"> 
                <div class="col col-xxs-12">
                  <?php include '_/components/php/tech_code_javascript.php'; ?>
                </div> <!-- col -->         
              </section> <!-- tab_pane --> 

              <section id="ruby" class="tab-pane">                     
                <div class="col col-xxs-12">           
                  <?php include '_/components/php/tech_code_ruby.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane -->                                                                                                                  
            </section> <!-- tab_content -->   
          
            <div class="tech_img_left  col  col-xxs-12">
              <img  src="images/tech.png" alt="A. Mitchell Bullard hacking in the grass" width="100%" class="tech_img">
            </div>
          </section> <!-- tab_pane_code -->


<!-- projects tab pane -->
          <div id="tab_pane_projects" class="col col-xxs-12 col-sm-6">
            <div class="tech_img_right  col  hidden-xxs  hidden-xs  col-xs-12">
              <img  src="images/tech_with_helen1.png" alt="A. Mitchell Bullard hacking with his daugther" width="100%" class="tech_img">
            </div>

            <h1>Projects</h1>
              <?php include '_/components/php/tech_projects_tabs.php'; ?>

            <section class="tab-content">
                                          
              <section id="c_sharp" class="tab-pane active">                     
                <div class="col col-xxs-12"> 
                  <?php include '_/components/php/tech_projects_c_sharp.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane --> 

              <section id="nerdwords" class="tab-pane"> 
                <div class="col col-xxs-12">
                  <?php include '_/components/php/tech_projects_nerdwords.php'; ?>
                </div> <!-- col -->         
              </section> <!-- tab_pane --> 

              <section id="helen_js" class="tab-pane">                     
                <div class="col col-xxs-12">
                  <?php include '_/components/php/tech_projects_helen_js.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane -->               
            </section> <!-- tab-content -->
          </div> <!-- tab_pane_projects --> 


        </div> <!-- row -->
      </section> <!-- content_container -->

     
<!-- footer -->
      <footer>
        <hr>
        <div class="row">
          <?php include '_/components/php/common_content_footer_content.php'; ?>
        </div> <!-- row -->
      </footer>   
    

    </section> <!-- main_container -->
    <?php include '_/components/php/common_content_script_tags.php'; ?>
  </body>
</html>