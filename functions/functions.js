var h = screen.height;
var w = screen.width;

function getPosition(element) {
    var xPosition = 0;
    var yPosition = 0;

    while (element) {
        xPosition += (element.offsetLeft - element.scrollLeft + element.clientLeft);
        yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
        element = element.offsetParent;
    }
    return {x: xPosition, y: yPosition};
}

function validate() {
           
            var validName = document.forms['contact']['name'].value;
            if(validName == null || validName == "") {
                alert('Name must be filled out');
                return false;
            }
    
            var validEmail = document.forms['contact']['email'].value;
            if(validEmail == null || validEmail == "") {
                alert('E-Mail must be filled out');
                return false;
            }
    
            
    
            var validForm = document.forms['contact']['message'].value;
            if(validForm == null || validForm == "") {
                alert('Message must be filled out');
                return false;
            }
    
            
    
    }

$(document).ready(function () {
        
    $('.mid-header').hover(function () {
        $(this).addClass("glow");
    },
            function () {
                $(this).removeClass("glow");
            });
    $('.glow-background').hover(function () {
        $(this).animate({top: "20px"}, "fast", "linear");
        $(this).addClass("navbar-animate");
    },
            function () {
                $(this).animate({top: "0px"}, "fast", "linear");
                $(this).removeClass("navbar-animate");
            });
    
    
    
   
});