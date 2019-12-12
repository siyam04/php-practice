<?php

$username = $_POST["username"];
$password = $_POST["password"];

echo 'Welcome ' . $username;
echo '<br>';
echo 'Your Password: ' . $password;

?>


<!--if ($_SERVER["REQUEST_METHOD"] == "POST")-->
<!--$name = $_REQUEST['fullname'];-->
<!--if (empty($name))-->

<!--if ($_SERVER["REQUEST_METHOD"] == "POST") -->
<!--{-->
<!---->
<!--    // POST মেথডের মাধ্যমে ফর্ম থেকে ইনপুট ফিল্ডের ভ্যালু  সংগ্রহ-->
<!--    $name = $_REQUEST['name'];-->
<!--    $email = $_REQUEST['email'];-->
<!--    $mobile = $_REQUEST['mobile'];-->
<!--    echo $name ." আপনাকে স্বাগতম।-->
<!--    <br> আপনার ই-মেইল এড্রেসঃ " . $email.-->
<!--    "<br> এবং মোবাইল নাম্বারঃ ". $mobile;-->
<!---->
<!--}-->

<!--<form method="post" action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?><!--">-->

<!--পিএইচপি trim() ফাংশনের মাধ্যমে আমরা ইউজার কর্তৃক ইনপুটকৃত তথ্য থেকে অপ্রয়োজনীয় ক্যারেক্টারসমূহ বাদ দিতে পারি।-->
<!--যেমন- extra space, tab, newline ইত্যাদি-->

<!--পিএইচপি stripslashes() ফাংশনের মাধ্যমে আমরা ইউজার ইনপুটকৃত তথ্য থেকে ব্যাকস্ল্যাশ(\) গুলোকে সরিয়ে ফেলতে পারি।-->

