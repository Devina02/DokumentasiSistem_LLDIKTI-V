
 <div class="notification-card w-full max-w-md rounded-lg shadow-lg">
     <div class="p-6">
         <h2 class="text-lg font-semibold text-blue-600 mb-4">Konfirmasi Logout</h2>
         <div class="relative mb-4">
             <input type="text" placeholder="APAKAH ANDA YAKIN INGIN LOGOUT?"
                 class="w-full p-4 rounded-lg border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                 disabled>
             <div class="absolute right-3 top-3">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M10 6h4m-2 2v12M6 10h12M6 14h12M6 18h12" />
                 </svg>
             </div>
         </div>
         <ul class="mt-2">
             <li class="flex items-center p-2 hover:bg-blue-100 cursor-pointer rounded-lg" id="confirm-logout">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M9 12h6m-6 4h6m-3-8h3M5 8h6m-6 4h6m-6 4h3" />
                 </svg>
                 <span>IYA SAYA INGIN LOGOUT</span>
             </li>
             <li class="flex items-center p-2 hover:bg-blue-100 cursor-pointer" id="cancel-logout">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M9 12h6m-6 4h6m-3-8h3M5 8h6m-6 4h6m-6 4h3" />
                 </svg>
                 <span>TIDAK SAYA TIDAK INGIN LOGOUT</span>
             </li>
         </ul>
     </div>
 </div>
