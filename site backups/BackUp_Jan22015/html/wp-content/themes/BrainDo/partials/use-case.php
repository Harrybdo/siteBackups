<?php
$portfolio_children = get_pages(array('child_of'=>106));
//echo '<pre>' . print_r( $portfolio_children, true ) . '</pre>';
foreach($portfolio_children as $key => $case_study){
  if($case_study->ID == get_the_ID()){
    unset($portfolio_children[$key]);
  }
}
$use_cases = array_rand($portfolio_children,2);
$use_case_1 = $portfolio_children[$use_cases[0]];
$use_case_2 = $portfolio_children[$use_cases[1]];

$case1_title = CFS()->get('page_header',$use_case_1->ID);
$case1_href = $use_case_1->post_name;
$case1_image = CFS()->get('use_case_image',$use_case_1->ID); //EX /infographics/use-case-XXXXX.jpg

$case2_title = CFS()->get('page_header',$use_case_2->ID);
$case2_href = $use_case_2->post_name;
$case2_image = CFS()->get('use_case_image',$use_case_2->ID); //EX /infographics/use-case-XXXXX.jpg
?>


<div class="row">
  <div class="small-10 medium-11 small-centered medium-centered columns">
    <div class="small-12 medium-12 columns use-case">
      <h3 class="expertise-block-title">View More Case Studies</h3>
      <div class="medium-6 small-12 columns use-case-block">
        <img src="<?php echo get_template_directory_uri()?>/library/images/<?php echo $case1_image; ?>">
        <div class="use-case-block-text">
          <h4><?php echo $case1_title; ?></h4>
          <a href="/work/<?php echo $case1_href; ?>">Read More</a>
        </div>
      </div>
      <div class="medium-6 small-12 columns use-case-block">
        <img src="<?php echo get_template_directory_uri()?>/library/images/<?php echo $case2_image; ?>">
        <div class="use-case-block-text">
          <h4><?php echo $case2_title; ?></h4>
          <a href="/work/<?php echo $case2_href; ?>">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
