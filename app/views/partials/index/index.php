        <?php 
        $page_id = null;
        $comp_model = new SharedController;
        ?>
        <div  class=" py-5">
            <div class="container d-none">
                <div class="row ">
                    <div class="col-md-8 comp-grid">
                        <div class="">
                            <div class="fadeIn animated mb-4">
                                <div class="text-capitalize">
                                    <h2 class="text-capitalize">Welcome To <?php echo SITE_NAME ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        
                        <div  class="bg-light p-3 animated fadeIn page-content">
                            <div>
                                <h4><i class="fa fa-key"></i> User Login</h4>
                                <hr />
                                <?php 
                                $this :: display_page_errors(); 
                                ?>
                                <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                                    <div class="input-group form-group">
                                        <input placeholder="Username Or Email" name="username"  required="required" class="form-control" type="text"  />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <input  placeholder="Password" required="required" v-model="user.password" name="password" class="form-control " type="password" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback fa fa-key"></i></span>
                                        </div>
                                    </div>
                                    <div class="row clearfix mt-3 mb-3">
                                        <div class="col-6">
                                            <label class="">
                                                <input value="true" type="checkbox" name="rememberme" />
                                                Remember Me
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary btn-block btn-md" type="submit"> 
                                            <i class="load-indicator">
                                                <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                                            </i>
                                            Login <i class="fa fa-key"></i>
                                        </button>
                                    </div>
                                    <hr />
                                    <div class="text-center">
                                        Don't Have an Account? <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                                        <i class="fa fa-user"></i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="mt-2">
            <div class="">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <div class=""><!-- Animated Grid Background -->
                            <div class="grid-bg"></div>
                            <div class="gradient-overlay"></div>
                            <div class="scanlines"></div>
                            <!-- Animated Shapes -->
                            <div class="shapes-container">
                                <div class="shape shape-circle"></div>
                                <div class="shape shape-triangle"></div>
                                <div class="shape shape-square"></div>
                            </div>
                            <!-- Floating Particles -->
                            <div id="particles"></div>
                            <!-- Navigation -->
                            <nav id="navbar mt-5">
                                <div class="nav-container">
                                    <a href="#home" class="logo-link">
                                        <svg class="logo-svg" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                                    <stop offset="0%" style="stop-color:#FF5E00;stop-opacity:1" />
                                                    <stop offset="100%" style="stop-color:#00B2FF;stop-opacity:1" />
                                                </linearGradient>
                                            </defs>
                                            <polygon points="20,2 38,14 38,26 20,38 2,26 2,14" fill="none" stroke="url(#logoGradient)" stroke-width="2"/>
                                            <polygon points="20,8 32,16 32,24 20,32 8,24 8,16" fill="url(#logoGradient)" opacity="0.3"/>
                                            <circle cx="20" cy="20" r="3" fill="url(#logoGradient)"/>
                                        </svg>
                                        <span class="logo-text">ELECTRIC XTRA</span>
                                    </a>
                                    <ul class="nav-links" id="navLinks">
                                        <li><a href="#home" class="nav-link">Home</a></li>
                                        <li><a href="#features" class="nav-link">Features</a></li>
                                        <li><a href="#about" class="nav-link">About</a></li>
                                        <li><a href="#contact" class="nav-link">Contact</a></li>
                                    </ul>
                                    <div class="menu-toggle" id="menuToggle">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </nav>
                            <!-- Hero Section -->
                            <section class="hero" id="home">
                                <div class="hero-content">
                                    <div class="text-rotator">
                                        <?php
                                        $slidercontroller=new SliderController;
                                        $db=$slidercontroller->GetModel();
                                        $sql="SELECT * FROM slider ORDER BY id DESC LIMIT 5";
                                        $aa=$db->rawQuery($sql);
                                        foreach($aa as $key=>$value){
                                        /*echo$value['name']. '-' . $value['amount'];*/
                                        }
                                        ?>
                                        <?php foreach($aa as $key=>$value): ?>
                                        <div class="text-set active">
                                            <h1 class="glitch-text" data-text="FUTURE IS NOW"><?php echo$value['title'] ?></h1>
                                            <p class="subtitle"><?php echo$value['small_text'] ?></p>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="cta-container">
                                    <a href="#features" class="cta-button cta-primary">Get Started</a>
                                    <a href="#about" class="cta-button cta-secondary">Learn More</a>
                                </div>
                            </section>
                            <!-- Features Section with Tabs -->
                            <section class="features" id="features">
                                <h2 class="section-title">Core Features</h2>
                                <div class="features-container">
                                    <div class="feature-tabs">
                                        <?php
                                        $sidebar_featurescontroller=new Sidebar_featuresController;
                                        $db=$sidebar_featurescontroller->GetModel();
                                        $sql="SELECT * FROM sidebar_features ORDER BY id DESC LIMIT 5";
                                        $aa=$db->rawQuery($sql);
                                        foreach($aa as $key=>$value){
                                        /*echo$value['name']. '-' . $value['amount'];*/
                                        }
                                        ?>
                                        <?php foreach($aa as $key=>$value): ?>
                                        <div class="tab-item <?php echo$value['active'] ?>" data-tab="<?php echo$value['name'] ?>">
                                            <span class="tab-icon">⚡</span>
                                            <span><?php echo$value['name'] ?></span>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="feature-content">
                                        <div class="content-panel active" id="performance">
                                            <?php
                                            $performancecontroller=new PerformanceController;
                                            $db=$performancecontroller->GetModel();
                                            $sql="SELECT * FROM performance ORDER BY id DESC LIMIT 5";
                                            $aa=$db->rawQuery($sql);
                                            foreach($aa as $key=>$value){
                                            /*echo$value['name']. '-' . $value['amount'];*/
                                            }
                                            ?>
                                            <?php foreach($aa as $key=>$value): ?>
                                            <h3><?php echo$value['title'] ?></h3>
                                            <p><?php echo$value['description'] ?></p>
                                            <ul class="feature-list">
                                                <li><?php echo$value['feature_one'] ?></li>
                                                <li><?php echo$value['feature_two'] ?></li>
                                                <li><?php echo$value['feature_three'] ?></li>
                                                <li><?php echo$value['feature_four'] ?></li>
                                            </ul>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="content-panel" id="security">
                                            <h3>Military-Grade Security</h3>
                                            <p>Your data is protected by the most advanced encryption protocols available. Multi-layered security ensures complete protection against cyber threats. You may tell your friends about TemplateMo free css website and how easy it is.</p>
                                            <ul class="feature-list">
                                                <li>256-bit AES encryption</li>
                                                <li>Biometric authentication</li>
                                                <li>Zero-knowledge architecture</li>
                                                <li>Real-time threat detection</li>
                                                <li>Automated security updates</li>
                                            </ul>
                                        </div>
                                        <div class="content-panel" id="network">
                                            <h3>Global Neural Network</h3>
                                            <p>Connect to our worldwide infrastructure that spans across continents. Seamless integration with existing systems and future-proof architecture.</p>
                                            <ul class="feature-list">
                                                <li>200+ global data centers</li>
                                                <li>Intelligent routing algorithms</li>
                                                <li>Cross-platform compatibility</li>
                                                <li>5G and satellite connectivity</li>
                                                <li>Decentralized architecture</li>
                                            </ul>
                                        </div>
                                        <div class="content-panel" id="analytics">
                                            <h3>Advanced Analytics</h3>
                                            <p>Harness the power of AI-driven insights to make data-driven decisions. Real-time analytics and predictive modeling at your fingertips.</p>
                                            <ul class="feature-list">
                                                <li>Machine learning algorithms</li>
                                                <li>Predictive analytics</li>
                                                <li>Custom dashboard creation</li>
                                                <li>Real-time data visualization</li>
                                                <li>Automated reporting</li>
                                            </ul>
                                        </div>
                                        <div class="content-panel" id="integration">
                                            <h3>Seamless Integration</h3>
                                            <p>Connect with thousands of apps and services through our universal API. Built to work with your existing tools and workflows.</p>
                                            <ul class="feature-list">
                                                <li>RESTful API architecture</li>
                                                <li>WebSocket support</li>
                                                <li>SDK for major platforms</li>
                                                <li>One-click integrations</li>
                                                <li>Custom webhook support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- About Section -->
                            <section class="about" id="about">
                                <h2 class="section-title">About Electric Xtra</h2>
                                <div class="about-content">
                                    <div class="about-text">
                                        <h2>Pioneering the Digital Frontier</h2>
                                        <p>At ELECTRIC XTRA, we're not just building technology – we're crafting the future. Our mission is to bridge the gap between human potential and digital innovation, creating solutions that empower individuals and transform industries.</p>
                                        <p>Founded by visionaries who saw beyond the limitations of current technology, ELECTRIC XTRA represents a quantum leap in digital infrastructure. We combine cutting-edge research with practical applications to deliver solutions that are both revolutionary and reliable.</p>
                                        <p>Join us as we redefine what's possible in the digital age. The future isn't something that happens to us – it's something we create together.</p>
                                    </div>
                                    <div class="about-visual">
                                        <div class="about-graphic"></div>
                                    </div>
                                </div>
                                <!-- Second row with reversed layout -->
                                <div class="about-content" style="margin-top: 80px;">
                                    <div class="about-visual">
                                        <div class="about-graphic-alt">
                                            <div class="hexagon"></div>
                                            <div class="hexagon"></div>
                                            <div class="hexagon"></div>
                                        </div>
                                    </div>
                                    <div class="about-text">
                                        <h2>Innovation at Every Level</h2>
                                        <p>Our commitment to excellence drives us to push boundaries and challenge conventions. With a team of world-class engineers, designers, and visionaries, we're creating solutions that not only meet today's needs but anticipate tomorrow's challenges.</p>
                                        <p>From quantum computing to neural networks, from blockchain to AI, we're at the forefront of every technological revolution. Our integrated approach ensures that each innovation builds upon the last, creating a synergy that amplifies our impact.</p>
                                        <p>Experience the power of true digital transformation. With ELECTRIC XTRA, you're not just adopting technology – you're embracing a philosophy of continuous evolution and limitless possibility.</p>
                                    </div>
                                </div>
                            </section>
                            <!-- Contact Section -->
                            <section class="contact" id="contact">
                                <h2 class="section-title">Get In Touch</h2>
                                <div class="contact-container">
                                    <div class="contact-form">
                                        <form id="contactForm">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" name="name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" id="email" name="email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="subject">Subject</label>
                                                        <input type="text" id="subject" name="subject" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message">Message</label>
                                                            <textarea id="message" name="message" required></textarea>
                                                        </div>
                                                        <button type="submit" class="submit-btn">Send Message</button>
                                                    </form>
                                                </div>
                                                <div class="contact-info">
                                                    <h3>Connect With Us</h3>
                                                    <div class="info-item">
                                                        <div class="info-icon">📧</div>
                                                        <div class="info-details">
                                                            <h4>Email</h4>
                                                            <p>contact@electricxtra.tech</p>
                                                        </div>
                                                    </div>
                                                    <div class="info-item">
                                                        <div class="info-icon">📱</div>
                                                        <div class="info-details">
                                                            <h4>Phone</h4>
                                                            <p>+1 (555) 123-4567</p>
                                                        </div>
                                                    </div>
                                                    <div class="info-item">
                                                        <div class="info-icon">📍</div>
                                                        <div class="info-details">
                                                            <h4>Location</h4>
                                                            <p>Neo Tokyo, Sector 7</p>
                                                        </div>
                                                    </div>
                                                    <div class="map-container">
                                                        <div class="map-placeholder">
                                                            <p>Interactive Map</p>
                                                            <p style="font-size: 0.9rem; margin-top: 10px;">Neo Tokyo, Sector 7</p>
                                                        </div>
                                                        <div class="map-overlay"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Footer -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    