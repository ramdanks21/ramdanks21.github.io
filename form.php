<?php
session_start();
if($_SESSION[''])
?>


<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello Bulma!</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <link rel="stylesheet" href="styless.css">
</head>

<body>
  <section class="section is-medium">
    <div class="container is-size-">
      <div class="columns is-vcentered is-justify-content-space-center ">
        <div class="column "> 
          <h1 class="Title">WELCOME YOUR  REGISTER ACCOUNT</h1>
        </div>
        <div class="column is-justify-content-center is-align-items-center">
         <div class="columns">
           <div class="column ">
            <div class="field ">
              <label class="label mr-3 ">FirstName</label>
              <div class="control ">
                <input class="input " type="text" >
              </div>
            </div>
           </div>
           <div class="column ">
            <div class="field ">
              <label class="label mr-3 ">LastName</label>
              <div class="control ">
                <input class="input " type="text" >
              </div>
            </div>
           </div>
         </div>
         <div class="columns">
           <div class="column is=mo">
            <div class="field ">
              <label class="label mr-3 ">Password</label>
              <div class="control ">
                <input class="input " type="password" >
              </div>
            </div>
           </div>
           <div class="column ">
            <div class="field ">
              <label class="label mr-3 ">Email</label>
              <div class="control ">
                <input class="input " type="email" >
              </div>
            </div>
           </div>
         </div>
         <div class="columns">
           <div class="column ">
            <div class="field ">
              <label class="label mr-3 ">City</label>
              <div class="control ">
                <input class="input" type="text" >
              </div>
            </div>
           </div>
           <div class="column ">
            <div class="field ">
              <label class="label mr-3 ">NoHp</label>
              <div class="control ">
                <input class="input " type="text" >
              </div>
            </div>
           </div>
         </div>
         <input class="button is-normal  is-flex is-justify-content-center is-align-content-center has-text-white" type="submit">
          
        </div>
      </div>
  </section>
</body>

</html>