<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

  <title>Dashboard</title>

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> --}}

    <link rel="stylesheet" href='{{ asset('app.css') }}'>
</head>
    
    {{-- <body class="my-login-page d-flex align-items-center justify-content-center" style="min-height:100vh;min-width:100vw;"> --}}
    
    <body>
       
        <section class="vh-100 gradient-custom">
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Forms</h1>

                <div class="flex flex-wrap">
                {{-- <div class="flex flex-wrap"> --}}
                    {{-- <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Contact Form
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl">
                                <div class="">
                                    <label class="block text-sm text-gray-600" for="name">Name</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Your Name" aria-label="Name">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-gray-600" for="email">Email</label>
                                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" placeholder="Your Email" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="message">Message</label>
                                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="message" name="message" rows="6" required="" placeholder="Your inquiry.." aria-label="Email"></textarea>
                                </div>
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div> --}}

                    <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> SU Alumni Update & Clearance Form  
                        </p>
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl">
                                <p class="text-lg text-gray-800 font-medium pb-4">Personal Information</p>
                                
                                {{-- A --}}
                                <div class="inline-block mt-2 w-1/3 pr-1">
                                    <label class=" text-sm text-gray-600" for="cus_name">Last Name</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Last Name" aria-label="Name">
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-1 w-1/3">
                                    <label class=" text-sm text-gray-600" for="cus_name">First Name</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="First Name" aria-label="Name">
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-3 w-1/3">
                                    <label class=" text-sm text-gray-600" for="cus_name">Middle Name</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Middle Name" aria-label="Name">
                                </div>

                                {{-- B --}}
                                <div class="inline-block mt-2 w-1/3 pr-1">
                                    <label class=" text-sm text-gray-600" for="birth">Birthdate</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="birth" name="birth" type="text" required="" placeholder="Date of Birth" aria-label="Birth">
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-1 w-1/3">
                                    <label class=" text-sm text-gray-600" for="sex">Sex</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="sex" name="sex" type="text" required="" placeholder="Sex" aria-label="Sex">
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-3 w-1/3">
                                    <label class=" text-sm text-gray-600" for="natio">Nationality</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="natio" name="natio" type="text" required="" placeholder="Nationality" aria-label="Nationality">
                                </div>

                                {{-- C --}}
                                <div class="inline-block mt-2 w-1/3 pr-1">
                                    <label class=" text-sm text-gray-600" for="status">Civil Status</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="status" name="status" type="text" required="" placeholder="Civil Status" aria-label="Status">
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-1 w-1/3">
                                    <label class=" text-sm text-gray-600" for="spouse">Spouse Name</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="spouse" name="spouse" type="text" required="" placeholder="Spouse Name" aria-label="Spouse">
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-3 w-1/3">
                                    <label class=" text-sm text-gray-600" for="number">Mobile/Contact Number</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="number" name="number" type="text" required="" placeholder="Contact Number" aria-label="Number">
                                </div>
                                <div class="inline-block mt-2 w-1/3 pr-1">
                                    <label class=" text-sm text-gray-600" for="email">Active Email Address</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" placeholder="Email" aria-label="Email">
                                </div>

                            </form>
                        </div>
                    <br>
                        
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl">
                                
                            <p class="text-lg text-gray-800 font-medium pb-4">Address Information</p>                               
                            <p class="text-lg text-gray-800 font-light pb-4">Current Address</p>

                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Street" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class="hidden text-sm text-gray-600" for="cus_email">City</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="City" aria-label="Email">
                                </div>
                                <div class="inline-block mt-2 w-1/2 pr-1">
                                    <label class="hidden text-sm text-gray-600" for="cus_email">Country</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Country" aria-label="Email">
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                                    <label class="hidden text-sm text-gray-600" for="cus_email">Zip</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="text" required="" placeholder="Zip" aria-label="Email">
                                </div>

                            <p class="text-lg text-gray-800 font-light pb-4">Home Address</p>

                                <div class="mt-2">
                                    <label class=" block text-sm text-gray-600" for="cus_email">Address</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Street" aria-label="Email">
                                </div>
                                <div class="mt-2">
                                    <label class="hidden text-sm text-gray-600" for="cus_email">City</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="City" aria-label="Email">
                                </div>
                                <div class="inline-block mt-2 w-1/2 pr-1">
                                    <label class="hidden text-sm text-gray-600" for="cus_email">Country</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Country" aria-label="Email">
                                </div>
                                <div class="inline-block mt-2 -mx-1 pl-1 w-1/2">
                                    <label class="hidden text-sm text-gray-600" for="cus_email">Zip</label>
                                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email"  name="cus_email" type="text" required="" placeholder="Zip" aria-label="Email">
                                </div>
                                
                            </form>
                        </div>

                        <p class="pt-6 text-gray-600">
                            Source: <a class="underline" href="https://tailwindcomponents.com/component/checkout-form">https://tailwindcomponents.com/component/checkout-form</a>
                        </p>
                    </div>
                </div>
            </main>
    
            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer>
        </div>
        </section>

        <script>
            // Initialization for ES Users
            import { Input, Ripple, initMDB } from "mdb-ui-kit";

            initMDB({ Input, Ripple });    
        </script>                                                     

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/my-login.js"></script>

        
        
    </body>


</html>
