<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> Contact Form</title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="SARAH'S CREATE ITEM PAGE">Create new item</a>
                <a class="nav-item nav-link" href="CONTACT.PHP">Contact</a>
                  <a class="nav-item nav-link" href="TERMSOFUSE.PHP">Terms of use</a>
                <a class="nav-item nav-link" href="MYDASHBOARD.PHP">My account dashboard</a>
                <a class="nav-item nav-link" href="logout.php">Log out</a>
            </div>
        </nav>
  <div class="container">
  <form action="action_page.php">
      
      
      <div class="container" style="background-color:white">
          <style>
     .container{
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
     }
     body {
  background-color: lightblue;
}

          </style>
      </div>
<div class ="row">
    <div class ="col-50">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
</div>
      
  <div class ="row">
      <div class = "col-50"> 
    <label for="gname">Group Id</label>
    <input type="text" id="gid" name="groupid" placeholder="Your group..">
      </div> 
      </div>
      <div class ="row">
          <div class ="col-50">
              <label for ="email">Email</label>
              <input type="text" id="email" name="email" placeholder="Your email..">
              </div>
      </div>
         
   <div class ="row">
      <div class = "col-50"> 
    <label for="cnumber">Contact Number</label>
    <input type="text" id="cnumber" name="cnumber" placeholder="Your contact number..">
      </div> 
      </div>
      
    <label for="Reason for contact">Reason for contact</label>
    <select id="Reason for contact" name="Reason for contact">
      <option value="for admin">For Admin</option>
      <option value="for compliant">For Compliant</option>
      <option value="to request an item">To Request An Item</option>
     
    </select>
    
          </div>
      </div>

      <div class="row">
          <div class ="col-50"> 
    
    <textarea id="subject" name="subject" placeholder="Write something.." 
              style="height:200px"></textarea>

              </div>
      </div>
          <div class ="row">
              <div class ="col-50">
    <input type="submit" value="Submit">
    
              </div>
          </div>
<button class="buttonload">
  <i class="fa fa-circle-o-notch fa-spin"></i>Loading...
</button>
  </form>
</div>
    