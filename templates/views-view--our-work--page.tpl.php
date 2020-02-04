<?php
    $project_270 = httpGet('https://pi.niua.org/api.php?mode=themes_270');
    $projectname_270 = json_decode($project_270,true);
    $project_271 = httpGet('https://pi.niua.org/api.php?mode=themes_271');
    $projectname_271 = json_decode($project_271,true);
    $project_272 = httpGet('https://pi.niua.org/api.php?mode=themes_272');
    $projectname_272 = json_decode($project_272,true);
    $project_273 = httpGet('https://pi.niua.org/api.php?mode=themes_273');
    $projectname_273 = json_decode($project_273,true);
    $project_274 = httpGet('https://pi.niua.org/api.php?mode=themes_274');
    $projectname_274 = json_decode($project_274,true);
?>

<?php
    $instument_290 = httpGet('https://pi.niua.org/api.php?mode=instument_290');
    $projectname_290 = json_decode($instument_290,true);
    $instument_291 = httpGet('https://pi.niua.org/api.php?mode=instument_291');
    $projectname_291 = json_decode($instument_291,true);
    $instument_292 = httpGet('https://pi.niua.org/api.php?mode=instument_292');
    $projectname_292 = json_decode($instument_292,true);
    $instument_293 = httpGet('https://pi.niua.org/api.php?mode=instument_293');
    $projectname_293 = json_decode($instument_293,true);
    $instument_294 = httpGet('https://pi.niua.org/api.php?mode=instument_294');
    $projectname_294 = json_decode($instument_294,true);
    $partners = httpGet('https://pi.niua.org/api.php?mode=partners');
    $partnerslist = json_decode($partners,true);

?>



<p>NIUA works on a wide array of projects. It touches upon various aspects of urban development through these projects that support and augment the institute’s vision of transforming the urban landscape of India. These research projects include topics such as spatial growth, demographic trends, development of toolkits and frameworks, municipal finance, climate change, water, sanitation, hygiene, preparing city master plans, conservation plans. NIUA also conducts customized training programmes to support and assist Government of India’s flagship campaigns and policies. The institute works closely with various ministries including MoHUA, MoEFCC, Jal Shakti Mantralaya, City level urban local bodies, Multilateral agencies such as ADB, World Bank, Bi-lateral agencies such as EU, USAID, DFID, AFD, SDC, etc., philanthropic organizations such as BMGF, BVLF, Shakti Foundation etc. and other national and international academic institutions <a href="#" data-toggle="modal" data-target="#partnerlist">(Click here for Partner&rsquo;s List)</a>.</p>
<div id="partnerlist" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="text-align-last: center">Partners List</h4>
            </div>
            <div class="modal-body" style="overflow-y: scroll;height: 300px;">
 <?php if (!empty($partnerslist)) {
	//$i=1;
     foreach($partnerslist[0] as $partner){
		 //echo $i;
		 //echo '.&nbsp;';
		 echo'<li>';
		 echo $partner;
		 echo '</li>';
		 //echo'<br>';
		  //$i++;
	 }
	
}
		?>
            </div>
          
        </div>
    </div>
</div>
<p>The multiple projects of NIUA are clubbed under 5 Theme Areas or Knowledge Domains, and the interventions are classified into 5 types of instruments.</p>
<p class="img-cntr"><img src="/sites/all/themes/color_glass/images/Reflections.png" width="80%"></p>

<div class="w3-bar w3-black"><button class="w3-bar-item w3-button" onclick="openCity('London')">THEMES</button><button class="w3-bar-item w3-button" onclick="openCity('Paris')">INSTRUMENTS</button>
    <a href="/project-list"><button class="w3-bar-item w3-button">PROJECTS</button></a></div>

<div class="w3-container w3-display-container city" id="London" style="display:none">
<div class="col-md-12">
<div class="page">
<h2>THEMES</h2>

<div class="timeline">
<div class="timeline__group">
<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Economic"><img src="/sites/all/themes/color_glass/images/logo/Eco_Growth.png" width="70px" /></a></span></div>

<div class="timeline__post">
<h3>Urbanisation and Economic Growth</h3>

<div class="timeline__content " id="Economic">
<p>Cities are huge drivers of economic growth. They host a large share of the population, institutions and most importantly the Infrastructure. However, beyond population or territorial size that drives growth, it is economic weight, proximity to zones of growth and development, political stability, and attractiveness for foreign capital, which are the key drivers of an economy. In other words, connectivity matters more than size, and cities form important regional nodes. Cities thus deserve more nuanced understanding. NIUA is committed to studying in depth the macro parameters that influence urban development and its spatial expansion, with a continual review and analysis of the linkages between urbanisation, migration, urban infrastructure and economic growth.</p>
		<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_274)) {
   foreach($projectname_274 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>
</div>
</div>

<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Infrastructure"><img src="/sites/all/themes/color_glass/images/logo/Urban_Infra.png" width="70px" /></a></span></div>

<div class="timeline__post">
<h3>Urban Infrastructure and Built Environment</h3>

<div class="timeline__content collapse" id="Infrastructure">
<p>Indian cities are exciting places albeit struggling with a plethora of issues like unsustainable urban form, sub-optimal use of land, congested roads, acute housing shortages being met within unauthorized colonies and slums, degraded built environment, neglected heritage, inequitable access to basic services, and extreme exploitation of natural resources. NIUA provides the knowledge and expertise towards overall strategic and sustainable planning and management of urban areas as well as sectoral focus on areas like heritage management, TOD, inclusive urban planning and design responding to needs of all age groups, genders, abilities, and economic backgrounds. NIUA recognizes that well-managed built environments are a powerful tool to deliver high quality of life to all urban residents by leveraging the historical, ecological and cultural layers that make our cities so interesting.</p>

<p>NIUA strives towards effectively managing the knowledge generated through various projects, providing faster and more effective access to relevant internal and external knowledge to maximize the impact. To ensure that all the knowledge developed at NIUA is readily available for its users, platforms such as SmartNet help peer-to-peer learning for city agencies and focuses on creating a knowledge sharing ecosystem that increases connectivity internally and among key stakeholders, partners and institutions.</p>
		<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_273)) {
   foreach($projectname_273 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>
</div>
</div>
</div>

<div class="timeline__group">
<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Environment"><img src="/sites/all/themes/color_glass/images/logo/Environment.png" width="70px" /></a></span></div>

<div class="timeline__post">
<h3>Environment, Climate Change &amp; Resilience</h3>

<div class="timeline__content collapse" id="Environment">
<p>Sustainable Development Goal 11 directs nations to make their cities and human settlements inclusive, safe, resilient and sustainable. Mainstreaming resilience into urban development is a global agenda. In India, the increasing pace of urbanization and associated challenges are aggravating the vulnerability of cities to shocks and stresses associated with climate change and disasters. Considering this, NIUA is working towards embedding resilience at the heart of urban discourse. As an institute, working on cities of tomorrow, it understands that urban policies and decisions taken today will have direct impacts on a city&rsquo;s resilience and capacity to respond to these challenges in future. NIUA is working towards building resilience through the lenses of climate smart cities, resilient infrastructure, urban river system management and capacity building on ecosystem services.</p>
				<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_270)) {
   foreach($projectname_270 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>

</div>
</div>
</div>

<div class="timeline__group">
<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Governance"><img src="/sites/all/themes/color_glass/images/logo/Urban_Gov.png" width="70px" /></a></span></div>

<div class="timeline__post">
<h3>Urban Governance &amp; Finance</h3>

<div class="timeline__content collapse" id="Governance">
<p>Urban governance and finance play a critical role in shaping the physical and social character of urban regions; influence the quantity and quality of local services; determine the sharing of costs and distribution of resources among different groups; affect residents&rsquo; ability to engage in decision-making and influence local government accountability. NIUA as an urban policy think tank has actively provided wide-ranging technical assistance to MoHUA, states and ULBs on municipal finance and governance including pan-India mission-mode capacity building for reform adoption with a 4000 ULBs outreach; evaluating municipal health and performance of over 2000 ULBs; and direct hand-holding of a city agency for building its capacities to respond effectively to changing needs and emerging trends.</p>
		<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_272)) {
   foreach($projectname_272 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>
</div>
</div>
</div>

<div class="timeline__group">
<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Social"><img src="/sites/all/themes/color_glass/images/logo/Social.png" width="70px" /></a></span></div>

<div class="timeline__post">
<h3>Social Development</h3>
<div class="timeline__content collapse" id="Social">
<p>Social inclusion is a crucial dimension that enables the creation of a dynamic and adaptable framework for city planning and governance. Governance paradigm, that promotes local democracy, participation and inclusion, transparency and accountability, with a view to ensuring sustainable urbanization and spatial quality are the key indicators of social development. Today, big Data, GIS and related computing and database technologies are being looked as enablers to tabulate and analyse data at more precise levels of spatial resolution and improving our ability to accurately predict and manage needs, identifying context-based issues and solutions and designing emergency response systems and quick recovery techniques for cities. In line with the technological revolution influencing social development in urban India, NIUA has been working towards promoting and building knowledge through its various initiatives for Inclusive Cities. It has also been involved in providing technical advisory support for Ease of Doing Business under AMRUT and fostering sustainable, innovative and participatory approaches to develop projects within the Smart City Mission through CITIIS program.</p>
			<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_271)) {
   foreach($projectname_271 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div>&nbsp;</div>

<div class="w3-container w3-display-container city" id="Paris" style="display:none">
<div class="col-md-12">
<div class="page">
<h2><span onclick="this.parentElement.style.display='none'">INSTRUMENTS</span></h2>

<div class="timeline">
<div class="timeline__group">
<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Action"><img src="/sites/all/themes/color_glass/images/logo/Action.png" width="70px" /></a></span></div>

<div class="timeline__post">
    <h3>Action Research &amp; Advocacy</h3>
<div class="timeline__content " id="Action">
<p><span onclick="this.parentElement.style.display='none'">The capacity of institutions and individuals is central for the success of any transformative policy. Strengthening the institutional capacity of national and local governments is essential for the achievement of the commitments and actions towards equitable cities. NIUA is committed that more opportunities and different modalities are established to acquire knowledge, develop skills and consolidate expertise and is made available to individuals, practitioners, policy makers, urban managers and decision makers in order to enable them to formulate evidence-based policies, programs and projects and take well-informed decisions.</span></p>
			<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_290)) {
   foreach($projectname_290 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>
</div>
</div>

<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Knowledge"><img src="/sites/all/themes/color_glass/images/logo/Knowledge.png" width="70px" /></a></span></div>

<div class="timeline__post">
<h3>Knowledge Management &amp; Capacity Building</h3>
<div class="timeline__content collapse" id="Knowledge">
<p><span onclick="this.parentElement.style.display='none'">NIUA plays a catalytic role in linking up data, information, and ideas with those in search of development solutions&mdash;in ensuring that knowledge for development is readily available to citizens, civil society, opinion makers, researchers, and government policy makers at all levels. Our aim is to ensure that knowledge reaches out to better encompass the experiences of successful practices&mdash;not with ordered templates, blueprints, or prescriptions&mdash;but with inquiry, innovation, cooperation, and openness.</span></p>

<p><span onclick="this.parentElement.style.display='none'">NIUA strives towards effectively managing the knowledge generated through various projects, providing faster and more effective access to relevant internal and external knowledge to maximize the impact. To ensure that all the knowledge developed at NIUA is readily available for its users, platforms such as SmartNet help peer-to-peer learning for city agencies and focuses on creating a knowledge sharing ecosystem that increases connectivity internally and among key stakeholders, partners and institutions.</span></p>
			<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_293)) {
   foreach($projectname_293 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>
</div>
</div>


<div class="timeline__group">
<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Policy"><img src="/sites/all/themes/color_glass/images/logo/Policy.png" width="70px" /></a></span></div>

<div class="timeline__post">
<h3>Policy and Planning</h3>
<div class="timeline__content collapse" id="Policy">
<p><span onclick="this.parentElement.style.display='none'">NIUA is working towards ensuring the urban planning and design practice adequately responds to the inherent demographic and economic forces that underpin India&rsquo;s urbanization. To capture universal principles from global practices, national and local experience that could support the development of diverse planning approaches adapted to different contexts and scales. The emphasis of the institute is on establishing a system of rules and regulations that provide a solid and predictable long-term framework for urban growth and development. We aim to accomplish this by helping the public and private sectors: build capacity for informed, creative decisions; shape public policy; and implement the best community practices.</span></p>
			<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_294)) {
   foreach($projectname_294 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>
</div>
</div>
</div>

<div class="timeline__group">
<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Technology"><img src="/sites/all/themes/color_glass/images/logo/Technology.png" width="70px" /></a></span></div>

<div class="timeline__post">
<h3>Technology, Data Solutions &amp; Innovations</h3>
<div class="timeline__content collapse" id="Technology">
<p><span onclick="this.parentElement.style.display='none'">NIUA is at the forefront of innovation in the urban realm, and aims at fostering initiatives and gathering knowledge about Cities of tomorrow. The institute is committed towards creating an ecosystem that can provide ample advice and information to urban stakeholders to become more innovative at delivering intelligent, inclusive and sustainable urban development at scale, especially in challenging contexts. This includes helping cities build the capabilities needed to harness strategically the power of innovation labs, data driven strategies, collective intelligence, better governance, civic innovation/tech and a collaborative economy.</span></p>
		<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_292)) {
   foreach($projectname_292 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>
</div>
</div>
</div>

<div class="timeline__group">
<div class="timeline__box">
<div class="timeline__date"><span class="timeline__day"><a data-toggle="collapse" href="#Partnerships"><img src="/sites/all/themes/color_glass/images/logo/Partnership.png" width="70px" /></a></span></div>

<div class="timeline__post">
<h3>Partnerships</h3>
<div class="timeline__content collapse" id="Partnerships">
<p><span onclick="this.parentElement.style.display='none'">By sharing policy and research experience across cities and among development institutions, the entire development community is better positioned to address the scale and complexity of critical development challenges, such as urbanization, climate change, water scarcity and data management. Working with global, national and local, partners, stakeholders and organisations from across the globe, NIUA is committed to exchange of ideas, knowledge exchange through open data resource development and management, to contribute to a greater urban dialogue but also to increase the reach of its knowledge resources and spur innovation.</span></p>
		<div class="prject_name">
    <div class="row">
      <div class="col-md-6"><h4><b><u>Project Name</u></b></h4></div>
      <div class="col-md-6"><h4><b><u>Knowledge Products</u></b></h4></div>
    </div>
  
    <ul>
     <?php if (!empty($projectname_291)) {
   foreach($projectname_291 as $project_list){
   echo'<div class="row">';
   
   echo '<div class="col-md-6">';
   echo '<li>';
   echo '<h5><a href="/projectdetails/?pid='.$project_list['pid'].'" >'.$project_list['project_name'].'</a></h5>';
   echo '</div>';
   echo '<div class="col-md-6 click" style="margin-top: 8px;">';
   echo '</li><a href="/projectdetails/?pid='.$project_list['pid'].'#menu3" >Click here</a>';
  echo '</div></div>';
 }}
      
  ?>
    </ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
