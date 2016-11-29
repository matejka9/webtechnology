<link href="<?= base_url()?>assets/css/style-reservation-low.css" rel="stylesheet" media="only screen and (max-width: 500px)">
<link href="<?= base_url()?>assets/css/style-reservation-medium.css" rel="stylesheet" media="only screen and (min-width: 501px) and (max-width: 1000px)">
<link href="<?= base_url()?>assets/css/style-reservation-big.css" rel="stylesheet" media="only screen and (min-width: 1001px)">


<script type="text/javascript" src="<?= base_url()?>assets/bootstrap-master/js/transition.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/bootstrap-master/js/collapse.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript" src="<?= base_url()?>assets/moment/js/moment.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/bootstrap-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/bootstrap-datetimepicker-master/src/js/bootstrap-datetimepicker.js"></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>



<script type="text/javascript">

//Sizing
var headerWindowHeight= 50;
var headerWindowSpaceHeight= 25;
var footerWindowSpaceHeight= 25+ 41 + 31;

//Steping
var iteration = 0;

//Persons
var numberOfPersons = 1;

//Date and time
var datum;
var cas;

//isSmoking, nearWindow, sitAlone
var nearWindow;
var isSmoking;
var sitAlone;


//Name
var name;


//Persons
function selectetNumber(object){
  var id = object.id;
  if (!id){
    id = object.attr('id');
  }
  var cislo = -(0 - id);
  numberOfPersons = cislo;

  $(".cell").css('background-color', '#fff');
  $(".cell").css('color', '#000');

  var idcko = "#" + id;
  $(idcko).css('background-color', '#FF7856');
  $(idcko).css('color', '#fff');
}

//UI
function adaptWebPage() {
   resizeContent();
   rename();
}

//Sizing
function resizeContent(){
    var windowHeight =$(window).height();
    var soloPageHeight = windowHeight - headerWindowHeight - headerWindowSpaceHeight - footerWindowSpaceHeight ;
    var topPageHeight = windowHeight - headerWindowHeight - headerWindowSpaceHeight;
    var midPageHeight = windowHeight - headerWindowHeight ;
    var buttomPageHeight = topPageHeight;

    $('.button-slide').css({'bottom': 10});

    var width = $("#center-div").width();
    var windowWidth =$(".container").width();

    if (windowHeight < 570 || windowWidth < 300){
      $( "#datetimepicker12" ).hide();
      $( "#datetimepicker11" ).show();
    }else{
      $( "#datetimepicker11" ).hide();
      $( "#datetimepicker12" ).show();
    }
    $('#center-div').css({'left': ((windowWidth / 2) - (width / 2))});

    switch (iteration) {
      case 0:
        $('#page_1').css({'height': soloPageHeight});
        break;
      case 1:
        $('#page_1').css({'height': topPageHeight});
        $('#page_2').css({'height': buttomPageHeight});
        break;
      case 2:
        $('#page_1').css({'height': topPageHeight});
        $('#page_2').css({'height': midPageHeight});
        $('#page_3').css({'height': buttomPageHeight});
        break;
      case 3:
        $('#page_1').css({'height': topPageHeight});
        $('#page_2').css({'height': midPageHeight});
        $('#page_3').css({'height': midPageHeight});
        $('#page_4').css({'height': buttomPageHeight});
        break;
      case 4:
        $('#loading').css({'height': soloPageHeight});
        break;
      case 5:
        $('#page_5').css({'height': soloPageHeight});
      default:
        break;
    }
}

function rename(){
  renameStep();
  renameNext();
  renameBack();
}


function renameSuhrn(){
  var sprava = "Your table ";
  if (nearWindow){
     sprava += "is near window "
  }
  if(isSmoking){
    sprava += "is in smoking area "
  }
  if(sitAlone){
    sprava += "will not be shared with other customers"
  }
  if (!nearWindow && !isSmoking && !sitAlone){
    sprava = "You have not selected any additional options.";
  }

  var dstring = datum.getDate() + '.' + (datum.getMonth() + 1) + '.'   +  datum.getFullYear();
  $('#date2').text(dstring);
  $('#number2').text(numberOfPersons);
  $('#time2').text(cas);
  $('#addOpt2').text(sprava);
  $('#name2').text(name);
}

function renameStep(){
  renameObject($('#step'), (iteration + 1) + ' / 4', (iteration + 1) + ' / 4', 'Done');
}

function renameNext(){
  renameObject($('#next'), 'Next', 'Next', 'Home');
}

function renameBack(){
  renameObject($('#back'), null, 'Back', 'Delete');
}

function renameObject(object, start, during, end){
  var text;
  switch (iteration){
    case 0:
      text = start;
      break;
    case 5:
      text = end;
      break;
    default:
      text = during;
      break;
  }
  object.text(text);
}







function goBack() {
  iteration--;
  adaptWebPage();
  adaptLayout(false);
  console.log('go back');

  // document.getElementById("next").onclick = function() { return true; } 
  $("html, body").animate({ scrollTop: $(document).height() }, 700 , function() {
      // document.getElementById("next").onclick = function() { goNext()} 
  });
}

function goNext(){
  if (iteration == 5){
    window.location.href = "<?php echo site_url('home'); ?>";
    return;
  }
  if (!everythingIsGood()) return;
  iteration++;
  adaptWebPage();
  adaptLayout(true);

  if (iteration != 4) $("html, body").animate({ scrollTop: $("#h2" + iteration).offset().top - 50}, 700);
  

  
}

function everythingIsGood(){
  switch (iteration){
    case 3:
      name = $('#name').val();
      console.log(name);
      if (!name || name == "") {
        openModal('Name', 'Please write down name for reservation.');
        return false;
    }
    case 2:
      nearWindow = $("#window").is(":checked");
      isSmoking = $("#smoking").is(":checked");
      sitAlone = $("#alone").is(":checked");
      console.log(nearWindow);
      console.log(isSmoking);
      console.log(sitAlone);
    case 1:
      //Nic toto sa robi pri klikani rovno, bydefault je vybrate 1
      console.log(numberOfPersons);
    case 0:
      cas = $('#time').val();
      console.log(datum);
      console.log(cas);
      if (!cas || !datum) {
        openModal('Date and Time', 'Please select date and time for your reservation.');
        return false;
      }
    default:
      return true;
  }
  return true;
}
function adaptLayout(next){
  if (next){   
    adaptLayoutNext();
  } else {
    adaptLayoutBack();
  }
  if (iteration == 0) {
    $("#back").css('visibility', 'hidden');
  }else {
    $("#back").css('visibility', 'visible');
  }
}

function adaptLayoutNext(){
  switch (iteration) {
      case 3:
        $("#page_4").show();
        break;
      case 2:
        $("#page_3").show();
        break;
      case 1:
        $("#page_2").show();
        break;
      case 0:
        $("#page_1").show();
        $("footer").show();
        $(".box").show();
        $("#loading").hide();
        break;
      case 4:
        $("#page_1").hide();
        $("#page_2").hide();
        $("#page_3").hide();
        $("#page_5").hide();
        $("footer").hide();
        $(".box").hide();
        $("#page_4").hide();
        $("#loading").show();
        reserveTable(true);
        break;
      case 5:
        $("#loading").hide();
        $("#page_5").show();
        $(".box").show();
        $("footer").show();
        break;
      default:
        break;
    }
}

function adaptLayoutBack() {
  switch (iteration) {
      case 0:
        $("#page_2").hide();
      case 1:
        $("#page_3").hide();
      case 2:
        $("#page_4").hide();
        $("#page_1").show();
        $("footer").show();
        $(".box").show();
        $("#loading").hide();
        break;
      case 3:
        $("#page_1").show();
        $("#page_2").show();
        $("#page_3").show();
        $("footer").show();
        $(".box").show();
        $("#loading").hide();
        $("#page_4").show();
        break;
      case 4:
        $("#page_1").hide();
        $("#page_2").hide();
        $("#page_3").hide();
        $("#page_5").hide();
        $("footer").hide();
        $(".box").hide();
        $("#loading").show();
        $("#page_5").hide();
        reserveTable(false);
        break;
      default:
        break;
    }
}
//Persons
var numberOfPersons = 1;

//Date and time
var datum;
var cas;

//isSmoking, nearWindow, sitAlone
var nearWindow;
var isSmoking;
var sitAlone;


//Name
var name;

//Reservation
var reservationTableId;

function reserveTable(next){a
  var a = cas.split(':'); // split it at the colons
  var milisec = (+a[0]) * 60 * 60 * 1000 + (+a[1]) * 60 * 1000;
  renameSuhrn();
  $.ajax({
        type:"POST",
        url: next? "<?php echo base_url(); ?>index.php/reservation/rezervuj" : "<?php echo base_url(); ?>index.php/reservation/zrusRezervaciu",
        data: next? {"numberOfPersons": numberOfPersons, "datum": datum.getTime(), "cas": milisec, "nearWindow": nearWindow, "isSmoking": isSmoking, "sitAlone": sitAlone, "name" : name} : {"reservationTableId" : reservationTableId},

        success:function (data) {
          if (data){
            data = JSON.parse(data);
            console.log(data.result);
            if (data.result > 0){
              reservationTableId = +data.result;
              window.setTimeout(next? goNext : goBack, 2000);
              return;
            }
          }
        goBack();
        openModal('Sorry', 'For selected time with your requirments, we dont have any more free tables.');       
      }
    });
}

//Showing response
(function ($) {
    "use strict";
    function centerModal() {
        $(this).css('display', 'block');
        var $dialog  = $(this).find(".modal-dialog"),
        offset       = ($(window).height() - $dialog.height()) / 2,
        bottomMargin = parseInt($dialog.css('marginBottom'), 10);

        // Make sure you don't hide the top part of the modal w/ a negative margin if it's longer than the screen height, and keep the margin equal to the bottom margin of the modal
        if(offset < bottomMargin) offset = bottomMargin;
        $dialog.css("margin-top", offset);
    }

    $(document).on('show.bs.modal', '.modal', centerModal);
    $(window).on("resize", function () {
        $('.modal:visible').each(centerModal);
    });
}(jQuery));

function openModal(title, body){
  $('#exampleModal').modal();

  $('#modelTitle').text(title);
  $('#modelBody').text(body);
}
//Start up

$(function(){
  $(".nav").find(".active").removeClass("active");
  $("#reservation").parent().addClass("active");

  var date = new Date();
  date.setDate(date.getDate() + 7);

  $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
    $( "#datetimepicker12" ).datepicker({
      inline: true,
      minDate: new Date(),
      maxDate: 7,
      onSelect: function (dateText, inst) {
        datum = $(this).datepicker('getDate')
      }
    });

    $( "#datepicker" ).datepicker({
      minDate: new Date(),
      maxDate: 7,
      onSelect: function (dateText, inst) {
        datum = $(this).datepicker('getDate')
      }
    });

  $('#time').timepicker({'timeFormat' : 'HH:mm', 'minHour': 11, 'maxHour': 15});
  adaptWebPage();

  $(window).resize(function() {
    resizeContent();
  });

  selectetNumber($('#1'));

  $("html, body").animate({ scrollTop: $("#h2" + iteration).offset().top - 50}, 700);

  $('#datepicker').datepicker("setDate", new Date());
  $('#datetimepicker12').datepicker("setDate", new Date());

  datum = $( "#datepicker" ).datepicker( "getDate" );
});

</script>



<div class="reservation_page" id="page_1" style='width: 100%;text-align:center;'>
  <div>
    <h2 id="h20"class="date-header">Date and Time</h2>

    <div class="date-own-picker">
      <div class="first" id="timeBox">
        <label>Time</label>
        <input type='text' id='time' style="border-style: solid; position: relative; text-align: center;" >
      </div>
    </div>

    
    <div id="datetimepicker12"></div>

    <div id="datetimepicker11" style="displayy: none;">
      Date: <input type="text" id="datepicker" name="datepicker" style="border-style: solid; position: relative; text-align: center;"/>
    </div>
    
    
  
  </div>
</div>

<div class="reservation_page" id="page_2" style="display: none;">
  <div class="table-wraperino">
    <div>
      <h2 id="h21" style="height: 30%;">Persons </h2>
    </div>

    <table style="width: 100%; height: 70%;">
        <tr>
          <td class="cell button" onclick="selectetNumber(this)" id="1" style="text-align: center;">1</td>
          <td class="cell button" onclick="selectetNumber(this)" id="2" style="text-align: center;">2</td>
          <td class="cell button" onclick="selectetNumber(this)" id="3" style="text-align: center;">3</td>
        </tr>
        <tr>
          <td class="cell button" onclick="selectetNumber(this)" id="4" style="text-align: center;">4</td>
          <td class="cell button" onclick="selectetNumber(this)" id="5" style="text-align: center;">5</td>
          <td class="cell button" onclick="selectetNumber(this)" id="6" style="text-align: center;">6</td>
        </tr>
        <tr>
          <td class="cell button" onclick="selectetNumber(this)" id="7" style="text-align: center;">7</td>
          <td class="cell button" onclick="selectetNumber(this)" id="8" style="text-align: center;">8</td>
          <td class="cell button" onclick="selectetNumber(this)" id="9" style="text-align: center;">9</td>
        </tr>
     </table>
  </div>
</div>

<div class="reservation_page" id="page_3" style="display: none;">
  <div>
  <h2 id="h22" style="text-align:center;">Additional Options</h2>
    <table class="w3-table w3-striped w3-bordered">
          <th><label for="smoking">Smoking</label></th>
          <td><input type="checkbox" name="vehicle" value="Bike" id="smoking"><br></td>
        </tr>
        <tr>
          <th><label for="alone">Alone</label></th>
          <td><input type="checkbox" name="vehicle" value="Car" id="alone"><br></td>
        </tr>
        <tr>
          <th><label for="window">Window</label></th>
          <td><input type="checkbox" name="vehicle" value="Bike" id="window"><br></td>
        </tr>
     </table>
  </div>
</div>

<div class="reservation_page" id="page_4" style="display: none;">
  <div style="width: 70%" id="haha">
  	<h2 id="h23"> Name</h2>
    <input style="max-width:100%; width:100%; " type="text" class="form-control" id="name">
  </div>
</div>

<div class="reservation_page loading" id="loading" style="display: none;">
</div>

<div class="reservation_page" id="page_5" style="display: none;">
	<div class="wrapperino">
  <h2 style="text-align:center;" id="h25">Summary</h2>
    <table class="w3-table w3-striped w3-bordered">
        <tr>
          <th>Name</th>
          <td><label id="name2"></label></td>
        </tr>
        <tr>
          <th>Date</th>
          <td><label id="date2"></label></td>
        </tr>
        <tr>
          <th>Time</th>
          <td><label id="time2"></label></td>
        </tr>
        <tr>
          <th>Persons</th>
          <td><label id="number2"></label></td>
        </tr>
        <tr>
          <th>Additional options</th>
          <td><label id="addOpt2"></label></td>
        </tr>
     </table>
  </div>
</div>

<div class="button-slide">
  <div class="box">
  </div>

  <div class="round-div button button-nav box" onclick="goBack();" id="back" style="visibility : hidden;">  
      <span style="display: block;">
          Back
      </span>
  </div>
  
  <div class="box">
    <span style="display: block;" id="step">
          Krok
    </span>
  </div>

  <div class="round-div button right button-nav box" onclick="goNext();" id="next">
      <span style="display: block;">
          Next
      </span>
  </div>

  <div class="box">
  </div>
</div>

<div class="modal fade bdax-example-modal-sm" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="modelTitle">Modal title</h4>
      </div>
      <div class="modal-body">
        <p id="modelBody">One fine body&hellip;</p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
