<?php
include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
    
<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>
<?php
include('form.php');
$frm=new formBuilder;      
?> 
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<h3>Payment</h3>
			<form action="bank.php" method="post" id="form1">
				<div class="col-md-4 col-md-offset-4" style="margin-bottom:50px">
					<div class="form-group">
						<label class="control-label">Name on Card</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label class="control-label">Card Number</label>
						<input type="text" class="form-control" name="number" required title="Enter 16 digit card number">
					</div>      
					<div class="form-group">
						<label class="control-label">Expiration date (MM/YYYY)</label>
						<input type="month" class="form-control" name="exp_date">
					</div>
					<div class="form-group">
						<label class="control-label">CVV</label>
						<input type="text" class="form-control" name="cvv">
					</div>
					<div class="form-group">
						<button class="btn btn-success">Make Payment</button>
					</div>
				</div>
			</form>
		</div>
		<div class="clear"></div>	
	</div>
</div>
<?php include('footer.php');?>

<?php
session_start();
extract($_POST);
include('config.php');
$_SESSION['screen']=$screen;
$_SESSION['seats']=$seats;
$_SESSION['amount']=$amount;
$_SESSION['date']=$date;
$number = $_POST['number'];
$number = isset($_POST['number']) ? $_POST['number'] : '';
header('location:bank.php');
?>

<script>
$(document).ready(function() {
    $('#form1').bootstrapValidator({
        fields: { 
            name: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The Name is required and can\'t be empty'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z ]+$/,
                        message: 'The Name can only consist of alphabets'
                    }
                }
            },
            number: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The Card Number is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 16,
                        max: 16,
                        message: 'The Card Number must 16 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid Card Number'
                    },
                    callback: {
                        message: 'Invalid Visa card number',
                        callback: function(value, validator, $field) {
                            return isVisaCardValid(value);
                        }
                    }
                }
            },
            exp_date: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The Expire Date is required and can\'t be empty'
                    },
                    callback: {
                        message: 'Expiration date must be in the future',
                        callback: function(value, validator, $field) {
                            return isFutureDate(value);
                        }
                    }
                }
            },
            cvv: {
                verbose: false,
                validators: {
                    notEmpty: {
                        message: 'The cvv is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 3,
                        message: 'The cvv must 3 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid cvv'
                    }
                }
            }
        }
    });
});

function isVisaCardValid(cardNumber) {
    // Remove any non-numeric characters
    cardNumber = cardNumber.replace(/\D/g, '');
    
    // Check if the card number has exactly 16 digits
    if (cardNumber.length !== 16) {
        return false;
    }
    
    // Check if it starts with 4 (Visa card starts with 4)
    if (cardNumber.charAt(0) !== '4') {
        return false;
    }
    
    // Use Luhn algorithm to validate the card number
    var sum = 0;
    var doubleUp = false;
    for (var i = cardNumber.length - 1; i >= 0; i--) {
        var digit = parseInt(cardNumber.charAt(i));
        if (doubleUp) {
            digit *= 2;
            if (digit > 9) {
                digit -= 9;
            }
        }
        sum += digit;
        doubleUp = !doubleUp;
    }
    return sum % 10 === 0;
}

function isFutureDate(expDate) {
    var currentDate = new Date();
    var enteredDate = new Date(expDate);
    
    // Compare years and months
    var currentYear = currentDate.getFullYear();
    var currentMonth = currentDate.getMonth() + 1; // January is 0
    
    var enteredYear = parseInt(expDate.split('-')[0]);
    var enteredMonth = parseInt(expDate.split('-')[1]);
    
    if (enteredYear < currentYear || (enteredYear === currentYear && enteredMonth <= currentMonth)) {
        return false; // Expiration date is in the past or current month
    }
    
    return true;
}
</script>
