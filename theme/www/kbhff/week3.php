<!DOCTYPE html>
<html>
<head>
	<title>Page title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

Week 3

Link to video?
Link to presentation?


*Assignment 1+2:*
This week assignment 1 and 2 are focused on establishing and testing our cross-platform collaboration setup.
With developers working on both Mac and Windows, there are some quirks to be worked out to avoid having to deal with more serious problems later in the development process.

Unfortunately working out these details is only posible within the primary group.

We will primarily be woking on the install scripts and the class-test we started on last week (which is also a means of testing our development setup, while practising git and writing code).

If everything works out as I hope, we wil finally be able to share last week's tasks with the secondaries along with assignment 3 of this week.

We will see how it goes tomorrow – I'll keep you posted.


*Assignment 3 - home office:*
Finally the install scripts are ready to be run by the secondaries, so some of the previous assignments are now available to everyone. The assigments below needs to be done in the same order, because they build on each other.

Although the list below might seem very long, don't worry. Just take one step at the time and get as far as you can.

Please note down any problems, questions, comments or challenges you experience during these assigments – we will use your feedback to improve the process for any new participants in the KBHFF development along the way. If you think something is hard to understand, others are likely to think the same.

*For the secondaries*
Create github account and send your username to me, so I can add you to the class-test respository.
Download and install a text-editor if you didn't do so already.

*For everyone:*
Run the install script on your computer, by following the guide for your platform:
Windows: https://parentnode.dk/blog/installing-web-stack-on-windows-10
Mac: https://parentnode.dk/blog/installing-the-web-stack-on-mac-os

If you already did this before, you can skip the _prerequisites_ section in the guide – but everyone must run the install script again.

*For the secondaries*
Clone the class-test project from https://github.com/parentnode/class-test by using the GitHub Desktop app. If you have already been added to the class-test repository, you should be able to choose the class-test project from the list, after choosing "Clone Repository" from the File menu. Otherwise you can also clone by using the url, but you will not be able to commit your changes back to the group, until I have added your Git account to the project.

The project must be cloned to /srv/sites/parentnode/class-test on Mac and to C:\srv\sites\parentnode\class-test on Windows.

After having cloned the class-test project, enable the site on your computer by following this guide:
https://parentnode.dk/blog/enable-a-site

Once you have cloned and enabled the site, you can visit http://class-test.local in your browser and see the class pages.

Inside the new class-test project you will find the "HTML"-pages (the ones shown in the browser) in src/www. Though the files are named .php, they actually contain HTML. You can make a copy of "new-participant.php", using your own name - and this will be you personal test page onwards.

The purpose is for you to have a simple page where you can write your first HTML and see the result in your own browser. It is also a way for you to get some experience with using Git to send your changes back to the group.

So create your own file, make some changes to your file and commit and push the changes back to Github by using the GitHub account. Look inside the other participant-files for inspiration on HTML.

*For everyone*
Clone and enable the parentnode_dk project, by following the same steps as with the class-test.
If you need help to enable the site, look at this guide:
https://parentnode.dk/blog/enable-a-site

This will allow you to inspect a project which uses the whole parentnode framework – on your own computer. This is a prerequisite for comming lectures and assignments.

After you have cloned and enabled the site, visit http://parentnode.local/janitor/admin/setup to finish the local configuration of your site.

For the setup you will have to provide some information – here are some hints:
Leave pre-filled values as they are - *except for System mail in step 3*, where you enter your private email.
Root database password: The one you entered when installing the webstack.
New Janitor database password - whatever you want.
Mail username: A google-based email address.
Mail password: The password of the google-based email.

You cannot complete the setup without completing this step - you can use non-google-mails, but in that case you'd have to know/find the smtp/imap server name and port yourself. You can also enter dummy data for the mail settings, if you don't have a gmail account.

Once you have finished the setup successfully, click relauch, and you should see an almost empty page. This is because the site actually is empty. Use the login link in the top of the page to log in (username: the email you entered in step 3, password: 123rotinaj).

After you log in, you can access the backend through the Janitor link in the top of the page – please explore a bit by clicking around.

Note down any problems, questions or comments you have during these assigments – we will use your feedback to improve the process for any new participants in the KBHFF development along the way. If you think something is hard to understand, others are likely to think the same.


</body>
</html>