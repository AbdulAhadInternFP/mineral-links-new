 <x-auth-layout>
     <!-- Right Panel: Registration Form -->
     <section id="registration_form_panel" class="w-1/2 bg-brand-offwhite flex items-center justify-center p-16">
         <div id="registration_card" class="w-full max-w-xl bg-white p-12 rounded-xl shadow">
             <div class="text-left mb-8">
                 <h2 class="text-3xl font-bold text-gray-900">Create your account</h2>
                 <p class="text-gray-500 mt-2">Let's get you started with Mineral Link.</p>
             </div>

             <form action="#" method="POST" class=" grid grid-cols-2 gap-4">
                 <div>
                     <label for="full-name" class="block text-sm font-medium text-gray-700">Full Name</label>
                     <input id="full-name" name="full-name" type="text" required
                         class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-brand-sage focus:border-brand-sage"
                         placeholder="Jane Doe">
                 </div>
                 <div>
                     <label for="company-name" class="block text-sm font-medium text-gray-700">Company Name</label>
                     <input id="company-name" name="company-name" type="text" required
                         class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-brand-sage focus:border-brand-sage"
                         placeholder="Acme Energy Corp">
                 </div>
                 <div class="pt-2 col-span-2">
                     <label for="email" class="block text-sm font-medium text-gray-700">Work Email</label>
                     <input id="email" name="email" type="email" autocomplete="email" required
                         class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-brand-sage focus:border-brand-sage"
                         placeholder="jane.doe@acmeenergy.com">
                 </div>
                 <div>
                     <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                     <input id="password" name="password" type="password" required
                         class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-brand-sage focus:border-brand-sage">
                 </div>
                 <div>
                     <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm
                         Password</label>
                     <input id="confirm-password" name="confirm-password" type="password" required
                         class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-brand-sage focus:border-brand-sage">
                 </div>
                 <div class="col-span-2 h-1.5 w-full bg-gray-200 rounded-full overflow-hidden">
                     <div id="strength-bar"
                         class="h-full bg-gradient-to-r from-brand-sage to-brand-teal rounded-full transition-all duration-300"
                         style="width: 0%;"></div>
                 </div>
                 <div class="pt-2 col-span-2">
                     <button type="submit"
                         class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-brand-terracotta hover:bg-brand-terracotta/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-terracotta transition-colors duration-200">
                         Create Account
                     </button>
                 </div>
             </form>



             <div class="mt-8 text-center">
                 <p class="text-sm text-gray-600">
                     Already have an account?
                     <a href="{{route('login')}}" class="font-medium text-brand-teal hover:underline">Sign in</a>
                 </p>
             </div>
         </div>
     </section>
 </x-auth-layout>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const passwordInput = document.getElementById('password');
         const strengthBar = document.getElementById('strength-bar');

         passwordInput.addEventListener('input', function() {
             const password = passwordInput.value;
             let strength = 0;

             if (password.length >= 8) strength += 25;
             if (password.match(/[a-z]/)) strength += 25;
             if (password.match(/[A-Z]/)) strength += 25;
             if (password.match(/[0-9]/) || password.match(/[^a-zA-Z0-9]/)) strength += 25;

             if (password.length === 0) strength = 0;

             strengthBar.style.width = strength + '%';
         });
     });
 </script>
