	Hi there!

This is my website demo, including HTML/CSS and some PHP.
I used a bit of Bootstrap too, but ended up writing a lot 
of CSS on my own because I kinda like it. So yeah, I probably 
must spend more time on looking into Bootstrap. But for now 
this is what it is.
This site should be somewhat responsive also, used Firefox's
responsive design tool to check different screen sizes.

About the PHP part of this site.

I created this based on a test I did that was based on a tutorial. 
I wanted to learn more PHP and how to create a basic signup/login 
system that is at least somewhat safe.
The signup/login system has basic safety measures to prevent 
users from injecting the database with malicious code.
The passwords are also hashed so they're not showing as is 
on the database.
The user is signed up with an unique ID integer, using SQL 
AUTO_INCREMENT on the PRIMARY KEY usersId, so the Id is always 
unique to the user. usersId takes only max. 6 figure ID's, but I 
think that might be just enough for this purpose. :D
After testing I changed the password column to take in values of 
200 characters, since the algorithms change over time (though 
php.net suggest even the length of 255).

At this point there is no password resetting functionality, or 
a way for the user to delete their account. I'll look into those.

Hopefully you like this very basic site.

	Have a great day!

	- Private Boolean