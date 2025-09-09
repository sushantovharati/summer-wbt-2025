<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <?php

    $fnameErr = $lnameErr = $addressErr = $cityErr = $stateErr = $zipErr = $countryErr = $phoneErr = $emailErr = $amountErr = $donarNameErr = $commentErr = "";
    $fname = $lname = $company = $address1 = $address2 = $city = $state = $zipCode = $country = $phone = $fax = $email = $donationAmount = $otherAmount = $comment = $donarName = $comment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $donarName = test_input($_POST["donarName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $donarName)) {
            $donarNameErr = "Only letters and white space allowed";
        }

        if (empty($_POST["fname"])) {
            $fnameErr = "First Name is required";
        } else {
            $fname = test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                $fnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["lname"])) {
            $lnameErr = "Last Name is required";
        } else {
            $lname = test_input($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
                $lnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["address1"])) {
            $addressErr = "Address is required";
        } else {
            $address1 = test_input($_POST["address1"]);
        }

        if (empty($_POST["city"])) {
            $cityErr = "City is required";
        } else {
            $city = test_input($_POST["city"]);
        }

        if (empty($_POST["state"])) {
            $stateErr = "State is required";
        } else {
            $state = test_input($_POST["state"]);
        }

        if (empty($_POST["zipCode"])) {
            $zipErr = "Zip Code is required";
        } else {
            $zipCode = test_input($_POST["zipCode"]);
            if (!preg_match("/^[0-9]*$/", $zipCode)) {
                $zipErr = "Only numbers allowed";
            }
        }
        $phone = test_input($_POST["phone"]);
        if (strlen($phone) > 0) {
            if (strlen($phone) != 11) {
                $phoneErr = "Phone number must be 11 digits";
            }
        } else {
            if (!preg_match("/^[0-9]*$/", $phone)) {
                $phoneErr = "Only numbers allowed";
            }
        }

        if (empty($_POST["country"])) {
            $countryErr = "Country is required";
        } else {
            $country = test_input($_POST["country"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["Amount"])) {
            $amountErr = "Donation amount is required";
        } else {
            $donationAmount = test_input($_POST["Amount"]);
        }

        $company = test_input($_POST["company"] ?? "");
        $address2 = test_input($_POST["address2"] ?? "");

        $fax = test_input($_POST["fax"] ?? "");
        $otherAmount = test_input($_POST["otherAmount"] ?? "");
        $comment = test_input($_POST["comment"] ?? "");

        if (empty($fnameErr) && empty($lnameErr) && empty($addressErr) && empty($cityErr) && empty($stateErr) && empty($zipErr) && empty($countryErr) && empty($emailErr) && empty($amountErr) && empty($donarNameErr) && empty($phoneErr)) {

            echo "<p style='color:green'>Form submitted successfully!</p>";

            $fname = $lname = $company = $address1 = $address2 = $city = $state = $zipCode = $country = $phone = $fax = $email = $donationAmount = $otherAmount = $comment = $donarName = "";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>


    <form class="form-contain" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <h2>Donor Information Form</h2>

        <div class="form-group">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" value="<?php echo $fname; ?>">
            <span class="error">* <?php echo $fnameErr; ?></span>
        </div>

        <div class="form-group">
            <label for="lname">Last Name:</label><input type="text" name="lname" value="<?php echo $lname; ?>">
            <span class="error">* <?php echo $lnameErr; ?></span>
        </div>

        <div class="form-group">
            <label for="company">Company:</label>
            <input type="text" name="company" value="<?php echo $company; ?>">
        </div>

        <div class="form-group">
            <label for="address1">Address 1:</label>
            <input type="text" name="address1" value="<?php echo $address1; ?>">
            <span class="error">* <?php echo $addressErr; ?></span>
        </div>

        <div class="form-group">
            <label for="address2">Address 1:</label>
            <input type="text" name="address2" value="<?php echo $address2; ?>">
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" value="<?php echo $city; ?>">
            <span class="error">* <?php echo $cityErr; ?></span>
        </div>

        <div class="form-group">
            <label for="state">State:</label>
            <select name="state">
                <option value="">Select</option>
                <option value="Dhaka" <?php if ($state == "Dhaka") echo "selected"; ?>>Dhaka</option>
                <option value="Khulna" <?php if ($state == "Khulna") echo "selected"; ?>>Khulna</option>
                <option value="Barishal" <?php if ($state == "Barishal") echo "selected"; ?>>Barishal</option>
            </select>
            <span class="error">* <?php echo $stateErr; ?></span>
        </div>

        <div class="form-group">
            <label for="zipcode">Zip Code:</label>
            <input type="text" name="zipCode" value="<?php echo $zipCode; ?>">
            <span class="error">* <?php echo $zipErr; ?></span>
        </div>

        <div class="form-group">
            <label for="country">Country:</label>
            <select name="country">
                <option value="">Select</option>
                <option value="Bangladesh" <?php if ($country == "Bangladesh") echo "selected"; ?>>Bangladesh</option>
                <option value="India" <?php if ($country == "India") echo "selected"; ?>>India</option>
            </select>
            <span class="error">* <?php echo $countryErr; ?></span>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>">
            <span class="error">* <?php echo $phoneErr; ?></span>
        </div>

        <div class="form-group">
            <label for="fax">Fax:</label>
            <input type="text" name="fax" value="<?php echo $fax; ?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span>
        </div>

        <div class="form-group">
            <label for="donationamount">Donation Amount:
                <br><small class="help-text">(Check a button or type in your amount)</small>
            </label>
            <input type="radio" name="Amount" value="50" <?php if ($donationAmount == "50") echo "checked"; ?>>$50
            <input type="radio" name="Amount" value="100" <?php if ($donationAmount == "100") echo "checked"; ?>>$100
            <input type="radio" name="Amount" value="250" <?php if ($donationAmount == "250") echo "checked"; ?>>$250
            <input type="radio" name="Amount" value="other" <?php if ($donationAmount == "other") echo "checked"; ?>>Other
            <span class="error">* <?php echo $amountErr; ?></span>
        </div>

        <div class="form-group">
            <label for="">Other Amount:</label>
            <input type="text" name="otherAmount" value="<?php echo $otherAmount; ?>">
        </div>

        <div class="form-group">
            <label for="recurringDonation">
                Recurring Donation <br>
                <small class="help-text">(Check if yes)</small>
            </label>
            <div>
                <label class="checkbox-label">
                    <input type="checkbox" name="recurringDonation" id="recurringDonation">I am interested in giving on
                    a regular basis.
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for=""></label>
            <div>
                <label>Monthly Credit Card $ </label>
                <input class="monthlyCredit" type="number" name="money" id=""> <label> For </label>
                <input class="monthlyCredit" type="number"><label> Months </label>
            </div>
        </div>

        <h2>Honorarium and Memorial Donation Information</h2>

        <div class="form-group">
            <label for="donationFor">I would like to make this donation</label>
            <div class="radio-options">
                <label class="radio-label">
                    <input type="radio" name="donationFor" value="toHonor"> To Honor
                </label> <br>
                <label class="radio-label">
                    <input type="radio" name="donationFor" value="inMemoryOf"> In Memory of
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Name </label>
            <input type="text" name="donarName" id="name">
            <span class="error"><?php echo $donarNameErr; ?></span>

        </div>

        <div class="form-group">
            <label for="acknowledgeDonation">Acknowledge Donation to</label>
            <input type="text" name="acknowledgeDonation" id="acknowledgeDonation">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
        </div>
        <div class="form-group">
            <label for="city" id="">City </label>
            <input type="text" id="city2">
        </div>

        <div class="form-group">
            <label for="state">State</label>
            <select name="state" id="state" required>
                <option selected disabled>Select a State</option>
                <option value="dhaka" required>Dhaka</option>
                <option value="khulna">khulna</option>
                <option value="barishal">Barishal</option>
                <option value="sylet">Sylet</option>
                <option value="chattogram">Chattogram</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="mymensingh">Mymensingh</option>
                <option value="rangput">Rangpur</option>
            </select>
        </div>

        <div class="form-group">
            <label for="zip">Zip </label>
            <input type="number">
        </div>

        <h2>Additional Information</h2>

        <label class="additional-info-label">Please enter your name, company or organization as you would like it to appear in our
            publications:</label>
        <div class="form-group">
            <label for="additionalInfoName">Name </label>
            <input type="text" name="name" id="additionalInfo">
        </div>

        <div class="wish-checkbox">
            <label class="wish-checkbox-label">
                <input type="checkbox" name="" id="">I would like my gift to remain anonymous.
            </label>
            <label class="wish-checkbox-label">
                <input type="checkbox">My employer offers a matching gift program. I will mail the matching
                gift
                form.
            </label>
            <label class="wish-checkbox-label">
                <input type="checkbox">Please save the cost of acknowledging this gift by not mailing a
                thank you
                letter.
            </label>
        </div>

        <div class="form-group">
            <label for="comments">
                Comments <br>
                <small class="help-text">(Please type any questions or feedback here)</small>
            </label>
            <textarea name="comment" rows="4" cols="40"><?php echo $comment; ?></textarea>
        </div>

        <div class="form-group">
            <label for="contact">How may we contact you?</label>
            <div class="checkbox-oprion">
                <label class="checkbox-label"><input type="checkbox" name="email"
                        id="contactEmail">E-mail</label><br>
                <label class="checkbox-label"><input type="checkbox" name="postalMail" id="postalMail">Postal
                    Mail</label><br>
                <label class="checkbox-label"><input type="checkbox" name="telephone"
                        id="telephone">Telephone</label><br>
                <label class="checkbox-label"><input type="checkbox" name="fax" id="fax">Fax</label><br>
            </div>
        </div>

        <label id="receive-info">I would like to receive newsletters and information about special events
            by:</label>

        <div class="form-group">
            <label></label>
            <div class="checkbox-oprion">
                <label class="checkbox-label"><input type="checkbox" name="email"
                        id="contactEmail">E-mail</label><br>
                <label class="checkbox-label"><input type="checkbox" name="postalMail" id="postalMail">Postal
                    Mail</label>
            </div>
        </div>

        <label class="checkbox-label">
            <input type="checkbox" id="volunter">I would like information about volunteering with the
        </label>

        <input type="text">

        <div class="buttonSection">
            <button class="resetBtn">Reset</button>
            <input type="submit" value="Continue">
        </div>



    </form>

</body>

</html>