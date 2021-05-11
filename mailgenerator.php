<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML Email generator | Double Marvellous </title>
    <meta name="theme-color" content="#1e1043">  <meta name="msapplication-navbutton-color" content="#1e1043">  
    <meta name="apple-mobile-web-app-status-bar-style" content="#10043c">
    <meta name="description" content="Handy HTML Email generator. Just type your text, add some images and copy the code"/>
    <link rel="canonical" href="https://doublemarvellous.com/html-email-generator" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Star in your own depressing magazine cover" />
    <meta property="og:description" content="Handy HTML Email generator. Just type your text, add some images and copy the code" />
    <meta property="og:url" content="https://doublemarvellous.com/html-email-generator" />
    <meta property="og:site_name" content="Double Marvellous | Chat Mag" />
    <meta property="og:image" content="https://www.doublemarvellous.com/inc/img/chatmag1.jpg" />
    <meta property="og:image:secure_url" content="https://www.doublemarvellous.com/inc/img/chatmag1.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Handy HTML Email generator. Just type your text, add some images and copy the code" />
    <meta name="twitter:title" content="Star in your own depressing magazine cover" />
    <meta property="fb:app_id" content="3216317458385521" />
    <link rel="shortcut icon" href="../inc/img/favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="inc/csschat/chatfont.css" rel="stylesheet">
    <link href="inc/csschat/chat.css" rel="stylesheet">
    <link href="inc/csschat/bulmaslider.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
<style>
    body{
        background-color: #10043c;
        font-family: 'Roboto', sans-serif;
    }
.mainbannertitles{
    padding: 2em;
    background: #b550a0;
    color: #fff;
}

.mainbannertitles h1{
    font-size: 3rem;
}
    input[type="text"]{
        background: #fff;
        padding: 0.5rem;
    }

    .input.is-info{
                background: #fff;
        padding: 1rem;
        border-radius: 0;
        border: none;
        margin-bottom: 0.5rem;
    }

    .whiteback{
        background: #fff;
    }

    .emailtemplate{
        padding: 2em 0;
    }
</style>
</head>
<body>
    <div class="" id="app">
<div class="mainbannertitles">
        <div class="columns is-marginless is-centered">
        <div class="column is-half">
            <h1>HTML Email Generator</h1>
            <p>Generate a nice little email with which to bother people.</p>
        </div>

      </div>
</div>
<section class="emailtemplate">
  <div class="container">
        <div class="columns is-marginless is-centered is-variable is-8">
        <!-- /////////////// ////////////////////-->
        <div class="column is-5 is-paddingless">

<input class="input is-info" v-model="maintitle" placeholder="My Amazing Title">
<input class="input is-info" v-model="content_a" placeholder="I don\'t want fancy pants, or fancy shmacy pants, or even fancy pancy nancy pants. What I want is to waste your time and mine">

<input class="input is-info" v-model="image_a" placeholder="https://media.giphy.com/media/Q1D2YJnWHX20w/giphy.gif">
<input class="input is-info" v-model="image_b" placeholder="https://images.freeimages.com/images/large-previews/765/wait-1459580.jpg">


<pre>
 &lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt; &lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot; lang=&quot;en-GB&quot;&gt; &lt;head&gt; &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt; &lt;title&gt;{{mailtitle}}&lt;/title&gt; &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;/&gt; &lt;style type=&quot;text/css&quot;&gt; a[x-apple-data-detectors] {color: inherit !important;} &lt;/style&gt; &lt;/head&gt; &lt;body style=&quot;margin: 0; padding: 0;&quot;&gt; &lt;table role=&quot;presentation&quot; border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt; &lt;tr&gt; &lt;td style=&quot;padding: 20px 0 30px 0;&quot;&gt; &lt;table align=&quot;center&quot; border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;600&quot; style=&quot;border-collapse: collapse; border: 1px solid #cccccc;&quot;&gt; &lt;tr&gt; &lt;td align=&quot;center&quot; bgcolor=&quot;#70bbd9&quot; style=&quot;padding: 40px 0 30px 0;&quot;&gt; &lt;img src=&quot;https://assets.codepen.io/210284/h1_1.gif&quot; alt=&quot;Creating Email Magic.&quot; width=&quot;300&quot; height=&quot;230&quot; style=&quot;display: block;&quot; /&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td bgcolor=&quot;#ffffff&quot; style=&quot;padding: 40px 30px 40px 30px;&quot;&gt; &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot; style=&quot;border-collapse: collapse;&quot;&gt; &lt;tr&gt; &lt;td style=&quot;color: #153643; font-family: Arial, sans-serif;&quot;&gt; &lt;h1 style=&quot;font-size: 24px; margin: 0;&quot;&gt;{{maintitle}}&lt;/h1&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td style=&quot;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;&quot;&gt; &lt;p style=&quot;margin: 0;&quot;&gt;{{content_a}}.&lt;/p&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt; &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot; style=&quot;border-collapse: collapse;&quot;&gt; &lt;tr&gt; &lt;td width=&quot;260&quot; valign=&quot;top&quot;&gt; &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot; style=&quot;border-collapse: collapse;&quot;&gt; &lt;tr&gt; &lt;td&gt; &lt;img src=&quot;https://assets.codepen.io/210284/left_1.gif&quot; alt=&quot;&quot; width=&quot;100%&quot; height=&quot;140&quot; style=&quot;display: block;&quot; /&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td style=&quot;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;&quot;&gt; &lt;p style=&quot;margin: 0;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.&lt;/p&gt; &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; &lt;/td&gt; &lt;td style=&quot;font-size: 0; line-height: 0;&quot; width=&quot;20&quot;&gt;&amp;nbsp;&lt;/td&gt; &lt;td width=&quot;260&quot; valign=&quot;top&quot;&gt; &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot; style=&quot;border-collapse: collapse;&quot;&gt; &lt;tr&gt; &lt;td&gt; &lt;img src=&quot;https://assets.codepen.io/210284/right_1.gif&quot; alt=&quot;&quot; width=&quot;100%&quot; height=&quot;140&quot; style=&quot;display: block;&quot; /&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td style=&quot;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;&quot;&gt; &lt;p style=&quot;margin: 0;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.&lt;/p&gt; &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; &lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td bgcolor=&quot;#ee4c50&quot; style=&quot;padding: 30px 30px;&quot;&gt; &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot; style=&quot;border-collapse: collapse;&quot;&gt; &lt;tr&gt; &lt;td style=&quot;color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;&quot;&gt; &lt;p style=&quot;margin: 0;&quot;&gt;&amp;reg; Someone, somewhere 2025&lt;br/&gt; &lt;a href=&quot;#&quot; style=&quot;color: #ffffff;&quot;&gt;Unsubscribe&lt;/a&gt; to this newsletter instantly&lt;/p&gt; &lt;/td&gt; &lt;td align=&quot;right&quot;&gt; &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;border-collapse: collapse;&quot;&gt; &lt;tr&gt; &lt;td&gt; &lt;a href=&quot;http://www.twitter.com/&quot;&gt; &lt;img src=&quot;https://assets.codepen.io/210284/tw.gif&quot; alt=&quot;Twitter.&quot; width=&quot;38&quot; height=&quot;38&quot; style=&quot;display: block;&quot; border=&quot;0&quot; /&gt; &lt;/a&gt; &lt;/td&gt; &lt;td style=&quot;font-size: 0; line-height: 0;&quot; width=&quot;20&quot;&gt;&amp;nbsp;&lt;/td&gt; &lt;td&gt; &lt;a href=&quot;http://www.twitter.com/&quot;&gt; &lt;img src=&quot;https://assets.codepen.io/210284/fb.gif&quot; alt=&quot;Facebook.&quot; width=&quot;38&quot; height=&quot;38&quot; style=&quot;display: block;&quot; border=&quot;0&quot; /&gt; &lt;/a&gt; &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; &lt;/td&gt; &lt;/tr&gt; &lt;/table&gt; &lt;/body&gt; &lt;/html&gt;
</pre>


        </div>
        <!-- /////////////// ////////////////////-->
        <!-- /////////////// ////////////////////-->
        <div class="column is-6 is-offset-1 whiteback">
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB"> <head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <title>{{mailtitle}}</title> <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <style type="text/css"> a[x-apple-data-detectors] {color: inherit !important;} </style> </head> <body style="margin: 0; padding: 0;"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"> <tr> <td style="padding: 20px 0 30px 0;"> <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;"> <tr> <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;"> <img v-bind:src="mainlogo" alt="{{maintitle}}" width="300" height="230" style="display: block;" /> {{maintitle}}</td> </tr> <tr> <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;"> <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;"> <tr> <td style="color: #153643; font-family: Arial, sans-serif;"> <h1 style="font-size: 24px; margin: 0;">{{maintitle}}</h1> </td> </tr> <tr> <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;"> <p style="margin: 0;">{{content_a}}</p> </td> </tr> <tr> <td> <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;"> <tr> <td width="260" valign="top"> <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;"> <tr> <td> <img v-bind:src="image_a" alt="" width="100%" height="140" style="display: block;" /> </td> </tr> <tr> <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;"> <p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.</p> </td> </tr> </table> </td> <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td> <td width="260" valign="top"> <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;"> <tr> <td> <img v-bind:src="image_b" alt="" width="100%" height="140" style="display: block;" /> </td> </tr> <tr> <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;"> <p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.</p> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> <tr> <td bgcolor="#ee4c50" style="padding: 30px 30px;"> <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;"> <tr> <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;"> <p style="margin: 0;">&reg; Someone, somewhere 2025<br/> <a href="#" style="color: #ffffff;">Unsubscribe</a> to this newsletter instantly</p> </td> <td align="right"> <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;"> <tr> <td> <a href="http://www.twitter.com/"> <img src="https://assets.codepen.io/210284/tw.gif" alt="Twitter." width="38" height="38" style="display: block;" border="0" /> </a> </td> <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td> <td> <a href="http://www.twitter.com/"> <img src="https://assets.codepen.io/210284/fb.gif" alt="Facebook." width="38" height="38" style="display: block;" border="0" /> </a> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </body> </html>
        </div>
        <!-- /////////////// ////////////////////-->
      </div>
  </div>
</section>


            </div>
        </div>
        <script>
            var magapp = new Vue({
                el: '#app',
                data: {


                    mailtitle:'Email Title',
                    maintitle: 'My Amazing Title',
                    mainlogo:'https://i.ibb.co/c8q2gyf/building.png',
                    content_a: 'I don\'t want fancy pants, or fancy shmacy pants, or even fancy pancy nancy pants. What I want is to waste your time and mine',
                    image_a: 'https://media.giphy.com/media/Q1D2YJnWHX20w/giphy.gif',
                    image_b:'https://images.freeimages.com/images/large-previews/765/wait-1459580.jpg',
                },
                methods: {
                    reloadPage: function(){
                        location.reload();
                    }
                },
//
mounted: function () {
    console.log('eat ass');
}
});


            feather.replace();


        </script>

    </body>
    </html>
