<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt-A-Fluff</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
   </head> 
   <body>
        <?php include 'survey.php';?>
    
     <header>  
       <h1 id="title">Adopt-A-Fluff</h1>
       
        <div class="petsimg">         
        <img src="dog.png" alt="dog" class="dog"> 
          <img src="cat.png" alt="cat" class="cat">  
          <img src="ferret.png" alt="ferret" class="ferret">
          <img src="bunny.png" alt="bunny" class="bunny">   
        
        </div>
       <hr>
    </header>
   
       <hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container">
        
            <div class="formAboutYou">

                    <h2 class="formtitle">About You</h2>

                    <label class="petquest" for="fname">First Name</label> <!--First Name-->
                    <input type="text" name="firstname" id="fname" placeholder="Please enter your first name" value="<?php echo $fname;?>"/>
                    <span class="error">* <?php echo $fnameErr;?></span>

                    <label class="petquest" for="lname">Last Name</label> <!--Last Name-->
                    <input type="text" name="lastname" id="lname" class="form-control" placeholder="Please enter your last name" value="<?php echo $lname;?>"/>
                    <span class="error">* <?php echo $lnameErr;?></span>

                    <label class="petquest" for="birthday">Date of Birth</label>
                    <input type="date" id="birthday" name="birthday" value="<?php echo $bdate;?>">
                    <span class="error">* <?php echo $bdateErr;?></span>

                    <label class="petquest" for="gender"  value="<?php echo $gender;?>">Gender</label> <!--Gender--> <span class="error">* <?php echo $genderErr;?></span>
                    <select id="gender" name="gender">                    
                        <option disabled selected value>Please select your gender</option>  
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="nonbinary">Non-binary</option>
                        <option value="transgender">Transgender</option>
                        <option value="intersex">Intersex</option>
                        <option value="gendertext">Let me type...</option> <!-- create an if so that a free text box appears -->
                        <option value="gnoanswer">I prefer not to say</option>
                    </select>

                    <label class="petquest" for="numAdults"  value="<?php echo $numAdults;?>">How many adults over the age of 18 live in the household (including yourself)?</label><span class="error">* <?php echo $numAdultsErr;?></span>
                    <select id="numAdults" name="numAdults">                    
                        <option disabled selected value>Please select number of occupants</option>  
                        <option value="one">1, just myself</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                        <option value="four">4</option>
                        <option value="five+">5 or more</option>
                    </select>
                    
                    <p class="petquest" value="<?php echo $childrenq;?>">Are there any children in your household?</p><span class="error">* <?php echo $childrenqErr;?></span>
                    <input type="radio" id="childrenyes" name="children" value="Yes" />
                    <label for="childrenyes">Yes</label>
                    <input type="radio" id="childrenno" name="children" value="No">
                    <label for="childrenno">No</label>

                    <!-- if yes, create a drop down with number of children, then their ages-->

                    <p class="petquest" value="<?php echo $petq;?>">Are there any animals currently living in your household?</p><span class="error">* <?php echo $petqErr;?></span>
                    <input type="radio" id="animalyes" name="animal" value="Yes" />
                    <label for="animalyes">Yes</label>
                    <input type="radio" id="animalno" name="children" value="No">
                    <label for="childrenno">No</label>

                    <label  class="petquest" for="aboutuscomment">About you</label>
                    <textarea id="aboutuscomment" name="aboutuscomment" placeholder="Tell us more about yourself..." ></textarea>

            </div> <!-- "About us" form complete-->

                    
            <div class="aboutyourhome">
                <h2 class="formtitle">About Your Home</h2>

                <p class="petquest" value="<?php echo $propertyq;?>">Do you rent or own your property?</p> <span class="error">* <?php echo $propertyqErr;?></span>
                <input type="radio" id="rent" name="property" value="rent">
                <label for="rent">Rent</label>
                <input type="radio" id="own" name="property" value="own">
                <label for="own">Own</label>
                <input type="radio" id="mortgage" name="property" value="mortgage">
                <label for="mortgage">Mortgage</label>

                <p class="petquest" value="<?php echo $gardenq;?>">Does your property have a garden?</p> <span class="error">* <?php echo $gardenqErr;?></span>
                <input type="radio" id="gardenyes" name="garden" value="Yes">
                <label for="gardenyes">Yes</label>
                <input type="radio" id="gardenno" name="garden" value="No">
                <label for="gardenno">No</label>

                    
                    <p class="petquest" value="<?php echo $grdnPOrS;?>">Is your garden private or shared?</p> <span class="error">* <?php echo $grdnPOrSErr;?></span>
                        <input type="radio" id="gardenprivate" name="garden" value="Private">
                        <label for="gardenprivate">Private</label>
                        <input type="radio" id="gardenshared" name="garden" value="Shared">
                        <label for="gardenshared">Shared</label>
                        <input type="radio" id="gardenn/a" name="garden" value="n/a">
                        <label for="gardenn/a">Not Applicable</label>

                    <label class="petquest" for="gardensize" value="<?php echo $grdnSize;?>">How big is your garden?</label><span class="error">* <?php echo $grdnSizeErr;?></span> <!--Garden size-->
                    <select id="gardensize" name="gardensize">
                        <option disabled selected value>Please select the size of your garden</option>  
                        <option value="size10-">Less than 10m2</option>
                        <option value="size10-20">Between 10m2 and 20m2</option>
                        <option value="size20-30">Between 20m2 and 30m2</option>
                        <option value="size30+">More than 30m2</option>
                        <option value="gn/a">Not applicable</option>
                        </select>
                
                <label class="petquest" for="bedrooms" value="<?php echo $bedroomNum;?>">How many bedrooms do you have?</label> <span class="error">* <?php echo $bedroomNumErr;?></span>
                <select id="bedrooms" name="bedrooms">
                    <option disabled selected value>Please select the numbers of bedrooms</option>  
                    <option value="bone">1 bedroom</option>
                    <option value="btwo">2 bedrooms</option>
                    <option value="bthree">3 bedrooms</option>
                    <option value="bfour">4 bedrooms</option>
                    <option value="bfive+">5 or more bedrooms</option>    
                </select>    

                <p class="petquest" value="<?php echo $mainroad;?>">Do you live next to a main road?</p><span class="error">* <?php echo $mainroadErr;?></span>
                <input type="radio" id="mainroadyes" name="mainroad" value="Yes">
                <label for="mainroadyes">Yes</label>
                <input type="radio" id="mainroadno" name="mainroad" value="No">
                <label for="mainroadno">No</label>

            </div> <!-- "About your home" complete -->

            
            <div class="aboutyourbestfriend">

                <h2 class="formtitle">About Your Potential New Bestfriend(s)</h2>

                <p class="petquest" value="<?php echo $petsType;?>">Who will be your next bestfriend?</p><span class="error">* <?php echo $petsTypeErr;?></span>
                <span="clue">(Please select up to 2 pets)</span></p>
                <label><input name="bfriendtick" value="Puppy" type="checkbox" class="input-checkbox"/>Puppy</label>
                <label><input name="bfriendtick" value="Kitten" type="checkbox" class="input-checkbox"/>Kitten</label>
                <label><input name="bfriendtick" value="Bunny" type="checkbox" class="input-checkbox"/>Bunny</label>
                <label><input name="bfriendtick" value="Chinchilla" type="checkbox" class="input-checkbox"/>Chinchilla</label>

                <p class="petquest" value="<?php echo $adpMeet;?>">Would you like to meet them before adoption?</p> </p><span class="error">* <?php echo $adpMeetErr;?></span>
                    <input type="radio" id="adoptionyes" name="adoption" value="Yes">
                    <label for="adoption">Yes</label>
                    <input type="radio" id="adoptionno" name="adoption" value="No">
                    <label for="adoptionno">No</label>

                <p class="petquest" value="<?php echo $trait;?>">What traits are you looking for in your bestfriend?</p></p><span class="error">* <?php echo $traitErr;?></span>
                <span="clue">(Please select up to 3 traits)</span></p>
                    <label><input name="bfftrait" value="Active/Playful" type="checkbox" class="input-checkbox"/>Active/Playful</label>
                    <label><input name="bfftrait" value="Sociable" type="checkbox" class="input-checkbox"/>Sociable</label>
                    <label><input name="bfftrait" value="Potty" type="checkbox" class="input-checkbox"/>Potty Trained</label>
                    <label><input name="bfftrait" value="Kids" type="checkbox" class="input-checkbox"/>Child friendly</label>
                    <label><input name="bfftrait" value="Animalfriendly" type="checkbox" class="input-checkbox"/>Happy around other animals</label>
                    <label><input name="bfftrait" value="Lazy" type="checkbox" class="input-checkbox"/>Lazy</label>
                    <label><input name="bfftrait" value="Messy" type="checkbox" class="input-checkbox"/>Messy</label>

                    <label class="petquest" for="extradetail">Any additional information</label>
                        <textarea id="extradetail" name="extradetail" placeholder="Please provide any additional comments that could potentionally aid in your adoption process..." ></textarea>

                        <img src="adoption.png" alt="adoption" class="adoptme">
            </div><!-- "About your bestfriend" complete -->
    

            <div class="signup">
                <h3 class="formtitle">Sign up</h3>
                <p class="petquest">Please fill in the information below to view your application process</p>

                <label for="email"><b>E-mail</b></label>
                <input type="text" placeholder="Enter your email address" name="email">

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter password" name="psw">

                <label  for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat password" name="psw-repeat">
                
            

            </div>
              
    </div>  
                <div class="btn"></div>
                    <input type="submit" name="submit" value="Submit" class="submitbtn" >
                    <input type="submit" name="guestsubmit" value="Continue as a Guest" class="submitbtn" >
                </div>
 </form>         
    
  
      
   </body>

   <footer>
      <p>Author: Paula Lukasiewicz</p>
    </footer>

</html>