<?php
/*  Collector
    A program for running experiments on the web
    Copyright 2012-2015 Mikey Garcia & Nate Kornell
 */
    require 'initiateCollector.php';
    
    $title = 'Basic Information';
    require $_PATH->get('Header');
?>
<style>    
    #content {
        width:auto;
        min-width: 400px;
        /*Make the flexchild, form, fit the basic info content size*/
    }
</style>
<form id="content" class="basicInfo" name="Demographics"
      action="<?= $_PATH->get('Basic Info Record') ?>" method="post" autocomplete="off">
    
    <fieldset>
        <legend><h1>Basic Information</h1></legend>
        
        
        <section class="radioButtons">
            <h3>Gender</h3>
            <label><input name="Gender" type="radio" value="Male"   required/>Male</label>
            <label><input name="Gender" type="radio" value="Female" required/>Female</label>
            <label><input name="Gender" type="radio" value="Other"  required/>Other</label>
        </section>
        
        
        <section>
            <label>
                <h3>Age</h3>
                <input name="Age" class="wide collectorInput" type="text"
                pattern="[0-9][0-9]" value="" autocomplete="off" required/>
            </label>
        </section>
        
        
        <section>
            <label>
                <h3>Education</h3>
                <select name="Education" class="wide collectorInput" required>
                    <option value="" default selected>Select Level</option>
                    <option>Some High School</option>
                    <option>High School Graduate</option>
                    <option>Some College, no degree</option>
                    <option>Associates degree</option>
                    <option>Bachelors degree</option>
                    <option>Graduate degree (Masters, Doctorate, etc.)</option>
                </select>
            </label>
        </section>
        
               
        
        <section>
            <label>
                <h3>Ethnicity</h3>
                <select name="Race" required class="wide collectorInput">
                    <option value="" default selected>Select one</option>
                    <option>American Indian/Alaskan Native</option>
                    <option>Asian/Pacific Islander</option>
                    <option>Black</option>
                    <option>White</option>
                    <option>Other/unknown</option>
                </select>
            </label>
        </section>
        
        
        <section class="radioButtons">
            <h3>Do you currently compete for a collegiate level sports team?</h3>
            <label><input name="Athlete" type="radio" value="Yes"   required/>Yes</label>
            <label><input name="Athlete" type="radio" value="No"    required/>No</label>
        </section>
        
	<!--<section class="radioButtons">
            <h3>Do you currently compete for a collegiate level sports team?</h3>
            <label><input name="Athlete" type="radio" value="Yes"   required/>Yes</label>
            <label><input name="Athlete" type="radio" value="No"    required/>No</label>
        </section>-->
 	
 <section>
            <label>
                <h3>If you answered NO to the previous question, how many hours a week do you spend exercising/ doing physical activity?</h3>
                <input name="AgeEnglish" type="text" value="" autocomplete="off" class="wide collectorInput"/>
                <!--<div class="small shim">If English is your first language please enter 0.</div>-->
            </label>
        </section>
        
       
        
        
        <section class="consent">
            <legend><h3>Informed Consent</h3></legend>
            <textarea readonly>The purpose of this study is to evaluate your ability to detect actions. In this study, you will be presented with first person videos of an actor performing a series of movements. Your job will be to try and determine the action after watching the videos. In exchange for your time you can expect to gain some understanding of the ideas currently being explored in perception and visual research. If you are completing the study via SONA-systems you will also be compensated with .5 credits. If you were recruited via a coach or athletic deparment personel based on your athletic status, you will not recieve any compensation (per NCAA compliance). The researchers do not foresee any risks to participants in this study. Your participation will be kept confidential, and the anonymous data you provide will be stored indefinitely in electronic form and will be available to the investigators and other student and faculty researchers involved in this project now and in the future. You are free to discontinue participation at any time during the study and you will still receive all applicable incentives and your data will be deleted immediately after you withdraw. This project and this consent form have been reviewed by the Institutional Review Board, which ensures research projects involoving human subjects follow federal regulations. Any questions or concerns about your rights as a rsearch participant should be directed to the Chair of the Instuituional Review Board, The Univesity of Southern Mississippi, 118 College Drive #5125, Hattiesburg, MS, 39406, 601-266-5997. If you have any questions about this research project, email hannah.masoner@usm.edu </textarea>
            <label>
                <span class="shim">Check this box if you have read, understand, 
                    and agree to the Informed Consent above.</span>
                <input type="checkbox" name="consent" required/>
            </label>
        </section>
        
        
        <section>
            <button class="collectorButton">Submit Basic Info</button>
        </section>
        
 	
    </fieldset>
</form>

<?php
    require $_PATH->get('Footer');

