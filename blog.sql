-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 07:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`) VALUES
(2, 'user4@gmail.com', 'Please add me as an admin');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(18, 25, 9, 'টিকা আবিষ্কারের কাহিনী', '1642363643_25klass-vaccine-jumbo.jpg', '&lt;p&gt;কলেরাঃ মন্দ বায়ু থেকে দূষিত জল&lt;/p&gt;&lt;p&gt;টিকা আবিষ্কারের কাহিনী বলতে গেলে প্রথমেই বলতে হয় জীবাণুর কথা। রোগসৃষ্টির কারণ&amp;nbsp;হিসেবে জীবাণুর অন্তর্ভুক্তিকে বলা হয় জীবাণুতত্ত্ব। জীবাণুতত্ত্বের প্রকাশ ঘটেছে খুব বেশিদিন হয়নি। মনে করা হয় লুই পাস্তুরের সময়কাল থেকে মানুষ জীবাণুর মাধ্যমে প্রাণী থেকে প্রাণীতে রোগ সঞ্চারণের বিষয়টি বুঝতে শেখে। মধ্যযুগ থেকেই মানুষের মনে একটা বদ্ধমূল ধারণা ছিল যে বিষাক্ত গ্যাস বা বাষ্প থেকে সংক্রামক রোগের উৎপত্তি ও বিস্তৃতি ঘটে। ১৮ শতক পর্যন্ত এই প্রত্যয় মানুষের মনে এমনভাবে গেঁথে গিয়েছিল যে কেউই এই কুসংস্কারের বাইরে গিয়ে সংক্রামক রোগগুলোকে বিজ্ঞানভিত্তিক উপায়ে বিচার-বিশ্লেষণ করার চেষ্টা করেনি। ম্যালেরিয়া রোগটির নামকরণও করা হয়েছিল এই নষ্ট বা দূষিত বায়ুর ধারণা থেকে; ইতালীয় ভাষায় mala অর্থ খারাপ এবং&amp;nbsp; aria অর্থ বায়ু, অর্থাৎ ম্যালেরিয়াকে খারাপ বায়ুর প্রভাবে সৃষ্ট রোগ বলে মনে করা হতো। এখন আমরা জানি, ম্যালেরিয়া হয় প্লাজমোডিয়াম গণের অন্তর্ভূক্ত কয়েক প্রজাতির পরজীবীর দ্বারা এবং সঞ্চারিত হয় অ্যানোফেলিস মশার মাধ্যমে। ম্যালেরিয়া ছাড়াও ক্লামাইডিয়া (এক প্রকার যৌন রোগ), প্লেগ, কলেরা ইত্যাদি সংক্রামক রোগগুলো মন্দ বায়ুর কারণে হয় বলে মনে করা হতো। তৎকালীন অনেক পন্ডিত ব্যক্তি ও চিকিৎসক এই ধারণাকে অমূলক বলে দাবী করেন। ব্রিটিশ চিকিৎসক জন স্নো ছিলেন তাঁদের একজন। ১৮৫৪ সালে লন্ডনের ওয়েস্টমিনস্টরের সোহোতে কলেরার প্রাদুর্ভাব দেখা দিলে বিষয়টি অনুসন্ধানের দায়িত্ব গিয়ে পড়ে জন স্নো-এর ওপরে। বিস্তারিত গবেষণা শেষে তিনি এর কারণ হিসেবে নগরীর একটি খাবার পানি সরবরাহের নলকে দায়ী করেন। তিনি নগরকর্তাকে উক্ত নলের উৎস বন্ধ করে দেয়ার অনুরোধ জানান। উৎসটি বন্ধ করে দেয়ার পর কলেরার প্রকোপও ধীরে ধীরে কমে আসতে থাকে। স্নো-এর এই গবেষণাটিই আধুনিক &lsquo;মহামারী-সংক্রান্ত বিদ্যা&rsquo; বা &lsquo;এপিডেমিওলজির&rsquo; (Epidemiology) সূচনা করেছিল বলে ধরা হয়। তাছাড়া প্রাচীন একটা কুসংস্কারকে হটিয়ে সংক্রামক রোগকে বিজ্ঞানভিত্তিক দৃষ্টিতে দেখার পথও খুলে দিয়েছিলেন তিনি। উল্লেখ্য যে ১৮৮৪ সালে প্রথম কলেরার টিকা আবিষ্কার হয়। এর আগে পর্যন্ত নাগরিক সচেতনতা ও সাবধানতাই ছিল একমাত্র প্রতিরোধমূলক ব্যবস্থা।&lt;/p&gt;&lt;p&gt;বিচক্ষণ জেনার&lt;/p&gt;&lt;p&gt;ইতিহাসের প্রথম টিকা আবিষ্কারের কৃতিত্ব দেয়া হয় ব্রিটিশ শল্য-চিকিৎসক ডা. এডওয়ার্ড জেনারকে। সতের শতকের শেষভাগে তিনি লক্ষ করেন, গো-বসন্তে আক্রান্ত গোয়ালিনীদের গুটিবসন্ত হয় না। গো-বসন্ত আর গুটিবসন্তের মধ্যে বিশেষ কোন পার্থক্য নেই। গোয়ালিনীরা যখন গাভীর দুধ দোহন করতেন তখন দুধের বাঁট থেকে ভাইরাস তাদের হাতে গিয়ে ফুসকুড়ির মতো ছোট ছোট ক্ষতের সৃষ্টি করত। তিনি চিন্তা করলেন, গোয়ালিনীরা নিশ্চয়ই তাদের শরীরে গুটিবসন্তের বিরুদ্ধে এমন এক প্রতিরোধব্যবস্থা গড়ে তুলেছে যা তাদেরকে এই ভয়ানক সংক্রমণ থেকে রক্ষা করছে। এখানে উল্লেখ করা জরুরী যে তীব্রতার দিক থেকে গো-বসন্ত গুটিবসন্তের থেকে কম শক্তিশালী। ১৭৯৬ সালে তিনি একজন গোয়ালিনীর হাতের ক্ষত থেকে গো-বসন্তের জীবাণু নিয়ে আট বছরের ছেলের দেহে প্রবেশ করান। গুটিবসন্তে বেঁচে যাওয়া কারও পরবর্তীতে আর এই রোগ হয় না- এমন কথা চীন ও ভারতবর্ষে ব্যাপকভাবে প্রচলিত ছিল। এজন্য জেনার কখনই গুটিবসন্ত হয়নি এমন একজনকে তাঁর পরীক্ষার জন্য বেছে নিয়েছিলেন। গো-বসন্তের জীবাণু ছেলেটির দেহে প্রবেশ করানোর পর ছেলেটি সামান্য অসুস্থ হয়ে পড়ে এবং দশদিনের মাথায় পুরোপুরি সুস্থ হয়ে যায়। এরও প্রায় দুই মাস পর জেনার ছেলেটির শরীরে গুটিবসন্তের শক্তিশালী জীবাণু ঢুকিয়ে দেন। তিনি বিস্ময়ের সাথে লক্ষ করেন, গুটিবসন্তের জীবাণু ছেলেটিকে সংক্রমিত করতে পারেনি। ঝুকিপূর্ণ এই পরীক্ষাটির মাধ্যমে জেনার রোগ-প্রতিরোধসম্পর্কিত তাঁর চিন্তাধারাটিকে সঠিক বলে প্রমাণ করেন। এটাই ছিল টিকার একেবারে প্রাথমিক রূপ; অর্থাৎ রোগ সৃষ্টিকারী অথচ দুর্বল একটি জীবাণু দেহে অবস্থান করলে অনুরূপ অথচ অধিক শক্তিশালী জীবাণুও সেটা দ্বারা নিষ্ক্রিয় হয়ে যায়। রোগ প্রতিরোধ ব্যবস্থা বা সম্পূর্ণ প্রক্রিয়াটি কীভাবে সংঘটিত হয় সে বিষয়ে জেনার-এর কোন ধারণা&amp;nbsp; ছিল না। শুধুমাত্র বাহ্যিক পর্যবেক্ষণের মাধ্যমে তিনি সংক্রামক রোগ প্রতিরোধের মূল যে প্রক্রিয়ার কথা বলে গিয়েছিলেন তা আজও টিকে আছে। পরে শুধু এর ব্যাখ্যা ও মানব দেহের রোগ প্রতিরোধমূলক ব্যবস্থার সাথে এর সম্পর্কটা দেখানো হয়েছে মাত্র। ইংরেজি &lsquo;ভ্যাকসিন&rsquo; শব্দটিও এসেছে গাভী ও এর সাথে সম্পর্কিত বসন্ত ভাইরাস থেকে। গোয়ালিনীর হাত থেকে পৃথকীকৃত ভাইরাসের জীবাণুসমৃদ্ধ পুঁজটিকে ভ্যাকসিন (ল্যাটিন &lsquo;vaccinus) বলা হয়েছিল; যদিও সেটা ছিল ইতালীয় ভাষায়। বিংশ শতাব্দীর ৫০ ও ৬০-এর দশকে গুটিবসন্ত টিকার বহুল ব্যবহারের পরও খোদ ভারতীয় উপমহাদেশেই প্রতি বছর বহু মানুষ মারা যেত এই রোগে। বিশ্বে গুটিবসন্তের শেষ যে মহামারীটা হয় সেটাও এই ভারতীয় উপমহাদেশে, ১৯৭৪ সালে। এই মহামারী তখন ভয়াবহ রূপ ধারণ করেছিল; আক্রান্ত হয়েছিল প্রায় এক লাখ দশ হাজার মানুষ এবং মারা গিয়েছিল বিশ হাজার মানুষ। এরপর সেখানে টিকাদানের কর্মসূচি আরও জোরদার করে প্রায় এক কোটি মানুষকে এই কর্মসূচির আওতায় আনা হয়। ১৯৮০ সালে বিশ্ব স্বাস্থ্য সংস্থা পৃথিবী থেকে গুটিবসন্ত নির্মুলের ঘোষণা দেয়।&lt;/p&gt;', 1, '2022-01-17 02:07:23'),
(19, 25, 10, 'করোনা ভাইরাসঃ এক অতিমারির অদেখা গাণিতিক রূপ।', '1642364180_চিত্র২-300x168.jpg', '&lt;p&gt;পৃথিবীর ইতিহাস যদি আমরা কালের আবর্তে পর্যালোচনা করতে থাকি তবে দেখব যে, ছোট-বড় নানা রকম মহামারিতে শুধু মানবজাতিই নয়।পশুপাখিও আক্রান্ত হয়েছে অসংখ্যবার। বড় মহামারি যেমন- জাস্টিনিয়ান প্লেগ, দ্য ব্ল্যাক ডেথ, দ্য গ্রেট প্লেগ, কলেরা, ইয়োলো ফিভার, স্প্যানিশ ফ্লু, এশিয়ান ফ্লু, ইবোলা ইত্যাদি পৃথিবী থেকে কেড়ে নিয়েছে কোটি কোটি প্রাণ। প্রত্যেকটি মহামারিই আমাদের চোখে আঙুল দিয়ে দেখিয়ে দিয়েছে,আমরা যতই সভ্য হতে সভ্যতর হই না কেন,প্রকৃতির কাছে আমরা বরাবরের মতই অসহায়।&lt;/p&gt;&lt;p&gt;প্রাচীন সভ্যতার কেন্দ্র গ্রিসে টাইফাস মহামারিতে এথেন্সের জনসংখ্যার প্রায় দুই-তৃতীয়াংশ মানুষ সে সময়টিতে মারা গিয়েছিলো। বিউবনিক প্লেগে প্রায় পাঁচ কোটি মানুষ মারা যায়, যা তৎকালীন জনসংখ্যার প্রায় ছাব্বিশ শতাংশ। ১৩৫০ খ্রিস্টাব্দে &lsquo;&lsquo;দ্য ব্ল্যাক ডেথ&rsquo;&rsquo; খ্যাত প্লেগ মহামারিতে পৃথিবীর জনসংখ্যার প্রায় এক-তৃতীয়াংশ মানুষ মৃত্যুবরণ করেছে। আবার ধারণা করা হয় ভারতীয় উপমহাদেশে কলেরার তান্ডবলীলায় ১৮১৭ খ্রিস্টাব্দ হতে ১৮২১ খ্রিস্টাব্দ অবধি প্রায় সাতাশি লক্ষ মানুষ প্রাণ হারিয়েছেন। অন্যান্য মহামারিতে মৃত্যুর পরিসংখান উল্লেখ করলে প্রবন্ধের পরিধি কেবল বাড়তেই থাকবে। তবে বাস্তবতা হলো, সেই পৌরাণিক সময় থেকে অদ্যাবধি নানা মহামারি পৃথিবী থেকে কেড়ে নিয়েছে অসংখ্য প্রাণ।&lt;/p&gt;&lt;p&gt;সাম্প্রতিক সময়ে নোভেল করোনাভাইরাসের ত্রাসে গত কয়েক মাস ধরে প্রায় সারা পৃথিবী কার্যত গৃহবন্দি। স্তব্ধ হয়ে আছে জনজীবন।এক গভীর অনিশ্চিয়তা গ্রাস করেছে পুরো পৃথিবীকে।তবুও সুদিনের আশায় থেমে নেই মানুষ। ভাইরাসটিকে জয় করতে ডাক্তার, আইন-শৃঙ্খলা বাহিনীর সদস্য,নানা রকম সেচ্ছাসেবক দলের সদস্যরা একদিকে যেমন দিন-রাত সেবা দিয়ে যাচ্ছেন,তেমনি পৃথিবীর বিভিন্ন প্রান্তের বিজ্ঞানীরাও প্রতিনিয়ত গবেষণা করে যাচ্ছেন ভাইরাস টির গতি-প্রকৃতি বুঝে ওঠার জন্য।গত বছরের ডিসেম্বরে চীনের উহান থেকে ছড়িয়ে পরা নোভেল করোনা ভাইরাসটির সম্বন্ধে গত কয়েক মাসের ব্যবধানে ইতোমধ্যেই বিভিন্ন গবেষণা পত্রও বেড়িয়েছে। এসব গবেষণার কল্যানে আমরা ভাইরাসটির চরিত্র, বৈশিষ্ট্য কিছুটা পড়েছি, জেনেছি। বিভিন্ন দেশে ভাইরাসটির প্রাদুর্ভাব কেমন, কি ধরনের ব্যবস্থা নেওয়া হচ্ছে তাও কাগজে, বৈদ্যুতিন মাধ্যমে, আন্তর্জালে, সামাজিক মাধ্যমে উঠে এসেছে। আমরা শুনছি এপিডেমিওলোজি বা মহামারির বিভিন্ন তত্ত্ব, বিভিন্ন সংজ্ঞা।&lt;/p&gt;&lt;p&gt;এপিডেমিওলোজিস্ট বা মহামারি বিশেষজ্ঞরা বিভিন্ন রকম সিমুলেশন মডেল নিয়ে কাজ করেন, কোনো মহামারির ব্যাপ্তির পূর্বাভাস দেওয়ার জন্য। সেই পূর্বাভাস থেকে পৃথিবীর বিভিন্ন দেশ মহামারিকে প্রতিরোধ করতে বিভিন্ন রকম কর্ম পরিকল্পনা গ্রহণ করে থাকেন।তবে এক্ষেত্রে দুঃখের বিষয় হল,আমরা যারা মহামারি বিশেষজ্ঞ নই, তারা অনেক সময় এই সিমুলেশন মডেল গুলোর গুঢ় তত্ত্বের মর্ম যথার্থ ভাবে বুঝতে সক্ষম হই না। কিন্তু তা সত্ত্বেও যারা ভাইরাসটির গতি প্রকৃতি সম্বন্ধে বুঝতে আগ্রহী তারা এইসব সিমুলেশন মডেলের গভীরে প্রবেশ না করে বা কোনো পূর্ভাবাস করার চেষ্টা না করেই, শুধু কোনো সংক্রামক ব্যাধির সংক্রমণ বৃদ্ধির হার বিষয়ক যেই পরিসংখ্যান আছে সেগুলোকে আমরা সহজ কিছু গাণিতিক ফরমুলার মাধ্যমে ব্যাখ্যা করতে পারি।যা আমাদের এই সিমুলেশন মডেল গুলো বুঝতে সাহায্য করবে।&lt;/p&gt;', 1, '2022-01-17 02:16:20'),
(20, 25, 11, 'The enduring fascination with legendary swords', '1642364329_p075d03v.webp', '&lt;p&gt;rthur had Excalibur. Bilbo had Sting. Arya Stark has her Needle. In many ways these blades have become just as iconic as their owners, which begs the question: why - in a modern world in which such ancient arms have become virtually obsolete - do swords still have the power to inspire such awe?&lt;/p&gt;&lt;p&gt;Ever since its publication in 1949, Joseph Campbell&rsquo;s Hero With A Thousand Faces has had scholars holding literature&rsquo;s most recognisable heroes up to the light, searching for shared patterns and traits indicative of the &lsquo;hero&rsquo;s journey&rsquo;. While most of the scrutiny has revolved around the heroes themselves, the legendary swords they wielded have managed to carve just as memorable a place in the hearts of readers.&lt;/p&gt;&lt;p&gt;Looking at A Song of Ice and Fire, this generation&rsquo;s favoured fantasy epic perhaps better known through its TV counterpart Game of Thrones, we see author George RR Martin has eagerly taken up the torch in literature&rsquo;s blade-filled canon. From Ned Stark&rsquo;s giant greatsword Ice to the prophesied flaming Lightbringer, Martin has provided fans with a veritable storm of swords to obsess over. Now with the eighth and final series fast approaching, there&rsquo;s good reason to believe that some of the more notable blades will play a pivotal role in the battles to come.&lt;/p&gt;&lt;p&gt;As astute Game of Thrones fans already know, while there are countless swords shown throughout the series, only a handful are deemed significant enough to be given a name. Blades of Valyrian Steel - like Jon Snow&rsquo;s Longclaw, Brienne of Tarth&rsquo;s Oathkeeper, and Samwell Tarly&rsquo;s Heartsbane - have stood out in the series for their exquisite forging, eternally sharp edges and their function as status symbols. Though a seemingly superfluous detail, the showrunners have made a special point of noting all the times these blades have changed hands over the course of the series; some have been melted down and reforged, stolen, or given as tokens of loyalty. As Valyrian steel was found to be one of the few substances capable of killing White Walkers, &lt;a href=&quot;https://www.businessinsider.com/game-of-thrones-valyrian-steel-weapons-2017-8#the-mysterious-dagger-arya-stark-6&quot;&gt;&lt;strong&gt;keeping track of who has a blade made from it&lt;/strong&gt;&lt;/a&gt; has taken on a new gravitas in the final season now that hordes of undead have finally breached the Wall and begun their unholy campaign against the people of Westeros.&lt;/p&gt;', 1, '2022-01-17 02:18:49'),
(21, 43, 12, 'Today’s Health Problems and Health Education', '1642364436_Derryberry-Groupcropped.jpg', '&lt;p&gt;&lt;strong&gt;THE HEALTH PROBLEMS OF&lt;/strong&gt; greatest significance today are the chronic diseases. . . . The extent of chronic diseases, various disabling conditions, and the economic burden that they impose have been thoroughly documented. Health education and health educators will be expected to contribute to the reduction of the negative impact of such major health problems as heart disease, cancer, dental disease, mental illness and other neurological disturbances, obesity, accidents, and the adjustments necessary to a productive old age.&lt;/p&gt;&lt;p&gt;The new and unique role of health education in helping to meet these problems can perhaps be clarified through a review of some of the differences between procedures that have been successful in solving the problems of the acute communicable diseases and those that are available for coping with today&rsquo;s problems.&lt;/p&gt;&lt;p&gt;The tools for dealing with the health conditions of today are not as specific and precise as those that have been available for the contagious diseases. The medical and sanitary sciences have provided public health workers with specific measures for prevention of these diseases&mdash;vaccination, immunization, safe water and milk supplies, sanitary sewage disposal, and insect vector control. When properly utilized, these measures have protected people from the several communicable diseases. But even in situations in which individuals do not avail themselves of these protective measures and contract a given disease, there are antibiotics and other chemotherapy agents that are specific and effective. No such specifics exist for preventing the chronic diseases, the degenerative conditions of old age, or accidents.&lt;/p&gt;&lt;p&gt;Medical science has, however, made possible the prevention of the more serious consequences of many of the chronic diseases. . . . No specific preventive is available for accidents or obesity other than changes in behavioral patterns.&lt;/p&gt;&lt;p&gt;Closely related to the lack of specific and precise methods of dealing with the chronic diseases is the difference in the manner in which these diseases occur. The onset of the chronic conditions is much more insidious than was the onset of the acute conditions, such as the contagious diseases. . . . Therefore, the motivation to act with reference to the slowly developing problems of chronic disease is not nearly so great as was the motivation to act in preventing the contagious diseases.&lt;/p&gt;&lt;p&gt;Because the onset of a chronic condition is gradual, education regarding the accompanying physical changes is difficult. Early detection of the disease means that the individual must either take routine examinations or tests when he feels perfectly well, or else he must become skilled in detecting in himself slight deviations in functioning and seek attention before the disease or condition has progressed too far.&lt;/p&gt;', 1, '2022-01-17 02:20:36'),
(22, 45, 13, 'Best Education Articles of 2020: Our 20 Most Popular Stories About Students, Remote Schooling & COVID Learning Loss This Year', '1642364570_Screen-Shot-2020-06-09-at-12.01.51-PM.jpg', '&lt;p&gt;Any student will forever remember 2020 as the year that the classrooms and campuses closed down. As coronavirus cases surged in the spring &mdash; and then again in the autumn &mdash; educators, families and district leaders did their best to pivot to a socially-distanced Plan B, building a new system of remote instruction overnight in hopes of maintaining learning and community.&lt;/p&gt;&lt;p&gt;Any education journalist will remember 2020 as the year that all the planned student profiles, school spotlights and policy investigations got thrown out the window as we scrambled to capture and process the disorienting new normal of virtual classrooms. Here at The 74, our top stories from the past nine months were dominated by our reporting in this area, by features that framed the challenges and opportunities of distance learning, that surfaced solutions and innovations that were working for some districts, and that pointed to the bigger questions of how disrupted back-to-back school years may lead to long-term consequences for this generation of students.&lt;/p&gt;&lt;p&gt;As we approach the new year, we&rsquo;re continuing to report on America&rsquo;s evolving, patchwork education system via our coronavirus education reporting project at &lt;a href=&quot;https://www.the74million.org/pandemic/&quot;&gt;The74Million.org/PANDEMIC&lt;/a&gt;. With school campuses open in some states and not others, with some families preferring in-person classes or remote learning alternatives, and with some individual classrooms being forced to close in rolling 14-day increments with new coronavirus breakouts, it&rsquo;s clear that our education system will begin 2021 in a similar state of turmoil. (Get our latest reporting on schools and the pandemic delivered straight to your inbox by &lt;a href=&quot;https://www.the74million.org/newsletter/&quot;&gt;signing up for The 74 Newsletter&lt;/a&gt;)&lt;/p&gt;&lt;p&gt;But with the first vaccines being administered this month, we&rsquo;re seeing our first glimpse of a light at the end of this chaotic tunnel &mdash; hope that the virus will quickly dissipate, that schools will fully reopen, and that we&rsquo;ll then find a way to help all of America&rsquo;s 74 million children catch up. Here are our 20 most read and shared articles of the year:&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Learning Loss: &lt;/strong&gt;In the days immediately following the pandemic-related closure of schools throughout the country this past spring, researchers at the nonprofit assessment organization NWEA predicted that whatever school looks like in the fall, students will start the year with significant gaps. In June, they also began warning &lt;a href=&quot;https://www.the74million.org/article/new-research-predicts-steep-covid-learning-losses-will-widen-already-dramatic-achievement-gaps-within-classrooms/&quot;&gt;that the already wide array of student achievement present in individual classrooms in a normal year is likely to swell dramatically&lt;/a&gt;. In 2016, researchers at NWEA and four universities determined that on average, the range of academic abilities within a single classroom spans five to seven grades, with one-fourth on grade level in math and just 14 percent in reading. &ldquo;All of this is in a typical year,&rdquo; one of the researchers, Texas A&amp;amp;M University Professor Karen Rambo-Hernandez, told Beth Hawkins. &ldquo;Next year is not going to look like a typical year.&rdquo; &lt;a href=&quot;https://www.the74million.org/article/new-research-predicts-steep-covid-learning-losses-will-widen-already-dramatic-achievement-gaps-within-classrooms/&quot;&gt;Read the full story&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;The issues of &lsquo;COVID Slide&rsquo;, learning loss and classroom inequity appeared regularly on the site through 2020. A few other notable examples from the year:&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&mdash; Even Further Ahead: &lt;/strong&gt;New data suggest pandemic may not just be leaving low-income students behind; it may be propelling wealthier ones even further ahead (&lt;a href=&quot;https://www.the74million.org/article/new-data-suggests-pandemic-may-not-just-be-leaving-low-income-students-behind-it-may-be-propelling-wealthier-ones-even-further-ahead/&quot;&gt;Read the full story&lt;/a&gt;)&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&mdash; Teaching Time:&lt;/strong&gt; How much learning time are students getting? In 7 of America&rsquo;s largest school districts, less than normal &mdash; and in 3, they&rsquo;re getting more (&lt;a href=&quot;https://www.the74million.org/article/aldeman-how-much-learning-time-are-students-getting-in-7-large-school-districts-less-than-normal-and-in-3-theyre-getting-more/&quot;&gt;Read the full story&lt;/a&gt;)&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&mdash; Missing Students: &lt;/strong&gt;Lost learning, lost students &mdash; COVID slide is not as steep as predicted, NWEA study finds, but 1 in 4 kids was missing from fall exams (&lt;a href=&quot;https://www.the74million.org/article/lost-learning-lost-students-covid-slide-not-as-steep-as-predicted-nwea-study-finds-but-1-in-4-kids-was-missing-from-fall-exams/&quot;&gt;Read the full story&lt;/a&gt;)&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&mdash; Learning Loss Research:&lt;/strong&gt; Students could have lost as much as 232 days of learning in math during first four months of largely virtual schooling (&lt;a href=&quot;https://www.the74million.org/article/students-could-have-lost-as-much-as-183-days-of-learning-time-in-reading-232-days-in-math-during-first-four-months-of-largely-virtual-schooling/&quot;&gt;Read the full story&lt;/a&gt;)&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&mdash; What History Tells Us: &lt;/strong&gt;What lasting academic (and economic) effects could coronavirus shutdowns have on this generation of students? Some alarming data points from research on previous disasters (&lt;a href=&quot;https://www.the74million.org/article/aldeman-what-lasting-academic-effects-will-coronavirus-school-shutdowns-have-on-students-research-on-previous-disasters-offers-some-clues/&quot;&gt;R&lt;/a&gt;&lt;/p&gt;', 1, '2022-01-17 02:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(9, 'Science', '<p>This topic contains posts about science</p>'),
(10, 'Math', '<p>This topic contains posts about math</p>'),
(11, 'Literature', '<p>This topic contains posts about literature</p>'),
(12, 'Health', '<p>This topic contains posts about health</p>'),
(13, 'Education', '<p>This topic contains posts about education</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(25, 1, 'admin', 'admin@gmail.com', '$2y$10$BMKU2sjdfwHJuXDbuc1b3.morea.ZtHcZhu2ru/Hw7oRmfve..Mue', '2021-12-12 20:48:57'),
(43, 0, 'user1', 'user1@gmail.com', '$2y$10$ygplDkmJAvQR1lPww/VTye/Jtneid1DC34UWsrlAnl3z/l6lUH1cS', '2022-01-16 20:01:23'),
(44, 1, 'user5', 'user2@gmail.com', '$2y$10$HdkDA9BdPLoM5clCs1vBZ.bxVYdocr0wybtc5r.M4ZyKwD.OtAtzO', '2022-01-16 20:01:46'),
(45, 1, 'user3', 'user3@gmail.com', '$2y$10$D/iU/SGal2oPpR43fSUXreoWwk1ghQ3V2oJd1VLte74CcBxzD7C4G', '2022-01-16 20:03:49'),
(46, 0, 'user4', 'user4@gmail.com', '$2y$10$IebCeo3mt8beZ35jCauVou8cszkfFvVresYwKhz0FiQA4Mq0UevZq', '2022-01-16 20:04:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
