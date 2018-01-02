<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
            integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <title>Interest Free Credit Metal Detectors at Regton</title>
    <meta name="description" content="Interest Free Credit on all metal detectors priced over Â£200.00 at Regton Metal Detecting Specialist" />
    <meta name="robots" content="NOINDEX,NOFOLLOW" />
    <link rel="icon" href="http://regton.com/skin/frontend/default/theme246k/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://regton.com/skin/frontend/default/theme246k/favicon.ico" type="image/x-icon" />

    <link href= "style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">

        .ui-slider .ui-slider-handle {
            position: absolute;
            z-index: 2;
            width: 5.2em;
            height: 2.2em;
            cursor: default;
            margin: 0 -40px auto !important;
            text-align: center;
            line-height: 30px;
            color: #93c;
            font-size: 15px;

        }

        .ui-corner-all {
            border-radius: 20px;
        }

        .ui-widget-content {
            padding-bottom: 25px;
            border: 1px solid #bdc3c7;
            background: #e1e1e1;
            color: #222222;
            line-height: 25px;
            padding-left: auto;
        }

        .ui-widget-content .ui-state-default {
            border: 1px solid #93c;
            background: white;
        }

        .ui-slider .ui-state-hover {
            animation: shake 0.5s;
            animation-iteration-count: 1;
        }

        .ui-slider .ui-state-active {
            font-style: oblique;
            color: white;
            background: #93c; !important;
            border: 1px solid #ffffff;
        }

        .ui-slider .ui-slider-handle {
            cursor: pointer;
        }

        .ui-slider a,
        .ui-slider a:focus {
            cursor: pointer;
            outline: none;
        }

        fieldset input,.input-group-addon{
            font-weight: bold;
        }

        @keyframes shake {
            0% { transform: translate(1px); }
            10% { transform: translate(-1px); }
            20% { transform: translate(-2px); }
            30% { transform: translate(2px); }
            40% { transform: translate(3px); }
            50% { transform: translate(-3px); }
            60% { transform: translate(-2px); }
            70% { transform: translate(2px); }
            80% { transform: translate(-1px); }
            90% { transform: translate(1px); }
            100% { transform: translate(1px); }
        }
    </style>

    <script language="JavaScript" type="text/JavaScript">


        function validateForm() {
            var error_msg = "";
            var isValid = true;
            $('input,select,textarea').each(function () {
                var field_name = $(this).attr("name");
                if ($(this).data("req") === "yes") {
                    if (($(this).val() === '') && ($(this).attr("type") !== "radio")) {

                        error_msg = error_msg + $('label[id=' + field_name + ']').html()  + " can't be blank, \n";
                        mark(field_name, 'error');
                        isValid = false;
                    } else {
                        mark(field_name, 'ok');
                    }
                } else if ($(this).data("req") === "no" && $(this).val() !== '') {
                    mark(field_name, "ok")
                } else if ($(this).attr("type") === "radio") {
                    if (!$(':radio[name="'+field_name+'"]:checked').length) {
                        error_msg = error_msg + $('label[id=' + field_name + ']').html()  + " option need to be checked, \n";
                        mark(field_name, "error");
                        isValid = false;
                    } else {
                        mark(field_name, "ok");
                    }
                } else if ($(this).data("req") === "email") {

                    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    var result = re.test($(this).val());

                    if (!result) {
                        error_msg = error_msg + $('label[id=' + field_name + ']').html()  + " email is incorect, \n";
                        mark(field_name, 'error');
                        isValid = false;
                    } else {
                        mark(field_name, 'ok');
                    }

                } else if ($(this).data("req") === "tel") {

                    if (!$('input[type="tel"]').filter(function () { return !!this.value;}).length) {
                        error_msg = error_msg + $('label[id=' + field_name + ']').html()  + " at least one phone must be entered, \n";
                        mark(field_name, "error");
                        isValid = false;
                    } else {
                        if (!isNaN($(this).val())) {
                            mark(field_name, "ok");
                        } else {
                            mark(field_name, "error");
                            error_msg = error_msg + $('label[id=' + field_name + ']').html()  + " Please enter digits only, \n";
                            isValid = false;
                        }
                    }


                } else if ($(this).data("req") === "date") {

                    if ($(this).val() === '') {
                        mark(field_name, "error");
                        isValid = false;
                    } else {
                        mark(field_name, "ok");
                    }


                }
            });

            alert("Following fields need to be filled correctly: \n" + error_msg);
            return isValid;
        }

        function mark(field_name, status) {
            if (status === "error") {
                $('div[id=' + field_name + ']').removeClass('has-success has-feedback').addClass('has-error has-feedback');
                $('span[id=' + field_name + ']').removeClass('glyphicon glyphicon-ok form-control-feedback').addClass('glyphicon glyphicon-remove form-control-feedback');
                $('span[id=help_' + field_name + ']').html($(this).data('help'));
            } else {
                $('div[id=' + field_name + ']').removeClass('has-error has-feedback').addClass('has-success has-feedback');
                $('span[id=' + field_name + ']').removeClass('glyphicon glyphicon-remove form-control-feedback').addClass('glyphicon glyphicon-ok form-control-feedback');
                $('span[id=help_' + field_name + ']').html('');
            }


        }

        $(document).on('change', 'input[name="years"]', function() {
            if (parseInt($(this).val()) < 3) {
                $('#ext_address').show().find('input,textarea').each(function () {
                    $(this).attr('data-req', "yes");
                });
            } else {
                $('#ext_address').hide().find('input,textarea').each(function () {
                    $(this).attr('data-req', "no");
                });
            }
        });

        $(document).on('change', 'input[name="e_y"],input[name="r_y"]', function() {
            if (parseInt($(this).val()) < 3) {
                $('#previous_enployment').show().find('input,textarea').each(function () {
                    $(this).attr('data-req', "yes");
                });
            } else {
                $('#previous_enployment').hide().find('input,textarea').each(function () {
                    $(this).attr('data-req', "no");
                });
            }
        });

        $(document).on('change', '#ext_job', function() {
            if ($('#ext_job:checked').val() === "ext_job_yes") {
                $('#current_employment').show().find('input,textarea').each(function () {
                    $(this).attr('data-req', "yes");
                });
            } else {
                $('#current_employment').hide().find('input,textarea').each(function () {
                    $(this).attr('data-req', "no");
                });
            }
        });

        $(document).on('change', 'select[name="occupation_status"]', function() {
            $('#occupation_fields').find('input, textarea').val('');
            switch($(this).val()) {
                case "employed":
                    $('#current_employment').show().find('input,textarea').each(function () {
                        $(this).attr('data-req', "yes");
                    });
                    $('#self_employed').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });
                    $('#retired').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });
                    $('#previous_enployment').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });

                    break;
                case "self-employed":
                    $('#self_employed').show().find('input,textarea').each(function () {
                        $(this).attr('data-req', "yes");
                    });
                    $('#current_employment').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });
                    $('#retired').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });
                    $('#previous_enployment').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });

                    break;
                case "retired":
                    $('#retired').show().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });
                    $('#current_employment').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });
                    $('#self_employed').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });
                    $('#previous_enployment').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });


                    if ($('#ext_job:checked').val() === "ext_job_yes") {
                        $('#current_employment').show().find('input,textarea').each(function () {
                            $(this).attr('data-req', "yes");
                        });
                    } else {
                        $('#current_employment').hide().find('input,textarea').each(function () {
                            $(this).attr('data-req', "no");
                        });
                    }

                    break;
                default:
                    $('#current_employment').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });
                    $('#previous_enployment').hide().find('input,textarea').each(function () {
                        $(this).attr('data-req', "no");
                    });

            }



        });

        // ------------------------------------------ slider -------------------------------------
        var $initial = "1538.33";

        $(document).ready(function() {
            $("#slider").slider({
                animate: true,
                value: 10,
                min: 10,
                max: 90,
                step: 5,
                slide: function(event, ui) {
                    update(1,ui.value); //changed
                }
            });

            $("#slider2").slider({
                animate: true,
                value:2,
                min: 2,
                max: 18,
                step: 1,
                slide: function(event, ui) {
                    update(2,ui.value); //changed
                }
            });

            //Added, set initial value.
            $("#deposit").val(10);
            $("#duration").val(2);
            $("#deposit-label").text(10);
            $("#duration-label").text(2);

            update();
        });

        //changed. now with parameter
        function update(slider,val) {
            //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
            var $deposit = slider == 1?val:$("#deposit").val();
            var $length = slider == 2?val:$("#duration").val();

            function decimal(dig) {
                var result = parseFloat(Math.round(dig * 100) / 100).toFixed(2);
                var array = result.split('.');
                array[2] = result;
                return array;
            }


            $remaining = decimal($initial - ($initial * $deposit)/100);
            $deposit_amount = decimal(($initial * $deposit)/100);
            $instalments = decimal(($initial - ($initial *$deposit)/100)/$length);

            //$( "#initial" ).text("Loan: " + $initial);

            $( "#deposit" ).val($deposit);
            $( "#deposit-label" ).text("Deposit (" + $deposit + "%):");
            $( "#deposit-amount-label" ).val($deposit_amount[0]);
            $( "#deposit-amount-rest" ).text("." + $deposit_amount[1]);
            $( "#duration" ).val($length);
            $( "#duration-label" ).text("Monthly repayments (" + $length + "x):");
            $( "#instalment" ).val($instalments[2]);
            $( "#instalment-label" ).val($instalments[0]);
            $( "#instalment-rest" ).text("." + $instalments[1]);
            $( "#total" ).val($remaining[2]);
            $( "#total-rest" ).text("." + $remaining[1]);
            $( "#total-label" ).val($remaining[0]);

            $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$deposit+'% <span class="glyphicon glyphicon-chevron-right"></span></label>');
            $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$length+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
        }
        // ------------------------------------------ slider -------------------------------------

    </script>
</head>



<body>


<script language="JavaScript" type="text/JavaScript">


    function jsFunction(){
        var myselect = document.getElementById("detector");
        var price = myselect.options[myselect.selectedIndex].getAttribute("price");
        var length = parseInt(document.interestfree.paymentperiod.value);
        document.getElementById("detectorprice").value = price;
        document.getElementById("deposit").value = Math.round((price * 0.1) * 100) / 100;

        var balance = price - (price * 0.1);
        var monthly = balance / length;

        document.getElementById("balance").value = parseInt(balance);
        document.getElementById("monthlypayment").value = Math.round(monthly * 100) / 100;
        document.getElementById("total").value = price;
    }


</script>

<form name="interestfree" id="interestfree" method="post" onsubmit="return validateForm()" action="./interestfree_fdf.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-10 col-lg-offset-3 col-md-offset-2 col-sm-offset-1">
            <div class="page-title"><h1>Regton Ltd. Credit Proposal Form</h1><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        Choose your detector and fill in the form below. You will be notified within 48 hours of the decision on your application. If your application is successful, you will be sent a completed agreement for you to check over, sign and return to us in the pre-paid envelope together with the deposit if any. This proposal does not hold you to any particular detector or any contract. Written quotations can be provided on request.
                    </div>
                </div>
            </div>
            <div class="page-title"><h2> Applicant Details</h2><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" id="title"><label class="control-label" for="title" id="title">Title:</label>
                                    <select class="form-control" data-help=""  name="title" id="title" data-req="yes">
                                        <option value="" selected>please select</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                    <span id="help_title" class="help-block"></span>
                                </div>

                                <div class="form-group" id="Names"><label class="control-label" for="Names" id="Names">Name:</label>
                                    <input class="form-control" name="Names" id="Names" size="35" type="text" data-help="" data-req="yes">
                                    <span id="Names" class="" aria-hidden="true"></span>
                                    <span id="help_Names" class="help-block"></span>
                                </div>
                                <div class="form-group" id="Surname"><label class="control-label" for="Surname" id="Surname">Surname:</label>
                                    <input class="form-control" name="Surname" id="Surname" size="35" type="text" data-req="yes">
                                    <span id="Surname" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="Email"><label class="control-label" for="Email" id="Email">Email:</label>
                                    <input class="form-control" name="Email" id="Email" size="35" type="email2"  data-req="email">
                                    <span id="Email" class="" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="dob"><label class="control-label" for="dob" id="dob">Date of Birth:</label>
                                    <input class="form-control" name="dob" id="dob" size="10" type="date" placeholder="DD/MM/YYYY"  data-req="date">
                                    <span id="dob" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="marital"><label class="control-label" for="marital" id="marital">Marital Status:</label>
                                    <select class="form-control" name="marital" id="marital" data-req="yes">
                                        <option value ="" selected="selected">Please Choose</option>
                                        <option value="single">Married</option>
                                        <option value="single">Single</option>
                                        <option value="seperated">Seperated</option>
                                        <option value="divorced">Divorced</option>
                                        <option value="widowed"">Widowed</option>
                                        <option value="cohabiting">Co-habiting</option>
                                    </select>
                                </div>
                                <div class="form-group" id="dep"><label class="control-label" for="dep" id="dep">No of dependants:</label> <em> (not including spouse)</em>
                                    <select class="form-control" name="dep" id="dep" data-req="yes">
                                        <option value ="" selected="selected">Please Choose</option>
                                        <option value="0">none</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10 or more">10 or more</option>
                                    </select>
                                </div>
                                <div class="form-group" id="residental"><label class="control-label" for="residental" id="residental">Accommodation Status:</label>
                                    <select class="form-control" name="residental" id="residental" data-req="yes">
                                        <option value ="" selected="selected">Please Choose</option>
                                        <option value="buying">Buying</option>
                                        <option value="bought">Bought</option>
                                        <option value="Living with Parents">Living with Parents</option>
                                        <option value="Renting Furnished">Renting Furnished</option>
                                        <option value="Renting Unfurnished"">Renting Unfurnished</option>
                                        <option value="Renting Council">Renting Council</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-view"><h3>Current address</h3></div>
                                <div class="form-group" id="home_address1"><label class="control-label" for="home_address1" id="home_address1">Full Home Address:</label>
                                    <textarea class="form-control" name="home_address1" cols="50" rows="4" id="home_address1" data-req="yes"></textarea>
                                    <span id="home_address1" class="" aria-hidden="true"></span>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group" id="home_city1"><label class="control-label" for="home_city1" id="home_city1">City:</label>
                                            <input class="form-control" name="home_city1" id="home_city1" size="18" type="text" data-req="yes">
                                            <span id="home_city1" class="" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group" id="home_postcode1"><label class="control-label" for="home_postcode1" id="home_postcode1">Post Code:</label>
                                            <input class="form-control" name="home_postcode1" id="home_postcode1" size="8" type="text" data-req="yes">
                                            <span id="home_postcode1" class="" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="years"><label class="control-label" for="years" id="years">Time at present address:</label><label class="control-label" for="months" id="months" hidden>Time at present address:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" id="years">
                                                <input class="form-control" name="years" id="years" type="number" placeholder="years"  data-req="yes">
                                                <span id="years" class="" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" id="months">
                                                <input class="form-control" name="months" id="months" type="number" placeholder="months"  data-req="yes">
                                                <span id="months" class="" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="c_tel"><label class="control-label" for="c_tel" id="c_tel">Home Phone:</label>
                                    <input class="form-control" name="c_tel" id="c_tel" type="tel" data-req="tel">
                                    <span id="c_tel" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="c_mob"><label class="control-label" for="c_mob" id="c_mob">Mobile Phone:</label>
                                    <input class="form-control" name="c_mob" id="c_mob" type="tel" data-req="tel">
                                    <span id="c_tel" class="" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6" id="ext_address" style="display: none">
                                <div class="title-view"><h3>Previous address <a style="font-size: small"><em>(We will need for last 3 years.)</em></a></h3></div>
                                <div class="form-group" id="home_address2"><label class="control-label" for="home_address2" id="home_address2">Previous Home Address:</label>
                                    <textarea class="form-control" name="home_address2" rows="4" id="home_address2" data-req="no"></textarea>
                                    <span id="home_address2" class="" aria-hidden="true"></span>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group" id="home_city2"><label class="control-label" for="home_city2" id="home_city2">City:</label>
                                            <input class="form-control" name="home_city2" id="home_city2" type="text" data-req="no">
                                            <span id="home_city2" class="" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group" id="home_postcode2"><label class="control-label" for="home_postcode2" id="home_postcode2">Post Code:</label>
                                            <input class="form-control" name="home_postcode2" id="home_postcode2"  type="text" data-req="no">
                                            <span id="home_postcode2" class="" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="Old_years"><label class="control-label" for="Old_years" id="Old_years">Time at previous address:</label><label class="control-label" for="Old_months" id="Old_months" hidden>Time at previous address:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" id="Old_years">
                                                <input class="form-control" name="Old_years" id="Old_years" type="number" placeholder="years"  data-req="no">
                                                <span id="Old_years" class="" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" id="Old_months">
                                                <input class="form-control" name="Old_months" id="Old_months" type="number" placeholder="months"  data-req="no">
                                                <span id="Old_months" class="" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="opt-in">
                            <label class="control-label" for="opt-in" id="opt-in">All applicants must tick one of the following boxes:</label>
                            <div class="radio">
                                <label class="control-label radio-inline"><input id="opt-in" name="opt-in" value="Opt In - Data relating to all persons residing within your place of" type="radio"><strong>Opt IN</strong><em> Data relating to all persons residing within your place of residence MAY be used in conjunction with this application.</em></label>
                            </div>
                            <div class="radio">
                                <label class="control-label radio-inline"><input id="opt-in" name="opt-in" value="opt_Out" type="radio"><strong>Opt OUT</strong><em> Data relating ONLY to yourself at your place of residence MAY be used in conjunction with this application.</em></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-title"><h2>Applicant Occupation Details</h2><br>
                <div class="row" id="occupation_fields">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="form-group" id="occupation_status"><label class="control-label" for="occupation_status" id="occupation_status">Applicant Occupation Status:</label>
                            <select class="form-control" name="occupation_status" id="occupation_status" data-req="yes">
                                <option value="" selected>please select</option>
                                <option value="employed">Employed</option>
                                <option value="self-employed">Self-employed</option>
                                <option value="retired">Retired</option>
                            </select>
                        </div>
                        <div class="row">
                            <div id="retired" style="display: none">
                                <div class="title-view"><h3>About your retirment</h3></div>
                                <div class="col-md-6">
                                    <div class="form-group" id="r_y"><label class="control-label" for="r_y" id="r_y">Number of years you are retired: </label>
                                        <input class="form-control" name="r_y" id="r_y" size="3" type="number" data-req="no">
                                        <span id="r_y" class="" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="ext_job">
                                        <label class="control-label" for="ext_job" id="ext_job_label">Are you also working:</label>
                                        <div class="radio">
                                            <label class="control-label radio-inline"><input id="ext_job" name="ext_job" value="ext_job_yes" type="radio" data-req="yes"><strong>Yes</strong></label>
                                        </div>
                                        <div class="radio">
                                            <label class="control-label radio-inline"><input id="ext_job" name="ext_job" value="ext_job_no" type="radio" data-req="yes"><strong>No</strong></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" id="self_employed" style="display: none">
                                <div class="title-view"><h3>Trade information</h3></div>
                                <div class="form-group" id="se"><label class="control-label" for="se" id="se">Trade Name:</label>
                                    <input class="form-control" name="se" id="se" type="text" data-req="no">
                                    <span id="se" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="t_occ"><label class="control-label" for="t_occ" id="t_occ">Ocupation:</label>
                                    <input class="form-control" name="t_occ" id="t_occ" type="text" data-req="no">
                                    <span id="t_occ" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="t_a"><label class="control-label" for="t_a" id="t_a">Full address of the employer:</label>
                                    <textarea name="t_a" class="form-control" rows="3" id="t_a" data-req="no"></textarea>
                                    <span id="t_a" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="t_p"><label class="control-label" for="t_p" id="t_p">Post Code: </label>
                                    <input class="form-control" name="t_p" id="t_p" size="10" type="text" data-req="no">
                                    <span id="t_p" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="t_tel"><label class="control-label" for="t_tel" id="t_tel">Trade phone number: </label>
                                    <input class="form-control" name="t_tel" id="t_tel" type="text" data-req="no">
                                    <span id="t_tel" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="t_y"><label class="control-label" for="t_y" id="t_y">How long have you been doing this?</label>
                                    <input class="form-control" name="t_y" id="t_y" size="3" type="number" data-req="no">
                                    <span id="t_y" class="" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6" id="current_employment" style="display: none">
                                <div class="title-view"><h3>Current employment</h3></div>
                                <div class="form-group" id="occ"><label class="control-label" for="occ" id="occ">Job Title:</label>
                                    <input class="form-control" name="occ" id="occ" type="text" data-req="no">
                                    <span id="occ" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="e_n"><label class="control-label" for="e_n" id="e_n">Employer Name: </label>
                                    <input class="form-control" name="e_n" id="e_n" type="text" data-req="no">
                                    <span id="e_n" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="e_a"><label class="control-label" for="e_a" id="e_a">Full address of the employer:</label>
                                    <textarea name="e_a" class="form-control" rows="3" id="e_a" data-req="no"></textarea>
                                    <span id="e_a" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="e_p"><label class="control-label" for="e_p" id="e_p">Post Code: </label>
                                    <input class="form-control" name="e_p" id="e_p" size="10" type="text" data-req="no">
                                    <span id="e_p" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="e_tel"><label class="control-label" for="e_tel" id="e_tel">Employer phone Number: </label>
                                    <input class="form-control" name="e_tel" id="e_tel" type="text" data-req="no">
                                    <span id="e_tel" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="payroll"><label class="control-label" for="payroll" id="payroll">ID or Payroll number: </label>
                                    <input class="form-control" name="payroll" id="payroll" type="text" data-req="no">
                                    <span id="payroll" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="e_y"><label class="control-label" for="e_y" id="e_y">Number of years you have worked there: </label>
                                    <input class="form-control" name="e_y" id="e_y" size="3" type="number" data-req="no">
                                    <span id="e_y" class="" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6" id="previous_enployment" style="display: none">
                                <div class="title-view"><h3>Previosu emploment</h3></div>
                                <div class="form-group" id="p_occ"><label class="control-label" for="p_occ" id="p_occ">Job Title: </label>
                                    <input class="form-control" name="p_occ" id="p_occ" type="text" data-req="no">
                                    <span id="p_occ" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="p_e"><label class="control-label" for="p_e" id="p_e">Employer Name: </label>
                                    <input class="form-control" name="p_e" id="p_e" type="text" data-req="no">
                                    <span id="p_e" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="p_e_a"><label class="control-label" for="p_e_a" id="p_e_a">Full address of previous employer:</label>
                                    <textarea name="p_e_a" class="form-control" rows="3" id="p_e_a" data-req="no"></textarea>
                                    <span id="p_e_a" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="p_e_p"><label class="control-label" for="p_e_p" id="p_e_p">Post Code: </label>
                                    <input class="form-control" name="p_e_p" id="p_e_p" size="10" type="text" data-req="no">
                                    <span id="p_e_p" class="" aria-hidden="true"></span>
                                </div>
                                <div class="form-group" id="p_e_y"><label class="control-label" for="p_e_y" id="p_e_y">Years there: </label>
                                    <input class="form-control" name="p_e_y" id="p_e_y" type="number" data-req="no">
                                    <span id="p_e_y" class="" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-title"><h2>Applicant only Income</h2><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" id="income"><label class="control-label" for="income" id="income">Total Net Income applicant only:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><strong>£</strong></span>
                                        <input type="text" class="form-control" name="income" id="income" data-req="yes">
                                    </div>
                                    <span class="" id="income" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group" id="paid_lat"><label class="control-label" id="paid_lat" for="paid_lat">Monthly/Weekly Income:</label>
                                        <select class="form-control" name="paid_lat" id="paid_lat" data-req="yes">
                                            <option value="" selected>please select</option>
                                            <option value="paid weekly">paid weekly</option>
                                            <option value="paid monthly">paid monthly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="page-title"><h2>Finance obligation:</h2><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="title-view"><h3>Details about your existing Credit Cards</h3></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group" id="com"><label class="control-label" for="p_occ" id="p_occ">Company Name:</label>
                                    <input class="form-control" name="com1" id="com1" type="text" data-req="no">
                                    <input class="form-control" name="com2" id="com2" type="text" data-req="no">
                                    <input class="form-control" name="com3" id="com3" type="text" data-req="no">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" id="p_occ"><label class="control-label" for="p_occ" id="p_occ">Balance:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><strong>£</strong></span>
                                        <input class="form-control" name="com1" id="com1" type="text" data-req="no">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><strong>£</strong></span>
                                        <input class="form-control" name="com2" id="com2" type="text" data-req="no">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><strong>£</strong></span>
                                        <input class="form-control" name="com3" id="com3" type="text" data-req="no">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="title-view"><h3>Details about your existing loans</h3></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group" id="com"><label class="control-label" for="p_occ" id="p_occ">Company Name:</label>
                                    <input class="form-control" name="com1" id="com1" type="text" data-req="no">
                                    <input class="form-control" name="com2" id="com2" type="text" data-req="no">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" id="p_occ"><label class="control-label" for="p_occ" id="p_occ">Monthly payment:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><strong>£</strong></span>
                                        <input class="form-control" name="com1" id="com1" type="text" data-req="no">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><strong>£</strong></span>
                                        <input class="form-control" name="com2" id="com2" type="text" data-req="no">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" id="p_occ"><label class="control-label" for="p_occ" id="p_occ">Balance:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><strong>£</strong></span>
                                        <input class="form-control" name="com1" id="com1" type="text" data-req="no">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><strong>£</strong></span>
                                        <input class="form-control" name="com2" id="com2" type="text" data-req="no">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="title-view"><h3>Details about your existing mortgage loan</h3></div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group" id="com"><label class="control-label" for="p_occ" id="p_occ">Company Name:</label>
                                    <input class="form-control" name="com1" id="com1" type="text" data-req="no">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" id="p_occ"><label class="control-label" for="p_occ" id="p_occ">Monthly payment:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><strong>£</strong></span>
                                        <input class="form-control" name="com1" id="com1" type="text" data-req="no">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-title"><h2>Applicant only Bank Details</h2><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-6">
                            <div class="form-group" id="bank_name"><label class="control-label" for="bank_name" id="bank_name">Bank Name:</label>
                                <input class="form-control" name="bank_name" id="bank_name" type="text" data-req="yes">
                                <span class="" id="bank_name" aria-hidden="true"></span>
                            </div>
                            <div class="form-group" id="bank_ad"><label class="control-label" for="bank_ad" id="bank_ad">Branch address:</label>
                                <textarea class="form-control" name="bank_ad" cols="50" rows="4" id="bank_ad" data-req="yes"></textarea>
                                <span class="" id="bank_ad" aria-hidden="true"></span>
                            </div>
                            <div class="form-group" id="bank_pc"><label class="control-label" for="bank_pc" id="bank_pc">Post Code: </label>
                                <input class="form-control" name="bank_pc" id="bank_pc" size="10" type="text" data-req="yes">
                                <span class="" id="bank_pc" aria-hidden="true"></span>
                            </div>
                            <div class="form-group" id="account_number"><label class="control-label" for="account_number" id="account_number">Account Number: </label>
                                <input class="form-control" name="account_number" id="account_number" type="text" data-req="yes">
                                <span class="" id="account_number" aria-hidden="true"></span>
                            </div>
                            <div class="form-group" id="sort_code"><label class="control-label" for="sort_code" id="sort_code">Sort Code: </label>
                                <input class="form-control" name="sort_code" id="sort_code" type="text" data-req="yes">
                                <span class="" id="sort_code" aria-hidden="true"></span>
                            </div>
                            <div class="form-group" id="account_type"><label class="control-label" for="account_type" id="account_type">Please tell us what account type it is:</label>
                                <select class="form-control" name="account_type" id="account_type" data-req="yes">
                                    <option value="" selected>please select</option>
                                    <option value="Current Account">Current Account</option>
                                    <option value="Savings Account">Savings Account</option>
                                    <option value="Loan">Loan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-title"><h2>What metal detector would you like to buy? </h2><br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div>Regton offer 0% APR interest free credit on all metal detectors over £200.00. Interest Free Credit is not available for price match and discounted items.</div><br><br>
                        <div class="form-group" id="detector"><label class="control-label" for="detector" id="detector">Choose a Detector:</label>
                            <select class="form-control" name="detector" id="detector" onchange="jsFunction()" data-req="yes">
                                <option selected="selected" value="" selected style="display:none;">Please Choose</option>

                                <?php
                                /**
                                 * Created by PhpStorm.
                                 * User: dorota
                                 * Date: 11/12/2017
                                 * Time: 16:05
                                 */
                                /*
                                require_once('app/Mage.php'); //Path to Magento

                                umask(0);
                                Mage::app();

                                $category_id = 116;

                                $category = Mage::getModel('catalog/category')->load($category_id);
                                                $products = Mage::getResourceModel('catalog/product_collection')
                                                ->setStoreId(Mage::app()->getStore()->getId())
                                                ->addCategoryFilter($category)
                                                ->addAttributeToSelect('*')
                                                ->addAttributeToFilter('status', 1)
                                                ->setOrder('manufacturer', 'ASC');

                                                foreach ($products as $product) {
                                                    if ($manuf != $product->getAttributeText('manufacturer')) {
                                                        $manuf = $product->getAttributeText('manufacturer');
                                                        echo "<option value='' disabled>---------------- ";
                                                        print_r($manuf);
                                                        echo " ---------------</option>";
                                                    };

                                                    $price = round($product->getPrice(), 2);

                                                    echo "<option value='";
                                                    print_r($product->getSku());
                                                    echo "' price='";
                                                    print_r($price);
                                                    echo "' onclick='jsFunction()'>";
                                                    print_r($product->getName());
                                                    echo " (Â£";
                                                    print_r($price);
                                                    echo ")</option>";
                                                }
                                */
                                ?>

                            </select>
                            <span style="color:#F00" class="help-block">* if the item you would like to buy is not on the list, please give us a call at 0121 359 7975</span>
                        </div>
                        <div class="form-group" id="slider-label"><label class="control-label" for="slider-label" id="slider-label">Deposit: </label><em> (minimum 10% is required)</em>
                            <div class="col-md-10 col-md-offset-1">
                                <div id="slider"></div>
                            </div>
                            <input id="deposit" class="hidden"/>
                        </div><br><BR>
                        <div class="form-group" id="slider2-label"><label class="control-label" for="slider2-label" id="slider2-label">Length: </label><em> (minimum 2 months)</em>
                            <div class="col-md-10 col-md-offset-1">
                                <div id="slider2"></div>
                            </div>
                            <input id="duration" class="hidden"/>
                        </div><br><br>
                        <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
                        <fieldset disabled>
                            <div class="col-md-8 col-md-offset-1">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-6 control-label">Detector price:</label>
                                        <div class="col-sm-6">
                                            <div class="form-group col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><strong>£</strong></div>
                                                    <input type="text" class="form-control" id="detector_price" style="text-align: right" value="0">
                                                    <input id="detector_price_full" class="hidden" value="1000"/>
                                                    <div class="input-group-addon">.00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deposit-amount-label" id="deposit-label" class="col-sm-6 control-label">Deposit (10%):</label>
                                        <div class="col-sm-6">
                                            <div class="form-group col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><strong>£</strong></div>
                                                    <input type="text" class="form-control" id="deposit-amount-label" style="text-align: right">
                                                    <div id="deposit-amount-rest" class="input-group-addon"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="instalment-label" id="duration-label" class="col-sm-6 control-label">Monthly repayments (2x):</label>
                                        <div class="col-sm-6">
                                            <div class="form-group col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><strong>£</strong></div>
                                                    <input type="text" class="form-control" id="instalment-label" style="text-align: right">
                                                    <div class="input-group-addon" id="instalment-rest">.99</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="total-label" class="col-sm-6 control-label">Creditable Amount:</label>
                                        <div class="col-sm-6">
                                            <div class="form-group col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><strong>£</strong></div>
                                                    <input type="text" class="form-control" id="total-label" style="text-align: right">
                                                    <div class="input-group-addon" id="total-rest"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="page-title"><h2>Interest Free Credit with Regton</h2><br>
                <div class="form-group">
                    <div id="IF_before-in">
                        <label class="control-label" for="IF_before-in" id="IF_before-in">Please tell us have you had Interest Free Credit with <span style=" color:#F00">REGTON</span> before:</label>
                        <div class="radio">
                            <label class="control-label radio-inline"><input id="IF_before-in" name="IF_before-in" value="Yes_IF_Before" type="radio"><strong>Yes</strong></label>
                        </div>
                        <div class="radio">
                            <label class="control-label radio-inline"><input id="IF_before-in" name="IF_before-in" value="No_IF_Before" type="radio"><strong>No</strong></label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-offset-7">
                <p><input name="submit" id="submit" class="button form-control"  value="Submit Interest Free Credit Application" type="submit"></p>

            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <br><br>
                    <div style="text-align: center">
                        <p>F.C.A. Authorisation Regton Ltd. FRN 722902</p>
                        <p style="font-size: smaller">Copyright © Regton Ltd 2017. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
