<?php exit(0); ?> { 
"settings":
{
	"data_settings" : 
	{
		"save_database" : 
		{
			"database" : "",
			"is_present" : false,
			"password" : "",
			"port" : 3306,
			"server" : "",
			"tablename" : "",
			"username" : ""
		},
		"save_file" : 
		{
			"filename" : "form-results.csv",
			"is_present" : false
		},
		"save_sqlite" : 
		{
			"database" : "fairytalecontactform-101714.dat",
			"is_present" : false,
			"tablename" : "fairytalecontactform-101714"
		}
	},
	"email_settings" : 
	{
		"auto_response_message" : 
		{
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body style=\"background-color: #f9f9f9; padding-left: 110px; padding-top: 70px; padding-right: 20px; max-width: 700px; font-family: Helvetica, Arial;\">\n<style type=\"text/css\">\nbody {background-color: #f9f9f9;padding-left: 110px;padding-top: 70px; padding-right: 20px;max-width:700px;font-family: Helvetica, Arial;}\np{font-size: 12px; color: #666666;}\nh2{font-size: 28px !important;color: #666666 ! important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\ntable{width:80%;}\ntd {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:100px; padding-right:5px;}\na:link {color:#666666; text-decoration:underline;} a:visited {color:#666666; text-decoration:none;} a:hover {color:#00A2FF;}\nb{font-weight: bold;}\n</style>\n<h2 style=\"font-size: 28px !important;color: #666666 ! important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;\">Thanks for taking the time to fill out the form. <br/>Here's a copy of what you submitted:</h2>\n<div>\n[_form_results_]\n</div>\n</body>\n</html>\n",
				"is_from_red" : false,
				"is_present" : true,
				"key" : "custom-code(4)",
				"subject" : "Thank you for your submission"
			},
			"from" : "sales@fairytaletentsandevents.com",
			"is_present" : true,
			"to" : "[email6]"
		},
		"notification_message" : 
		{
			"bcc" : "",
			"cc" : "",
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body style=\"background-color: #f9f9f9; padding-left: 110px; padding-top: 70px; padding-right: 20px; max-width: 700px; font-family: Helvetica, Arial;\">\n<style type=\"text/css\">\nbody {background-color: #f9f9f9;padding-left: 110px;padding-top: 70px; padding-right: 20px;max-width:700px;font-family: Helvetica, Arial;}\np{font-size: 12px; color: #666666;}\nh1{font-size: 60px !important;color: #cccccc !important;margin:0px;}\nh2{font-size: 28px !important;color: #666666 ! important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\ntable{width:80%;}\ntd {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:100px; padding-right:5px;}\na:link {color:#666666; text-decoration:underline;} a:visited {color:#666666; text-decoration:none;} a:hover {color:#00A2FF;}\nb{font-weight: bold;}\n</style>\n<h1 style=\"font-size: 60px !important; color: #cccccc !important; margin: 0px;\">Hey there,</h1>\n<p style=\"font-size: 12px; color: #666666;\">\nSomeone filled out your form, and here's what they said:\n</p>\n<div>\n[_form_results_]\n</body>\n</html>\n",
				"is_from_red" : false,
				"is_present" : true,
				"key" : "custom-code(8)",
				"subject" : "Somebody filled out your form!"
			},
			"from" : "test@fairytaletentsandevents.com",
			"is_present" : true,
			"replyto" : "[email6]",
			"to" : "sales@fairytaletentsandevents.com"
		}
	},
	"general_settings" : 
	{
		"colorboxautoenabled" : false,
		"colorboxautotime" : 3,
		"colorboxenabled" : false,
		"colorboxname" : "Default",
		"formname" : "",
		"is_appstore" : "0",
		"timezone" : "UTC"
	},
	"mailchimp" : 
	{
		"apiKey" : "",
		"lists" : []
	},
	"payment_settings" : 
	{
		"confirmpayment" : "<center>\n<style type=\"text/css\">\n#docContainer table {width:80%; margin-top: 5px; margin-bottom: 5px;}\n#docContainer td {text-align:right; min-width:65px; font-size: 12px !important; line-height: 20px;margin: 0px;border-bottom: 1px solid #e9e9e9; padding-right:5px;}\n#docContainer td:first-child {text-align:left; font-size: 13px !important; font-weight:bold; vertical-align:text-top; min-width:100px;}\n#docContainer th {font-size: 13px !important; font-weight:bold; vertical-align:text-top; text-align:right; padding-right:5px;}\n#docContainer th:first-child {text-align:left;}\n#docContainer tr:first-child {border-bottom-width:2px; border-bottom-style:solid;}\n#docContainer center {margin-bottom:15px;}\n#docContainer form input { margin:5px; }\n#docContainer #fb_confirm_inline { margin:5px; text-align:center;}\n#docContainer #fb_confirm_inline>center h2 { }\n#docContainer #fb_confirm_inline>center p { margin:5px; }\n#docContainer #fb_confirm_inline>center a { }\n#docContainer #fb_confirm_inline input { border:none; color:transparent; font-size:0px; background-color: transparent; background-repat: no-repeat; }\n#docContainer #fb_paypalwps { background: url('https://coffeecupimages.s3.amazonaws.com/paypal.gif');background-repeat:no-repeat; width:145px; height:42px; }\n#docContainer #fb_googlepay { background: url('https://coffeecupimages.s3.amazonaws.com/googlecheckout.gif'); background-repeat:no-repeat; width:168px; height:44px; }\n#docContainer #fb_authnet { background: url('https://coffeecupimages.s3.amazonaws.com/authnet.gif'); background-repeat:no-repeat; width:135px; height:38px; }\n#docContainer #fb_2checkout { background: url('https://coffeecupimages.s3.amazonaws.com/2co.png'); background-repeat:no-repeat; width:210px; height:44px; }\n#docContainer #fb_invoice { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email.png'); background-repeat:no-repeat; width:102px; height:31px; }\n#docContainer #fb_invoice:hover { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email_hov.png'); }\n#docContainer #fb_goback { color: inherit; }\n</style>\n[_cart_summary_]\n<h2>Almost done! </h2>\n<p>Your order will not be processed until you click the payment button below.</p>\n<a id=\"fb_goback\"href=\"?action=back\">Back to form</a></center>",
		"currencysymbol" : "$",
		"decimals" : 2,
		"fixedprice" : "000",
		"google" : 
		{
			"enabled" : false,
			"merchant_id" : "",
			"merchant_key" : ""
		},
		"invoicelabel" : "",
		"is_present" : false,
		"paymenttype" : "redirect",
		"paypal" : 
		{
			"api_password" : "",
			"api_signature" : "",
			"api_username" : "",
			"enabled" : false
		},
		"shopcurrency" : "USD",
		"usecustomsymbol" : false,
		"worldpay" : 
		{
			"enabled" : false,
			"id" : "",
			"secret" : "",
			"test_mode" : false
		}
	},
	"redirect_settings" : 
	{
		"confirmpage" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head>\n<title>Success!</title>\n<meta charset=\"utf-8\">\n<style type=\"text/css\">\nbody {background: #f9f9f9;padding-left: 110px;padding-top: 70px; padding-right: 20px;max-width:700px;font-family: Helvetica, Arial;}\ntable{width:80%;}\np{font-size: 16px;font-weight: bold;color: #666;}\nh1{font-size: 60px !important;color: #ccc !important;margin:0px;}\nh2{font-size: 28px !important;color: #666 !important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\nh3{font-size: 16px; color: #a1a1a1; border-top: 1px dotted #00A2FF; padding-top:17px; font-weight: bold;}\nh3 span{color: #ccc;}\ntd {font-size: 12px !important; line-height: 30px;  color: #666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:100px; padding-right:5px;}\na:link {color:#666; text-decoration:none;} a:visited {color:#666; text-decoration:none;} a:hover {color:#00A2FF;}\n</style>\n</head>\n<body>\n<h1>Thanks! </h1>\n<h2>The form is on its way.</h2>\n<p>Here&rsquo;s what was sent:</p>\n<div>[_form_results_]</div>\n<!-- link back to your Home Page -->\n<h3>Let&rsquo;s go <span> <a target=\"_blank\" href=\"http://www.coffeecup.com\">Back Home</a></span></h3>\n</body>\n</html>\n",
		"gotopage" : "http://fairytaletentsandevents.com/contact-thanks.php",
		"inline" : "<center>\n<style type=\"text/css\">\n#docContainer table {margin-top: 30px; margin-bottom: 30px; width:80%;}\n#docContainer td {font-size: 12px !important; line-height: 30px;color: #666666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\n#docContainer td:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:100px; padding-right:5px;}\n</style>\n[_form_results_]\n<h2>Thank you!</h2><br/>\n<p>Your form was successfully submitted. We received the information shown above.</p>\n</center>",
		"type" : "gotopage"
	},
	"uid" : "650e039fef865c609e03c6fb4f0b05f4",
	"validation_report" : "in_line"
},
"rules":{"text1":{"label":"Bride","fieldtype":"text","required":true},"text2":{"label":"Groom","fieldtype":"text","required":true},"text19":{"label":"Contact Name","fieldtype":"text","required":true},"date3":{"date":true,"label":"Wedding Date","fieldtype":"date","date_config":{"minDate":null,"maxDate":null,"dateFormat":"US_SLASHED"},"required":false},"number4":{"decimals":0,"range":{"0":0,"1":999999999,"2":1},"label":"Expected Number of Guests","fieldtype":"number","required":true},"text5":{"label":"Location (City, State)","fieldtype":"text","required":true},"checkbox20":{"checkbox":true,"number_required":1,"label":"Location Type","fieldtype":"checkbox","required":true,"values":["Private (Residential)","Venue","Public Property"]},"email6":{"email":true,"label":"Email","fieldtype":"email","required":true,"equalTo":"email6_verification","label_equal":"Confirm Email"},"tel7":{"phone":"phoneUS","label":"Phone Number","fieldtype":"tel","required":true},"typeoftent":{"checkbox":true,"number_required":0,"label":"Type of Tent","fieldtype":"checkbox","required":false,"values":["Frame Tent","Pole Tent"]},"checkbox9":{"checkbox":true,"number_required":0,"label":"Setup Surface","fieldtype":"checkbox","values":["Grass","Hard Surface (i.e. Concrete)","Unsure / Undecided"]},"tables":{"checkbox":true,"number_required":0,"label":"Tables","fieldtype":"checkbox","values":["8' Banquet (seats 8)","6' Banquet (seats 6)","60\" Round (seats 8)","72\" Round (seats 10)","Head Table","Food Service Table","Escort Table","Gift Table","Cake/Dessert Table","Sweetheart Table","DJ Table","High-top Cocktail Tables"]},"checkbox12":{"checkbox":true,"number_required":0,"label":"Chairs","fieldtype":"checkbox","values":["Chiavari","White Padded Garden","Standard White Folding","Standard Grey Folding"]},"checkbox13":{"checkbox":true,"number_required":0,"label":"Lighting","fieldtype":"checkbox","values":["Canned (choice of colored gel insert)","Italian Globe 'café/cross'","White String 'café/cross'","Chandelier(s)","Father of the Bride Style","Perimeter Garland Strands (small tents only)","Perimeter Globe","Tent Kiting w/ Lights"]},"checkbox14":{"checkbox":true,"number_required":0,"label":"Tent Accessories (check all that apply)","fieldtype":"checkbox","required":false,"values":["Full Gathered Tent Liner","Dance Floor","Tent Kiting w/o Lights","Full Vinyl Wood Flooring","Perimeter Pole Swags","Linen Napkins","Pole Wraps","Table Linens","Tent Walls","Beverage Bar","Climate Control"]},"checkbox26":{"checkbox":true,"number_required":0,"label":"Other Options (check all that apply)","fieldtype":"checkbox","required":false,"values":["Bartender(s)","Portable Restroom(s)","Server(s)","Luxury Restroom Trailer","DOC (Day of Coordinator(s))"]},"checkbox23":{"checkbox":true,"number_required":1,"label":"How did you hear about us?","fieldtype":"checkbox","required":true,"values":["Google","The Knot","Other Search Engine","Referral","Facebook","Other","Pinterest","Weddingwire"]},"text38":{"label":"Please specify which search engine","fieldtype":"text","required":true},"text39":{"label":"Please specify who referred you","fieldtype":"text","required":true},"text40":{"label":"Please specify how you heard about Fairytales","fieldtype":"text","required":true},"textarea16":{"label":"Comments","fieldtype":"textarea","maxlength":"10000"}},
"payment_rules":{"checkbox20":{},"typeoftent":{},"checkbox9":{},"tables":{},"checkbox12":{},"checkbox13":{},"checkbox14":{},"checkbox26":{},"checkbox23":{}},
"conditional_rules":{"text38":{"element":{"name":"checkbox23","operator":"is","value":"Other Search Engine"}},"text39":{"element":{"name":"checkbox23","operator":"is","value":"Referral"}},"text40":{"element":{"name":"checkbox23","operator":"is","value":"Other"}}},
"application_version":"Web Form Builder (Windows), build 2.5.5437"
}