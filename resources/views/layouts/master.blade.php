<!DOCTYPE html>
<html lang="en">

<!-- index.html 4], Mon, 01 Apr 2024 09:58:28 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Kripton : Crypto Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:title" content="Kripton : Crypto Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:description" content="Kripton : Crypto Admin Dashboard  Bootstrap 5 Template" />
	<meta property="og:image" content="social-image.png"/>
	<meta name="format-detection" content="telephone=no">
    <!-- Favicon icon -->
    @include('layouts.head')
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" xmlns="http://www.w3.org/2000/svg" width="51" height="51" fill="none" >
					<path class="svg-logo-pattern" d="M12.683 49.636c0 .488-.392.88-.877.88a.88.88 0 0 1-.88-.88v-6.827a.88.88 0 0 1 .88-.88.88.88 0 0 1 .877.88v6.827zm-11.757-10a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h6.83a.88.88 0 0 1 .877.88c0 .485-.392.877-.877.877H.926zm0-26.999a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h6.83c.485 0 .877.392.877.88s-.392.877-.877.877H.926zm0 6.751a.88.88 0 0 1-.88-.88.88.88 0 0 1 .88-.877h6.83c.485 0 .877.392.877.877s-.392.88-.877.88H.926zm0 6.751a.88.88 0 0 1-.88-.88.88.88 0 0 1 .88-.877h6.83c.485 0 .877.392.877.877a.88.88 0 0 1-.877.88H.926zm0 6.75a.88.88 0 1 1 0-1.761h6.83a.88.88 0 0 1 0 1.761H.926zM10.926.88a.88.88 0 0 1 .88-.88.88.88 0 0 1 .877.88v6.83c0 .485-.392.877-.877.877s-.88-.392-.88-.877V.88zm26.999 0a.88.88 0 0 1 .88-.88.88.88 0 0 1 .877.88v6.83c0 .485-.392.877-.877.877a.88.88 0 0 1-.88-.877V.88zm-6.751 0a.88.88 0 1 1 1.761 0v6.83a.88.88 0 1 1-1.761 0V.88zm-6.747 0a.88.88 0 0 1 .877-.88.88.88 0 0 1 .88.88v6.83a.88.88 0 0 1-.88.877c-.485 0-.877-.392-.877-.877V.88zm-6.751 0a.88.88 0 0 1 .877-.88.88.88 0 0 1 .88.88v6.83c0 .485-.392.877-.88.877s-.877-.392-.877-.877V.88zm32.005 36.998a.88.88 0 0 1 .881.88c0 .485-.392.877-.881.877h-6.827a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h6.827zm0-26.999a.88.88 0 0 1 .881.88c0 .485-.392.877-.881.877h-6.827a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h6.827zm0 6.751c.488 0 .881.392.881.877a.88.88 0 0 1-.881.88h-6.827a.88.88 0 0 1-.88-.88.88.88 0 0 1 .88-.877h6.827zm0 6.751c.488 0 .881.392.881.877a.88.88 0 0 1-.881.88h-6.827a.88.88 0 0 1-.88-.88.88.88 0 0 1 .88-.877h6.827zm0 6.747a.88.88 0 1 1 0 1.761h-6.827a.88.88 0 0 1 0-1.761h6.827zm-9.999 18.508c0 .488-.392.88-.877.88a.88.88 0 0 1-.88-.88v-6.827a.88.88 0 0 1 .88-.88.88.88 0 0 1 .877.88v6.827zm-6.747 0a.88.88 0 1 1-1.761 0v-6.827a.88.88 0 1 1 1.761 0v6.827zm-6.75 0a.88.88 0 0 1-.88.88c-.485 0-.877-.392-.877-.88v-6.827a.88.88 0 0 1 .877-.88.88.88 0 0 1 .88.88v6.827zm-6.75 0a.88.88 0 0 1-.88.88c-.485 0-.877-.392-.877-.88v-6.827a.88.88 0 0 1 .877-.88.88.88 0 0 1 .88.88v6.827z" fill="#363062"/><g fill-rule="evenodd"><path  class="svg-logo-path" d="M11.806 7.711h26.999c2.226 0 4.05 1.821 4.05 4.05v26.999c0 2.226-1.824 4.05-4.05 4.05H11.806c-2.229 0-4.05-1.824-4.05-4.05V11.76a4.06 4.06 0 0 1 4.05-4.05z" fill="#4d4c7d"/><path  class="svg-logo-path" d="M35.287 7.711h3.518c2.226 0 4.05 1.821 4.05 4.05v26.999c0 2.226-1.824 4.05-4.05 4.05h-3.518c2.229 0 4.053-1.824 4.053-4.05V11.76c0-2.229-1.824-4.05-4.053-4.05z" fill="#363062"/><path class="svg-bg-path" d="M14.733 13.75h21.142a.94.94 0 0 1 .937.937v21.142a.94.94 0 0 1-.937.937H14.733a.94.94 0 0 1-.937-.937V14.687a.94.94 0 0 1 .937-.937z" fill="#fff"/><path class="svg-bg-path"  d="M32.36 13.75h3.515a.94.94 0 0 1 .937.937v21.142a.94.94 0 0 1-.937.937H32.36a.94.94 0 0 0 .937-.937V14.687a.94.94 0 0 0-.937-.937z" fill="#fff"/></g><path class="svg-logo-path" d="M23.171 18.75v-1.153a.88.88 0 1 1 1.761 0v1.153h1.837v-1.153c0-.485.392-.877.88-.877s.877.392.877.877v1.259a3.75 3.75 0 0 1 1.741.977c.674.671 1.093 1.595 1.093 2.611a3.67 3.67 0 0 1-1.319 2.814c.834.701 1.319 1.724 1.319 2.817 0 1.013-.419 1.937-1.093 2.608-.475.472-1.073.817-1.741.98v1.256a.88.88 0 0 1-.877.88.88.88 0 0 1-.88-.88v-1.15h-1.837v1.15a.88.88 0 1 1-1.761 0v-1.15h-3.043a.88.88 0 0 1 0-1.761h.921v-9.501h-.921a.88.88 0 0 1-.88-.877.88.88 0 0 1 .88-.88h3.043zm4.478 7.388h-4.844v3.87h4.844c.538 0 1.026-.216 1.382-.568a1.92 1.92 0 0 0 .572-1.365 1.93 1.93 0 0 0-.572-1.369c-.355-.352-.844-.568-1.382-.568zm0-5.631h-4.844v3.874h4.844a1.96 1.96 0 0 0 1.382-.571 1.92 1.92 0 0 0 .572-1.366c0-.531-.219-1.017-.572-1.369a1.97 1.97 0 0 0-1.382-.568z" fill="#4d4c7d"/>
				</svg>
				<svg class="brand-title" width="103" height="31" viewBox="0 0 103 31" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path  class="svg-logo-title"  d="M10.284 23L5.524 16.448V23H0.736V2.28H5.524V13.732L10.256 7.376H16.164L9.668 15.216L16.22 23H10.284ZM22.8326 9.98C23.3926 9.12133 24.0926 8.44933 24.9326 7.964C25.7726 7.46 26.7059 7.208 27.7326 7.208V12.276H26.4166C25.2219 12.276 24.3259 12.5373 23.7286 13.06C23.1313 13.564 22.8326 14.46 22.8326 15.748V23H18.0446V7.376H22.8326V9.98ZM32.4292 5.752C31.5892 5.752 30.8985 5.50933 30.3572 5.024C29.8345 4.52 29.5732 3.904 29.5732 3.176C29.5732 2.42933 29.8345 1.81333 30.3572 1.328C30.8985 0.823998 31.5892 0.571998 32.4292 0.571998C33.2505 0.571998 33.9225 0.823998 34.4452 1.328C34.9865 1.81333 35.2572 2.42933 35.2572 3.176C35.2572 3.904 34.9865 4.52 34.4452 5.024C33.9225 5.50933 33.2505 5.752 32.4292 5.752ZM34.8092 7.376V23H30.0212V7.376H34.8092ZM43.067 9.588C43.5336 8.86 44.1776 8.272 44.999 7.824C45.8203 7.376 46.7816 7.152 47.883 7.152C49.171 7.152 50.3376 7.47867 51.383 8.132C52.4283 8.78533 53.2496 9.71867 53.847 10.932C54.463 12.1453 54.771 13.5547 54.771 15.16C54.771 16.7653 54.463 18.184 53.847 19.416C53.2496 20.6293 52.4283 21.572 51.383 22.244C50.3376 22.8973 49.171 23.224 47.883 23.224C46.8003 23.224 45.839 23 44.999 22.552C44.1776 22.104 43.5336 21.5253 43.067 20.816V30.448H38.279V7.376H43.067V9.588ZM49.899 15.16C49.899 13.9653 49.563 13.032 48.891 12.36C48.2376 11.6693 47.4256 11.324 46.455 11.324C45.503 11.324 44.691 11.6693 44.019 12.36C43.3656 13.0507 43.039 13.9933 43.039 15.188C43.039 16.3827 43.3656 17.3253 44.019 18.016C44.691 18.7067 45.503 19.052 46.455 19.052C47.407 19.052 48.219 18.7067 48.891 18.016C49.563 17.3067 49.899 16.3547 49.899 15.16ZM65.9909 18.94V23H63.5549C61.8189 23 60.4655 22.58 59.4949 21.74C58.5242 20.8813 58.0389 19.4907 58.0389 17.568V11.352H56.1349V7.376H58.0389V3.568H62.8269V7.376H65.9629V11.352H62.8269V17.624C62.8269 18.0907 62.9389 18.4267 63.1629 18.632C63.3869 18.8373 63.7602 18.94 64.2829 18.94H65.9909ZM75.7699 23.224C74.2392 23.224 72.8579 22.8973 71.6259 22.244C70.4125 21.5907 69.4512 20.6573 68.7419 19.444C68.0512 18.2307 67.7059 16.812 67.7059 15.188C67.7059 13.5827 68.0605 12.1733 68.7699 10.96C69.4792 9.728 70.4499 8.78533 71.6819 8.132C72.9139 7.47867 74.2952 7.152 75.8259 7.152C77.3565 7.152 78.7379 7.47867 79.9699 8.132C81.2019 8.78533 82.1725 9.728 82.8819 10.96C83.5912 12.1733 83.9459 13.5827 83.9459 15.188C83.9459 16.7933 83.5819 18.212 82.8539 19.444C82.1445 20.6573 81.1645 21.5907 79.9139 22.244C78.6819 22.8973 77.3005 23.224 75.7699 23.224ZM75.7699 19.08C76.6845 19.08 77.4592 18.744 78.0939 18.072C78.7472 17.4 79.0739 16.4387 79.0739 15.188C79.0739 13.9373 78.7565 12.976 78.1219 12.304C77.5059 11.632 76.7405 11.296 75.8259 11.296C74.8925 11.296 74.1179 11.632 73.5019 12.304C72.8859 12.9573 72.5779 13.9187 72.5779 15.188C72.5779 16.4387 72.8765 17.4 73.4739 18.072C74.0899 18.744 74.8552 19.08 75.7699 19.08ZM96.006 7.208C97.8353 7.208 99.2913 7.80533 100.374 9C101.475 10.176 102.026 11.8 102.026 13.872V23H97.266V14.516C97.266 13.4707 96.9953 12.6587 96.454 12.08C95.9127 11.5013 95.1847 11.212 94.27 11.212C93.3553 11.212 92.6273 11.5013 92.086 12.08C91.5447 12.6587 91.274 13.4707 91.274 14.516V23H86.486V7.376H91.274V9.448C91.7593 8.75733 92.4127 8.216 93.234 7.824C94.0553 7.41333 94.9793 7.208 96.006 7.208Z" fill="#363062"/>
				</svg>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img" alt=""/>
                                                
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img" alt=""/>
                                                
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/3.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/4.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/5.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/3.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/4.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/5.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/3.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/4.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/5.jpg')}}" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="#" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="#" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        @include('layouts.main-headerbar')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.main-sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        @include('layouts.footer')
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
   @include('layouts.footer-scripts')
</body>

<!-- index.html 4], Mon, 01 Apr 2024 09:58:55 GMT -->
</html>

