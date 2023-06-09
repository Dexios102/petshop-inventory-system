<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Orders</title>
   <link rel="stylesheet" href="../styles/main.css">
   <script src="https://cdn.tailwindcss.com"></script>
   <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
   <link href="/dist/output.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<?php session_start(); ?>
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
                  <img src="../resources/images/098cfa107b3fa97496db3f892419d5fc.png" class="h-12 w-12 mr-3"
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
                        <img class="w-8 h-8 rounded-full" src="../resources/images/icon-256x256.png" alt="user photo">
                     </button>
                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                     id="dropdown-user">
                     <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900" role="none">
                           <?php echo $_SESSION['fullname']; ?>
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate" role="none">
                           <?php echo $_SESSION['email'] ?>
                        </p>
                     </div>
                     <ul class="py-1" role="none">
                        <li>
                           <a href="../index.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                              role="menuitem">Dashboard</a>
                        </li>
                        <li>
                           <a href="../controls/logout.php"
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
               <a href="../index.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
                  <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                     fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                     <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                  </svg>
                  <span class="ml-5">Dashboard</span>
               </a>
            </li>
            <li>
               <a href="inventory.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
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
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
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
               <a href="../controls/logout.php"
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
         <h1 class="text-3xl font-bold text-gray-600 uppercase tracking-wide mb-5">
            Orders Data</h1>


         <div class="relative overflow-x-auto  sm:rounded-lg">
            <div class="flex items-center justify-end pb-4 mb-4">
               <label for="table-search" class="sr-only">Search</label>
               <div class="relative">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                     <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                           d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                           clip-rule="evenodd"></path>
                     </svg>
                  </div>
                  <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg
            w-80 focus:ring-blue-500 focus:border-blue-500 bg-gray-200" placeholder="Search for users">
               </div>
            </div>
            <table class="w-full text-sm text-center text-gray-500" id="table">
               <thead class="text-xs text-white uppercase bg-blue-500">
                  <tr>
                     <th scope="col" class="px-6 py-3 text-left">
                        Buyer
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Product Name
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Quantity
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Total Price
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Order Status
                     </th>
                     <th scope="col" class="px-6 py-3">
                        Action
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                      include '../controls/conn.php';
                      $select = "SELECT * FROM tbl_orders";
                      $selectstatement = $pdo->query($select);
                      $result = $selectstatement->fetchAll(PDO::FETCH_ASSOC);
                      if($result){
                        foreach($result as $r){
                           ?>
                           <td class="px-6 py-4 text-left">
                              <div class="font-bold"><?php echo $r['name'] ?></div>
                              <div><?php echo $r['email'] ?></div>
                           </td>
                           <td class="px-6 py-4">
                           <?php echo $r['product_name'] ?>
                           </td>
                           <td class="px-6 py-4">
                           <?php echo $r['order_quantity'] ?>
                           </td>
                           <td class="px-6 py-4 font-bold">
                              ₱ <?php echo $r['total_price'] ?>
                           </td>
                           <td class="px-6 py-4">
                              <div class="flex items-center pl-20">
                                 <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> <?php echo $r['status'] ?>
                              </div>
                           </td>
                           <td class="py-10 flex flex-row gap-4 justify-center items-center">
                              <a href="#" class="font-medium text-blue-600 hover:underline" id="openModalButton">Edit</a>
                           </td>
                        </tr>
                           <!-- Modal -->
  <div id="modal" class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-gray-500 bg-opacity-50 hidden">
   <div class="bg-white rounded shadow-lg p-8 w-96">
     <h2 class="text-2xl font-bold mb-4">Update Order</h2>
     <div class="mb-4">
       <label for="buyer" class="block text-gray-700 text-sm font-bold mb-2">Buyer:</label>
       <p id="buyer" class="bg-gray-100 px-3 py-2 rounded"><?php echo $r['name'] ?></p>
     </div>
     <div class="mb-4">
       <label for="productName" class="block text-gray-700 text-sm font-bold mb-2">Product Name:</label>
       <p id="productName" class="bg-gray-100 px-3 py-2 rounded"><?php echo $r['product_name'] ?></p>
     </div>
     <div class="mb-4">
      <label for="productName" class="block text-gray-700 text-sm font-bold mb-2">Product Price:</label>
      <p id="productName" class="bg-gray-100 px-3 py-2 rounded">₱ <?php echo $r['price_perunit'] ?></p>
    </div>
     <div class="mb-4">
       <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity:</label>
       <input type="text" readonly id="quantity" value="<?php echo $r['order_quantity'] ?>" name="quantity" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
     </div>
     <div class="mb-4">
       <label for="totalPrice" class="block text-gray-700 text-sm font-bold mb-2">Total Price:</label>
       <p id="totalPrice" class="bg-gray-100 px-3 py-2 rounded">₱ <?php echo $r['total_price'] ?></p>
     </div>
     <form method="POST" action="../controls/orders/order_stat.php?a=<?php echo $r['order_id'] ?>">
     <div class="mb-4">
       <label for="orderStatus" class="block text-gray-700 text-sm font-bold mb-2">Order Status:</label>
       <select id="orderStatus" name="orderStatus" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
         <option value="Pending">Pending</option>
         <option value="Approved">Approved</option>
       </select>
     </div>
     <div class="flex justify-between">
       <button id="closeModalButton" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
         Close
       </button>
       <button id="updateOrderButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
         Update Order
       </button>
     </div>
     </form>
   </div>
 </div>
                           <?php
                        }
                      }
                  ?>
                  <tr class="bg-white border-b hover:bg-gray-50">
               </tbody>
            </table>
         </div>

      </div>
   </div>

</body>
<script src="../function/dropdown-user.js"></script>
<script src="../function/modal-update.js"></script>
<script>
   const searchInput = document.getElementById('table-search-users');
   const dataTable = document.getElementById('table');

   searchInput.addEventListener('input', () => {
     const searchValue = searchInput.value.toLowerCase();
     const rows = dataTable.getElementsByTagName('tr');

     for (let i = 1; i < rows.length; i++) { // Start from index 1 to exclude the table header
       const row = rows[i];
       const buyer = row.getElementsByTagName('td')[0].innerText.toLowerCase();
       const productName = row.getElementsByTagName('td')[1].innerText.toLowerCase();
       const orderStatus = row.getElementsByTagName('td')[2].innerText.toLowerCase();

       if (buyer.includes(searchValue) || productName.includes(searchValue) || orderStatus.includes(searchValue)) {
         row.style.display = '';
       } else {
         row.style.display = 'none';
       }
     }
   });

   
   const openModalButton = document.getElementById('openModalButton');
   const closeModalButton = document.getElementById('closeModalButton');
   const modal = document.getElementById('modal');
   const quantityInput = document.getElementById('quantity');
   const totalPriceText = document.getElementById('totalPrice');
   const orderStatusSelect = document.getElementById('orderStatus');
  


   const openModal = () => {
     modal.classList.remove('hidden');
     document.body.classList.add('modal-active');
   };

   const closeModal = () => {
     modal.classList.add('hidden');
     document.body.classList.remove('modal-active');
   };

   openModalButton.addEventListener('click', openModal);
   closeModalButton.addEventListener('click', closeModal);
   quantityInput.addEventListener('input', updateTotalPrice);
   orderStatusSelect.addEventListener('change', updateOrderStatus);
 </script>


</html>