<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
    	<link href="../bootstrap/less/bootstrap.css" rel="stylesheet">
    	<link href="my_css.css" rel="stylesheet"/>
    	<title>ATLAS: Database of TCR-pMHC affinities and structures</title>	
    </head>
    <body>
    <?php require 'ATLAS_functions.php'; ?>
    	<nav class="navbar navbar-default">
	        <div class="container">
	        	<div class="navbar-header">
	            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					    <span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
	            	</button>
	          	</div>
	          	<div class="navbar-collapse collapse">
	            	<ul class="nav navbar-nav">
			            <li class="active"><a href="./">Home</a></li>
			            <li><a href="search.php">Search</a></li>
			           	<li><a  href="downloads.php">Downloads</a></li>
                		<li><a href="contact.html">Contact</a></li>
	            	</ul>
	          	</div>
	        </div>
	    </nav>
	    <div class="container">
		    	<div class="row">
		    		<div class="col-sm-4">
		    			<!-- <img class="my_logo" src="atlas_logo_v1.png" /> -->
		    			<img src="atlas_logo_v1.png" width='300' />
		    		</div>
		    		<div class="col-sm-8">
		    			<img src="ribbon.png" width='750'/>
		    		</div>
		    	</div>
		   <hr>
	    </div>
        <div class="container">
        	<div class="row">
	        	<div class="col-sm-9">
		        	<div class="well">

		        		<h3> What is ATLAS?</h3>
		        		<p> The ATLAS (Altered TCR Ligand Affinities and Structures) database 
		        			is a manually curated repository 
		        			containing the binding affinities for wild-type and mutant T cell receptors 
		        			(TCRs) and their antigens, peptides presented by the major histocompatibility 
		        			complex (MHC). The database links experimentally measured binding affinities 
		        			with the corresponding three dimensional structures for TCR-pMHC complexes. 
		        			</p>
		        		<h3> How to use ATLAS?</h3>
		        		<p>The user can <a href="search.php">browse and search</a> affinities, structures, and experimental details for 
		        			TCRs, peptides, and MHCs of interest. We aim to facilitate the development of 
		        			next-generation protein design algorithms targeting the TCR-pMHC interface. 
		        			With this in mind, ATLAS is designed to be easily parsed using modeling 
		        			software that builds protein structures for training and testing. 
		        			All collections of structures, affinities, and statistics in 
		        			ATLAS are available for <a  href="downloads.php">download</a>.
		        		</p>

		        	</div>
		        </div>
		        <div class="col-sm-3">
		        	<div class="panel panel-default">
	                        <div class="panel-heading">
	                            <h3 class="panel-title">Statistics </h3>
	                        </div>
	                        <div class="panel-body">
	                        	<ul class="list-group">
	                        		<li class="list-group-item">Total entries: </li>
	                        		<li class="list-group-item">Human: </li>
	                        		<li class="list-group-item">Mouse: </li>
	                        		<li class="list-group-item">Class I MHC alleles: </li>
	                        		<li class="list-group-item">Class II MHC alleles: </li>
	                        		<li class="list-group-item">PDB structures: </li>
	                        	</ul>
	                        </div>
	                </div>
		        </div>
		  
		    </div>
		    <hr>
		<footer>
    		<div class= "row">
    			<div class= "col-sm-4" align= "center">
    				<img src="logos/umasslogoformal.gif" width='180' />
    			</div>
    			<div class= "col-sm-4" align= "center">
    				<img src="logos/1_university_mark.jpg" width='225'/>
    			</div>
    			<div class= "col-sm-4" align= "center">
    				<img src="logos/IBBR-Logo_Long.png" width='250' />
    			</div>
    		</div>
    		<br></br>
    	</footer>
        <div>

	</body>
</html>