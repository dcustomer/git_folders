<section class="admContent" id="admContent">
    <div class="sideNav" id="sideNav">
        <div class="leftDiv" id="leftDiv">
            <p>cities</p>
            <a href="index.php?pagename=admSide&admPagename=addCity">add city</a>    
            <a href="index.php?pagename=admSide&admPagename=allCities">all cities</a>    
        </div>

        <div class="leftDiv" id="leftDiv">
            <p>pharmacies</p>
            <a href="index.php?pagename=admSide&admPagename=addPharmacy">add pharmacy</a>    
            <a href="index.php?pagename=admSide&admPagename=allPharmacies">all pharmacies</a>    
        </div>

    </div>
    <div class="admMainDiv" id="admMainDiv">
        <div class="admHeader" id="admHeader">
            <p>welcome <?php echo $_SESSION['userLogin']; ?></p>
            <p><a href="index.php?pagename=logout">log out</a></p>
        </div>
