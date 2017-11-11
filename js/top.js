$(function () {
    $("#header").load("header.html");
})

$( document ).ready(function() {
    if(getUrlParameter("name")
        && getUrlParameter("lastname")
        && getUrlParameter("targetName")
        && getUrlParameter("targetLastname")
        && getUrlParameter("content")
        && getUrlParameter("endDate")){
        $("#content ul").append(' <li class="list-group-item">\n' +
            '            <div class="row">\n' +
            '                <div id="count_item'+ countPost + '" name="count_item'+ countPost +'" class="col-sm-1">0</div>\n' +
            '                <div class="col-sm-2">\n' + getUrlParameter("targetName")+ ' '+ getUrlParameter("targetLastname") +
            '                </div>\n' +
            '                <div class="col-sm-5">\n' + getUrlParameter("content") +
            '                </div>\n' +
            '                <div class="col-sm-2">\n' + getUrlParameter("endDate") +
            '                </div>\n' +
            '                <div class="col-sm-2">\n' +
            '                    <div class="row">\n' +
            '                        <div class="col-sm-6">\n' +
            '                            <button id="up_item'+ countPost +'" name="up_item'+ countPost +'" class="glyphicon glyphicon-ok" onclick="upVote(count_item'+ countPost +', this, down_item'+ countPost +')"></button>\n' +
            '                        </div>\n' +
            '                        <div class="col-sm-6">\n' +
            '                            <button id="down_item'+ countPost +'" name="down_item'+ countPost +'" class="glyphicon glyphicon-remove" onclick="downVote(count_item'+ countPost +', this, up_item'+ countPost +')"></button>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '        </li>');
        countPost ++;
    }
});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            console.log(sParameterName[1])
            return sParameterName[1] === undefined ? true : sParameterName[1].replace(/\+/g, ' ');
        }
    }
};


function upVote(ID, currentElement, downButton) {
    var theColorIs = $(currentElement).css("color");
    if(theColorIs=="rgb(51, 51, 51)") {
        $(currentElement).css('color', 'green');

        var number = parseInt($(ID).text());
        number++;
        $(ID).html(number.toString());

        $(downButton).prop('disabled', true); // disable down button

    } else if (theColorIs == "rgb(0, 128, 0)") {
        $(currentElement).css('color', "rgb(51, 51, 51)");

        var number = parseInt($(ID).text());
        number--;
        $(ID).html(number.toString());

        $(downButton).prop('disabled', false); // disable down button
    } else {
        console.log("ERROR: This statement should not be called.");
    }
}

function downVote(ID, currentElement, upButton) {
    var theColorIs = $(currentElement).css("color");
    if(theColorIs=="rgb(51, 51, 51)") {
        $(currentElement).css('color', 'red');

        var number = parseInt($(ID).text());
        number--;
        $(ID).html(number.toString());

        $(upButton).prop('disabled', true); // disable down button
    } else if (theColorIs == "rgb(255, 0, 0)") {
        $(currentElement).css('color', "rgb(51, 51, 51)");

        var number = parseInt($(ID).text());
        number++;
        $(ID).html(number.toString());
        $(upButton).prop('disabled', false); // disable down button
    } else {
        console.log("ERROR: This statement should not be called.");
    }

}

