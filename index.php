<!DOCTYPE html>
<html lang="en">
<?php
   include 'controls/conn.php';
   include 'resources/includes/session.php';
?>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <link rel="stylesheet" href="styles/main.css">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
   <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</head>

<body>
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
         <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
               <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                  type="button" class="inline-flex items-center
           p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none
            focus:ring-2 focus:ring-gray-200 dark:text-gray-400">
                  <span class="sr-only">Open sidebar</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012
                  4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                     </path>
                  </svg>
               </button>
               <a href="../index.html" class="flex ml-2 md:mr-24">
                  <img src="resources/images/098cfa107b3fa97496db3f892419d5fc.png" class="h-12 w-12 mr-3"
                     alt="Petshop Logo" />
                  <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap">Petshop
                     Inventory</span>
               </a>
            </div>
            <div class="flex items-center">
               <div class="flex items-center ml-3">
                  <div>
                     <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                        aria-expanded="false" data-dropdown-toggle="dropdown-user" onclick="toggleDropdown()">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="resources/images/icon-256x256.png" alt="user photo">
                     </button>
                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                     id="dropdown-user">
                     <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900" role="none">
                           <?php echo $_SESSION['fullname'] ?>
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate" role="none">
                           <?php echo $_SESSION['email'] ?>
                        </p>
                     </div>
                     <ul class="py-1" role="none">
                        <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                              role="menuitem">Dashboard</a>
                        </li>
                        <li>
                           <a href="controls/logout.php"
                              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                              out</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>

   <aside id="logo-sidebar"
      class="fixed top-0 left-0 z-40 w-60 h-screen pt-28 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
      aria-label="Sidebar">
      <div class="h-full px-2 pb-4 overflow-y-auto">
         <ul class="space-y-6 font-medium">
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
                  <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                     <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                  </svg>
                  <span class="ml-5">Dashboard</span>
               </a>
            </li>
            <li>
               <a href="app/inventory.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
                  <svg aria-hidden="true"
                     class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                     </path>
                     <path
                        d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                     </path>
                  </svg>
                  <span class="flex-1 ml-5 whitespace-nowrap">Inventory</span>
               </a>
            </li>
            <li>
               <a href="app/orders.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
                  <svg aria-hidden="true"
                     class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-5 whitespace-nowrap">Orders</span>
               </a>
            </li>
            <li>
               <a href="controls/logout.php"
                  class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
                  <svg aria-hidden="true"
                     class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                        clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-5 whitespace-nowrap">Logout</span>
               </a>
            </li>
         </ul>
      </div>
   </aside>

   <div class="p-10 sm:ml-64">
      <div class="container items-center px-1 py-10 m-auto mt-5">
         <div class="flex flex-wrap pb-3 mx-4 md:mx-24 lg:mx-0">
         <div class="w-full p-2 lg:w-1/4 md:w-1/2">
               <div class="flex flex-col px-6 py-10 overflow-hidden bg-white rounded-xl shadow-lg duration-300 group">
                  <div class="flex flex-row justify-between items-center">
                     <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                           <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                        </svg>
                     </div>
                  </div>
                  <?php
                     include 'controls/conn.php';

                     $select = "SELECT COUNT(*) as count FROM tbl_inventory";
                     $selectstatement = $pdo->query($select);
                     $result = $selectstatement->fetch(PDO::FETCH_ASSOC);
                     $count = $result['count'];
                  ?>
                  <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12"><?php echo $count ?> Products</h1>
                  <div class="flex flex-row justify-between">
                     <p>Products</p>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                           fill="currentColor">
                           <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                              clip-rule="evenodd" />
                        </svg>
                     </span>
                  </div>
               </div>
            </div>
            <div class="w-full p-2 lg:w-1/4 md:w-1/2">
               <div class="flex flex-col px-6 py-10 overflow-hidden bg-white rounded-xl shadow-lg duration-300 group">
                  <div class="flex flex-row justify-between items-center">
                     <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                           <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                        </svg>
                     </div>
                  </div>
                  <?php
                     $select = "SELECT COUNT(*) as count FROM tbl_orders WHERE status = 'Pending'";
                     $selectstatement = $pdo->query($select);
                     $result = $selectstatement->fetch(PDO::FETCH_ASSOC);
                     $count = $result['count'];
                  ?>
                  <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12"><?php echo $count ?> Pending</h1>
                  <div class="flex flex-row justify-between">
                     <p>Pending</p>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                           fill="currentColor">
                           <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                              clip-rule="evenodd" />
                        </svg>
                     </span>
                  </div>
               </div>
            </div>
            <div class="w-full p-2 lg:w-1/4 md:w-1/2">
               <div class="flex flex-col px-6 py-10 overflow-hidden bg-white  rounded-xl shadow-lg duration-300  group">
                  <div class="flex flex-row justify-between items-center">
                     <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                           <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                           <path fill-rule="evenodd"
                              d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                              clip-rule="evenodd" />
                        </svg>
                     </div>
                  </div>
                  <?php
                      $select = "SELECT COUNT(*) as count FROM tbl_orders WHERE status = 'Approved'";
                     $selectstatement = $pdo->query($select);
                     $result = $selectstatement->fetch(PDO::FETCH_ASSOC);
                     $count1 = $result['count'];
                  ?>
                  <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12"><?php echo $count1 ?> Orders</h1>
                  <div class="flex flex-row justify-between">
                     <p>Orders</p>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                           fill="currentColor">
                           <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                              clip-rule="evenodd" />
                        </svg>
                     </span>
                  </div>
               </div>
            </div>
            <div class="w-full p-2 lg:w-1/4 md:w-1/2">
               <div class="flex flex-col px-6 py-10 overflow-hidden bg-white rounded-xl shadow-lg duration-300 group">
                  <div class="flex flex-row justify-between items-center">
                     <div class="px-4 py-4 bg-gray-300  rounded-xl bg-opacity-30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                              clip-rule="evenodd" />
                        </svg>
                     </div>
                  </div>
                  <?php
                      $select = "SELECT COUNT(*) as count FROM tbl_orders WHERE status = 'Received'";
                     $selectstatement = $pdo->query($select);
                     $result = $selectstatement->fetch(PDO::FETCH_ASSOC);
                     $count2 = $result['count'];
                  ?>
                  <h1 class="text-3xl sm:text-4xl xl:text-5xl font-bold text-gray-700 mt-12"><?php echo $count2 ?>
                  </h1>
                  <div class="flex flex-row justify-between">
                     <p>Sales</p>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20"
                           fill="currentColor">
                           <path fill-rule="evenodd"
                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                              clip-rule="evenodd" />
                        </svg>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="container mx-auto p-4 flex flex-row items-center justify-center">
         <div id="pieChart" class="w-full h-64 mt-8 flex justify-center items-center"></div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.26.0"></script>

</body>

<script src="./function/dropdown-user.js"></script>
<script >
   document.addEventListener('DOMContentLoaded', function() {
    // Pie Chart Data
    var pieChartOptions = {
        series: [
         <?php
            $select = "SELECT * FROM tbl_inventory";
            $selectstatement = $pdo -> query($select);
            $result = $selectstatement->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
               foreach ($result as $r) {
                  echo $r['quantity'].",";
               }
            }   
         ?>
        ],
        chart: {
            width: 500,
            type: 'pie',
        },
        labels: [
         
         <?php
            $select = "SELECT * FROM tbl_inventory";
            $selectstatement = $pdo -> query($select);
            $result = $selectstatement->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
               foreach ($result as $r) {
                  echo "'".$r['product_name']."',";
               }
            }   
         ?>
      
      
      ],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 300
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var pieChart = new ApexCharts(document.querySelector('#pieChart'), pieChartOptions);
    pieChart.render();
});

</script>

</html>