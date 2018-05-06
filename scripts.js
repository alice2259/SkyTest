//    Happy slider    
    var happySlider = document.getElementById("happy");
        
    happySlider.oninput = function () {
        happyValue = this.value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                data = xmlhttp.responseText.split ( "[BRK]" );
                document.getElementById("happyValue").innerHTML = data[0];
                document.getElementById("image1").src = data[1];
                document.getElementById("title1").innerHTML = data[2];
            }
        }

        xmlhttp.open("Get", "displayProgrammesFunctions.php?mood=happy&moodValue=" + happyValue, true);
        xmlhttp.send();
    };
       
//    Calm slider
    var calmSlider = document.getElementById("calm");

    calmSlider.oninput = function () {
        calmValue = this.value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("calmValue").innerHTML = this.responseText;
            }
        }

        xmlhttp.open("Get", "displayProgrammesFunctions.php?mood=calm&moodValue=" + calmValue, true);
        xmlhttp.send();
    };
        
//    Tired slider
    var tiredSlider = document.getElementById("tired");

    tiredSlider.oninput = function () {
        tiredValue = this.value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("tiredValue").innerHTML = this.responseText;
            }
        }

        xmlhttp.open("Get", "displayProgrammesFunctions.php?mood=tired&moodValue=" + tiredValue, true);
        xmlhttp.send();
    };
        
//    Brave slider
    var braveSlider = document.getElementById("brave");

    braveSlider.oninput = function () {
        braveValue = this.value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("braveValue").innerHTML = this.responseText;
            }
        }

        xmlhttp.open("Get", "displayProgrammesFunctions.php?mood=brave&moodValue=" + braveValue, true);
        xmlhttp.send();
    };
    
