<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </head>
  <body>
    <div class="w-full h-screen flex bg-[#F1F6F9]">
      <!-- side navbar for erp -->
      <div class="w-[20%] h-full bg-white shadow-lg px-10">
        <div class="mt-8 flex items-center gap-2 px-6">
          <div class="w-5 h-5 bg-indigo-600 rounded-lg"></div>
          <p class="font-semibold text-xl">Cutm Erp.</p>
        </div>

        <div class="mt-9">
          <div
            class="py-3 px-6 flex items-center gap-4  cursor-pointer bg-gray-100 rounded-lg"
          >
            <ion-icon name="home-outline" class="text-xl text-indigo-600"></ion-icon>
            <a href="erp.html" class="font-semibold">Home</a>
          </div>

          <div
          class="mt-3 px-6 py-3 flex items-center gap-4  cursor-pointer bg-indigo-500 rounded-lg"
        >
        <ion-icon name="add-circle" class="text-xl text-white"></ion-icon>
          <a href="subregistration.html" class="font-semibold text-white ">Subject Regist.</a>
        </div>

          <div
            class="mt-3 py-3 px-6 flex items-center gap-4 cursor-pointer bg-gray-100 rounded-lg"
          >
            <ion-icon name="person" class="text-xl text-indigo-600"></ion-icon>
            <a href="Account.php" class="font-semibold">Account</a>
          </div>

          <div
            class="mt-3 py-3 px-6 flex items-center gap-4 cursor-pointer bg-gray-100 rounded-lg"
          >
            <ion-icon name="reader" class="text-xl text-indigo-600"></ion-icon>
            <a href="" class="font-semibold">Admit Card</a>
          </div>

          <div
            class="mt-3 py-3 px-6 flex items-center gap-4 cursor-pointer bg-gray-100 rounded-lg"
          >
            <ion-icon name="wallet" class="text-xl text-indigo-600"></ion-icon>
            <a href="" class="font-semibold">Fees</a>
          </div>

          <div
            class="mt-3 py-3 px-6 flex items-center gap-4 cursor-pointer bg-gray-100 rounded-lg"
          >
            <ion-icon name="tv" class="text-xl text-indigo-600"></ion-icon>
            <a href="" class="font-semibold">Assignment</a>
          </div>

          <div
            class="mt-3 py-3 px-6 flex items-center gap-4 cursor-pointer bg-gray-100 rounded-lg"
          >
            <ion-icon
              name="bar-chart"
              class="text-xl text-indigo-600"
            ></ion-icon>
            <a href="" class="font-semibold">Grades</a>
          </div>

          <div
            class="mt-3 py-3 px-6 flex items-center gap-4 cursor-pointer bg-gray-100 hover:bg-gray-200 rounded-lg"
          >
            <ion-icon name="podium" class="text-xl text-indigo-600"></ion-icon>
            <a href="" class="font-semibold">Performance</a>
          </div>
        </div>
      </div>

      <!-- dash board -->
      <div class="w-[80%] px-10">
        
         <div class="w-full mt-[6%] h-[530px] bg-white  p-4">
             <form action="" method="POST" class="mt-4">
                <div class="">
                    <p class="font-semibold">Enter Rollno</p>
                    <input type="text" class="p-2 mt-2 w-[230px] rounded border-2 border-gray-400" name="rollno">
                </div>

                <div class="w-full h-[300px]  mt-5">
                     <div class="mt-2 font-semibold  text-[20px] text-gray-500">
                       <p>Select your subjects for sem-1</p>
                     </div>
                       
                
                     <div class="grid grid-cols-3 gap-10">

                     

                     <!--subject one for sem 1   -->
                     <div class="mt-5  w-[250px] h-auto">
                        <p class="font-semibold">Subject-1</p>
                        <select name="sub1" id="" class="border-2 border-black focus:ring rounded w-full mt-5 h-[40px] p-2">
                          <option value="">Select</option>  
                          <option value="C programming">C programming</option>
                          <option value="C programming">Java</option>
                          <option value="C programming">javascript</option>
                          <option value="C programming">c#</option>
                        </select>
                  </div>
                  <!-- end of subject 1 for sem one  -->
                  <!-- second subject start -->
                  <div class="mt-5  w-[250px] h-auto">
                    <p class="font-semibold">Subject-2</p>
                    <select name="sub2" id="" class="border-2 border-black focus:ring rounded w-full mt-5 h-[40px] p-2">
                      <option value="">Select</option>  
                      <option value="webprogramming">webprogramming  </option>
                      <option value="Android developemnt">Android developemnt</option>
                      <option value="ios developemnt">ios development</option>
                      <option value="flutter developemnt">flutter development</option>
                    </select>
              </div>
              <!-- second subject end -->
              <!-- third subject start -->
              <div class="mt-5  w-[250px] h-auto">
                <p class="font-semibold">Subject-3</p>
                <select name="sub3" id="" class="border-2 border-black focus:ring rounded w-full mt-5 h-[40px] p-2">
                  <option value="">Select</option>  
                  <option value="Reactjs">Reactjs</option>
                  <option value="vuejs">vuejs</option>
                  <option value="angularjs">angularjs</option>
                </select>
          </div>
          <!-- third subject end -->

          <!-- 4th -->
          <div class="mt-5  w-[250px] h-auto">
            <p class="font-semibold">Subject-3</p>
            <select name="sub4" id="" class="border-2 border-black focus:ring rounded w-full mt-5 h-[40px] p-2">
              <option value="">Select</option>  
              <option value="Computer network">Computer network</option>
              <option value="itim">itim</option>
            </select>
      </div>
      <!-- 4th end -->
      <!-- 5th start -->
      <div class="mt-5  w-[250px] h-auto">
        <p class="font-semibold">Subject-4</p>
        <select name="sub5" id="" class="border-2 border-black focus:ring rounded w-full mt-5 h-[40px] p-2">
          <option value="">select</option>  
          <option value="English">English</option>
          <option value="Hindi">Hindi</option>
          <option value="odia">odia</option>
        </select>
  </div>
      <!-- 5th end -->

      <!-- 6th start -->
      <div class="mt-5  w-[250px] h-auto">
        <p class="font-semibold">Subject-5</p>
        <select name="sub6" id="" class="border-2 border-black focus:ring rounded w-full mt-5 h-[40px] p-2">
          <option value="">Select</option>  
          <option value="dbms">database managment system</option>
        </select>
  </div>
  <!-- 6end -->
                  </div>

                  <div class="mt-16">
                    <button type="submit" name="submit" class="px-6 py-2 bg-indigo-600 text-white rounded shadow-lg">Select Sub</button>
                  </div>

                </div>
              
             </form>

         </div>
           
       </div>
        </div>
      </div>
    </div>
  </body>
</html>


<?php

 include 'dbconnection.php';
 if(isset($_POST['submit'])){
  $rollno = $_POST['rollno'];
  $sub1 = $_POST['sub1'];
  $sub2 = $_POST['sub2'];
  $sub3 = $_POST['sub3'];
  $sub4 = $_POST['sub4'];
  $sub5 = $_POST['sub5'];
  $sub6 = $_POST['sub6'];


  $sql = "update `studentinfo` set sub1='$sub1',sub2='$sub2',sub3='$sub4',sub4='$sub4',sub5='$sub5',sub6='$sub6' where rollno='$rollno'";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo "data inserted sucessful";
  }
  else{
    echo "error occured";
  }


 }

?>
