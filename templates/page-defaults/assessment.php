<?php
//$_SESSION['vwovar'] = '';
if (!empty($_POST))
{
    //If form validates using pristine.js, save the from data to the session and forward to the next page.
    $_SESSION['assessment'] = serialize($_POST);
    $_SESSION['customerEmail'] = $_POST['customer_email'];
    header('Location: /checkout/order.php' . $querystring);
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php template("includes/header"); ?>
        <title>5G Male | Assessment</title>

        <style>
            body {
                font-family: 'Open Sans', arial, sans-serif;
            }

            h1 {
                font-size:32px;
                font-weight: bold;
            }
            .form-group {
                margin-bottom: 2rem;
            }
            .radio {
                margin-bottom: 0.5rem;
            }
            label span {
                margin-bottom: 0.5rem;
                font-weight: bold;
            }
            button {
                cursor: pointer;
                transition: all 200ms ease-in-out;
            }
        </style>

    </head>

    <body>
        <div class="flex justify-center mt-5">
        <h1 class="text-2xl font-semibold text-center" style="letter-spacing: -1px;">Answer These Questions To Qualify For This Discount Now</h1>
        </div>
        <div class="step-one container-vsl mx-auto py-8" style="max-width: 455px">
            <div class="content px-5">
                    <div class="">
                        <form id="assessmentForm" method="POST">
                            <div class="form-group">
                                <h4 class="mb-2 font-semibold">1. How old are you?</h4>
                                <div class="radio ml-6" >
                                    <label class="radio" for="18-24">
                                        <input type="radio" name="age" value="18-24" id="18-24"> 18-24
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="25-34">
                                        <input type="radio" name="age" value="25-34" id="25-34"> 25-34
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="35-44">
                                        <input type="radio" name="age" value="35-44" id="35-44"> 35-44
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="45-54">
                                        <input type="radio" name="age" value="45-54" id="45-54"> 45-54
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="55-64">
                                        <input type="radio" name="age" value="55-64" id="55-64"> 55-64
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="65+">
                                        <input type="radio" name="age" value="65" id="65+"> 65+
                                    </label>
                                </div>

                            </div>
                            <div class="form-group">
                                <h4 class="mb-2 font-semibold">2. How many times are you having sex per week now?</h4>
                                <div class="radio ml-6" >
                                    <label class="radio" for="nosex">
                                        <input type="radio" name="weeklysex" value="nosex" id="nosex"> No sex now
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="1-3">
                                        <input type="radio" name="weeklysex" value="1-3" id="1-3"> 1-3 Times
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="3-5">
                                        <input type="radio" name="weeklysex" value="3-6" id="3-5"> 3-6 Times
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="7+">
                                        <input type="radio" name="weeklysex" value="7+" id="7+"> 7 or more times
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 class="mb-2 font-semibold">3. How long do you ideally want to stay hard for?</h4>
                                <div class="radio ml-6" >
                                    <label class="radio" for="0-30m">
                                        <input type="radio" name="stayhard" value="0-30m" id="0-30m"> 0 to 30 minutes
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="30-60m">
                                        <input type="radio" name="stayhard" value="30-60m" id="30-60m"> 30 to 60 minutes
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="1-2h">
                                        <input type="radio" name="stayhard" value="1-2h" id="1-2h"> 1 - 2 hours
                                    </label>
                                </div>
                                <div class="radio ml-6" >
                                    <label class="radio" for="2h+">
                                        <input type="radio" name="stayhard" value="2h+" id="2h+"> Over 2 hours
                                    </label>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="block">
                                    <h4 class="font-semibold">4.Email Address</h4>
                                    <input
                                        type="email"
                                        name="customer_email"
                                        required
                                        value=""
                                        id="customer_email"
                                        class="form-control mt-1 px-3 py-2 border shadow-sm border-slate-300 rounded-none placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                        placeholder="firstlast@email.com" />
                                </label>
                            </div>
                            <!-- // was input -->
                            <button
                                id="submitButton"
                                type="submit" name="submit" value="Next Step"
                                class="border border-green-500 bg-green-500 text-white rounded-none px-4 py-2 m-2
                                select-none hover:bg-green-600 focus:outline-none focus:shadow-outline"
                            >
                                Next Step
                            </button>
                        </form>
                    </div>

            </div>
        </div>

        <script type="text/javascript">
            window.onload = function () {

                var form = document.getElementById("assessmentForm");
                var pristine = new Pristine(form);

                form.addEventListener('submit', function (e) {
                    var valid = pristine.validate(); // returns true or false

                    if(!pristine.validate()){
                      e.preventDefault();
                    }

                    var age = document.querySelector('input[name="age"]:checked').value;
                    var weeklysex = document.querySelector('input[name="weeklysex"]:checked').value;
                    var stayhard = document.querySelector('input[name="stayhard"]:checked').value;
                    //sessionStorage.setItem("customer_email", $(this).val());
                });
            };
        </script>

        <?php if ($site['debug'] == true) {
            // Show Debug bar only on whitelisted domains.
            template('debug', null, null, 'debug');
        } ?>
    </body>
</html>