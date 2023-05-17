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
            class="py-3 px-6 flex items-center gap-4 text-white cursor-pointer bg-gray-100 text-black rounded-lg"
          >
            <ion-icon name="home-outline" class="text-xl text-indigo-600"></ion-icon>
            <a href="erp.html" class="font-semibold text-black">Home</a>
          </div>

          <div
          class="mt-3 px-6 py-3 flex items-center gap-4  cursor-pointer bg-gray-100 rounded-lg"
        >
        <ion-icon name="add-circle" class="text-xl text-indigo-600"></ion-icon>
          <a href="subregistration.php" class="font-semibold ">Subject Regist.</a>
        </div>

          <div
            class="mt-3 py-3 px-6 flex items-center gap-4 cursor-pointer bg-indigo-600 rounded-lg"
          >
            <ion-icon name="person" class="text-xl text-white"></ion-icon>
            <a href="" class="font-semibold text-white">Account</a>
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
       
          <div class="w-full h-[600px] bg-white shadow-lg">
                

            <div class="mt-10 border px-5">
                <form action="" method="POST" class="flex items-center gap-9">
                    <div class="py-6">
                        <p class="font-semibold">Enter your rollno:</p>
                        <input type="text" class="border w-[250px] p-3 mt-4 border-gray-700 rounded focus:ring" name="rollno" >
                    </div>
                    <div class="mt-9" >
                        <button type="submit" name="submit" class="w-[120px] py-3 rounded text-white font-semibold bg-indigo-600">Submit</button>
                    </div>
                </form>
            </div>


            
             



















            <div class="w-full h-auto border px-6 flex flex-col gap-7 text-gray-500 bg-blue-100">

            <?php

include 'dbconnection.php';
if(isset($_POST['submit'])){
  $rollno = $_POST['rollno'];
  $sql = "select * from `studentinfo` where rollno='$rollno'";
  $result = mysqli_query($conn,$sql);
  if($result){
        while($row = mysqli_fetch_assoc($result)){
          $name = $row['name'];
          $email = $row['email'];
          $sub1 = $row['sub1'];
          $sub2 = $row['sub2'];
          $sub3 = $row['sub3'];
          $sub4 = $row['sub4'];
          $sub5 = $row['sub5'];
          $sub6 = $row['sub6'];






        }


            echo '
                
            <div class="mt-10">
               <p class="font-semibold">Name:<span class="text-black font-mono ml-4">   '.$name.'</span></p>
            </div>
            <div class="">
                <p class="font-semibold">Email:<span class="text-black font-mono ml-4">'.$email.'</span></p>
             </div>
            <div class="">
                <p class="font-semibold">subject1: <span class="font-mono text-black ml-4">'.$sub1.'</span></p>
             </div>
             <div class="">
                <p class="font-semibold">subject2:<span class="font-mono text-black ml-4">'.$sub2.'</span></p>
             </div>
             <div class="">
                <p class="font-semibold">subect3:<span class="font-mono text-black ml-4">'.$sub3.'</span></p>
             </div>
             <div class="">
                <p class="font-semibold">subject4:<span class="text-black ml-4 font-mono">'.$sub4.'</span></p>
             </div>
             <div class="">
                <p class="font-semibold">subject5:<span class="font-mono text-black ml-4">'.$sub5.'</span></p>
             </div>
             <div class="">
                <p class="font-semibold">subject6:<span class="text-black font-mono ml-4">'.$sub6.'</span></p>
             </div>
            </div>
          </div> 
          ';

        }
      }
          
          ?>
          
          
           
       

       </div>
        </div>
      </div>
    </div>
  </body>
</html>


<!-- <?php

// include 'dbconnection.php';
// if(isset($_POST['submit'])){
//   $rollno = $_POST['rollno'];
  


//   $sql = "select * from `studentinfo` where rollno='$rollno'";
//   $result = mysqli_query($conn,$sql);
//   if($result){
//     while($row = mysqli_fetch_assoc($result)){
//       $name = $row['name'];
//       $email = $row['email'];
//     }
//   }
// }

?> -->
