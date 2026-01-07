<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>about</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
    <body>
        @include('layout.header')
        
        <section id="hero" class="hero section" data-builder="section">

            <slot type="section-title"></slot>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="hero-content">
                <div class="row align-items-center">
                
                <div class="col-lg-6 hero-text" data-aos="fade-right" data-aos-delay="200">
                    <div class="hero-badge">
                    <i class="bi bi-star-fill"></i>
                    <span>Premium Properties</span>
                    </div>
                    <h1 contenteditable="true" spellcheck="false">Discover Your Perfect Home in the Heart of the City</h1>
                    <p contenteditable="true" spellcheck="false">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Browse thousands of verified listings from trusted agents.</p>
                    
                    <div class="search-form" data-aos="fade-up" data-aos-delay="300">
                    <form action="">
                        <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                            <input type="text" class="form-control" id="location" name="location" required="">
                            <label for="location">Location</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating">
                            <select class="form-select" id="property-type" name="property_type" required="">
                                <option value="">Select Type</option>
                                <option value="house">House</option>
                                <option value="apartment">Apartment</option>
                                <option value="condo">Condo</option>
                                <option value="townhouse">Townhouse</option>
                                <option value="land">Land</option>
                            </select>
                            <label for="property-type">Property Type</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating">
                            <select class="form-select" id="price-range" name="price_range" required="">
                                <option value="">Price Range</option>
                                <option value="0-200000">Under $200K</option>
                                <option value="200000-500000">$200K - $500K</option>
                                <option value="500000-800000">$500K - $800K</option>
                                <option value="800000-1200000">$800K - $1.2M</option>
                                <option value="1200000+">Above $1.2M</option>
                            </select>
                            <label for="price-range">Price Range</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating">
                            <select class="form-select" id="bedrooms" name="bedrooms">
                                <option value="">Bedrooms</option>
                                <option value="1">1 Bedroom</option>
                                <option value="2">2 Bedrooms</option>
                                <option value="3">3 Bedrooms</option>
                                <option value="4">4 Bedrooms</option>
                                <option value="5+">5+ Bedrooms</option>
                            </select>
                            <label for="bedrooms">Bedrooms</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating">
                            <select class="form-select" id="bathrooms" name="bathrooms">
                                <option value="">Bathrooms</option>
                                <option value="1">1 Bathroom</option>
                                <option value="2">2 Bathrooms</option>
                                <option value="3">3 Bathrooms</option>
                                <option value="4+">4+ Bathrooms</option>
                            </select>
                            <label for="bathrooms">Bathrooms</label>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-search w-100">
                            <i class="bi bi-search"></i>
                            Search Properties
                            </button>
                        </div>
                        </div>
                    </form>
                    </div>
                    
                    <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
                    <div class="row">
                        <div class="col-4">
                        <div class="stat-item">
                            <h3><span data-purecounter-start="0" data-purecounter-end="2847" data-purecounter-duration="0" class="purecounter">2847</span>+</h3>
                            <p>Properties Listed</p>
                        </div>
                        </div>
                        <div class="col-4">
                        <div class="stat-item">
                            <h3><span data-purecounter-start="0" data-purecounter-end="156" data-purecounter-duration="0" class="purecounter">156</span>+</h3>
                            <p>Verified Agents</p>
                        </div>
                        </div>
                        <div class="col-4">
                        <div class="stat-item">
                            <h3 contenteditable="true" spellcheck="false"><span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="0" class="purecounter">98</span>%</h3>
                            <p contenteditable="true" spellcheck="false">Client Satisfaction</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                </div><!-- End Hero Text -->
                
                <div class="col-lg-6 hero-images" data-aos="fade-left" data-aos-delay="400">
                    <div class="image-stack">
                    <div class="main-image">
                        <img src="https://builder.bootstrapmade.com/static/img/real-estate/property-exterior-3.webp" alt="Luxury Property" class="img-fluid">
                        <div class="property-tag">
                        <span class="price">$850,000</span>
                        <span class="type">Featured</span>
                        </div>
                    </div>
                    
                    <div class="secondary-image">
                        <img src="https://builder.bootstrapmade.com/static/img/real-estate/property-interior-7.webp" alt="Property Interior" class="img-fluid">
                    </div>
                    
                    <div class="floating-card">
                        <div class="agent-info">
                        <img src="https://builder.bootstrapmade.com/static/img/real-estate/agent-4.webp" alt="Agent" class="agent-avatar">
                        <div class="agent-details">
                            <h5>Sarah Johnson</h5>
                            <p>Top Real Estate Agent</p>
                            <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span>4.9 (127 reviews)</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!-- End Hero Images -->
                
                </div>
            </div>

            </div>

            </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    @include('layout.footer')
  </body>
</html>