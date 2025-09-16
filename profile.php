<?php include "header.php" ?>

<style>
  header {
    background: #000;
  }
</style>
<!-- Add Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="main-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-menu">
                <button class="menu-item active" data-section="profile">
                    <i class="fas fa-user"></i>
                    Profile Information
                </button>
                <button class="menu-item" data-section="shop">
                    <i class="fas fa-store"></i>
                    Shop Information
                </button>
                <button class="menu-item" data-section="gallery">
                    <i class="fas fa-images"></i>
                    Work Gallery
                </button>
                <button class="menu-item" data-section="artists">
                    <i class="fas fa-users"></i>
                    Our Artists
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Profile Information Section -->
            <div id="profile" class="content-section active">
                <div class="content-header">
                    <div>
                        <h2 class="content-title">Profile Information</h2>
                        <p class="content-subtitle">View and manage your personal details</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-primary-custom btn-custom" onclick="openProfileModal()">
                            <i class="fas fa-edit"></i>
                            Edit Profile
                        </button>
                    </div>
                </div>

                <!-- Profile View Mode -->
                <div class="view-mode-card">
                    <div class="view-mode-header">
                        <h5 class="view-mode-title">Personal Information</h5>
                    </div>
                    <div class="view-mode-body">
                        <div class="profileBox" style="">
                        <div id="profileAvatarView" class="view-mode-avatar-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="view-mode-grid" style="flex: 1;">
                            <div class="view-mode-item">
                                <span class="view-mode-label">Full Name</span>
                                <span class="view-mode-value" id="profileNameView">Not set</span>
                            </div>
                            <div class="view-mode-item">
                                <span class="view-mode-label">Email</span>
                                <span class="view-mode-value" id="profileEmailView">Not set</span>
                            </div>
                            <div class="view-mode-item">
                                <span class="view-mode-label">Phone</span>
                                <span class="view-mode-value" id="profilePhoneView">Not set</span>
                            </div>
                            <div class="view-mode-item">
                                <span class="view-mode-label">Category</span>
                                <span class="view-mode-value" id="profileCategoryView">Not set</span>
                            </div>
                        </div>
                    </div>
                    <div class="view-mode-item">
                        <span class="view-mode-label">Bio / Experience</span>
                        <span class="view-mode-value" id="profileBioView">Not set</span>
                    </div>

                    </div>
                    
                </div>

                <!-- Address View -->
                <div class="view-mode-card">
                    <div class="view-mode-header">
                        <h5 class="view-mode-title">Address Information</h5>
                    </div>
                    <div class="view-mode-body">
                        <div class="view-mode-grid">
                        <div class="view-mode-item">
                            <span class="view-mode-label">Address</span>
                            <span class="view-mode-value" id="profileAddressView">Not set</span>
                        </div>
                        <div class="view-mode-item">
                            <span class="view-mode-label">City</span>
                            <span class="view-mode-value" id="profileCityView">Not set</span>
                        </div>
                        <div class="view-mode-item">
                            <span class="view-mode-label">State</span>
                            <span class="view-mode-value" id="profileStateView">Not set</span>
                        </div>
                        <div class="view-mode-item">
                            <span class="view-mode-label">Zip Code</span>
                            <span class="view-mode-value" id="profileZipView">Not set</span>
                        </div>
                    </div>

                    </div>
                    
                </div>
            </div>

            <!-- Shop Information Section -->
            <div id="shop" class="content-section">
                <div class="content-header">
                    <div>
                        <h2 class="content-title">Shop Information</h2>
                        <p class="content-subtitle">View and manage your shop details</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-primary-custom btn-custom" onclick="openShopModal()">
                            <i class="fas fa-edit"></i>
                            Edit Shop Info
                        </button>
                    </div>
                </div>

                <!-- Shop Banner View -->
                <div class="view-mode-card">
                    <div class="view-mode-header">
                        <h5 class="view-mode-title">Shop Banner</h5>
                    </div>
                    <div id="shopBannerView" style="width: 100%; height: 200px; background: var(--background-color); border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                        No banner uploaded
                    </div>
                </div>

                <!-- Shop Details View -->
                <div class="view-mode-card">
                    <div class="view-mode-header">
                        <h5 class="view-mode-title">Shop Details</h5>
                    </div>
                    <div class="view-mode-body">
                        <div class="view-mode-grid">
                        <div class="view-mode-item">
                            <span class="view-mode-label">Shop Name</span>
                            <span class="view-mode-value" id="shopNameView">Not set</span>
                        </div>
                        <div class="view-mode-item">
                            <span class="view-mode-label">Email</span>
                            <span class="view-mode-value" id="shopEmailView">Not set</span>
                        </div>
                        <div class="view-mode-item">
                            <span class="view-mode-label">Phone</span>
                            <span class="view-mode-value" id="shopPhoneView">Not set</span>
                        </div>
                      
                        </div>
                          <div class="view-mode-item mt-3">
                            <span class="view-mode-label">Description</span>
                            <span class="view-mode-value" id="shopDescriptionView">Not set</span>
                        </div>

                    </div>
                    
                </div>

                <!-- Shop Address View -->
                <div class="view-mode-card">
                    <div class="view-mode-header">
                        <h5 class="view-mode-title">Shop Address</h5>
                    </div>
                      <div class="view-mode-body">
                        <div class="view-mode-grid">
                        <div class="view-mode-item">
                            <span class="view-mode-label">Address</span>
                            <span class="view-mode-value" id="shopAddressView">Not set</span>
                        </div>
                        <div class="view-mode-item">
                            <span class="view-mode-label">City</span>
                            <span class="view-mode-value" id="shopCityView">Not set</span>
                        </div>
                        <div class="view-mode-item">
                            <span class="view-mode-label">State/Province</span>
                            <span class="view-mode-value" id="shopStateView">Not set</span>
                        </div>
                        <div class="view-mode-item">
                            <span class="view-mode-label">Postal/Zip Code</span>
                            <span class="view-mode-value" id="shopPostalView">Not set</span>
                        </div>
                        <div class="view-mode-item">
                            <span class="view-mode-label">Country</span>
                            <span class="view-mode-value" id="shopCountryView">Not set</span>
                        </div>
                    </div>

                      </div>
                    
                </div>

                <!-- Shop Schedule View -->
                <div class="view-mode-card">
                    <div class="view-mode-header">
                        <h5 class="view-mode-title">Availability Schedule</h5>
                    </div>
                     <div class="view-mode-body">
                        <div id="shopScheduleView">
                            <p style="color: var(--text-muted);">No schedule set</p>
                        </div>

                     </div>
                    
                </div>
            </div>

            <!-- Work Gallery Section -->
            <div id="gallery" class="content-section">
                <div class="content-header">
                    <div>
                        <h2 class="content-title">Work Gallery</h2>
                        <p class="content-subtitle">Showcase your pharmaceutical tattoo work</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-primary-custom btn-custom" onclick="openGalleryUploadModal()">
                            <i class="fas fa-plus"></i>
                            Upload Images
                        </button>
                    </div>
                </div>

                <!-- Modern Gallery Grid -->
                <div class="form-card">
                    <div class="modern-gallery-grid" id="modernGalleryGrid">
                        <!-- Gallery items will be dynamically added here -->
                    </div>
                </div>
            </div>

            <!-- Artists Section -->
            <div id="artists" class="content-section">
                <div class="content-header">
                    <div>
                        <h2 class="content-title">Our Artists</h2>
                        <p class="content-subtitle">Manage your team of pharmaceutical tattoo artists</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-primary-custom btn-custom" onclick="openArtistModal()">
                            <i class="fas fa-plus"></i>
                            Add Artist
                        </button>
                    </div>
                </div>

                <div class="modern-artist-grid" id="modernArtistGrid">
                    <!-- Artists will be dynamically added here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Container -->
    <div class="toast-container" id="toastContainer"></div>

    <!-- Profile Edit Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Profile Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><iconify-icon icon="iconoir:cancel"></iconify-icon></button>
                </div>
                <div class="modal-body">
                    <!-- Profile Image Section -->
                    <div class="form-group">
                        <label class="form-label">Profile Picture</label>
                        <div class="profile-image-section">
                            <div class="profile-image-container">
                                <div class="profile-image-placeholder" id="profileImagePreview">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="image-upload-btn" onclick="document.getElementById('profileImageInput').click()">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <input type="file" id="profileImageInput" class="hidden-file-input" accept="image/*" onchange="handleProfileImageUpload(event)">
                            </div>
                            <div class="image-upload-info">
                                <h6>Upload Profile Picture</h6>
                                <p>Choose a professional photo that represents you</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Category *</label>
                                <select class="form-control" id="category">
                                    <option value="">Select Category</option>
                                    <option value="pharmaceutical">Pharmaceutical Tattoo</option>
                                    <option value="medical">Medical Tattoo</option>
                                    <option value="cosmetic">Cosmetic Tattoo</option>
                                    <option value="therapeutic">Therapeutic Tattoo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Bio / Experience</label>
                        <textarea class="form-control" id="bio" rows="4" placeholder="Tell us about your experience and expertise..."></textarea>
                    </div>

                    <!-- Address Information -->
                    <h6 style="margin-top: 2rem; margin-bottom: 1rem; color: var(--text-primary);">Address Information</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Address Line 1 *</label>
                                <input type="text" class="form-control" id="address1" placeholder="Street address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Address Line 2</label>
                                <input type="text" class="form-control" id="address2" placeholder="Apartment, suite, etc.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">City *</label>
                                <input type="text" class="form-control" id="city" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">State *</label>
                                <input type="text" class="form-control" id="state" placeholder="State">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Zip Code *</label>
                                <input type="text" class="form-control" id="zipCode" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom btn-custom" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn-primary-custom btn-custom" onclick="saveProfile()">Save Profile</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Edit Modal -->
    <div class="modal fade" id="shopModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Shop Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><iconify-icon icon="iconoir:cancel"></iconify-icon></button>
                </div>
                <div class="modal-body">
                    <!-- Shop Banner Upload -->
                    <div class="form-group">
                        <label class="form-label">Shop Banner</label>
                        <div class="shop-banner-section">
                            <div class="shop-banner-preview" id="shopBannerPreview" onclick="document.getElementById('shopBannerInput').click()">
                                <div class="shop-banner-placeholder">
                                    <i class="fas fa-image"></i>
                                    <h6>Upload Shop Banner</h6>
                                    <p>Click to upload banner image (Recommended: 1200x400px)</p>
                                </div>
                            </div>
                            <input type="file" id="shopBannerInput" class="hidden-file-input" accept="image/*" onchange="handleShopBannerUpload(event)">
                        </div>
                    </div>

                    <!-- Shop Details -->
                    <!-- <h6 style="margin-top: 2rem; margin-bottom: 1rem; color: var(--text-primary);">Shop Details</h6> -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Shop Name *</label>
                                <input type="text" class="form-control" id="shopName" placeholder="Enter shop name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Shop Email *</label>
                                <input type="email" class="form-control" id="shopEmail" placeholder="Enter shop email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Shop Phone *</label>
                                <input type="tel" class="form-control" id="shopPhone" placeholder="Enter shop phone number">
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="form-label">Shop Description</label>
                        <textarea class="form-control" id="shopDescription" rows="3" placeholder="Describe your shop and services..."></textarea>
                    </div>

                    <!-- Shop Address -->
                    <!-- <h6 style="margin-top: 2rem; margin-bottom: 1rem; color: var(--text-primary);">Shop Address</h6> -->
                    <div class="form-group">
                        <label class="form-label">Store Address *</label>
                        <textarea class="form-control" id="storeAddress" rows="3" placeholder="Enter complete store address"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">City *</label>
                                <input type="text" class="form-control" id="shopCity" placeholder="Enter city">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">State/Province *</label>
                                <input type="text" class="form-control" id="shopState" placeholder="Enter state/province">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Postal/Zip Code *</label>
                                <input type="text" class="form-control" id="shopPostal" placeholder="Enter postal/zip code">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Country *</label>
                        <select class="form-control" id="shopCountry">
                            <option value="">Select Country</option>
                            <option value="us">United States</option>
                            <option value="ca">Canada</option>
                            <option value="uk">United Kingdom</option>
                            <option value="au">Australia</option>
                            <option value="de">Germany</option>
                            <option value="fr">France</option>
                        </select>
                    </div>

                    <!-- Availability Schedule -->
                    <h6 style="margin-top: 2rem; margin-bottom: 1rem;“M" color: var(--text-primary);">Availability Schedule</h6>
                    <div class="schedule-container">
                        <div id="scheduleList">
                            <!-- Schedule items will be added here -->
                        </div>
                        <button type="button" class="btn-schedule btn-add-schedule" onclick="addScheduleItem()">
                            <i class="fas fa-plus"></i> Add Schedule
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom btn-custom" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn-primary-custom btn-custom" onclick="saveShopInfo()">Save Shop Info</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Upload Modal -->
    <div class="modal fade" id="galleryUploadModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Upload Gallery Images</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><iconify-icon icon="iconoir:cancel"></iconify-icon>
                </button>
                </div>
                <div class="modal-body">
                    <div class="modern-upload-area" id="modernUploadArea">
                        <i class="fas fa-cloud-upload-alt upload-icon"></i>
                        <h5>Drag & Drop Images Here</h5>
                        <p>Or click to select multiple images</p>
                        <input type="file" id="galleryImagesInput" class="hidden-file-input" accept="image/*" multiple onchange="handleGalleryImagesUpload(event)">
                    </div>
                    <div class="upload-preview-grid" id="uploadPreviewGrid">
                        <!-- Preview images will be shown here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom btn-custom" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn-primary-custom btn-custom" onclick="uploadGalleryImages()">Upload Images</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Artist Modal -->
    <div class="modal fade" id="artistModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="artistModalTitle">Add Artist</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- Artist Image Upload -->
                    <div class="form-group">
                        <label class="form-label">Artist Photo</label>
                        <div class="profile-image-section">
                            <div class="profile-image-container">
                                <div class="profile-image-placeholder" id="artistImagePreview">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="image-upload-btn" onclick="document.getElementById('artistImageInput').click()">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <input type="file" id="artistImageInput" class="hidden-file-input" accept="image/*" onchange="handleArtistImageUpload(event)">
                            </div>
                            <div class="image-upload-info">
                                <h6>Upload Artist Photo</h6>
                                <p>Choose a professional photo of the artist</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Artist Name *</label>
                                <input type="text" class="form-control" id="artistName" placeholder="Enter artist name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" id="artistEmail" placeholder="Enter artist email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Phone *</label>
                                <input type="tel" class="form-control" id="artistPhone" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Years of Experience *</label>
                                <input type="number" class="form-control" id="artistExperience" placeholder="Years of experience" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Expertise *</label>
                        <textarea class="form-control" id="artistExpertise" rows="3" placeholder="Describe areas of expertise..."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Bio</label>
                        <textarea class="form-control" id="artistBio" rows="3" placeholder="Artist biography..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary-custom btn-custom" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn-primary-custom btn-custom" onclick="saveArtist()">Save Artist</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fancy Image Popup -->
    <div class="fancy-popup-overlay" id="fancyPopup">
        <div class="fancy-popup-content">
            <button class="fancy-popup-close" onclick="closeFancyPopup()">
                <i class="fas fa-times"></i>
            </button>
            <img class="fancy-popup-image" id="fancyPopupImage" src="" alt="">
        </div>
    </div>

<?php include "footer.php" ?>

<!-- Add Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
        // Global variables
        let galleryWorks = [];
        let artists = [];
        let currentEditArtistIndex = -1;
        let currentArtistImage = null;
        let currentProfileImage = null;
        let currentShopBanner = null;
        let scheduleItems = [];
        let uploadPreviewImages = [];

        // Profile data
        let profileData = {
            fullName: '',
            email: '',
            phone: '',
            category: '',
            bio: '',
            address1: '',
            address2: '',
            city: '',
            state: '',
            zipCode: '',
            profileImage: null
        };

        // Shop data
        let shopData = {
            shopName: '',
            shopEmail: '',
            shopPhone: '',
            shopDescription: '',
            storeAddress: '',
            shopCity: '',
            shopState: '',
            shopPostal: '',
            shopCountry: '',
            shopBanner: null,
            schedule: []
        };

        // Initialize the application
        document.addEventListener('DOMContentLoaded', function() {
            initializeApp();
        });

        function initializeApp() {
            // Initialize Select2 for all select elements
            $('select').select2();

            // Set up menu navigation
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    switchSection(this.dataset.section);
                    setActiveMenuItem(this);
                });
            });

            // Set up drag and drop for gallery upload
            setupDragAndDrop();

            // Load sample data
            loadSampleData();
            renderModernGallery();
            renderModernArtists();
            updateProfileView();
            updateShopView();
        }

        function switchSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.remove('active'));

            // Show selected section
            document.getElementById(sectionId).classList.add('active');
        }

        function setActiveMenuItem(activeItem) {
            // Remove active class from all menu items
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => item.classList.remove('active'));

            // Add active class to clicked item
            activeItem.classList.add('active');
        }

        function loadSampleData() {
            // Sample profile data
            profileData = {
                fullName: 'John Doe',
                email: 'john.doe@example.com',
                phone: '+1 (555) 123-4567',
                category: 'pharmaceutical',
                bio: 'Certified pharmaceutical tattoo artist with over 10 years of experience in medical tattooing.',
                address1: '123 Main Street',
                address2: 'Suite 101',
                city: 'Springfield',
                state: 'IL',
                zipCode: '62701',
                profileImage: null
            };

            // Sample shop data
            shopData = {
                shopName: 'MediTattoo Studio',
                shopEmail: 'contact@meditattoo.com',
                shopPhone: '+1 (555) 987-6543',
                shopDescription: 'Specializing in pharmaceutical and medical tattoos to enhance patient confidence and recovery.',
                storeAddress: '456 Health Avenue',
                shopCity: 'Springfield',
                shopState: 'IL',
                shopPostal: '62702',
                shopCountry: 'us',
                shopBanner: null,
                schedule: [
                    { id: 1, day: 'monday', openTime: '09:00', closeTime: '17:00' },
                    { id: 2, day: 'tuesday', openTime: '09:00', closeTime: '17:00' },
                    { id: 3, day: 'wednesday', openTime: '09:00', closeTime: '17:00' },
                    { id: 4, day: 'thursday', openTime: '09:00', closeTime: '17:00' },
                    { id: 5, day: 'friday', openTime: '09:00', closeTime: '17:00' }
                ]
            };

            // Sample gallery works
            galleryWorks = [
                {
                    id: 1,
                    image: "images/new-image/w1.png"
                },
                {
                    id: 2,
                    image: "images/new-image/w2.png"
                },
                {
                    id: 3,
                    image: "images/new-image/w3.png"
                },
                  {
                    id: 4,
                    image: "images/new-image/w4.png"
                },
                  {
                    id: 5,
                    image: "images/new-image/w5.png"
                },
                  {
                    id: 6,
                    image: "images/new-image/w6.png"
                }
            ];

            // Sample artists
            artists = [
                {
                    id: 1,
                    name: "Sarah Johnson",
                    email: "sarah.johnson@example.com",
                    phone: "+1 (555) 123-4567",
                    experience: 8,
                    expertise: "Pharmaceutical tattoos, Areola reconstruction, Medical pigmentation",
                    bio: "Board-certified specialist in pharmaceutical tattooing with extensive experience in post-surgical reconstruction.",
                    image: "images/review1.png"
                },
                {
                    id: 2,
                    name: "Michael Chen",
                    email: "michael.chen@example.com",
                    phone: "+1 (555) 987-6543",
                    experience: 5,
                    expertise: "Scar camouflage, Vitiligo treatment, Skin tone matching",
                    bio: "Expert in therapeutic tattooing with a focus on helping patients regain confidence through advanced techniques.",
                    image: "images/review2..png"
                }
            ];
        }

        // Profile functions
        function openProfileModal() {
            // Populate form with current data
            document.getElementById('fullName').value = profileData.fullName;
            document.getElementById('email').value = profileData.email;
            document.getElementById('phone').value = profileData.phone;
            document.getElementById('category').value = profileData.category;
            document.getElementById('bio').value = profileData.bio;
            document.getElementById('address1').value = profileData.address1;
            document.getElementById('address2').value = profileData.address2;
            document.getElementById('city').value = profileData.city;
            document.getElementById('state').value = profileData.state;
            document.getElementById('zipCode').value = profileData.zipCode;

            if (profileData.profileImage) {
                document.getElementById('profileImagePreview').innerHTML = `<img src="${profileData.profileImage}" alt="Profile" class="profile-image">`;
            }

            const modal = new bootstrap.Modal(document.getElementById('profileModal'));
            modal.show();

            // Re-initialize Select2 for the category dropdown in the modal
            $('#category').select2();
        }

        function handleProfileImageUpload(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    currentProfileImage = e.target.result;
                    const preview = document.getElementById('profileImagePreview');
                    preview.innerHTML = `<img src="${e.target.result}" alt="Profile" class="profile-image">`;
                };
                reader.readAsDataURL(file);
            }
        }

        function saveProfile() {
            // Get form data
            profileData = {
                fullName: document.getElementById('fullName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                category: document.getElementById('category').value,
                bio: document.getElementById('bio').value,
                address1: document.getElementById('address1').value,
                address2: document.getElementById('address2').value,
                city: document.getElementById('city').value,
                state: document.getElementById('state').value,
                zipCode: document.getElementById('zipCode').value,
                profileImage: currentProfileImage || profileData.profileImage
            };

            // Basic validation
            if (!profileData.fullName || !profileData.email || !profileData.phone) {
                showToast('Validation Error', 'Please fill in all required fields', 'error');
                return;
            }

            updateProfileView();
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('profileModal'));
            modal.hide();

            showToast('Success', 'Profile updated successfully!', 'success');
        }

        function updateProfileView() {
            document.getElementById('profileNameView').textContent = profileData.fullName || 'Not set';
            document.getElementById('profileEmailView').textContent = profileData.email || 'Not set';
            document.getElementById('profilePhoneView').textContent = profileData.phone || 'Not set';
            document.getElementById('profileCategoryView').textContent = profileData.category || 'Not set';
            document.getElementById('profileBioView').textContent = profileData.bio || 'Not set';
            
            const address = [profileData.address1, profileData.address2].filter(Boolean).join(', ');
            document.getElementById('profileAddressView').textContent = address || 'Not set';
            document.getElementById('profileCityView').textContent = profileData.city || 'Not set';
            document.getElementById('profileStateView').textContent = profileData.state || 'Not set';
            document.getElementById('profileZipView').textContent = profileData.zipCode || 'Not set';

            const avatarView = document.getElementById('profileAvatarView');
            if (profileData.profileImage) {
                avatarView.innerHTML = `<img src="${profileData.profileImage}" alt="Profile" class="view-mode-avatar">`;
            } else {
                avatarView.className = 'view-mode-avatar-placeholder';
                avatarView.innerHTML = '<i class="fas fa-user"></i>';
            }
        }

        // Shop functions
        function openShopModal() {
            // Populate form with current data
            document.getElementById('shopName').value = shopData.shopName;
            document.getElementById('shopEmail').value = shopData.shopEmail;
            document.getElementById('shopPhone').value = shopData.shopPhone;
            document.getElementById('shopDescription').value = shopData.shopDescription;
            document.getElementById('storeAddress').value = shopData.storeAddress;
            document.getElementById('shopCity').value = shopData.shopCity;
            document.getElementById('shopState').value = shopData.shopState;
            document.getElementById('shopPostal').value = shopData.shopPostal;
            document.getElementById('shopCountry').value = shopData.shopCountry;

            if (shopData.shopBanner) {
                document.getElementById('shopBannerPreview').innerHTML = `<img src="${shopData.shopBanner}" alt="Shop Banner">`;
            }

            // Load schedule
            scheduleItems = [...shopData.schedule];
            renderScheduleItems();

            const modal = new bootstrap.Modal(document.getElementById('shopModal'));
            modal.show();

            // Re-initialize Select2 for the country dropdown and schedule dropdowns
            $('#shopCountry').select2();
            $('.schedule-day').select2();
        }

        function handleShopBannerUpload(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    currentShopBanner = e.target.result;
                    const preview = document.getElementById('shopBannerPreview');
                    preview.innerHTML = `<img src="${e.target.result}" alt="Shop Banner">`;
                };
                reader.readAsDataURL(file);
            }
        }

        function addScheduleItem() {
            const newSchedule = {
                id: Date.now(),
                day: '',
                openTime: '',
                closeTime: ''
            };
            scheduleItems.push(newSchedule);
            renderScheduleItems();

            // Re-initialize Select2 for newly added schedule dropdown
            $('.schedule-day').select2();
        }

        function removeScheduleItem(id) {
            scheduleItems = scheduleItems.filter(item => item.id !== id);
            renderScheduleItems();

            // Re-initialize Select2 for remaining schedule dropdowns
            $('.schedule-day').select2();
        }

        function renderScheduleItems() {
            const scheduleList = document.getElementById('scheduleList');
            scheduleList.innerHTML = '';

            scheduleItems.forEach(item => {
                const scheduleDiv = document.createElement('div');
                scheduleDiv.className = 'schedule-item';
                scheduleDiv.innerHTML = `
                 <div class="selectBox">
                  <select class="form-control schedule-day" onchange="updateScheduleItem(${item.id}, 'day', this.value)">
                        <option value="">Select Day</option>
                        <option value="monday" ${item.day === 'monday' ? 'selected' : ''}>Monday</option>
                        <option value="tuesday" ${item.day === 'tuesday' ? 'selected' : ''}>Tuesday</option>
                        <option value="wednesday" ${item.day === 'wednesday' ? 'selected' : ''}>Wednesday</option>
                        <option value="thursday" ${item.day === 'thursday' ? 'selected' : ''}>Thursday</option>
                        <option value="friday" ${item.day === 'friday' ? 'selected' : ''}>Friday</option>
                        <option value="saturday" ${item.day === 'saturday' ? 'selected' : ''}>Saturday</option>
                        <option value="sunday" ${item.day === 'sunday' ? 'selected' : ''}>Sunday</option>
                    </select>
                 </div>
                   
                    <div class="schedule-time">
                        <input type="time" class="form-control" value="${item.openTime}" onchange="updateScheduleItem(${item.id}, 'openTime', this.value)">
                        <span>to</span>
                        <input type="time" class="form-control" value="${item.closeTime}" onchange="updateScheduleItem(${item.id}, 'closeTime', this.value)">
                    </div>
                    <div class="schedule-actions">
                        <button type="button" class="btn-remove-schedule" onclick="removeScheduleItem(${item.id})">
                          <iconify-icon icon="material-symbols:delete-outline-rounded"></iconify-icon>
                        </button>
                    </div>
                `;
                scheduleList.appendChild(scheduleDiv);
            });

            // Initialize Select2 for schedule dropdowns
            $('.schedule-day').select2();
        }

        function updateScheduleItem(id, field, value) {
            const item = scheduleItems.find(item => item.id === id);
            if (item) {
                item[field] = value;
            }
        }

        function saveShopInfo() {
            // Get form data
            shopData = {
                shopName: document.getElementById('shopName').value,
                shopEmail: document.getElementById('shopEmail').value,
                shopPhone: document.getElementById('shopPhone').value,
                shopDescription: document.getElementById('shopDescription').value,
                storeAddress: document.getElementById('storeAddress').value,
                shopCity: document.getElementById('shopCity').value,
                shopState: document.getElementById('shopState').value,
                shopPostal: document.getElementById('shopPostal').value,
                shopCountry: document.getElementById('shopCountry').value,
                shopBanner: currentShopBanner || shopData.shopBanner,
                schedule: [...scheduleItems]
            };

            // Basic validation
            if (!shopData.shopName || !shopData.shopEmail || !shopData.shopPhone) {
                showToast('Validation Error', 'Please fill in all required fields', 'error');
                return;
            }

            updateShopView();
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('shopModal'));
            modal.hide();

            showToast('Success', 'Shop information updated successfully!', 'success');
        }

        function updateShopView() {
            document.getElementById('shopNameView').textContent = shopData.shopName || 'Not set';
            document.getElementById('shopEmailView').textContent = shopData.shopEmail || 'Not set';
            document.getElementById('shopPhoneView').textContent = shopData.shopPhone || 'Not set';
            document.getElementById('shopDescriptionView').textContent = shopData.shopDescription || 'Not set';
            document.getElementById('shopAddressView').textContent = shopData.storeAddress || 'Not set';
            document.getElementById('shopCityView').textContent = shopData.shopCity || 'Not set';
            document.getElementById('shopStateView').textContent = shopData.shopState || 'Not set';
            document.getElementById('shopPostalView').textContent = shopData.shopPostal || 'Not set';
            document.getElementById('shopCountryView').textContent = shopData.shopCountry || 'Not set';

            // Update banner
            const bannerView = document.getElementById('shopBannerView');
            if (shopData.shopBanner) {
                bannerView.innerHTML = `<img src="${shopData.shopBanner}" alt="Shop Banner" style="width: 100%; height: 100%; object-fit: cover; border-radius: var(--radius-lg);">`;
            } else {
                bannerView.innerHTML = 'No banner uploaded';
                bannerView.style.display = 'flex';
                bannerView.style.alignItems = 'center';
                bannerView.style.justifyContent = 'center';
                bannerView.style.color = 'var(--text-muted)';
            }

            // Update schedule
            const scheduleView = document.getElementById('shopScheduleView');
            if (shopData.schedule.length > 0) {
                let scheduleHtml = '';
                shopData.schedule.forEach(item => {
                    if (item.day && item.openTime && item.closeTime) {
                        scheduleHtml += `
                            <div style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid var(--border-color);">
                                <span style="font-weight: 500; text-transform: capitalize;">${item.day}</span>
                                <span>${item.openTime} - ${item.closeTime}</span>
                            </div>
                        `;
                    }
                });
                scheduleView.innerHTML = scheduleHtml || '<p style="color: var(--text-muted);">No schedule set</p>';
            } else {
                scheduleView.innerHTML = '<p style="color: var(--text-muted);">No schedule set</p>';
            }
        }

        // Gallery functions
        function setupDragAndDrop() {
            const uploadArea = document.getElementById('modernUploadArea');
            
            uploadArea.addEventListener('click', () => {
                document.getElementById('galleryImagesInput').click();
            });

            uploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadArea.classList.add('dragover');
            });

            uploadArea.addEventListener('dragleave', () => {
                uploadArea.classList.remove('dragover');
            });

            uploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadArea.classList.remove('dragover');
                const files = Array.from(e.dataTransfer.files);
                handleMultipleImageUpload(files);
            });
        }

        function openGalleryUploadModal() {
            uploadPreviewImages = [];
            document.getElementById('uploadPreviewGrid').innerHTML = '';
            document.getElementById('galleryImagesInput').value = '';
            
            const modal = new bootstrap.Modal(document.getElementById('galleryUploadModal'));
            modal.show();
        }

        function handleGalleryImagesUpload(event) {
            const files = Array.from(event.target.files);
            handleMultipleImageUpload(files);
        }

        function handleMultipleImageUpload(files) {
            files.forEach(file => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        uploadPreviewImages.push({
                            id: Date.now() + Math.random(),
                            src: e.target.result,
                            file: file
                        });
                        renderUploadPreview();
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function renderUploadPreview() {
            const previewGrid = document.getElementById('uploadPreviewGrid');
            previewGrid.innerHTML = '';

            uploadPreviewImages.forEach(image => {
                const previewItem = document.createElement('div');
                previewItem.className = 'upload-preview-item';
                previewItem.innerHTML = `
                    <img src="${image.src}" alt="Preview" class="upload-preview-image">
                    <button class="upload-preview-remove" onclick="removeUploadPreview('${image.id}')">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                previewGrid.appendChild(previewItem);
            });
        }

        function removeUploadPreview(id) {
            uploadPreviewImages = uploadPreviewImages.filter(img => img.id !== id);
            renderUploadPreview();
        }

        function uploadGalleryImages() {
            if (uploadPreviewImages.length === 0) {
                showToast('Validation Error', 'Please select at least one image', 'error');
                return;
            }

            uploadPreviewImages.forEach(image => {
                galleryWorks.push({
                    id: Date.now() + Math.random(),
                    image: image.src
                });
            });

            renderModernGallery();
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('galleryUploadModal'));
            modal.hide();

            showToast('Success', `${uploadPreviewImages.length} image(s) uploaded successfully!`, 'success');
        }

        function renderModernGallery() {
            const galleryGrid = document.getElementById('modernGalleryGrid');
            galleryGrid.innerHTML = '';

            if (galleryWorks.length === 0) {
                galleryGrid.innerHTML = '<p class="text-center" style="color: var(--text-muted); grid-column: 1 / -1;">No images uploaded yet. Click "Upload Images" to add your work.</p>';
                return;
            }

            galleryWorks.forEach((work, index) => {
                const galleryCard = document.createElement('div');
                galleryCard.className = 'modern-gallery-card';
                galleryCard.innerHTML = `
                    <img src="${work.image}" alt="Gallery Image" class="modern-gallery-image" onclick="openFancyPopup('${work.image}')">
                    <div class="modern-gallery-actions">
                        <button class="modern-action-btn delete" onclick="deleteGalleryImage(${index})" title="Delete">
                           <iconify-icon icon="material-symbols:delete-outline-rounded"></iconify-icon>
                        </button>
                    </div>
                `;
                galleryGrid.appendChild(galleryCard);
            });
        }

        function openFancyPopup(imageSrc) {
            document.getElementById('fancyPopupImage').src = imageSrc;
            document.getElementById('fancyPopup').classList.add('active');
        }

        function closeFancyPopup() {
            document.getElementById('fancyPopup').classList.remove('active');
        }

        function deleteGalleryImage(index) {
            if (confirm('Are you sure you want to delete this image?')) {
                galleryWorks.splice(index, 1);
                renderModernGallery();
                showToast('Success', 'Image deleted successfully!', 'success');
            }
        }

        // Artist functions
        function openArtistModal() {
            currentEditArtistIndex = -1;
            document.getElementById('artistModalTitle').textContent = 'Add Artist';
            
            // Clear form
            document.getElementById('artistName').value = '';
            document.getElementById('artistEmail').value = '';
            document.getElementById('artistPhone').value = '';
            document.getElementById('artistExperience').value = '';
            document.getElementById('artistExpertise').value = '';
            document.getElementById('artistBio').value = '';
            document.getElementById('artistImageInput').value = '';
            document.getElementById('artistImagePreview').innerHTML = '<i class="fas fa-user"></i>';
            currentArtistImage = null;
            
            const modal = new bootstrap.Modal(document.getElementById('artistModal'));
            modal.show();
        }

        function editArtist(index) {
            currentEditArtistIndex = index;
            const artist = artists[index];
            
            document.getElementById('artistModalTitle').textContent = 'Edit Artist';
            document.getElementById('artistName').value = artist.name;
            document.getElementById('artistEmail').value = artist.email;
            document.getElementById('artistPhone').value = artist.phone;
            document.getElementById('artistExperience').value = artist.experience;
            document.getElementById('artistExpertise').value = artist.expertise;
            document.getElementById('artistBio').value = artist.bio;
            
            if (artist.image) {
                document.getElementById('artistImagePreview').innerHTML = `<img src="${artist.image}" alt="Artist" class="profile-image">`;
                currentArtistImage = artist.image;
            }
            
            const modal = new bootstrap.Modal(document.getElementById('artistModal'));
            modal.show();
        }

        function handleArtistImageUpload(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    currentArtistImage = e.target.result;
                    const preview = document.getElementById('artistImagePreview');
                    preview.innerHTML = `<img src="${e.target.result}" alt="Artist" class="profile-image">`;
                };
                reader.readAsDataURL(file);
            }
        }

        function saveArtist() {
            const artistData = {
                id: currentEditArtistIndex >= 0 ? artists[currentEditArtistIndex].id : Date.now(),
                name: document.getElementById('artistName').value,
                email: document.getElementById('artistEmail').value,
                phone: document.getElementById('artistPhone').value,
                experience: parseInt(document.getElementById('artistExperience').value),
                expertise: document.getElementById('artistExpertise').value,
                bio: document.getElementById('artistBio').value,
                image: currentArtistImage
            };

            if (!artistData.name || !artistData.email || !artistData.phone || !artistData.experience || !artistData.expertise) {
                showToast('Validation Error', 'Please fill in all required fields', 'error');
                return;
            }

            if (currentEditArtistIndex >= 0) {
                artists[currentEditArtistIndex] = artistData;
                showToast('Success', 'Artist updated successfully!', 'success');
            } else {
                artists.push(artistData);
                showToast('Success', 'Artist added successfully!', 'success');
            }

            renderModernArtists();

            const modal = bootstrap.Modal.getInstance(document.getElementById('artistModal'));
            modal.hide();
        }

        function renderModernArtists() {
            const artistGrid = document.getElementById('modernArtistGrid');
            artistGrid.innerHTML = '';

            if (artists.length === 0) {
                artistGrid.innerHTML = '<div class="form-card"><p class="text-center" style="color: var(--text-muted);">No artists added yet. Click "Add Artist" to add your first team member.</p></div>';
                return;
            }

            artists.forEach((artist, index) => {
                const artistCard = document.createElement('div');
                artistCard.className = 'modern-artist-card';
                artistCard.innerHTML = `
                    <div class="modern-artist-actions">
                        <button class="modern-action-btn edit" onclick="editArtist(${index})" title="Edit Artist">
                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                        </button>
                        <button class="modern-action-btn delete" onclick="deleteArtist(${index})" title="Delete Artist">
                            <iconify-icon icon="material-symbols:delete-outline-rounded"></iconify-icon>
                        </button>
                    </div>
                    <div class="modern-artist-header">
                        ${artist.image ? 
                            `<img src="${artist.image}" alt="${artist.name}" class="modern-artist-avatar">` :
                            `<div class="modern-artist-avatar-placeholder"><i class="fas fa-user"></i></div>`
                        }
                        <div class="modern-artist-info">
                            <h3>${artist.name}</h3>
                            <div class="modern-artist-experience">${artist.experience} years experience</div>
                        </div>
                    </div>
                    <div class="modern-artist-details">
                        <div class="modern-artist-detail">
                            <span class="modern-artist-label">Email</span>
                            <span class="modern-artist-value">${artist.email}</span>
                        </div>
                        <div class="modern-artist-detail">
                            <span class="modern-artist-label">Phone</span>
                            <span class="modern-artist-value">${artist.phone}</span>
                        </div>
                        <div class="modern-artist-detail">
                            <span class="modern-artist-label">Expertise</span>
                            <span class="modern-artist-value">${artist.expertise}</span>
                        </div>
                        ${artist.bio ? `
                            <div class="modern-artist-detail">
                                <span class="modern-artist-label">Bio</span>
                                <span class="modern-artist-value">${artist.bio}</span>
                            </div>
                        ` : ''}
                    </div>
                `;
                artistGrid.appendChild(artistCard);
            });
        }

        function deleteArtist(index) {
            if (confirm('Are you sure you want to delete this artist?')) {
                artists.splice(index, 1);
                renderModernArtists();
                showToast('Success', 'Artist deleted successfully!', 'success');
            }
        }

        // Toast notification system
        function showToast(title, message, type = 'success') {
            const toastContainer = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.className = `toast-notification toast-${type}`;
            
            const iconMap = {
                success: 'fas fa-check',
                error: 'fas fa-times',
                info: 'fas fa-info'
            };

            toast.innerHTML = `
                <div class="toast-icon">
                    <i class="${iconMap[type]}"></i>
                </div>
                <div class="toast-content">
                    <div class="toast-title">${title}</div>
                    <div class="toast-message">${message}</div>
                </div>
                <button class="toast-close" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            `;

            toastContainer.appendChild(toast);

            // Show toast with animation
            setTimeout(() => toast.classList.add('show'), 100);

            // Auto remove after 5 seconds
            setTimeout(() => {
                if (toast.parentElement) {
                    toast.classList.remove('show');
                    setTimeout(() => toast.remove(), 300);
                }
            }, 5000);
        }

        // Close fancy popup when clicking outside
        document.getElementById('fancyPopup').addEventListener('click', function(e) {
            if (e.target === this) {
                closeFancyPopup();
            }
        });

        // Close fancy popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeFancyPopup();
            }
        });
    </script>