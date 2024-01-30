<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area App</title>
    <link rel="stylesheet" href="./app.css">
</head>

<body>

    <main class=" max-w-[1000px] mx-auto p-10">

        <header class=" flex gap-5  items-center mb-6">
            <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#docs-sidebar" aria-controls="docs-sidebar" aria-label="Toggle navigation">
                <span class="sr-only">Toggle Navigation</span>
                <svg class="flex-shrink-0 w-6 h-6" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <h1 class=" text-3xl font-serif font-bold">Backend Projects</h1>


        </header>
        <div id="docs-sidebar" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto 2xl:block 2xl:translate-x-0 2xl:end-auto 2xl:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500 dark:bg-gray-800 dark:border-gray-700">
            <div class="px-6">
                <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">My Apps</a>
            </div>
            <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="space-y-1.5">
                    <li class="hs-accordion" id="account-accordion">
                        <button type="button" class="hs-accordion-toggle hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-2xl hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="18" cy="15" r="3" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                <path d="m21.7 16.4-.9-.3" />
                                <path d="m15.2 13.9-.9-.3" />
                                <path d="m16.6 18.7.3-.9" />
                                <path d="m19.1 12.2.3-.9" />
                                <path d="m19.6 18.7-.4-1" />
                                <path d="m16.8 12.3-.4-1" />
                                <path d="m14.3 16.6 1-.4" />
                                <path d="m20.7 13.8 1-.4" />
                            </svg>
                            Area Calculator

                            <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </button>

                        <div id="account-accordion" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                            <ul class="pt-2 ps-2">
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="area.php">
                                        Result
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="records.php">
                                        Records
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="hs-accordion" id="account-accordion">
                        <button type="button" class="hs-accordion-toggle hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300 dark:hs-accordion-active:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="18" cy="15" r="3" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                <path d="m21.7 16.4-.9-.3" />
                                <path d="m15.2 13.9-.9-.3" />
                                <path d="m16.6 18.7.3-.9" />
                                <path d="m19.1 12.2.3-.9" />
                                <path d="m19.6 18.7-.4-1" />
                                <path d="m16.8 12.3-.4-1" />
                                <path d="m14.3 16.6 1-.4" />
                                <path d="m20.7 13.8 1-.4" />
                            </svg>
                            Exchange Rate

                            <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </button>

                        <div id="account-accordion" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                            <ul class="pt-2 ps-2">
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="exchangeResult.php">
                                        Exchange Result
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:text-slate-400 dark:hover:text-slate-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="exchangeRecord.php">
                                        Exchange Records
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>




                </ul>
            </nav>
        </div>

        <section class=" bg-gray-100 p-10 rounded-lg">

            <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                        Home
                    </a>
                    <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </li>

                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                    Exchange Rate
                </li>
            </ol>

            <hr class="  border-gray-300 my-4">

            <!-- exchange form  -->



            <div>
               <form method="post" action="exchangeResult.php">
               
                <div class="mb-3">

                    
                   

                    <input type="number" id="baseAmount" name="base_amount"  aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Amount" required>

                </div>

                
                <div class="flex gap-3">

                    
               <div class="flex-grow">
                <p class="font-sans text-xl">From:</p>
                <select id="baseCurrency" name="base_currency" class="bg-gray-50 col-span-1   border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        
                    <?php 
                        $data = file_get_contents("https://forex.cbm.gov.mm/api/latest");
                        $extract = json_decode($data);
                        $currencies = get_object_vars($extract->rates);
                        $keys = array_keys($currencies);
        
                        for($i = 0 ; $i < count($keys);$i++) {
                            echo "<option value=$keys[$i]>". $keys[$i] . "</option>";
                        };
                    ?>
                       
                    </select>

               </div>

               <div class="flex-grow">
                <p class="text-xl font-sans">To:</p>
                <select id="targetCurrency" name="target_currency" class="bg-gray-50 col-span-1   border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        
                <?php 
                        $data = file_get_contents("https://forex.cbm.gov.mm/api/latest");
                        $extract = json_decode($data);
                        $currencies = get_object_vars($extract->rates);
                        $keys = array_keys($currencies);
        
                        for($i = 0 ; $i < count($keys);$i++) {
                            echo "<option value=$keys[$i]>". $keys[$i] . "</option>";
                        };
                    ?>
                       
                    </select>

               </div>
                   

                    
                </div>

                <button class="text-white bg-blue-700 mt-5 w-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Exchange</button>


               </form>
            </div>

        </section>

    </main>

    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>