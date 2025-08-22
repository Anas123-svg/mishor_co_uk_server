
				<aside class="app-sidebar sticky" id="sidebar">

					<!-- Start::main-sidebar-header -->
					<div class="main-sidebar-header">
						<a href="{{url('index')}}" class="header-logo">
							<img src="{{asset('build/assets/images/brand/desktop-logo.png')}}" alt="logo" class="desktop-logo">
							<img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="logo" class="toggle-logo">
							<img src="{{asset('build/assets/images/brand/desktop-dark.png')}}" alt="logo" class="desktop-dark">
							<img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="logo" class="toggle-dark">
						</a>
					</div>
					<!-- End::main-sidebar-header -->

					<!-- Start::main-sidebar -->
					<div class="main-sidebar" id="sidebar-scroll">

						<!-- Start::nav -->
						<nav class="main-menu-container nav nav-pills flex-column sub-open">
							<div class="slide-left" id="slide-left">
								<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
									viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
								</svg>
							</div>
							<ul class="main-menu">
								<!-- Start::slide__category -->
								<li class="slide__category"><span class="category-name">Main</span></li>
								<!-- End::slide__category -->

								<!-- Start::slide -->
								<li class="slide">
									<a href="{{url('index')}}" class="side-menu__item">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
											viewBox="0 0 24 24" width="24px" fill="#000000">
											<path d="M0 0h24v24H0V0z" fill="none" />
											<path
												d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
										</svg>
										<span class="side-menu__label">Dashboard</span>
									</a>
								</li>
								<!-- End::slide -->

								<!-- Start::slide -->
								<li class="slide has-sub">
									<a href="javascript:void(0);" class="side-menu__item">
										<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
											viewBox="0 0 24 24" width="24px" fill="#000000">
											<path d="M0 0h24v24H0V0z" fill="none"></path>
											<path
												d="M11 7h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6zM7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zM20.1 3H3.9c-.5 0-.9.4-.9.9v16.2c0 .4.4.9.9.9h16.2c.4 0 .9-.5.9-.9V3.9c0-.5-.5-.9-.9-.9zM19 19H5V5h14v14z">
											</path>
										</svg>
										<span class="side-menu__label">Nested Menu</span>
										<i class="fe fe-chevron-right side-menu__angle"></i>
									</a>
									<ul class="slide-menu child1">
										<li class="slide side-menu__label1">
											<a href="javascript:void(0);">Nested Menu</a>
										</li>
										<li class="slide">
											<a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
										</li>
										<li class="slide has-sub">
											<a href="javascript:void(0);" class="side-menu__item">Nested-2
												<i class="fe fe-chevron-right side-menu__angle"></i></a>
											<ul class="slide-menu child2">
												<li class="slide">
													<a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
												</li>
												<li class="slide has-sub">
													<a href="javascript:void(0);" class="side-menu__item">Nested-2-2
														<i class="fe fe-chevron-right side-menu__angle"></i></a>
													<ul class="slide-menu child3">
														<li class="slide">
															<a href="javascript:void(0);"
																class="side-menu__item">Nested-2-2-1</a>
														</li>
														<li class="slide">
															<a href="javascript:void(0);"
																class="side-menu__item">Nested-2-2-2</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<!-- End::slide -->

							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
									width="24" height="24" viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
									</path>
								</svg></div>
						</nav>
						<!-- End::nav -->

					</div>
					<!-- End::main-sidebar -->

				</aside>
