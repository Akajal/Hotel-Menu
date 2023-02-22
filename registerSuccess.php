<style>
    /* body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        position: relative;
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    a {

        text-decoration: none;
        position: absolute;
        left: 50%;
        bottom: 20px;
        transform: translateX(-50%);
    } */
    body {
  background: #1488EA;
}

#card {
  position: relative;
  width: 380px;
  display: block;
  margin: 40px auto;
  text-align: center;
  font-family: 'Source Sans Pro', sans-serif;
}

#upper-side {
  padding: 2em;
  background-color: #8BC34A;
  display: block;
  color: #fff;
  border-top-right-radius: 8px;
  border-top-left-radius: 8px;
}

#checkmark {
  font-weight: lighter;
  fill: #fff;
  margin: -3.5em auto auto 20px;
}

#status {
  font-weight: lighter;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 1em;
  margin-top: -.2em;
  margin-bottom: 0;
}

#lower-side {
  padding: 2em 2em 5em 2em;
  background: #fff;
  display: block;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

#message {
  margin-top: -.5em;
  color: #757575;
  letter-spacing: 1px;
}

#contBtn {
  position: relative;
  top: 1.5em;
  text-decoration: none;
  background: #8bc34a;
  color: #fff;
  margin: auto;
  padding: .8em 3em;
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  border-radius: 25px;
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}

#contBtn:hover {
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}

/* ******************************************************
	
	
*********************************************************/

@import url('https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900');



html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}

article, header, section, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
    display: block;
}
body {
    background:#e5e5e5 none repeat scroll 0 0;
    color: #222;
    font-size: 100%;
    line-height: 24px;
    margin: 0;
	padding:0;
	font-family: "Raleway",sans-serif;
}
a{
	font-family: "Raleway",sans-serif;
	text-decoration: none;
	outline: none;
}
a:hover, a:focus {
	color: #373e18;
}
section {
    float: left;
    width: 100%;
	padding-bottom:3em;
    background: radial-gradient(black, transparent);
}
h2 {
    color: #1a0e0e;
    font-size: 26px;
    font-weight: 700;
    margin: 0;
    line-height: normal;
	text-transform:uppercase;
}
h2 span {
    display: block;
    padding: 0;
    font-size: 18px;
    opacity: 0.7;
    margin-top: 5px;
	text-transform:uppercase;
}

#float-right{
	float:right;	
}

/* ******************************************************
	Script Top
*********************************************************/

.ScriptTop {
    background: #fff none repeat scroll 0 0;
    float: left;
    font-size: 0.69em;
    font-weight: 600;
    line-height: 2.2;
    padding: 12px 0;
    text-transform: uppercase;
    width: 100%;
}

/* To Navigation Style 1*/
.ScriptTop ul {
    margin: 24px 0;
    padding: 0;
    text-align: left;
}
.ScriptTop li{
	list-style:none;	
	display:inline-block;
}
.ScriptTop li a {
    background: #6a4aed none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    padding: 5px 18px;
    text-decoration: none;
    text-transform: capitalize;
}
.ScriptTop li a:hover{
	background:#000;
	color:#fff;
}


/* ******************************************************
	Script Header
*********************************************************/

.ScriptHeader {
    float: left;
    width: 100%;
    padding: 2em 0;
}
.rt-heading {
    margin: 0 auto;
	text-align:center;
}
.Scriptcontent{
	line-height:28px;	
}
.ScriptHeader h1{
	font-family: "brandon-grotesque", "Brandon Grotesque", "Source Sans Pro", "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
    color: #6a4aed;
    font-size: 26px;
    font-weight: 700;
    margin: 0;
    line-height: normal;

}
.ScriptHeader h2 {
    color: #312c8f;
    font-size: 20px;
    font-weight: 400;
    margin: 5px 0 0;
    line-height: normal;

}
.ScriptHeader h1 span {
    display: block;
    padding: 0;
    font-size: 22px;
    opacity: 0.7;
    margin-top: 5px;

}
.ScriptHeader span {
    display: block;
    padding: 0;
    font-size: 22px;
    opacity: 0.7;
    margin-top: 5px;
}




/* ******************************************************
	Live Demo
*********************************************************/





/* ******************************************************
	Responsive Grids
*********************************************************/

.rt-container {
	margin: 0 auto;
	padding-left:12px;
	padding-right:12px;
}
.rt-row:before, .rt-row:after {
  display: table;
  line-height: 0;
  content: "";
}

.rt-row:after {
  clear: both;
}
[class^="col-rt-"] {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  -ms-box-sizing: border-box;
  padding: 0 15px;
  min-height: 1px;
  position: relative;
}


@media (min-width: 768px) {
  .rt-container {
    width: 750px;
  }
  [class^="col-rt-"] {
    float: left;
    width: 49.9999999999%;
  }
  .col-rt-6, .col-rt-12 {
    width: 100%;
  }
  
}

@media (min-width: 1200px) {
	.rt-container {
		width: 1170px;
	}
	.col-rt-1 {
		width:16.6%;
	}
	.col-rt-2 {
		width:30.33%;
	}
	.col-rt-3 {
		width:50%;
	}
	.col-rt-4 {
		width: 67.664%;
	}
	.col-rt-5 {
		width: 83.33%;
	}
	

}

@media only screen and (min-width:240px) and (max-width: 768px){
	 .ScriptTop h1, .ScriptTop ul {
		text-align: center;
	}
	.ScriptTop h1{
		margin-top:0;
		margin-bottom:15px;
	}
	.ScriptTop ul{
		 margin-top:12px;		
	}
	
	.ScriptHeader h1,
	.ScriptHeader h2, 
	.scriptnav ul{
		text-align:center;	
	}
	.scriptnav ul{
		 margin-top:12px;		
	}
	#float-right{
		float:none;	
	}
	
}

i.checkmark {
    font-size: 214px;
    
    position: relative;
    top: 86px;
}







</style>

<!-- <div class="card">
    
    <h1>Success</h1>
    <p>We Will be get email<br /> we'll be in touch shortly!</p>
    <a href="index.php">Back To Home</a>
</div> -->

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- partial:index.partial.html -->
<div id='card' class="animated fadeIn">
  <div id='upper-side'>
   
      
      <div style="border-radius:200px; height:200px; width:200px;margin:0 auto;">
        <i class="checkmark">✓</i>
    </div>
      <h3 id='status'>
      Success
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
      Congratulations, Your Registation has been successfully Saved. <br> go back and admin
    </p>
    <a href="./admin.php" id="contBtn">Back to Home</a>
  </div>
</div>
<!-- partial -->
    		
           
    		</div>
		</div>
    </div>
</section>