<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A. Mitchell Bullard - Tech</title>
    <?php include '_/components/php/head_tag_contents.php'; ?>
  </head>
  <body id="body_tech">
    <div class="main_container container">


<!-- header --> 
      <header>
        <div class="row">
          <section class="left_header_container">
            <div class="left_header_column  col  col-xxs-12 col-xs-6">
              <?php include '_/components/php/header_title.php'; ?>
            </div><!-- left_header_column -->
          </section> <!-- left_header_container -->

          <section class="right_header_container">
            <div class="right_header_column  col  col-xxs-6 col-sm-4  col-sm-offset-1">
              <?php include '_/components/php/header_quotes.php'; ?>
             </div> <!-- right_header_column -->


          </section> <!-- right_header_container -->
        
        </div> <!-- row -->       
        <hr>     
      </header> <!-- header -->


<!-- navigation -->
<!-- navigation -->
       <nav class="top_nav">
        <ul class="nav nav-pills  nav-justified">
            <?php include '_/components/php/nav.php'; ?>
        </ul>
      </nav> <!-- top_nav --> 


<!-- content --> 
      <div class="content_container  container  col  col-xxs-12">
        <div class="row">  

          



          <div class="tab_pane_code col col-xxs-12 col-md-6">           

            <h1>Code</h1>           
            <section class="tabbable tabs">              
              <ul class="nav nav-tabs">  
                <li class="active"><a href="#html_css" data-toggle="tab">HTML/CSS</a></li>
                <li><a href="#javascript" data-toggle="tab">JAVASCRIPT</a></li>
                <li><a href="#ruby" data-toggle="tab">RUBY</a></li>                  
              </ul>
            </section> <!-- tabbable -->


            
            <div class="tab-content">
                                      
              <section class="tab-pane active" id="html_css">                     
                <div class="col col-xxs-12">           
                  <?php include '_/components/php/tech_code_html_css.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane --> 

              <section class="tab-pane" id="javascript"> 
                <div class="col col-xxs-12">
                  <?php include '_/components/php/tech_code_javascript.php'; ?>
                </div> <!-- col -->         
              </section> <!-- tab_pane --> 

              <section class="tab-pane" id="ruby">                     
                <div class="col col-xxs-12">           
                  <?php include '_/components/php/tech_code_ruby.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane -->                                                                       
                                      
            </div> <!-- tab_content -->   

          </div> <!-- tab_pane_one -->


          <div class="tab_pane_projects col col-xxs-12 col-md-6">
            <h1>Projects</h1>

            <section class="tabbable tabs">              
              <ul class="nav nav-tabs">  
                <li class="active"><a href="#nerdwords" data-toggle="tab">NERDWORDS</a></li>
                <li><a href="#revisionist" data-toggle="tab">REVISIONIST</a></li>
                <li><a href="#c#" data-toggle="tab">C#</a></li>                 
              </ul>
            </section> <!-- tabbable -->

            <div class="tab-content">
                                          
              <section class="tab-pane active" id="nerdwords">                     
                <div class="col col-xxs-12"> 
                 <?php include '_/components/php/tech_projects_nerdwords.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane --> 

              <section class="tab-pane" id="revisionist"> 
                <div class="col col-xxs-12">
                  <?php include '_/components/php/tech_projects_revisionist.php'; ?>
                </div> <!-- col -->         
              </section> <!-- tab_pane --> 

              <section class="tab-pane" id="c#">                     
                <div class="col col-xxs-12">
                  <?php include '_/components/php/tech_c#.php'; ?>
                </div> <!-- col -->           
              </section> <!-- tab_pane -->
                
            </div> <!-- tab-content -->
          </div> <!-- tab_pane_two --> 





        </div> <!-- row -->
      </div> <!-- content_container -->

     
<!-- footer -->
      <footer>
        <hr>
        <div class="row">
          <?php include '_/components/php/footer_content.php'; ?>
        </div> <!-- row -->
      </footer>
      
    </div> <!-- main_container -->

  <?php include '_/components/php/script_tags.php'; ?>

  </body>
</html>