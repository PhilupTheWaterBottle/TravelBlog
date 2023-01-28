function ratings(val) //Inputs stars for whatever rating a user leaves in comment section 
{   
    
    rate = document.getElementById("shining")
    blank = ""
    star = document.createTextNode(blank)
    while(rate.hasChildNodes())
    {
        rate.removeChild(rate.firstChild)
    }

    if (val == 5)
    {
        stars = " \u2b50 \u2b50 \u2b50 \u2b50 \u2b50"
        blank = stars
        star = document.createTextNode(blank)
        console.log(star)
        rate.appendChild(star)
    }

    if (val == 4)
    {
        stars = "\u2b50 \u2b50 \u2b50 \u2b50"
        blank = stars
        star = document.createTextNode(blank)
        console.log(star)
        rate.appendChild(star)
    }

    if (val == 3)
    {
        stars = "\u2b50 \u2b50 \u2b50"
        blank = stars
        star = document.createTextNode(blank)
        console.log(star)
        rate.appendChild(star)
    }

    if (val == 2)
    {
        stars = "\u2b50 \u2b50"
        blank = stars
        star = document.createTextNode(blank)
        console.log(star)
        rate.appendChild(star)
    }
    
    if(val == 1)
    {
        stars = "\u2b50"
        blank = stars
        star = document.createTextNode(blank)
        console.log(star)
        rate.appendChild(star)
    }
}
function validate() //Validates that a name was actually entered
{
    names = document.getElementById("name").value
    if(names == null || names=="" || names ==" ")
        {
            alert("Please enter a name!")
            return false
        }

    if (names>=0 || names<=0)
    {
        alert("Name may only contain letters!!!")
        return false
    }
}

function PR() // Allows for mobile navigation gives access to sites about Puerto Rico 
{   
    home = document.getElementById("Homelink").style.display = "none"
    pr = document.getElementById("PrButton").style.display = "none"
    dr = document.getElementById("DrButton").style.display = "none"
    china = document.getElementById("ChinaButton").style.display = "none"
    work = document.getElementById("Worklink").style.display = "none"

    backButton = document.getElementById("back").style.display = "inline-block"
    Prlink1 = document.getElementById("PrMobile").style.display = "inline-block"
    Prlink2 = document.getElementById("PrMobile2").style.display = "inline-block"
    Prlink3 = document.getElementById("PrMobile3").style.display = "inline-block"
}

function DR() // Allows for mobile navigation gives access to sites about Dominican Republic 
{   
    home = document.getElementById("Homelink").style.display = "none"
    pr = document.getElementById("PrButton").style.display = "none"
    dr = document.getElementById("DrButton").style.display = "none"
    china = document.getElementById("ChinaButton").style.display = "none"
    work = document.getElementById("Worklink").style.display = "none"

    backButton = document.getElementById("back").style.display = "inline-block"
    Drlink1 = document.getElementById("DrMobile").style.display = "inline-block"
    Drlink2 = document.getElementById("DrMobile2").style.display = "inline-block"
    Drlink3 = document.getElementById("DrMobile3").style.display = "inline-block"
}

function Ch() // Allows for mobile navigation gives access to sites about China
{   
    home = document.getElementById("Homelink").style.display = "none"
    pr = document.getElementById("PrButton").style.display = "none"
    dr = document.getElementById("DrButton").style.display = "none"
    china = document.getElementById("ChinaButton").style.display = "none"
    work = document.getElementById("Worklink").style.display = "none"

    backButton = document.getElementById("back").style.display = "inline-block"
    Chlink1 = document.getElementById("ChinaMobile").style.display = "inline-block"
    Chlink2 = document.getElementById("ChinaMobile2").style.display = "inline-block"
    Chlink3 = document.getElementById("ChinaMobile3").style.display = "inline-block"
}

function Back() // Allows for mobile navigation gives access to the regular mobile navigation  
{
    home = document.getElementById("Homelink").style.display = "inline-block"
    pr = document.getElementById("PrButton").style.display = "inline-block"
    dr = document.getElementById("DrButton").style.display = "inline-block"
    china = document.getElementById("ChinaButton").style.display = "inline-block"
    work = document.getElementById("Worklink").style.display = "inline-block"

    backButton = document.getElementById("back").style.display = "none"

    Prlink1 = document.getElementById("PrMobile").style.display = "none"
    Prlink2 = document.getElementById("PrMobile2").style.display = "none"
    Prlink3 = document.getElementById("PrMobile3").style.display = "none"

    Drlink1 = document.getElementById("DrMobile").style.display = "none"
    Drlink2 = document.getElementById("DrMobile2").style.display = "none"
    Drlink3 = document.getElementById("DrMobile3").style.display = "none"

    Chlink1 = document.getElementById("ChinaMobile").style.display = "none"
    Chlink2 = document.getElementById("ChinaMobile2").style.display = "none"
    Chlink3 = document.getElementById("ChinaMobile3").style.display = "none"

}

function darkness() //Allows for dark mode
{
    body = document.body
    body.classList.toggle("darkmode")

}
