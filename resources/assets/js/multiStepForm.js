
$(document).ready(function(){
    var current = 1;

    widget      = $(".step");
    btnnext     = $(".next");
    btnback     = $(".back");
    btnsubmit   = $(".submit");

    // Init buttons and UI
    widget.not(':eq(0)').hide();
    hideButtons(current);
    setProgress(current);

    // Next button click action
    btnnext.click(function(){
    if(current < widget.length){
    widget.show();
    widget.not(':eq('+(current++)+')').hide();
    setProgress(current);
    }
    hideButtons(current);
    });

    // Back button click action
    btnback.click(function(){
    if(current > 1){
    current = current - 2;
    btnnext.trigger('click');
    }
    hideButtons(current);
    })
    });

// Change progress bar action
setProgress = function(currstep){
    var tempCurrstep = currstep - 1;
    var percent = parseFloat(100 / widget.length) * tempCurrstep;
    percent = percent.toFixed();
    if(currstep == widget.length) percent = "100";
    $(".progress-bar").css("width",percent+"%").html(percent+"%");

    }

// Hide buttons according to the current step
hideButtons = function(current){
    var limit = parseInt(widget.length);

    $(".action").hide();

    if(current < limit) btnnext.show();
    if(current > 1) btnback.show();
    if (current == limit) {
    btnnext.hide();
    btnsubmit.show();
    showConfirmation()
    }
    }

function showConfirmation(){

    var valueObject = []; //a new javascript object to store the form values

    $('.surveyForm').find('input').each(function(){
    var flag = true;

    var label = $(this).siblings('label').text();
    var value = $(this).val();
    if( label.length == "" ){
    console.log(label.length);

    if( ! $(this)[0].checked ){
    flag = false;
    } else {
    label = $(this).parent().siblings('label').text();
    }

    }
    if ( flag ) {
    valueObject.push({ 'label' : label,
    'value' : value});
    }

    });



    //console.log(valueObject);
    }