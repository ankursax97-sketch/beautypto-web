<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyPro - Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <div class="main-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2 class="sidebar-title">Dashboard</h2>
                <p class="sidebar-subtitle">Manage your account</p>
            </div>
            <div class="sidebar-menu">
                <button class="menu-item active" data-section="profile">
                    <i class="fas fa-user"></i>
                    Profile Settings
                </button>
                <button class="menu-item" data-section="shop">
                    <i class="fas fa-store"></i>
                    Shop Settings
                </button>
                <button class="menu-item" data-section="gallery">
                    <i class="fas fa-images"></i>
                    Gallery
                </button>
                <button class="menu-item" data-section="artists">
                    <i class="fas fa-users"></i>
                    Artists
                </button>
                <button class="menu-item" data-section="subscription">
                    <i class="fas fa-credit-card"></i>
                    Subscription
                </button>
                <button class="menu-item" data-section="transactions">
                    <i class="fas fa-receipt"></i>
                    Transactions
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Profile Section -->
            <div class="content-section active" id="profile">
                <div class="content-header">
                    <div>
                        <h1 class="content-title">Profile Settings</h1>
                        <p class="content-subtitle">Manage your personal information and preferences</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-custom btn-secondary-custom">
                            <i class="fas fa-eye"></i>
                            Preview
                        </button>
                        <button class="btn-custom btn-primary-custom">
                            <i class="fas fa-save"></i>
                            Save Changes
                        </button>
                    </div>
                </div>

                <div class="form-card">
                    <h3 class="card-title">Personal Information</h3>
                    <div class="profileBox">
                        <div class="profile-image-section">
                            <div class="profile-image-container">
                                <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=150&h=150&fit=crop" alt="Profile" class="profile-image" id="profileImage">
                                <button class="image-upload-btn" onclick="document.getElementById('profileImageInput').click()">
                                    <i class="fas fa-camera"></i>
                                </button>
                                <input type="file" id="profileImageInput" class="hidden-file-input" accept="image/*">
                            </div>
                            <div class="image-upload-info">
                                <h6>Profile Picture</h6>
                                <p>Upload a professional photo. JPG, PNG up to 5MB.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" value="John" placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" value="Doe" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="john.doe@example.com" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Phone</label>
                                <input type="tel" class="form-control" value="+1 234 567 8900" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Bio</label>
                                <textarea class="form-control" rows="4" placeholder="Tell us about yourself...">Professional beauty artist with 5+ years of experience in PMU and cosmetic tattooing.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shop Settings Section -->
            <div class="content-section" id="shop">
                <div class="content-header">
                    <div>
                        <h1 class="content-title">Shop Settings</h1>
                        <p class="content-subtitle">Configure your salon information and services</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-custom btn-primary-custom">
                            <i class="fas fa-save"></i>
                            Save Changes
                        </button>
                    </div>
                </div>

                <div class="form-card">
                    <h3 class="card-title">Shop Information</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Shop Name</label>
                                <input type="text" class="form-control" value="Beauty Studio Pro" placeholder="Enter shop name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Business Type</label>
                                <select class="form-control">
                                    <option>Beauty Salon</option>
                                    <option>PMU Studio</option>
                                    <option>Spa & Wellness</option>
                                    <option>Medical Spa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3" placeholder="Describe your business...">Professional beauty services including PMU, lash extensions, and skincare treatments.</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" value="123 Beauty Street" placeholder="Enter address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" value="New York" placeholder="Enter city">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Section -->
            <div class="content-section" id="gallery">
                <div class="content-header">
                    <div>
                        <h1 class="content-title">Gallery Management</h1>
                        <p class="content-subtitle">Showcase your work and attract more clients</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-custom btn-primary-custom" onclick="openUploadModal()">
                            <i class="fas fa-plus"></i>
                            Add Images
                        </button>
                    </div>
                </div>

                <div class="modern-gallery-grid">
                    <div class="modern-gallery-card">
                        <img src="https://images.pexels.com/photos/3993449/pexels-photo-3993449.jpeg?auto=compress&cs=tinysrgb&w=300&h=200&fit=crop" alt="Gallery Image" class="modern-gallery-image">
                        <div class="modern-gallery-actions">
                            <button class="modern-action-btn edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="modern-action-btn delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modern-gallery-card">
                        <img src="https://images.pexels.com/photos/3997991/pexels-photo-3997991.jpeg?auto=compress&cs=tinysrgb&w=300&h=200&fit=crop" alt="Gallery Image" class="modern-gallery-image">
                        <div class="modern-gallery-actions">
                            <button class="modern-action-btn edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="modern-action-btn delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modern-gallery-card">
                        <img src="https://images.pexels.com/photos/3997992/pexels-photo-3997992.jpeg?auto=compress&cs=tinysrgb&w=300&h=200&fit=crop" alt="Gallery Image" class="modern-gallery-image">
                        <div class="modern-gallery-actions">
                            <button class="modern-action-btn edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="modern-action-btn delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Artists Section -->
            <div class="content-section" id="artists">
                <div class="content-header">
                    <div>
                        <h1 class="content-title">Artist Management</h1>
                        <p class="content-subtitle">Manage your team of beauty professionals</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-custom btn-primary-custom" onclick="openArtistModal()">
                            <i class="fas fa-plus"></i>
                            Add Artist
                        </button>
                    </div>
                </div>

                <div class="modern-artist-grid">
                    <div class="modern-artist-card">
                        <div class="modern-artist-actions">
                            <button class="modern-action-btn edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="modern-action-btn delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="modern-artist-header">
                            <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=80&h=80&fit=crop" alt="Artist" class="modern-artist-avatar">
                            <div class="modern-artist-info">
                                <h3>Sarah Johnson</h3>
                                <p class="modern-artist-experience">5 years experience</p>
                            </div>
                        </div>
                        <div class="modern-artist-details">
                            <div class="modern-artist-detail">
                                <span class="modern-artist-label">Specialization</span>
                                <span class="modern-artist-value">PMU & Microblading</span>
                            </div>
                            <div class="modern-artist-detail">
                                <span class="modern-artist-label">Phone</span>
                                <span class="modern-artist-value">+1 234 567 8901</span>
                            </div>
                            <div class="modern-artist-detail">
                                <span class="modern-artist-label">Email</span>
                                <span class="modern-artist-value">sarah@beautystudio.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Subscription Section -->
            <div class="content-section" id="subscription">
                <div class="content-header">
                    <div>
                        <h1 class="content-title">Subscription Management</h1>
                        <p class="content-subtitle">Manage your subscription plans and billing</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-custom btn-primary-custom" onclick="window.location.href='index.php#PricingSection'">
                            <i class="fas fa-upgrade"></i>
                            Upgrade Plan
                        </button>
                    </div>
                </div>

                <!-- Current Subscription Card -->
                <div class="form-card">
                    <h3 class="card-title">Current Subscription</h3>
                    <div class="subscription-current">
                        <div class="subscription-plan-card">
                            <div class="subscription-plan-header">
                                <div class="subscription-plan-icon">
                                    <i class="fas fa-crown"></i>
                                </div>
                                <div class="subscription-plan-info">
                                    <h4>Premium Plan</h4>
                                    <p class="subscription-plan-price">$45.00/month</p>
                                </div>
                                <div class="subscription-status">
                                    <span class="status-badge active">Active</span>
                                </div>
                            </div>
                            <div class="subscription-plan-details">
                                <div class="subscription-detail-row">
                                    <span class="detail-label">Purchase Date:</span>
                                    <span class="detail-value">January 15, 2025</span>
                                </div>
                                <div class="subscription-detail-row">
                                    <span class="detail-label">Next Billing:</span>
                                    <span class="detail-value">February 15, 2025</span>
                                </div>
                                <div class="subscription-detail-row">
                                    <span class="detail-label">Auto Renewal:</span>
                                    <span class="detail-value">
                                        <label class="subscription-toggle">
                                            <input type="checkbox" checked>
                                            <span class="toggle-slider"></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="subscription-actions">
                                <button class="btn-custom btn-secondary-custom">
                                    <i class="fas fa-pause"></i>
                                    Pause Subscription
                                </button>
                                <button class="btn-custom btn-primary-custom">
                                    <i class="fas fa-edit"></i>
                                    Modify Plan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subscription History -->
                <div class="form-card">
                    <h3 class="card-title">Subscription History</h3>
                    <div class="table-responsive">
                        <table class="subscription-table">
                            <thead>
                                <tr>
                                    <th>Plan</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>Purchase Date</th>
                                    <th>Expiry Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="plan-info">
                                            <i class="fas fa-crown plan-icon premium"></i>
                                            <span>Premium Plan</span>
                                        </div>
                                    </td>
                                    <td>Monthly</td>
                                    <td>$45.00</td>
                                    <td>Jan 15, 2025</td>
                                    <td>Feb 15, 2025</td>
                                    <td><span class="status-badge active">Active</span></td>
                                    <td>
                                        <button class="table-action-btn" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Download Invoice">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="plan-info">
                                            <i class="fas fa-star plan-icon standard"></i>
                                            <span>Standard Plan</span>
                                        </div>
                                    </td>
                                    <td>Monthly</td>
                                    <td>$30.00</td>
                                    <td>Dec 15, 2024</td>
                                    <td>Jan 15, 2025</td>
                                    <td><span class="status-badge expired">Expired</span></td>
                                    <td>
                                        <button class="table-action-btn" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Download Invoice">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="plan-info">
                                            <i class="fas fa-gift plan-icon free"></i>
                                            <span>Free Plan</span>
                                        </div>
                                    </td>
                                    <td>Monthly</td>
                                    <td>$15.00</td>
                                    <td>Nov 15, 2024</td>
                                    <td>Dec 15, 2024</td>
                                    <td><span class="status-badge expired">Expired</span></td>
                                    <td>
                                        <button class="table-action-btn" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Download Invoice">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Transactions Section -->
            <div class="content-section" id="transactions">
                <div class="content-header">
                    <div>
                        <h1 class="content-title">Transaction History</h1>
                        <p class="content-subtitle">View and manage your payment transactions</p>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-custom btn-secondary-custom" onclick="exportTransactions()">
                            <i class="fas fa-download"></i>
                            Export
                        </button>
                    </div>
                </div>

                <!-- Transaction Filters -->
                <div class="form-card">
                    <h3 class="card-title">Filters</h3>
                    <div class="transaction-filters">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Date Range</label>
                                    <select class="form-control" id="dateRange">
                                        <option value="all">All Time</option>
                                        <option value="today">Today</option>
                                        <option value="week">This Week</option>
                                        <option value="month" selected>This Month</option>
                                        <option value="quarter">This Quarter</option>
                                        <option value="year">This Year</option>
                                        <option value="custom">Custom Range</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Transaction Type</label>
                                    <select class="form-control" id="transactionType">
                                        <option value="all">All Types</option>
                                        <option value="subscription">Subscription</option>
                                        <option value="booking">Booking Payment</option>
                                        <option value="refund">Refund</option>
                                        <option value="addon">Add-on Services</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-control" id="transactionStatus">
                                        <option value="all">All Status</option>
                                        <option value="completed">Completed</option>
                                        <option value="pending">Pending</option>
                                        <option value="failed">Failed</option>
                                        <option value="refunded">Refunded</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Amount Range</label>
                                    <select class="form-control" id="amountRange">
                                        <option value="all">All Amounts</option>
                                        <option value="0-25">$0 - $25</option>
                                        <option value="25-50">$25 - $50</option>
                                        <option value="50-100">$50 - $100</option>
                                        <option value="100+">$100+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="filter-actions">
                            <button class="btn-custom btn-primary-custom" onclick="applyFilters()">
                                <i class="fas fa-filter"></i>
                                Apply Filters
                            </button>
                            <button class="btn-custom btn-secondary-custom" onclick="clearFilters()">
                                <i class="fas fa-times"></i>
                                Clear
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Transaction Summary Cards -->
                <div class="transaction-summary">
                    <div class="summary-card">
                        <div class="summary-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="summary-info">
                            <h4>$1,245.00</h4>
                            <p>Total Revenue</p>
                        </div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="summary-info">
                            <h4>24</h4>
                            <p>Total Transactions</p>
                        </div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <div class="summary-info">
                            <h4>$45.00</h4>
                            <p>Average Transaction</p>
                        </div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-icon">
                            <i class="fas fa-undo"></i>
                        </div>
                        <div class="summary-info">
                            <h4>2</h4>
                            <p>Refunds</p>
                        </div>
                    </div>
                </div>

                <!-- Transaction Table -->
                <div class="form-card">
                    <h3 class="card-title">Recent Transactions</h3>
                    <div class="table-responsive">
                        <table class="transaction-table">
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Date & Time</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Payment Method</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="transaction-id">#TXN-2025-001</span>
                                    </td>
                                    <td>
                                        <div class="transaction-date">
                                            <span class="date">Jan 15, 2025</span>
                                            <span class="time">10:30 AM</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="transaction-type subscription">Subscription</span>
                                    </td>
                                    <td>Premium Plan - Monthly</td>
                                    <td>
                                        <span class="transaction-amount">$45.00</span>
                                    </td>
                                    <td>
                                        <div class="payment-method">
                                            <i class="fab fa-cc-visa"></i>
                                            <span>**** 4242</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="status-badge completed">Completed</span>
                                    </td>
                                    <td>
                                        <button class="table-action-btn" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Download Receipt">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="table-action-btn" title="Refund">
                                            <i class="fas fa-undo"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="transaction-id">#TXN-2025-002</span>
                                    </td>
                                    <td>
                                        <div class="transaction-date">
                                            <span class="date">Jan 12, 2025</span>
                                            <span class="time">2:15 PM</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="transaction-type booking">Booking</span>
                                    </td>
                                    <td>PMU Session - Sarah Johnson</td>
                                    <td>
                                        <span class="transaction-amount">$150.00</span>
                                    </td>
                                    <td>
                                        <div class="payment-method">
                                            <i class="fab fa-cc-mastercard"></i>
                                            <span>**** 8888</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="status-badge completed">Completed</span>
                                    </td>
                                    <td>
                                        <button class="table-action-btn" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Download Receipt">
                                            <i class="fas fa-download"></i>
                                        </button>
                                        <button class="table-action-btn" title="Refund">
                                            <i class="fas fa-undo"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="transaction-id">#TXN-2025-003</span>
                                    </td>
                                    <td>
                                        <div class="transaction-date">
                                            <span class="date">Jan 10, 2025</span>
                                            <span class="time">11:45 AM</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="transaction-type refund">Refund</span>
                                    </td>
                                    <td>Cancelled Booking Refund</td>
                                    <td>
                                        <span class="transaction-amount refund">-$75.00</span>
                                    </td>
                                    <td>
                                        <div class="payment-method">
                                            <i class="fab fa-cc-visa"></i>
                                            <span>**** 4242</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="status-badge refunded">Refunded</span>
                                    </td>
                                    <td>
                                        <button class="table-action-btn" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Download Receipt">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="transaction-id">#TXN-2025-004</span>
                                    </td>
                                    <td>
                                        <div class="transaction-date">
                                            <span class="date">Jan 8, 2025</span>
                                            <span class="time">9:20 AM</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="transaction-type addon">Add-on</span>
                                    </td>
                                    <td>Extra Artist License</td>
                                    <td>
                                        <span class="transaction-amount">$25.00</span>
                                    </td>
                                    <td>
                                        <div class="payment-method">
                                            <i class="fab fa-paypal"></i>
                                            <span>PayPal</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="status-badge pending">Pending</span>
                                    </td>
                                    <td>
                                        <button class="table-action-btn" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Retry Payment">
                                            <i class="fas fa-redo"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="table-pagination">
                        <div class="pagination-info">
                            Showing 1-4 of 24 transactions
                        </div>
                        <div class="pagination-controls">
                            <button class="pagination-btn" disabled>
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="pagination-btn active">1</button>
                            <button class="pagination-btn">2</button>
                            <button class="pagination-btn">3</button>
                            <button class="pagination-btn">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
    <script>
        // Navigation functionality
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all menu items and sections
                document.querySelectorAll('.menu-item').forEach(mi => mi.classList.remove('active'));
                document.querySelectorAll('.content-section').forEach(cs => cs.classList.remove('active'));
                
                // Add active class to clicked menu item
                this.classList.add('active');
                
                // Show corresponding section
                const sectionId = this.getAttribute('data-section');
                document.getElementById(sectionId).classList.add('active');
            });
        });

        // Filter functions for transactions
        function applyFilters() {
            const dateRange = document.getElementById('dateRange').value;
            const transactionType = document.getElementById('transactionType').value;
            const transactionStatus = document.getElementById('transactionStatus').value;
            const amountRange = document.getElementById('amountRange').value;
            
            // Here you would implement the actual filtering logic
            console.log('Applying filters:', {
                dateRange,
                transactionType,
                transactionStatus,
                amountRange
            });
            
            // Show loading or update table
            alert('Filters applied successfully!');
        }

        function clearFilters() {
            document.getElementById('dateRange').value = 'all';
            document.getElementById('transactionType').value = 'all';
            document.getElementById('transactionStatus').value = 'all';
            document.getElementById('amountRange').value = 'all';
            
            // Reload data without filters
            console.log('Filters cleared');
            alert('Filters cleared!');
        }

        function exportTransactions() {
            // Implement export functionality
            console.log('Exporting transactions...');
            alert('Export functionality would be implemented here');
        }

        // Profile image upload
        document.getElementById('profileImageInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profileImage').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Initialize Select2 for better dropdowns
        $(document).ready(function() {
            $('.form-control').select2({
                minimumResultsForSearch: Infinity,
                width: '100%'
            });
        });
    </script>
</body>
</html>