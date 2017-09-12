<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.php' ?>
  <?php
	if (isset($_GET["mikroid"])) {
									
	echo "<style type=\"text/css\" >
			.placeholderdiv {
			display:none;
			}
			</style>";					
									
	} else {
		echo "<style type=\"text/css\" >
			.placeholderdiv {
			display:block;
			}
			</style>";								
	}
								
?>

<script type="text/javascript">
	function hidediv() {
		$('.placeholderdiv').hide();
	};
</script>
  
</head> <!-- all the libraries-->
<body class="home blog custom-background" onLoad="
<?php
echo "showResults([";
if (isset($_GET["mikroid"])) {
    echo "'mikroid',";
    echo $_GET["mikroid"];
	
    if (isset($_GET["mesoid"])) {
        echo ',';
    }
}
if (isset($_GET["mesoid"])) {
    echo "'mesoid',";
    echo $_GET["mesoid"];
}
echo "])";

?>
        ">
<script src="libs/jquery.js"></script>
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="js/bonsai.js"></script>
<script src="js/diagram.js"></script>
<script src="js/serviceout.js"></script>
<script src="js/Listingout.js"></script>
 <!-- header navigation -->
    <?php include 'navigationeng.php' ?>
        
	<div class="content">

		<!-- the container ( align to center ) -->
		<div class="container">
			<div class="row">
	 
				<!-- content -->
				<section class="col s12 m12 l9 mythemes-classic mythemes-classic">
				<!-- post content wrapper -->
				<!-- post content wrapper -->
					<article class="post-915 post type-post status-publish format-standard hentry">

						<h2 class="post-title" style="color:#666666;">[eng]Auswertung der eingegebenen Daten</h2>
								<div class="clear"></div>
								<?php
								if (isset($_GET["mikroid"])) {
									echo "<p> Vielen Dank für die Teilnahme an unserer Umfrage! In den beiden Registerkarten Meso und Mikro finden Sie die grafische Auswertung ihrer Eingaben.<br> Über \"Nach weiteren Ergebnissen suchen\" können Sie in unserer Datenbank stöbern. Die Parameter des Filters beziehen sich jeweils auf die Mikro- oder Mesoebene der Befragung - wechseln Sie die Registrkarte, um die jeweils anderen Filtereinstellungen vornehmen zu können.
									
									
									</p>
									";
									
									
								} else {
									echo "<p> Wählen Sie eine der Registerkarten Mikro oder Meso, um in den Ergebnissen der Befragung zu stöbern. Durch die Eingabe von Filterparametern und einen Klick auf \"Filter anwenden \" erhalten sie eine grafische Darstellung der Ergebnisse, die ihren gewählten Parametern entsrpechen.<br>
									Wir freuen uns, wenn Sie im Anschluss &nbsp;
									<a href=\"mikroeng.php\" class=\"poll-link\">  den Fragebogen selbst ausfüllen </a><br><br>
									
									
									</p>		

									 <script type=\"text/javascript\">
										$('document').ready(showfilter);
										
										function showfilter() {
											$('.collapse').addClass('in');
											$('.expand-area').attr('aria-expanded','true');
											$('.collapse').attr('aria-expanded','true');
											
										
										}
										</script>		
										
										
										

									"; //end output
								}
								
								?>
						
						<ul class="nav nav-tabs">
									<li class="active">
										<a  href="#tab1" data-toggle="tab">Mikro</a>
									</li>
									<li>
										<a href="#tab2" data-toggle="tab">Meso</a>
									</li>
								</ul>

						<!-- begin modell content -->
						<div class="tab-content ">
									
									<div class="tab-pane active" id="tab1">
						<div class="left-col">
						
							<div class="placeholderdiv">
								<p class="course-meta last"> Results </p><br>
								<p  class="course-meta-sub-label">Choose your criteria for searching the results in the filter element on the right.</p>
								<div class="dia" style="width:90%; height:400px; background-color:#f9f9f9; margin-bottom:20px;"></div> 
							</div>
                            <div id="labels0">

                                <p class="course-meta" id="Unilabel0">Dummy </p> <p id="Kurslabel0" class="course-meta">Dummy</p>  <p id="Fachbereichlabel0" class="course-meta last"> Dummy </p>
							
								<br style="line-height: .5em;"> 
								
								<p  class="course-meta-sub-label">Number of students:</p>
								
								<p id="AnzahlStudentenlabel0" class="course-meta-sub">Dummy</p>
							
								<p class="course-meta-sub-label">Semester count:</p>
						   
								<p id="Semesterzahllabel0" class="course-meta-sub last">Dummy</p> 
									  
                            </div>
                            <div  id="diagram0" class="dia"></div>
							
                            
							<p id="Pagination0" hidden> dummy von dummy</p>
							<button id="previousmikro" type="button" class="btn btn-primary" disabled onClick="previous(Listingmikro(),true);return false;">Last Result</button>
							<button id="nextmikro" type="button" class="btn btn-primary" disabled onClick="next(Listingmikro(),true);return false;">Next Result</button>
						
						</div>
						
						<div class="right-col">
						<button type="button" class="btn expand-area" id="expandbutton" data-toggle="collapse" data-target="#table" aria-expanded="false">Search for further results</button>
							<div class="collapse" id="table"  >
							<table class="table table-striped js-options-table">
								<tr>
									<td>
										Uni:
									</td>
									<td colspan="3">
										<input name="Uni" value="" class="stringFilterMikro" size="40">
									</td>
								</tr>
								<tr>
									<td>
										Course:
									</td>
									<td colspan="3">
										<input name="Kurs" value="" class="stringFilterMikro" size="40">
									</td>
								</tr>
                                <tr>
                                    <td>
                                        Department:
                                    </td>
                                    <td colspan="3">
                                        <input name="Fachbereich" value="" class="stringFilterMikro" size="40">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Number of Students:
                                    </td>
                                    <td colspan="3">
                                        <input name="AnzahlStudenten" value="" class="stringFilterMikro" size="40">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Semester Count:
                                    </td>
                                    <td colspan="3">
                                        <input name="Semesterzahl" value="" class="stringFilterMikro" size="40">
                                    </td>
                                </tr>
								<tr>
									<td>
										Assessment:
									</td>
									<td>
										
										<input type="radio" name="Assessment" class="dimensionFilterMikro" value="1">
									</td>
									<td>
										<input type="radio" name="Assessment" class="dimensionFilterMikro" value="2">
									</td>
									<td>
										<input type="radio" name="Assessment" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
								
								<tr>
									<td>
										 Research topic:
									</td>
									<td>
									
										<input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="1">
									</td>
									<td>
										<input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="2">
									</td>
									<td>
										<input type="radio" name="Forschungsthema" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Research question:
									</td>
									<td>
										<input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="1">
									</td>
									<td>
										<input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="2">
									</td>
									<td >
										<input type="radio" name="Forschungsfrage" class="dimensionFilterMikro" value="3">
									</td>
								
								</tr>
										
								<tr>
									<td>
										Plan:
									</td>
									
									
									<td >
										<input type="radio" name="Planung" class="dimensionFilterMikro" value="1">
									</td>
									<td >
										<input type="radio" name="Planung" class="dimensionFilterMikro" value="2">
									</td>
									<td >
										<input type="radio" name="Planung" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Conduct:
									</td>
									
									
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="1">
									</td>
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="2">
									</td>
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
											
								<tr>
									<td>
										Reflection:
									</td>
									<td>
										<input type="radio" name="Reflexion" class="dimensionFilterMikro" value="1">
									</td>
									<td >
										<input type="radio" name="Reflexion" class="dimensionFilterMikro" value="2">
									</td>
									<td >
										<input type="radio" name="Reflexion" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Solutiondisplay:
									</td>
									<td>
										<input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="1">
									</td>
									<td >
										<input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="2">
									</td>
									<td>
										<input type="radio" name="Ergebnisdarstellung" class="dimensionFilterMikro" value="3">
									</td>
								</tr>
							</table>
							
							<button type="button" class="btn btn-primary bottomspace halfwidth" onClick="showall(Listingmikro(),true);hidediv();">Apply Filter</button>
							<button type="button" class="btn btn-primary bottomspace halfwidth" onClick="cleanFilter(); return false">Clean Filter</button>
							
							</div> <!-- collapse -->
						
							
								
								
								
								
						
						</div> <!-- end right-col -->
					</div> <!-- end 1st tab -->
					
					<div class="tab-pane " id="tab2">
						<div class="left-col">
							<div class="placeholderdiv">
								<p class="course-meta last"> Results Display </p><br>
								<p  class="course-meta-sub-label">Choose your criteria for searching the results in the filter element on the right.</p>
								<div class="dia" style="width:90%; height:400px; background-color:#f9f9f9; margin-bottom:20px;"></div> 
							</div>
							<div id="labels1" >
								<p class="course-meta" id="Unilabel1">Dummy </p> <p id="Kurslabel1" class="course-meta">Dummy</p>  <p id="Fachbereichlabel1" class="course-meta last"> Dummy </p>
							
							   <br style="line-height: .5em;"> 
								
								<p  class="course-meta-sub-label">Number of Students:</p>
								
								<p id="AnzahlStudentenlabel1" class="course-meta-sub">Dummy</p>
							
								<p class="course-meta-sub-label">Semester Count:</p>
						   
								<p id="Semesterzahllabel1" class="course-meta-sub last">Dummy</p>
									  
							</div>
							
							<div  id="diagram1" class="dia"></div>
                            <p id="Pagination1" hidden> dummy von dummy</p>
							<button id="previousmeso" type="button" class="btn btn-primary" disabled onClick="previous(Listingmeso(),false);return false;">Last Result</button>
							<button id="nextmeso" type="button" class="btn btn-primary" disabled onClick="next(Listingmeso(),false);return false;">Next Result</button>
							
						</div> <!-- end left col -->
						
						<div class="right-col">
							<button type="button" class="btn expand-area" data-toggle="collapse" data-target="#table1" >Search for further results</button>
							
							<div class="collapse" id="table1"  >
							
								<table class="table table-striped js-options-table">
								<tr>
									<td>
										Uni:
									</td>
									<td colspan="3">
										<input name="Uni" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								<tr>
									<td>
										Course:
									</td>
									<td colspan="3">
										<input name="Kurs" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								
								<tr>
									<td>
										Department:
									</td>
									<td colspan="3">
										<input name="Fachbereich" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								
								<tr>
									<td>
										 Number of Students:
									</td>
									<td colspan="3">
										<input name="AnzahlStudenten" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								<tr>
									<td>
										 Semester Count:
									</td>
									<td colspan="3">
										<input name="Semesterzahl" value="" class="stringFilterMeso" size="40">
									</td>
								</tr>
								
								<tr>
									<td>
										Curricular embedding:
									</td>
									<td>
										
										<input type="radio" name="Einbindung" class="dimensionFilterMeso" value="1">
									</td>
									<td>
										 <input type="radio" name="Einbindung" class="dimensionFilterMeso" value="2">
									</td>
									<td>
										 <input type="radio" name="Einbindung" class="dimensionFilterMeso" value="3">
									</td>
								</tr>
								
								<tr>
									<td>
										 Modular location:
									</td>
									<td>
									
										<input type="radio" name="Verortung" class="dimensionFilterMeso" value="1">
									</td>
									<td>
										<input type="radio" name="Verortung" class="dimensionFilterMeso" value="2">
									</td>
									<td>
										<input type="radio" name="Verortung" class="dimensionFilterMeso" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Contentsetting:
									</td>
									<td>
										<input type="radio" name="Inhaltsrahmen" class="dimensionFilter" value="1">
									</td>
									<td>
										<input type="radio" name="Inhaltsrahmen" class="dimensionFilterMeso" value="2">
									</td>
									<td >
										<input type="radio" name="Inhaltsrahmen" class="dimensionFilterMeso" value="3">
									</td>
								
								</tr>
										
								<tr>
									<td>
										Assessmentsetting:
									</td>
									
									
									<td >
										<input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="1">
									</td>
									<td >
										<input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="2">
									</td>
									<td >
										<input type="radio" name="Prufungsrahmen" class="dimensionFilterMeso" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Timesetting:
									</td>
									
									
									<td >
										<input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="1">
									</td>
									<td >
										<input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="2">
									</td>
									<td >
										<input type="radio" name="Zeitrahmen" class="dimensionFilterMeso" value="3">
									</td>
								</tr>
											
								<tr>
									<td>
										Ressourcsetting:
									</td>
									<td>
										<input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="1">
									</td>
									<td >
										<input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="2">
									</td>
									<td >
										<input type="radio" name="Ressourcenrahmen" class="dimensionFilterMeso" value="3">
									</td>
								</tr>
										
								
							</table>
							<button type="button" class="btn btn-primary" onClick="showall(Listingmeso(),false)">Apply Filter</button>
								<button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">Clean Filter</button>
							
						</div> <!--- end collapse -->
						
					</div> <!-- end right col -->
				</div> <!-- end tab 2 -->
			</div> <!-- end tab content-->
						
			<!-- end of modell content -->
						
			<div class="clearfix"></div>
		</div> <!-- ende post content -->
	</article>
		
		<div class=" aligncenter"> </div>
						
	</section>
			
	<!-- widgets -->		
				<?php include 'aside.php' ?>
			</div> <!-- end row -->

		</div><!-- .container -->
	</div><!-- .content -->

   <?php include 'footer.php' ?>
    </body>
<?php
?>