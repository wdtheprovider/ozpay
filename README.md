# Ozow Pay - PHP Custom Payment-Method
Ozow https://ozow.com/ offers different ways to integrate their payment system into your web and mobile application to start accepting payments from your application, Ozow is very Unique because every payment made from your application, the payment goes straight into your Bank Account.

<br>
In this repo i will use PHP and MySQL to make a Custom Ozow Payment method so that other developers can re-use this script and put it into thier applications without spending a lot of time. 

<br>
<br>
What you need?<br>
Register a Merchant Account on: https://signup.ozow.com/ or Login to get the below data
<br>
<br>

*Site Code<br>
*Private Key<br>
*API Key<br>


<br>
Installation Steps <br> 

Database Creation<br>

```
CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `datePaid` date NOT NULL DEFAULT current_timestamp(),
  `transactionRef` varchar(50) NOT NULL,
  `paymentStatus` varchar(50) NOT NULL,
  `transactionId` varchar(50) NOT NULL,
  `hash` varchar(256) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `siteName` varchar(50) NOT NULL,
  `siteCode` varchar(50) NOT NULL,
  `privateKey` varchar(50) NOT NULL,
  `apiKey` varchar(50) NOT NULL,
  `countryCode` varchar(20) NOT NULL,
  `currencyCode` varchar(20) NOT NULL,
  `isTest` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

INSERT INTO `settings` (`id`, `siteName`, `siteCode`, `privateKey`, `apiKey`, `countryCode`, `currencyCode`, `isTest`) VALUES
(1, 'Store Name', 'TSTSTE0001', '215114531AFF7134A94C88CEEA48E', 'EB5758F2C3B4DF3FF4F2669D5FF5B', 'ZA', 'ZAR', '');


```

<br> 
Download/Clone the repository and edit the Config.php file for the script to work. 
<br>
Errors: If you get Error 500, that means your database is incorrect. 
<br>
RUN it.......


<br>
<br>

<span> 
  <img src="https://github.com/wdtheprovider/ozpay/img/screen_1.png" width="290" height="600">
 <img src="https://github.com/wdtheprovider/ozpay/img/screen_2.png" width="290" height="600"> 
  <img src="https://github.com/wdtheprovider/ozpay/img/screen_3.png" width="290" height="600">
</span>
