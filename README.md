## Overview

Sms Alert Codeigniter Library for sending transactional/promotional SMS, through your custom code. Easy to integrate, you just need to write 2 lines of code to send SMS.

## Parameters Details
### If you have no account on smsalert.co.in, kindly register https://www.smsalert.co.in/

* username : SMS Alert User Name

* password : SMS Alert current Password

* mobileno : single or multiple mobile numbers (separated by comma)

* text : Message Content to be sent

* senderid : Receiver will see this as sender's ID(for demo account use DEMOOO)


## Usage
change below variables in SMS Alert library:

$this->username = "Smsalert username";
$this->password = "Smsalert password";
$this->senderID = "Smsalert senderid";

### Now, in your controller function, where you wish to send an SMS/text message, add below code:
	
//send single sms
if($this->smsalert->send("97xxxxxx23", "Welcome to SmsAlert!")) {
/* SMS Sent */
}

//send multiple sms
if($this->smsalert->send("97xxxxxx23, 97xxxxxx22", "Hi friends! Welcome to SmsAlert!")) {
/* SMS Sent */
}

//schedule sms
if($this->smsalert->send("97xxxxxx23", "Hi! Happy Birthday!", "2019-09-03 23:59:59")) {
/* SMS Scheduled */
}

## Support 
Email :  support@cozyvision.com
Phone :  080-1055-1055
