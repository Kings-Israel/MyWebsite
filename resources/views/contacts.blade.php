<x-main>
    <div class="container">

		@include('layouts.header')

		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Started -->
			<div class="section started relative z-[97] opacity-100 visible text-center p-0 m-0">
				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content inline-block align-middle text-center relative">
							<div class="h-title text-[68px] font-roboto text-[#141414] font-bold uppercase tracking-[0.04em] mx-0 mt-[10px] mb-[5px] glitch-effect" data-text="Contacts">Contacts</div>
							<div class="h-subtitle typing-bread text-[13px]">
								<p><a href="{{ url('/') }}">Home</a> / <span class="text-extra-color">Contacts</span></p>
							</div>
							<span class="typed-bread"></span>
						</div>
					</div>
				</div>
				<a href="#" class="mouse_btn text-[24px] text-extra-color text-center absolute w-[20px] h-[40px] left-1/2 bottom-[80px] ml-[-10px]"><span class="ion ion-mouse relative top-0"></span></a>
			</div>

			<!-- Contacts Info -->
			<div class="section contacts relative z-[97] px-[80px] pt-0 pb-[150px] opacity-100 visible">
				<div class="content relative">
					<div class="title relative">
						<div class="title_inner inline-block align-middle text-center relative leading-[18px] text-[13px] text-[#141414] uppercase tracking-[0.04em]">Contacts</div>
					</div>
					<div class="service-items">
						<div class="service-item inline-block align-top w-[28%] mt-[50px] mr-[4%] mb-0 ml-0 text-left">
							<div class="icon float-left w-[36px] text-center text-[30px] text-extra-color"><span class="ion ion-android-phone-portrait block"></span></div>
							<div class="name font-medium text-[13px] text-[#141414] mt-[6px] mr-0 mb-0 ml-[46px]">Phone</div>
							<p class="!mt-[20px] !mb-0">
								+ (254) 707 137 687
							</p>
						</div>
						<div class="service-item inline-block align-top w-[28%] mt-[50px] mr-[4%] mb-0 ml-0 text-left">
							<div class="icon float-left w-[36px] text-center text-[30px] text-extra-color"><span class="ion ion-email block"></span></div>
							<div class="name font-medium text-[13px] text-[#141414] mt-[6px] mr-0 mb-0 ml-[46px]">Email</div>
							<p class="!mt-[20px] !mb-0">
								<a href="mailto:milimokings@gmail.com">milimokings@gmail.com</a>
							</p>
						</div>
					</div>
					<div class="contact_form mt-[30px]">
						<form id="cform" method="post">
							<div class="group-val">
								<input type="text" name="name" placeholder="Name" />
							</div>
							<div class="group-val">
								<input type="text" name="email" placeholder="Email" />
							</div>
							<div class="group-val ct-gr">
								<textarea class="!mt-[55px]" name="message" placeholder="Message"></textarea>
							</div>
							<a href="#" class="btn fill" onclick="$('#cform').submit(); return false;" data-text="Send Message">Send Message</a>
						</form>
						<div class="alert-success">
							<p>
								Thanks, your message is sent successfully. We will contact you shortly!
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>

		@include('layouts.footer')

	</div>
</x-main>
