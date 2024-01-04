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
							<div class="h-title text-[68px] font-roboto text-[#141414] font-bold uppercase tracking-[0.04em] mx-0 mt-[10px] mb-[5px] glitch-effect" data-text="Resume">Resume</div>
							<div class="h-subtitle typing-bread text-[13px]">
								<p><a href="{{ url('/') }}">Home</a> / <span class="text-extra-color">Resume</span></p>
							</div>
							<span class="typed-bread"></span>
						</div>
					</div>
				</div>
				<a href="#" class="mouse_btn text-[24px] text-extra-color text-center absolute w-[20px] h-[40px] left-1/2 bottom-[80px] ml-[-10px]"><span class="ion ion-mouse relative top-0"></span></a>
			</div>

			<!-- About -->
			<div class="section about relative z-[97] px-[80px] pt-0 pb-[150px] opacity-100 visible">
				<div class="content relative">
					<div class="title relative mb-[40px]">
						<div class="title_inner inline-block align-middle text-center relative leading-[18px] text-[13px] text-[#141414] uppercase tracking-[0.04em]">About Me</div>
					</div>
					<div class="image float-left">
						<img class="w-28 h-full rounded-[100px] inline-block" src="{{ asset('assets/img/1578845524502.jpeg') }}" alt="" />
					</div>
					<div class="desc ml-[130px]">
						<p>
							Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an, cule dicta iriure at. Ubique maluisset vel te,
							his dico vituperata ut. Pro ei phaedrum maluisset. Ex audire suavitate has, ei quodsi tacimates sapientem sed, pri zril ubique ut. Te
							cule tation munere noluisse. Enim torquatos ne pri, eum mollis salutandi corrumpit et, fugit apeirian duo ad.
						</p>
						<div class="info-list mb-[42px]">
							<ul>
								<li class="inline-block align-top w-[32%] mt-[12px] mb-0 mx-0"><strong class="font-normal text-extra-color">Name:</strong> Kings Israel</li>
								<li class="inline-block align-top w-[32%] mt-[12px] mb-0 mx-0"><strong class="font-normal text-extra-color">Age:</strong> 28 Years</li>
								<li class="inline-block align-top w-[32%] mt-[12px] mb-0 mx-0"><strong class="font-normal text-extra-color">Job:</strong> Web Developer</li>
								<li class="inline-block align-top w-[32%] mt-[12px] mb-0 mx-0"><strong class="font-normal text-extra-color">Citizenship:</strong> Kenyan</li>
								<li class="inline-block align-top w-[32%] mt-[12px] mb-0 mx-0"><strong class="font-normal text-extra-color">Residence: </strong> Nairobi</li>
								<li class="inline-block align-top w-[32%] mt-[12px] mb-0 mx-0"><strong class="font-normal text-extra-color">E-mail:</strong> milimokings@gmail.com</li>
							</ul>
						</div>
						<div class="bts"><a href="#" class="btn fill" data-text="Download CV">Download CV</a></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!-- Resume -->
			<div class="section resume relative z-[97] px-[80px] pt-0 pb-[150px] opacity-100 visible">
				<div class="content relative">
					<div class="cols">
						<div class="col col-md">
							<div class="title relative mb-[40px]">
								<div class="title_inner inline-block align-middle text-center relative leading-[18px] text-[13px] text-[#141414] uppercase tracking-[0.04em]">Experience</div>
							</div>
							<div class="resume-items">
								<div class="resume-item active relative px-[30px] pt-0 pb-[60px]">
									<div class="date relative top-[-10px] mx-0 mt-0 mb-[5px] inline-block py-0 px-[5px] h-[20px] leading-[18px] font-medium text-[11px] text-extra-color border-solid border-extra-color border">2021 - Present</div>
									<div class="name font-medium text-[#141414] mx-0 mt-0 mb-[15px]">Web and Backend Developer - Deveint Ltd</div>
									<p class="!m-0">
										Morbi nulla arcu, pellentesque sed egestas in, tempor eget felis. Nullam tincidunt augue in leo feugiat,
										quis interdum nisi sollicitudin.
									</p>
								</div>
								<div class="resume-item active relative px-[30px] pt-0 pb-[60px]">
									<div class="date relative top-[-10px] mx-0 mt-0 mb-[5px] inline-block py-0 px-[5px] h-[20px] leading-[18px] font-medium text-[11px] text-extra-color border-solid border-extra-color border">2021 April - 2021 September</div>
									<div class="name font-medium text-[#141414] mx-0 mt-0 mb-[15px]">Intern - Deveint Ltd</div>
									<p class="!m-0">
										Morbi nulla arcu, pellentesque sed egestas in, tempor eget felis. Nullam tincidunt augue in leo feugiat,
										quis interdum nisi sollicitudin.
									</p>
								</div>
							</div>
						</div>
						<div class="col col-md">
							<div class="title relative mb-[40px]">
								<div class="title_inner inline-block align-middle text-center relative leading-[18px] text-[13px] text-[#141414] uppercase tracking-[0.04em]">Education</div>
							</div>
							<div class="resume-items">
								<div class="resume-item active relative px-[30px] pt-0 pb-[60px]">
									<div class="date relative top-[-10px] mx-0 mt-0 mb-[5px] inline-block py-0 px-[5px] h-[20px] leading-[18px] font-medium text-[11px] text-extra-color border-solid border-extra-color border">2015 - 2019</div>
									<div class="name font-medium text-[#141414] mx-0 mt-0 mb-[15px]">Machakos University</div>
									<p class="!m-0">
										Morbi nulla arcu, pellentesque sed egestas in, tempor eget felis. Nullam tincidunt augue in leo feugiat,
										quis interdum nisi sollicitudin.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Skills -->
			<div class="section skills relative z-[97] px-[80px] pt-0 pb-[150px] opacity-100 visible">
				<div class="content relative">
					<div class="title relative mb-[40px]">
						<div class="title_inner inline-block align-middle text-center relative leading-[18px] text-[13px] text-[#141414] uppercase tracking-[0.04em]">Coding Skills</div>
					</div>
					<div class="skills circles">
						<ul class="list-none p-0 mx-0 mb-0 mt-[-30px] w-full">
							<li class="mt-[30px] pb-[40px] inline-block align-top w-[15%] relative ">
								<div class="name absolute top-[115px] left-0 w-[90px] text-center font-normal text-[13px] mb-[9px] text-[#363636]">Laravel</div>
								<div class="progress p90 m-0 relative text-[90px] w-[90px] h-[90px] rounded-[90px] bg-[#ddd] block">
									<div class="percentage" style="width: 90%;">
										<span class="percent">90%</span>
									</div>
									<span class="absolute left-0 top-0 w-full h-full leading-[90px] text-[17px] text-center whitespace-nowrap z-[2]">90%</span>
								</div>
							</li>
							<li class="mt-[30px] pb-[40px] inline-block align-top w-[15%] relative ">
								<div class="name absolute top-[115px] left-0 w-[90px] text-center font-normal text-[13px] mb-[9px] text-[#363636]">PHP</div>
								<div class="progress p75 m-0 relative text-[90px] w-[90px] h-[90px] rounded-[90px] bg-[#ddd] block">
									<div class="percentage" style="width: 90%;">
										<span class="percent">90%</span>
									</div>
									<span class="absolute left-0 top-0 w-full h-full leading-[90px] text-[17px] text-center whitespace-nowrap z-[2]">90%</span>
								</div>
							</li>
                            <li class="mt-[30px] pb-[40px] inline-block align-top w-[15%] relative ">
								<div class="name absolute top-[115px] left-0 w-[90px] text-center font-normal text-[13px] mb-[9px] text-[#363636]">Django</div>
								<div class="progress p75 m-0 relative text-[90px] w-[90px] h-[90px] rounded-[90px] bg-[#ddd] block">
									<div class="percentage" style="width: 75%;">
										<span class="percent">75%</span>
									</div>
									<span class="absolute left-0 top-0 w-full h-full leading-[90px] text-[17px] text-center whitespace-nowrap z-[2]">75%</span>
								</div>
							</li>
                            <li class="mt-[30px] pb-[40px] inline-block align-top w-[15%] relative ">
								<div class="name absolute top-[115px] left-0 w-[90px] text-center font-normal text-[13px] mb-[9px] text-[#363636]">Python</div>
								<div class="progress p75 m-0 relative text-[90px] w-[90px] h-[90px] rounded-[90px] bg-[#ddd] block">
									<div class="percentage" style="width: 75%;">
										<span class="percent">75%</span>
									</div>
									<span class="absolute left-0 top-0 w-full h-full leading-[90px] text-[17px] text-center whitespace-nowrap z-[2]">75%</span>
								</div>
							</li>
							<li class="mt-[30px] pb-[40px] inline-block align-top w-[15%] relative ">
								<div class="name absolute top-[115px] left-0 w-[90px] text-center font-normal text-[13px] mb-[9px] text-[#363636]">JavaScript</div>
								<div class="progress p85 m-0 relative text-[90px] w-[90px] h-[90px] rounded-[90px] bg-[#ddd] block">
									<div class="percentage" style="width: 80%;">
										<span class="percent">80%</span>
									</div>
									<span class="absolute left-0 top-0 w-full h-full leading-[90px] text-[17px] text-center whitespace-nowrap z-[2]">85%</span>
								</div>
							</li>
							<li class="mt-[30px] pb-[40px] inline-block align-top w-[15%] relative ">
								<div class="name absolute top-[115px] left-0 w-[90px] text-center font-normal text-[13px] mb-[9px] text-[#363636]">Tailwind CSS</div>
								<div class="progress p95 m-0 relative text-[90px] w-[90px] h-[90px] rounded-[90px] bg-[#ddd] block">
									<div class="percentage" style="width: 75%;">
										<span class="percent">75%</span>
									</div>
									<span class="absolute left-0 top-0 w-full h-full leading-[90px] text-[17px] text-center whitespace-nowrap z-[2]">75%</span>
								</div>
							</li>
                            <li class="mt-[30px] pb-[40px] inline-block align-top w-[15%] relative ">
								<div class="name absolute top-[115px] left-0 w-[90px] text-center font-normal text-[13px] mb-[9px] text-[#363636]">MYSQL</div>
								<div class="progress p95 m-0 relative text-[90px] w-[90px] h-[90px] rounded-[90px] bg-[#ddd] block">
									<div class="percentage" style="width: 85%;">
										<span class="percent">85%</span>
									</div>
									<span class="absolute left-0 top-0 w-full h-full leading-[90px] text-[17px] text-center whitespace-nowrap z-[2]">85%</span>
								</div>
							</li>
                            <li class="mt-[30px] pb-[40px] inline-block align-top w-[15%] relative ">
								<div class="name absolute top-[115px] left-0 w-[90px] text-center font-normal text-[13px] mb-[9px] text-[#363636]">Vue.js</div>
								<div class="progress p95 m-0 relative text-[90px] w-[90px] h-[90px] rounded-[90px] bg-[#ddd] block">
									<div class="percentage" style="width: 80%;">
										<span class="percent">80%</span>
									</div>
									<span class="absolute left-0 top-0 w-full h-full leading-[90px] text-[17px] text-center whitespace-nowrap z-[2]">90%</span>
								</div>
							</li>
                            <li class="mt-[30px] pb-[40px] inline-block align-top w-[15%] relative ">
								<div class="name absolute top-[115px] left-0 w-[90px] text-center font-normal text-[13px] mb-[9px] text-[#363636]">React</div>
								<div class="progress p95 m-0 relative text-[90px] w-[90px] h-[90px] rounded-[90px] bg-[#ddd] block">
									<div class="percentage" style="width: 75%;">
										<span class="percent">75%</span>
									</div>
									<span class="absolute left-0 top-0 w-full h-full leading-[90px] text-[17px] text-center whitespace-nowrap z-[2]">75%</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Skills -->
			<div class="section skills relative z-[97] px-[80px] pt-0 pb-[150px] opacity-100 visible">
				<div class="content">
					<div class="title relative mb-[40px]">
						<div class="title_inner inline-block align-middle text-center relative leading-[18px] text-[13px] text-[#141414] uppercase tracking-[0.04em]">Knowledge</div>
					</div>
					<div class="skills list">
						<ul class="p-0 list-none text-[0] my-0 mx-[-30px]">
							<li class="relative pt-0  pb-[10px] px-[30px] inline-block align-top w-1/2">
								<div class="name pl-[23px] relative text-[13px] font-normal mt-0 mx-0 mb-[9px] text-[#363636]">Website hosting</div>
							</li>
							<li class="relative pt-0  pb-[10px] px-[30px] inline-block align-top w-1/2">
								<div class="name pl-[23px] relative text-[13px] font-normal mt-0 mx-0 mb-[9px] text-[#363636]">Modern and mobile-ready</div>
							</li>
							<li class="relative pt-0  pb-[10px] px-[30px] inline-block align-top w-1/2">
								<div class="name pl-[23px] relative text-[13px] font-normal mt-0 mx-0 mb-[9px] text-[#363636]">Development and Support</div>
							</li>
							<li class="relative pt-0  pb-[10px] px-[30px] inline-block align-top w-1/2">
								<div class="name pl-[23px] relative text-[13px] font-normal mt-0 mx-0 mb-[9px] text-[#363636]">Search engine optimization</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Service -->
			<div class="section service relative z-[97] px-[80px] pt-0 pb-[150px] opacity-100 visible">
				<div class="content relative">
					<div class="title relative">
						<div class="title_inner inline-block align-middle text-center relative leading-[18px] text-[13px] text-[#141414] uppercase tracking-[0.04em]">Knowledge</div>
					</div>
					<div class="service-items">
						<div class="service-item inline-block align-top w-[28%] mt-[50px] mr-[4%] mb-0 ml-0">
							<div class="icon float-left w-[36px] text-center text-[30px] text-extra-color"><span class="ion ion-social-html5 block"></span></div>
							<div class="name font-medium text-[13px] text-[#141414] mt-[6px] mr-0 mb-0 ml-[46px]">Front-end</div>
							<p class="!mb-0">Morbi nulla arcu, pellentesque sed egestas in.</p>
						</div>
						<div class="service-item inline-block align-top w-[28%] mt-[50px] mr-[4%] mb-0 ml-0">
							<div class="icon float-left w-[36px] text-center text-[30px] text-extra-color"><span class="ion ion-code block"></span></div>
							<div class="name font-medium text-[13px] text-[#141414] mt-[6px] mr-0 mb-0 ml-[46px]">Programming</div>
							<p class="!mb-0">Morbi nulla arcu, pellentesque sed egestas in.</p>
						</div>
						<div class="service-item inline-block align-top w-[28%] mt-[50px] mr-[4%] mb-0 ml-0">
							<div class="icon float-left w-[36px] text-center text-[30px] text-extra-color"><span class="ion ion-help-buoy block"></span></div>
							<div class="name font-medium text-[13px] text-[#141414] mt-[6px] mr-0 mb-0 ml-[46px]">Premium Support</div>
							<p class="!mb-0">Morbi nulla arcu, pellentesque sed egestas in.</p>
						</div>
						<div class="service-item inline-block align-top w-[28%] mt-[50px] mr-[4%] mb-0 ml-0">
							<div class="icon float-left w-[36px] text-center text-[30px] text-extra-color"><span class="ion ion-social-chrome block"></span></div>
							<div class="name font-medium text-[13px] text-[#141414] mt-[6px] mr-0 mb-0 ml-[46px]">Web Development</div>
							<p class="!mb-0">Morbi nulla arcu, pellentesque sed egestas in.</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Clients -->
			{{-- <div class="section clients relative z-[97] px-[80px] pt-0 pb-[150px] opacity-100 visible">
				<div class="content relative">
					<div class="title relative mb-[40px]">
						<div class="title_inner inline-block align-middle text-center relative leading-[18px] text-[13px] text-[#141414] uppercase tracking-[0.04em]">Clients</div>
					</div>
					<div class="box-items relative overflow-hidden ml-[-3%]">
						<div class="box-item w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a class="block text-[0]" target="_blank" href="https://www.google.com">
									<img class="w-full h-auto relative top-0" src="assets/images/clients/client_1.png" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-link text-white text-[38px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="box-item w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a class="block text-[0]" target="_blank" href="https://www.google.com">
									<img class="w-full h-auto relative top-0" src="assets/images/clients/client_2.png" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-link text-white text-[38px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="box-item w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a class="block text-[0]" target="_blank" href="https://www.google.com">
									<img class="w-full h-auto relative top-0" src="assets/images/clients/client_3.png" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-link text-white text-[38px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="box-item w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a class="block text-[0]" target="_blank" href="https://www.google.com">
									<img class="w-full h-auto relative top-0" src="assets/images/clients/client_1.png" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-link text-white text-[38px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="box-item w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a class="block text-[0]" target="_blank" href="https://www.google.com">
									<img class="w-full h-auto relative top-0" src="assets/images/clients/client_2.png" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-link text-white text-[38px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						<div class="box-item w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a class="block text-[0]" target="_blank" href="https://www.google.com">
									<img class="w-full h-auto relative top-0" src="assets/images/clients/client_3.png" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-link text-white text-[38px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div> --}}

		</div>

		@include('layouts.footer')

	</div>
</x-main>
