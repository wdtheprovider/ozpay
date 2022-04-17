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


CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `bankName` varchar(50) NOT NULL,
  `datePaid` date NOT NULL DEFAULT current_timestamp(),
  `bankRef` varchar(50) NOT NULL,
  `transactionRef` varchar(50) NOT NULL,
  `paymentStatus` varchar(50) NOT NULL,
  `transactionId` varchar(50) NOT NULL,
  `hash` varchar(256) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

```

<br> 
Download folder_production and put the files inside the folder into your server/application
<br>
<br>
RUN it.......
