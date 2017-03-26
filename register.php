<!doctype html>

<html>
  
  <head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <style type="text/css">
      /* Space out content a bit */
      body {
        padding-top: 20px;
        padding-bottom: 20px;
      }
      /* Everything but the jumbotron gets side spacing for mobile first views */
      .header, .marketing, .footer {
        padding-left: 15px;
        padding-right: 15px;
      }
      /* Custom page header */
      .header {
        border-bottom: 1px solid #e5e5e5;
      }
      /* Make the masthead heading the same height as the navigation */
      .header h3 {
        margin-top: 0;
        margin-bottom: 0;
        line-height: 40px;
        padding-bottom: 19px;
      }
      /* Custom page footer */
      .footer {
        padding-top: 19px;
        color: #777;
        border-top: 1px solid #e5e5e5;
      }
      /* Customize container */
      @media(min-width: 768px) {
        .container {
          max-width: 730px;
        }
      }
      .container-narrow > hr {
        margin: 30px 0;
      }
      /* Main marketing message and sign up button */
      .jumbotron {
        text-align: center;
        border-bottom: 1px solid #e5e5e5;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }
      /* Supporting marketing content */
      .marketing {
        margin: 40px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
      /* Responsive: Portrait tablets and up */
      @media screen and(min-width: 768px) {
        /* Remove the padding we set earlier */
        .header, .marketing, .footer {
          padding-left: 0;
          padding-right: 0;
        }
        /* Space out the masthead */
        .header {
          margin-bottom: 30px;
        }
        /* Remove the bottom border on the jumbotron for visual effect */
        .jumbotron {
          border-bottom: 0;
        }
      }
    </style>
  <script language="JavaScript">
<!--
//you can assign the initial color of the background here
r=255;
g=255;
b=255;
flag=0;
t=new Array;
o=new Array;
d=new Array;

function hex(a,c)
{
t[a]=Math.floor(c/16)
o[a]=c%16
switch (t[a])
{
case 10:
t[a]='A';
break;
case 11:
t[a]='B';
break;
case 12:
t[a]='C';
break;
case 13:
t[a]='D';
break;
case 14:
t[a]='E';
break;
case 15:
t[a]='F';
break;
default:
break;
}
switch (o[a])
{
case 10:
o[a]='A';
break;
case 11:
o[a]='B';
break;
case 12:
o[a]='C';
break;
case 13:
o[a]='D';
break;
case 14:
o[a]='E';
break;
case 15:
o[a]='F';
break;
default:
break;
}
}

function ran(a,c)
{
if ((Math.random()>2/3||c==0)&&c<255)
{
c++
d[a]=2;
}
else
{
if ((Math.random()<=1/2||c==255)&&c>0)
{
c--
d[a]=1;
}
else d[a]=0;
}
return c
}
function do_it(a,c)
{
if ((d[a]==2&&c<255)||c==0)
{
c++
d[a]=2
}
else
if ((d[a]==1&&c>0)||c==255)
{
c--;
d[a]=1;
}
if (a==3)
{
if (d[1]==0&&d[2]==0&&d[3]==0)
flag=1
}
return c
}
function disco()
{
if (flag==0)
{
r=ran(1, r);
g=ran(2, g);
b=ran(3, b);
hex(1,r)
hex(2,g)
hex(3,b)
document.body.style.background="#"+t[1]+o[1]+t[2]+o[2]+t[3]+o[3]
flag=50
}
else
{
r=do_it(1, r)
g=do_it(2,g)
b=do_it(3,b)
hex(1,r)
hex(2,g)
hex(3,b)
document.body.style.background="#"+t[1]+o[1]+t[2]+o[2]+t[3]+o[3]
flag--
}

setTimeout('disco()',50)
}
//-->
</script>







  </head>
  
  <body onload="disco()">
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right"></ul>
        <h3 class="text-muted"><i class="fa fa-renren text-left"></i><a href="home.html">Cognitive Web</a></h3>
<form name="form2" method="POST" action="reg.php" target="_top">
          <div class="form-group">
            <label class="control-label">Username</label>
            <div class="controls">
              <input type="email" class="form-control" placeholder="Email-id" required name="username">
            </div>
          </div>
        
       
     <div class="form-group">
              <label class="control-label" >Password</label>
              <div class="controls">
                <input type="password" class="form-control" placeholder="Password" required name="password">
              </div>
     </div>  


<br>

                <button class="btn btn-block btn-primary" type="submit" href="">Sign up</button>
            
          </div>
        </div>
      </div>
</form>

  </body>

</html>		