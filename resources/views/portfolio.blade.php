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
							<div class="h-title text-[68px] font-roboto text-[#141414] font-bold uppercase tracking-[0.04em] mx-0 mt-[10px] mb-[5px] glitch-effect" data-text="Portfolio">Portfolio</div>
							<div class="h-subtitle typing-bread text-[13px]">
								<p><a href="{{ url('/') }}">Home</a> / <span class="text-extra-color">Portfolio</span></p>
							</div>
							<span class="typed-bread"></span>
						</div>
					</div>
				</div>
				<a href="#" class="mouse_btn text-[24px] text-extra-color text-center absolute w-[20px] h-[40px] left-1/2 bottom-[80px] ml-[-10px]"><span class="ion ion-mouse relative top-0"></span></a>
			</div>

			<!-- Works -->
			<div class="section works relative z-[97] px-[80px] pt-0 pb-[150px] opacity-100 visible">
				<div class="content relative">

					<div class="filter-menu">
						<div class="filters mb-[30px]">
							<div class="btn-group inline-block align-top">
								<label data-text="All" class="glitch-effect inline-block align-top mr-[25px] text-[13px] text-[#363636] cursor-pointer relative pb-0">
									<input class="!hidden" type="radio" name="fl_radio" value=".box-item" />All
								</label>
							</div>
							<div class="btn-group inline-block align-top">
								<label data-text="Video" class="inline-block align-top mr-[25px] text-[13px] text-[#363636] cursor-pointer relative pb-0">
									<input class="!hidden" type="radio" name="fl_radio" value=".f-video" />Video
								</label>
							</div>
							<div class="btn-group inline-block align-top">
								<label data-text="Music" class="inline-block align-top mr-[25px] text-[13px] text-[#363636] cursor-pointer relative pb-0">
									<input class="!hidden" type="radio" name="fl_radio" value=".f-music" />Music
								</label>
							</div>
							<div class="btn-group inline-block align-top">
								<label data-text="Links" class="inline-block align-top mr-[25px] text-[13px] text-[#363636] cursor-pointer relative pb-0">
									<input class="!hidden" type="radio" name="fl_radio" value=".f-links" />Links
								</label>
							</div>
							<div class="btn-group inline-block align-top">
								<label data-text="Image" class="inline-block align-top mr-[25px] text-[13px] text-[#363636] cursor-pointer relative pb-0">
									<input class="!hidden" type="radio" name="fl_radio" value=".f-image" />Image
								</label>
							</div>
							<div class="btn-group inline-block align-top">
								<label data-text="Gallery" class="inline-block align-top mr-[25px] text-[13px] text-[#363636] cursor-pointer relative pb-0">
									<input class="!hidden" type="radio" name="fl_radio" value=".f-gallery" />Gallery
								</label>
							</div>
						</div>
					</div>

					<div class="box-items portfolio-items relative overflow-hidden ml-[-3%]">

						<div class="box-item f-gallery w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a href="#gallery-1" class="has-popup-gallery block text-[0]">
									<img class="w-full h-auto relative top-0" src="assets/images/works/work1.jpg" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-images text-white text-[28px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
								<div id="gallery-1" class="mfp-hide">
									<a class="block text-[0]" href="assets/images/works/work1.jpg"></a>
									<a class="block text-[0]" href="assets/images/works/work2.jpg"></a>
									<a class="block text-[0]" href="assets/images/works/work3.jpg"></a>
									<a class="block text-[0]" href="assets/images/works/work4.jpg"></a>
								</div>
							</div>
							<div class="desc relative pt-[15px] pb-[5px] px-[45px]">
								<div class="category mt-0 mx-0 mb-[10px] inline-block text-[11px] text-[#363636] uppercase tracking-[0.04em]">Gallery</div>
								<a href="#gallery-1" class="name has-popup-gallery h-[40px] block text-[#363636] text-[13px] font-bold uppercase">Canvas Tote Bag</a>
							</div>
						</div>

						<div class="box-item f-video w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a href="https://youtu.be/S4L8T2kFFck" class="has-popup-video block text-[0]">
									<img class="w-full h-auto relative top-0" src="assets/images/works/work2.jpg" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-videocamera text-white text-[28px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="desc relative pt-[15px] pb-[5px] px-[45px]">
								<div class="category mt-0 mx-0 mb-[10px] inline-block text-[11px] text-[#363636] uppercase tracking-[0.04em]">Video</div>
								<a href="https://youtu.be/S4L8T2kFFck" class="name has-popup-video h-[40px] block text-[#363636] text-[13px] font-bold uppercase">Coffee Cup In Hand</a>
							</div>
						</div>

						<div class="box-item f-links w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a href="https://themeforest.net/user/marketify" class="has-popup-link block text-[0]">
									<img class="w-full h-auto relative top-0" src="assets/images/works/work8.jpg" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-link text-white text-[28px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="desc relative pt-[15px] pb-[5px] px-[45px]">
								<div class="category mt-0 mx-0 mb-[10px] inline-block text-[11px] text-[#363636] uppercase tracking-[0.04em]">Links</div>
								<a href="https://themeforest.net/user/marketify" class="name has-popup-link h-[40px] block text-[#363636] text-[13px] font-bold uppercase">Love & Care Ceramic</a>
							</div>
						</div>

						<div class="box-item f-image w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a href="assets/images/works/work4.jpg" class="has-popup-image block text-[0]">
									<img class="w-full h-auto relative top-0" src="assets/images/works/work4.jpg" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-image text-white text-[28px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="desc relative pt-[15px] pb-[5px] px-[45px]">
								<div class="category mt-0 mx-0 mb-[10px] inline-block text-[11px] text-[#363636] uppercase tracking-[0.04em]">Image</div>
								<a href="assets/images/works/work4.jpg" class="name has-popup-image h-[40px] block text-[#363636] text-[13px] font-bold uppercase">Shopping gift bag</a>
							</div>
						</div>

						<div class="box-item f-music w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true" class="has-popup-music block text-[0]">
									<img class="w-full h-auto relative top-0" src="assets/images/works/work6.jpg" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-music-note text-white text-[28px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="desc relative pt-[15px] pb-[5px] px-[45px]">
								<div class="category mt-0 mx-0 mb-[10px] inline-block text-[11px] text-[#363636] uppercase tracking-[0.04em]">Music</div>
								<a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true" class="name has-popup-music h-[40px] block text-[#363636] text-[13px] font-bold uppercase">Marta Veludo Poster</a>
							</div>
						</div>

						<div class="box-item f-image w-[30.333333%] mt-0 mr-0 mb-[3%] ml-[3%] relative overflow-hidden text-center">
							<div class="image relative">
								<a href="assets/images/works/work3.jpg" class="has-popup-image block text-[0]">
									<img class="w-full h-auto relative top-0" src="assets/images/works/work3.jpg" alt="" />
									<span class="info text-center w-full h-full block absolute left-0 top-0 opacity-0 p-[18px]">
										<span class="centrize w-full max-w-full bg-extra-color">
											<span class="vertical-center">
												<span class="ion ion-image text-white text-[28px] inline-block"></span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div class="desc relative pt-[15px] pb-[5px] px-[45px]">
								<div class="category mt-0 mx-0 mb-[10px] inline-block text-[11px] text-[#363636] uppercase tracking-[0.04em]">Image</div>
								<a href="assets/images/works/work3.jpg" class="name has-popup-image h-[40px] block text-[#363636] text-[13px] font-bold uppercase">Mockup Cream</a>
							</div>
						</div>

					</div>

					<div class="clear"></div>
				</div>
			</div>

		</div>

		@include('layouts.footer')
	</div>
</x-main>
