<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                <h3 class="text-2xl font-semibold text-gray-900">
                    Are you sure you want to leave?
                    <hr class="mt-4 border-2 border-b border-blue-700 w-1/4">
                </h3>
<!--                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">-->
<!--                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">-->
<!--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>-->
<!--                    </svg>-->
<!--                    <span class="sr-only">Close modal</span>-->
<!--                </button>-->
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500">
                    If you're not ready to go, click 'Stay'. Otherwise, click 'Exit' to leave and continue with the rest of the tasks.
                </p>
            </div>
            <!-- Modal footer -->
            <form action="./confirmation.php" method="post">
                <div class="flex flex-col items-center p-4 md:p-5 rounded-b space-y-2">
                    <button data-modal-hide="default-modal" type="button" class="w-full text-blue-700 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 border border-blue-700 text-sm font-medium px-5 py-3 hover:text-gray-900 focus:z-10">Stay</button>
                    <!-- Hidden input field to store the selected amount -->
                    <input type="hidden" id="selectedAmount" name="selectedAmount" value="0" />
                    <input type="hidden" id="donation_action" name="donation_action" value="1" />
                    <button data-modal-hide="default-modal" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-3 text-center">Exit</button>
                </div>
            </form>
        </div>
    </div>
</div>