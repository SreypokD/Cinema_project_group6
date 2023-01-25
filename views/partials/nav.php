<nav class=" bg-red-600 text-white w-full">
	<div class="px-5 xl:px-12 py-6 flex w-full items-center justify-between">
		<a class="text-3xl font-bold font-heading" href="#">
			DATE MOVIE.
		</a>
		<div class="hidden xl:flex items-center space-x-5 items-center">
			<a class="flex items-center hover:text-gray-200" href="#">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
				</svg>
				<!-- <span class="flex absolute -mt-5 ml-4">
					<span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
					<span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
					</span>
				</span> -->
			</a>
			<a class="hover:text-gray-200" href="/login">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
				</svg>
			</a>
			<!-- Sign In / Register      -->
			<a class="flex items-center hover:text-gray-200" href="/seller">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
					viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
			</a>

		</div>
	</div>
	<div class="bg-black">
		<div class="container mx-auto px-5 xl:px-12 py-6 flex justify-between items-center">
			<div class="flex space-x-10">
				<a href="/" class="flex items-center space-x-2 <?= urlIs('/') ? 'border-white border-y-2' : '' ?>">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg"
							class="<?= urlIs('/') ? ' font-bold text-white' : 'text-red-500 font-bold' ?> h-6 w-6"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
						</svg>
					</span>
					<span class="<?= urlIs('/') ? ' font-bold text-white' : 'text-red-500 font-bold' ?>">HOME</span>
				</a>

				<a class="<?= urlIs('/movie') ? 'border-white border-y-2' : '' ?> flex items-center space-x-2"
					href="/movie">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg"
							class="<?= urlIs('/movie') ? ' font-bold text-white' : 'text-red-500 font-bold' ?>h-6 w-6"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
						</svg>
					</span>
					<span
						class="<?= urlIs('/movie') ? ' font-bold text-white' : 'text-red-500 font-bold' ?>">MOVIES</span>
				</a>
				<a class="<?= urlIs('/booking') ? 'border-white border-y-2' : '' ?> flex items-center space-x-2"
					href="/booking">
					<span>
						<svg xmlns="http://www.w3.org/2000/svg"
							class="<?= urlIs('/booking') ? 'font-bold text-white' : 'text-red-500 font-bold' ?> h-6 w-6"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
						</svg>
					</span>
					<span
						class="<?= urlIs('/booking') ? ' font-bold text-white' : 'text-red-500 font-bold' ?>">BOOKING</span>
			</div>
			</a>
			<div class="lg:flex hidden items-center space-x-2 bg-white py-2 px-10 rounded-full">
				<span>
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black cursor-pointer" fill="none"
						viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
					</svg>
				</span>
				<input class="outline-none text-red-500 placeholder:text-black" type="search" placeholder="Search..." />
			</div>
		</div>
	</div>
	<!-- Responsive navbar -->
	<a class="xl:hidden flex mr-6 items-center" href="#">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24"
			stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
				d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
		</svg>
		<span class="flex absolute -mt-5 ml-4">
			<span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
			<span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
			</span>
		</span>
	</a>
	<a class="navbar-burger self-center mr-12 xl:hidden" href="#">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24"
			stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
		</svg>
	</a>
</nav>
