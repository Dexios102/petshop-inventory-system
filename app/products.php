<!DOCTYPE html>
<html lang="en">
<?php
include '../resources/includes/products_validate.php';
?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>
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
               <a href="../controls/logout.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 pl-7">
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
            Products Data</h1>
         <div class="flex flex-row flex-wrap gap-20">
            <?php
            include '../controls/conn.php';
            $select = "SELECT * FROM tbl_inventory";
            $selectstatement = $pdo->query($select);
            $result = $selectstatement->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
               foreach ($result as $r) {
            ?>
                  <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow mt-8">
                     <a href="#">
                        <img class="p-8 rounded-t-lg w-96 h-96" src="<?php echo "../controls/media/" . $r['img'] ?>" alt="product image" />
                     </a>
                     <div class="px-5 pb-5">
                        <a href="#">
                           <h2 id="proName<?php echo $r['inv_id'] ?>" class="text-2xl font-bold tracking-tight text-gray-900"><?php echo $r['product_name'] ?></h2>
                        </a>
                        <p class="pb-5">- <?php echo $r['description'] ?></p>
                        Available stocks:<p class="pb-5" id="stocks<?php echo $r['inv_id'] ?>">  <?php echo $r['quantity'] ?></p>
                        <div class="flex items-center justify-between">
                           <span class="text-3xl font-bold text-gray-900">₱ <span id="price<?php echo $r['inv_id'] ?>" class="text-3xl font-bold text-gray-900"><?php echo $r['price'] ?></span></span>
                           <div>
                              <button type="button" onclick="byProd(<?php echo $r['inv_id'] ?>)" id="buyButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                 Buy
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
            <?php
               }
            }
            ?>
         </div>
      </div>
   </div>

   <div id="modal" class="hidden fixed z-10 inset-0 overflow-y-auto">
      <div class="flex items-center justify-center min-h-screen p-4">
         <div class="bg-gray-100 border-black rounded-lg max-w-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Product Details</h2>
            <div id="productid" class="mb-2 hidden"></div>
            <div id="productName" class="mb-2"></div>
            <div id="quantity" class="mb-2"></div>
           <div class="mb-2">₱ <span id="price" ></span></div> 
           <div class="font-bold">₱ <span id="totalPrice" ></span></div> 
            <button id="confirmButton" class="mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
               Confirm Purchase
            </button>
            <button id="closeButton" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
               Close
            </button>
         </div>
      </div>
   </div>
</body>
<script src="../function/dropdown-user.js"></script>
<script>
   //const buyButton = document.getElementById('buyButton');
   const modal = document.getElementById('modal');
   const closeButton = document.getElementById('closeButton');
   const confirmButton = document.getElementById('confirmButton');
   const productid = document.getElementById('productid');
   const productNameElement = document.getElementById('productName');
   const quantityElement = document.getElementById('quantity');
   const priceElement = document.getElementById('price');
   const totalPriceElement = document.getElementById('totalPrice');

   function byProd(id) {
      const quantityInput = prompt('Enter the quantity you want to buy:');
      const stocks = document.getElementById('stocks'+id).innerHTML;
      const quantity = parseInt(quantityInput, 10);
      if (isNaN(quantity) || quantity <= 0) {
         alert('Please enter a valid quantity.');
         return;
      }
      else if(quantity > stocks){
         alert('Insufficient Stocks');
         return;
      }
      const productName = document.getElementById('proName'+id).innerHTML; 
      const price = document.getElementById('price'+id).innerHTML;  
      const totalPrice = quantity * price;

      productid.textContent = `${id}`;
      productNameElement.textContent = `${productName}`;
      quantityElement.textContent = `${quantity}`;
      priceElement.textContent = `${price}`;
      totalPriceElement.textContent = `${totalPrice}`;
      modal.classList.remove('hidden');
   };

   confirmButton.addEventListener('click', () => {
      var name = '<?php echo $_SESSION['fullname'] ?>'
      var email = '<?php echo $_SESSION['email'] ?>'
      var id = document.getElementById('productid').innerHTML;
      var product_name = document.getElementById('productName').innerHTML;
      var quantity = document.getElementById('quantity').innerHTML;
      var price = document.getElementById('price').innerHTML;
      var total = document.getElementById('totalPrice').innerHTML;

      $.ajax({
         url: '../controls/orders/add_order.php',
         type: 'POST',
         data: {
            id: id,
            name: name,
            email: email,
            product: product_name,
            quantity: quantity,
            price: price,
            total: total
         },
         cache: false,
         success: function(msg){
            alert('Purchase confirmed. Thank you for your order.');
            modal.classList.add('hidden');
         }
      })
   });

   closeButton.addEventListener('click', () => {
      modal.classList.add('hidden');
   });
</script>

</html>