# INTRANET

This is a tiny local web site for sharing small postcards about events, initiatives and news.

You'll also be able to activate temporary modal alerts for upcoming events or special communications.

# Requirements

PHP > 7.1
Apache2

# How to use

Clone the repo and setup your local Apache server to point to the local copy. 

You will see the default website:

![https://raw.githubusercontent.com/jcatanop/intranet/main/img/Captura%20desde%202023-10-15%2008-26-15.png]

## New Postcard

Edit the **data.json** file with the postcard information. 

Each entry into **data.json** is a new postcard.

~~~
{
    "imagen":"<image_name>",
    "titulo":"<Title>",
    "fecha":"<Date>",
    "texto":"<Description>"
}
~~~

You can use a remote public URL in your **<image_name>** field or, if you wish, store your image in the **img** folder and register **img/<image_name>** in this field.

## New Modal Notification

This is useful for notifying users of upcoming events.

Create an image that contains all the information you want to share.

Go to **components/** folder and edit the **modal.php** file. 
Change the variables $image and $date.

~~~
$image = "<image_name>";
$date = "<day-month-year>";
~~~

**<image_name>** could be a remote public URL or if you want, store your image in the **img** folder and register **img/<image_name>** in this field.
