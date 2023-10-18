-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 15, 2023 at 06:38 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u389444621_rawasymain`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name_admin`, `email`, `password`, `profile`, `created_at`) VALUES
(1, 'Admin', 'admin@rawasy.com', '$2y$10$5ntzIpbTO9A9fSLWwraMl.E/Qx0zCXtX.5BlIMRLrKkdt5E2Uc56u', '643a810c6e985.jpg', '2022-12-28 11:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `service` text NOT NULL,
  `phone` text NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `calendar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `service`, `phone`, `gender`, `calendar`) VALUES
(1, 'Ahmed karem', 'ak5464235@gmail.com', 'test', '01207807796', 'male', '2023-04-13'),
(2, 'Ahmed karem', 'ak5464235@gmail.com', 'test', '01207807796', 'male', '2023-04-13'),
(3, 'Ahmed karem', 'ak5464235@gmail.com', 'Dental Implants\r\nTreatment', '01128120374', 'male', '2023-04-13'),
(5, 'masoodbangi', 'admin@smart.com', 'Skin Care', '+120202222', 'male', '2023-04-15'),
(6, 'masoodbangi', 'admin@smart.com', 'Skin Care', '+120202222', 'male', '2023-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `image`, `date`, `description`) VALUES
(3, 'WHAT IS A DERMATOLOGIST?', '6437c2b156cc7.jpg', '2023-04-13', 'The skin is an incredible organ. It is your first line of defense against disease, protects your other organs, warms you up and cools you down, and sends messages about how healthy you are inside. Dermatologists are expert medical doctors and skin surgeons with the unique skills and experience to offer the best care for the organ that cares for you.\r\n\r\nWhat does a dermatologist do?\r\nA board-certified dermatologist has extensive training, which allows them to accurately diagnose and properly treat more than 3,000 diseases of the skin, hair, and nails as well as cosmetic concerns.\r\n\r\nIf you were to watch a dermatologist at work on any given day, you might see them:\r\n\r\nTreat a baby’s prominent birthmark that threatens the child’s eyesight.\r\n\r\nRemove a mother’s deadly melanoma at its earliest, most treatable stage.\r\n\r\nOffer relief for a student whose chronic eczema makes sleep nearly impossible.\r\n\r\nDiagnose the life-threatening liver condition causing a grandfather’s unbearable itching.\r\n\r\nTreat the hair loss of a young woman, helping her gain the confidence to search for a job.\r\n\r\nYour dermatologist knows the difference between something small and something major.\r\n\r\nDermatologists also understand that a skin condition can have a serious impact on your health and well-being. Sometimes, a skin condition is a sign of a serious underlying health issue, and your dermatologist may be the first one to notice it. For example, signs of diabetes and heart disease can show up on the skin.\r\n\r\nYour dermatologist knows that a skin condition doesn’t have to be life-threatening to reduce a person’s quality of life. A skin condition can cause sleep loss, poor self-image, serious depression, or lost productivity. Eczema (aka atopic dermatitis), hair loss that causes scarring, and psoriasis are some conditions that can do this.\r\n\r\nLearn more about dermatologists and the life-changing care they provide to their patients'),
(4, 'Let’s talk skin tags!', '643bdf1af1fea.png', '2023-04-16', 'To most people they may seem like tiny, insignificant blemishes that appear on their bodies but don’t cause them any bother or affect their daily lives.  \r\n\r\nHowever for some they can make them feel self conscious, and it can affect their confidence and self esteem. \r\n\r\nThey can come in different shapes, sizes and shades, and here at Skin Care Clinics our experienced, professional practitioners can provide a service the help remove them. We use Electrolysis which is where a probe or small needle is used to cauterise the tag using a small amount of Thermolysis (heat).\r\n\r\nDepending on the size and location of the skin tag there are different methods used to safely and effectively remove the blemish.\r\n\r\n\r\nInsertion – this is typically used on smaller skin tags that lay flatter to the skin and do not have a ‘neck’. This method involes making multiple tiny insertions on the skin tag in a grid like pattern, the heat causes that tag to become dehydrated and can feel like a scab also known as a micro crust. This could fall off straight away however it can take 2-4 weeks  to heal. Once healed there shouldn’t be any marks left on the area. \r\n\r\nJacket – this is typically used on very small skin tags that are not flat or those that are near a delicate area such as the eye. This involves holding the needle at the base of the tag for a few seconds the lifting it up and away from the normal skin. Once again is could fall off straight away however it can take 2-4 weeks  to heal. Once healed there shouldn’t be any marks left on the area. \r\n\r\nCutting – this is typically used on the bigger skin tags, these can also be known a polyps, they often are more round in shape and are attached to the normal skin by a ‘neck’. This involves lifting the tag using tweezers, exposing the neck. the probe would then be used in a plucking or picking motion to separate the tag from the normal skin. depending on the size of the tag, and the thickness of its attachment to the normal skin, this may need to be done over a few sessions to avoid discomfort or damaging the skin. We recommend allowing 2-4 weeks in between sessions to allow for the healing process to be completed. With large tags, there may be a small ‘footprint’ on the skin once it has healed. \r\n\r\na combination of the Jacket or Cutting methods can also be used with insertion too. this would usually be used on large skin tags where the main body has been removed using Jacket or Cutting but a small section remains that needs to be ‘dehydrated’ using the insertion method, this will then fall off naturally. \r\n\r\nYour practitioner will assess the tag and skin prior to commencing treatment to decide the relevant method for your skin tag.'),
(5, 'Laser hair removal', '643bdf75ec2e3.jpg', '2023-04-16', 'Laser hair removal is the most efficient way of dealing with unwanted facial and body hair which makes it one of the most popular treatments in the beauty industry. We are going to answer some of the most common questions that our clinicians get asked by patients during their first visit.  \r\n\r\nHow does laser hair removal work? \r\n\r\n-The laser light targets the melanin (pigment) in the hair and the energy emitted by this action produces heat that cauterises the follicles. The damage caused to the follicle delays and eventually inhibits future growth since the follicle is where the life of the hair starts from.  \r\n\r\nIs there any laser type suitable for blonde or white hairs? Why is laser hair removal not effective on blonde or white hairs?  \r\n\r\n-Blonde, white and red hair cannot be treated with any type of laser. These types of hair lack melanin therefore they are unsuitable for laser hair removal treatment since it’s the pigment that absorbs the laser light.  \r\n\r\nIs there a hair removal method to permanently remove white or blonde hairs?  \r\n\r\n-Yes, there is! Electrolysis is the only permanent hair removal method to remove white or blonde hairs from the face and the body. During electrolysis your clinician uses a fine probe to insert the hair follicle under the surface of the skin. Through that probe there is electric current transmitted to the bottom of the follicle and the heat produced by this process permanently damages the hair. This prevents new hair from growing and causes the existing hair to fall out, leaving the skin smooth and hair-free.  \r\n\r\nHow many treatments do I need and why? \r\n\r\n-We recommend 8-12 sessions followed by annual maintenance top ups. The reason for this number of treatments being required is due to the hair growth cycle and the way it works. The hair grows in three different stages and laser effectively targets 30-40% of your hair in each session. It can take approximately 4-6 weeks to go through the whole cycle and this is when you are ready to go ahead with your next treatment.  \r\n\r\n\r\nHow do I prep my skin for my laser hair removal treatment? \r\n\r\n As preparation for your treatment your clinician will ask you to do the following: \r\n\r\n-to shave the treatment area(s) 24 hours prior \r\n\r\n-your skin must be free from products such as makeup, deodorants, perfumes, lotions, fake tan etc. The best way to ensure that the skin is ready for treatment is by taking a shower before arriving to your appointment.  \r\n\r\n-no sun exposure 2 weeks before your treatment  \r\n\r\n-use SPF30 if area is exposed to sunlight \r\n\r\n-tight clothing or accessories best to be avoided  \r\n\r\nWhy do I need a consultation and patch test before proceeding to my laser hair removal treatments?\r\n\r\n-During the consultation and patch test you have the opportunity to have a chat with your clinician who will explain the treatment process, answer questions you might have, and you will also get to know and feel comfortable with each other. Keeping your skin safe is also our top priority therefore carrying out a patch test ensures that your skin is suitable for the treatment and helps your clinician determine the right settings for your skin type and hair.  \r\n\r\nCan I wax/pluck or thread in between my laser sessions? \r\n\r\nAny hair removal method that removes the hair from the follicle is prohibited throughout your laser course. For laser hair removal to be effective the follicle needs to contain the hair therefore we recommend our patients to stop waxing, plucking or threading 3-4 weeks before their appointment. Shaving is the only hair removal method recommended throughout the laser hair removal course. \r\n\r\nCan ND:Yag laser treat all skin types? \r\n\r\n-ND:Yag laser can effectively and safely treat all skin types, including Fitzpatric 6(tanned). ND:Yag laser technology has longer wavelength(1064nm) in comparison to other lasers and a weaker melanin absorption rate making it possible for our highly trained skin experts to create personalised treatment plans to suit the needs of your hair and skin.  \r\n\r\nWhy do I need to inform my laser hair removal specialist about any medication that I might be taking? \r\n\r\n-It is very important to inform your clinician of any medication that you might have been prescribed by your doctor. Certain medication may cause photosensitivity (sensitivity to the light) which can affect your skin’s thickness and tolerance. As a result, this might lead to potential skin reactions that will disrupt your course of treatments.  \r\n\r\nIs laser hair removal affordable?  \r\n\r\n-At Skin Care Clinics we offer smart city centre locations, highly experienced clinicians and latest technology equipment at the most affordable prices. Get in touch and ask us about our packages, discount vouchers and exclusive offers today!  \r\n\r\nWritten By Aglaia Sounti '),
(6, 'K', '6476013aad474.php', '2023-05-30', 'K');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'Ahmed karem', 'ak54@gmail.com', '01207807796', 'test', 'Can Sparkling Water Damage your Teeth like Soda Does?\r\n'),
(2, 'Ahmed karem', 'ak5464235@gmail.com', '01128120374', 'Cyber security service', 'wwwwwwwww'),
(3, 'Ahmed karem', 'ak5464235@gmail.com', '01128120374', 'Cyber security service', 'nnnnnn'),
(4, 'Ahmed karem', 'ak5464235@gmail.com', '01128120374', 'Cyber security service', 'nnnnnn'),
(5, 'GeorgeClamp', 'no.reply.DirkRichard@gmail.com', '87783733223', 'An innovative method of email distribution.', 'What’s up? rawasymedicalcentreflr8.com \r\n \r\nDid you know that it is possible to send commercial offer perfectly lawfully? We offer a legal way of sending business proposals through feedback forms. You can find these feedback forms on lots of sites. \r\nWhen such business offers are sent, no personal data is employed, and messages are dispatched to forms specifically created to securely and safely receive messages and appeals. Messages through Feedback Forms are highly unlikely to be labeled as spam, since they are deemed important. \r\nWe give you the chance to sample our service without any cost. \r\nWe shall send up to 50,000 messages for you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.'),
(6, 'Mike Lawman\r\n', 'no-replysl@gmail.com', '82971846625', 'Improve local visibility for rawasymedicalcentreflr8.com', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Lawman\r\n \r\n \r\nPS: Want an all in one Local Plan that includes everything? \r\nhttps://www.speed-seo.net/product/local-seo-package/'),
(7, 'Mike Ryder\r\n', 'no-replysl@gmail.com', '83635374989', 'AI Monthly SEO plans', 'Howdy \r\n \r\nI have just verified your SEO on  rawasymedicalcentreflr8.com for  the current search visibility and saw that your website could use a push. \r\n \r\nWe will improve your ranks organically and safely, using state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nRegards \r\nMike Ryder\r\n'),
(8, 'Gary Wilson', 'gw2920339@gmail.com', '84797424688', 'Business opportunity', 'Good day, \r\n \r\nI am reaching out to express my interest in a potential business opportunity that worth $26.8 Million. \r\nThis would be of a great benefit to both parties if handled well. \r\n \r\nPlease get back to me through this email: Gw455075@gmail.com \r\n \r\nThanks, \r\n \r\nGary Wilson'),
(9, 'Mike Webster\r\n', 'no-replysl@gmail.com', '82462892193', 'Semrush Audit and fixes for rawasymedicalcentreflr8.com', 'Hi \r\n \r\nI have just took a look on your  rawasymedicalcentreflr8.com for onsite errors and saw that your website has a handful of issues which should be addressed. \r\n \r\nNo matter what you are offering or selling, having a poor optimized site, full of bugs and errors, will never help your ranks. \r\n \r\nLet us fix your wordpress site errors today and get your ranks reach their full potential \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/product/wordpress-seo-audit-and-fix-service/ \r\n \r\n \r\nRegards \r\nMike Webster\r\n'),
(10, 'Mike Oakman\r\n', 'no-replysl@gmail.com', '86237958745', 'NEW: Semrush Backlinks', 'Greetings \r\n \r\nThis is Mike Oakman\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your rawasymedicalcentreflr8.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Oakman\r\n \r\nmike@strictlydigital.net'),
(11, 'Mike Johnson\r\n', 'no-replysl@gmail.com', '88664939496', 'Domain Authority of your rawasymedicalcentreflr8.com', 'Hi there \r\n \r\nJust checked your rawasymedicalcentreflr8.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 months time. This will increase the organic visibility and strengthen your website authority, thus getting it stronger against G updates as well. \r\n \r\nFor more information, please check our offers \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Semrush DA is now possible \r\nhttps://www.monkeydigital.co/semrush-da/ \r\n \r\nThanks and regards \r\nMike Johnson\r\n'),
(12, 'Mike Edwards\r\n', 'no-replysl@gmail.com', '89388916216', 'Improve local visibility for rawasymedicalcentreflr8.com', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Edwards\r\n \r\n \r\nPS: Want an all in one Local Plan that includes everything? \r\nhttps://www.speed-seo.net/product/local-seo-package/'),
(13, 'Mike Fane\r\n', 'no-replysl@gmail.com', '88854752842', 'AI Monthly SEO plans', 'Hello \r\n \r\nI have just checked  rawasymedicalcentreflr8.com for the ranking keywords and saw that your website could use a push. \r\n \r\nWe will enhance your ranks organically and safely, using state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nRegards \r\nMike Fane\r\n'),
(14, 'Mike Wilson\r\n', 'no-replysl@gmail.com', '88268657426', 'Semrush Audit and fixes for rawasymedicalcentreflr8.com', 'Hi \r\n \r\nI have just verified your  rawasymedicalcentreflr8.com for the current onsite SEO status and saw that your website has a handful of issues which should be addressed. \r\n \r\nNo matter what you are offering or selling, having a poor optimized site, full of bugs and errors, will never help your ranks. \r\n \r\nLet us fix your wordpress site errors today and get your ranks reach their full potential \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/product/wordpress-seo-audit-and-fix-service/ \r\n \r\n \r\nRegards \r\nMike Wilson\r\n'),
(15, 'Mike Samuels\r\n', 'no-replysl@gmail.com', '88543435729', 'NEW: Semrush Backlinks', 'Howdy \r\n \r\nThis is Mike Samuels\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your rawasymedicalcentreflr8.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Samuels\r\n \r\nmike@strictlydigital.net'),
(16, 'Mike Wallace\r\n', 'no-replysl@gmail.com', '87557797171', 'Domain Authority of your rawasymedicalcentreflr8.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\nThanks and regards \r\nMike Wallace\r\n'),
(17, 'Mike Oakman\r\n', 'no-replysl@gmail.com', '89257855939', 'Improve local visibility for rawasymedicalcentreflr8.com', 'If you are looking to rank your local business on Google Maps in a specific area, this service is for you. \r\n \r\nGoogle Map Stacking is a highly effective technique for ranking your GMB within a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Oakman\r\n \r\n \r\nPS: Want a comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/'),
(18, 'Josephfab', 'no.reply.GeorgeAndre@gmail.com', '86195486934', 'We make sure that your emails are delivered.', 'Hey! rawasymedicalcentreflr8.com \r\n \r\nDid you know that it is possible to send request absolutely lawful? We sell a new method of sending appeals through contact forms. Such feedback forms can be found on a lot of webpages. \r\nWhen such business proposals are sent, no personal data is used, and messages are securely sent to forms specifically designed to receive them. The significance of messages sent through Communication Forms ensures that they do not end up in spam folders. \r\nWe are inviting you to take advantage of our service without any charge. \r\nWe shall deliver up to 50,000 messages to you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.'),
(19, 'Jessieexhaw', 'yasen.krasen.13+97308@mail.ru', '85448573673', 'Moodwihfieokdwji jiwkdowjfeiufgijdowfjweu hifejfiwqjhfoedjakdijeoif hiwjd', 'Ufieuhdidhefh wjdwdjqwidjwefhwfakj oijofqwfbvsdfjfwej ijwqiofjewuhfwedjawdhewh ouhwidwjpouweiofeiouqwruio ioqwiwuifewifjfifhw jiwfjiewhfewgiewufewio rawasymedicalcentreflr8.com'),
(20, 'Mike Andrews\r\n', 'mikeliva@gmail.com', '89398325845', 'Boost the social traffic of the rawasymedicalcentreflr8.com', 'Hi there \r\n \r\nTarget any country or language in the world. Traffic is the vital component of any online business, as without it, your sales and cash flow will be minimal. Our solutions will boost web traffic to your web presence, giving you more visibility.  \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/product/country-targeted-traffic/ \r\n \r\nThank you \r\nMike Andrews\r\n \r\nDigital X Press SEO Agency'),
(21, 'Mike Calhoun\r\n', 'mikesl@gmail.com', '84278531932', 'NEW: Semrush Backlinks', 'Howdy \r\n \r\nThis is Mike Calhoun\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your rawasymedicalcentreflr8.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Calhoun\r\n \r\nmike@strictlydigital.net'),
(22, 'Martin Jose Barreiro', 'barreiromartin36@gmail.com', '82462155833', 'Capital Business Funding', 'Hello \r\nMy name is Br.Martin Jose Barreiro, I am a Lawyer and I pratices here in Madrid Spain.  I have previously sent you an email regarding a transaction of US$13.5 Million left behind by my late client before his tragic death. \r\nHowever I am reaching out to you once again because after going through your profile, I strongly believe that you will be in a better position to execute this business transaction with me. \r\nI suggest after the transaction, we donate 5% of the money to charity organizations while the remaining 95% is shared equally between us. \r\nIf you are interested to proceed with me, kindly respond to me via this email  legalmj@barieroabogados.com for more detail. \r\nThis transaction is 100% risk free and I look forward to your response. \r\nYours sincerely \r\nMartin Jose Barreiro,, \r\nLawyer \r\nPhone: +34 661 220 756 \r\nE-mail:  legalmj@barieroabogados.com \r\nWeb:  http://www.barreiroabogado.com/'),
(23, 'Davidascef', 'dana.a@live.se', '88223366469', 'Secure 12600 BTC Today', 'Get 12600 BTC Instantly http://speedy12600gains.eddybautista.xyz/bitcoinrushersnow'),
(24, 'Williamdiamn', 'fitchiest2001@yahoo.ca', '87627555435', 'Take your brand to the next level with our elite service', 'TAKE YOUR BRAND TO THE NEXT LEVEL WITH OUR ELITE SERVICE http://elite-service-299.neterverse.online/page-2'),
(25, 'Mike Shorter\r\n', 'mikePitlertCheella@gmail.com', '88221764235', 'Improve local visibility for rawasymedicalcentreflr8.com', 'If you are looking to rank your local business on Google Maps in a specific area, this service is for you. \r\n \r\nGoogle Map Stacking is a highly effective technique for ranking your GMB within a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Shorter\r\n \r\n \r\nPS: Want a comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/'),
(26, 'Bradleysic', 'kelli.cantlin@gmail.com', '86637347564', 'ATTRACT OVER 23000 CUSTOMERS TO YOUR BUSINESS IN DAYS', 'YOU CAN ATTRACT OVER 23,000 CUSTOMERS TO YOUR BUSINESS IN A FEW DAYS http://elite-service-422.vivercomtranquilidade.online/personal-page'),
(27, 'Williamsex', 'baajohnericnimery@yahoo.ca', '88213359592', 'Exclusive SEO Backlink Pyramid for Boost Your SERP Ranking', 'Exclusive SEO Backlink Pyramid http://seo-387.758phe.com/invite'),
(28, 'Mike Palmer\r\n', 'mikeJefsorce@gmail.com', '83965487167', 'FREE fast ranks for rawasymedicalcentreflr8.com', 'Hi there \r\n \r\nJust checked your rawasymedicalcentreflr8.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\n \r\nRegards \r\nMike Palmer\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/'),
(29, 'Gregoryopive', 'enquiries@dcaccounting.com.au', '88552719464', 'Invest and get $20,000', 'INVEST AND GET $20,000 http://earn-invest-819.duniassh.com/personal'),
(30, 'RobertInimi', 'alfredegov@gmail.com', '85898691661', 'Aloha, i am wrote about your   price', 'Sveiki, es gribēju zināt savu cenu.'),
(31, 'JefferyGobre', 'kelmongi@si.cgocable.ca', '82257444283', 'ELITE GUEST POSTING SERVICE FOR YOUR WEBSITE rawasymedicalcentreflr8.com', 'Premium guest posting service for your website rawasymedicalcentreflr8.com http://elite-guest-posting-service-185.byartelier.xyz/invite'),
(32, 'Mike Fulton\r\n', 'mikesl@gmail.com', '87689817143', 'NEW: Semrush Backlinks', 'Hi \r\n \r\nThis is Mike Fulton\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your rawasymedicalcentreflr8.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Fulton\r\n \r\nmike@strictlydigital.net'),
(33, 'Mike Bosworth\r\n', 'mikeJefsorce@gmail.com', '86382379247', 'Domain Authority of your rawasymedicalcentreflr8.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\nThanks and regards \r\nMike Bosworth\r\n'),
(34, 'GregoryStymn', 'howtoearninurdu@outlook.com', '89763142453', 'Passive income on ChatGPT from $1000 per day without skills and experience', 'A quick way to make money on AI from $1000 per day http://passive-income-4131.janoub-hightech.com/exclusive'),
(35, 'Mike Pearcy\r\n', 'mikePitlertCheella@gmail.com', '88915462545', 'Improve local visibility for rawasymedicalcentreflr8.com', 'If you are looking to rank your local business on Google Maps in a specific area, this service is for you. \r\n \r\nGoogle Map Stacking is a highly effective technique for ranking your GMB within a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Pearcy\r\n \r\n \r\nPS: Want a comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/'),
(36, 'Mike Baker\r\n', 'mikeJefsorce@gmail.com', '84428637169', 'FREE fast ranks for rawasymedicalcentreflr8.com', 'Hi there \r\n \r\nJust checked your rawasymedicalcentreflr8.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\n \r\nRegards \r\nMike Baker\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/'),
(37, 'Armandhaist', 'wienguido@outlook.de', '81985265331', 'How A Grandmother Earned $100000 From Forex', 'Learn To Earn $100,000 a Week http://forex-4312.myparisevents.com/invite'),
(38, 'Charlesfus', 'dale.draper@hotmail.com', '83913229796', 'YOUR WEEKLY EARNINGS $100,000', 'Take your weekly earnings of $100,000 right now http://forex-7642.lovepid.com/exclusive'),
(39, 'Brown De-cole', 'pinnpidaa@gmail.com', '88846275221', 'Private business discussion', 'Hello, \r\n \r\nI wish to have a private business discussion that involves millions with you and this would be of a great benefit to both parties if handled well. \r\n \r\nKindly response with your phone number for more details. \r\n \r\nThanks, \r\n \r\nBrown De-cole \r\nEmail: pinnpidaa@gmail.com'),
(40, 'Mike Williams\r\n', 'peterliva@gmail.com', '84291627839', 'Whitehat SEO for rawasymedicalcentreflr8.com', 'Hi \r\n \r\nI have just took an in depth look on your  rawasymedicalcentreflr8.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will enhance your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Williams\r\nDigital X SEO Experts'),
(41, 'Dennisfet', 'jhonny357@alice.it', '89719682384', 'ARCHIVAL PRIVATE PHOTOS OF NAKED KIM KARDASHIAN - 34 PHOTOS', 'Unpublished private photos of naked Kim Kardashian - 34 photos http://kim-kardashian-naked-91822.omtogelprediksi.com/site'),
(42, 'PhilInimi', 'draikkimr976@gmail.com', '86715349222', 'Aloha, i write about     prices', 'Hallo, ek wou jou prys ken.'),
(43, 'RaymondGot', 'singy@bluewin.ch', '81395224729', 'GET CRYPTOCURRENCY OUT OF THIN AIR UP TO $900 PER DAY', 'Make cryptocurrency out of thin air up to $900 per day https://xn--80aaprck3adqc9c.xn--p1ai/bitrix/redirect.php?event1=click_to_call&event2=&event3=&goto=https%3A%2F%2Fseoshopbacklinks.sell.app%2Fproduct%2Fcheat-code-how-to-generate-cryptocurrency-out-of-thin-air-up-to-900-per-day-without-investment-spending-5-minutes-per-day-on-work%3F0'),
(44, 'Brianunsag', 'tomasmorgan9309@binace.com', '87258685264', 'The owner of the site is rawasymedicalcentreflr8.com. In 364 days you earned $24,365, withdraw it urgently', 'Hello. \r\nYou registered with us exactly 364 days ago, but for some reason you never logged into your account again. \r\nYour account has already accumulated $24,365 - withdraw it urgently. Since tomorrow all inactive accounts will be deleted along with all the money earned. \r\nThere was no way we could contact you, so we had to contact you through the contact form of your website rawasymedicalcentreflr8.com the address of which you left when registering in our system. \r\nHere is the link to your account - http://your-payout-61711.psilocybintech.com/new'),
(45, 'Mike Addington\r\n', 'mikeJefsorce@gmail.com', '81485228881', 'Domain Authority of your rawasymedicalcentreflr8.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\nThanks and regards \r\nMike Addington\r\n'),
(46, 'Mike Walker\r\n', 'mikesl@gmail.com', '85585217723', 'NEW: Semrush Backlinks', 'Hi \r\n \r\nThis is Mike Walker\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your rawasymedicalcentreflr8.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Walker\r\n \r\nmike@strictlydigital.net'),
(47, 'Jamesionit', 'dontreplay@gmail.com', '85752351312', 'מעוניין לשפר את הביצועים של האתר שלך?', 'ראיתי את האתר שלך ואהבתי מאוד, אשמח להציע לך לבדוק ולראות ללא עלות כיצד שירותי האחסון שלנו משפרים משמעותית את הביצועים באתר שלך. \r\nמוזמנים להתרשם ולנסות בחינם: \r\nhttps://bit.ly/3EKcrK4'),
(48, 'PhilInimi', 'draikkimr976@gmail.com', '89318248415', 'Hello    wrote about your   prices', 'Ողջույն, ես ուզում էի իմանալ ձեր գինը.'),
(49, 'Mike Michaelson\r\n', 'mikePitlertCheella@gmail.com', '89218419575', 'Improve local visibility for rawasymedicalcentreflr8.com', 'If you are looking to rank your local business on Google Maps in a specific area, this service is for you. \r\n \r\nGoogle Map Stacking is a highly effective technique for ranking your GMB within a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Michaelson\r\n \r\n \r\nPS: Want a comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/'),
(50, 'Mike Stephen\r\n', 'mikeJefsorce@gmail.com', '87341334372', 'FREE fast ranks for rawasymedicalcentreflr8.com', 'Hi there \r\n \r\nJust checked your rawasymedicalcentreflr8.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\n \r\nRegards \r\nMike Stephen\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/'),
(51, 'Albertduppy', 'rakeshagarwal880@gmail.com', '88499715111', 'PERSONAL MESSAGE! STABLE INCOME OF EXACTLY $1000 PER DAY ON CRYPTOCURRENCY', 'ATTENTION! SEMI-PASSIVE EARNINGS OF EXACTLY $1000 PER DAY USING CRYPTOCURRENCY http://get-719735.apbet998.com/click'),
(52, 'Mike Nash\r\n', 'mikeJefsorce@gmail.com', '81189942696', 'Domain Authority of your rawasymedicalcentreflr8.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\nThanks and regards \r\nMike Nash\r\n'),
(53, 'PedroNix', 'janen@bluewin.ch', '87224411491', 'DIE KRYPTO-KI, DIE IHNEN 1000 EURO TAGLICH VERDIENT', 'Starten Sie Ihr 1000-Euro-Tageseinkommen mit Kryptowahrung und KI http://eur-612981.reditunion.com/app'),
(54, 'Georgenut', 'jesumaryamalathas24@gmail.com', '81239133939', 'JOIN THE RANKS OF SUCCESSFUL EARNERS - $1000 PER DAY GUARANTEED', 'INVEST IN YOUR FINANCIAL WELL-BEING WITH $1000 PER DAY - GUARANTEED http://secret-318634.mechguides.com/trade'),
(55, 'Mike Wayne\r\n', 'peterliva@gmail.com', '84229326456', 'Whitehat SEO for rawasymedicalcentreflr8.com', 'Hello \r\n \r\nI have just verified your SEO on  rawasymedicalcentreflr8.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Wayne\r\nDigital X SEO Experts'),
(56, 'Jim Koss', 'koss.sheldon@gmail.com', '9620772124', 'Dear rawasymedicalcentreflr8.com Admin.', 'Hi there,\r\nMonthly Seo Services - Professional/ Affordable Seo Services\r\nHire the leading seo marketing company and get your website ranked on search engines. Are you looking to rank your website on search engines? Contact us now to get started - https://digitalpromax.co/la/  Today!\r\n\r\nPsst.. we will also do web design and build complete website. Wordpress and Ecommerce sites development. Click here: https://wpexpertspro.co/website/'),
(57, 'Mike Carter\r\n', 'mikesl@gmail.com', '84324713889', 'NEW: Semrush Backlinks', 'Hello \r\n \r\nThis is Mike Carter\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your rawasymedicalcentreflr8.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Carter\r\n \r\nmike@strictlydigital.net');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `image`) VALUES
(1, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `job` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `image`, `job`) VALUES
(3, 'Masood Khan', '6437c1325e6b1.jpg', 'MSc Dermatology');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image`) VALUES
(3, 'skincare', '643bc26d27ca5.webp'),
(4, 'Laser Treatment ', '643bc27e0f5ab.jpg'),
(5, 'botox injection', '643bc286ec706.jpg'),
(6, 'Depigmentation face', '643bc29614adc.jpg'),
(7, 'slimming For Face', '643bc2a468e5a.jpg'),
(8, 'Hyarepair', '643bc2b1258cd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`) VALUES
(4, 'Laser Treatment ', 'Laser resurfacing uses lasers to reduce the appearance of wrinkles and scars, even out skin coloring (pigmentation), tighten skin and remove lesions, both benign (non-cancerous) and malignant.'),
(5, 'filler', 'Injectable filler is a soft tissue filler injected into the skin at different depths to help fill in facial wrinkles, provide facial volume, and augment facial features: restoring a smoother appearance. Most of these wrinkle fillers are temporary because they are eventually absorbed by the body.');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `keywords` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `phonesur` text DEFAULT NULL,
  `insta` text DEFAULT NULL,
  `face` text DEFAULT NULL,
  `linked` text DEFAULT NULL,
  `twi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `phone`, `email`, `address`, `keywords`, `author`, `country`, `description`, `logo`, `icon`, `phonesur`, `insta`, `face`, `linked`, `twi`) VALUES
(1, 'Rawasy 8f loor Clinic', '61110787', 'Allureclinickwt@gmail.com', 'Rawasy Medical center, 13-25 Abdulla Ibn Salam St, Kuwait, Kuwait City, Kuwait', 'Derma Clinic ', 'SmartTarget', '0', 'Test Description', '643519e98b30f.png', '643519e98b5a9.png', '96550046462', 'insta.com', 'snap.com', 'youtube.com', 'tic.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
