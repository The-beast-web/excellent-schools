@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Settings</h3>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block nk-block-lg">
                        <div class="card card-stretch">
                            <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personal-info"><em
                                            class="icon ni ni-b-si"></em><span>Website</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-overview"><em
                                            class="icon ni ni-wallet-fill"></em><span>Payment Gateway</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile-courses"><em
                                            class="icon ni ni-user-fill"></em><span>Admin</span></a>
                                </li>
                            </ul>
                            <div class="card-inner">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personal-info">
                                        <div class="nk-block">
                                            <div class="card">
                                                <div class="card-inner">
                                                    <h5 class="card-title">Website Setting</h5>
                                                    <p>Here is your basic store setting of your website.</p>
                                                    <form action="#" class="gy-3 form-settings">
                                                        <div class="row g-4">
                                                            <div class="col-xxl-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="site-name" class="form-label">Site
                                                                        Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" id="site-name"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="Excellent Schools">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="site-email" class="form-label">Site
                                                                        Email</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" id="site-email"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="info@excellentschools.com">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="site-right" class="form-label">Site
                                                                        Copyright</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" id="site-right"
                                                                            class="form-control form-control-lg"
                                                                            placeholder="&copy; Excellent Schools. All Rights Reserved">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="site-favicon" class="form-label">Site
                                                                        Favicon</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="file" id="site-favicon"
                                                                            class="form-control form-control-lg">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="reg-public" id="site-off">
                                                                        <label class="custom-control-label"
                                                                            for="site-off">Maintanance Mode</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Site Logo</label>
                                                                <div class="upload-zone">
                                                                    <div class="dz-message" data-dz-message>
                                                                        <span class="dz-message-text">Drag and drop
                                                                            file</span>
                                                                        <span class="dz-message-or">or</span>
                                                                        <button class="btn btn-primary">SELECT</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .nk-block -->
                                    </div><!-- tab pane -->
                                    <div class="tab-pane" id="profile-overview">
                                        <div class="nk-block">
                                            <div class="row g-gs">
                                                <div class="col-xxl-6">
                                                    <div class="nk-download shadow">
                                                        <div class="data">
                                                            <div class="thumb"><img src="./images/icons/product-pp.svg"
                                                                    alt=""></div>
                                                            <div class="info">
                                                                <h6 class="title"><span class="name">Paypal</span>
                                                                    <span
                                                                        class="badge badge-dim bg-primary rounded-pill">New</span>
                                                                </h6>
                                                                <div class="meta">
                                                                    <span class="version">
                                                                        <span class="text-soft">Public key: </span>
                                                                        <span>1.3.1</span>
                                                                    </span>
                                                                    <span class="release">
                                                                        <span class="text-soft">Api key: </span>
                                                                        <span>Active</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <a href="#" class="btn btn-secondary">Edit</a>
                                                        </div>
                                                    </div><!-- .sp-pdl-item -->
                                                </div><!-- .col -->
                                                <div class="col-xxl-6">
                                                    <div class="nk-download shadow">
                                                        <div class="data">
                                                            <div class="thumb"><img src="./images/icons/product-ee.svg"
                                                                    alt=""></div>
                                                            <div class="info">
                                                                <h6 class="title"><span class="name">Flutterwave</span>
                                                                </h6>
                                                                <div class="meta">
                                                                    <span class="version">
                                                                        <span class="text-soft">Version: </span>
                                                                        <span>1.3.1</span>
                                                                    </span>
                                                                    <span class="release">
                                                                        <span class="text-soft">Status: </span>
                                                                        <span>Inactive</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <a href="#" class="btn btn-primary">Edit</a>
                                                        </div>
                                                    </div><!-- .sp-pdl-item -->
                                                </div><!-- .col -->
                                                <div class="col-xxl-6">
                                                    <div class="nk-download shadow">
                                                        <div class="data">
                                                            <div class="thumb"><img src="./images/icons/product-cc.svg"
                                                                    alt=""></div>
                                                            <div class="info">
                                                                <h6 class="title"><span class="name">Paystack</span>
                                                                </h6>
                                                                <div class="meta">
                                                                    <span class="version">
                                                                        <span class="text-soft">Version: </span>
                                                                        <span>1.7.2</span>
                                                                    </span>
                                                                    <span class="release">
                                                                        <span class="text-soft">Status: </span>
                                                                        <span>Inactive</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <a href="#" class="btn btn-primary">Edit</a>
                                                        </div>
                                                    </div><!-- .sp-pdl-item -->
                                                </div><!-- .col -->
                                                <div class="col-xxl-12">
                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#addGateway"
                                                        style="height: 50px; border-radius: 50px;">Add New Payment
                                                        Gateway</button>
                                                </div>
                                            </div><!-- .row -->
                                        </div><!-- .nk-block -->
                                    </div><!--tab pane-->
                                    <div class="tab-pane" id="profile-courses">
                                        <div class="nk-block">
                                            <div class="card">
                                                <div class="card-aside-wrap">
                                                    <div class="card-inner card-inner-lg">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="personal">
                                                                <div class="nk-block-head nk-block-head-lg">
                                                                    <div class="nk-block-between">
                                                                        <div class="nk-block-head-content">
                                                                            <h4 class="nk-block-title">Personal Information
                                                                            </h4>
                                                                            <div class="nk-block-des">
                                                                                <p>Basic info, like your name and address,
                                                                                    that you use on Nio Platform.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="nk-block-head-content align-self-start d-lg-none">
                                                                            <a href="#"
                                                                                class="toggle btn btn-icon btn-trigger mt-n1"
                                                                                data-target="userAside"><em
                                                                                    class="icon ni ni-menu-alt-r"></em></a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <div class="nk-data data-list">
                                                                        <div class="data-head">
                                                                            <h6 class="overline-title">Basics</h6>
                                                                        </div>
                                                                        <div class="data-item" data-bs-toggle="modal"
                                                                            data-bs-target="#profile-edit">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Full Name</span>
                                                                                <span class="data-value">Abu Bin
                                                                                    Ishtiyak</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span
                                                                                    class="data-more"><em
                                                                                        class="icon ni ni-forward-ios"></em></span>
                                                                            </div>
                                                                        </div><!-- data-item -->
                                                                        <div class="data-item" data-bs-toggle="modal"
                                                                            data-bs-target="#profile-edit">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Display
                                                                                    Name</span>
                                                                                <span class="data-value">Ishtiyak</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span
                                                                                    class="data-more"><em
                                                                                        class="icon ni ni-forward-ios"></em></span>
                                                                            </div>
                                                                        </div><!-- data-item -->
                                                                        <div class="data-item">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Email</span>
                                                                                <span
                                                                                    class="data-value">info@softnio.com</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span
                                                                                    class="data-more disable"><em
                                                                                        class="icon ni ni-lock-alt"></em></span>
                                                                            </div>
                                                                        </div><!-- data-item -->
                                                                        <div class="data-item" data-bs-toggle="modal"
                                                                            data-bs-target="#profile-edit">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Phone
                                                                                    Number</span>
                                                                                <span class="data-value text-soft">Not add
                                                                                    yet</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span
                                                                                    class="data-more"><em
                                                                                        class="icon ni ni-forward-ios"></em></span>
                                                                            </div>
                                                                        </div><!-- data-item -->
                                                                        <div class="data-item" data-bs-toggle="modal"
                                                                            data-bs-target="#profile-edit">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Date of
                                                                                    Birth</span>
                                                                                <span class="data-value">29 Feb,
                                                                                    1986</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span
                                                                                    class="data-more"><em
                                                                                        class="icon ni ni-forward-ios"></em></span>
                                                                            </div>
                                                                        </div><!-- data-item -->
                                                                        <div class="data-item" data-bs-toggle="modal"
                                                                            data-bs-target="#profile-edit"
                                                                            data-tab-target="#address">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Address</span>
                                                                                <span class="data-value">2337 Kildeer
                                                                                    Drive,<br>Kentucky, Canada</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span
                                                                                    class="data-more"><em
                                                                                        class="icon ni ni-forward-ios"></em></span>
                                                                            </div>
                                                                        </div><!-- data-item -->
                                                                    </div><!-- data-list -->
                                                                    <div class="nk-data data-list">
                                                                        <div class="data-head">
                                                                            <h6 class="overline-title">Preferences</h6>
                                                                        </div>
                                                                        <div class="data-item">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Language</span>
                                                                                <span class="data-value">English (United
                                                                                    State)</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><a
                                                                                    data-bs-toggle="modal"
                                                                                    href="#profile-edit"
                                                                                    class="link link-primary">Change
                                                                                    Language</a></div>
                                                                        </div><!-- data-item -->
                                                                        <div class="data-item">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Dark Mode</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><a
                                                                                    href="#" class="dark-switch"><em
                                                                                        class="icon ni ni-moon"></em></a>
                                                                            </div>
                                                                        </div><!-- data-item -->
                                                                    </div><!-- data-list -->
                                                                </div><!-- .nk-block -->
                                                            </div><!-- .tab-pane -->
                                                            <div class="tab-pane" id="notification">
                                                                <div class="nk-block-head nk-block-head-lg">
                                                                    <div class="nk-block-between">
                                                                        <div class="nk-block-head-content">
                                                                            <h4 class="nk-block-title">Notification
                                                                                Settings</h4>
                                                                            <div class="nk-block-des">
                                                                                <p>You will get only notification what have
                                                                                    enabled.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="nk-block-head-content align-self-start d-lg-none">
                                                                            <a href="#"
                                                                                class="toggle btn btn-icon btn-trigger mt-n1"
                                                                                data-target="userAside"><em
                                                                                    class="icon ni ni-menu-alt-r"></em></a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block-head nk-block-head-sm">
                                                                    <div class="nk-block-head-content">
                                                                        <h6>Security Alerts</h6>
                                                                        <p>You will get only those email notification what
                                                                            you want.</p>
                                                                    </div>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block-content">
                                                                    <div class="gy-3">
                                                                        <div class="g-item">
                                                                            <div class="custom-control custom-switch">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input" checked
                                                                                    id="unusual-activity">
                                                                                <label class="custom-control-label"
                                                                                    for="unusual-activity">Email me
                                                                                    whenever encounter unusual
                                                                                    activity</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="g-item">
                                                                            <div class="custom-control custom-switch">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="new-browser">
                                                                                <label class="custom-control-label"
                                                                                    for="new-browser">Email me if new
                                                                                    browser is used to sign in</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-block-content -->
                                                                <div class="nk-block-head nk-block-head-sm">
                                                                    <div class="nk-block-head-content">
                                                                        <h6>News</h6>
                                                                        <p>You will get only those email notification what
                                                                            you want.</p>
                                                                    </div>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block-content">
                                                                    <div class="gy-3">
                                                                        <div class="g-item">
                                                                            <div class="custom-control custom-switch">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input" checked
                                                                                    id="latest-sale">
                                                                                <label class="custom-control-label"
                                                                                    for="latest-sale">Notify me by email
                                                                                    about sales and latest news</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="g-item">
                                                                            <div class="custom-control custom-switch">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="feature-update">
                                                                                <label class="custom-control-label"
                                                                                    for="feature-update">Email me about new
                                                                                    features and updates</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="g-item">
                                                                            <div class="custom-control custom-switch">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input" checked
                                                                                    id="account-tips">
                                                                                <label class="custom-control-label"
                                                                                    for="account-tips">Email me about tips
                                                                                    on using account</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-block-content -->
                                                            </div><!-- .tab-pane -->
                                                            <div class="tab-pane" id="settings">
                                                                <div class="nk-block-head nk-block-head-lg">
                                                                    <div class="nk-block-between">
                                                                        <div class="nk-block-head-content">
                                                                            <h4 class="nk-block-title">Security Settings
                                                                            </h4>
                                                                            <div class="nk-block-des">
                                                                                <p>These settings are helps you keep your
                                                                                    account secure.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="nk-block-head-content align-self-start d-lg-none">
                                                                            <a href="#"
                                                                                class="toggle btn btn-icon btn-trigger mt-n1"
                                                                                data-target="userAside"><em
                                                                                    class="icon ni ni-menu-alt-r"></em></a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <div class="card">
                                                                        <div class="card-inner-group">
                                                                            <div class="card-inner">
                                                                                <div
                                                                                    class="between-center flex-wrap flex-md-nowrap g-3">
                                                                                    <div class="nk-block-text">
                                                                                        <h6>Save my Activity Logs</h6>
                                                                                        <p>You can save your all activity
                                                                                            logs including unusual activity
                                                                                            detected.</p>
                                                                                    </div>
                                                                                    <div class="nk-block-actions">
                                                                                        <ul class="align-center gx-3">
                                                                                            <li class="order-md-last">
                                                                                                <div
                                                                                                    class="custom-control custom-switch me-n2">
                                                                                                    <input type="checkbox"
                                                                                                        class="custom-control-input"
                                                                                                        checked=""
                                                                                                        id="activity-log">
                                                                                                    <label
                                                                                                        class="custom-control-label"
                                                                                                        for="activity-log"></label>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- .card-inner -->
                                                                            <div class="card-inner">
                                                                                <div class="between-center flex-wrap g-3">
                                                                                    <div class="nk-block-text">
                                                                                        <h6>Change Password</h6>
                                                                                        <p>Set a unique password to protect
                                                                                            your account.</p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="nk-block-actions flex-shrink-sm-0">
                                                                                        <ul
                                                                                            class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                                                            <li class="order-md-last">
                                                                                                <a href="#"
                                                                                                    class="btn btn-primary">Change
                                                                                                    Password</a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <em
                                                                                                    class="text-soft text-date fs-12px">Last
                                                                                                    changed: <span>Oct 2,
                                                                                                        2019</span></em>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- .card-inner -->
                                                                            <div class="card-inner">
                                                                                <div
                                                                                    class="between-center flex-wrap flex-md-nowrap g-3">
                                                                                    <div class="nk-block-text">
                                                                                        <h6>2 Factor Auth &nbsp; <span
                                                                                                class="badge bg-success ms-0">Enabled</span>
                                                                                        </h6>
                                                                                        <p>Secure your account with 2FA
                                                                                            security. When it is activated
                                                                                            you will need to enter not only
                                                                                            your password, but also a
                                                                                            special code using app. You can
                                                                                            receive this code by in mobile
                                                                                            app. </p>
                                                                                    </div>
                                                                                    <div class="nk-block-actions">
                                                                                        <a href="#"
                                                                                            class="btn btn-primary">Disable</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- .card-inner -->
                                                                        </div><!-- .card-inner-group -->
                                                                    </div><!-- .card -->
                                                                </div><!-- .nk-block -->
                                                            </div><!-- .tab-pane -->
                                                            <div class="tab-pane" id="activity">
                                                                <div class="nk-block-head nk-block-head-lg">
                                                                    <div class="nk-block-between">
                                                                        <div class="nk-block-head-content">
                                                                            <h4 class="nk-block-title">Login Activity</h4>
                                                                            <div class="nk-block-des">
                                                                                <p>Here is your last 20 login activities
                                                                                    log. <span class="text-soft"><em
                                                                                            class="icon ni ni-info"></em></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="nk-block-head-content align-self-start d-lg-none">
                                                                            <a href="#"
                                                                                class="toggle btn btn-icon btn-trigger mt-n1"
                                                                                data-target="userAside"><em
                                                                                    class="icon ni ni-menu-alt-r"></em></a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block card">
                                                                    <table class="table table-ulogs">
                                                                        <thead class="table-light">
                                                                            <tr>
                                                                                <th class="tb-col-os"><span
                                                                                        class="overline-title">Browser
                                                                                        <span class="d-sm-none">/
                                                                                            IP</span></span></th>
                                                                                <th class="tb-col-ip"><span
                                                                                        class="overline-title">IP</span>
                                                                                </th>
                                                                                <th class="tb-col-time"><span
                                                                                        class="overline-title">Time</span>
                                                                                </th>
                                                                                <th class="tb-col-action"><span
                                                                                        class="overline-title">&nbsp;</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="tb-col-os">Chrome on Window</td>
                                                                                <td class="tb-col-ip"><span
                                                                                        class="sub-text">192.149.122.128</span>
                                                                                </td>
                                                                                <td class="tb-col-time"><span
                                                                                        class="sub-text">11:34 PM</span>
                                                                                </td>
                                                                                <td class="tb-col-action"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tb-col-os">Mozilla on Window
                                                                                </td>
                                                                                <td class="tb-col-ip"><span
                                                                                        class="sub-text">86.188.154.225</span>
                                                                                </td>
                                                                                <td class="tb-col-time"><span
                                                                                        class="sub-text">Nov 20, 2019 <span
                                                                                            class="d-none d-sm-inline-block">10:34
                                                                                            PM</span></span></td>
                                                                                <td class="tb-col-action"><a
                                                                                        href="#"
                                                                                        class="link-cross me-sm-n1"><em
                                                                                            class="icon ni ni-cross"></em></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tb-col-os">Chrome on iMac</td>
                                                                                <td class="tb-col-ip"><span
                                                                                        class="sub-text">192.149.122.128</span>
                                                                                </td>
                                                                                <td class="tb-col-time"><span
                                                                                        class="sub-text">Nov 12, 2019 <span
                                                                                            class="d-none d-sm-inline-block">08:56
                                                                                            PM</span></span></td>
                                                                                <td class="tb-col-action"><a
                                                                                        href="#"
                                                                                        class="link-cross me-sm-n1"><em
                                                                                            class="icon ni ni-cross"></em></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tb-col-os">Chrome on Window</td>
                                                                                <td class="tb-col-ip"><span
                                                                                        class="sub-text">192.149.122.128</span>
                                                                                </td>
                                                                                <td class="tb-col-time"><span
                                                                                        class="sub-text">Nov 03, 2019 <span
                                                                                            class="d-none d-sm-inline-block">04:29
                                                                                            PM</span></span></td>
                                                                                <td class="tb-col-action"><a
                                                                                        href="#"
                                                                                        class="link-cross me-sm-n1"><em
                                                                                            class="icon ni ni-cross"></em></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tb-col-os">Mozilla on Window
                                                                                </td>
                                                                                <td class="tb-col-ip"><span
                                                                                        class="sub-text">86.188.154.225</span>
                                                                                </td>
                                                                                <td class="tb-col-time"><span
                                                                                        class="sub-text">Oct 29, 2019 <span
                                                                                            class="d-none d-sm-inline-block">09:38
                                                                                            AM</span></span></td>
                                                                                <td class="tb-col-action"><a
                                                                                        href="#"
                                                                                        class="link-cross me-sm-n1"><em
                                                                                            class="icon ni ni-cross"></em></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tb-col-os">Chrome on iMac</td>
                                                                                <td class="tb-col-ip"><span
                                                                                        class="sub-text">192.149.122.128</span>
                                                                                </td>
                                                                                <td class="tb-col-time"><span
                                                                                        class="sub-text">Oct 23, 2019 <span
                                                                                            class="d-none d-sm-inline-block">04:16
                                                                                            PM</span></span></td>
                                                                                <td class="tb-col-action"><a
                                                                                        href="#"
                                                                                        class="link-cross me-sm-n1"><em
                                                                                            class="icon ni ni-cross"></em></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tb-col-os">Chrome on Window</td>
                                                                                <td class="tb-col-ip"><span
                                                                                        class="sub-text">192.149.122.128</span>
                                                                                </td>
                                                                                <td class="tb-col-time"><span
                                                                                        class="sub-text">Oct 15, 2019 <span
                                                                                            class="d-none d-sm-inline-block">11:41
                                                                                            PM</span></span></td>
                                                                                <td class="tb-col-action"><a
                                                                                        href="#"
                                                                                        class="link-cross me-sm-n1"><em
                                                                                            class="icon ni ni-cross"></em></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tb-col-os">Mozilla on Window
                                                                                </td>
                                                                                <td class="tb-col-ip"><span
                                                                                        class="sub-text">86.188.154.225</span>
                                                                                </td>
                                                                                <td class="tb-col-time"><span
                                                                                        class="sub-text">Oct 13, 2019 <span
                                                                                            class="d-none d-sm-inline-block">05:43
                                                                                            AM</span></span></td>
                                                                                <td class="tb-col-action"><a
                                                                                        href="#"
                                                                                        class="link-cross me-sm-n1"><em
                                                                                            class="icon ni ni-cross"></em></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="tb-col-os">Chrome on iMac</td>
                                                                                <td class="tb-col-ip"><span
                                                                                        class="sub-text">192.149.122.128</span>
                                                                                </td>
                                                                                <td class="tb-col-time"><span
                                                                                        class="sub-text">Oct 03, 2019 <span
                                                                                            class="d-none d-sm-inline-block">04:12
                                                                                            AM</span></span></td>
                                                                                <td class="tb-col-action"><a
                                                                                        href="#"
                                                                                        class="link-cross me-sm-n1"><em
                                                                                            class="icon ni ni-cross"></em></a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div><!-- .nk-block-head -->
                                                            </div><!-- .tab-pane -->
                                                        </div><!-- .tab-content -->
                                                    </div>
                                                    <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg"
                                                        data-content="userAside" data-toggle-screen="lg"
                                                        data-toggle-overlay="true">
                                                        <div class="card-inner-group" data-simplebar>
                                                            <div class="card-inner">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-primary">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                                        <span class="sub-text">info@softnio.com</span>
                                                                    </div>
                                                                    <div class="user-action">
                                                                        <div class="dropdown">
                                                                            <a class="btn btn-icon btn-trigger me-n2"
                                                                                data-bs-toggle="dropdown"
                                                                                href="#"><em
                                                                                    class="icon ni ni-more-v"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-camera-fill"></em><span>Change
                                                                                                Photo</span></a></li>
                                                                                    <li><a href="#"><em
                                                                                                class="icon ni ni-edit-fill"></em><span>Update
                                                                                                Profile</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .user-card -->
                                                            </div><!-- .card-inner -->
                                                            <div class="card-inner">
                                                                <div class="user-account-info py-0">
                                                                    <h6 class="overline-title-alt">Last Login</h6>
                                                                    <p>06-29-2020 02:39pm</p>
                                                                    <h6 class="overline-title-alt">Login IP</h6>
                                                                    <p>192.129.243.28</p>
                                                                </div>
                                                                <div class="mt-4">
                                                                    <a href="#admin-add" data-bs-toggle="modal"
                                                                        class="btn btn-primary btn-block">
                                                                        Add New Admin
                                                                    </a>
                                                                </div>

                                                            </div><!-- .card-inner -->
                                                            <div class="card-inner p-0">
                                                                <ul class="link-list-menu nav nav-tabs">
                                                                    <li><a data-bs-toggle="tab" href="#personal"
                                                                            class="active" href="#"><em
                                                                                class="icon ni ni-user-fill-c"></em><span>Personal
                                                                                Infomation</span></a></li>
                                                                    <li><a data-bs-toggle="tab" href="#notification"
                                                                            href="#"><em
                                                                                class="icon ni ni-bell-fill"></em><span>Notifications</span></a>
                                                                    </li>
                                                                    <li><a data-bs-toggle="tab" href="#settings"
                                                                            href="#"><em
                                                                                class="icon ni ni-lock-alt-fill"></em><span>Security
                                                                                Settings</span></a></li>
                                                                    <li><a data-bs-toggle="tab" href="#activity"
                                                                            href="#"><em
                                                                                class="icon ni ni-activity-round-fill"></em><span>Account
                                                                                Activity</span></a></li>
                                                                </ul>
                                                            </div><!-- .card-inner -->
                                                        </div><!-- .card-inner-group -->
                                                    </div><!-- card-aside -->
                                                </div><!-- .card-aside-wrap -->
                                            </div><!-- .card -->
                                        </div><!-- .nk-block -->
                                    </div><!--tab pane-->
                                </div><!--tab content-->
                            </div><!--card inner-->
                        </div><!--card-->
                    </div><!--nk block lg-->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Content Code -->
    <div class="modal fade zoom" tabindex="-1" id="addGateway">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title" style="font-family: Cambria;">Add New Payment Gateway</h5>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="product-title">Public Key</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="product-title">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="product-title">API Key</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="product-title">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Payment Gateway Image</label>
                            <div class="upload-zone">
                                <div class="dz-message" data-dz-message>
                                    <span class="dz-message-text">Drag and drop file</span>
                                    <span class="dz-message-or">or</span>
                                    <button class="btn btn-primary">SELECT</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                    New</span></button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">&copy; Copyright, The Beastist. All rights reserved</span>
                </div>
            </div>
        </div>
    </div>
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade zoom" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name"
                                            value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Display Name</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name"
                                            value="Ishtiyak" placeholder="Enter display name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no"
                                            value="+880" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <input type="text" class="form-control form-control-lg date-picker"
                                            id="birth-day" placeholder="Enter your birth date">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="latest-sale">
                                        <label class="custom-control-label" for="latest-sale">Use full name to display
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal"
                                                class="btn btn-lg btn-primary">Update Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Address Line 1</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1"
                                            value="2337 Kildeer Drive">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Address Line 2</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l2"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">State</label>
                                        <input type="text" class="form-control form-control-lg" id="address-st"
                                            value="Kentucky">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-county">Country</label>
                                        <select class="form-select js-select2" id="address-county" data-ui="lg">
                                            <option>Canada</option>
                                            <option>United State</option>
                                            <option>United Kindom</option>
                                            <option>Australia</option>
                                            <option>India</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Address</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade zoom" tabindex="-1" id="admin-add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-header">
                    <h5 class="modal-title" style="font-family: Cambria;">Add New Admin</h5>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="product-title">Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control form-control-lg" id="product-title"
                                        placeholder="e.g Harrison Ehiogu">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="product-title">Email</label>
                                <div class="form-control-wrap">
                                    <input type="email" class="form-control form-control-lg" id="product-title"
                                        placeholder="example@example.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="product-title">Passcode</label>
                                <div class="form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                        data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        id="password" placeholder="Enter Admin's Passcode">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Profile Picture</label>
                            <div class="upload-zone">
                                <div class="dz-message" data-dz-message>
                                    <span class="dz-message-text">Drag and drop file</span>
                                    <span class="dz-message-or">or</span>
                                    <button class="btn btn-primary">SELECT</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary"><em class="icon ni ni-user"></em><span>Add
                                    Admin</span></button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">&copy; Copyright, The Beastist. All rights reserved</span>
                </div>
            </div>
        </div>
    </div>
@endsection
