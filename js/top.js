$(function () {
    $("#header").load("header.html");
})

function upVote(ID, currentElement) {
    var theColorIs = $(currentElement).css("color");
    if(theColorIs=="rgb(51, 51, 51)") {
        $(currentElement).css('color', 'green');

        var number = parseInt($(ID).text());
        number++;
        $(ID).html(number.toString());

    } else if (theColorIs == "rgb(0, 128, 0)") {
        $(currentElement).css('color', "rgb(51, 51, 51)");

        var number = parseInt($(ID).text());
        number--;
        $(ID).html(number.toString());
    } else {
        console.log("ERROR: This statement should not be called.");
    }
}

function downVote(ID, currentElement) {
    var theColorIs = $(currentElement).css("color");
    if(theColorIs=="rgb(51, 51, 51)") {
        $(currentElement).css('color', 'red');

        var number = parseInt($(ID).text());
        number--;
        $(ID).html(number.toString());
    } else if (theColorIs == "rgb(255, 0, 0)") {
        $(currentElement).css('color', "rgb(51, 51, 51)");

        var number = parseInt($(ID).text());
        number++;
        $(ID).html(number.toString());
    } else {
        console.log("ERROR: This statement should not be called.");
    }

}

