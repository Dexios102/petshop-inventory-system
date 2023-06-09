<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>
   <link rel="stylesheet" href="../styles/main.css">
   <script src="https://cdn.tailwindcss.com"></script>
   <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
   <link href="/dist/output.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
   <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
         <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
               <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center
           p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none
            focus:ring-2 focus:ring-gray-200 dark:text-gray-400">
                  <span class="sr-only">Open sidebar</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012
                  4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                     </path>
                  </svg>
               </button>
               <a href="../index.html" class="flex ml-2 md:mr-24">
                  <img src="../resources/images/098cfa107b3fa97496db3f892419d5fc.png" class="h-12 w-12 mr-3" alt="Petshop Logo" />
                  <span class="self-center text-xl font-bold sm:text-2xl whitespace-nowrap">Petshop
                     Inventory</span>
               </a>
            </div>
            <div class="flex items-center">
               <div class="flex items-center ml-3">
                  <div>
                     <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user" onclick="toggleDropdown()">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="../resources/images/icon-256x256.png" alt="user photo">
                     </button>
                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
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
                           <a href="../controls/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                              out</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>

   <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-60 h-screen pt-28 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
      <div class="h-full px-2 pb-4 overflow-y-auto">
         <ul class="space-y-6 font-medium">
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                     </path>
                  </svg>
                  <span class="flex-1 ml-5 whitespace-nowrap">Products</span>
               </a>
            </li>
            <li>
               <a href="check_outs.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-5 whitespace-nowrap">Checkouts</span>
               </a>
            </li>
            <li>
               <a href="components/auth/login.html" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-5 whitespace-nowrap">Logout</span>
               </a>
            </li>
         </ul>
      </div>
   </aside>

   <div class="p-10 sm:ml-64">
      <div class="container items-center px-1 py-10 m-auto mt-5">
         <h1 class="text-3xl font-bold text-gray-600 uppercase tracking-wide">
            Checkout Data</h1>
         <div class="relative overflow-x-auto mt-5">
            <table class="w-full text-sm text-left text-gray-500">
               <thead class="text-xs text-white uppercase bg-blue-500">
                  <tr>
                     <th scope="col" class="px-6 py-3 rounded-l-lg">
                        Product name
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Qty
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Price Unit
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Total Price
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Status
                     </th>
                     <th scope="col" class="px-6 py-3 rounded-r-lg text-center">
                        Action
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="bg-white border-b hover:bg-gray-50"">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Apple MacBook Pro 17"
                     </th>
                     <td class="px-6 py-4">
                        1
                     </td>
                     <td class="px-6 py-4">
                        $2999
                     </td>
                     <td class="px-6 py-4">
                        $7999
                     </td>
                     <td class="px-6 py-4">
                        Ongoing
                     </td>
                     <td class="px-6 py-4 text-center">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                         focus:ring-blue-300 font-medium rounded-lg
                          text-sm px-5 py-2.5 text-center">
                           Recieved
                        </button>
                     </td>
                  </tr>
               </tbody>
               <tfoot>
                  <tr class="font-semibold text-gray-900">
                     <td colspan="4"></td>
                     <th scope="row" class="px-6 py-3 text-base text-right">Total</th>
                     <td class="px-6 py-3 text-center">21,000</td>
                  </tr>
               </tfoot>
            </table>
         </div>

      </div>
   </div>
</body>

</html>